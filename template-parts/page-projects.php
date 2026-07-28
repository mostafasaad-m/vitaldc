<?php
/**
 * Template Name: Projects Page
 */
?>

<?php
global $wpdb;

$projects = get_posts([
    'post_type' => 'ps_project',
    'numberposts' => -1,
    'post_status' => 'publish',
]);

$tasks_table = $wpdb->prefix . 'ps_tasks';
$project_stats = [];
$project_statuses = [];

foreach ($projects as $project) {
    $project_statuses[$project->ID] = get_post_meta($project->ID, '_ps_project_status', true) ?: 'pending';
}

if ($wpdb->get_var($wpdb->prepare('SHOW TABLES LIKE %s', $tasks_table)) === $tasks_table) {
    $all_tasks = $wpdb->get_results("SELECT * FROM {$tasks_table}");
    
    foreach ($all_tasks as $task) {
        $project_id = intval($task->project_id);
        
        if (!isset($project_stats[$project_id])) {
            $project_stats[$project_id] = [
                'total' => 0,
                'completed' => 0,
                'pending' => 0,
                'workers' => [],
                'deadline' => null,
                'status' => $project_statuses[$project_id] ?? 'pending',
            ];
        }
        
        $project_stats[$project_id]['total']++;
        
        if (strtolower($task->status) === 'completed') {
            $project_stats[$project_id]['completed']++;
        } else {
            $project_stats[$project_id]['pending']++;
        }
        
        if (!empty($task->assigned_to)) {
            $project_stats[$project_id]['workers'][intval($task->assigned_to)] = get_userdata(intval($task->assigned_to));
        }
        
        if (!empty($task->deadline)) {
            $deadline = $task->deadline;
            if (empty($project_stats[$project_id]['deadline']) || strtotime($deadline) < strtotime($project_stats[$project_id]['deadline'])) {
                $project_stats[$project_id]['deadline'] = $deadline;
            }
        }
    }
    
    // Update status based on progress if no explicit status is set
    foreach ($project_stats as $pid => &$stats) {
        $saved_status = $project_statuses[$pid] ?? '';
        if (empty($saved_status) && $stats['total'] > 0) {
            $progress = ($stats['completed'] / $stats['total']) * 100;
            if ($progress === 100) {
                $stats['status'] = 'completed';
            } elseif ($progress > 50) {
                $stats['status'] = 'in-progress';
            } else {
                $stats['status'] = 'pending';
            }
        }
    }
}

$total_projects = count($projects);
?>

<?php get_header(); ?>

<body class="bg-background font-body text-on-surface">
<!-- SideNavBar Shell -->
<?php get_template_part('template-parts/sidebar'); ?>

<!-- TopNavBar Shell -->

<?php get_template_part('template-parts/topbar'); ?>
<!-- Main Content Area -->
<main class="ml-64 pt-24 px-8 pb-12 min-h-screen bg-surface">
<!-- Header Section -->
<div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-4">
<div>
<h2 class="text-4xl font-extrabold font-headline tracking-tight text-on-surface mb-2">Projects Pipeline</h2>
<p class="text-on-surface-variant max-w-md font-body leading-relaxed">Oversee manufacturing lifecycle, monitor production efficiency, and manage architectural workflows across active sites.</p>
</div>
<button id="ps-new-project-toggle" type="button" class="flex items-center gap-2 bg-primary text-on-primary px-6 py-3 rounded-xl font-semibold shadow-lg shadow-primary/20 hover:bg-primary-dim transition-all active:scale-95">
<span class="material-symbols-outlined text-xl">add</span>
Create New Project
</button>
</div>
<!-- New Project Modal -->
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
<div>
<label for="ps-project-status" class="block text-sm font-medium text-on-surface-variant">Project Status</label>
<select id="ps-project-status" name="status" class="mt-2 w-full rounded-lg border border-outline-variant px-4 py-3 bg-surface-container-high text-on-surface">
<option value="pending">Pending</option>
<option value="in-progress">In Progress</option>
<option value="completed">Completed</option>
</select>
</div>
<div class="flex items-center gap-3">
<button type="submit" class="px-5 py-2.5 bg-primary text-on-primary text-sm font-semibold rounded-lg hover:bg-primary-dim transition-all">Create Project</button>
<span id="ps-new-project-message" class="text-sm text-on-surface-variant"></span>
</div>
</form>
</div>
<!-- Filter Bar -->
<div class="flex flex-wrap items-center gap-3 mb-8">
<button class="flex items-center gap-2 px-4 py-2 bg-surface-container-lowest border border-outline-variant/15 text-on-surface-variant rounded-lg text-sm font-medium hover:bg-surface-container-low transition-colors">
<span class="material-symbols-outlined text-lg">filter_list</span>
                Filters
            </button>
<div class="h-6 w-[1px] bg-outline-variant/20 mx-2"></div>
<button class="ps-filter-btn px-4 py-2 bg-primary-container text-on-primary-container rounded-full text-xs font-semibold tracking-wider uppercase" data-filter="all">All Projects</button>
<button class="ps-filter-btn px-4 py-2 text-on-surface-variant hover:bg-surface-container-low rounded-full text-xs font-semibold tracking-wider uppercase transition-colors" data-filter="pending">Pending</button>
<button class="ps-filter-btn px-4 py-2 text-on-surface-variant hover:bg-surface-container-low rounded-full text-xs font-semibold tracking-wider uppercase transition-colors" data-filter="in-progress">In Progress</button>
<button class="ps-filter-btn px-4 py-2 text-on-surface-variant hover:bg-surface-container-low rounded-full text-xs font-semibold tracking-wider uppercase transition-colors" data-filter="completed">Completed</button>
</div>
<!-- Project Table Container -->
<div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low/30">
<th class="px-6 py-4 text-[11px] font-bold uppercase tracking-[0.1em] text-on-surface-variant font-label">Project Name &amp; ID</th>
<th class="px-6 py-4 text-[11px] font-bold uppercase tracking-[0.1em] text-on-surface-variant font-label">Status</th>
<th class="px-6 py-4 text-[11px] font-bold uppercase tracking-[0.1em] text-on-surface-variant font-label">Team Members</th>
<th class="px-6 py-4 text-[11px] font-bold uppercase tracking-[0.1em] text-on-surface-variant font-label">Production Progress</th>
<th class="px-6 py-4 text-[11px] font-bold uppercase tracking-[0.1em] text-on-surface-variant font-label">Deadline</th>
<th class="px-6 py-4"></th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant/10">
<?php if (!empty($projects)) : ?>
    <?php foreach ($projects as $project) :
        $stats = isset($project_stats[$project->ID]) ? $project_stats[$project->ID] : [
            'total' => 0,
            'completed' => 0,
            'pending' => 0,
            'workers' => [],
            'deadline' => null,
            'status' => $project_statuses[$project->ID] ?? 'pending',
        ];
        
        $total = $stats['total'];
        $progress = $total ? round(($stats['completed'] / $total) * 100) : 0;
        $workers = array_slice($stats['workers'], 0, 2);
        $more_workers = max(0, count($stats['workers']) - 2);
        $deadline = empty($stats['deadline']) ? 'TBD' : date_i18n('M d, Y', strtotime($stats['deadline']));
        $status = $stats['status'];
        
        // Status styling
        $status_colors = [
            'completed' => 'bg-secondary/10 text-secondary',
            'in-progress' => 'bg-primary/10 text-primary',
            'pending' => 'bg-tertiary-fixed/10 text-tertiary-fixed-dim',
        ];
        $status_text = [
            'completed' => 'Completed',
            'in-progress' => 'In Progress',
            'pending' => 'Pending',
        ];
        $status_color = $status_colors[$status] ?? 'bg-primary/10 text-primary';
        $status_label = $status_text[$status] ?? 'Pending';
    ?>
    <tr class="hover:bg-surface-container-low/40 transition-colors group" data-status="<?php echo esc_attr($status); ?>">
        <td class="px-6 py-5">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary">precision_manufacturing</span>
                </div>
                <div>
                    <p class="font-semibold text-on-surface text-sm"><?php echo esc_html(get_the_title($project)); ?></p>
                    <p class="text-xs text-on-surface-variant opacity-60">ID: <?php echo esc_html('PRJ-' . str_pad($project->ID, 4, '0', STR_PAD_LEFT)); ?></p>
                </div>
            </div>
        </td>
        <td class="px-6 py-5">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 <?php echo esc_attr($status_color); ?> rounded-full text-xs font-bold">
                <span class="w-1.5 h-1.5 rounded-full bg-current"></span>
                <?php echo esc_html($status_label); ?>
            </span>
        </td>
        <td class="px-6 py-5">
            <div class="flex -space-x-2">
                <?php foreach ($workers as $worker) : 
                    if ($worker) :
                        $avatar_url = get_avatar_url($worker->ID, ['size' => 32]);
                    ?>
                    <img class="w-8 h-8 rounded-full border-2 border-white object-cover" alt="<?php echo esc_attr($worker->display_name); ?>" src="<?php echo esc_url($avatar_url); ?>">
                    <?php endif; endforeach; ?>
                <?php if ($more_workers > 0) : ?>
                    <div class="w-8 h-8 rounded-full border-2 border-white bg-surface-container-high flex items-center justify-center text-[10px] font-bold text-on-surface-variant">+<?php echo esc_html($more_workers); ?></div>
                <?php endif; ?>
            </div>
        </td>
        <td class="px-6 py-5">
            <div class="w-full max-w-[140px]">
                <div class="flex justify-between items-center mb-1.5">
                    <span class="text-[10px] font-bold text-primary uppercase"><?php echo esc_html($status_label); ?></span>
                    <span class="text-[10px] font-bold text-on-surface"><?php echo esc_html($progress); ?>%</span>
                </div>
                <div class="h-1.5 w-full bg-surface-container-high rounded-full overflow-hidden">
                    <div class="h-full bg-primary rounded-full" style="width: <?php echo esc_attr($progress); ?>%;"></div>
                </div>
            </div>
        </td>
        <td class="px-6 py-5">
            <p class="text-sm font-medium text-on-surface"><?php echo esc_html($deadline); ?></p>
        </td>
        <td class="px-6 py-5 text-right">
            <div class="relative group/menu">
                <button class="ps-project-menu material-symbols-outlined text-outline hover:text-primary transition-colors opacity-0 group-hover:opacity-100" data-project-id="<?php echo esc_attr($project->ID); ?>">more_vert</button>
                <div class="hidden group-hover/menu:block absolute right-0 mt-1 bg-surface-container-lowest border border-outline-variant rounded-lg shadow-lg z-20 min-w-[160px]">
                    <button class="ps-project-view w-full text-left px-4 py-2 text-sm text-on-surface hover:bg-surface-container-low transition-colors" data-project-id="<?php echo esc_attr($project->ID); ?>">View</button>
                    <button class="ps-project-edit w-full text-left px-4 py-2 text-sm text-on-surface hover:bg-surface-container-low transition-colors" data-project-id="<?php echo esc_attr($project->ID); ?>" data-title="<?php echo esc_attr(get_the_title($project)); ?>">Edit</button>
                    <button class="ps-project-assign w-full text-left px-4 py-2 text-sm text-on-surface hover:bg-surface-container-low transition-colors" data-project-id="<?php echo esc_attr($project->ID); ?>" data-title="<?php echo esc_attr(get_the_title($project)); ?>">Assign Users</button>
                    <button class="ps-project-delete w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition-colors" data-project-id="<?php echo esc_attr($project->ID); ?>" data-title="<?php echo esc_attr(get_the_title($project)); ?>">Delete</button>
                </div>
            </div>
        </td>
    </tr>
    <?php endforeach; ?>
<?php else : ?>
    <tr>
        <td colspan="6" class="px-6 py-12 text-center">
            <p class="text-on-surface-variant font-medium">No projects found. <a href="#" onclick="document.getElementById('ps-new-project-toggle').click(); return false;" class="text-primary hover:underline">Create one now</a></p>
        </td>
    </tr>
<?php endif; ?>
</tbody>
</table>
<div class="px-6 py-4 flex items-center justify-between bg-surface-container-low/20">
<p class="text-xs text-on-surface-variant font-medium">Showing <?php echo esc_html(count($projects)); ?> of <?php echo esc_html($total_projects); ?> Projects</p>
<div class="flex items-center gap-2">
<button class="p-2 rounded-lg border border-outline-variant/20 hover:bg-surface-container-low transition-colors disabled:opacity-30" disabled="">
<span class="material-symbols-outlined text-lg">chevron_left</span>
</button>
<button class="p-2 rounded-lg border border-outline-variant/20 hover:bg-surface-container-low transition-colors">
<span class="material-symbols-outlined text-lg">chevron_right</span>
</button>
</div>
</div>
</div>
<!-- Metric Bento Grid (Asymmetric Layout) -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
<div class="md:col-span-2 bg-surface-container-lowest p-8 rounded-xl border border-outline-variant/5 flex flex-col justify-between">
<div>
<h3 class="text-sm font-bold text-on-surface-variant uppercase tracking-widest mb-4">Production Throughput</h3>
<div class="flex items-end gap-3 mb-6">
<span class="text-5xl font-extrabold font-headline text-on-surface">84.2</span>
<span class="text-primary font-bold text-lg pb-1">% Efficiency</span>
</div>
</div>
<div class="flex items-center gap-4">
<div class="flex-1 h-2 bg-surface-container-high rounded-full overflow-hidden">
<div class="h-full bg-primary w-[84%]"></div>
</div>
<span class="text-xs font-bold text-on-surface-variant">+12% vs LY</span>
</div>
</div>
<div class="bg-primary text-on-primary p-8 rounded-xl relative overflow-hidden flex flex-col justify-between">
<div class="relative z-10">
<h3 class="text-sm font-bold opacity-80 uppercase tracking-widest mb-2">Resource Utilization</h3>
<p class="text-3xl font-extrabold font-headline">Optimal</p>
</div>
<div class="relative z-10">
<p class="text-xs opacity-70 leading-relaxed mb-4">8/10 Manufacturing bays currently active. Power grid stable at 94% load.</p>
<button class="bg-white/20 backdrop-blur-md px-4 py-2 rounded-lg text-xs font-bold uppercase tracking-wider hover:bg-white/30 transition-colors">Adjust Load</button>
</div>
<!-- Abstract Design Element -->
<div class="absolute -right-10 -bottom-10 w-40 h-40 bg-white/10 rounded-full blur-3xl"></div>
</div>
</div>
</main>

<!-- Project Detail Modal -->
<div id="ps-project-modal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40 px-4 py-8">
    <div class="w-full max-w-6xl max-h-[90vh] rounded-3xl bg-surface-container-lowest shadow-2xl border border-outline-variant/20 overflow-hidden">
        <div class="flex items-center justify-between p-6 border-b border-outline-variant/10">
            <h3 class="text-2xl font-bold text-on-surface">Project Details</h3>
            <button id="ps-project-modal-close" class="text-on-surface-variant hover:text-on-surface">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>
        <div id="ps-project-modal-content" class="overflow-y-auto max-h-[calc(90vh-120px)]">
            <!-- Project content will be loaded here -->
        </div>
    </div>
</div>

<script type="text/javascript">
(function () {
    const toggleButton = document.getElementById('ps-new-project-toggle');
    const closeButton = document.getElementById('ps-new-project-close');
    const panel = document.getElementById('ps-new-project-panel');
    const form = document.getElementById('ps-new-project-form');
    const message = document.getElementById('ps-new-project-message');
    const restUrl = '<?php echo esc_url(rest_url('ps/v1/projects')); ?>';
    const nonce = '<?php echo esc_js(wp_create_nonce('wp_rest')); ?>';
    const modal = document.getElementById('ps-project-modal');
    const modalClose = document.getElementById('ps-project-modal-close');
    const modalContent = document.getElementById('ps-project-modal-content');

    function escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }

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
            status: document.getElementById('ps-project-status').value,
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
                if (result && !result.data && typeof result === 'number') {
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

    // Modal functionality
    function openProjectModal(projectId) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        modalContent.innerHTML = '<div class="flex items-center justify-center p-12"><div class="animate-spin rounded-full h-8 w-8 border-b-2 border-primary"></div></div>';

        // Load project details via REST API
        fetch(`<?php echo esc_url(rest_url('ps/v1/project-details')); ?>/${projectId}`, {
            method: 'GET',
            credentials: 'same-origin',
        })
            .then(response => response.json())
            .then(data => {
                if (data.project) {
                    renderProjectModal(data);
                } else {
                    modalContent.innerHTML = '<div class="p-12 text-center text-red-600">Failed to load project details.</div>';
                }
            })
            .catch(() => {
                modalContent.innerHTML = '<div class="p-12 text-center text-red-600">Failed to load project details.</div>';
            });
    }

    function renderProjectModal(data) {
        const project = data.project;
        const tasks = data.tasks;
        const stats = data.stats;

        let tasksHtml = '';
        if (tasks.length > 0) {
            tasks.forEach(task => {
                const statusClass = task.status === 'completed' ? 'border-primary' : 
                                   task.status === 'in-progress' ? 'border-tertiary-fixed' : 
                                   task.status === 'blocked' ? 'border-red-300' : 'border-slate-300';
                const statusDot = task.status === 'completed' ? 'bg-primary' : 
                                 task.status === 'in-progress' ? 'bg-tertiary' : 
                                 task.status === 'blocked' ? 'bg-red-400' : 'bg-slate-400';
                const statusLabel = task.status.toUpperCase().replace('-', ' ');
                const icon = task.status === 'completed' ? 'check_circle' : 
                            task.status === 'in-progress' ? 'sync' : 'radio_button_unchecked';
                const fill = task.status === 'completed' ? 'FILL 1' : '';

                tasksHtml += `
                    <div class="group bg-surface-container-lowest p-5 rounded-xl transition-all hover:shadow-md border-l-4 ${statusClass}">
                        <div class="flex items-start justify-between">
                            <div class="flex gap-4">
                                <div class="mt-1">
                                    <span class="material-symbols-outlined text-slate-400 group-hover:text-primary transition-colors cursor-pointer" data-icon="${icon}" style="font-variation-settings: '${fill}';">${icon}</span>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-on-surface group-hover:text-primary transition-colors ${task.status === 'completed' ? 'line-through' : ''}">${escapeHtml(task.title)}</h3>
                                    <p class="text-sm text-on-surface-variant mt-1 line-clamp-1">${escapeHtml(task.description)}</p>
                                    <div class="flex items-center gap-4 mt-3">
                                        ${task.assignee ? `
                                            <div class="flex items-center gap-1.5">
                                                <img class="w-6 h-6 rounded-full border border-surface-variant" alt="${escapeHtml(task.assignee.name)}" src="${task.assignee.avatar}">
                                                <span class="text-xs font-medium text-on-surface-variant">${escapeHtml(task.assignee.name)}</span>
                                            </div>
                                        ` : '<span class="text-xs font-medium text-on-surface-variant">Unassigned</span>'}
                                        <span class="text-[10px] uppercase font-bold tracking-widest px-2 py-0.5 bg-slate-100 text-slate-600 rounded">${statusLabel}</span>
                                        ${task.priority ? `<span class="flex items-center gap-1 text-xs text-error font-medium">
                                            <span class="material-symbols-outlined text-xs">priority_high</span>
                                            ${escapeHtml(task.priority)}
                                        </span>` : ''}
                                    </div>
                                </div>
                            </div>
                            <button class="material-symbols-outlined text-outline-variant hover:text-on-surface">more_vert</button>
                        </div>
                    </div>
                `;
            });
        } else {
            tasksHtml = '<div class="text-center py-12"><p class="text-on-surface-variant">No tasks found for this project.</p></div>';
        }

        modalContent.innerHTML = `
            <div class="p-10 max-w-7xl mx-auto">
                <!-- Breadcrumbs -->
                <nav class="flex items-center gap-2 text-xs font-label text-on-surface-variant mb-4 uppercase tracking-widest">
                    <span>Projects</span>
                    <span class="material-symbols-outlined text-[10px]">chevron_right</span>
                    <span class="text-primary font-semibold">${escapeHtml(project.title)}</span>
                </nav>
                <!-- Project Header Section -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12 items-end">
                    <div class="md:col-span-2">
                        <h2 class="text-4xl font-extrabold tracking-tight text-on-surface mb-4">${escapeHtml(project.title)}</h2>
                        <div class="flex items-center gap-4">
                            <span class="flex items-center gap-1.5 px-3 py-1 bg-tertiary-container/10 text-tertiary font-semibold text-xs rounded-full">
                                <span class="w-2 h-2 rounded-full bg-tertiary-fixed"></span>
                                ${escapeHtml(project.status)}
                            </span>
                            <span class="text-sm text-on-surface-variant font-body">Started ${project.date}</span>
                        </div>
                    </div>
                    <div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm border border-outline-variant/10">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-label text-on-surface-variant font-semibold">OVERALL PROGRESS</span>
                            <span class="text-lg font-headline font-bold text-primary">${project.progress}%</span>
                        </div>
                        <div class="w-full bg-surface-container-high h-2.5 rounded-full overflow-hidden">
                            <div class="bg-primary h-full rounded-full" style="width: ${project.progress}%;"></div>
                        </div>
                    </div>
                </div>
                <!-- Content Tabs -->
                <div class="flex gap-10 border-b border-outline-variant/15 mb-8">
                    <button class="pb-4 border-b-2 border-primary text-primary font-semibold text-sm transition-all flex items-center gap-2">
                        <span class="material-symbols-outlined text-lg">assignment</span>
                        Tasks
                    </button>
                    <button class="pb-4 border-b-2 border-transparent text-on-surface-variant hover:text-on-surface font-medium text-sm transition-all flex items-center gap-2">
                        <span class="material-symbols-outlined text-lg">folder_open</span>
                        Files
                    </button>
                    <button class="pb-4 border-b-2 border-transparent text-on-surface-variant hover:text-on-surface font-medium text-sm transition-all flex items-center gap-2">
                        <span class="material-symbols-outlined text-lg">group</span>
                        Team
                    </button>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
                    <!-- Tasks Section (Main Column) -->
                    <div class="lg:col-span-8">
                        <div class="space-y-4">
                            ${tasksHtml}
                        </div>
                        <!-- Task Add Button -->
                        <button class="mt-6 flex items-center justify-center gap-2 w-full py-4 border-2 border-dashed border-outline-variant/30 rounded-xl text-on-surface-variant font-medium hover:bg-surface-container-low hover:border-primary/30 transition-all">
                            <span class="material-symbols-outlined">add</span>
                            Create new task
                        </button>
                    </div>
                    <!-- Side Info Column (Files & Stats) -->
                    <div class="lg:col-span-4 space-y-8">
                        <!-- File Teaser -->
                        <div class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant/10">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="font-headline font-bold text-on-surface">Recent Assets</h3>
                                <button class="text-xs font-semibold text-primary">View All</button>
                            </div>
                            <div class="space-y-4">
                                <div class="flex items-center gap-3 p-2 text-on-surface-variant">
                                    <span class="material-symbols-outlined text-lg">folder_open</span>
                                    <span class="text-sm">No files uploaded yet</span>
                                </div>
                            </div>
                            <div class="mt-6 pt-6 border-t border-outline-variant/10">
                                <div class="flex items-center gap-2 text-on-surface-variant">
                                    <span class="material-symbols-outlined text-lg">cloud_done</span>
                                    <span class="text-xs">Storage: 0GB of 10GB used</span>
                                </div>
                            </div>
                        </div>
                        <!-- Team Context Card -->
                        <div class="bg-gradient-to-br from-primary to-primary-dim p-6 rounded-xl text-on-primary">
                            <h3 class="font-headline font-bold mb-4">Project Workspace</h3>
                            <p class="text-sm opacity-90 leading-relaxed mb-6">Team members and project details will be displayed here.</p>
                            <div class="flex -space-x-2">
                                <div class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center text-[10px] font-bold">?</div>
                            </div>
                            <button class="mt-6 w-full py-2 bg-white text-primary text-sm font-bold rounded-lg hover:bg-opacity-90 transition-all">
                                Manage Team
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        `;
    }

    function closeProjectModal() {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        modalContent.innerHTML = '';
    }

    if (modalClose) {
        modalClose.addEventListener('click', closeProjectModal);
    }

    // Close modal when clicking outside
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeProjectModal();
        }
    });

    // View project
    document.querySelectorAll('.ps-project-view').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            const projectId = this.dataset.projectId;
            openProjectModal(projectId);
        });
    });

    // Edit project
    document.querySelectorAll('.ps-project-edit').forEach(button => {
        button.addEventListener('click', function() {
            const projectId = this.dataset.projectId;
            const projectTitle = this.dataset.title;

            const editForm = prompt(`Edit project "${projectTitle}"\n\nNew title:`, projectTitle);
            if (editForm !== null && editForm.trim()) {
                fetch(`<?php echo esc_url(rest_url('ps/v1/projects')); ?>/${projectId}`, {
                    method: 'POST',
                    credentials: 'same-origin',
                    headers: {
                        'Content-Type': 'application/json;charset=UTF-8',
                        'X-WP-Nonce': nonce,
                    },
                    body: JSON.stringify({ title: editForm.trim() }),
                })
                    .then(() => window.location.reload())
                    .catch(() => alert('Failed to update project'));
            }
        });
    });

    // Delete project
    document.querySelectorAll('.ps-project-delete').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const projectId = this.dataset.projectId;
            const projectTitle = this.dataset.title;
            
            if (confirm(`Delete project "${projectTitle}"? This cannot be undone.`)) {
                fetch(`<?php echo esc_url(rest_url('ps/v1/projects')); ?>/${projectId}`, {
                    method: 'DELETE',
                    credentials: 'same-origin',
                    headers: {
                        'X-WP-Nonce': nonce,
                    },
                })
                    .then(() => window.location.reload())
                    .catch(() => alert('Failed to delete project'));
            }
        });
    });

    // Assign users
    document.querySelectorAll('.ps-project-assign').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            alert('Navigate to the project detail page to manage user assignments.');
        });
    });

    // Filter projects by status
    document.querySelectorAll('.ps-filter-btn').forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.dataset.filter;
            document.querySelectorAll('.ps-filter-btn').forEach(btn => btn.classList.remove('bg-primary-container', 'text-on-primary-container'));
            this.classList.add('bg-primary-container', 'text-on-primary-container');
            document.querySelectorAll('tbody tr[data-status]').forEach(row => {
                if (filter === 'all' || row.dataset.status === filter) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    });
})();
</script>
</body></html>