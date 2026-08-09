<?php get_header(); ?>

<section class="relative min-h-screen flex flex-col justify-center overflow-hidden grid-mesh">
    <div class="relative z-10 max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop pt-32">
        <div class="inline-flex items-center gap-2 mb-8 px-3 py-1 glass-card rounded-full">
            <span class="w-2 h-2 rounded-full bg-export-yellow animate-pulse"></span>
            <span class="font-label-caps text-[10px] text-export-yellow tracking-widest uppercase"><?php echo vitaldc_t('Empowering Businesses Digitally', 'نُمكّن الأعمال رقمياً بثقة'); ?></span>
        </div>
        <h1 class=" text-on-surface font-display-lg text-[48px] md:text-display-lg max-w-4xl mb-stack-md leading-[1.1]">
            <span><?php echo vitaldc_t('BUILD YOUR DIGITAL PRESENCE & ', 'ابنِ حضورك الرقمي '); ?></span><span class="text-export-orange"><?php echo vitaldc_t('GROW YOUR BRAND.', 'وَنَمِّ عُلاَمَتَكَ التِّجَارِيَّةَ.'); ?></span>
        </h1>
        <p class="font-body-lg text-on-surface-variant max-w-2xl mb-stack-lg">
            <?php echo vitaldc_t('Your step-by-step partner for IT and modern marketing. We take you from zero online presence to a trusted, professional brand with complete guidance for non-tech teams.', 'شريكك خطوة بخطوة في التقنية والتسويق الحديث. ننقلك من الصفر على الإنترنت إلى علامة تجارية موثوقة واحترافية مع تقديم الدعم الكامل للفرق غير التقنية.'); ?>
        </p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter max-w-3xl mb-stack-lg">
            <div class="p-6 glass-card border-t-2 border-t-export-yellow">
                <div class="text-export-yellow font-display-lg text-headline-lg mb-1"><?php echo vitaldc_t('0 to 1', 'من 0 إلى 1'); ?></div>
                <div class="font-label-caps text-label-caps text-on-surface-variant"><?php echo vitaldc_t('Easy Onboarding', 'انطلاق سلس ومبسط'); ?></div>
            </div>
            <div class="p-6 glass-card border-t-2 border-t-export-orange">
                <div class="text-export-orange font-display-lg text-headline-lg mb-1">100%</div>
                <div class="font-label-caps text-label-caps text-on-surface-variant"><?php echo vitaldc_t('Full Support', 'دعم وإرشاد كامل'); ?></div>
            </div>
            <div class="p-6 glass-card border-t-2 border-t-export-yellow">
                <div class="text-export-yellow font-display-lg text-headline-lg mb-1"><?php echo vitaldc_t('Global', 'عالمي'); ?></div>
                <div class="font-label-caps text-label-caps text-on-surface-variant"><?php echo vitaldc_t('Market Reach', 'وصول للأسواق'); ?></div>
            </div>
        </div>
        <div class="flex flex-wrap gap-4">
            <a class="bg-export-orange text-white px-8 py-4 font-label-caps text-label-caps font-bold transition-all hover:scale-[1.02] shadow-[0_0_20px_rgba(251,133,0,0.3)]" href="/start"><?php echo vitaldc_t('Start Your Journey', 'ابدأ رحلتك الآن'); ?></a>
            <a class="border border-export-yellow text-export-yellow px-8 py-4 font-label-caps text-label-caps font-bold transition-all hover:bg-export-yellow/10" href="#methodology-section"><?php echo vitaldc_t('Explore Our Path', 'استكشف مسارنا'); ?></a>
        </div>
    </div>
</section>

<section class="py-section-gap bg-surface-deep border-y border-glass relative">
    <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 md:grid-cols-2 gap-stack-lg items-center">
        <div>
            <span class="font-label-caps text-export-orange text-label-caps tracking-[0.2em] uppercase mb-4 block"><?php echo vitaldc_t('The Reality Check', 'واقع الأمر'); ?></span>
            <h2 class="text-on-surface font-display-lg text-headline-lg mb-stack-md leading-tight">
                <span><?php echo vitaldc_t('MOST EXPORT COMPANIES ARE ', 'معظم شركات التصدير '); ?></span><span class="text-export-orange"><?php echo vitaldc_t('INVISIBLE', 'غير مرئية'); ?></span><span><?php echo vitaldc_t(' ONLINE.', ' على الإنترنت.'); ?></span>
            </h2>
            <p class="font-body-lg text-on-surface-variant mb-stack-lg max-w-md">
                <?php echo vitaldc_t("International buyers verify partners online first. If you don't have a professional website, you don't have their trust. We bridge the gap between your quality products and a professional presence.", 'يتحقق المشترون الدوليون من شركائهم عبر الإنترنت أولاً. بدون موقع احترافي، لن تكسب ثقتهم. نسد الفجوة بين جودة منتجاتك وحضورك المهني.'); ?>
            </p>
            <div class="space-y-stack-md">
                <div class="flex gap-6 group">
                    <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center border border-export-orange/30 bg-surface text-export-orange font-label-caps">01</div>
                    <div>
                        <h4 class="font-label-caps text-on-surface mb-1"><?php echo vitaldc_t('Missed Opportunities', 'فرص ضائعة'); ?></h4>
                        <p class="text-on-surface-variant text-body-md"><?php echo vitaldc_t('Global buyers are searching for Egyptian products right now but finding your competitors instead.', 'المشترون العالميون يبحثون عن منتجات مصرية الآن لكنهم يجدون منافسيك.'); ?></p>
                    </div>
                </div>
                <div class="flex gap-6 group">
                    <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center border border-export-yellow/30 bg-surface text-export-yellow font-label-caps">02</div>
                    <div>
                        <h4 class="font-label-caps text-on-surface mb-1"><?php echo vitaldc_t('Trust Deficit', 'عجز الثقة'); ?></h4>
                        <p class="text-on-surface-variant text-body-md"><?php echo vitaldc_t('A professional digital home is the modern prerequisite for international trade contracts.', 'المنزل الرقمي المهني هو المتطلب الحديث لعقود التجارة الدولية.'); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative">
            <div class="aspect-square glass-card p-1">
                <div class="w-full h-full bg-surface overflow-hidden relative">
                    <div class="absolute inset-0 grid-mesh opacity-30"></div>
                    <div class="w-full h-full bg-cover bg-center grayscale group-hover:grayscale-0 transition-all duration-700" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB7VMha2PeePG1WcwsLcyZT2eKab3Plx6huPgfKNtQ6m_g8q8gXwzFwNBHsn50MekPuFm9-3Mx_fpuRLXCrGqP5xuyVi3CrMk5fh1G-AdPQZYPK-pleF8a7Csi5a2bpChGLFBzFxrPjSCRGX1qLL1QYE0U4OHDEKRlALrLNW1nxh7JzSiP_DSmtnEN1gflT4tHYlc83TuTeuHz0teKzYUzsss6IFNhgz4mY8mpQv4zjMpYRu4IO5XG3')"></div>
                </div>
            </div>
            <div class="absolute -bottom-10 -left-10 glass-card p-6 hidden md:block border-l-4 border-l-export-orange">
                <div class="flex items-center gap-4">
                    <span class="material-symbols-outlined text-export-orange text-3xl" data-icon="visibility_off">visibility_off</span>
                    <div>
                        <div class="font-label-caps text-label-sm text-on-surface-variant"><?php echo vitaldc_t('CURRENT STATUS', 'الحالة الحالية'); ?></div>
                        <div class="font-headline-md text-headline-md text-export-orange"><?php echo vitaldc_t('INVISIBLE', 'غير مرئي'); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-section-gap relative bg-light-surface text-light-on-surface grid-mesh-light border-y border-light-border">
    <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
        <div class="flex flex-col md:flex-row justify-between items-end mb-stack-lg gap-6">
            <div>
                <span class="font-label-caps text-export-orange text-label-caps tracking-[0.2em] uppercase mb-4 block"><?php echo vitaldc_t('Your Launch Strategy', 'استراتيجية إطلاقك'); ?></span>
                <h2 class="font-headline-lg text-headline-lg max-w-xl text-light-on-surface"><?php echo vitaldc_t('THREE PHASES TO GLOBAL DOMINANCE', 'ثلاث مراحل للهيمنة العالمية'); ?></h2>
            </div>
            <div class="text-light-on-surface-variant font-label-caps text-label-sm border-l-2 border-export-yellow pl-6">
                <?php echo vitaldc_t('TARGET: FROM_ZERO_TO_EXPORT', 'الهدف: من_الصفر_إلى_التصدير'); ?>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
            <div class="md:col-span-8 group relative overflow-hidden bg-white p-8 border border-light-border transition-all hover:border-export-orange/30 hover:shadow-xl">
                <div class="flex justify-between items-start mb-12">
                    <span class="material-symbols-outlined text-export-orange text-5xl" data-icon="web">web</span>
                    <span class="font-label-caps text-light-on-surface-variant/20 text-headline-lg"><?php echo vitaldc_t('PHASE 01', 'المرحلة 01'); ?></span>
                </div>
                <h3 class="font-headline-md text-headline-md mb-4"><?php echo vitaldc_t('Professional Digital Home', 'منزل رقمي احترافي'); ?></h3>
                <p class="font-body-md text-light-on-surface-variant max-w-lg"><?php echo vitaldc_t('We build your first world-class website optimized for international B2B conversion. Fast, secure, and designed to establish instant authority in your industry.', 'نبني موقعك العالمي الأول المحسّن للتحويل B2B الدولي. سريع وآمن ومصمم لبناء السلطة الفورية في مجالك.'); ?></p>
                <div class="mt-8 opacity-0 group-hover:opacity-100 transition-opacity flex gap-4">
                    <span class="text-export-orange font-label-caps text-[10px]"><?php echo vitaldc_t('#BESPOKE_DESIGN', '#تصميم_مخصص'); ?></span>
                    <span class="text-export-orange font-label-caps text-[10px]"><?php echo vitaldc_t('#MOBILE_OPTIMIZED', '#محسّن_للجوال'); ?></span>
                    <span class="text-export-orange font-label-caps text-[10px]"><?php echo vitaldc_t('#B2B_TRUST', '#ثقة_B2B'); ?></span>
                </div>
            </div>
            <div class="md:col-span-4 bg-white p-8 border border-light-border transition-all hover:border-export-yellow/30 hover:shadow-xl">
                <div class="flex justify-between items-start mb-12">
                    <span class="material-symbols-outlined text-export-yellow text-5xl" data-icon="ads_click">ads_click</span>
                    <span class="font-label-caps text-light-on-surface-variant/20 text-headline-lg"><?php echo vitaldc_t('PHASE 02', 'المرحلة 02'); ?></span>
                </div>
                <h3 class="font-headline-md text-headline-md mb-4"><?php echo vitaldc_t('Modern Marketing', 'التسويق الحديث'); ?></h3>
                <p class="font-body-md text-light-on-surface-variant"><?php echo vitaldc_t('Precision LinkedIn and Google Search campaigns that put your brand in front of high-intent buyers in the GCC, Europe, and beyond.', 'حملات LinkedIn وGoogle Search دقيقة تضع علامتك أمام مشترين ذوي نية عالية في الخليج وأوروبا وخارجها.'); ?></p>
            </div>
            <div class="md:col-span-12 bg-white p-8 border border-light-border transition-all hover:border-export-orange/30 hover:shadow-xl flex flex-col md:flex-row gap-8 items-center">
                <div class="flex-1">
                    <div class="flex justify-between items-start mb-12">
                        <span class="material-symbols-outlined text-export-orange text-5xl" data-icon="auto_awesome">auto_awesome</span>
                        <span class="font-label-caps text-light-on-surface-variant/20 text-headline-lg"><?php echo vitaldc_t('PHASE 03', 'المرحلة 03'); ?></span>
                    </div>
                    <h3 class="font-headline-md text-headline-md mb-4"><?php echo vitaldc_t('Automated Growth', 'نمو آلي'); ?></h3>
                    <p class="font-body-md text-light-on-surface-variant"><?php echo vitaldc_t('Smart AI layers that handle incoming inquiries, lead qualification, and CRM updates, so you can focus on shipping products.', 'طبقات ذكاء اصطناعي تتولى الاستفسارات وتأهيل العملاء وتحديث CRM لتتفرغ لشحن منتجاتك.'); ?></p>
                </div>
                <div class="w-full md:w-80 h-48 bg-light-surface border border-light-border p-4 overflow-hidden relative">
                    <div class="font-label-caps text-[10px] text-export-orange mb-2"><?php echo vitaldc_t('LAUNCH_SEQUENCE_ACTIVE', 'تسلسل_الإطلاق_نشط'); ?></div>
                    <div class="space-y-1 font-label-caps text-[9px] text-light-on-surface-variant">
                        <div class="flex justify-between"><span><?php echo vitaldc_t('DESIGN_SYSTEM:', 'نظام_التصميم:'); ?></span> <span class="text-export-orange font-bold"><?php echo vitaldc_t('READY', 'جاهز'); ?></span></div>
                        <div class="flex justify-between"><span><?php echo vitaldc_t('DOMAIN_ACTIVATE:', 'تفعيل_النطاق:'); ?></span> <span class="text-export-orange font-bold"><?php echo vitaldc_t('LIVE', 'مباشر'); ?></span></div>
                        <div class="flex justify-between"><span><?php echo vitaldc_t('GOOGLE_INDEX:', 'فهرسة_جوجل:'); ?></span> <span class="text-export-orange font-bold"><?php echo vitaldc_t('SUCCESS', 'نجاح'); ?></span></div>
                        <div class="mt-4 h-1 w-full bg-export-orange/10 rounded-full overflow-hidden">
                            <div class="h-full bg-export-orange w-[85%]"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="methodology-section" class="py-section-gap bg-surface-deep relative grid-mesh overflow-hidden">
    <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
        <div class="mb-stack-lg border-l-4 border-export-yellow pl-8">
            <span class="font-label-caps text-export-yellow text-label-caps tracking-[0.2em] uppercase mb-2 block"><?php echo vitaldc_t('Methodology', 'المنهجية'); ?></span>
            <h2 class="font-display-lg text-headline-lg"><?php echo vitaldc_t('THE PATH TO LAUNCH', 'مسار الإطلاق'); ?></h2>
            <p class="font-body-md text-on-surface-variant"><?php echo vitaldc_t('Our proven roadmap from local manufacturing to global digital leadership.', 'خارطة طريقنا المثبتة من التصنيع المحلي إلى القيادة الرقمية العالمية.'); ?></p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="p-6 glass-card border-l-2 border-l-export-yellow/30">
                <div class="font-label-caps text-export-yellow text-headline-md mb-2">01</div>
                <h4 class="font-label-caps text-on-surface mb-2"><?php echo vitaldc_t('Discovery', 'الاستكشاف'); ?></h4>
                <p class="text-on-surface-variant text-label-sm"><?php echo vitaldc_t('Analyzing your products and identifying high-demand global markets.', 'تحليل منتجاتك وتحديد الأسواق العالمية عالية الطلب.'); ?></p>
            </div>
            <div class="p-6 glass-card border-l-2 border-l-export-orange/30">
                <div class="font-label-caps text-export-orange text-headline-md mb-2">02</div>
                <h4 class="font-label-caps text-on-surface mb-2"><?php echo vitaldc_t('Branding', 'الهوية'); ?></h4>
                <p class="text-on-surface-variant text-label-sm"><?php echo vitaldc_t('Crafting a digital identity that speaks to international standards.', 'صياغة هوية رقمية تلبي المعايير الدولية.'); ?></p>
            </div>
            <div class="p-6 glass-card border-l-2 border-l-export-yellow/30">
                <div class="font-label-caps text-export-yellow text-headline-md mb-2">03</div>
                <h4 class="font-label-caps text-on-surface mb-2"><?php echo vitaldc_t('Building', 'البناء'); ?></h4>
                <p class="text-on-surface-variant text-label-sm"><?php echo vitaldc_t('Engineering your high-performance Global Launchpad.', 'هندسة منصة الإطلاق العالمية عالية الأداء.'); ?></p>
            </div>
            <div class="p-6 glass-card border-l-2 border-l-export-orange/30">
                <div class="font-label-caps text-export-orange text-headline-md mb-2">04</div>
                <h4 class="font-label-caps text-on-surface mb-2"><?php echo vitaldc_t('Validation', 'التحقق'); ?></h4>
                <p class="text-on-surface-variant text-label-sm"><?php echo vitaldc_t('Rigorous testing for speed, security, and global accessibility.', 'اختبار صارم للسرعة والأمان وإمكانية الوصول العالمية.'); ?></p>
            </div>
            <div class="p-6 glass-card border-l-2 border-l-export-yellow/30">
                <div class="font-label-caps text-export-yellow text-headline-md mb-2">05</div>
                <h4 class="font-label-caps text-on-surface mb-2"><?php echo vitaldc_t('Go-Live', 'الإطلاق'); ?></h4>
                <p class="text-on-surface-variant text-label-sm"><?php echo vitaldc_t('Deploying your presence to global edge servers for instant loading.', 'نشر حضورك على خوادم edge عالمية للتحميل الفوري.'); ?></p>
            </div>
            <div class="p-6 glass-card border-l-2 border-l-export-orange/30">
                <div class="font-label-caps text-export-orange text-headline-md mb-2">06</div>
                <h4 class="font-label-caps text-on-surface mb-2"><?php echo vitaldc_t('Marketing', 'التسويق'); ?></h4>
                <p class="text-on-surface-variant text-label-sm"><?php echo vitaldc_t('Activating digital ad funnels to attract B2B inquiries.', 'تفعيل قنوات إعلانية رقمية لجذب استفسارات B2B.'); ?></p>
            </div>
            <div class="p-6 glass-card border-l-2 border-l-export-yellow/30 col-span-1 lg:col-span-2 bg-export-orange/10">
                <div class="font-label-caps text-export-yellow text-headline-md mb-2">07</div>
                <h4 class="font-label-caps text-on-surface mb-2"><?php echo vitaldc_t('Global Scale', 'التوسع العالمي'); ?></h4>
                <p class="text-on-surface-variant text-label-sm"><?php echo vitaldc_t('Expanding your reach and automating lead capture for 24/7 growth.', 'توسيع نطاق وصولك وأتمتة التقاط العملاء على مدار الساعة.'); ?></p>
            </div>
        </div>
    </div>
</section>

<section class="py-section-gap bg-light-surface text-light-on-surface relative">
    <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
        <div class="flex flex-col md:flex-row gap-stack-lg items-center">
            <div class="flex-1">
                <span class="font-label-caps text-export-orange text-label-caps tracking-[0.2em] uppercase mb-4 block"><?php echo vitaldc_t('Quality First', 'الجودة أولاً'); ?></span>
                <h2 class="font-display-lg text-headline-lg text-light-on-surface mb-stack-md"><?php echo vitaldc_t('BUILT BEYOND TEMPLATES', 'مبني يتجاوز القوالب'); ?></h2>
                <p class="font-body-lg text-light-on-surface-variant mb-stack-md">
                    <?php echo vitaldc_t("Even as your first website, we don't settle for templates. We build bespoke engines that grow with your business. No technical debt. No limitations. Just pure performance.", 'حتى كموقعك الأول، لا نرضى بالقوالب. نبني محركات مخصصة تنمو مع عملك. بدون ديون تقنية. بدون قيود. أداء خالص فقط.'); ?>
                </p>
                <ul class="space-y-4 mb-stack-lg">
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-export-orange" data-icon="verified">verified</span>
                        <span class="font-body-md font-medium"><?php echo vitaldc_t('99+ Google Lighthouse Speed Scores', '+99 درجة سرعة Google Lighthouse'); ?></span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-export-orange" data-icon="verified">verified</span>
                        <span class="font-body-md font-medium"><?php echo vitaldc_t('Enterprise-Grade Security Foundations', 'أساسات أمان بمستوى المؤسسات'); ?></span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-export-orange" data-icon="verified">verified</span>
                        <span class="font-body-md font-medium"><?php echo vitaldc_t('100% Full Intellectual Property Rights', '100% حقوق ملكية فكرية كاملة'); ?></span>
                    </li>
                </ul>
            </div>
            <div class="flex-1 w-full bg-white border border-light-border p-8 shadow-2xl relative overflow-hidden">
                <div class="font-label-caps text-[11px] text-light-on-surface-variant/30 mb-4"><?php echo vitaldc_t('SYSTEM_BENCHMARK_V1.0', 'معيار_النظام_V1.0'); ?></div>
                <div class="space-y-6">
                    <div>
                        <div class="flex justify-between font-label-caps text-[10px] mb-2"><span><?php echo vitaldc_t('BASIC TEMPLATE', 'قالب أساسي'); ?></span> <span class="text-error">31/100</span></div>
                        <div class="h-2 bg-light-surface rounded-full overflow-hidden">
                            <div class="h-full bg-error w-[31%]"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between font-label-caps text-[10px] mb-2"><span><?php echo vitaldc_t('VITALDC GLOBAL ENGINE', 'محرك VitalDC العالمي'); ?></span> <span class="text-export-orange font-bold">99/100</span></div>
                        <div class="h-2 bg-light-surface rounded-full overflow-hidden">
                            <div class="h-full bg-export-orange w-[99%]"></div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 pt-8 border-t border-light-border text-center">
                    <p class="font-label-caps text-[12px] text-light-on-surface-variant italic"><?php echo vitaldc_t('"A professional foundation is not a luxury; it\'s your entry ticket to global trade."', '"الأساس المهني ليس رفاهية؛ إنه تذكرتك للدخول إلى التجارة العالمية."'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-section-gap overflow-hidden relative bg-white text-light-on-surface border-t border-light-border">
    <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop relative z-10 text-center">
        <div class="glow-line mb-16"></div>
        <h2 class="font-display-lg text-display-lg mb-stack-md tracking-tighter text-light-on-surface"><?php echo vitaldc_t('READY TO GO GLOBAL?', 'مستعد للانطلاق عالمياً؟'); ?></h2>
        <p class="font-body-lg text-light-on-surface-variant max-w-2xl mx-auto mb-stack-lg">
            <?php echo vitaldc_t('Join the digital elite. Launch your professional global presence today and start capturing the international demand your business deserves.', 'انضم إلى النخبة الرقمية. أطلق حضورك العالمي الاحترافي اليوم وابدأ في استقطاب الطلب الدولي الذي يستحقه عملك.'); ?>
        </p>
        <div class="flex justify-center">
            <a href="/start" class="bg-export-orange text-white px-12 py-5 font-label-caps text-headline-md font-bold transition-all hover:scale-105 hover:bg-export-orange/90 active:opacity-80 shadow-[0_10px_40px_rgba(251,133,0,0.4)]">
                <?php echo vitaldc_t('Initiate My Launch', 'ابدأ إطلاقي'); ?>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
