<?php get_header(); ?>
<?php
if (!is_user_logged_in()) {

    echo '<div class="flex items-center justify-center min-h-screen bg-gray-50">';
    echo '<div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-lg">';

    wp_login_form(array(
        'redirect' => home_url(),
        'form_id' => 'loginform',
        'label_username' => __( 'Username' ),
        'label_password' => __( 'Password' ),
        'label_remember' => __( 'Remember Me' ),
        'label_log_in' => __( 'Log In' ),
        'remember' => true,

        // Tailwind classes
        'id_username' => 'user_login',
        'id_password' => 'user_pass',

        'echo' => true,
    ));

    echo '</div>';
    echo '</div>';

} else {
global $wpdb;
$projects = get_posts([
    'post_type' => 'ps_project',
    'numberposts' => -1,
    'post_status' => 'publish',
]);

$total_projects = count($projects);
$tasks_table = $wpdb->prefix . 'ps_tasks';
$files_table = $wpdb->prefix . 'ps_files';
$all_tasks = [];
$project_stats = [];
$recent_activities = [];

// Add recently created projects to activity feed
foreach ($projects as $project) {
    $project_time = strtotime($project->post_date);
    $now = current_time('timestamp');
    $age_hours = ($now - $project_time) / 3600;
    
    // Show projects created in the last 24 hours
    if ($age_hours < 24) {
        $creator = get_userdata($project->post_author);
        $creator_name = $creator ? $creator->display_name : 'System';
        
        $recent_activities[] = [
            'type' => 'project',
            'title' => $project->post_title,
            'project_id' => $project->ID,
            'user_id' => $project->post_author,
            'time' => $project->post_date,
            'label' => 'Project Created',
            'action' => 'created',
        ];
    }
}

if ($wpdb->get_var($wpdb->prepare('SHOW TABLES LIKE %s', $tasks_table)) === $tasks_table) {
    $all_tasks = $wpdb->get_results("SELECT * FROM {$tasks_table} ORDER BY created_at DESC");
    foreach ($all_tasks as $task) {
        $project_id = intval($task->project_id);

        if (!isset($project_stats[$project_id])) {
            $project_stats[$project_id] = [
                'total' => 0,
                'completed' => 0,
                'pending' => 0,
                'workers' => [],
                'deadline' => null,
            ];
        }

        $project_stats[$project_id]['total']++;

        if (strtolower($task->status) === 'completed') {
            $project_stats[$project_id]['completed']++;
        } else {
            $project_stats[$project_id]['pending']++;
        }

        if (!empty($task->assigned_to)) {
            $project_stats[$project_id]['workers'][intval($task->assigned_to)] = true;
        }

        if (!empty($task->deadline)) {
            $deadline = $task->deadline;
            if (empty($project_stats[$project_id]['deadline']) || strtotime($deadline) < strtotime($project_stats[$project_id]['deadline'])) {
                $project_stats[$project_id]['deadline'] = $deadline;
            }
        }

        $recent_activities[] = [
            'type' => 'task',
            'title' => $task->title,
            'description' => $task->description,
            'user_id' => intval($task->assigned_to),
            'time' => $task->created_at,
            'label' => ucfirst($task->status ?: 'pending'),
            'action' => strtolower($task->status) === 'completed' ? 'completed' : 'updated',
        ];
    }
}

if ($wpdb->get_var($wpdb->prepare('SHOW TABLES LIKE %s', $files_table)) === $files_table) {
    $files = $wpdb->get_results("SELECT * FROM {$files_table} ORDER BY created_at DESC LIMIT 4");
    foreach ($files as $file) {
        $recent_activities[] = [
            'type' => 'file',
            'file_url' => $file->file_url,
            'project_id' => intval($file->project_id),
            'user_id' => intval($file->uploaded_by),
            'time' => $file->created_at,
            'label' => 'File Upload',
            'action' => 'uploaded',
        ];
    }
}

usort($recent_activities, function ($a, $b) {
    return strtotime($b['time']) - strtotime($a['time']);
});
$recent_activities = array_slice($recent_activities, 0, 4);

$active_tasks = 0;
$completed_tasks = 0;
foreach ($all_tasks as $task) {
    if (strtolower($task->status) === 'completed') {
        $completed_tasks++;
    } else {
        $active_tasks++;
    }
}
$project_display = array_slice($projects, 0, 3);
?>
<body class="bg-background text-on-surface font-body selection:bg-primary-container">
<!-- SideNavBar Shell -->
<?php get_template_part('template-parts/sidebar'); ?>

<!-- TopNavBar Shell -->

<?php get_template_part('template-parts/topbar'); ?>

<!-- Main Content Canvas -->
<main class="ml-64 pt-24 pb-12 px-12 min-h-screen">
<!-- Breadcrumbs & Header -->
<div class="mb-10 flex items-end justify-between">
<div>
<nav class="flex items-center gap-2 text-xs text-on-surface-variant font-label mb-2">
<a class="hover:text-primary" href="#" style="">System</a>
<span class="material-symbols-outlined text-[14px]" style="">chevron_right</span>
<span class="text-on-surface font-medium" style="">Dashboard Overview</span>
</nav>
<h2 class="text-4xl font-extrabold tracking-tight font-headline text-on-surface" style="">Operations Control</h2>
</div>
<div class="flex items-center gap-3">
    <button type="button" id="ps-new-project-toggle" class="px-5 py-2.5 bg-primary text-on-primary text-sm font-semibold rounded-lg hover:bg-primary-dim transition-all shadow-lg shadow-primary/20 flex items-center gap-2">
        <span class="material-symbols-outlined text-[18px]">add</span>
        New Project
    </button>
</div>
</div>
<div id="ps-new-project-panel" class="mb-10 p-6 rounded-xl shadow-sm bg-surface-container-lowest hidden">
    <div class="flex items-center justify-between mb-4">
        <h3 class="text-lg font-bold text-on-surface">Create a New Project</h3>
        <button type="button" id="ps-new-project-close" class="text-on-surface-variant hover:text-on-surface">Cancel</button>
    </div>
    <form id="ps-new-project-form" class="space-y-4">
        <div>
            <label for="ps-project-title" class="block text-sm font-medium text-on-surface-variant">Project Title</label>
            <input id="ps-project-title" name="title" type="text" class="mt-2 w-full rounded-lg border border-outline-variant px-4 py-3 bg-surface-container-high text-on-surface" placeholder="Enter project name" required>
        </div>
        <div>
            <label for="ps-project-description" class="block text-sm font-medium text-on-surface-variant">Project Description</label>
            <textarea id="ps-project-description" name="description" rows="4" class="mt-2 w-full rounded-lg border border-outline-variant px-4 py-3 bg-surface-container-high text-on-surface" placeholder="Describe the project"></textarea>
        </div>
        <div class="flex items-center gap-3">
            <button type="submit" class="px-5 py-2.5 bg-primary text-on-primary text-sm font-semibold rounded-lg hover:bg-primary-dim transition-all">Create Project</button>
            <span id="ps-new-project-message" class="text-sm text-on-surface-variant"></span>
        </div>
    </form>
</div>
<!-- Metric Grid -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
<div class="bg-surface-container-lowest p-8 rounded-xl shadow-sm relative overflow-hidden group">
<div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
<span class="material-symbols-outlined text-7xl" data-icon="inventory_2" style="">inventory_2</span>
</div>
<p class="text-sm font-label text-on-surface-variant mb-4 uppercase tracking-widest" style="">Total Projects</p>
<div class="flex items-baseline gap-3">
<span class="text-5xl font-extrabold font-headline text-on-surface" style=""><?php echo esc_html($total_projects); ?></span>
<span class="text-xs font-bold text-primary flex items-center bg-primary-container px-2 py-0.5 rounded-full" style="">
<span class="material-symbols-outlined text-[12px] mr-1" style="">trending_up</span>
                        <?php echo esc_html($total_projects ? '+' . max(0, $total_projects - 1) : '0'); ?>
                    </span>
</div>
</div>
<div class="bg-surface-container-lowest p-8 rounded-xl shadow-sm relative overflow-hidden group border-l-4 border-tertiary-fixed">
<div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
<span class="material-symbols-outlined text-7xl" data-icon="assignment" style="">assignment</span>
</div>
<p class="text-sm font-label text-on-surface-variant mb-4 uppercase tracking-widest" style="">Active Tasks</p>
<div class="flex items-baseline gap-3">
<span class="text-5xl font-extrabold font-headline text-on-surface" style=""><?php echo esc_html($active_tasks); ?></span>
<span class="text-xs font-bold text-on-surface-variant" style="">Ongoing</span>
</div>
</div>
<div class="bg-surface-container-lowest p-8 rounded-xl shadow-sm relative overflow-hidden group">
<div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
<span class="material-symbols-outlined text-7xl" data-icon="check_circle" style="">check_circle</span>
</div>
<p class="text-sm font-label text-on-surface-variant mb-4 uppercase tracking-widest" style="">Completed</p>
<div class="flex items-baseline gap-3">
<span class="text-5xl font-extrabold font-headline text-on-surface" style=""><?php echo esc_html($completed_tasks); ?></span>
<span class="text-xs font-bold text-secondary flex items-center bg-secondary-container px-2 py-0.5 rounded-full" style="">
<span class="material-symbols-outlined text-[12px] mr-1" style="">history</span>
                        Lifetime
                    </span>
</div>
</div>
</div>
<!-- Asymmetric Bento Layout -->
<div class="grid grid-cols-12 gap-8 items-start">
<!-- Quick Project Summary (8 cols) -->
<div class="col-span-12 lg:col-span-8 space-y-8">
<section class="bg-surface-container-lowest rounded-xl p-8 shadow-sm">
<div class="flex items-center justify-between mb-8">
<div>
<h3 class="text-xl font-bold font-headline text-on-surface" style="">Priority Directives</h3>
<p class="text-sm text-on-surface-variant mt-1" style="">Status overview of top-tier manufacturing lines</p>
</div>
<a class="text-primary text-sm font-semibold hover:underline" href="#" style="">View all projects</a>
</div>
<div class="space-y-6">
<?php if (!empty($project_display)) : ?>
    <?php foreach ($project_display as $project) :
        $stats = isset($project_stats[$project->ID]) ? $project_stats[$project->ID] : [
            'total' => 0,
            'completed' => 0,
            'pending' => 0,
            'workers' => [],
            'deadline' => null,
        ];
        $completed = $stats['completed'];
        $total = $stats['total'];
        $progress = $total ? round(($completed / $total) * 100) : 0;
        $status_text = $progress === 100 ? 'Completed' : ($completed > 0 ? 'In Production' : 'Planning');
        $status_class = $progress === 100 ? 'bg-secondary-container text-on-secondary-container' : 'bg-secondary-container text-on-secondary-container';
        $workers = count($stats['workers']);
        $due = $stats['deadline'] ? date_i18n('M j', strtotime($stats['deadline'])) : 'TBD';
    ?>
    <div class="flex items-center gap-6 p-4 rounded-lg hover:bg-surface-container-low transition-colors group">
        <div class="w-12 h-12 bg-primary-container rounded-xl flex items-center justify-center text-primary">
            <span class="material-symbols-outlined" style="">precision_manufacturing</span>
        </div>
        <div class="flex-1">
            <div class="flex justify-between items-center mb-2">
                <h4 class="font-bold text-on-surface" style=""><?php echo esc_html(get_the_title($project)); ?></h4>
                <span class="flex items-center gap-1.5 px-3 py-1 rounded-full <?php echo esc_attr($status_class); ?> text-[10px] font-bold uppercase tracking-wider" style="">
                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                    <?php echo esc_html($status_text); ?>
                </span>
            </div>
            <div class="w-full bg-surface-container-high h-2 rounded-full overflow-hidden">
                <div class="bg-primary h-full rounded-full" style="width: <?php echo esc_attr($progress); ?>%"></div>
            </div>
            <div class="flex justify-between mt-2">
                <span class="text-[11px] font-label text-on-surface-variant" style=""><?php echo esc_html($progress); ?>% Progress • <?php echo esc_html($workers); ?> Active Workers</span>
                <span class="text-[11px] font-bold text-on-surface" style="">Due <?php echo esc_html($due); ?></span>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
<?php else : ?>
    <div class="flex items-center gap-6 p-4 rounded-lg hover:bg-surface-container-low transition-colors group">
        <div class="w-12 h-12 bg-primary-container rounded-xl flex items-center justify-center text-primary">
            <span class="material-symbols-outlined" style="">inventory_2</span>
        </div>
        <div class="flex-1">
            <div class="flex justify-between items-center mb-2">
                <h4 class="font-bold text-on-surface" style="">No projects available</h4>
                <span class="flex items-center gap-1.5 px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container text-[10px] font-bold uppercase tracking-wider" style="">
                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                    Empty
                </span>
            </div>
            <div class="w-full bg-surface-container-high h-2 rounded-full overflow-hidden">
                <div class="bg-primary h-full rounded-full" style="width: 0%"></div>
            </div>
            <div class="flex justify-between mt-2">
                <span class="text-[11px] font-label text-on-surface-variant" style="">No active tasks yet</span>
                <span class="text-[11px] font-bold text-on-surface" style="">Add a project</span>
            </div>
        </div>
    </div>
<?php endif; ?>
</div>
</section>

<!-- Recent Activity (4 cols) -->
<div class="col-span-12 lg:col-span-4 h-full">
<section class="bg-surface-container-low rounded-xl p-8 h-full">
<h3 class="text-xl font-bold font-headline text-on-surface mb-8" style="">System Ledger</h3>
<div class="relative">
<!-- Timeline Line -->
<div class="absolute left-3 top-0 bottom-0 w-[1px] bg-slate-300/50"></div>
<div class="space-y-10 relative">
<?php if (!empty($recent_activities)) : ?>
    <?php foreach ($recent_activities as $activity) :
        if ($activity['type'] === 'project') {
            $user = get_userdata($activity['user_id']);
            $actor = $user ? $user->display_name : 'System';
            $label = $activity['label'];
            $detail = esc_html($activity['title']);
        } elseif ($activity['type'] === 'task') {
            $user = get_userdata($activity['user_id']);
            $actor = $user ? $user->display_name : 'System';
            $label = $activity['label'];
            $summary = sprintf('%s %s', $actor, $activity['action']);
            $detail = esc_html($activity['title']);
        } else {
            $user = get_userdata($activity['user_id']);
            $actor = $user ? $user->display_name : 'System';
            $label = $activity['label'];
            $summary = sprintf('%s %s', $actor, $activity['action']);
            $detail = esc_html(basename($activity['file_url']));
        }
        $time_text = human_time_diff(strtotime($activity['time']), current_time('timestamp')) . ' ago';
    ?>
    <div class="flex gap-6 relative">
        <div class="z-10 w-6 h-6 rounded-full bg-white border-2 border-primary flex items-center justify-center shrink-0">
            <div class="w-2 h-2 bg-primary rounded-full"></div>
        </div>
        <div>
            <p class="text-sm text-on-surface leading-relaxed" style="">
                <span class="font-bold" style=""><?php echo esc_html($actor); ?></span>&nbsp;<?php echo esc_html($activity['action']); ?>
                <?php if ($activity['type'] === 'project') : ?>
                    <a class="text-primary font-medium" href="#" style=""><?php echo $detail; ?></a>
                <?php elseif ($activity['type'] === 'task') : ?>
                    <a class="text-primary font-medium" href="#" style=""><?php echo $detail; ?></a>
                <?php else : ?>
                    <span class="italic text-on-surface-variant" style=""><?php echo $detail; ?></span> to Files
                <?php endif; ?>
            </p>
            <p class="text-[11px] text-on-surface-variant mt-1" style=""><?php echo esc_html($time_text); ?> • <?php echo esc_html($label); ?></p>
        </div>
    </div>
    <?php endforeach; ?>
<?php else : ?>
    <div class="flex gap-6 relative">
        <div class="z-10 w-6 h-6 rounded-full bg-white border-2 border-slate-300 flex items-center justify-center shrink-0">
            <div class="w-2 h-2 bg-slate-300 rounded-full"></div>
        </div>
        <div>
            <p class="text-sm text-on-surface leading-relaxed" style="">No recent activity has been recorded yet.</p>
            <p class="text-[11px] text-on-surface-variant mt-1" style="">Check your projects and tasks to populate the ledger.</p>
        </div>
    </div>
<?php endif; ?>
</div>
</div>

</section>
</div>
</div>
</main>
<script type="text/javascript">
(function () {
    const toggleButton = document.getElementById('ps-new-project-toggle');
    const closeButton = document.getElementById('ps-new-project-close');
    const panel = document.getElementById('ps-new-project-panel');
    const form = document.getElementById('ps-new-project-form');
    const message = document.getElementById('ps-new-project-message');
    const restUrl = '<?php echo esc_url(rest_url('ps/v1/projects')); ?>';
    const nonce = '<?php echo esc_js(wp_create_nonce('wp_rest')); ?>';

    if (!toggleButton || !panel || !form) {
        return;
    }

    function setMessage(text, success) {
        message.textContent = text;
        message.style.color = success ? '#0b8043' : '#b00020';
    }

    toggleButton.addEventListener('click', function () {
        panel.classList.toggle('hidden');
        if (!panel.classList.contains('hidden')) {
            document.getElementById('ps-project-title').focus();
        }
    });

    if (closeButton) {
        closeButton.addEventListener('click', function () {
            panel.classList.add('hidden');
            setMessage('', true);
            form.reset();
        });
    }

    form.addEventListener('submit', function (event) {
        event.preventDefault();
        setMessage('Creating project...', true);

        const data = {
            title: form.title.value.trim(),
            description: form.description.value.trim(),
        };

        if (!data.title) {
            setMessage('Please enter a project title.', false);
            return;
        }

        fetch(restUrl, {
            method: 'POST',
            credentials: 'same-origin',
            headers: {
                'Content-Type': 'application/json;charset=UTF-8',
                'X-WP-Nonce': nonce,
            },
            body: JSON.stringify(data),
        })
            .then((response) => response.json())
            .then((result) => {
                if (result && !result.data) {
                    setMessage('Project created successfully. Refreshing...', true);
                    window.location.reload();
                } else {
                    const error = result.data ? result.data.message : 'Unable to create project.';
                    setMessage(error, false);
                }
            })
            .catch(() => {
                setMessage('Project creation failed. Please try again.', false);
            });
    });
})();
</script>
<?php } ?>
</body></html>