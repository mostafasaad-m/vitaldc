<?php 
/**
 * Template Name: Vital-Start-Step-4
 */
get_header('start');

$order_id = $_SESSION['vitaldc_onboarding_order_id'] ?? 0;
if ( ! $order_id && isset( $_GET['order_id'] ) ) {
    $order_id = absint( wp_unslash( $_GET['order_id'] ) );
}

$selected_package = '';
$selected_addons = array();
if ( $order_id && function_exists( 'wc_get_order' ) ) {
    $order = wc_get_order( $order_id );
    if ( $order ) {
        $selected_package = $order->get_meta( '_onboarding_package', true );
        $selected_addons = (array) $order->get_meta( '_onboarding_addons', true );
    }
}

if ( empty( $selected_package ) ) {
    $selected_package = vitaldc_t('Growth & Marketing Package', 'باقة النمو والتسويق');
}
?>

<style>
    .material-symbols-outlined {
        font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        vertical-align: middle;
    }
    .term-checkbox-card.is-checked {
        border-color: #FB8500 !important;
        background-color: rgba(251, 133, 0, 0.04) !important;
    }
</style>

<!-- Header Banner -->
<div class="bg-slate-50 border-b border-slate-200 p-6 md:p-8">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <span class="font-label-caps text-xs text-export-orange font-bold uppercase tracking-widest block mb-1">
                <?php echo vitaldc_t('STEP 04 OF 04 : FINAL REVIEW', 'الخطوة 04 من 04: المراجعة النهائية'); ?>
            </span>
            <h1 class="font-headline-lg text-2xl md:text-3xl font-extrabold text-slate-900 uppercase tracking-tight">
                <?php echo vitaldc_t('Review Your Order & Confirm', 'مراجعة وتأكيد الطلب'); ?>
            </h1>
        </div>
        <div class="font-mono text-xs text-slate-600 bg-white border border-slate-200 border-l-4 border-l-export-orange px-4 py-2 rounded shadow-sm text-right">
            <span class="text-slate-400 font-bold block text-[10px] uppercase"><?php echo vitaldc_t('ONBOARDING REFERENCE', 'مرجع الطلب'); ?></span>
            <span class="font-bold text-slate-900 text-sm">VDC-<?php echo esc_html( $order_id ? $order_id : '8821' ); ?></span>
        </div>
    </div>
</div>

<!-- Main Content Grid -->
<div class="p-6 md:p-8 bg-white">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
        
        <!-- Left Column: Summary & Terms -->
        <div class="lg:col-span-7 space-y-8">
            
            <!-- Selected Package & Features -->
            <section class="space-y-4">
                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-export-orange text-2xl">inventory_2</span>
                    <h2 class="font-headline-md text-lg font-bold text-slate-900 uppercase tracking-tight">
                        <?php echo vitaldc_t('Selected Package & Features', 'ملخص الباقة والميزات'); ?>
                    </h2>
                </div>

                <!-- Package Box -->
                <div class="p-5 border border-slate-200 rounded-lg bg-slate-50/70 flex justify-between items-center group hover:border-export-orange transition-colors">
                    <div>
                        <p class="font-label-caps text-[11px] text-slate-500 uppercase font-semibold mb-1">
                            <?php echo vitaldc_t('Selected Package', 'الباقة المختارة'); ?>
                        </p>
                        <p id="display-selected-package" class="font-headline-md text-lg font-extrabold text-slate-900">
                            <?php echo esc_html( $selected_package ); ?>
                        </p>
                    </div>
                    <a href="/start/tiers" class="flex items-center gap-1 text-xs font-semibold text-slate-500 hover:text-export-orange transition-colors px-3 py-1.5 rounded border border-slate-200 bg-white shadow-sm">
                        <span><?php echo vitaldc_t('Edit', 'تعديل'); ?></span>
                        <span class="material-symbols-outlined text-sm">edit</span>
                    </a>
                </div>

                <!-- Extensions / Addons -->
                <div class="p-5 border border-slate-200 rounded-lg bg-slate-50/70">
                    <p class="font-label-caps text-[11px] text-slate-500 uppercase font-semibold mb-3">
                        <?php echo vitaldc_t('Selected Add-on Features', 'الميزات الإضافية المختارة'); ?>
                    </p>
                    <div id="display-selected-addons" class="flex flex-wrap gap-2.5">
                        <?php if ( ! empty( $selected_addons ) ) : ?>
                            <?php foreach ( $selected_addons as $addon ) : ?>
                                <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-white text-slate-800 rounded border border-slate-200 shadow-sm text-xs font-semibold">
                                    <span class="material-symbols-outlined text-export-orange text-base" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                    <span><?php echo esc_html( $addon ); ?></span>
                                </div>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-white text-slate-800 rounded border border-slate-200 shadow-sm text-xs font-semibold">
                                <span class="material-symbols-outlined text-export-orange text-base" style="font-variation-settings: 'FILL' 1;">contacts</span>
                                <span><?php echo vitaldc_t('CRM & Lead Management', 'نظام إدارة العملاء CRM'); ?></span>
                            </div>
                            <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-white text-slate-800 rounded border border-slate-200 shadow-sm text-xs font-semibold">
                                <span class="material-symbols-outlined text-export-orange text-base" style="font-variation-settings: 'FILL' 1;">account_tree</span>
                                <span><?php echo vitaldc_t('ERP & Operations Suite', 'نظام الموارد والعمليات ERP'); ?></span>
                            </div>
                            <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-white text-slate-800 rounded border border-slate-200 shadow-sm text-xs font-semibold">
                                <span class="material-symbols-outlined text-export-orange text-base" style="font-variation-settings: 'FILL' 1;">smart_toy</span>
                                <span><?php echo vitaldc_t('Smart AI Support Bot', 'مساعد الذكاء الاصطناعي'); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>

            <!-- Terms & Service Agreement -->
            <section class="space-y-4">
                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-export-orange text-2xl">gavel</span>
                    <h2 class="font-headline-md text-lg font-bold text-slate-900 uppercase tracking-tight">
                        <?php echo vitaldc_t('Terms & Service Agreement', 'الشروط واتفاقية الخدمة'); ?>
                    </h2>
                </div>

                <div class="space-y-3">
                    <!-- Term 1 -->
                    <label class="term-checkbox-card is-checked flex items-start gap-4 p-4 border border-export-orange rounded-lg cursor-pointer bg-amber-500/5 hover:bg-slate-50 transition-all select-none">
                        <input checked type="checkbox" class="mt-1 w-5 h-5 rounded border-slate-300 text-export-orange focus:ring-export-orange accent-export-orange">
                        <div>
                            <p class="font-label-caps text-sm font-bold text-slate-900 uppercase">
                                <?php echo vitaldc_t('Client Data & Full IP Ownership', 'ضمان الملكية الكاملة للبيانات والأصول'); ?>
                            </p>
                            <p class="text-xs text-slate-600 mt-1 leading-relaxed">
                                <?php echo vitaldc_t('Confirm that your company retains 100% full ownership of your domain name, website source code, visual assets, and customer databases upon launch.', 'تأكيد احتفاظ شركتك بالملكية الكاملة 100% لنطاق موقعك، والأكواد البرمجية، والتصاميم، وقواعد بيانات عملائك.'); ?>
                            </p>
                        </div>
                    </label>

                    <!-- Term 2 -->
                    <label class="term-checkbox-card flex items-start gap-4 p-4 border border-slate-200 rounded-lg cursor-pointer bg-white hover:bg-slate-50 transition-all select-none">
                        <input type="checkbox" class="mt-1 w-5 h-5 rounded border-slate-300 text-export-orange focus:ring-export-orange accent-export-orange">
                        <div>
                            <p class="font-label-caps text-sm font-bold text-slate-900 uppercase">
                                <?php echo vitaldc_t('Service Scope & Onboarding Agreement', 'اتفاقية نطاق الخدمة والمتابعة'); ?>
                            </p>
                            <p class="text-xs text-slate-600 mt-1 leading-relaxed">
                                <?php echo vitaldc_t('Accept terms for dedicated onboarding guidance, design approval milestones, and continuous technical support aligned with your plan.', 'الموافقة على شروط الإعداد المخصص، ومراحل اعتماد التصميم، والدعم الفني المباشر لباقك.'); ?>
                            </p>
                        </div>
                    </label>

                    <!-- Term 3 -->
                    <label class="term-checkbox-card flex items-start gap-4 p-4 border border-slate-200 rounded-lg cursor-pointer bg-white hover:bg-slate-50 transition-all select-none">
                        <input type="checkbox" class="mt-1 w-5 h-5 rounded border-slate-300 text-export-orange focus:ring-export-orange accent-export-orange">
                        <div>
                            <p class="font-label-caps text-sm font-bold text-slate-900 uppercase">
                                <?php echo vitaldc_t('Privacy & Data Protection Standard', 'معايير الخصوصية وحماية البيانات'); ?>
                            </p>
                            <p class="text-xs text-slate-600 mt-1 leading-relaxed">
                                <?php echo vitaldc_t('All business details, inquiry submissions, and project specifications are processed strictly under secure confidential guidelines.', 'جميع معلومات الشركة والبيانات والاستفسارات تُعالج بسرية وحماية كاملة وفق أعلى المعايير.'); ?>
                            </p>
                        </div>
                    </label>
                </div>
            </section>
        </div>

        <!-- Right Column: Specs & Commitments -->
        <div class="lg:col-span-5">
            <div class="sticky top-24">
                <div class="bg-surface-deep text-white p-6 md:p-8 rounded-lg shadow-xl relative overflow-hidden border border-white/10">
                    <div class="absolute top-0 right-0 p-4 opacity-10 pointer-events-none">
                        <span class="material-symbols-outlined text-8xl">verified_user</span>
                    </div>

                    <h3 class="font-label-caps text-xs text-secondary mb-6 border-b border-white/10 pb-3 uppercase tracking-widest font-bold flex items-center justify-between">
                        <span><?php echo vitaldc_t('Service Standards & Guarantees', 'معايير وضمانات الخدمة'); ?></span>
                        <span class="material-symbols-outlined text-base">shield</span>
                    </h3>

                    <div class="space-y-5">
                        <div class="flex justify-between items-center border-b border-white/10 pb-3">
                            <span class="font-label-caps text-xs text-slate-400 uppercase"><?php echo vitaldc_t('Performance Standard', 'كفاءة الأداء'); ?></span>
                            <span class="font-label-caps text-sm font-bold text-secondary"><?php echo vitaldc_t('Optimized & High Speed', 'سرعة وأداء عالٍ'); ?></span>
                        </div>

                        <div class="flex justify-between items-center border-b border-white/10 pb-3">
                            <span class="font-label-caps text-xs text-slate-400 uppercase"><?php echo vitaldc_t('Security Shield', 'مستوى الأمان'); ?></span>
                            <span class="font-label-caps text-sm font-bold text-white"><?php echo vitaldc_t('SSL / TLS Encrypted', 'مشفّر بأمان SSL'); ?></span>
                        </div>

                        <div class="flex justify-between items-center border-b border-white/10 pb-3">
                            <span class="font-label-caps text-xs text-slate-400 uppercase"><?php echo vitaldc_t('Onboarding Flow', 'مسار الإعداد'); ?></span>
                            <span class="font-label-caps text-sm font-bold text-export-orange"><?php echo vitaldc_t('Dedicated Kickoff', 'بدء مباشر ومخصص'); ?></span>
                        </div>

                        <div class="pt-2">
                            <div class="flex justify-between items-center mb-2">
                                <div class="flex items-center gap-2">
                                    <span class="w-2 h-2 bg-secondary rounded-full animate-pulse"></span>
                                    <span class="font-label-caps text-[10px] text-slate-400 uppercase tracking-wider"><?php echo vitaldc_t('System Readiness', 'جاهزية النظام'); ?></span>
                                </div>
                                <span class="font-label-caps text-xs text-secondary font-bold">100%</span>
                            </div>
                            <div class="w-full bg-slate-800 h-2 rounded-full overflow-hidden">
                                <div class="bg-export-orange h-full w-[100%] transition-all"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Bottom 100% Full-Width Footer Section -->
<section class="bg-surface-deep text-white border-t border-slate-800 py-10 px-6 md:px-10 rounded-b-lg w-full relative z-10">
    <div class="max-w-container-max mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left rtl:md:text-right">
            
            <!-- Column 1 -->
            <div class="space-y-2">
                <span class="font-label-caps text-secondary text-xs uppercase tracking-widest font-semibold block">
                    <?php echo vitaldc_t('Global Visibility', 'ظهور واسع وعالمي'); ?>
                </span>
                <h4 class="font-headline-md text-base text-white font-bold uppercase">
                    <?php echo vitaldc_t('Fast Regional Access', 'سرعة وصول توافقية'); ?>
                </h4>
                <p class="text-slate-400 text-xs leading-relaxed">
                    <?php echo vitaldc_t('Your website is optimized for fast loading and smooth experience across regional and global markets.', 'موقعك محسّن للتحميل السريع وتجربة تصفح سلسة عبر الأسواق المحلية والعالمية.'); ?>
                </p>
            </div>

            <!-- Column 2 -->
            <div class="space-y-2">
                <span class="font-label-caps text-secondary text-xs uppercase tracking-widest font-semibold block">
                    <?php echo vitaldc_t('Security & Trust', 'الأمان والثقة'); ?>
                </span>
                <h4 class="font-headline-md text-base text-white font-bold uppercase">
                    <?php echo vitaldc_t('Protected Data & Forms', 'نماذج وبيانات محمية'); ?>
                </h4>
                <p class="text-slate-400 text-xs leading-relaxed">
                    <?php echo vitaldc_t('All customer submissions, lead records, and company files are encrypted and securely protected.', 'جميع بيانات العملاء واستفساراتهم وسجلات الشركة محمية ومشفّرة بأمان.'); ?>
                </p>
            </div>

            <!-- Column 3 -->
            <div class="space-y-2">
                <span class="font-label-caps text-secondary text-xs uppercase tracking-widest font-semibold block">
                    <?php echo vitaldc_t('Dedicated Support', 'متابعة ودعم مستمر'); ?>
                </span>
                <h4 class="font-headline-md text-base text-white font-bold uppercase">
                    <?php echo vitaldc_t('Expert Team Guidance', 'فريق دعم وتوجيه متخصص'); ?>
                </h4>
                <p class="text-slate-400 text-xs leading-relaxed">
                    <?php echo vitaldc_t('Our technical team supports and guides you through every step of your project onboarding and launch.', 'يقوم فريقنا التقني بمرافقتك وتوجيهك في كل مرحلة من مراحل إعداد وتدشين مشروعك.'); ?>
                </p>
            </div>

        </div>
    </div>
</section>

<!-- Interaction Script -->
<script>
    document.querySelectorAll('.term-checkbox-card input[type="checkbox"]').forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const parent = this.closest('.term-checkbox-card');
            if (!parent) return;
            if (this.checked) {
                parent.classList.add('is-checked', 'border-export-orange', 'bg-amber-500/5');
                parent.classList.remove('border-slate-200', 'bg-white');
            } else {
                parent.classList.remove('is-checked', 'border-export-orange', 'bg-amber-500/5');
                parent.classList.add('border-slate-200', 'bg-white');
            }
        });
    });

    document.addEventListener('DOMContentLoaded', () => {
        const savedPkg = localStorage.getItem('vitaldc_selected_package');
        const pkgDisplay = document.getElementById('display-selected-package');
        if (savedPkg && pkgDisplay) {
            pkgDisplay.textContent = savedPkg;
        }

        const savedAddons = localStorage.getItem('vitaldc_selected_addons');
        const addonsContainer = document.getElementById('display-selected-addons');
        if (savedAddons && addonsContainer) {
            try {
                const list = JSON.parse(savedAddons);
                if (Array.isArray(list) && list.length > 0) {
                    addonsContainer.innerHTML = list.map(item => `
                        <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-white text-slate-800 rounded border border-slate-200 shadow-sm text-xs font-semibold">
                            <span class="material-symbols-outlined text-export-orange text-base" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                            <span>${item}</span>
                        </div>
                    `).join('');
                }
            } catch(e){}
        }
    });
</script>

<?php get_footer('start'); ?>