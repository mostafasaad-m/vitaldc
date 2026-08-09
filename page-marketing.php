<?php 
/**
 * Template Name: marketing
 */

 ?>
<?php get_header(); ?>
<style>
        body {
            background-color: #00161f;
            color: #bde9ff;
            -webkit-font-smoothing: antialiased;
        }
        .grid-mask {
            background-image: linear-gradient(to right, rgba(142, 202, 230, 0.05) 1px, transparent 1px),
                              linear-gradient(to bottom, rgba(142, 202, 230, 0.05) 1px, transparent 1px);
            background-size: 40px 40px;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .glass-panel {
            background: rgba(1, 27, 41, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(142, 202, 230, 0.15);
        }
    </style>
<!-- Grid Background -->
<div class="fixed inset-0 grid-mask pointer-events-none z-0"></div>
<!-- 1. Hero Section (Dark) -->
<section class="relative pt-32 pb-section-gap px-margin-desktop min-h-screen flex items-center overflow-hidden">
<div class="max-w-container-max mx-auto w-full grid grid-cols-12 gap-gutter relative z-10">
<div class="col-span-12 lg:col-span-8">
<span class="inline-block font-label-caps text-label-caps text-tertiary mb-4 tracking-widest border-l-2 border-tertiary pl-4"><?php echo vitaldc_t('EXPORT ACCELERATION PROTOCOL', 'بروتوكول تسريع التصدير'); ?></span>
<h1 class="text-on-surface font-display-lg text-[48px] md:text-display-lg max-w-4xl mb-stack-md leading-[1.1]">
    <span><?php echo vitaldc_t('LAUNCH YOUR GLOBAL ', 'أطلق حضورك '); ?></span>
    <span class="text-export-orange"><?php echo vitaldc_t('DIGITAL PRESENCE.', 'الرقمي العالمي.'); ?></span>
</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mb-stack-lg leading-relaxed">
    <?php echo vitaldc_t("Don't wait for buyers to find you. We build the digital infrastructure to put your brand in front of high-intent international importers, decision-makers, and distribution giants.", 'لا تنتظر حتى يجدك المشترون. نحن نبني البنية التحتية الرقمية لوضع علامتك التجارية أمام المستوردين الدوليين، وصناع القرار، وعمالقة التوزيع ذوي النية العالية.'); ?>
</p>
<div class="flex flex-wrap gap-stack-md">
<button class="bg-[#FFB703] text-black px-8 py-4 font-label-caps font-bold text-lg hover:bg-export-orange transition-all flex items-center gap-3 group">
    <span><?php echo vitaldc_t('Start My Campaign', 'ابدأ حملتي'); ?></span>
    <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
</button>
<button class="border border-secondary text-secondary px-8 py-4 font-label-caps font-bold text-lg hover:bg-secondary/10 transition-all">
    <?php echo vitaldc_t('View Methodology', 'عرض المنهجية'); ?>
</button>
</div>
</div>
</div>
</section>
<!-- 2. The Reality Section (White Background Contrast) -->
<section class="relative py-section-gap bg-white text-[#00161f]">
<div class="max-w-container-max mx-auto px-margin-desktop">
<div class="grid grid-cols-12 gap-gutter items-center">
<div class="col-span-12 lg:col-span-5">
<h2 class="font-headline-lg text-headline-lg font-bold mb-stack-md">
    <span><?php echo vitaldc_t('Generic Posting ', 'النشر العشوائي '); ?></span><br>
    <span class="text-export-orange"><?php echo vitaldc_t('Is Not Marketing.', 'ليس تسويقاً.'); ?></span>
</h2>
<p class="font-body-lg text-body-lg text-slate-600 mb-stack-md">
    <span><?php echo vitaldc_t("The international market is flooded with noise. For Egyptian exporters, success isn't about being seen by everyone; it's about being trusted by the ", 'السوق الدولية مليئة بالضوضاء. بالنسبة للمصدرين المصريين، النجاح لا يعني أن يراك الجميع؛ بل أن يثق بك '); ?></span>
    <span class="font-bold underline decoration-export-orange text-[#00161f]"><?php echo vitaldc_t('right person', 'الشخص المناسب'); ?></span>
    <span><?php echo vitaldc_t(' at the exact moment they need your inventory.', ' في اللحظة الدقيقة التي يحتاج فيها إلى مخزونك.'); ?></span>
</p>
</div>
<div class="col-span-12 lg:col-start-7 lg:col-span-6 grid grid-cols-2 gap-4">
<div class="p-8 border-2 border-[#00161f]/10 bg-[#00161f]/5">
<h3 class="font-label-caps text-label-caps font-bold mb-2"><?php echo vitaldc_t('PRECISION OVER VOLUME', 'الدقة بدلاً من الحجم'); ?></h3>
<p class="text-sm opacity-80"><?php echo vitaldc_t('Stop chasing likes. Start capturing procurement intents from verified regional buyers.', 'توقف عن ملاحقة الإعجابات. ابدأ في جذب نيات الشراء من المشترين الإقليميين المعتمدين.'); ?></p>
</div>
<div class="p-8 border-2 border-[#00161f]/10 bg-[#00161f]/5 mt-8">
<h3 class="font-label-caps text-label-caps font-bold mb-2"><?php echo vitaldc_t('TRUST OVER NOISE', 'الثقة بدلاً من الضوضاء'); ?></h3>
<p class="text-sm opacity-80"><?php echo vitaldc_t('We engineer authority. Your digital presence must match the quality of your export goods.', 'نحن نبتكر المصداقية. يجب أن يطابق حضورك الرقمي جودة بضائعك المصدّرة.'); ?></p>
</div>
</div>
</div>
</div>
</section>
<!-- 3. Service Pillars (Dark) -->
<section class="py-section-gap px-margin-desktop bg-surface-deep relative">
<div class="max-w-container-max mx-auto relative z-10">
<div class="mb-stack-lg border-l-4 border-secondary pl-6">
<h2 class="font-headline-lg text-headline-lg text-on-surface"><?php echo vitaldc_t('Precision Modules', 'وحدات الدقة'); ?></h2>
<p class="font-body-md text-on-surface-variant"><?php echo vitaldc_t('Strategic deployment of digital assets across the global trade funnel.', 'التنفيذ الاستراتيجي للأصول الرقمية عبر مسار التجارة العالمية.'); ?></p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<!-- LinkedIn Precision -->
<div class="glass-panel p-8 group hover:border-secondary transition-all">
<div class="w-12 h-12 bg-secondary/10 flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-secondary" style="font-variation-settings: 'FILL' 1;">hub</span>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface mb-4"><?php echo vitaldc_t('LinkedIn Precision', 'دقة لينكد إن'); ?></h3>
<p class="text-on-surface-variant mb-6 text-sm"><?php echo vitaldc_t('Directly target decision-makers (CEOs, Procurement Officers) in the GCC, Europe, and USA. We bypass the gatekeepers.', 'استهداف مباشر لصناع القرار (الرؤساء التنفيذيين، مسؤول المشتريات) في الخليج، أوروبا، وأمريكا. نحن نتخطى الحراس الشخصيين.'); ?></p>
<div class="flex flex-wrap gap-2">
<span class="font-label-caps text-[10px] bg-secondary/10 text-secondary px-2 py-1"><?php echo vitaldc_t('ABM STRATEGY', 'استراتيجية ABM'); ?></span>
<span class="font-label-caps text-[10px] bg-secondary/10 text-secondary px-2 py-1"><?php echo vitaldc_t('B2B SALES', 'مبيعات B2B'); ?></span>
</div>
</div>
<!-- Google Search Intent -->
<div class="glass-panel p-8 group hover:border-export-orange transition-all">
<div class="w-12 h-12 bg-export-orange/10 flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-export-orange" style="font-variation-settings: 'FILL' 1;">ads_click</span>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface mb-4"><?php echo vitaldc_t('Google Search Intent', 'نية البحث في جوجل'); ?></h3>
<p class="text-on-surface-variant mb-6 text-sm"><?php echo vitaldc_t("Capture global buyers at the exact moment they search for your specific products. Dominate 'Egyptian Supplier' queries.", "اجذب المشترين الدوليين في اللحظة الدقيقة التي يبحثون فيها عن منتجاتك المحددة. سيطر على عمليات البحث عن 'مورد مصري'."); ?></p>
<div class="flex flex-wrap gap-2">
<span class="font-label-caps text-[10px] bg-export-orange/10 text-export-orange px-2 py-1"><?php echo vitaldc_t('GLOBAL SEO', 'سيو عالمي'); ?></span>
<span class="font-label-caps text-[10px] bg-export-orange/10 text-export-orange px-2 py-1"><?php echo vitaldc_t('PPC EXPORT', 'إعلانات التصدير'); ?></span>
</div>
</div>
<!-- Lead Qualification -->
<div class="glass-panel p-8 group hover:border-tertiary transition-all">
<div class="w-12 h-12 bg-tertiary/10 flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-tertiary" style="font-variation-settings: 'FILL' 1;">filter_alt</span>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface mb-4"><?php echo vitaldc_t('Lead Qualification', 'تأهيل العملاء المحتملين'); ?></h3>
<p class="text-on-surface-variant mb-6 text-sm"><?php echo vitaldc_t('Advanced AI filtering to separate serious international importers from tire-kickers. Your sales team only speaks to high-value leads.', 'تصفية متقدمة بالذكاء الاصطناعي لفصل المستوردين الدوليين الجادين عن الهواة. يتحدث فريق مبيعاتك فقط مع العملاء ذوي القيمة العالية.'); ?></p>
<div class="flex flex-wrap gap-2">
<span class="font-label-caps text-[10px] bg-tertiary/10 text-tertiary px-2 py-1"><?php echo vitaldc_t('AI SCORING', 'تقييم الذكاء الاصطناعي'); ?></span>
<span class="font-label-caps text-[10px] bg-tertiary/10 text-tertiary px-2 py-1"><?php echo vitaldc_t('CRM SYNC', 'مزامنة CRM'); ?></span>
</div>
</div>
</div>
</div>
</section>
<!-- 4. The Marketing Protocol (White Background Contrast) -->
<section class="py-section-gap px-margin-desktop bg-white text-[#00161f] relative overflow-hidden">
<div class="max-w-container-max mx-auto">
<div class="flex flex-col md:flex-row justify-between items-end mb-24 gap-stack-md">
<div class="max-w-2xl">
<span class="font-label-caps text-label-caps text-export-orange"><?php echo vitaldc_t('OPERATIONAL FRAMEWORK', 'إطار العمل التشغيلي'); ?></span>
<h2 class="font-headline-lg text-headline-lg mt-4 font-bold"><?php echo vitaldc_t('The Marketing Protocol', 'بروتوكول التسويق'); ?></h2>
</div>
<div class="hidden md:block h-px bg-slate-200 flex-grow mx-12"></div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-4 gap-12">
<!-- Step 01 -->
<div class="relative group">
<span class="font-label-caps text-6xl text-slate-100 absolute -top-8 -left-4 pointer-events-none">01</span>
<div class="relative z-10 pt-8">
<h4 class="font-label-caps text-[#00161f] font-bold mb-4"><?php echo vitaldc_t('MARKET MAPPING', 'رسم خرائط السوق'); ?></h4>
<p class="text-slate-500 text-sm"><?php echo vitaldc_t('Identifying high-growth trade corridors and mapping regional demand for Egyptian inventory.', 'تحديد ممرات التجارة ذات النمو العالي ورسم الطلب الإقليمي للمخزون المصري.'); ?></p>
</div>
<div class="mt-8 w-full h-1 bg-slate-100 relative overflow-hidden">
<div class="absolute inset-0 bg-export-orange w-0 group-hover:w-full transition-all duration-700"></div>
</div>
</div>
<!-- Step 02 -->
<div class="relative group">
<span class="font-label-caps text-6xl text-slate-100 absolute -top-8 -left-4 pointer-events-none">02</span>
<div class="relative z-10 pt-8">
<h4 class="font-label-caps text-[#00161f] font-bold mb-4"><?php echo vitaldc_t('FUNNEL ARCHITECTURE', 'هندسة مسار المبيعات'); ?></h4>
<p class="text-slate-500 text-sm"><?php echo vitaldc_t('Designing digital landing zones and trust signals specifically for international B2B buyers.', 'تصميم صفحات الهبوط الرقمية وإشارات الثقة المخصصة لمشتري B2B الدوليين.'); ?></p>
</div>
<div class="mt-8 w-full h-1 bg-slate-100 relative overflow-hidden">
<div class="absolute inset-0 bg-export-orange w-0 group-hover:w-full transition-all duration-700 delay-100"></div>
</div>
</div>
<!-- Step 03 -->
<div class="relative group">
<span class="font-label-caps text-6xl text-slate-100 absolute -top-8 -left-4 pointer-events-none">03</span>
<div class="relative z-10 pt-8">
<h4 class="font-label-caps text-[#00161f] font-bold mb-4"><?php echo vitaldc_t('GLOBAL DEPLOYMENT', 'الانتشار العالمي'); ?></h4>
<p class="text-slate-500 text-sm"><?php echo vitaldc_t('Activating cross-channel campaigns targeted at specific geographic zones and trade clusters.', 'تفعيل حملات عبر قنوات متعددة تستهدف مناطق جغرافية وتجمعات تجارية محددة.'); ?></p>
</div>
<div class="mt-8 w-full h-1 bg-slate-100 relative overflow-hidden">
<div class="absolute inset-0 bg-export-orange w-0 group-hover:w-full transition-all duration-700 delay-200"></div>
</div>
</div>
<!-- Step 04 -->
<div class="relative group">
<span class="font-label-caps text-6xl text-slate-100 absolute -top-8 -left-4 pointer-events-none">04</span>
<div class="relative z-10 pt-8">
<h4 class="font-label-caps text-[#00161f] font-bold mb-4"><?php echo vitaldc_t('REAL-TIME OPTIMIZATION', 'التحسين الفوري'); ?></h4>
<p class="text-slate-500 text-sm"><?php echo vitaldc_t('Continuous adjustment of bid strategies and creative based on lead quality data.', 'التعديل المستمر لاستراتيجيات العطاءات والتصاميم بناءً على بيانات جودة العملاء.'); ?></p>
</div>
<div class="mt-8 w-full h-1 bg-slate-100 relative overflow-hidden">
<div class="absolute inset-0 bg-export-orange w-0 group-hover:w-full transition-all duration-700 delay-300"></div>
</div>
</div>
</div>
</div>
</section>
<!-- 5. ROI & Benchmarks (Dark) -->
<section class="py-section-gap px-margin-desktop bg-surface border-y border-glass">
<div class="max-w-container-max mx-auto">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
<div class="lg:col-span-4 flex flex-col justify-center">
<h2 class="font-headline-lg text-headline-lg text-on-surface mb-stack-md"><?php echo vitaldc_t('KPI Targets & Benchmarks', 'أهداف ومعايير KPI'); ?></h2>
<p class="text-on-surface-variant mb-stack-md text-sm"><?php echo vitaldc_t("We don't just report clicks. We track infrastructure performance metrics that actually drive export growth.", 'نحن لا نكتفي بتقديم تقارير عن النقرات. بل نتبع مقاييس أداء البنية التحتية التي تدفع بالفعل نمو التصدير.'); ?></p>
<div class="bg-surface-deep p-6 border border-glass">
<div class="flex items-center gap-4 text-secondary mb-2">
<span class="material-symbols-outlined">analytics</span>
<span class="font-label-caps text-xs"><?php echo vitaldc_t('LIVE TRACKING ACTIVE', 'التتبع المباشر نشط'); ?></span>
</div>
<p class="text-[10px] text-outline">Protocol: VitalDC-MKT-2024</p>
</div>
</div>
<div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-3 gap-6">
<!-- CPA Card -->
<div class="bg-surface-container-high p-8 flex flex-col justify-between border-t-4 border-secondary">
<div>
<span class="font-label-caps text-secondary text-xs"><?php echo vitaldc_t('COST PER ACQUISITION', 'تكلفة الاستحواذ'); ?></span>
<div class="text-4xl font-bold mt-2">-$42.00</div>
</div>
<div class="mt-8 flex items-end gap-2">
<div class="w-2 h-8 bg-secondary/20"></div>
<div class="w-2 h-12 bg-secondary/40"></div>
<div class="w-2 h-16 bg-secondary"></div>
<span class="text-[10px] text-on-surface-variant"><?php echo vitaldc_t('Optimization Path', 'مسار التحسين'); ?></span>
</div>
</div>
<!-- Lead Quality Card -->
<div class="bg-surface-container-high p-8 flex flex-col justify-between border-t-4 border-export-orange">
<div>
<span class="font-label-caps text-export-orange text-xs"><?php echo vitaldc_t('LEAD QUALITY INDEX', 'مؤشر جودة العملاء'); ?></span>
<div class="text-4xl font-bold mt-2">88%</div>
</div>
<div class="mt-8 relative pt-4">
<div class="h-2 w-full bg-export-orange/20 rounded-full">
<div class="h-full w-[88%] bg-export-orange"></div>
</div>
<span class="text-[10px] text-on-surface-variant absolute top-0"><?php echo vitaldc_t('Target: 85%', 'الهدف: 85%'); ?></span>
</div>
</div>
<!-- Impression Share -->
<div class="bg-surface-container-high p-8 flex flex-col justify-between border-t-4 border-tertiary">
<div>
<span class="font-label-caps text-tertiary text-xs"><?php echo vitaldc_t('REGIONAL SHARE', 'الحصة الإقليمية'); ?></span>
<div class="text-4xl font-bold mt-2">64.5%</div>
</div>
<div class="mt-8 flex justify-center">
<div class="w-12 h-12 rounded-full border-2 border-tertiary border-r-transparent animate-spin duration-[3000ms]"></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- 6. Final CTA (Dark) -->
<section class="py-32 px-margin-desktop bg-surface relative overflow-hidden">
<div class="absolute inset-0 opacity-10 pointer-events-none">
<div class="grid-mask w-full h-full"></div>
</div>
<div class="max-w-4xl mx-auto text-center relative z-10">
<h2 class="font-display-lg text-headline-lg md:text-display-lg text-on-surface mb-stack-md uppercase"><?php echo vitaldc_t('Ready to Scale Globally?', 'هل أنت مستعد للتوسع عالمياً؟'); ?></h2>
<p class="font-body-lg text-body-lg text-on-surface-variant mb-stack-lg max-w-2xl mx-auto">
    <?php echo vitaldc_t("Activate the Egyptian export sector's most advanced digital marketing infrastructure today.", 'قم بتفعيل البنية التحتية للتسويق الرقمي الأكثر تقدماً في قطاع التصدير المصري اليوم.'); ?>
</p>
<div class="flex flex-col sm:flex-row justify-center gap-stack-md">
<button class="bg-[#FFB703] text-black px-12 py-5 font-label-caps font-extrabold text-xl hover:bg-export-orange transition-all shadow-xl hover:shadow-export-orange/20">
    <?php echo vitaldc_t('Initialize Growth Protocol', 'بدء بروتوكول النمو'); ?>
</button>
<button class="border border-on-surface-variant text-on-surface-variant px-12 py-5 font-label-caps font-bold text-xl hover:bg-on-surface-variant hover:text-surface transition-all">
    <?php echo vitaldc_t('Request Audit', 'طلب تدقيق'); ?>
</button>
</div>
<div class="mt-16 flex items-center justify-center gap-8 opacity-50">
<span class="font-label-caps text-[10px] tracking-widest uppercase"><?php echo vitaldc_t('Compliant with International Export Standards', 'متوافق مع المعايير الدولية للتصدير'); ?></span>
</div>
</div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Subtle entrance animations could be added here
    });
</script>

<?php get_footer(); ?>