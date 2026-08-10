<?php 
/**
 * Template Name: Vital-Start-Step-3
 */
 get_header('start');?>

<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .grid-line-overlay {
            background-image: linear-gradient(to right, rgba(142, 202, 230, 0.05) 1px, transparent 1px),
                              linear-gradient(to bottom, rgba(142, 202, 230, 0.05) 1px, transparent 1px);
            background-size: 40px 40px;
        }
    </style>
<!-- Tailwind Config Injection -->

<body class="bg-background text-on-background min-h-screen flex flex-col font-body-md overflow-x-hidden">
<!-- Top Header Navigation Shell (Shared Component: TopNavBar) -->

<!-- Main Content Canvas (High Contrast White Background for Content Area) -->
<main class="flex-grow pt-24 pb-32 bg-white relative">
<div class="absolute inset-0 grid-line-overlay opacity-40 pointer-events-none"></div>
<div class="max-w-container-max mx-auto px-gutter py-stack-lg relative z-10">
<!-- Section Header -->
<div class="mb-stack-lg max-w-3xl">
<div class="flex items-center gap-2 mb-2">
<span class="w-8 h-[2px] bg-export-orange"></span>
<span class="font-label-caps text-label-caps text-surface-deep uppercase font-bold"><?php echo vitaldc_t('EXTRA_FEATURES', 'ميزات_إضافية'); ?></span>
</div>
<h2 class="font-headline-lg text-headline-lg text-surface-deep mb-4"><?php echo vitaldc_t('ADD POWERFUL FEATURES', 'أضف ميزات إلى باقتك'); ?></h2>
<p class="font-body-lg text-body-lg text-surface-variant max-w-2xl">
    <?php echo vitaldc_t('Select optional add-on features to boost your website speed, security, sales analytics, and automated lead management.', 'اختر ميزات إضافية اختيارية لتعزيز سرعة موقعك وأمانه، وتقارير مبيعاتك، وإدارة عملائك بشكل آلي.'); ?>
</p>
</div>
<!-- Bento-Style Grid of Add-on Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
<!-- Card 1: CRM System Integration -->
<div class="group border border-surface-container text-surface-deep p-6 hover:border-export-orange transition-all duration-300 bg-surface-container-lowest/50 backdrop-blur-sm flex flex-col justify-between min-h-[320px]">
<div>
<div class="flex justify-between items-start mb-6">
<div class="p-3 bg-surface-deep text-export-orange">
<span class="material-symbols-outlined">contacts</span>
</div>
<span class="font-label-caps text-[10px] text-outline uppercase border border-outline px-2 py-0.5"><?php echo vitaldc_t('CRM & LEADS', 'إدارة العملاء'); ?></span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 font-bold"><?php echo vitaldc_t('CRM & Lead Management', 'نظام إدارة العملاء CRM'); ?></h3>
<p class="font-body-md text-label-sm text-surface-variant leading-relaxed">
    <?php echo vitaldc_t('Centralized customer database, pipeline tracking, automated sales follow-ups, and deal stage notifications.', 'قاعدة بيانات مركزية للعملاء، وتتبع مراحل المبيعات، ومتابعات تلقائية مع التنبيهات المباشرة.'); ?>
</p>
</div>
<div class="mt-8">
<button class="w-full py-3 border border-surface-deep font-label-caps text-label-caps uppercase hover:bg-surface-deep hover:text-white transition-colors flex justify-between items-center px-4">
<span class="btn-module-label"><?php echo vitaldc_t('Enable Module', 'تفعيل الميزة'); ?></span>
<span class="material-symbols-outlined text-[18px]">add</span>
</button>
</div>
</div>
<!-- Card 2: ERP & Operations Suite -->
<div class="group border border-surface-container text-surface-deep p-6 hover:border-export-orange transition-all duration-300 bg-surface-container-lowest/50 backdrop-blur-sm flex flex-col justify-between min-h-[320px]">
<div>
<div class="flex justify-between items-start mb-6">
<div class="p-3 bg-surface-deep text-export-orange">
<span class="material-symbols-outlined">account_tree</span>
</div>
<span class="font-label-caps text-[10px] text-outline uppercase border border-outline px-2 py-0.5"><?php echo vitaldc_t('ERP & OPS', 'إدارة الموارد'); ?></span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 font-bold"><?php echo vitaldc_t('ERP & Operations Suite', 'نظام الموارد والعمليات ERP'); ?></h3>
<p class="font-body-md text-label-sm text-surface-variant leading-relaxed">
    <?php echo vitaldc_t('Automated inventory tracking, purchase order workflows, supply chain logs, and multi-department operational sync.', 'تتبع تلقائي للمخزون، وإدارة أوامر الشراء، وسجلات سلسلة التوريد والمزامنة التشغيلية.'); ?>
</p>
</div>
<div class="mt-8">
<button class="w-full py-3 border border-surface-deep font-label-caps text-label-caps uppercase hover:bg-surface-deep hover:text-white transition-colors flex justify-between items-center px-4">
<span class="btn-module-label"><?php echo vitaldc_t('Enable Module', 'تفعيل الميزة'); ?></span>
<span class="material-symbols-outlined text-[18px]">add</span>
</button>
</div>
</div>
<!-- Card 3: AI Assistant & Automation -->
<div class="group border border-surface-container text-surface-deep p-6 hover:border-export-orange transition-all duration-300 bg-surface-container-lowest/50 backdrop-blur-sm flex flex-col justify-between min-h-[320px]">
<div>
<div class="flex justify-between items-start mb-6">
<div class="p-3 bg-surface-deep text-export-orange">
<span class="material-symbols-outlined">smart_toy</span>
</div>
<span class="font-label-caps text-[10px] text-outline uppercase border border-outline px-2 py-0.5"><?php echo vitaldc_t('AI AUTOMATION', 'الذكاء الاصطناعي'); ?></span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 font-bold"><?php echo vitaldc_t('Smart AI Support Bot', 'مساعد الذكاء الاصطناعي'); ?></h3>
<p class="font-body-md text-label-sm text-surface-variant leading-relaxed">
    <?php echo vitaldc_t('24/7 AI chatbot for instant customer inquiry responses, lead qualification, and automated appointment scheduling.', 'ردود فورية على استفسارات العملاء على مدار الساعة، وتأهيل العملاء، وحجز المواعيد تلقائياً.'); ?>
</p>
</div>
<div class="mt-8">
<button class="w-full py-3 border border-surface-deep font-label-caps text-label-caps uppercase hover:bg-surface-deep hover:text-white transition-colors flex justify-between items-center px-4">
<span class="btn-module-label"><?php echo vitaldc_t('Enable Module', 'تفعيل الميزة'); ?></span>
<span class="material-symbols-outlined text-[18px]">add</span>
</button>
</div>
</div>
<!-- Card 4: Business Intelligence Hub -->
<div class="group border border-surface-container text-surface-deep p-6 hover:border-export-orange transition-all duration-300 bg-surface-container-lowest/50 backdrop-blur-sm flex flex-col justify-between min-h-[320px]">
<div>
<div class="flex justify-between items-start mb-6">
<div class="p-3 bg-surface-deep text-export-orange">
<span class="material-symbols-outlined">insights</span>
</div>
<span class="font-label-caps text-[10px] text-outline uppercase border border-outline px-2 py-0.5"><?php echo vitaldc_t('ANALYTICS', 'التحليلات'); ?></span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 font-bold"><?php echo vitaldc_t('Business Intelligence Hub', 'منصة ذكاء الأعمال والتقارير'); ?></h3>
<p class="font-body-md text-label-sm text-surface-variant leading-relaxed">
    <?php echo vitaldc_t('Real-time executive revenue dashboards, performance KPIs, and automated weekly growth reports.', 'لوحات تحكم تنفيذية لمتابعة الإيرادات ومؤشرات الأداء وتقارير النمو الأسبوعية.'); ?>
</p>
</div>
<div class="mt-8">
<button class="w-full py-3 border border-surface-deep font-label-caps text-label-caps uppercase hover:bg-surface-deep hover:text-white transition-colors flex justify-between items-center px-4">
<span class="btn-module-label"><?php echo vitaldc_t('Enable Module', 'تفعيل الميزة'); ?></span>
<span class="material-symbols-outlined text-[18px]">add</span>
</button>
</div>
</div>
</div>
<!-- Visual Asset Section (Technical Detail) -->
<!-- <div class="mt-section-gap grid grid-cols-1 lg:grid-cols-3 gap-gutter items-center">
<div class="col-span-1 lg:col-span-2 relative h-[300px] bg-surface-deep overflow-hidden">
<div class="absolute inset-0 opacity-20">
<div class="h-full w-full" style="background-image: radial-gradient(circle at 2px 2px, #219EBC 1px, transparent 0); background-size: 24px 24px;"></div>
</div> -->
<!-- Mock Shipping Tracker / Data Viz -->
<!-- <div class="absolute inset-0 flex items-center justify-center p-gutter">
<div class="w-full h-full border border-glass p-6 flex flex-col">
<div class="flex justify-between items-center mb-6">
<div class="flex gap-2">
<div class="w-3 h-3 bg-export-orange animate-pulse"></div>
<span class="font-label-caps text-[10px] text-primary"><?php echo vitaldc_t('LIVE_THROUGHPUT_MONITOR', 'مراقب_الإنتاجية_المباشر'); ?></span>
</div>
<span class="font-label-caps text-[10px] text-outline">UPTIME: 99.999%</span>
</div>
<div class="flex-grow flex items-end gap-1 overflow-hidden">
<div class="w-full bg-secondary/20 h-1/4"></div>
<div class="w-full bg-secondary/30 h-2/4"></div>
<div class="w-full bg-secondary/40 h-3/4"></div>
<div class="w-full bg-export-orange h-1/2"></div>
<div class="w-full bg-secondary/20 h-1/3"></div>
<div class="w-full bg-secondary/50 h-5/6"></div>
<div class="w-full bg-secondary/20 h-1/2"></div>
<div class="w-full bg-export-orange h-full"></div>
<div class="w-full bg-secondary/30 h-2/3"></div>
<div class="w-full bg-secondary/40 h-1/4"></div>
</div>
</div>
</div>
</div> -->
<!-- <div class="col-span-1 border-l-0 lg:border-l border-glass lg:pl-gutter">
<h4 class="font-label-caps text-label-caps text-surface-deep mb-4 uppercase"><?php echo vitaldc_t('System Metadata', 'بيانات النظام الوصفية'); ?></h4>
<ul class="space-y-4 font-label-caps text-[12px] text-surface-variant">
<li class="flex justify-between border-b border-surface-container-low pb-2">
<span class=""><?php echo vitaldc_t('NETWORK_STATUS', 'حالة_الشبكة'); ?></span>
<span class="text-green-600 font-bold"><?php echo vitaldc_t('OPTIMAL', 'ممتازة'); ?></span>
</li>
<li class="flex justify-between border-b border-surface-container-low pb-2">
<span class=""><?php echo vitaldc_t('ENCRYPTION', 'التشفير'); ?></span>
<span class="text-surface-deep">AES-256-GCM</span>
</li>
<li class="flex justify-between border-b border-surface-container-low pb-2">
<span class=""><?php echo vitaldc_t('PROTOCOL_VERSION', 'إصدار_البروتوكول'); ?></span>
<span class="text-surface-deep">v4.0.2-STABLE</span>
</li>
<li class="flex justify-between border-b border-surface-container-low pb-2">
<span class=""><?php echo vitaldc_t('GATEWAY_LATENCY', 'تأخير_البوابة'); ?></span>
<span class="text-surface-deep">12ms</span>
</li>
</ul>
</div>
</div>
</div> -->

</main>
<script>
        const txtEnableModule = <?php echo json_encode( vitaldc_t( 'Enable Module', 'تفعيل الوحدة' ) ); ?>;
        const txtModuleActive = <?php echo json_encode( vitaldc_t( 'Module Active', 'الوحدة مفعّلة' ) ); ?>;

        document.querySelectorAll('.group').forEach(card => {
            card.addEventListener('click', () => {
                const button = card.querySelector('button');
                const label = button.querySelector('.btn-module-label');
                const icon = button.querySelector('.material-symbols-outlined');
                
                if (card.getAttribute('data-selected') === 'true') {
                    card.setAttribute('data-selected', 'false');
                    card.classList.remove('ring-2', 'ring-export-orange', 'bg-export-orange/5');
                    if (label) label.textContent = txtEnableModule;
                    if (icon) icon.textContent = 'add';
                } else {
                    card.setAttribute('data-selected', 'true');
                    card.classList.add('ring-2', 'ring-export-orange', 'bg-export-orange/5');
                    if (label) label.textContent = txtModuleActive;
                    if (icon) icon.textContent = 'check';
                }
            });
        });
    </script>
<?php get_footer('start'); ?>