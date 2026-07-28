<?php 
/**
 * Template Name: File Manager Page
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

$current_user_id = get_current_user_id();
$can_manage_files = current_user_can('manage_options') ? 'true' : 'false';
?>
<div class="bg-background text-on-background">
    <?php get_template_part('template-parts/sidebar'); ?>
    <?php get_template_part('template-parts/topbar'); ?>

    <main class="pl-64 pt-16 min-h-screen p-10">
        <div id="ps-file-root" class="space-y-8">
            <div class="flex flex-col gap-5 lg:flex-row lg:items-end lg:justify-between">
                <div class="max-w-3xl">
                    <nav class="flex gap-2 mb-4 text-xs font-semibold uppercase tracking-widest text-on-surface-variant/60">
                        <span>Manufacturing</span>
                        <span>/</span>
                        <span class="text-primary">File Management</span>
                    </nav>
                    <h1 class="text-5xl font-extrabold headline-font tracking-tight text-on-surface leading-tight">
                        File & Asset Management
                    </h1>
                    <p class="mt-3 text-sm text-on-surface-variant max-w-2xl">
                        Upload documents and media, link assets to a project or task, and manage downloads from one central place.
                    </p>
                </div>

                <button id="ps-upload-file-button" class="inline-flex items-center justify-center gap-2 rounded-xl bg-primary px-6 py-3 text-sm font-semibold text-on-primary shadow-md hover:bg-primary-dim transition-all active:scale-[0.98]">
                    <span class="material-symbols-outlined text-lg">upload</span>
                    Upload Asset
                </button>
            </div>

            <div class="grid gap-4 xl:grid-cols-3 rounded-3xl border border-outline-variant/10 bg-surface-container-lowest p-6 shadow-sm">
                <label class="block text-xs font-bold uppercase tracking-widest text-on-surface-variant">
                    Project
                    <select id="ps-filter-project" class="mt-2 w-full rounded-xl border border-outline-variant/30 bg-surface-container-low px-4 py-3 text-sm text-on-surface focus:ring-2 focus:ring-primary/10">
                        <option value="">All Projects</option>
                        <?php foreach ($project_options as $project): ?>
                            <option value="<?php echo esc_attr($project['id']); ?>"><?php echo esc_html($project['title']); ?></option>
                        <?php endforeach; ?>
                    </select>
                </label>

                <label class="block text-xs font-bold uppercase tracking-widest text-on-surface-variant">
                    Task
                    <select id="ps-filter-task" class="mt-2 w-full rounded-xl border border-outline-variant/30 bg-surface-container-low px-4 py-3 text-sm text-on-surface focus:ring-2 focus:ring-primary/10">
                        <option value="">All Tasks</option>
                    </select>
                </label>

                <label class="block text-xs font-bold uppercase tracking-widest text-on-surface-variant">
                    File Type
                    <select id="ps-filter-file-type" class="mt-2 w-full rounded-xl border border-outline-variant/30 bg-surface-container-low px-4 py-3 text-sm text-on-surface focus:ring-2 focus:ring-primary/10">
                        <option value="">All File Types</option>
                    </select>
                </label>
            </div>

            <div class="overflow-hidden rounded-3xl border border-outline-variant/10 bg-surface-container-lowest shadow-sm">
                <div class="grid grid-cols-12 gap-4 px-6 py-4 text-xs font-bold uppercase tracking-widest text-on-surface-variant bg-surface-container-low/60">
                    <div class="col-span-4">File</div>
                    <div class="col-span-2">Type</div>
                    <div class="col-span-3">Project / Task</div>
                    <div class="col-span-2 text-right">Uploaded</div>
                    <div class="col-span-1 text-right">Action</div>
                </div>
                <div id="ps-file-rows" class="divide-y divide-outline-variant/5"></div>
                <div id="ps-file-count" class="px-6 py-4 text-xs text-on-surface-variant">Loading files...</div>
            </div>
        </div>
    </main>

    <div id="ps-file-modal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40 px-4 py-8">
        <div class="w-full max-w-2xl rounded-3xl bg-surface-container-lowest p-8 shadow-2xl border border-outline-variant/20">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h2 id="ps-file-modal-title" class="text-2xl font-bold text-on-surface">Upload Asset</h2>
                    <p class="mt-1 text-sm text-on-surface-variant">Choose a file, attach it to a project, and optionally link it to a task.</p>
                </div>
                <button id="ps-file-modal-close" class="text-on-surface-variant hover:text-on-surface"><span class="material-symbols-outlined">close</span></button>
            </div>
            <div id="ps-file-feedback" class="mb-4 hidden rounded-xl px-4 py-3 text-sm"></div>
            <form id="ps-file-form" class="space-y-6">
                <div class="grid gap-4 md:grid-cols-2">
                    <label class="block text-sm text-on-surface-variant">
                        <span class="text-xs font-bold uppercase tracking-widest">Project</span>
                        <select id="ps-file-project" required class="mt-2 w-full rounded-xl border border-outline-variant/30 bg-surface-container-low px-4 py-3 text-sm text-on-surface focus:ring-2 focus:ring-primary/10">
                            <option value="">Select project</option>
                            <?php foreach ($project_options as $project): ?>
                                <option value="<?php echo esc_attr($project['id']); ?>"><?php echo esc_html($project['title']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </label>
                    <label class="block text-sm text-on-surface-variant">
                        <span class="text-xs font-bold uppercase tracking-widest">Task</span>
                        <select id="ps-file-task" class="mt-2 w-full rounded-xl border border-outline-variant/30 bg-surface-container-low px-4 py-3 text-sm text-on-surface focus:ring-2 focus:ring-primary/10">
                            <option value="">No task</option>
                        </select>
                    </label>
                </div>

                <label class="block text-sm text-on-surface-variant">
                    <span class="text-xs font-bold uppercase tracking-widest">Asset</span>
                    <input id="ps-file-input" type="file" required class="mt-2 w-full rounded-xl border border-outline-variant/30 bg-surface-container-low px-4 py-3 text-sm text-on-surface focus:ring-2 focus:ring-primary/10" />
                </label>

                <label class="block text-sm text-on-surface-variant">
                    <span class="text-xs font-bold uppercase tracking-widest">Description</span>
                    <input id="ps-file-note" type="text" placeholder="Optional notes or reference" class="mt-2 w-full rounded-xl border border-outline-variant/30 bg-surface-container-low px-4 py-3 text-sm text-on-surface focus:ring-2 focus:ring-primary/10" />
                </label>

                <div class="flex flex-col gap-3 sm:flex-row sm:justify-end">
                    <button type="button" id="ps-file-cancel" class="rounded-xl border border-outline-variant/30 bg-surface-container-high px-6 py-3 text-sm font-semibold text-on-surface hover:bg-surface-container-highest transition-colors">Cancel</button>
                    <button type="submit" class="rounded-xl bg-primary px-6 py-3 text-sm font-semibold text-on-primary hover:bg-primary-dim transition-colors">Upload File</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
(function () {
    const apiBase = '<?php echo esc_url(rest_url('ps/v1')); ?>';
    const apiNonce = '<?php echo esc_js(wp_create_nonce('wp_rest')); ?>';
    const projects = <?php echo wp_json_encode($project_options, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP); ?>;
    const users = <?php echo wp_json_encode($user_options, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP); ?>;
    const currentUserId = <?php echo intval($current_user_id); ?>;
    const canManageFiles = <?php echo $can_manage_files; ?>;

    const state = {
        files: [],
        tasks: [],
        filters: {
            project_id: '',
            task_id: '',
            file_type: '',
        },
    };

    const elements = {
        fileRows: document.getElementById('ps-file-rows'),
        fileCount: document.getElementById('ps-file-count'),
        filterProject: document.getElementById('ps-filter-project'),
        filterTask: document.getElementById('ps-filter-task'),
        filterFileType: document.getElementById('ps-filter-file-type'),
        uploadButton: document.getElementById('ps-upload-file-button'),
        modal: document.getElementById('ps-file-modal'),
        modalClose: document.getElementById('ps-file-modal-close'),
        form: document.getElementById('ps-file-form'),
        feedback: document.getElementById('ps-file-feedback'),
        projectInput: document.getElementById('ps-file-project'),
        taskInput: document.getElementById('ps-file-task'),
        fileInput: document.getElementById('ps-file-input'),
        noteInput: document.getElementById('ps-file-note'),
        cancelButton: document.getElementById('ps-file-cancel'),
    };

    function escapeHtml(value) {
        if (!value) return '';
        return String(value)
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/"/g, '&quot;')
            .replace(/'/g, '&#039;');
    }

    function formatDate(value) {
        if (!value) return 'Unknown';
        const date = new Date(value);
        if (Number.isNaN(date.getTime())) return 'Invalid date';
        return date.toLocaleDateString(undefined, { month: 'short', day: 'numeric', year: 'numeric' });
    }

    function getProjectTitle(projectId) {
        const project = projects.find((item) => item.id === projectId);
        return project ? project.title : 'Unknown project';
    }

    function getTaskTitle(taskId) {
        const task = state.tasks.find((item) => item.id === taskId);
        return task ? task.title : 'No task';
    }

    function getUserName(userId) {
        const user = users.find((item) => item.id === userId);
        return user ? user.name : `User #${userId}`;
    }

    function getTypeLabel(type) {
        if (!type) return 'Unknown';
        if (type.includes('pdf')) return 'PDF';
        if (type.includes('image')) return 'Image';
        if (type.includes('spreadsheet') || type.includes('excel')) return 'Spreadsheet';
        if (type.includes('zip')) return 'Archive';
        if (type.includes('word')) return 'Document';
        return type;
    }

    function buildQuery() {
        const params = new URLSearchParams();
        if (state.filters.project_id) params.set('project_id', state.filters.project_id);
        if (state.filters.task_id) params.set('task_id', state.filters.task_id);
        if (state.filters.file_type) params.set('file_type', state.filters.file_type);
        return params.toString();
    }

    function updateTypeFilterOptions() {
        const fileTypes = Array.from(new Set(state.files.map((file) => file.file_type || 'other'))).sort();
        const current = elements.filterFileType.value;
        elements.filterFileType.innerHTML = '<option value="">All File Types</option>' + fileTypes.map((type) => {
            return `<option value="${escapeHtml(type)}">${escapeHtml(getTypeLabel(type))}</option>`;
        }).join('');
        if (current) {
            elements.filterFileType.value = current;
        }
    }

    function renderFiles() {
        if (!state.files.length) {
            elements.fileRows.innerHTML = '<div class="px-6 py-10 text-center text-sm text-on-surface-variant">No files match the current filters.</div>';
            elements.fileCount.textContent = '0 files';
            return;
        }

        elements.fileRows.innerHTML = state.files.map((file) => {
            const projectLabel = getProjectTitle(parseInt(file.project_id, 10));
            const taskLabel = file.task_id ? getTaskTitle(parseInt(file.task_id, 10)) : 'No task';
            const canDelete = canManageFiles || file.uploaded_by === currentUserId;
            return `
                <div class="grid grid-cols-12 gap-4 px-6 py-5 items-center hover:bg-surface-container-high/50 transition-colors">
                    <div class="col-span-4">
                        <p class="text-sm font-semibold text-on-surface truncate">${escapeHtml(file.file_name)}</p>
                        <p class="text-[11px] text-on-surface-variant mt-1">Uploaded by ${escapeHtml(getUserName(parseInt(file.uploaded_by, 10)))}</p>
                    </div>
                    <div class="col-span-2 text-sm text-on-surface">${escapeHtml(getTypeLabel(file.file_type))}</div>
                    <div class="col-span-3 text-sm text-on-surface">
                        <div>${escapeHtml(projectLabel)}</div>
                        <div class="text-on-surface-variant text-[11px] mt-1">${escapeHtml(taskLabel)}</div>
                    </div>
                    <div class="col-span-2 text-right text-sm text-on-surface">${escapeHtml(formatDate(file.created_at))}</div>
                    <div class="col-span-1 text-right space-x-2">
                        <a href="${escapeHtml(file.file_url)}" target="_blank" rel="noreferrer" class="text-primary text-sm font-semibold hover:underline">Download</a>
                        ${canDelete ? `<button data-file-id="${file.id}" class="ps-file-delete inline text-sm font-semibold text-error hover:underline">Delete</button>` : ''}
                    </div>
                </div>
            `;
        }).join('');

        elements.fileCount.textContent = `${state.files.length} file${state.files.length === 1 ? '' : 's'} loaded`;
        attachRowEvents();
    }

    function attachRowEvents() {
        elements.fileRows.querySelectorAll('.ps-file-delete').forEach((button) => {
            button.addEventListener('click', () => {
                const fileId = button.dataset.fileId;
                deleteFile(fileId);
            });
        });
    }

    function loadFiles() {
        const query = buildQuery();
        const url = `${apiBase}/files${query ? '?' + query : ''}`;
        fetch(url, {
            credentials: 'same-origin',
            headers: {
                'X-WP-Nonce': apiNonce,
            },
        })
            .then(async (response) => {
                if (!response.ok) {
                    const details = await response.text();
                    throw new Error(`Failed to load files (${response.status}): ${details}`);
                }
                return response.json();
            })
            .then((files) => {
                state.files = Array.isArray(files) ? files : [];
                updateTypeFilterOptions();
                renderFiles();
            })
            .catch((error) => {
                console.error('File load failed:', error);
                elements.fileRows.innerHTML = '<div class="px-6 py-10 text-center text-sm text-on-surface-variant">Unable to load files.</div>';
                elements.fileCount.textContent = 'Could not load files';
            });
    }

    function loadTasks(projectId) {
        if (!projectId) {
            state.tasks = [];
            elements.filterTask.innerHTML = '<option value="">All Tasks</option>';
            elements.taskInput.innerHTML = '<option value="">No task</option>';
            return;
        }

        fetch(`${apiBase}/tasks?project_id=${encodeURIComponent(projectId)}`, {
            credentials: 'same-origin',
            headers: {
                'X-WP-Nonce': apiNonce,
            },
        })
            .then(async (response) => {
                if (!response.ok) {
                    throw new Error(`Failed to load tasks (${response.status})`);
                }
                return response.json();
            })
            .then((tasks) => {
                state.tasks = Array.isArray(tasks) ? tasks : [];
                const filterOptions = ['<option value="">All Tasks</option>'];
                const modalOptions = ['<option value="">No task</option>'];
                state.tasks.forEach((task) => {
                    filterOptions.push(`<option value="${task.id}">${escapeHtml(task.title)}</option>`);
                    modalOptions.push(`<option value="${task.id}">${escapeHtml(task.title)}</option>`);
                });
                elements.filterTask.innerHTML = filterOptions.join('');
                elements.taskInput.innerHTML = modalOptions.join('');
            })
            .catch((error) => {
                console.error('Task load failed:', error);
                elements.filterTask.innerHTML = '<option value="">All Tasks</option>';
                elements.taskInput.innerHTML = '<option value="">No task</option>';
            });
    }

    function openFileModal() {
        elements.feedback.classList.add('hidden');
        elements.fileInput.value = '';
        elements.noteInput.value = '';
        elements.modal.classList.remove('hidden');
        document.documentElement.style.overflow = 'hidden';
    }

    function closeFileModal() {
        elements.modal.classList.add('hidden');
        document.documentElement.style.overflow = '';
    }

    function showFeedback(message, type) {
        elements.feedback.textContent = message;
        elements.feedback.className = 'mb-4 rounded-xl px-4 py-3 text-sm';
        elements.feedback.classList.add(type === 'error' ? 'bg-error/10 text-error' : 'bg-primary/10 text-primary');
        elements.feedback.classList.remove('hidden');
    }

    function saveFile(event) {
        event.preventDefault();

        const projectId = elements.projectInput.value;
        const file = elements.fileInput.files[0];
        if (!projectId || !file) {
            showFeedback('Project and file are required.', 'error');
            return;
        }

        const formData = new FormData();
        formData.append('project_id', projectId);
        if (elements.taskInput.value) {
            formData.append('task_id', elements.taskInput.value);
        }
        formData.append('file', file);
        formData.append('note', elements.noteInput.value.trim());

        fetch(`${apiBase}/files`, {
            method: 'POST',
            credentials: 'same-origin',
            headers: {
                'X-WP-Nonce': apiNonce,
            },
            body: formData,
        })
            .then(async (response) => {
                const data = await response.json();
                if (!response.ok) {
                    throw new Error(data.message || 'Upload failed');
                }
                return data;
            })
            .then((data) => {
                closeFileModal();
                loadFiles();
                showFeedback('File uploaded successfully.', 'success');
            })
            .catch((error) => {
                console.error('File upload failed:', error);
                showFeedback(error.message || 'Unable to upload file.', 'error');
            });
    }

    function deleteFile(fileId) {
        if (!confirm('Delete this file?')) return;

        fetch(`${apiBase}/files/${fileId}`, {
            method: 'DELETE',
            credentials: 'same-origin',
            headers: {
                'X-WP-Nonce': apiNonce,
            },
        })
            .then(async (response) => {
                const data = await response.json();
                if (!response.ok) {
                    throw new Error(data.message || 'Delete failed');
                }
                return data;
            })
            .then(() => {
                loadFiles();
            })
            .catch((error) => {
                console.error('File delete failed:', error);
                showFeedback(error.message || 'Unable to delete file.', 'error');
            });
    }

    document.addEventListener('DOMContentLoaded', () => {
        elements.filterProject.addEventListener('change', (event) => {
            state.filters.project_id = event.target.value;
            state.filters.task_id = '';
            elements.filterTask.value = '';
            loadTasks(event.target.value);
            loadFiles();
        });

        elements.filterTask.addEventListener('change', (event) => {
            state.filters.task_id = event.target.value;
            loadFiles();
        });

        elements.filterFileType.addEventListener('change', (event) => {
            state.filters.file_type = event.target.value;
            loadFiles();
        });

        elements.uploadButton.addEventListener('click', () => {
            openFileModal();
        });

        elements.modalClose.addEventListener('click', closeFileModal);
        elements.cancelButton.addEventListener('click', closeFileModal);
        elements.form.addEventListener('submit', saveFile);

        elements.projectInput.addEventListener('change', (event) => {
            loadTasks(event.target.value);
        });

        loadTasks('');
        loadFiles();
    });
})();
</script>

