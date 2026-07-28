<?php
/**
 * Template Name: Projects Page Single
 */

$project_id = isset($_GET['project_id']) ? intval($_GET['project_id']) : 0;
$is_ajax = isset($_GET['ajax']) && $_GET['ajax'] == '1';

if (!$is_ajax) {
    get_header();
    // SideNavBar Shell
    get_template_part('template-parts/sidebar');
    // TopNavBar Shell
    get_template_part('template-parts/topbar');
}

if ($project_id) {
    $project = get_post($project_id);
    if ($project && $project->post_type === 'ps_project') {
        // Get project tasks and stats
        global $wpdb;
        $tasks_table = $wpdb->prefix . 'ps_tasks';
        $tasks = [];
        $stats = [
            'total' => 0,
            'completed' => 0,
            'pending' => 0,
            'in_progress' => 0,
            'blocked' => 0,
        ];

        if ($wpdb->get_var($wpdb->prepare('SHOW TABLES LIKE %s', $tasks_table)) === $tasks_table) {
            $tasks = $wpdb->get_results($wpdb->prepare("SELECT * FROM {$tasks_table} WHERE project_id = %d ORDER BY created_at DESC", $project_id));
            foreach ($tasks as $task) {
                $stats['total']++;
                $status = strtolower($task->status);
                if ($status === 'completed') $stats['completed']++;
                elseif ($status === 'in-progress') $stats['in_progress']++;
                elseif ($status === 'pending') $stats['pending']++;
                elseif ($status === 'blocked') $stats['blocked']++;
            }
        }

        $progress = $stats['total'] > 0 ? round(($stats['completed'] / $stats['total']) * 100) : 0;
        $status = get_post_meta($project_id, '_ps_project_status', true) ?: 'pending';
    }
}

if ($is_ajax) {
    // Return only the content for AJAX
    if (!$project_id || !$project) {
        echo '<div class="p-12 text-center text-red-600">Project not found.</div>';
        exit;
    }
} else {
    // Full page layout
    ?>
<body class="bg-surface text-on-surface">
<?php } ?>

<!-- Main Content Canvas -->
<main class="ml-64 pt-16 min-h-screen bg-surface">
<div class="p-10 max-w-7xl mx-auto">
<!-- Breadcrumbs -->
<nav class="flex items-center gap-2 text-xs font-label text-on-surface-variant mb-4 uppercase tracking-widest">
<span>Projects</span>
<span class="material-symbols-outlined text-[10px]" data-icon="chevron_right">chevron_right</span>
<span class="text-primary font-semibold"><?php echo esc_html($project ? $project->post_title : 'Project Not Found'); ?></span>
</nav>
<!-- Project Header Section -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12 items-end">
<div class="md:col-span-2">
<h2 class="text-4xl font-extrabold tracking-tight text-on-surface mb-4"><?php echo esc_html($project ? $project->post_title : 'Project Not Found'); ?></h2>
<div class="flex items-center gap-4">
<span class="flex items-center gap-1.5 px-3 py-1 bg-tertiary-container/10 text-tertiary font-semibold text-xs rounded-full">
<span class="w-2 h-2 rounded-full bg-tertiary-fixed"></span>
                            <?php echo esc_html(ucfirst($status)); ?>
                        </span>
<span class="text-sm text-on-surface-variant font-body">Started <?php echo esc_html($project ? get_the_date('M d, Y', $project) : 'Unknown'); ?></span>
</div>
</div>
<div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm border border-outline-variant/10">
<div class="flex justify-between items-center mb-3">
<span class="text-xs font-label text-on-surface-variant font-semibold">OVERALL PROGRESS</span>
<span class="text-lg font-headline font-bold text-primary"><?php echo esc_html($progress); ?>%</span>
</div>
<div class="w-full bg-surface-container-high h-2.5 rounded-full overflow-hidden">
<div class="bg-primary h-full w-[<?php echo esc_attr($progress); ?>%] rounded-full"></div>
</div>
</div>
</div>
<!-- Content Tabs -->
<div class="flex gap-10 border-b border-outline-variant/15 mb-8">
<button class="ps-single-project-tab ps-single-project-tab-tasks pb-4 border-b-2 border-primary text-primary font-semibold text-sm transition-all flex items-center gap-2">
<span class="material-symbols-outlined text-lg" data-icon="assignment">assignment</span>
                    Tasks
                </button>
<button class="ps-single-project-tab ps-single-project-tab-files pb-4 border-b-2 border-transparent text-on-surface-variant hover:text-on-surface font-medium text-sm transition-all flex items-center gap-2">
<span class="material-symbols-outlined text-lg" data-icon="folder_open">folder_open</span>
                    Files
                </button>
<button class="ps-single-project-tab ps-single-project-tab-team pb-4 border-b-2 border-transparent text-on-surface-variant hover:text-on-surface font-medium text-sm transition-all flex items-center gap-2">
<span class="material-symbols-outlined text-lg" data-icon="group">group</span>
                    Team
                </button>
</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
<!-- Tasks Section (Main Column) -->
<div class="lg:col-span-8 ps-single-project-tasks">
<div class="space-y-4">
<?php if (!empty($tasks)) : ?>
    <?php foreach ($tasks as $task) : 
        $assignee = get_userdata($task->assigned_to);
        $status_class = '';
        $status_dot = '';
        $status_label = '';
        
        switch (strtolower($task->status)) {
            case 'completed':
                $status_class = 'border-primary';
                $status_dot = 'bg-primary';
                $status_label = 'COMPLETED';
                break;
            case 'in-progress':
                $status_class = 'border-tertiary-fixed';
                $status_dot = 'bg-tertiary';
                $status_label = 'IN PROGRESS';
                break;
            case 'pending':
                $status_class = 'border-slate-300';
                $status_dot = 'bg-slate-400';
                $status_label = 'PENDING';
                break;
            case 'blocked':
                $status_class = 'border-red-300';
                $status_dot = 'bg-red-400';
                $status_label = 'BLOCKED';
                break;
        }
        
        $priority_class = '';
        $priority_icon = '';
        switch (strtolower($task->priority)) {
            case 'high':
                $priority_class = 'text-error';
                $priority_icon = 'priority_high';
                break;
            case 'medium':
                $priority_class = 'text-secondary';
                $priority_icon = 'low_priority';
                break;
            case 'low':
                $priority_class = 'text-on-surface-variant';
                $priority_icon = 'low_priority';
                break;
            case 'critical':
                $priority_class = 'text-error';
                $priority_icon = 'priority_high';
                break;
        }
    ?>
    <!-- Task Item -->
    <div class="group bg-surface-container-lowest p-5 rounded-xl transition-all hover:shadow-md border-l-4 <?php echo esc_attr($status_class); ?>">
    <div class="flex items-start justify-between">
    <div class="flex gap-4">
    <div class="mt-1">
    <span class="material-symbols-outlined text-<?php echo esc_attr(str_replace('text-', '', $status_dot)); ?>-400 group-hover:text-primary transition-colors cursor-pointer" data-icon="<?php echo esc_attr(strtolower($task->status) === 'in-progress' ? 'sync' : (strtolower($task->status) === 'completed' ? 'check_circle' : 'radio_button_unchecked')); ?>" style="font-variation-settings: '<?php echo esc_attr(strtolower($task->status) === 'in-progress' ? 'FILL 0' : (strtolower($task->status) === 'completed' ? 'FILL 1' : '')); ?>';"><?php echo esc_html(strtolower($task->status) === 'in-progress' ? 'sync' : (strtolower($task->status) === 'completed' ? 'check_circle' : 'radio_button_unchecked')); ?></span>
    </div>
    <div>
    <h3 class="font-semibold text-on-surface group-hover:text-primary transition-colors <?php echo esc_attr(strtolower($task->status) === 'completed' ? 'line-through' : ''); ?>"><?php echo esc_html($task->title); ?></h3>
    <p class="text-sm text-on-surface-variant mt-1 line-clamp-1"><?php echo esc_html($task->description); ?></p>
    <div class="flex items-center gap-4 mt-3">
    <div class="flex items-center gap-1.5">
    <?php if ($assignee) : ?>
    <img class="w-6 h-6 rounded-full border border-surface-variant" alt="<?php echo esc_attr($assignee->display_name); ?>" src="<?php echo esc_url(get_avatar_url($assignee->ID)); ?>">
    <span class="text-xs font-medium text-on-surface-variant"><?php echo esc_html($assignee->display_name); ?></span>
    <?php else : ?>
    <span class="text-xs font-medium text-on-surface-variant">Unassigned</span>
    <?php endif; ?>
    </div>
    <span class="text-[10px] uppercase font-bold tracking-widest px-2 py-0.5 bg-<?php echo esc_attr(str_replace('text-', '', $status_dot)); ?>-100 text-<?php echo esc_attr(str_replace('text-', '', $status_dot)); ?>-600 rounded"><?php echo esc_html($status_label); ?></span>
    <?php if (!empty($priority_icon)) : ?>
    <span class="flex items-center gap-1 text-xs <?php echo esc_attr($priority_class); ?> font-medium">
    <span class="material-symbols-outlined text-xs" data-icon="<?php echo esc_attr($priority_icon); ?>"><?php echo esc_html($priority_icon); ?></span>
                                                <?php echo esc_html(ucfirst($task->priority)); ?>
                                            </span>
    <?php endif; ?>
    </div>
    </div>
    </div>
    <button class="material-symbols-outlined text-outline-variant hover:text-on-surface" data-icon="more_vert">more_vert</button>
    </div>
    </div>
    <?php endforeach; ?>
<?php else : ?>
    <div class="text-center py-12">
        <p class="text-on-surface-variant">No tasks found for this project.</p>
    </div>
<?php endif; ?>
</div>
<!-- Task Add Button -->
<button class="ps-single-project-add-task mt-6 flex items-center justify-center gap-2 w-full py-4 border-2 border-dashed border-outline-variant/30 rounded-xl text-on-surface-variant font-medium hover:bg-surface-container-low hover:border-primary/30 transition-all">
<span class="material-symbols-outlined" data-icon="add">add</span>
                        Create new task
                    </button>
</div>
<div id="ps-single-project-task-modal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40 px-4 py-6">
    <div class="w-full max-w-2xl rounded-3xl bg-surface-container-lowest p-8 shadow-2xl border border-outline-variant/20">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h3 class="text-2xl font-bold text-on-surface">Create New Task</h3>
                <p class="text-sm text-on-surface-variant mt-1">Use this modal to add a task for the current project.</p>
            </div>
            <button type="button" class="ps-single-project-task-modal-close text-on-surface-variant hover:text-on-surface">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>
        <div class="space-y-4">
            <label class="block text-sm text-on-surface-variant">
                <span class="text-xs font-bold uppercase tracking-widest">Task Title</span>
                <input type="text" class="mt-2 w-full bg-surface-container-high border border-outline-variant/20 rounded-xl py-3 px-4 text-sm text-on-surface focus:ring-2 focus:ring-primary/10" placeholder="Enter task title" />
            </label>
            <label class="block text-sm text-on-surface-variant">
                <span class="text-xs font-bold uppercase tracking-widest">Description</span>
                <textarea rows="4" class="mt-2 w-full bg-surface-container-high border border-outline-variant/20 rounded-xl py-3 px-4 text-sm text-on-surface focus:ring-2 focus:ring-primary/10" placeholder="Describe the task"></textarea>
            </label>
            <div class="flex justify-end gap-3">
                <button type="button" class="ps-single-project-task-modal-close px-6 py-3 rounded-xl border border-outline-variant/30 text-sm font-semibold text-on-surface hover:bg-surface-container-high transition-colors">Cancel</button>
                <button type="button" class="px-6 py-3 rounded-xl bg-primary text-on-primary text-sm font-semibold hover:bg-primary-dim transition-colors">Save Task</button>
            </div>
        </div>
    </div>
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
<!-- Files would be loaded here -->
<div class="flex items-center gap-3 p-2 text-on-surface-variant">
<span class="material-symbols-outlined text-lg">folder_open</span>
<span class="text-sm">No files uploaded yet</span>
</div>
</div>
<div class="mt-6 pt-6 border-t border-outline-variant/10">
<div class="flex items-center gap-2 text-on-surface-variant">
<span class="material-symbols-outlined text-lg" data-icon="cloud_done">cloud_done</span>
<span class="text-xs">Storage: 0GB of 10GB used</span>
</div>
</div>
</div>
<!-- Team Context Card -->
<div class="bg-gradient-to-br from-primary to-primary-dim p-6 rounded-xl text-on-primary">
<h3 class="font-headline font-bold mb-4">Project Workspace</h3>
<p class="text-sm opacity-90 leading-relaxed mb-6">Team members and project details will be displayed here.</p>
<div class="flex -space-x-2">
<!-- Team members would be loaded here -->
<div class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center text-[10px] font-bold">?</div>
</div>
<button class="ps-single-project-manage-team mt-6 w-full py-2 bg-white text-primary text-sm font-bold rounded-lg hover:bg-opacity-90 transition-all">
                            Manage Team
                        </button>
</div>
</div>
</div>
</div>
</main>

<?php if (!$is_ajax) : ?>
<script>
(function () {
    const tabButtons = {
        tasks: document.querySelector('.ps-single-project-tab-tasks'),
        files: document.querySelector('.ps-single-project-tab-files'),
        team: document.querySelector('.ps-single-project-tab-team'),
    };
    const sectionTargets = {
        tasks: document.querySelector('.ps-single-project-tasks'),
        files: document.querySelector('.ps-single-project-files'),
        team: document.querySelector('.ps-single-project-team'),
    };
    const addTaskButton = document.querySelector('.ps-single-project-add-task');
    const manageTeamButton = document.querySelector('.ps-single-project-manage-team');

    function setActiveTab(tab) {
        Object.entries(tabButtons).forEach(([key, button]) => {
            if (!button) return;
            const active = key === tab;
            button.classList.toggle('border-primary', active);
            button.classList.toggle('text-primary', active);
            button.classList.toggle('font-semibold', active);
            button.classList.toggle('border-transparent', !active);
            button.classList.toggle('text-on-surface-variant', !active);
        });

        const target = sectionTargets[tab];
        if (target) {
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }

    Object.entries(tabButtons).forEach(([key, button]) => {
        if (!button) return;
        button.addEventListener('click', function (event) {
            event.preventDefault();
            setActiveTab(key);
        });
    });

    const taskModal = document.getElementById('ps-single-project-task-modal');
    const taskModalCloseButtons = document.querySelectorAll('.ps-single-project-task-modal-close');

    function openTaskModal() {
        if (taskModal) {
            taskModal.classList.remove('hidden');
            taskModal.classList.add('flex');
        }
    }

    function closeTaskModal() {
        if (taskModal) {
            taskModal.classList.add('hidden');
            taskModal.classList.remove('flex');
        }
    }

    if (addTaskButton) {
        addTaskButton.addEventListener('click', function (event) {
            event.preventDefault();
            openTaskModal();
        });
    }

    taskModalCloseButtons.forEach((button) => {
        button.addEventListener('click', function (event) {
            event.preventDefault();
            closeTaskModal();
        });
    });

    if (taskModal) {
        taskModal.addEventListener('click', function (event) {
            if (event.target === taskModal) {
                closeTaskModal();
            }
        });
    }

    if (manageTeamButton) {
        manageTeamButton.addEventListener('click', function (event) {
            event.preventDefault();
            alert('Manage Team functionality is not yet available.');
        });
    }

    setActiveTab('tasks');
})();
</script>
</body>
</html>
<?php endif; ?>
<div class="lg:col-span-4 space-y-8">
<!-- File Teaser -->
<div class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant/10">
<div class="flex items-center justify-between mb-6">
<h3 class="font-headline font-bold text-on-surface">Recent Assets</h3>
<button class="text-xs font-semibold text-primary">View All</button>
</div>
<div class="space-y-4">
<div class="flex items-center gap-3 p-2 hover:bg-surface-container-low rounded-lg transition-colors cursor-pointer">
<div class="w-10 h-10 bg-error-container/20 text-error flex items-center justify-center rounded-lg">
<span class="material-symbols-outlined" data-icon="picture_as_pdf">picture_as_pdf</span>
</div>
<div class="flex-1 min-w-0">
<p class="text-sm font-semibold truncate text-on-surface">schematic_v2.pdf</p>
<p class="text-[10px] text-on-surface-variant uppercase font-medium">8.4 MB • 2 days ago</p>
</div>
</div>
<div class="flex items-center gap-3 p-2 hover:bg-surface-container-low rounded-lg transition-colors cursor-pointer">
<div class="w-10 h-10 bg-secondary-container text-secondary flex items-center justify-center rounded-lg">
<span class="material-symbols-outlined" data-icon="description">description</span>
</div>
<div class="flex-1 min-w-0">
<p class="text-sm font-semibold truncate text-on-surface">spec_sheet.docx</p>
<p class="text-[10px] text-on-surface-variant uppercase font-medium">1.2 MB • 5 days ago</p>
</div>
</div>
</div>
<div class="mt-6 pt-6 border-t border-outline-variant/10">
<div class="flex items-center gap-2 text-on-surface-variant">
<span class="material-symbols-outlined text-lg" data-icon="cloud_done">cloud_done</span>
<span class="text-xs">Storage: 4.2GB of 10GB used</span>
</div>
</div>
</div>
<!-- Team Context Card -->
<div class="bg-gradient-to-br from-primary to-primary-dim p-6 rounded-xl text-on-primary">
<h3 class="font-headline font-bold mb-4">Project Workspace</h3>
<p class="text-sm opacity-90 leading-relaxed mb-6">You have 4 active team members and 1 pending invitation for this site automation project.</p>
<div class="flex -space-x-2">
<img class="w-8 h-8 rounded-full border-2 border-primary" data-alt="professional portrait of a creative woman working in a high-tech environment" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDvxypmGUT0Xh73J4feBWMO1Czjmlsy6UfLkXUMwlaGU9w6tQW_sWBrXLE7P9jQINsL6Wzvf0_hXqqVAR_A-E_wvhHV2NZdedCuUrw_ma9gICxHSQq_UauUHwJm3hC8FP3mHCRv4_xAmKxbNLXlh3Jxh6IQX8AwEoPMvYiPx1sbRJRhJe07F-N78LZInVJTlZuPo9-JJKpCtlaGuOR1MDb42PPP16F7dWn9WOF_1gv78R2seDUWvLQ7Hv86kTDZCpTclPRqCYB_IHA"/>
<img class="w-8 h-8 rounded-full border-2 border-primary" data-alt="portrait of an experienced professional male with a neutral background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDoTwkze6GT2sqmbxMpRuNckHtx065ebCS5rG4cOQruLDzfzTVdq7OriJ71R40qBatqfREA7WYfWiqMUACdjtL9ihr8BKFdyWKXnU1umflIKBWWx6BN1M5VkQXuui7DgXFeiU0lXFCaQZUrlvRok9_IF7lsNVfbUpbQOMTr77TnPPBU38Gjq0D14C_dzSDd0RVXz9gRerbxAQ4ldo7-Wzoxg0P7gLzHsCrCRINIv0jYf5tIWtqFVtVFQWjZh9RfduBnrB3m7M3nuCA"/>
<img class="w-8 h-8 rounded-full border-2 border-primary" data-alt="close up of a confident young professional woman in a modern office setting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDbuFblvHia1IO6sXCE6u3jwuFIHG7h8MSvJH_gmUQLw1H5czdyfOnyTitI6htmtOHyjs_jx6VdZPVnQKpv2ZIBmCYr74vXq5qPM0F_JEu_xRjj-9oIOd1GjaCgmvD73k4DVF88OijMgtB7X2DNPGj5EUtLr6HjlIaiRBAPkPL9nXi7hzVcghXzyD4a6Qn3OOdX9sE_uVxPNlwUXGEgjacDe--6_daqsEQGCpqLnTofFV1HKMfY-RAR769Bo0jVrFI5hglvHHCqHgg"/>
<div class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center text-[10px] font-bold border-2 border-primary">+2</div>
</div>
<button class="mt-6 w-full py-2 bg-white text-primary text-sm font-bold rounded-lg hover:bg-opacity-90 transition-all">
                            Invite Stakeholder
                        </button>
</div>
</div>
</div>
</div>
</main>
</body></html>