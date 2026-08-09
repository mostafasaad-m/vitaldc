<?php 
/**
 * Template Name: Vital-Start-Step-2
 */

 ?>
 <?php get_header('start'); ?>
 
<script>
        // Micro-interaction for package selection
        const txtSelectPackage = <?php echo json_encode( vitaldc_t( 'SELECT PACKAGE', 'اختر الباقة' ) ); ?>;
        const txtPackageSelected = <?php echo json_encode( vitaldc_t( 'PACKAGE SELECTED', 'تم اختيار الباقة' ) ); ?>;

        const cards = document.querySelectorAll('.package-card');
        const selectButtons = document.querySelectorAll('.select-btn');

        cards.forEach((card, index) => {
            card.addEventListener('click', () => {
                // Clear all active states
                cards.forEach(c => {
                    c.classList.remove('active-package');
                    const btn = c.querySelector('.select-btn');
                    btn.classList.remove('bg-export-orange', 'text-black', 'font-bold');
                    btn.classList.add('border-2', 'border-export-orange', 'text-export-orange');
                    btn.textContent = txtSelectPackage;
                });

                // Set active state
                card.classList.add('active-package');
                const activeBtn = card.querySelector('.select-btn');
                activeBtn.classList.remove('border-2', 'border-export-orange', 'text-export-orange');
                activeBtn.classList.add('bg-export-orange', 'text-black', 'font-bold');
                activeBtn.textContent = txtPackageSelected;
                
                // Audio feedback (optional/conceptual)
                console.log(`Package ${['S', 'M', 'L'][index]} committed to memory.`);
            });
        });
    </script>
<style>
        body {
            background-color: #00161f;
            color: #bde9ff;
            font-family: 'Inter', sans-serif;
        }
        .grid-pattern {
            background-image: 
                linear-gradient(to right, rgba(142, 202, 230, 0.05) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(142, 202, 230, 0.05) 1px, transparent 1px);
            background-size: 40px 40px;
        }
        .mono { font-family: 'JetBrains Mono', monospace; }
        .geist { font-family: 'Geist', sans-serif; }
        
        .package-card:hover .select-btn {
            background-color: #FB8500;
            color: #000000;
        }
        
        .active-package {
            border-color: #FB8500 !important;
            box-shadow: 0 0 20px rgba(251, 133, 0, 0.1);
        }
    </style>

<!-- Progress Navigation (Dark Context) -->

<div class="items-center flex-grow flex flex-col bg-surface">
<!-- Content Canvas (Light/Technical Transition) -->
<section class="relative bg-white text-surface-deep flex-grow px-margin-mobile pt-10 grid-pattern">
<div class="max-w-container-max mx-auto relative z-10">
<header class="mb-stack-lg border-l-4 border-export-orange pl-6">
<span class="font-label-caps text-label-caps text-on-surface-variant mono mb-2 block"><?php echo vitaldc_t('REGISTRY_ALLOCATION', 'تخصيص_السجل'); ?></span>
<h2 class="font-display-lg text-headline-lg geist text-surface-deep uppercase"><?php echo vitaldc_t('Infrastructure Tiers', 'مستويات البنية التحتية'); ?></h2>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mt-4">
                        <?php echo vitaldc_t('Select the operational capacity for your global trade architecture. All nodes include automated compliance auditing and real-time ledger synchronization.', 'اختر السعة التشغيلية لبنية التجارة العالمية الخاصة بك. تتضمن جميع العقد تدقيق الامتثال الآلي والمزامنة المباشرة للسجل.'); ?>
                    </p>
</header>
<!-- Bento Grid / Package Layout -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter mt-12">
<!-- Package S -->
<div class="package-card flex flex-col bg-white border border-slate-200 p-8 transition-all duration-300 hover:border-export-orange group">
<div class="flex justify-between items-start mb-10">
<div>
<span class="font-label-caps text-label-sm mono text-on-surface-variant">NODE_TYPE: S</span>
<h3 class="font-headline-md text-headline-md geist font-bold text-surface-deep mt-1"><?php echo vitaldc_t('Core Infrastructure', 'البنية التحتية الأساسية'); ?></h3>
</div>
<span class="material-symbols-outlined text-4xl text-slate-300 group-hover:text-export-orange transition-colors">database</span>
</div>
<div class="flex-grow">
<ul class="space-y-4 mb-10">
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-export-orange text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-body-md text-body-md text-slate-600"><?php echo vitaldc_t('Digital Asset Registry', 'سجل الأصول الرقمية'); ?></span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-export-orange text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-body-md text-body-md text-slate-600"><?php echo vitaldc_t('Basic Protocol Support', 'دعم البروتوكول الأساسي'); ?></span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-export-orange text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-body-md text-body-md text-slate-600"><?php echo vitaldc_t('Unified Ledger View', 'عرض السجل الموحد'); ?></span>
</li>
</ul>
<div class="pt-6 border-t border-slate-100 mb-8">
<span class="font-label-caps text-label-sm mono text-slate-400 block mb-3">TECH_SPECS</span>
<div class="grid grid-cols-2 gap-4">
<div>
<p class="text-[10px] mono text-slate-400">UPTIME_SLA</p>
<p class="font-label-caps text-label-sm text-surface-deep">99.9%</p>
</div>
<div>
<p class="text-[10px] mono text-slate-400">API_LIMIT</p>
<p class="font-label-caps text-label-sm text-surface-deep">10k/hr</p>
</div>
</div>
</div>
</div>
<button class="select-btn w-full py-4 border-2 border-export-orange text-export-orange font-label-caps text-label-caps transition-all duration-200">
                            <?php echo vitaldc_t('SELECT PACKAGE', 'اختر الباقة'); ?>
                        </button>
</div>
<!-- Package M (Highlighted) -->
<div class="package-card active-package flex flex-col bg-white border-2 border-export-orange p-8 transition-all duration-300 relative">
<div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-export-orange text-black px-4 py-1 font-label-caps text-[10px] tracking-widest font-bold">
                            <?php echo vitaldc_t('RECOMMENDED_STAGING', 'المستوى_الموصى_به'); ?>
                        </div>
<div class="flex justify-between items-start mb-10">
<div>
<span class="font-label-caps text-label-sm mono text-export-orange">NODE_TYPE: M</span>
<h3 class="font-headline-md text-headline-md geist font-bold text-surface-deep mt-1"><?php echo vitaldc_t('Growth Infrastructure', 'بنية النمو التحتية'); ?></h3>
</div>
<span class="material-symbols-outlined text-4xl text-export-orange">rocket_launch</span>
</div>
<div class="flex-grow">
<ul class="space-y-4 mb-10">
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-export-orange text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-body-md text-body-md text-surface-deep font-semibold"><?php echo vitaldc_t('Everything in Core', 'كل ما في الأساسية'); ?></span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-export-orange text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-body-md text-body-md text-slate-600"><?php echo vitaldc_t('Modern Marketing (LinkedIn/Google)', 'التسويق الحديث (LinkedIn/Google)'); ?></span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-export-orange text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-body-md text-body-md text-slate-600"><?php echo vitaldc_t('CRM Sync Bridge', 'جسر مزامنة CRM'); ?></span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-export-orange text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-body-md text-body-md text-slate-600"><?php echo vitaldc_t('Multi-Market Expansion Kit', 'حزمة التوسع متعددة الأسواق'); ?></span>
</li>
</ul>
<div class="pt-6 border-t border-slate-100 mb-8">
<span class="font-label-caps text-label-sm mono text-slate-400 block mb-3">TECH_SPECS</span>
<div class="grid grid-cols-2 gap-4">
<div>
<p class="text-[10px] mono text-slate-400">UPTIME_SLA</p>
<p class="font-label-caps text-label-sm text-surface-deep">99.95%</p>
</div>
<div>
<p class="text-[10px] mono text-slate-400">API_LIMIT</p>
<p class="font-label-caps text-label-sm text-surface-deep">50k/hr</p>
</div>
</div>
</div>
</div>
<button class="select-btn w-full py-4 bg-export-orange text-black font-label-caps text-label-caps font-bold">
                            <?php echo vitaldc_t('PACKAGE SELECTED', 'تم اختيار الباقة'); ?>
                        </button>
</div>
<!-- Package L -->
<div class="package-card flex flex-col bg-white border border-slate-200 p-8 transition-all duration-300 hover:border-export-orange group">
<div class="flex justify-between items-start mb-10">
<div>
<span class="font-label-caps text-label-sm mono text-on-surface-variant">NODE_TYPE: L</span>
<h3 class="font-headline-md text-headline-md geist font-bold text-surface-deep mt-1"><?php echo vitaldc_t('Enterprise Protocol', 'بروتوكول المؤسسات'); ?></h3>
</div>
<span class="material-symbols-outlined text-4xl text-slate-300 group-hover:text-export-orange transition-colors">hub</span>
</div>
<div class="flex-grow">
<ul class="space-y-4 mb-10">
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-export-orange text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-body-md text-body-md text-surface-deep font-semibold"><?php echo vitaldc_t('Full Growth Suite', 'مجموعة النمو الكاملة'); ?></span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-export-orange text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-body-md text-body-md text-slate-600"><?php echo vitaldc_t('AI-Powered Automation', 'أتمتة بالذكاء الاصطناعي'); ?></span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-export-orange text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-body-md text-body-md text-slate-600"><?php echo vitaldc_t('Predictive Intelligence', 'الذكاء التنبؤي'); ?></span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-export-orange text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-body-md text-body-md text-slate-600"><?php echo vitaldc_t('24/7 Dedicated Engineering', 'هندسة مخصصة 24/7'); ?></span>
</li>
</ul>
<div class="pt-6 border-t border-slate-100 mb-8">
<span class="font-label-caps text-label-sm mono text-slate-400 block mb-3">TECH_SPECS</span>
<div class="grid grid-cols-2 gap-4">
<div>
<p class="text-[10px] mono text-slate-400">UPTIME_SLA</p>
<p class="font-label-caps text-label-sm text-surface-deep">99.99%</p>
</div>
<div>
<p class="text-[10px] mono text-slate-400">API_LIMIT</p>
<p class="font-label-caps text-label-sm text-surface-deep"><?php echo vitaldc_t('UNLIMITED', 'غير محدود'); ?></p>
</div>
</div>
</div>
</div>
<button class="select-btn w-full py-4 border-2 border-export-orange text-export-orange font-label-caps text-label-caps transition-all duration-200">
                            <?php echo vitaldc_t('SELECT PACKAGE', 'اختر الباقة'); ?>
                        </button>
</div>
</div>
<!-- Technical Legend / Footer of Section -->
<div class="mt-stack-lg pt-stack-md border-t border-slate-100 flex flex-col md:flex-row justify-between gap-gutter items-center">
<div class="flex gap-8">
<div class="flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
<span class="font-label-caps text-[10px] text-slate-400 mono"><?php echo vitaldc_t('NETWORK_STATUS: OPTIMAL', 'حالة_الشبكة: ممتازة'); ?></span>
</div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-sm text-slate-400">lock</span>
<span class="font-label-caps text-[10px] text-slate-400 mono">ENCRYPTION: AES-256</span>
</div>
</div>
<p class="font-label-caps text-label-sm text-slate-400 mono italic">
                        <?php echo vitaldc_t('SYSTEM_OUTPUT: Selection affects global throughput metrics.', 'مخرج_النظام: الاختيار يؤثر على مقاييس الإنتاجية العالمية.'); ?>
                    </p>
</div>
</div>
<!-- Background Decorative Grid (Technical Overlay) -->
<div class="absolute inset-0 pointer-events-none opacity-5">
<div class="h-full w-px bg-surface-deep absolute left-margin-desktop"></div>
<div class="h-full w-px bg-surface-deep absolute right-margin-desktop"></div>
<div class="w-full h-px bg-surface-deep absolute top-1/2"></div>
</div>

</div>

<?php get_footer("start"); ?>