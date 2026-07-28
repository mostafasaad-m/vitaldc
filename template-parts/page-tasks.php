<?php
/**
 * Template Name: Task Management Page
 */
get_header();

$projects = get_posts([
    'post_type' => 'ps_project',
    'numberposts' => -1,
    'post_status' => 'publish',
]);

$project_options = array_map(function ($project) {
    return [
        'id' => $project->ID,
        'title' => $project->post_title,
    ];
}, $projects);

$users = get_users([
    'orderby' => 'display_name',
    'order' => 'ASC',
]);

$user_options = array_map(function ($user) {
    return [
        'id' => $user->ID,
        'name' => $user->display_name,
    ];
}, $users);

$departments = ['Engineering', 'Logistics', 'QA & Compliance', 'Procurement', 'Maintenance', 'Operations'];
$statuses = [
    'pending' => 'Pending',
    'in-progress' => 'In Progress',
    'completed' => 'Completed',
    'blocked' => 'Blocked',
];
$priorities = [
    'low' => 'Low',
    'medium' => 'Medium',
    'high' => 'High',
    'critical' => 'Critical',
];
?>
<div class="bg-background text-on-background">
<!-- SideNavBar Shell -->
<?php get_template_part('template-parts/sidebar'); ?>

<!-- TopNavBar Shell -->
<?php get_template_part('template-parts/topbar'); ?>

<!-- Main Content Area -->
<main class="ml-64 pt-16 min-h-screen p-10">
<div id="ps-task-root">
    <div class="flex items-end justify-between mb-10 gap-8">
        <div class="flex-1">
            <nav class="flex gap-2 mb-4 text-xs font-semibold text-on-surface-variant/60 uppercase tracking-widest">
                <span>Manufacturing</span>
                <span>/</span>
                <span class="text-primary">Task Management</span>
            </nav>
            <h2 class="text-5xl font-extrabold headline-font tracking-tight text-on-surface leading-tight max-w-2xl">
                Task Management <span class="text-primary">&amp;</span> Productivity Control
            </h2>
        </div>
        <div class="flex gap-3 pb-2">
            <button id="ps-export-button" class="flex items-center gap-2 px-5 py-2.5 bg-surface-container-lowest text-on-surface border border-outline-variant/15 rounded-lg font-semibold text-sm shadow-sm hover:bg-surface-container-low transition-colors">
                <span class="material-symbols-outlined text-lg">file_download</span>
                Export Data
            </button>
            <button id="ps-create-task-button" class="flex items-center gap-2 px-6 py-2.5 bg-primary text-on-primary rounded-lg font-bold text-sm shadow-md hover:bg-primary-dim transition-all active:scale-[0.98]">
                <span class="material-symbols-outlined text-lg">add</span>
                Create Task
            </button>
        </div>
    </div>

    <div class="bg-surface-container-lowest rounded-xl p-5 mb-8 shadow-sm border border-outline-variant/10 flex flex-wrap items-center gap-6">
        <div class="flex flex-col gap-1.5 min-w-[180px]">
            <label class="text-[10px] font-bold text-on-surface-variant uppercase tracking-wider pl-1">Project</label>
            <div class="relative">
                <select id="ps-filter-project" class="w-full bg-surface-container-low border-none rounded-lg py-2 pl-3 pr-10 text-xs font-semibold text-on-surface focus:ring-2 focus:ring-primary/10 appearance-none">
                    <option value="">All Projects</option>
                    <?php foreach ($project_options as $project): ?>
                        <option value="<?php echo esc_attr($project['id']); ?>"><?php echo esc_html($project['title']); ?></option>
                    <?php endforeach; ?>
                </select>
                <span class="material-symbols-outlined absolute right-2 top-1/2 -translate-y-1/2 pointer-events-none text-on-surface-variant">expand_more</span>
            </div>
        </div>
        <div class="flex flex-col gap-1.5 min-w-[180px]">
            <label class="text-[10px] font-bold text-on-surface-variant uppercase tracking-wider pl-1">Status</label>
            <div class="relative">
                <select id="ps-filter-status" class="w-full bg-surface-container-low border-none rounded-lg py-2 pl-3 pr-10 text-xs font-semibold text-on-surface focus:ring-2 focus:ring-primary/10 appearance-none">
                    <option value="">All Statuses</option>
                    <?php foreach ($statuses as $key => $label): ?>
                        <option value="<?php echo esc_attr($key); ?>"><?php echo esc_html($label); ?></option>
                    <?php endforeach; ?>
                </select>
                <span class="material-symbols-outlined absolute right-2 top-1/2 -translate-y-1/2 pointer-events-none text-on-surface-variant">expand_more</span>
            </div>
        </div>
        <div class="flex flex-col gap-1.5 min-w-[180px]">
            <label class="text-[10px] font-bold text-on-surface-variant uppercase tracking-wider pl-1">Department</label>
            <div class="relative">
                <select id="ps-filter-department" class="w-full bg-surface-container-low border-none rounded-lg py-2 pl-3 pr-10 text-xs font-semibold text-on-surface focus:ring-2 focus:ring-primary/10 appearance-none">
                    <option value="">All Departments</option>
                    <?php foreach ($departments as $department): ?>
                        <option value="<?php echo esc_attr($department); ?>"><?php echo esc_html($department); ?></option>
                    <?php endforeach; ?>
                </select>
                <span class="material-symbols-outlined absolute right-2 top-1/2 -translate-y-1/2 pointer-events-none text-on-surface-variant">expand_more</span>
            </div>
        </div>
        <div class="flex flex-col gap-1.5 min-w-[180px]">
            <label class="text-[10px] font-bold text-on-surface-variant uppercase tracking-wider pl-1">Assignee</label>
            <div class="relative">
                <select id="ps-filter-assignee" class="w-full bg-surface-container-low border-none rounded-lg py-2 pl-3 pr-10 text-xs font-semibold text-on-surface focus:ring-2 focus:ring-primary/10 appearance-none">
                    <option value="">Anyone</option>
                    <?php foreach ($user_options as $user): ?>
                        <option value="<?php echo esc_attr($user['id']); ?>"><?php echo esc_html($user['name']); ?></option>
                    <?php endforeach; ?>
                </select>
                <span class="material-symbols-outlined absolute right-2 top-1/2 -translate-y-1/2 pointer-events-none text-on-surface-variant">expand_more</span>
            </div>
        </div>
        <div class="flex-grow flex justify-end items-end h-full">
            <button id="ps-clear-filters" class="flex items-center gap-2 text-primary font-bold text-xs hover:underline decoration-2 underline-offset-4">
                Clear All Filters
            </button>
        </div>
    </div>

    <div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/10 overflow-hidden">
        <div class="grid grid-cols-12 px-8 py-5 border-b border-outline-variant/10 bg-surface-container-low/30">
            <div class="col-span-5 text-[10px] font-bold text-on-surface-variant uppercase tracking-widest">Task Detail &amp; Project</div>
            <div class="col-span-2 text-[10px] font-bold text-on-surface-variant uppercase tracking-widest text-center">Status</div>
            <div class="col-span-3 text-[10px] font-bold text-on-surface-variant uppercase tracking-widest text-center">Assignee</div>
            <div class="col-span-2 text-[10px] font-bold text-on-surface-variant uppercase tracking-widest text-right">Due Date</div>
        </div>
        <div id="ps-task-rows" class="divide-y divide-outline-variant/5"></div>
        <div class="px-8 py-4 bg-surface-container-low/30 border-t border-outline-variant/10 flex items-center justify-between">
            <p id="ps-task-count" class="text-xs text-on-surface-variant">Loading tasks…</p>
            <div class="flex items-center gap-2">
                <button id="ps-prev-page" class="p-1.5 hover:bg-surface-container-high rounded-md transition-colors text-on-surface-variant" disabled>
                    <span class="material-symbols-outlined text-lg">chevron_left</span>
                </button>
                <button id="ps-next-page" class="p-1.5 hover:bg-surface-container-high rounded-md transition-colors text-on-surface-variant" disabled>
                    <span class="material-symbols-outlined text-lg">chevron_right</span>
                </button>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-8 mt-12">
        <div class="col-span-12 lg:col-span-7 bg-surface-container-lowest rounded-xl p-8 shadow-sm border border-outline-variant/10">
            <h3 class="text-xl font-bold headline-font text-on-surface mb-4">Task Summary</h3>
            <div class="grid grid-cols-2 gap-6">
                <div class="rounded-3xl p-6 bg-surface-container-high">
                    <p class="text-xs font-bold uppercase tracking-widest text-on-surface-variant mb-2">Pending</p>
                    <p id="ps-summary-pending" class="text-4xl font-extrabold text-primary">0</p>
                </div>
                <div class="rounded-3xl p-6 bg-surface-container-high">
                    <p class="text-xs font-bold uppercase tracking-widest text-on-surface-variant mb-2">In Progress</p>
                    <p id="ps-summary-in-progress" class="text-4xl font-extrabold text-tertiary">0</p>
                </div>
                <div class="rounded-3xl p-6 bg-surface-container-high">
                    <p class="text-xs font-bold uppercase tracking-widest text-on-surface-variant mb-2">Completed</p>
                    <p id="ps-summary-completed" class="text-4xl font-extrabold text-surface-variant">0</p>
                </div>
                <div class="rounded-3xl p-6 bg-surface-container-high">
                    <p class="text-xs font-bold uppercase tracking-widest text-on-surface-variant mb-2">Blocked</p>
                    <p id="ps-summary-blocked" class="text-4xl font-extrabold text-error">0</p>
                </div>
            </div>
        </div>
        <div class="col-span-12 lg:col-span-5 bg-primary rounded-xl p-8 shadow-xl relative overflow-hidden group">
            <div class="absolute -right-12 -bottom-12 w-48 h-48 bg-white/10 rounded-full blur-3xl group-hover:scale-125 transition-transform"></div>
            <h3 class="text-xl font-bold headline-font text-on-primary mb-4 relative z-10">Critical Alerts</h3>
            <div class="space-y-4 relative z-10">
                <div class="flex items-start gap-3 bg-white/10 backdrop-blur-md p-4 rounded-lg border border-white/10">
                    <span class="material-symbols-outlined text-white text-xl">warning</span>
                    <div>
                        <p class="text-xs font-bold text-white">Resource Conflict: Multiple Assignments</p>
                        <p class="text-[10px] text-white/70 mt-1">Some users have overlapping high-priority tasks this sprint.</p>
                    </div>
                </div>
                <div class="flex items-start gap-3 bg-white/10 backdrop-blur-md p-4 rounded-lg border border-white/10">
                    <span class="material-symbols-outlined text-white text-xl">schedule</span>
                    <div>
                        <p class="text-xs font-bold text-white">Upcoming Deadlines</p>
                        <p class="text-[10px] text-white/70 mt-1">Track deadlines for tasks due in the next 48 hours.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="ps-task-modal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40 px-4 py-8">
        <div class="w-full max-w-2xl rounded-3xl bg-surface-container-lowest p-8 shadow-2xl border border-outline-variant/20">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h3 id="ps-task-modal-title" class="text-2xl font-bold text-on-surface">New Task</h3>
                    <p class="text-sm text-on-surface-variant mt-1">Create or update task details, assignment, and status.</p>
                </div>
                <button id="ps-task-modal-close" class="text-on-surface-variant hover:text-on-surface"><span class="material-symbols-outlined">close</span></button>
            </div>
            <div id="ps-task-feedback" class="mb-4 text-sm hidden rounded-xl px-4 py-3"></div>
            <form id="ps-task-form" class="space-y-6">
                <input type="hidden" id="ps-task-id" value="" />
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                    <label class="block text-sm text-on-surface-variant">
                        <span class="text-xs font-bold uppercase tracking-widest">Project</span>
                        <select id="ps-task-project" required class="mt-2 w-full bg-surface-container-low border border-outline-variant/30 rounded-xl py-3 px-4 text-sm text-on-surface focus:ring-2 focus:ring-primary/10">
                            <option value="">Choose a project</option>
                            <?php foreach ($project_options as $project): ?>
                                <option value="<?php echo esc_attr($project['id']); ?>"><?php echo esc_html($project['title']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </label>
                    <label class="block text-sm text-on-surface-variant">
                        <span class="text-xs font-bold uppercase tracking-widest">Task Title</span>
                        <input id="ps-task-title" type="text" required class="mt-2 w-full bg-surface-container-low border border-outline-variant/30 rounded-xl py-3 px-4 text-sm text-on-surface focus:ring-2 focus:ring-primary/10" placeholder="Enter task title" />
                    </label>
                </div>
                <label class="block text-sm text-on-surface-variant">
                    <span class="text-xs font-bold uppercase tracking-widest">Description</span>
                    <textarea id="ps-task-description" rows="4" class="mt-2 w-full bg-surface-container-low border border-outline-variant/30 rounded-xl py-3 px-4 text-sm text-on-surface focus:ring-2 focus:ring-primary/10" placeholder="Describe the work to complete"></textarea>
                </label>
                <div class="grid grid-cols-1 xl:grid-cols-4 gap-4">
                    <label class="block text-sm text-on-surface-variant">
                        <span class="text-xs font-bold uppercase tracking-widest">Assignee</span>
                        <select id="ps-task-assignee" class="mt-2 w-full bg-surface-container-low border border-outline-variant/30 rounded-xl py-3 px-4 text-sm text-on-surface focus:ring-2 focus:ring-primary/10">
                            <option value="">Unassigned</option>
                            <?php foreach ($user_options as $user): ?>
                                <option value="<?php echo esc_attr($user['id']); ?>"><?php echo esc_html($user['name']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </label>
                    <label class="block text-sm text-on-surface-variant">
                        <span class="text-xs font-bold uppercase tracking-widest">Department</span>
                        <select id="ps-task-department" class="mt-2 w-full bg-surface-container-low border border-outline-variant/30 rounded-xl py-3 px-4 text-sm text-on-surface focus:ring-2 focus:ring-primary/10">
                            <option value="">Choose department</option>
                            <?php foreach ($departments as $department): ?>
                                <option value="<?php echo esc_attr($department); ?>"><?php echo esc_html($department); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </label>
                    <label class="block text-sm text-on-surface-variant">
                        <span class="text-xs font-bold uppercase tracking-widest">Priority</span>
                        <select id="ps-task-priority" class="mt-2 w-full bg-surface-container-low border border-outline-variant/30 rounded-xl py-3 px-4 text-sm text-on-surface focus:ring-2 focus:ring-primary/10">
                            <?php foreach ($priorities as $key => $label): ?>
                                <option value="<?php echo esc_attr($key); ?>"><?php echo esc_html($label); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </label>
                    <label class="block text-sm text-on-surface-variant">
                        <span class="text-xs font-bold uppercase tracking-widest">Due Date</span>
                        <input id="ps-task-deadline" type="date" class="mt-2 w-full bg-surface-container-low border border-outline-variant/30 rounded-xl py-3 px-4 text-sm text-on-surface focus:ring-2 focus:ring-primary/10" />
                    </label>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                    <label class="block text-sm text-on-surface-variant">
                        <span class="text-xs font-bold uppercase tracking-widest">Status</span>
                        <select id="ps-task-status" class="mt-2 w-full bg-surface-container-low border border-outline-variant/30 rounded-xl py-3 px-4 text-sm text-on-surface focus:ring-2 focus:ring-primary/10">
                            <?php foreach ($statuses as $key => $label): ?>
                                <option value="<?php echo esc_attr($key); ?>"><?php echo esc_html($label); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </label>
                    <div class="grid grid-cols-1 gap-3 lg:grid-cols-[1fr_auto_auto]">
                        <button type="button" id="ps-task-delete" class="hidden w-full px-6 py-3 rounded-xl border border-error/30 text-sm font-semibold text-error hover:bg-error/10 transition-colors">Delete Task</button>
                        <button type="button" id="ps-task-cancel" class="w-full px-6 py-3 rounded-xl border border-outline-variant/30 text-sm font-semibold text-on-surface hover:bg-surface-container-high transition-colors">Cancel</button>
                        <button type="submit" class="w-full px-6 py-3 rounded-xl bg-primary text-on-primary text-sm font-semibold hover:bg-primary-dim transition-colors">Save Task</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</main>

<script>
(function () {
    const apiBase = '<?php echo esc_url(rest_url('ps/v1')); ?>';
    const apiNonce = '<?php echo wp_create_nonce('wp_rest'); ?>';
    const projects = <?php echo wp_json_encode($project_options, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP); ?>;
    const users = <?php echo wp_json_encode($user_options, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP); ?>;
    const statuses = <?php echo wp_json_encode($statuses, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP); ?>;
    const priorities = <?php echo wp_json_encode($priorities, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP); ?>;

    const state = {
        tasks: [],
        filters: {
            project_id: '',
            status: '',
            department: '',
            assigned_to: '',
        },
        page: 1,
        pageSize: 20,
        editingTask: null,
    };

    const elements = {
        taskRows: document.getElementById('ps-task-rows'),
        taskCount: document.getElementById('ps-task-count'),
        summaryPending: document.getElementById('ps-summary-pending'),
        summaryInProgress: document.getElementById('ps-summary-in-progress'),
        summaryCompleted: document.getElementById('ps-summary-completed'),
        summaryBlocked: document.getElementById('ps-summary-blocked'),
        filterProject: document.getElementById('ps-filter-project'),
        filterStatus: document.getElementById('ps-filter-status'),
        filterDepartment: document.getElementById('ps-filter-department'),
        filterAssignee: document.getElementById('ps-filter-assignee'),
        clearFilters: document.getElementById('ps-clear-filters'),
        createButton: document.getElementById('ps-create-task-button'),
        modal: document.getElementById('ps-task-modal'),
        modalTitle: document.getElementById('ps-task-modal-title'),
        modalClose: document.getElementById('ps-task-modal-close'),
        form: document.getElementById('ps-task-form'),
        feedback: document.getElementById('ps-task-feedback'),
        deleteButton: document.getElementById('ps-task-delete'),
        inputId: document.getElementById('ps-task-id'),
        inputProject: document.getElementById('ps-task-project'),
        inputTitle: document.getElementById('ps-task-title'),
        inputDescription: document.getElementById('ps-task-description'),
        inputAssignee: document.getElementById('ps-task-assignee'),
        inputDepartment: document.getElementById('ps-task-department'),
        inputPriority: document.getElementById('ps-task-priority'),
        inputDeadline: document.getElementById('ps-task-deadline'),
        inputStatus: document.getElementById('ps-task-status'),
    };

    function formatDate(dateValue) {
        if (!dateValue) return 'No due date';
        const date = new Date(dateValue);
        if (Number.isNaN(date.getTime())) return 'Invalid date';
        return date.toLocaleDateString(undefined, { month: 'short', day: 'numeric', year: 'numeric' });
    }

    function getProjectTitle(projectId) {
        const project = projects.find((item) => item.id === projectId);
        return project ? project.title : 'Unknown project';
    }

    function getUserName(userId) {
        const user = users.find((item) => item.id === userId);
        return user ? user.name : 'Unassigned';
    }

    function toBadgeHtml(task) {
        const label = statuses[task.status] || 'Unknown';
        const classes = {
            pending: 'bg-surface-container-high text-on-surface-variant',
            'in-progress': 'bg-tertiary-fixed text-on-tertiary-fixed',
            completed: 'bg-primary-container text-on-primary-container',
            blocked: 'bg-error/10 text-error',
        };
        const dot = task.status === 'completed' ? 'bg-primary' : task.status === 'in-progress' ? 'bg-tertiary' : task.status === 'blocked' ? 'bg-error' : 'bg-on-surface-variant';
        return `<span class="px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider ${classes[task.status] || 'bg-surface-container-high text-on-surface-variant'} flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full ${dot}"></span>${escapeHtml(label)}</span>`;
    }

    function renderTasks() {
        const visible = state.tasks.slice((state.page - 1) * state.pageSize, state.page * state.pageSize);
        if (!visible.length) {
            elements.taskRows.innerHTML = '<div class="px-8 py-10 text-center text-sm text-on-surface-variant">No tasks match the current filters.</div>';
        } else {
            elements.taskRows.innerHTML = visible.map((task) => {
                return `
                    <div data-task-id="${task.id}" class="grid grid-cols-12 px-8 py-6 items-center hover:bg-surface-container-low/50 transition-colors cursor-pointer group">
                        <div class="col-span-5 flex flex-col gap-1">
                            <span class="text-sm font-bold text-on-surface group-hover:text-primary transition-colors">${escapeHtml(task.title)}</span>
                            <span class="text-xs text-on-surface-variant flex flex-wrap gap-1.5">
                                <span class="material-symbols-outlined text-sm">factory</span>
                                Project: ${escapeHtml(getProjectTitle(parseInt(task.project_id, 10)))}
                            </span>
                            <span class="text-[10px] text-on-surface-variant">${escapeHtml(task.department || 'No department')} • Priority: ${escapeHtml(task.priority || 'medium')}</span>
                        </div>
                        <div class="col-span-2 flex justify-center">${toBadgeHtml(task)}</div>
                        <div class="col-span-3 flex justify-center">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-surface-variant flex items-center justify-center text-[10px] font-bold text-on-surface">${escapeHtml(getUserInitials(getUserName(parseInt(task.assigned_to, 10))))}</div>
                                <span class="text-xs font-semibold">${escapeHtml(getUserName(parseInt(task.assigned_to, 10)))}</span>
                            </div>
                        </div>
                        <div class="col-span-2 text-right">
                            <span class="text-xs font-bold text-on-surface">${formatDate(task.deadline)}</span>
                            ${renderDueLabel(task.deadline)}
                        </div>
                    </div>
                `;
            }).join('');
        }

        elements.taskCount.textContent = `${state.tasks.length} task${state.tasks.length === 1 ? '' : 's'} loaded`;
        updatePaginationControls();
        renderSummaries();
        attachRowEvents();
    }

    function renderDueLabel(deadline) {
        if (!deadline) return '';
        const due = new Date(deadline);
        const now = new Date();
        const diff = Math.ceil((due - now) / (1000 * 60 * 60 * 24));
        if (diff < 0) {
            return `<p class="text-[10px] text-error font-medium">Overdue ${Math.abs(diff)} day${Math.abs(diff) === 1 ? '' : 's'}</p>`;
        }
        if (diff === 0) {
            return `<p class="text-[10px] text-secondary font-medium">Due today</p>`;
        }
        return `<p class="text-[10px] text-on-surface-variant font-medium">In ${diff} day${diff === 1 ? '' : 's'}</p>`;
    }

    function getUserInitials(name) {
        return String(name).split(' ').slice(0, 2).map((part) => part.charAt(0).toUpperCase()).join('') || 'UN';
    }

    function renderSummaries() {
        const counts = { pending: 0, 'in-progress': 0, completed: 0, blocked: 0 };
        state.tasks.forEach((task) => {
            counts[task.status] = (counts[task.status] || 0) + 1;
        });
        elements.summaryPending.textContent = counts.pending;
        elements.summaryInProgress.textContent = counts['in-progress'];
        elements.summaryCompleted.textContent = counts.completed;
        elements.summaryBlocked.textContent = counts.blocked;
    }

    function escapeHtml(value) {
        if (!value) return '';
        return String(value)
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/"/g, '&quot;')
            .replace(/'/g, '&#039;');
    }

    function buildQuery() {
        const params = new URLSearchParams();
        if (state.filters.project_id) params.set('project_id', state.filters.project_id);
        if (state.filters.status) params.set('status', state.filters.status);
        if (state.filters.department) params.set('department', state.filters.department);
        if (state.filters.assigned_to) params.set('assigned_to', state.filters.assigned_to);
        return params.toString();
    }

    function loadTasks() {
        const query = buildQuery();
        const url = `${apiBase}/tasks${query ? '?' + query : ''}`;
        fetch(url, {
            credentials: 'same-origin',
            headers: {
                'X-WP-Nonce': apiNonce,
            },
        })
            .then(async (response) => {
                if (!response.ok) {
                    const details = await response.text();
                    throw new Error(`Failed to load tasks (${response.status}): ${details}`);
                }
                return response.json();
            })
            .then((tasks) => {
                state.tasks = Array.isArray(tasks) ? tasks : [];
                state.page = 1;
                renderTasks();
            })
            .catch((error) => {
                console.error('Task load failed:', error);
                elements.taskRows.innerHTML = '<div class="px-8 py-10 text-center text-sm text-on-surface-variant">Unable to load tasks.</div>';
                elements.taskCount.textContent = 'Could not load tasks';
            });
    }

    function updatePaginationControls() {
        document.getElementById('ps-prev-page').disabled = state.page === 1;
        document.getElementById('ps-next-page').disabled = state.page * state.pageSize >= state.tasks.length;
    }

    function attachRowEvents() {
        elements.taskRows.querySelectorAll('[data-task-id]').forEach((row) => {
            row.addEventListener('click', () => {
                const taskId = row.getAttribute('data-task-id');
                const task = state.tasks.find((item) => String(item.id) === taskId);
                if (task) {
                    openTaskModal(task);
                }
            });
        });
    }

    function openTaskModal(task) {
        state.editingTask = task || null;
        elements.modalTitle.textContent = task ? 'Edit Task' : 'New Task';
        elements.feedback.classList.add('hidden');
        elements.inputId.value = task ? task.id : '';
        elements.inputProject.value = task ? task.project_id : '';
        elements.inputTitle.value = task ? task.title : '';
        elements.inputDescription.value = task ? task.description : '';
        elements.inputAssignee.value = task ? task.assigned_to : '';
        elements.inputDepartment.value = task ? task.department : '';
        elements.inputPriority.value = task ? task.priority || 'medium' : 'medium';
        elements.inputDeadline.value = task ? (task.deadline ? task.deadline.split(' ')[0] : '') : '';
        elements.inputStatus.value = task ? task.status || 'pending' : 'pending';
        elements.deleteButton.classList.toggle('hidden', !task);
        elements.modal.classList.remove('hidden');
        document.documentElement.style.overflow = 'hidden';
    }

    function closeTaskModal() {
        state.editingTask = null;
        elements.modal.classList.add('hidden');
        document.documentElement.style.overflow = '';
    }

    function deleteTask(taskId) {
        if (!confirm('Delete this task?')) {
            return;
        }

        fetch(`${apiBase}/tasks/${taskId}`, {
            method: 'DELETE',
            credentials: 'same-origin',
            headers: {
                'X-WP-Nonce': apiNonce,
            },
        })
            .then((response) => response.json())
            .then((data) => {
                if (data && data.success) {
                    closeTaskModal();
                    loadTasks();
                }
            });
    }

    function showFeedback(message, type) {
        elements.feedback.textContent = message;
        elements.feedback.className = 'mb-4 rounded-xl px-4 py-3 text-sm';
        elements.feedback.classList.add(type === 'error' ? 'bg-error/10 text-error' : 'bg-primary/10 text-primary');
        elements.feedback.classList.remove('hidden');
    }

    function saveTask(event) {
        event.preventDefault();
        const payload = {
            project_id: parseInt(elements.inputProject.value, 10),
            title: elements.inputTitle.value.trim(),
            description: elements.inputDescription.value.trim(),
            assigned_to: elements.inputAssignee.value ? parseInt(elements.inputAssignee.value, 10) : 0,
            department: elements.inputDepartment.value,
            priority: elements.inputPriority.value,
            deadline: elements.inputDeadline.value,
            status: elements.inputStatus.value,
        };

        if (!payload.project_id || !payload.title) {
            showFeedback('Project and title are required.', 'error');
            return;
        }

        const taskId = elements.inputId.value;
        const url = taskId ? `${apiBase}/tasks/${taskId}` : `${apiBase}/tasks`;

        fetch(url, {
            method: 'POST',
            credentials: 'same-origin',
            headers: {
                'Content-Type': 'application/json',
                'X-WP-Nonce': apiNonce,
            },
            body: JSON.stringify(payload),
        })
            .then((response) => response.json())
            .then((data) => {
                if (data && data.success) {
                    closeTaskModal();
                    loadTasks();
                } else {
                    showFeedback('Unable to save task.', 'error');
                }
            })
            .catch(() => {
                showFeedback('Unable to save task.', 'error');
            });
    }

    document.addEventListener('DOMContentLoaded', () => {
        elements.filterProject.addEventListener('change', (event) => {
            state.filters.project_id = event.target.value;
            loadTasks();
        });
        elements.filterStatus.addEventListener('change', (event) => {
            state.filters.status = event.target.value;
            loadTasks();
        });
        elements.filterDepartment.addEventListener('change', (event) => {
            state.filters.department = event.target.value;
            loadTasks();
        });
        elements.filterAssignee.addEventListener('change', (event) => {
            state.filters.assigned_to = event.target.value;
            loadTasks();
        });
        elements.clearFilters.addEventListener('click', () => {
            state.filters = { project_id: '', status: '', department: '', assigned_to: '' };
            elements.filterProject.value = '';
            elements.filterStatus.value = '';
            elements.filterDepartment.value = '';
            elements.filterAssignee.value = '';
            loadTasks();
        });

        elements.createButton.addEventListener('click', () => openTaskModal(null));
        elements.modalClose.addEventListener('click', closeTaskModal);
        elements.form.addEventListener('submit', saveTask);
        document.getElementById('ps-task-cancel').addEventListener('click', closeTaskModal);
        elements.deleteButton.addEventListener('click', () => {
            if (!elements.inputId.value) return;
            deleteTask(elements.inputId.value);
        });

        document.getElementById('ps-prev-page').addEventListener('click', () => {
            if (state.page > 1) {
                state.page -= 1;
                renderTasks();
            }
        });
        document.getElementById('ps-next-page').addEventListener('click', () => {
            if (state.page * state.pageSize < state.tasks.length) {
                state.page += 1;
                renderTasks();
            }
        });

        loadTasks();
    });
})();
</script>
</div>

