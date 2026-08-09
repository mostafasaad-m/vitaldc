<?php 
/**
 * Template Name: vital-auromation
 */

 ?>

 <?php 

 get_header(); 

 ?> 

<style>
        .grid-pattern {
            background-image: linear-gradient(to right, rgba(142, 202, 230, 0.05) 1px, transparent 1px),
                              linear-gradient(to bottom, rgba(142, 202, 230, 0.05) 1px, transparent 1px);
            background-size: 40px 40px;
        }
        .grid-pattern-light {
            background-image: linear-gradient(to right, rgba(2, 48, 71, 0.03) 1px, transparent 1px),
                              linear-gradient(to bottom, rgba(2, 48, 71, 0.03) 1px, transparent 1px);
            background-size: 40px 40px;
        }
        .blueprint-border {
            border: 1px solid rgba(142, 202, 230, 0.15);
        }
        .protocol-line::after {
            content: '';
            position: absolute;
            top: 24px;
            left: 50%;
            width: 100%;
            height: 1px;
            background: rgba(2, 48, 71, 0.1);
            z-index: 0;
        }
        @media (max-width: 768px) {
            .protocol-line::after { display: none; }
        }
    </style>
</head>
<body class="bg-surface-deep text-on-surface selection:bg-tertiary selection:text-surface-deep overflow-x-hidden">
<!-- 1. HERO SECTION (DARK) -->
<section class="relative min-h-screen flex items-center bg-primary-container grid-pattern overflow-hidden">

<div class="relative z-10 max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-section-gap">
<div class="max-w-3xl transition-all duration-700 opacity-100 translate-y-0">
<div class="inline-block mb-stack-md bg-surface-variant/30 px-4 py-1 border border-border-glass">
<span class="font-label-caps text-label-caps text-tertiary uppercase tracking-widest"><?php echo vitaldc_t('SIMPLE IT & WORKFLOW SOLUTIONS', 'حلول تقنية وأتمتة مبسطة'); ?></span>
</div>
<h1 class="text-on-surface font-display-lg text-[48px] md:text-display-lg max-w-4xl mb-stack-md leading-[1.1]">
    <span><?php echo vitaldc_t('EASY IT SYSTEMS & AUTOMATION ', 'أنظمة تقنية وأتمتة سهلة '); ?></span>
    <span class="text-export-orange"><?php echo vitaldc_t('FOR YOUR BUSINESS.', 'لِتَطْوِيرِ أَعْمَالِك.'); ?></span>
</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant mb-stack-lg max-w-2xl">
    <?php echo vitaldc_t('Streamline your daily operations with simple IT tools and smart automation. Save hours of manual work by organizing inquiries, customer contacts, and lead follow-ups automatically—no technical experience required.', 'بسط عملياتك اليومية بأدوات تقنية وأتمتة أسهل. وفّر ساعات من العمل اليدوي في تنظيم الاستفسارات، وتتبع العملاء الجدد تلقائياً—دون الحاجة لأي خبرة تقنية سابقاً.'); ?>
</p>
<div class="flex flex-col md:flex-row gap-4">
<a href="/start" class="bg-tertiary hover:bg-export-orange text-surface-deep font-label-caps text-label-caps px-8 py-4 transition-all duration-300 rounded-lg flex items-center justify-center gap-2 group">
    <span><?php echo vitaldc_t('START SIMPLE AUTOMATION', 'ابدأ الأتمتة السهلة'); ?></span>
    <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">bolt</span>
</a>
<button class="border border-border-glass hover:bg-surface-variant/20 text-white font-label-caps text-label-caps px-8 py-4 transition-all duration-300 rounded-lg">
    <?php echo vitaldc_t('VIEW CASE STUDIES', 'عرض دراسات الحالة'); ?>
</button>
</div>
</div>
</div>
<!-- Atmospheric Grid Element -->
<div class="absolute bottom-0 right-0 w-1/2 h-1/2 opacity-20 pointer-events-none">
<div class="w-full h-full border-l border-t border-glass transition-all duration-700 opacity-100 translate-y-0"></div>
</div>
</section>
<!-- 2. REALITY CHECK (WHITE) -->
<section class="bg-white py-section-gap grid-pattern-light border-y border-neutral-100">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<div class="flex flex-col md:flex-row gap-stack-lg items-start transition-all duration-700 opacity-100 translate-y-0">
<div class="md:w-1/2">
<h2 class="font-display-lg text-headline-lg text-primary-container mb-stack-md">
    <span><?php echo vitaldc_t('Manual Processes Are ', 'العمليات اليدوية هي '); ?></span><br>
    <span><?php echo vitaldc_t('Scaling Killers', 'قاتل التوسع'); ?></span>
</h2>
<p class="font-body-lg text-body-lg text-primary-container/70 mb-stack-md">
    <?php echo vitaldc_t("In the competitive landscape of Egyptian exports, speed is the only sustainable moat. Static systems create 'The Friction Gap'—a hidden tax on your growth that compounds with every new market entry.", 'في مشهد التصدير المصري التنافسي، السرعة هي الحصن الوحيد المستدام. الأنظمة الثابتة تخلق "فجوة الاحتكاك"—ضريبة خفية على نموك تتضاعف مع كل دخول لسوق جديدة.'); ?>
</p>
</div>
<div class="md:w-1/2 grid gap-stack-sm w-full">
<div class="bg-neutral-50 p-6 border-l-4 border-export-orange blueprint-border transition-all duration-700 opacity-100 translate-y-0">
<span class="material-symbols-outlined text-export-orange mb-2" data-icon="auto_awesome">auto_awesome</span>
<h4 class="font-headline-md text-headline-md text-primary-container mb-1"><?php echo vitaldc_t('Zero-Touch Data Entry', 'إدخال بيانات آلي بدون لمس'); ?></h4>
<p class="font-body-md text-body-md text-primary-container/60"><?php echo vitaldc_t('Legacy spreadsheet dependency ends here. Intelligent extraction captures leads from any source automatically.', 'ينتهي الاعتماد على الجداول القديمة هنا. الاستخراج الذكي يلتقط العملاء من أي مصدر تلقائياً.'); ?></p>
</div>
<div class="bg-neutral-50 p-6 border-l-4 border-secondary-container blueprint-border transition-all duration-700 opacity-100 translate-y-0">
<span class="material-symbols-outlined text-secondary-container mb-2" data-icon="query_stats">query_stats</span>
<h4 class="font-headline-md text-headline-md text-primary-container mb-1"><?php echo vitaldc_t('AI Lead Scoring', 'تقييم العملاء بالذكاء الاصطناعي'); ?></h4>
<p class="font-body-md text-body-md text-primary-container/60"><?php echo vitaldc_t('Rank global opportunities by market readiness and credit risk before your team even picks up the phone.', 'صنف الفرص العالمية حسب جاهزية السوق والمخاطر الائتمانية قبل أن يرفع فريقك الهاتف.'); ?></p>
</div>
<div class="bg-neutral-50 p-6 border-l-4 border-primary-container blueprint-border transition-all duration-700 opacity-100 translate-y-0">
<span class="material-symbols-outlined text-primary-container mb-2" data-icon="sync">sync</span>
<h4 class="font-headline-md text-headline-md text-primary-container mb-1"><?php echo vitaldc_t('Automated CRM Sync', 'مزامنة آليّة لـ CRM'); ?></h4>
<p class="font-body-md text-body-md text-primary-container/60"><?php echo vitaldc_t('A unified source of truth that updates in real-time, eliminating data silos between logistics and sales.', 'مصدر موحد للحقيقة يتحدث في الوقت الفعلي، ملغياً فجوات البيانات بين اللوجستيات والمبيعات.'); ?></p>
</div>
</div>
</div>
</div>
</section>
<!-- 3. AUTOMATION MODULES (DARK) -->
<section class="bg-surface-deep py-section-gap relative overflow-hidden">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop relative z-10">
<div class="text-center mb-section-gap transition-all duration-700 opacity-100 translate-y-0">
<span class="font-label-caps text-label-caps text-secondary mb-4 block tracking-widest"><?php echo vitaldc_t('SYSTEM ARCHITECTURE', 'هندسة النظام'); ?></span>
<h2 class="font-display-lg text-headline-lg text-white"><?php echo vitaldc_t('Core Intelligence Modules', 'وحدات الذكاء الأساسية'); ?></h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8 transition-all duration-700 opacity-100 translate-y-0">
<!-- Card 1 -->
<div class="bg-primary-container/40 p-8 border border-border-glass hover:border-secondary transition-all group relative duration-700 opacity-100 translate-y-0">
<div class="absolute top-0 left-0 w-full h-1 bg-secondary scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></div>
<div class="w-16 h-16 bg-surface-variant flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-secondary text-3xl" data-icon="neurology">neurology</span>
</div>
<h3 class="font-headline-md text-headline-md text-white mb-4"><?php echo vitaldc_t('AI Lead Scoring', 'تقييم العملاء بالذكاء الاصطناعي'); ?></h3>
<p class="font-body-md text-on-surface-variant mb-6"><?php echo vitaldc_t('Proprietary neural networks analyze customs data and import patterns to identify high-probability buyers in target territories.', 'شبكات عصبية مخصصة تحلل بيانات الجمارك وأنماط الاستيراد لتحديد المشترين عالي الاحتمالية في المناطق المستهدفة.'); ?></p>
<ul class="space-y-3 font-label-caps text-label-sm text-on-surface/60">
<li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-secondary"></span> <span><?php echo vitaldc_t('98% Predictive Accuracy', 'دقة تنبؤية 98%'); ?></span></li>
<li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-secondary"></span> <span><?php echo vitaldc_t('Multi-source Data Ingestion', 'استيعاب بيانات متعدد المصادر'); ?></span></li>
</ul>
</div>
<!-- Card 2 -->
<div class="bg-primary-container/40 p-8 border border-border-glass hover:border-tertiary transition-all group relative duration-700 opacity-100 translate-y-0">
<div class="absolute top-0 left-0 w-full h-1 bg-tertiary scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></div>
<div class="w-16 h-16 bg-surface-variant flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-tertiary text-3xl" data-icon="hub">hub</span>
</div>
<h3 class="font-headline-md text-headline-md text-white mb-4"><?php echo vitaldc_t('CRM Automation', 'أتمتة CRM'); ?></h3>
<p class="font-body-md text-on-surface-variant mb-6"><?php echo vitaldc_t('Autonomous workflows that handle outreach, follow-ups, and documentation routing without human intervention.', 'مسارات عمل ذاتية تتولى التواصل، المتابعات، وتوجيه المستندات بدون تدخل بشري.'); ?></p>
<ul class="space-y-3 font-label-caps text-label-sm text-on-surface/60">
<li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-tertiary"></span> <span><?php echo vitaldc_t('40+ Integrated Platforms', 'أكثر من 40 منصة متكاملة'); ?></span></li>
<li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-tertiary"></span> <span><?php echo vitaldc_t('Zero-Latency Syncing', 'مزامنة بدون تأخير'); ?></span></li>
</ul>
</div>
<!-- Card 3 -->
<div class="bg-primary-container/40 p-8 border border-border-glass hover:border-export-orange transition-all group relative duration-700 opacity-100 translate-y-0">
<div class="absolute top-0 left-0 w-full h-1 bg-export-orange scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></div>
<div class="w-16 h-16 bg-surface-variant flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-export-orange text-3xl" data-icon="monitoring">monitoring</span>
</div>
<h3 class="font-headline-md text-headline-md text-white mb-4"><?php echo vitaldc_t('Predictive Analytics', 'التحليلات التنبؤية'); ?></h3>
<p class="font-body-md text-on-surface-variant mb-6"><?php echo vitaldc_t('Forecasting demand spikes and supply chain bottlenecks before they occur using macro-economic digital signals.', 'التنبؤ بزيادات الطلب واختناقات سلسلة التوريد قبل حدوثها باستخدام الإشارات الرقمية الاقتصادية.'); ?></p>
<ul class="space-y-3 font-label-caps text-label-sm text-on-surface/60">
<li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-export-orange"></span> <span><?php echo vitaldc_t('Real-time Market Signals', 'إشارات السوق الفورية'); ?></span></li>
<li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-export-orange"></span> <span><?php echo vitaldc_t('Risk Mitigation Alerts', 'تنبيهات التخفيف من المخاطر'); ?></span></li>
</ul>
</div>
</div>
</div>
</section>
<!-- 4. THE AUTOMATION PROTOCOL (WHITE) -->
<section class="bg-white py-section-gap border-b border-neutral-100">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<div class="mb-section-gap max-w-2xl transition-all duration-700 opacity-100 translate-y-0">
<h2 class="font-display-lg text-headline-lg text-primary-container mb-stack-sm"><?php echo vitaldc_t('The Automation Protocol', 'بروتوكول الأتمتة'); ?></h2>
<p class="font-body-lg text-body-lg text-primary-container/60"><?php echo vitaldc_t('Our systematic approach to replacing legacy bottlenecks with digital infrastructure.', 'نهجنا المنهجي لاستبدال العقبات القديمة بالبنية التحتية الرقمية.'); ?></p>
</div>
<div class="grid grid-cols-1 md:grid-cols-4 gap-gutter relative transition-all duration-700 opacity-100 translate-y-0">
<!-- Step 1 -->
<div class="relative z-10 protocol-line transition-all duration-700 opacity-100 translate-y-0">
<div class="w-12 h-12 bg-primary-container text-white rounded-full flex items-center justify-center font-label-caps mb-6 relative z-10">01</div>
<h4 class="font-headline-md text-headline-md text-primary-container mb-2"><?php echo vitaldc_t('Audit', 'التدقيق'); ?></h4>
<p class="font-body-md text-primary-container/60"><?php echo vitaldc_t('We map your current manual touchpoints and quantify the friction cost in real dollars.', 'نحدد نقاط التفاعل اليدوي الحالية ونقيس تكلفة الاحتكاك بالدولار الحقيقي.'); ?></p>
</div>
<!-- Step 2 -->
<div class="relative z-10 protocol-line transition-all duration-700 opacity-100 translate-y-0">
<div class="w-12 h-12 bg-primary-container text-white rounded-full flex items-center justify-center font-label-caps mb-6 relative z-10">02</div>
<h4 class="font-headline-md text-headline-md text-primary-container mb-2"><?php echo vitaldc_t('Integration', 'الدمج'); ?></h4>
<p class="font-body-md text-primary-container/60"><?php echo vitaldc_t('Deployment of our proprietary AI middleware to connect your disconnected data silos.', 'نشر برمجيات الذكاء الاصطناعي الوسيطة لتوصيل فجوات البيانات المنفصلة.'); ?></p>
</div>
<!-- Step 3 -->
<div class="relative z-10 protocol-line transition-all duration-700 opacity-100 translate-y-0">
<div class="w-12 h-12 bg-primary-container text-white rounded-full flex items-center justify-center font-label-caps mb-6 relative z-10">03</div>
<h4 class="font-headline-md text-headline-md text-primary-container mb-2"><?php echo vitaldc_t('Training', 'التدريب'); ?></h4>
<p class="font-body-md text-primary-container/60"><?php echo vitaldc_t('Custom model tuning on your historical trade data to ensure industry-specific accuracy.', 'ضبط نموذج مخصص بناءً على بيانات تجارتك السابقة لضمان دقة متخصصة.'); ?></p>
</div>
<!-- Step 4 -->
<div class="relative z-10 transition-all duration-700 opacity-100 translate-y-0">
<div class="w-12 h-12 bg-primary-container text-white rounded-full flex items-center justify-center font-label-caps mb-6 relative z-10">04</div>
<h4 class="font-headline-md text-headline-md text-primary-container mb-2"><?php echo vitaldc_t('Optimization', 'التحسين'); ?></h4>
<p class="font-body-md text-primary-container/60"><?php echo vitaldc_t('Continuous feedback loops that refine AI performance as your export volume scales.', 'حلقات تغذية راجعة مستمرة تطور أداء الذكاء الاصطناعي مع توسع حجم تصديرك.'); ?></p>
</div>
</div>
</div>
</section>
<!-- 5. ROI BENCHMARKS (DARK) -->
<section class="bg-primary-container py-section-gap grid-pattern">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<div class="grid grid-cols-1 md:grid-cols-2 gap-stack-lg items-center transition-all duration-700 opacity-100 translate-y-0">
<div class="transition-all duration-700 opacity-100 translate-y-0">
<h2 class="font-display-lg text-headline-lg text-white mb-stack-md"><?php echo vitaldc_t('Measured Efficiency Gains', 'مكاسب الكفاءة المقاسة'); ?></h2>
<p class="font-body-lg text-on-surface-variant mb-stack-md">
    <?php echo vitaldc_t("We don't just deploy technology; we deliver tangible infrastructure improvements. Our benchmarks represent the average performance across our exporter network.", 'نحن لا ننشر التكنولوجيا فحسب؛ بل نقدم تحسينات ملموسة في البنية التحتية. تمثل معاييرنا متوسط الأداء عبر شبكة المصدرين لدينا.'); ?>
</p>
<div class="flex items-center gap-4 py-4 border-t border-border-glass">
<span class="font-label-caps text-label-caps text-tertiary">UPTIME: 99.9%</span>
<div class="h-4 w-px bg-border-glass"></div>
<span class="font-label-caps text-label-caps text-tertiary">LATENCY: &lt;50MS</span>
</div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 transition-all duration-700 opacity-100 translate-y-0">
<div class="bg-surface-deep/50 p-8 border border-border-glass transition-all duration-700 opacity-100 translate-y-0">
<div class="text-[48px] font-display-lg text-secondary mb-2">85%</div>
<div class="font-label-caps text-label-sm text-on-surface/70 uppercase"><?php echo vitaldc_t('Reduction in Manual Entry', 'انخفاض في الإدخال اليدوي'); ?></div>
</div>
<div class="bg-surface-deep/50 p-8 border border-border-glass transition-all duration-700 opacity-100 translate-y-0">
<div class="text-[48px] font-display-lg text-tertiary mb-2">24/7</div>
<div class="font-label-caps text-label-sm text-on-surface/70 uppercase"><?php echo vitaldc_t('Lead Qualification', 'تأهيل العملاء على مدار 24/7'); ?></div>
</div>
<div class="bg-surface-deep/50 p-8 border border-border-glass transition-all duration-700 opacity-100 translate-y-0">
<div class="text-[48px] font-display-lg text-export-orange mb-2">3.2x</div>
<div class="font-label-caps text-label-sm text-on-surface/70 uppercase"><?php echo vitaldc_t('Sales Team Capacity', 'قدرة فريق المبيعات'); ?></div>
</div>
<div class="bg-surface-deep/50 p-8 border border-border-glass transition-all duration-700 opacity-100 translate-y-0">
<div class="text-[48px] font-display-lg text-white mb-2">0%</div>
<div class="font-label-caps text-label-sm text-on-surface/70 uppercase"><?php echo vitaldc_t('Documentation Errors', 'أخطاء التوثيق'); ?></div>
</div>
</div>
</div>
</div>
</section>
<!-- 6. FINAL CTA (WHITE) -->
<section class="bg-white py-section-gap relative overflow-hidden">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop relative z-10">
<div class="bg-neutral-50 border border-neutral-200 p-8 md:p-16 text-center max-w-4xl mx-auto rounded-lg transition-all duration-700 opacity-100 translate-y-0">
<h2 class="font-display-lg text-headline-lg text-primary-container mb-stack-md"><?php echo vitaldc_t('Ready to Optimize Your Core?', 'هل أنت مستعد لتحسين النواة الخاصة بك؟'); ?></h2>
<p class="font-body-lg text-body-lg text-primary-container/60 mb-stack-lg max-w-xl mx-auto">
    <?php echo vitaldc_t('Start your digital transformation today. Our engineers are ready to audit your current stack and propose an automation roadmap.', 'ابدأ تحولك الرقمي اليوم. مهندسونا مستعدون لتدقيق نظامك الحالي واقتراح خريطة طريق للأتمتة.'); ?>
</p>
<div class="flex justify-center">
<a href="/start" class="bg-export-orange hover:bg-primary-container text-white font-label-caps text-label-caps px-12 py-5 transition-all duration-300 rounded-lg flex items-center gap-3 shadow-lg shadow-export-orange/20">
    <span><?php echo vitaldc_t('INITIATE CONNECTION', 'بدء الاتصال'); ?></span>
    <span class="material-symbols-outlined" data-icon="sensors">sensors</span>
</a>
</div>
</div>
</div>
<!-- Abstract Decoration -->
<div class="absolute top-0 right-0 w-64 h-64 bg-secondary/5 blur-[100px] -mr-32 -mt-32"></div>
<div class="absolute bottom-0 left-0 w-64 h-64 bg-tertiary/5 blur-[100px] -ml-32 -mb-32"></div>
</section>
<script>
        // Simple micro-interaction for scroll reveals
        document.addEventListener('DOMContentLoaded', () => {
            const observerOptions = {
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('opacity-100', 'translate-y-0');
                        entry.target.classList.remove('opacity-0', 'translate-y-8');
                    }
                });
            }, observerOptions);

            // Select elements to animate
            const animateElements = document.querySelectorAll('section > div > div, .grid > div');
            animateElements.forEach(el => {
                el.classList.add('transition-all', 'duration-700', 'opacity-0', 'translate-y-8');
                observer.observe(el);
            });
        });
    </script>

<?php get_footer(); ?>
</body></html>