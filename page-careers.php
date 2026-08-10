<?php 
/**
 * Template Name: vital careers
 */

 ?>
<?php get_header(); ?>

<!DOCTYPE html><html class="dark" lang="en"><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Careers | VitalDC Protocol</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Poppins:wght@500&amp;family=Geist:wght@600;700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .grid-line-x { background-image: linear-gradient(to right, rgba(142, 202, 230, 0.1) 1px, transparent 1px); background-size: 40px 100%; }
        .grid-line-y { background-image: linear-gradient(to bottom, rgba(142, 202, 230, 0.1) 1px, transparent 1px); background-size: 100% 40px; }
        .clip-slant { clip-path: polygon(0 0, 100% 0, 100% 90%, 0% 100%); }
    </style>

</head>
<body class="bg-surface-deep text-on-surface font-body-md overflow-x-hidden">
<!-- HERO SECTION (DARK) -->
<section class="relative min-h-screen flex items-center pt-32 pb-section-gap overflow-hidden bg-surface-deep transition-all duration-1000 opacity-100">

<div class="absolute inset-0 grid-line-x opacity-20"></div>
<div class="absolute inset-0 grid-line-y opacity-20"></div>
<div class="relative z-10 max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop w-full">
<div class="flex flex-col gap-stack-md max-w-4xl">
<div class="flex items-center gap-4 animate-pulse">
<span class="w-2 h-2 bg-tertiary rounded-full"></span>
<span class="font-label-caps text-label-caps text-tertiary tracking-widest"><?php echo vitaldc_t('JOIN OUR GROWING TEAM // CAREERS', 'انضم إلى فريقنا // الفرص الوظيفية'); ?></span>
</div>
<h1 class="text-on-surface font-display-lg text-[48px] md:text-display-lg max-w-4xl mb-stack-md leading-[1.1]">
    <span><?php echo vitaldc_t('BUILD THE FUTURE OF IT & ', 'ابنِ مستقبل التقنية والتسويق '); ?></span>
    <span class="text-export-orange"><?php echo vitaldc_t('MARKETING WITH US.', 'مَعَنَا.'); ?></span>
</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mt-4">
    <?php echo vitaldc_t('Join a passionate team dedicated to empowering beginner businesses and regional exporters. We combine creative digital marketing, accessible IT solutions, and high-impact design to help companies grow.', 'انضم إلى فريق شغوف ينشط لتمكين الشركات والشركات الناشئة والمصدرين الإقليميين. نجمع بين التسويق الرقمي الإبداعي والحلول التقنية الميسرة والتصميم المتميز لمساعدة الأعمال على التوسع.'); ?>
</p>
<div class="flex flex-wrap gap-gutter mt-stack-lg">
<a class="bg-tertiary text-on-tertiary-fixed font-label-caps text-label-caps py-4 px-8 hover:bg-export-orange transition-all duration-300 flex items-center gap-2 group" href="#registry">
    <span><?php echo vitaldc_t('EXPLORE OPEN POSITIONS', 'استكشف الوظائف المتاحة'); ?></span>
    <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
</a>
<button class="border border-secondary text-secondary font-label-caps text-label-caps py-4 px-8 hover:bg-secondary/10 transition-all duration-300">
    <?php echo vitaldc_t('OUR STACK', 'نظامنا التقني'); ?>
</button>
</div>
</div>
</div>
<div class="absolute bottom-10 right-margin-desktop hidden lg:block">
<div class="border border-glass p-6 backdrop-blur-md bg-surface/30">
<div class="font-label-caps text-label-sm text-secondary mb-2">SYSTEM_STATUS</div>
<div class="flex gap-4">
<div class="flex flex-col">
<span class="text-on-surface-variant text-[10px]">UPTIME</span>
<span class="text-on-surface font-label-caps">99.998%</span>
</div>
<div class="w-px h-full bg-glass"></div>
<div class="flex flex-col">
<span class="text-on-surface-variant text-[10px]">THROUGHPUT</span>
<span class="text-on-surface font-label-caps">4.2 TB/S</span>
</div>
</div>
</div>
</div>
</section>
<!-- WHY VITALDC (WHITE) -->
<section class="bg-white py-section-gap relative overflow-hidden transition-all duration-1000 opacity-100">
<div class="absolute inset-0 bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:20px_20px] opacity-30"></div>
<div class="relative z-10 max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
<div class="lg:col-span-5 flex flex-col justify-center">
<span class="font-label-caps text-label-caps text-export-orange mb-stack-sm"><?php echo vitaldc_t('IDENTITY & MISSION', 'الهوية والمهام'); ?></span>
<h2 class="font-headline-lg text-headline-lg text-surface-deep mb-stack-md"><?php echo vitaldc_t('More Than Just Code.', 'أكثر من مجرد كود.'); ?></h2>
<p class="text-surface-variant font-body-lg mb-stack-lg">
    <?php echo vitaldc_t("At VitalDC, we solve the 'Friction Gap' for manufacturers. While others build interfaces, we build the bridges between heavy industry and global market liquidity.", "في فيتال دي سي، نحل 'فجوة الاحتكاك' للمصنعين. بينما يبني الآخرون واجهات، نبني نحن الجسور بين الصناعة الثقيلة والسيولة في السوق العالمية."); ?>
</p>
<div class="space-y-gutter">
<div class="flex gap-stack-md">
<div class="w-12 h-12 flex-shrink-0 bg-surface-deep text-tertiary flex items-center justify-center">
<span class="material-symbols-outlined">hub</span>
</div>
<div>
<h4 class="font-headline-md text-headline-md text-surface-deep text-lg"><?php echo vitaldc_t('Systemic Impact', 'تأثير منظومي'); ?></h4>
<p class="text-on-surface-variant text-sm mt-1"><?php echo vitaldc_t('Every line of code directly influences the export capacity of thousands of Egyptian small-to-medium enterprises.', 'كل سطر من الكود يؤثر بشكل مباشر على القدرة التصديرية لآلاف الشركات المصرية الصغيرة والمتوسطة.'); ?></p>
</div>
</div>
<div class="flex gap-stack-md">
<div class="w-12 h-12 flex-shrink-0 bg-surface-deep text-tertiary flex items-center justify-center">
<span class="material-symbols-outlined">security</span>
</div>
<div>
<h4 class="font-headline-md text-headline-md text-surface-deep text-lg"><?php echo vitaldc_t('Authority First', 'المصداقية أولاً'); ?></h4>
<p class="text-on-surface-variant text-sm mt-1"><?php echo vitaldc_t("We engineer trust. Our systems are the 'Gold Standard' for trade verification in the MENA region.", "نحن نبتكر الثقة. أنظمتنا هي 'المعيار الذهبي' للتحقق التجاري في منطقة الشرق الأوسط وشمال أفريقيا."); ?></p>
</div>
</div>
</div>
</div>
<div class="lg:col-span-7 grid grid-cols-2 gap-4">
<div class="h-96 w-full relative group">
<div class="absolute inset-0 bg-surface-deep opacity-10 group-hover:opacity-0 transition-opacity z-10"></div>
<img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700" data-alt="A sophisticated macro shot of fiber optic cables glowing with soft blue and amber light, representing high-speed digital infrastructure. The aesthetic is clean and corporate, emphasizing precision and global connectivity for trade." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBz8L6VGAbV57TYNgmefrf_ECrzO79F97kMDg1r9t8S64Qyg5xP_O1vnrUEJ1EekBDD3--8pig8SkihVPdSjkCFqaanDk-BkwX-vV6LZMaOUvBis-H6JZX69b5O01o_F68hMIy8i28NsNTz3MmTzlEelKfMU7s7b_h_O4hOq-OMffeniya_4qZ3MrK25rLgE5Poz70q74xuCRHQZmckZ68GqAuUQBYF-2gPgEMSvz-hEYZdndXaARgY">
<div class="absolute bottom-4 left-4 z-20">
<span class="bg-surface-deep text-white text-[10px] px-2 py-1 font-label-caps">IMG_REF:INFRA_01</span>
</div>
</div>
<div class="h-96 w-full mt-stack-lg relative group">
<div class="absolute inset-0 bg-surface-deep opacity-10 group-hover:opacity-0 transition-opacity z-10"></div>
<img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700" data-alt="A modern industrial shipyard at dusk with glowing amber lighting systems and high-tech cargo containers. The visual style is crisp and detailed, blending traditional trade symbols with futuristic digital monitoring tech." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAXvrL12dlZMZatXkWFYUik9-brvMl8v6OF-aYY0FT1TxzscYoEViwVmYp62_pOXFka3usNtysniWjX0D6DuBhHfbZdpgH5zg6AXfTtxO_oMHzYrfoJugBq9kqTYNHwCsuFRC_cRPgMq04QiYORivHJL1gk3xcHZuFjFLp_qC03HAIS190rL0aiaAbeQoa1vUsTxT9QUUHnRsyqdDH1AQFHLzKersBWCveNhUuYs_wF6Bs7FtgwcIC9">
<div class="absolute bottom-4 left-4 z-20">
<span class="bg-surface-deep text-white text-[10px] px-2 py-1 font-label-caps">IMG_REF:LOGISTICS_04</span>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- ENGINEERING CULTURE (DARK) -->
<section class="bg-surface-deep py-section-gap relative transition-all duration-1000 opacity-100">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<div class="text-center max-w-3xl mx-auto mb-20">
<span class="font-label-caps text-label-caps text-secondary mb-stack-sm block"><?php echo vitaldc_t('ENGINEERING ETHOS', 'فلسفة الهندسة'); ?></span>
<h2 class="font-headline-lg text-headline-lg text-on-surface"><?php echo vitaldc_t('Infrastructure Over Templates.', 'البنية التحتية فوق القوالب.'); ?></h2>
<div class="h-px w-24 bg-tertiary mx-auto mt-stack-md"></div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<!-- Card 1 -->
<div class="border border-glass bg-surface-container/50 p-8 hover:bg-surface-container transition-colors group">
<div class="font-label-caps text-secondary mb-6 text-sm">TECH_NODE_01</div>
<span class="material-symbols-outlined text-tertiary text-4xl mb-4 group-hover:scale-110 transition-transform">layers</span>
<h3 class="font-headline-md text-headline-md text-on-surface mb-4"><?php echo vitaldc_t('Custom Middleware', 'برمجيات وسيطة مخصصة'); ?></h3>
<p class="text-on-surface-variant text-sm leading-relaxed">
    <?php echo vitaldc_t("We don't rely on off-the-shelf solutions for critical bottlenecks. We engineer proprietary middleware that bridges legacy industrial ERPs with modern cloud protocols.", 'نحن لا نعتمد على الحلول الجاهزة للعقبات الحيوية. نحن نبتكر برمجيات وسيطة مخصصة تربط أنظمة ERP الصناعية القديمة ببروتوكولات السحابة الحديثة.'); ?>
</p>
</div>
<!-- Card 2 -->
<div class="border border-glass bg-surface-container/50 p-8 hover:bg-surface-container transition-colors group">
<div class="font-label-caps text-secondary mb-6 text-sm">TECH_NODE_02</div>
<span class="material-symbols-outlined text-tertiary text-4xl mb-4 group-hover:scale-110 transition-transform">memory</span>
<h3 class="font-headline-md text-headline-md text-on-surface mb-4"><?php echo vitaldc_t('Predictive AI', 'الذكاء الاصطناعي التنبؤي'); ?></h3>
<p class="text-on-surface-variant text-sm leading-relaxed">
    <?php echo vitaldc_t('Developing proprietary models for Export Intelligence. We predict market demand shifts and supply chain disruptions before they ripple through the system.', 'تطوير نماذج مخصصة لذكاء التصدير. نتنبأ بتحولات الطلب في السوق واضطرابات سلسلة التوريد قبل انتشارها في النظام.'); ?>
</p>
</div>
<!-- Card 3 -->
<div class="border border-glass bg-surface-container/50 p-8 hover:bg-surface-container transition-colors group">
<div class="font-label-caps text-secondary mb-6 text-sm">TECH_NODE_03</div>
<span class="material-symbols-outlined text-tertiary text-4xl mb-4 group-hover:scale-110 transition-transform">speed</span>
<h3 class="font-headline-md text-headline-md text-on-surface mb-4"><?php echo vitaldc_t('Performance', 'الأداء'); ?></h3>
<p class="text-on-surface-variant text-sm leading-relaxed">
    <?php echo vitaldc_t('Architecture optimized for sub-100ms global latency. When trade moves at the speed of light, our infrastructure leads the way.', 'هندسة محسنة للتأخير العالمي الأقل من 100 ميلي ثانية. عندما تتحرك التجارة بسرعة الضوء، تقود بنيتنا التحتية الطريق.'); ?>
</p>
</div>
</div>
<div class="mt-20 border-t border-glass pt-stack-lg">
<div class="grid grid-cols-2 md:grid-cols-4 gap-gutter text-center">
<div>
<div class="font-label-caps text-2xl text-on-surface">99.9%</div>
<div class="font-label-caps text-[10px] text-on-surface-variant">CODE_COVERAGE</div>
</div>
<div>
<div class="font-label-caps text-2xl text-on-surface">12ms</div>
<div class="font-label-caps text-[10px] text-on-surface-variant">API_LATENCY</div>
</div>
<div>
<div class="font-label-caps text-2xl text-on-surface">0</div>
<div class="font-label-caps text-[10px] text-on-surface-variant">LEGACY_DEBT</div>
</div>
<div>
<div class="font-label-caps text-2xl text-on-surface">RUST</div>
<div class="font-label-caps text-[10px] text-on-surface-variant">PRIMARY_STACK</div>
</div>
</div>
</div>
</div>
</section>
<!-- OPEN POSITIONS (WHITE) -->
<section class="bg-white py-section-gap transition-all duration-1000 opacity-100" id="registry">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<div class="flex flex-col md:flex-row justify-between items-end gap-stack-md mb-20">
<div>
<span class="font-label-caps text-label-caps text-export-orange mb-stack-sm block"><?php echo vitaldc_t('RECRUITMENT_REGISTRY', 'سجل التوظيف'); ?></span>
<h2 class="font-headline-lg text-headline-lg text-surface-deep"><?php echo vitaldc_t('Active Registry Entries', 'إدخالات السجل النشطة'); ?></h2>
</div>
<div class="flex items-center gap-2 border border-surface-deep/10 px-4 py-2">
<span class="font-label-caps text-label-sm text-surface-deep/60">FILTER: ALL_DISCIPLINES</span>
<span class="material-symbols-outlined text-sm">expand_more</span>
</div>
</div>
<div class="divide-y divide-surface-deep/10 border-t border-b border-surface-deep/10">
<!-- Role 1 -->
<div class="py-8 group cursor-pointer">
<div class="flex flex-col md:flex-row md:items-center justify-between gap-gutter">
<div class="flex gap-stack-md items-start">
<span class="font-label-caps text-xs text-export-orange mt-1">#001</span>
<div>
<h3 class="font-headline-md text-headline-md text-surface-deep group-hover:text-export-orange transition-colors"><?php echo vitaldc_t('Full-Stack Infrastructure Engineer', 'مهندس بنية تحتية Full-Stack'); ?></h3>
<div class="flex gap-4 mt-2">
<span class="font-label-caps text-[10px] px-2 py-1 bg-surface-deep text-white">CAIRO_NODE</span>
<span class="font-label-caps text-[10px] px-2 py-1 border border-surface-deep text-surface-deep">REMOTE_HYBRID</span>
</div>
</div>
</div>
<button class="bg-surface-deep text-white font-label-caps text-label-sm px-6 py-3 self-start md:self-center hover:bg-export-orange transition-colors"><?php echo vitaldc_t('INITIALIZE', 'بدء التقديم'); ?></button>
</div>
</div>
<!-- Role 2 -->
<div class="py-8 group cursor-pointer">
<div class="flex flex-col md:flex-row md:items-center justify-between gap-gutter">
<div class="flex gap-stack-md items-start">
<span class="font-label-caps text-xs text-export-orange mt-1">#002</span>
<div>
<h3 class="font-headline-md text-headline-md text-surface-deep group-hover:text-export-orange transition-colors"><?php echo vitaldc_t('AI/ML Specialist (Export Intelligence)', 'أخصائي ذكاء اصطناعي (ذكاء التصدير)'); ?></h3>
<div class="flex gap-4 mt-2">
<span class="font-label-caps text-[10px] px-2 py-1 bg-surface-deep text-white">CAIRO_NODE</span>
<span class="font-label-caps text-[10px] px-2 py-1 border border-surface-deep text-surface-deep">ONSITE</span>
</div>
</div>
</div>
<button class="bg-surface-deep text-white font-label-caps text-label-sm px-6 py-3 self-start md:self-center hover:bg-export-orange transition-colors"><?php echo vitaldc_t('INITIALIZE', 'بدء التقديم'); ?></button>
</div>
</div>
<!-- Role 3 -->
<div class="py-8 group cursor-pointer">
<div class="flex flex-col md:flex-row md:items-center justify-between gap-gutter">
<div class="flex gap-stack-md items-start">
<span class="font-label-caps text-xs text-export-orange mt-1">#003</span>
<div>
<h3 class="font-headline-md text-headline-md text-surface-deep group-hover:text-export-orange transition-colors"><?php echo vitaldc_t('Digital Strategy Lead', 'قائد الاستراتيجية الرقمية'); ?></h3>
<div class="flex gap-4 mt-2">
<span class="font-label-caps text-[10px] px-2 py-1 bg-surface-deep text-white">GLOBAL_NODE</span>
<span class="font-label-caps text-[10px] px-2 py-1 border border-surface-deep text-surface-deep">REMOTE</span>
</div>
</div>
</div>
<button class="bg-surface-deep text-white font-label-caps text-label-sm px-6 py-3 self-start md:self-center hover:bg-export-orange transition-colors"><?php echo vitaldc_t('INITIALIZE', 'بدء التقديم'); ?></button>
</div>
</div>
</div>
<div class="mt-stack-lg flex justify-between items-center text-on-surface-variant font-label-caps text-[10px]">
<span class="">TOTAL_RECORDS: 03</span>
<span class="">LAST_SYNC: 2024.11.21:14:30:00_UTC</span>
</div>
</div>
</section>
<!-- FINAL CTA (DARK) -->
<section class="bg-surface-deep py-32 relative overflow-hidden border-t border-glass transition-all duration-1000 opacity-100">

<div class="relative z-10 max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop text-center">
<div class="max-w-2xl mx-auto border border-glass p-margin-mobile md:p-margin-desktop backdrop-blur-xl bg-surface-deep/60">
<span class="font-label-caps text-label-caps text-tertiary mb-stack-sm block"><?php echo vitaldc_t('FINAL_PROTOCOL_STEP', 'خطوة البروتوكول النهائية'); ?></span>
<h2 class="font-display-lg text-headline-lg md:text-display-lg text-on-surface mb-stack-lg"><?php echo vitaldc_t('Initiate Your Application.', 'ابدأ طلب التقديم الخاص بك.'); ?></h2>
<p class="text-on-surface-variant font-body-lg mb-stack-lg">
    <?php echo vitaldc_t('Ready to engineer the authority of the future? Submit your credentials to the VitalDC protocol today.', 'هل أنت مستعد لابتكار سلطة المستقبل؟ قدم أوراق اعتمادك لبروتوكول فيتال دي سي اليوم.'); ?>
</p>
<div class="flex flex-col items-center gap-4">
<button class="w-full md:w-auto bg-tertiary text-on-tertiary-fixed font-label-caps text-label-caps py-5 px-12 hover:bg-export-orange transition-all scale-100 hover:scale-105 duration-300">
    <?php echo vitaldc_t('ACCESS APPLICATION PORTAL', 'الدخول إلى بوابة التقديم'); ?>
</button>
<span class="font-label-caps text-[10px] text-secondary tracking-widest uppercase">Encryption Active: AES-256 Verified</span>
</div>
</div>
</div>
</section>
<script>
        // Micro-interaction for role rows
        document.querySelectorAll('.registry-entry').forEach(entry => {
            entry.addEventListener('mouseenter', () => {
                // Potential for adding glitch effects or data-stream visuals
            });
        });

        // Simple scroll reveal logic
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('opacity-100');
                    entry.target.classList.remove('opacity-0', 'translate-y-10');
                }
            });
        }, observerOptions);

        document.querySelectorAll('section').forEach(section => {
            section.classList.add('transition-all', 'duration-1000', 'opacity-0', 'translate-y-10');
            observer.observe(section);
        });
    </script>
<?php get_footer(); ?>


</body></html>