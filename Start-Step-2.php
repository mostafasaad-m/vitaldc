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
        .mono { font-family: 'Poppins', monospace; }
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
<header class="mb-stack-lg border-l-4 border-export-orange pl-6">
<span class="font-label-caps text-label-caps text-on-surface-variant mono mb-2 block"><?php echo vitaldc_t('CHOOSE YOUR PLAN', 'اختر_باقتك'); ?></span>
<h2 class="font-display-lg text-headline-lg geist text-surface-deep uppercase"><?php echo vitaldc_t('Service Packages', 'باقات الخدمات والنمو'); ?></h2>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mt-4">
                        <?php echo vitaldc_t('Select the right package for your business size and growth goals. All packages include custom design, mobile optimization, and dedicated support.', 'اختر الباقة المناسبة لحجم أعمالك وأهداف نموك. تشمل جميع الباقات تصميماً مخصصاً، وملاءمة للهواتف، ودعماً كاملاً.'); ?>
                    </p>
</header>
<!-- Bento Grid / Package Layout -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter mt-12">
<!-- Package S -->
<div class="package-card flex flex-col bg-white border border-slate-200 p-8 transition-all duration-300 hover:border-export-orange group">
<div class="flex justify-between items-start mb-10">
<div>
<span class="font-label-caps text-label-sm mono text-on-surface-variant"><?php echo vitaldc_t('STARTER PLAN', 'باقة البداية'); ?></span>
<h3 class="font-headline-md text-headline-md geist font-bold text-surface-deep mt-1"><?php echo vitaldc_t('Starter Digital Package', 'باقة الانطلاق الرقمي'); ?></h3>
</div>
<span class="material-symbols-outlined text-4xl text-slate-300 group-hover:text-export-orange transition-colors">database</span>
</div>
<div class="flex-grow">
<ul class="space-y-4 mb-10">
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-export-orange text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-body-md text-body-md text-slate-600"><?php echo vitaldc_t('Custom Website & Domain Setup', 'موقع مخصص وإعداد النطاق'); ?></span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-export-orange text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-body-md text-body-md text-slate-600"><?php echo vitaldc_t('Mobile Responsive Design', 'تصميم محسّن للهواتف الذكية'); ?></span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-export-orange text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-body-md text-body-md text-slate-600"><?php echo vitaldc_t('Basic Contact Form & Support', 'نموذج تواصل ودعم أساسي'); ?></span>
</li>
</ul>
<div class="pt-6 border-t border-slate-100 mb-8">
<span class="font-label-caps text-label-sm mono text-slate-400 block mb-3">KEY_SPECS</span>
<div class="grid grid-cols-2 gap-4">
<div>
<p class="text-[10px] mono text-slate-400">SPEED_SCORE</p>
<p class="font-label-caps text-label-sm text-surface-deep">99+</p>
</div>
<div>
<p class="text-[10px] mono text-slate-400">SUPPORT</p>
<p class="font-label-caps text-label-sm text-surface-deep">Standard</p>
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
                            <?php echo vitaldc_t('MOST_POPULAR', 'الأكثر_طلباً'); ?>
                        </div>
<div class="flex justify-between items-start mb-10">
<div>
<span class="font-label-caps text-label-sm mono text-export-orange"><?php echo vitaldc_t('GROWTH PLAN', 'باقة النمو والتسويق'); ?></span>
<h3 class="font-headline-md text-headline-md geist font-bold text-surface-deep mt-1"><?php echo vitaldc_t('Growth & Marketing Package', 'باقة النمو والتسويق'); ?></h3>
</div>
<span class="material-symbols-outlined text-4xl text-export-orange">rocket_launch</span>
</div>
<div class="flex-grow">
<ul class="space-y-4 mb-10">
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-export-orange text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-body-md text-body-md text-surface-deep font-semibold"><?php echo vitaldc_t('Everything in Starter Package', 'كل ما في باقة البداية'); ?></span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-export-orange text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-body-md text-body-md text-slate-600"><?php echo vitaldc_t('Google & Social Media Campaigns', 'إعلانات جوجل والتواصل الاجتماعي'); ?></span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-export-orange text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-body-md text-body-md text-slate-600"><?php echo vitaldc_t('Automated Lead Capture & CRM', 'التقاط العملاء التلقائي وإدارة CRM'); ?></span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-export-orange text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-body-md text-body-md text-slate-600"><?php echo vitaldc_t('SEO & Global Visibility', 'تهيئة محركات البحث للظهور العالمي'); ?></span>
</li>
</ul>
<div class="pt-6 border-t border-slate-100 mb-8">
<span class="font-label-caps text-label-sm mono text-slate-400 block mb-3">KEY_SPECS</span>
<div class="grid grid-cols-2 gap-4">
<div>
<p class="text-[10px] mono text-slate-400">SPEED_SCORE</p>
<p class="font-label-caps text-label-sm text-surface-deep">99+</p>
</div>
<div>
<p class="text-[10px] mono text-slate-400">SUPPORT</p>
<p class="font-label-caps text-label-sm text-surface-deep">Priority</p>
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
<span class="font-label-caps text-label-sm mono text-on-surface-variant"><?php echo vitaldc_t('COMPLETE SUITE', 'الباقة الشاملة'); ?></span>
<h3 class="font-headline-md text-headline-md geist font-bold text-surface-deep mt-1"><?php echo vitaldc_t('Complete Digital & Automation Suite', 'الباقة الرقمية والأتمتة الشاملة'); ?></h3>
</div>
<span class="material-symbols-outlined text-4xl text-slate-300 group-hover:text-export-orange transition-colors">hub</span>
</div>
<div class="flex-grow">
<ul class="space-y-4 mb-10">
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-export-orange text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-body-md text-body-md text-surface-deep font-semibold"><?php echo vitaldc_t('Complete Website & Marketing', 'الموقع الكامل والتسويق الشامل'); ?></span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-export-orange text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-body-md text-body-md text-slate-600"><?php echo vitaldc_t('Smart AI Lead Assistant', 'المساعد الآلي الذكي للعملاء'); ?></span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-export-orange text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-body-md text-body-md text-slate-600"><?php echo vitaldc_t('Advanced Sales Analytics', 'تحليلات مبيعات متقدمة'); ?></span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-export-orange text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-body-md text-body-md text-slate-600"><?php echo vitaldc_t('Dedicated Priority Support', 'دعم فني واستشاري مخصص'); ?></span>
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