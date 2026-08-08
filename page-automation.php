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
<span class="font-label-caps text-label-caps text-tertiary uppercase tracking-widest" data-i18n="auto-1" data-en="Digital Infrastructure Protocol" data-ar="بروتوكول البنية التحتية الرقمية">Digital Infrastructure Protocol</span>
</div>
<h1 class="text-on-surface font-display-lg text-[48px] md:text-display-lg max-w-4xl mb-stack-md leading-[1.1]">
    <span data-i18n="auto-2" data-en="LAUNCH YOUR GLOBAL " data-ar="أطلق حضورك ">LAUNCH YOUR GLOBAL </span>
    <span class="text-export-orange" data-i18n="auto-3" data-en="DIGITAL PRESENCE." data-ar="الرقمي العالمي.">DIGITAL PRESENCE.</span>
</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant mb-stack-lg max-w-2xl" data-i18n="auto-4" data-en="From manual lead entry to predictive market intelligence. We deploy the AI layers that handle the friction, so you can focus on closing international deals." data-ar="من إدخال البيانات اليدوي إلى الذكاء التنبؤي بالسوق. نحن ننشر طبقات الذكاء الاصطناعي التي تتولى العقبات، لتتفرغ لإبرام الصفقة الدولية.">
                    From manual lead entry to predictive market intelligence. We deploy the AI layers that handle the friction, so you can focus on closing international deals.
                </p>
<div class="flex flex-col md:flex-row gap-4">
<button class="bg-tertiary hover:bg-export-orange text-surface-deep font-label-caps text-label-caps px-8 py-4 transition-all duration-300 rounded-lg flex items-center justify-center gap-2 group">
    <span data-i18n="auto-5" data-en="INITIALIZE AUTOMATION" data-ar="بدء الأتمتة">INITIALIZE AUTOMATION</span>
    <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">bolt</span>
</button>
<button class="border border-border-glass hover:bg-surface-variant/20 text-white font-label-caps text-label-caps px-8 py-4 transition-all duration-300 rounded-lg" data-i18n="auto-6" data-en="VIEW CASE STUDIES" data-ar="عرض دراسات الحالة">
                        VIEW CASE STUDIES
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
    <span data-i18n="auto-7" data-en="Manual Processes Are " data-ar="العمليات اليدوية هي ">Manual Processes Are </span><br>
    <span data-i18n="auto-8" data-en="Scaling Killers" data-ar="قاتل التوسع">Scaling Killers</span>
</h2>
<p class="font-body-lg text-body-lg text-primary-container/70 mb-stack-md" data-i18n="auto-9" data-en="In the competitive landscape of Egyptian exports, speed is the only sustainable moat. Static systems create 'The Friction Gap'—a hidden tax on your growth that compounds with every new market entry." data-ar="في مشهد التصدير المصري التنافسي، السرعة هي الحصن الوحيد المستدام. الأنظمة الثابتة تخلق 'فجوة الاحتكاك'—ضريبة خفية على نموك تتضاعف مع كل دخول لسوق جديدة.">
                        In the competitive landscape of Egyptian exports, speed is the only sustainable moat. Static systems create "The Friction Gap"—a hidden tax on your growth that compounds with every new market entry.
                    </p>
</div>
<div class="md:w-1/2 grid gap-stack-sm w-full">
<div class="bg-neutral-50 p-6 border-l-4 border-export-orange blueprint-border transition-all duration-700 opacity-100 translate-y-0">
<span class="material-symbols-outlined text-export-orange mb-2" data-icon="auto_awesome">auto_awesome</span>
<h4 class="font-headline-md text-headline-md text-primary-container mb-1" data-i18n="auto-10" data-en="Zero-Touch Data Entry" data-ar="إدخال بيانات آلي بدون لمس">Zero-Touch Data Entry</h4>
<p class="font-body-md text-body-md text-primary-container/60" data-i18n="auto-11" data-en="Legacy spreadsheet dependency ends here. Intelligent extraction captures leads from any source automatically." data-ar="ينتهي الاعتماد على الجداول القديمة هنا. الاستخراج الذكي يلتقط العملاء من أي مصدر تلقائياً.">Legacy spreadsheet dependency ends here. Intelligent extraction captures leads from any source automatically.</p>
</div>
<div class="bg-neutral-50 p-6 border-l-4 border-secondary-container blueprint-border transition-all duration-700 opacity-100 translate-y-0">
<span class="material-symbols-outlined text-secondary-container mb-2" data-icon="query_stats">query_stats</span>
<h4 class="font-headline-md text-headline-md text-primary-container mb-1" data-i18n="auto-12" data-en="AI Lead Scoring" data-ar="تقييم العملاء بالذكاء الاصطناعي">AI Lead Scoring</h4>
<p class="font-body-md text-body-md text-primary-container/60" data-i18n="auto-13" data-en="Rank global opportunities by market readiness and credit risk before your team even picks up the phone." data-ar="صنف الفرص العالمية حسب جاهزية السوق والمخاطر الائتمانية قبل أن يرفع فريقك الهاتف.">Rank global opportunities by market readiness and credit risk before your team even picks up the phone.</p>
</div>
<div class="bg-neutral-50 p-6 border-l-4 border-primary-container blueprint-border transition-all duration-700 opacity-100 translate-y-0">
<span class="material-symbols-outlined text-primary-container mb-2" data-icon="sync">sync</span>
<h4 class="font-headline-md text-headline-md text-primary-container mb-1" data-i18n="auto-14" data-en="Automated CRM Sync" data-ar="مزامنة آليّة لـ CRM">Automated CRM Sync</h4>
<p class="font-body-md text-body-md text-primary-container/60" data-i18n="auto-15" data-en="A unified source of truth that updates in real-time, eliminating data silos between logistics and sales." data-ar="مصدر موحد للحقيقة يتحدث في الوقت الفعلي، ملغياً فجوات البيانات بين اللوجستيات والمبيعات.">A unified source of truth that updates in real-time, eliminating data silos between logistics and sales.</p>
</div>
</div>
</div>
</div>
</section>
<!-- 3. AUTOMATION MODULES (DARK) -->
<section class="bg-surface-deep py-section-gap relative overflow-hidden">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop relative z-10">
<div class="text-center mb-section-gap transition-all duration-700 opacity-100 translate-y-0">
<span class="font-label-caps text-label-caps text-secondary mb-4 block tracking-widest" data-i18n="auto-16" data-en="SYSTEM ARCHITECTURE" data-ar="هندسة النظام">SYSTEM ARCHITECTURE</span>
<h2 class="font-display-lg text-headline-lg text-white" data-i18n="auto-17" data-en="Core Intelligence Modules" data-ar="وحدات الذكاء الأساسية">Core Intelligence Modules</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8 transition-all duration-700 opacity-100 translate-y-0">
<!-- Card 1 -->
<div class="bg-primary-container/40 p-8 border border-border-glass hover:border-secondary transition-all group relative duration-700 opacity-100 translate-y-0">
<div class="absolute top-0 left-0 w-full h-1 bg-secondary scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></div>
<div class="w-16 h-16 bg-surface-variant flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-secondary text-3xl" data-icon="neurology">neurology</span>
</div>
<h3 class="font-headline-md text-headline-md text-white mb-4" data-i18n="auto-18" data-en="AI Lead Scoring" data-ar="تقييم العملاء بالذكاء الاصطناعي">AI Lead Scoring</h3>
<p class="font-body-md text-on-surface-variant mb-6" data-i18n="auto-19" data-en="Proprietary neural networks analyze customs data and import patterns to identify high-probability buyers in target territories." data-ar="شبكات عصبية مخصصة تحلل بيانات الجمارك وأنماط الاستيراد لتحديد المشترين عالي الاحتمالية في المناطق المستهدفة.">Proprietary neural networks analyze customs data and import patterns to identify high-probability buyers in target territories.</p>
<ul class="space-y-3 font-label-caps text-label-sm text-on-surface/60">
<li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-secondary"></span> <span data-i18n="auto-20" data-en="98% Predictive Accuracy" data-ar="دقة تنبؤية 98%">98% Predictive Accuracy</span></li>
<li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-secondary"></span> <span data-i18n="auto-21" data-en="Multi-source Data Ingestion" data-ar="استيعاب بيانات متعدد المصادر">Multi-source Data Ingestion</span></li>
</ul>
</div>
<!-- Card 2 -->
<div class="bg-primary-container/40 p-8 border border-border-glass hover:border-tertiary transition-all group relative duration-700 opacity-100 translate-y-0">
<div class="absolute top-0 left-0 w-full h-1 bg-tertiary scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></div>
<div class="w-16 h-16 bg-surface-variant flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-tertiary text-3xl" data-icon="hub">hub</span>
</div>
<h3 class="font-headline-md text-headline-md text-white mb-4" data-i18n="auto-22" data-en="CRM Automation" data-ar="أتمتة CRM">CRM Automation</h3>
<p class="font-body-md text-on-surface-variant mb-6" data-i18n="auto-23" data-en="Autonomous workflows that handle outreach, follow-ups, and documentation routing without human intervention." data-ar="مسارات عمل ذاتية تتولى التواصل، المتابعات، وتوجيه المستندات بدون تدخل بشري.">Autonomous workflows that handle outreach, follow-ups, and documentation routing without human intervention.</p>
<ul class="space-y-3 font-label-caps text-label-sm text-on-surface/60">
<li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-tertiary"></span> <span data-i18n="auto-24" data-en="40+ Integrated Platforms" data-ar="أكثر من 40 منصة متكاملة">40+ Integrated Platforms</span></li>
<li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-tertiary"></span> <span data-i18n="auto-25" data-en="Zero-Latency Syncing" data-ar="مزامنة بدون تأخير">Zero-Latency Syncing</span></li>
</ul>
</div>
<!-- Card 3 -->
<div class="bg-primary-container/40 p-8 border border-border-glass hover:border-export-orange transition-all group relative duration-700 opacity-100 translate-y-0">
<div class="absolute top-0 left-0 w-full h-1 bg-export-orange scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></div>
<div class="w-16 h-16 bg-surface-variant flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-export-orange text-3xl" data-icon="monitoring">monitoring</span>
</div>
<h3 class="font-headline-md text-headline-md text-white mb-4" data-i18n="auto-26" data-en="Predictive Analytics" data-ar="التحليلات التنبؤية">Predictive Analytics</h3>
<p class="font-body-md text-on-surface-variant mb-6" data-i18n="auto-27" data-en="Forecasting demand spikes and supply chain bottlenecks before they occur using macro-economic digital signals." data-ar="التنبؤ بزيادات الطلب واختناقات سلسلة التوريد قبل حدوثها باستخدام الإشارات الرقمية الاقتصادية.">Forecasting demand spikes and supply chain bottlenecks before they occur using macro-economic digital signals.</p>
<ul class="space-y-3 font-label-caps text-label-sm text-on-surface/60">
<li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-export-orange"></span> <span data-i18n="auto-28" data-en="Real-time Market Signals" data-ar="إشارات السوق الفورية">Real-time Market Signals</span></li>
<li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-export-orange"></span> <span data-i18n="auto-29" data-en="Risk Mitigation Alerts" data-ar="تنبيهات التخفيف من المخاطر">Risk Mitigation Alerts</span></li>
</ul>
</div>
</div>
</div>
</section>
<!-- 4. THE AUTOMATION PROTOCOL (WHITE) -->
<section class="bg-white py-section-gap border-b border-neutral-100">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<div class="mb-section-gap max-w-2xl transition-all duration-700 opacity-100 translate-y-0">
<h2 class="font-display-lg text-headline-lg text-primary-container mb-stack-sm" data-i18n="auto-30" data-en="The Automation Protocol" data-ar="بروتوكول الأتمتة">The Automation Protocol</h2>
<p class="font-body-lg text-body-lg text-primary-container/60" data-i18n="auto-31" data-en="Our systematic approach to replacing legacy bottlenecks with digital infrastructure." data-ar="نهجنا المنهجي لاستبدال العقبات القديمة بالبنية التحتية الرقمية.">Our systematic approach to replacing legacy bottlenecks with digital infrastructure.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-4 gap-gutter relative transition-all duration-700 opacity-100 translate-y-0">
<!-- Step 1 -->
<div class="relative z-10 protocol-line transition-all duration-700 opacity-100 translate-y-0">
<div class="w-12 h-12 bg-primary-container text-white rounded-full flex items-center justify-center font-label-caps mb-6 relative z-10">01</div>
<h4 class="font-headline-md text-headline-md text-primary-container mb-2" data-i18n="auto-32" data-en="Audit" data-ar="التدقيق">Audit</h4>
<p class="font-body-md text-primary-container/60" data-i18n="auto-33" data-en="We map your current manual touchpoints and quantify the friction cost in real dollars." data-ar="نحدد نقاط التفاعل اليدوي الحالية ونقيس تكلفة الاحتكاك بالدولار الحقيقي.">We map your current manual touchpoints and quantify the friction cost in real dollars.</p>
</div>
<!-- Step 2 -->
<div class="relative z-10 protocol-line transition-all duration-700 opacity-100 translate-y-0">
<div class="w-12 h-12 bg-primary-container text-white rounded-full flex items-center justify-center font-label-caps mb-6 relative z-10">02</div>
<h4 class="font-headline-md text-headline-md text-primary-container mb-2" data-i18n="auto-34" data-en="Integration" data-ar="الدمج">Integration</h4>
<p class="font-body-md text-primary-container/60" data-i18n="auto-35" data-en="Deployment of our proprietary AI middleware to connect your disconnected data silos." data-ar="نشر برمجيات الذكاء الاصطناعي الوسيطة لتوصيل فجوات البيانات المنفصلة.">Deployment of our proprietary AI middleware to connect your disconnected data silos.</p>
</div>
<!-- Step 3 -->
<div class="relative z-10 protocol-line transition-all duration-700 opacity-100 translate-y-0">
<div class="w-12 h-12 bg-primary-container text-white rounded-full flex items-center justify-center font-label-caps mb-6 relative z-10">03</div>
<h4 class="font-headline-md text-headline-md text-primary-container mb-2" data-i18n="auto-36" data-en="Training" data-ar="التدريب">Training</h4>
<p class="font-body-md text-primary-container/60" data-i18n="auto-37" data-en="Custom model tuning on your historical trade data to ensure industry-specific accuracy." data-ar="ضبط نموذج مخصص بناءً على بيانات تجارتك السابقة لضمان دقة متخصصة.">Custom model tuning on your historical trade data to ensure industry-specific accuracy.</p>
</div>
<!-- Step 4 -->
<div class="relative z-10 transition-all duration-700 opacity-100 translate-y-0">
<div class="w-12 h-12 bg-primary-container text-white rounded-full flex items-center justify-center font-label-caps mb-6 relative z-10">04</div>
<h4 class="font-headline-md text-headline-md text-primary-container mb-2" data-i18n="auto-38" data-en="Optimization" data-ar="التحسين">Optimization</h4>
<p class="font-body-md text-primary-container/60" data-i18n="auto-39" data-en="Continuous feedback loops that refine AI performance as your export volume scales." data-ar="حلقات تغذية راجعة مستمرة تطور أداء الذكاء الاصطناعي مع توسع حجم تصديرك.">Continuous feedback loops that refine AI performance as your export volume scales.</p>
</div>
</div>
</div>
</section>
<!-- 5. ROI BENCHMARKS (DARK) -->
<section class="bg-primary-container py-section-gap grid-pattern">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<div class="grid grid-cols-1 md:grid-cols-2 gap-stack-lg items-center transition-all duration-700 opacity-100 translate-y-0">
<div class="transition-all duration-700 opacity-100 translate-y-0">
<h2 class="font-display-lg text-headline-lg text-white mb-stack-md" data-i18n="auto-40" data-en="Measured Efficiency Gains" data-ar="مكاسب الكفاءة المقاسة">Measured Efficiency Gains</h2>
<p class="font-body-lg text-on-surface-variant mb-stack-md" data-i18n="auto-41" data-en="We don't just deploy technology; we deliver tangible infrastructure improvements. Our benchmarks represent the average performance across our exporter network." data-ar="نحن لا ننشر التكنولوجيا فحسب؛ بل نقدم تحسينات ملموسة في البنية التحتية. تمثل معاييرنا متوسط الأداء عبر شبكة المصدرين لدينا.">
                        We don't just deploy technology; we deliver tangible infrastructure improvements. Our benchmarks represent the average performance across our exporter network.
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
<div class="font-label-caps text-label-sm text-on-surface/70 uppercase" data-i18n="auto-42" data-en="Reduction in Manual Entry" data-ar="انخفاض في الإدخال اليدوي">Reduction in Manual Entry</div>
</div>
<div class="bg-surface-deep/50 p-8 border border-border-glass transition-all duration-700 opacity-100 translate-y-0">
<div class="text-[48px] font-display-lg text-tertiary mb-2">24/7</div>
<div class="font-label-caps text-label-sm text-on-surface/70 uppercase" data-i18n="auto-43" data-en="Lead Qualification" data-ar="تأهيل العملاء على مدار 24/7">Lead Qualification</div>
</div>
<div class="bg-surface-deep/50 p-8 border border-border-glass transition-all duration-700 opacity-100 translate-y-0">
<div class="text-[48px] font-display-lg text-export-orange mb-2">3.2x</div>
<div class="font-label-caps text-label-sm text-on-surface/70 uppercase" data-i18n="auto-44" data-en="Sales Team Capacity" data-ar="قدرة فريق المبيعات">Sales Team Capacity</div>
</div>
<div class="bg-surface-deep/50 p-8 border border-border-glass transition-all duration-700 opacity-100 translate-y-0">
<div class="text-[48px] font-display-lg text-white mb-2">0%</div>
<div class="font-label-caps text-label-sm text-on-surface/70 uppercase" data-i18n="auto-45" data-en="Documentation Errors" data-ar="أخطاء التوثيق">Documentation Errors</div>
</div>
</div>
</div>
</div>
</section>
<!-- 6. FINAL CTA (WHITE) -->
<section class="bg-white py-section-gap relative overflow-hidden">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop relative z-10">
<div class="bg-neutral-50 border border-neutral-200 p-8 md:p-16 text-center max-w-4xl mx-auto rounded-lg transition-all duration-700 opacity-100 translate-y-0">
<h2 class="font-display-lg text-headline-lg text-primary-container mb-stack-md" data-i18n="auto-46" data-en="Ready to Optimize Your Core?" data-ar="هل أنت مستعد لتحسين النواة الخاصة بك؟">Ready to Optimize Your Core?</h2>
<p class="font-body-lg text-body-lg text-primary-container/60 mb-stack-lg max-w-xl mx-auto" data-i18n="auto-47" data-en="Start your digital transformation today. Our engineers are ready to audit your current stack and propose an automation roadmap." data-ar="ابدأ تحولك الرقمي اليوم. مهندسونا مستعدون لتدقيق نظامك الحالي واقتراح خريطة طريق للأتمتة.">
                    Start your digital transformation today. Our engineers are ready to audit your current stack and propose an automation roadmap.
                </p>
<div class="flex justify-center">
<button class="bg-export-orange hover:bg-primary-container text-white font-label-caps text-label-caps px-12 py-5 transition-all duration-300 rounded-lg flex items-center gap-3 shadow-lg shadow-export-orange/20">
    <span data-i18n="auto-48" data-en="INITIATE CONNECTION" data-ar="بدء الاتصال">INITIATE CONNECTION</span>
    <span class="material-symbols-outlined" data-icon="sensors">sensors</span>
</button>
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