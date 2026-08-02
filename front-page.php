<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>VitalDC | Digital Infrastructure for Egyptian Exporters</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700&amp;family=Inter:wght@400;500&amp;family=JetBrains+Mono:wght@400;500&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&amp;family=Inter:wght@100..900&amp;family=JetBrains+Mono:wght@100..900&amp;display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }
        .glass-card {
            background: rgba(1, 27, 41, 0.6);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(142, 202, 230, 0.15);
        }
        .light-glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(0, 31, 42, 0.1);
        }
        .grid-mesh {
            background-image: 
                linear-gradient(to right, rgba(142, 202, 230, 0.05) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(142, 202, 230, 0.05) 1px, transparent 1px);
            background-size: 40px 40px;
        }
        .grid-mesh-light {
            background-image: 
                linear-gradient(to right, rgba(0, 31, 42, 0.05) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(0, 31, 42, 0.05) 1px, transparent 1px);
            background-size: 40px 40px;
        }
        .glow-line {
            height: 1px;
            background: linear-gradient(90deg, transparent, #219EBC, transparent);
        }
        .glow-line-dark {
            height: 1px;
            background: linear-gradient(90deg, transparent, #023047, transparent);
        }
        @keyframes pulse-slow {
            0%, 100% { opacity: 0.3; }
            50% { opacity: 0.6; }
        }
        .animate-pulse-slow {
            animation: pulse-slow 4s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
    </style>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "tertiary-fixed": "#ffdea9",
                      "border-glass": "rgba(142, 202, 230, 0.15)",
                      "on-tertiary-container": "#c18a00",
                      "on-tertiary-fixed": "#271900",
                      "surface-container": "#00232f",
                      "on-primary-fixed-variant": "#254a63",
                      "on-secondary-fixed-variant": "#004e5f",
                      "on-tertiary": "#422c00",
                      "surface-container-low": "#001f2a",
                      "primary": "#a6cbe8",
                      "surface-bright": "#003e52",
                      "outline-variant": "#42474d",
                      "error-container": "#93000a",
                      "on-primary-container": "#7498b4",
                      "surface-container-lowest": "#001018",
                      "secondary": "#69d4f4",
                      "on-secondary-container": "#002e39",
                      "surface": "#00161f",
                      "inverse-on-surface": "#003546",
                      "secondary-container": "#209dbb",
                      "on-surface": "#bde9ff",
                      "on-error": "#690005",
                      "on-tertiary-fixed-variant": "#5e4100",
                      "primary-fixed": "#c8e6ff",
                      "on-error-container": "#ffdad6",
                      "error": "#ffb4ab",
                      "surface-variant": "#003a4c",
                      "tertiary": "#ffba27",
                      "on-secondary": "#003642",
                      "export-orange": "#FB8500",
                      "surface-dim": "#00161f",
                      "inverse-primary": "#3e627b",
                      "on-secondary-fixed": "#001f27",
                      "primary-container": "#023047",
                      "on-primary-fixed": "#001e2f",
                      "surface-deep": "#011B29",
                      "on-surface-variant": "#c2c7cd",
                      "tertiary-fixed-dim": "#ffba27",
                      "secondary-fixed": "#b2ebff",
                      "surface-container-highest": "#003a4c",
                      "tertiary-container": "#3d2900",
                      "on-primary": "#07344b",
                      "surface-container-high": "#002e3d",
                      "outline": "#8c9197",
                      "background": "#00161f",
                      "secondary-fixed-dim": "#69d4f4",
                      "on-background": "#bde9ff",
                      "surface-tint": "#a6cbe8",
                      "inverse-surface": "#bde9ff",
                      "primary-fixed-dim": "#a6cbe8",
                      "light-surface": "#F5F9FC",
                      "light-on-surface": "#001F2A",
                      "light-on-surface-variant": "#42474D",
                      "light-border": "rgba(0, 31, 42, 0.1)"
              },
              "borderRadius": {
                      "DEFAULT": "0.125rem",
                      "lg": "0.25rem",
                      "xl": "0.5rem",
                      "full": "0.75rem"
              },
              "spacing": {
                      "container-max": "1280px",
                      "section-gap": "120px",
                      "margin-mobile": "16px",
                      "stack-lg": "48px",
                      "margin-desktop": "64px",
                      "stack-sm": "8px",
                      "stack-md": "24px",
                      "gutter": "24px"
              },
              "fontFamily": {
                      "display-lg": ["Geist"],
                      "headline-lg": ["Geist"],
                      "headline-md": ["Geist"],
                      "label-caps": ["JetBrains Mono"],
                      "body-lg": ["Inter"],
                      "body-md": ["Inter"],
                      "label-sm": ["Inter"]
              }
            }
          }
        }
    </script>
</head>
<body class="bg-background text-on-surface selection:bg-secondary/30">
<!-- TOP NAVIGATION BAR -->
<nav class="fixed top-0 w-full z-50 bg-surface/80 backdrop-blur-xl border-b border-glass flex justify-between items-center px-margin-mobile md:px-margin-desktop py-4 max-w-full">
<div class="flex items-center gap-stack-lg">
<span class="font-display-lg text-headline-md font-bold tracking-tighter text-on-surface">VitalDC</span>
<div class="hidden md:flex gap-6 items-center">
<a class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary transition-colors duration-300" href="#">Digital Assets</a>
<a class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary transition-colors duration-300" href="#">Marketing</a>
<a class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary transition-colors duration-300" href="#">Automation &amp; AI</a>
<a class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary transition-colors duration-300" href="#">Protocol</a>
<a class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary transition-colors duration-300" href="#">Careers</a>
</div>
</div>
<div class="flex items-center gap-4">
<span class="hidden md:inline font-label-caps text-label-caps text-on-surface-variant cursor-pointer">EN/AR</span>
<button class="bg-tertiary text-on-tertiary px-6 py-2 font-label-caps text-label-caps font-bold transition-all hover:brightness-110 active:opacity-80">Start Project</button>
</div>
</nav>
<main class="relative">
<!-- HERO SECTION: DARK -->
<section class="relative min-h-screen flex flex-col justify-center overflow-hidden grid-mesh">
<div class="relative z-10 max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop pt-32">
<div class="inline-flex items-center gap-2 mb-8 px-3 py-1 glass-card rounded-full">
<span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
<span class="font-label-caps text-[10px] text-secondary tracking-widest uppercase">System Status: Operational</span>
</div>
<h1 class="font-display-lg text-[48px] md:text-display-lg max-w-4xl mb-stack-md">
                    DIGITAL INFRASTRUCTURE FOR EGYPTIAN EXPORTERS
                </h1>
<p class="font-body-lg text-on-surface-variant max-w-2xl mb-stack-lg">
                    Build Faster. Scale Smarter. We provide the foundational technology layers that empower Egyptian businesses to dominate global markets through high-performance digital architecture.
                </p>
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter max-w-3xl mb-stack-lg">
<div class="p-6 glass-card">
<div class="text-secondary font-display-lg text-headline-lg mb-1">99.9%</div>
<div class="font-label-caps text-label-caps text-on-surface-variant">Uptime Commitment</div>
</div>
<div class="p-6 glass-card">
<div class="text-secondary font-display-lg text-headline-lg mb-1">250ms</div>
<div class="font-label-caps text-label-caps text-on-surface-variant">Edge Latency</div>
</div>
<div class="p-6 glass-card">
<div class="text-secondary font-display-lg text-headline-lg mb-1">15+</div>
<div class="font-label-caps text-label-caps text-on-surface-variant">Core Tech Stacks</div>
</div>
</div>
<div class="flex flex-wrap gap-4">
<button class="bg-tertiary text-on-tertiary px-8 py-4 font-label-caps text-label-caps font-bold transition-all hover:scale-[1.02]">Initialize Growth</button>
<button class="border border-secondary text-secondary px-8 py-4 font-label-caps text-label-caps font-bold transition-all hover:bg-secondary/10">View Capabilities</button>
</div>
</div>
</section>
<!-- SERVICES SECTION: LIGHT -->
<section class="py-section-gap relative bg-light-surface text-light-on-surface grid-mesh-light border-y border-light-border">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<div class="flex flex-col md:flex-row justify-between items-end mb-stack-lg gap-6">
<div>
<span class="font-label-caps text-primary-container text-label-caps tracking-[0.2em] uppercase mb-4 block">Core Infrastructure</span>
<h2 class="font-headline-lg text-headline-lg max-w-xl text-light-on-surface">SERVICES DESIGNED FOR GLOBAL SCALE</h2>
</div>
<div class="text-light-on-surface-variant font-label-caps text-label-sm border-l border-light-border pl-6">
                        ROOT_DIRECTORY: /VITALDC/SERVICES
                    </div>
</div>
<div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
<!-- SRVC_01 -->
<div class="md:col-span-8 group relative overflow-hidden bg-white p-8 border border-light-border transition-all hover:border-primary-container/30 hover:shadow-xl">
<div class="flex justify-between items-start mb-12">
<span class="material-symbols-outlined text-primary-container text-4xl" data-icon="terminal">terminal</span>
<span class="font-label-caps text-light-on-surface-variant/20 text-headline-lg">01</span>
</div>
<h3 class="font-headline-md text-headline-md mb-4">Enterprise Architecture</h3>
<p class="font-body-md text-light-on-surface-variant max-w-lg">Custom-built digital foundations optimized for Egyptian manufacturing and export logic. We don't just build sites; we deploy systems.</p>
<div class="mt-8 opacity-0 group-hover:opacity-100 transition-opacity flex gap-4">
<span class="text-primary-container font-label-caps text-[10px]">#REACT</span>
<span class="text-primary-container font-label-caps text-[10px]">#NEXTJS</span>
<span class="text-primary-container font-label-caps text-[10px]">#AWS</span>
</div>
</div>
<!-- SRVC_02 -->
<div class="md:col-span-4 bg-white p-8 border border-light-border transition-all hover:border-primary-container/30 hover:shadow-xl">
<div class="flex justify-between items-start mb-12">
<span class="material-symbols-outlined text-primary-container text-4xl" data-icon="hub">hub</span>
<span class="font-label-caps text-light-on-surface-variant/20 text-headline-lg">02</span>
</div>
<h3 class="font-headline-md text-headline-md mb-4">Global Trade Hubs</h3>
<p class="font-body-md text-light-on-surface-variant">Omnichannel platforms that bridge the gap between local production and international buyers.</p>
</div>
<!-- SRVC_03 -->
<div class="md:col-span-4 bg-white p-8 border border-light-border transition-all hover:border-primary-container/30 hover:shadow-xl">
<div class="flex justify-between items-start mb-12">
<span class="material-symbols-outlined text-primary-container text-4xl" data-icon="shopping_cart">shopping_cart</span>
<span class="font-label-caps text-light-on-surface-variant/20 text-headline-lg">03</span>
</div>
<h3 class="font-headline-md text-headline-md mb-4">E-Export Engines</h3>
<p class="font-body-md text-light-on-surface-variant">High-conversion B2B marketplaces designed for the specific complexities of international shipping.</p>
</div>
<!-- SRVC_04 -->
<div class="md:col-span-8 bg-white p-8 border border-light-border transition-all hover:border-primary-container/30 hover:shadow-xl flex flex-col md:flex-row gap-8 items-center">
<div class="flex-1">
<div class="flex justify-between items-start mb-12">
<span class="material-symbols-outlined text-primary-container text-4xl" data-icon="developer_board">developer_board</span>
<span class="font-label-caps text-light-on-surface-variant/20 text-headline-lg">04</span>
</div>
<h3 class="font-headline-md text-headline-md mb-4">Market Automation &amp; AI</h3>
<p class="font-body-md text-light-on-surface-variant">Predictive analytics and automated marketing pipelines that find your customers before they find you.</p>
</div>
<div class="w-full md:w-64 h-48 bg-light-surface border border-light-border p-4 overflow-hidden">
<div class="font-label-caps text-[10px] text-primary-container/50 mb-2">LIVE_DEPLOYMENT_STREAM</div>
<div class="space-y-1 font-label-caps text-[9px] text-primary-container/60">
<div class="flex justify-between"><span>BUILD_SEQ:</span> <span class="text-primary-container font-bold">OK</span></div>
<div class="flex justify-between"><span>CDN_PURGE:</span> <span class="text-primary-container font-bold">COMPLETE</span></div>
<div class="flex justify-between"><span>SSL_CERT:</span> <span class="text-primary-container font-bold">VALID</span></div>
<div class="mt-4 h-1 w-full bg-primary-container/10 rounded-full overflow-hidden">
<div class="h-full bg-primary-container w-2/3"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- MARKETING & ADS SECTION: DARK -->
<section class="py-section-gap bg-surface-dim relative overflow-hidden grid-mesh">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<div class="grid grid-cols-1 md:grid-cols-2 gap-stack-lg items-center">
<div>
<span class="font-label-caps text-secondary text-label-caps tracking-[0.2em] uppercase mb-4 block">Demand Generation</span>
<h2 class="font-display-lg text-headline-lg mb-stack-md leading-tight">GLOBAL REACH VIA <span class="text-primary">PRECISION ADS</span></h2>
<p class="font-body-lg text-on-surface-variant mb-stack-lg max-w-md">
                            Don't wait for the world to find you. Our surgical advertising protocols target high-intent B2B buyers across LinkedIn, Google Search, and industry networks.
                        </p>
<div class="space-y-6">
<div class="flex items-center gap-4 p-4 glass-card group hover:bg-secondary/5 transition-colors">
<span class="material-symbols-outlined text-secondary text-3xl" data-icon="ads_click">ads_click</span>
<div>
<h4 class="font-label-caps text-on-surface">Targeted LinkedIn Funnels</h4>
<p class="text-on-surface-variant text-label-sm">Reaching Decision Makers in GCC &amp; Europe markets.</p>
</div>
</div>
<div class="flex items-center gap-4 p-4 glass-card group hover:bg-secondary/5 transition-colors">
<span class="material-symbols-outlined text-secondary text-3xl" data-icon="troubleshoot">troubleshoot</span>
<div>
<h4 class="font-label-caps text-on-surface">Search Intent Architecture</h4>
<p class="text-on-surface-variant text-label-sm">Capturing 100% of relevant global search volume.</p>
</div>
</div>
</div>
</div>
<div class="grid grid-cols-2 gap-4">
<div class="bg-surface-container p-8 border border-glass flex flex-col items-center text-center">
<div class="text-primary font-display-lg text-headline-lg mb-2">4.2x</div>
<div class="font-label-caps text-[10px] text-on-surface-variant uppercase tracking-widest">Average ROAS</div>
</div>
<div class="bg-surface-container p-8 border border-glass flex flex-col items-center text-center mt-12">
<div class="text-primary font-display-lg text-headline-lg mb-2">&lt; $12</div>
<div class="font-label-caps text-[10px] text-on-surface-variant uppercase tracking-widest">CPA Benchmark</div>
</div>
<div class="bg-surface-container p-8 border border-glass flex flex-col items-center text-center -mt-6">
<div class="text-primary font-display-lg text-headline-lg mb-2">85%</div>
<div class="font-label-caps text-[10px] text-on-surface-variant uppercase tracking-widest">Lead Qualification</div>
</div>
<div class="bg-surface-container p-8 border border-glass flex flex-col items-center text-center mt-6">
<div class="text-primary font-display-lg text-headline-lg mb-2">24/7</div>
<div class="font-label-caps text-[10px] text-on-surface-variant uppercase tracking-widest">Optimized Bidding</div>
</div>
</div>
</div>
</div>
</section>
<!-- AUTOMATION & AI SOLUTIONS: LIGHT -->
<section class="py-section-gap bg-white text-light-on-surface grid-mesh-light border-y border-light-border">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<div class="text-center mb-stack-lg">
<span class="font-label-caps text-primary-container text-label-caps tracking-[0.2em] uppercase mb-4 block">Operational Efficiency</span>
<h2 class="font-display-lg text-display-lg text-light-on-surface mb-stack-md">AUTONOMOUS GROWTH</h2>
<p class="font-body-lg text-light-on-surface-variant max-w-2xl mx-auto">
                        Automate the friction out of your sales cycle. Our AI layers handle lead scoring, CRM workflows, and predictive analytics so your team focuses on closing.
                    </p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<div class="p-8 bg-light-surface border border-light-border group hover:bg-primary-container/5 transition-all">
<div class="w-12 h-12 bg-primary-container text-white flex items-center justify-center mb-6">
<span class="material-symbols-outlined" data-icon="psychology">psychology</span>
</div>
<h3 class="font-headline-md text-headline-md mb-4">AI Lead Scoring</h3>
<p class="font-body-md text-light-on-surface-variant">Automatically rank and route incoming export inquiries based on company size, region, and intent signals.</p>
</div>
<div class="p-8 bg-light-surface border border-light-border group hover:bg-primary-container/5 transition-all">
<div class="w-12 h-12 bg-primary-container text-white flex items-center justify-center mb-6">
<span class="material-symbols-outlined" data-icon="settings_suggest">settings_suggest</span>
</div>
<h3 class="font-headline-md text-headline-md mb-4">CRM Automation</h3>
<p class="font-body-md text-light-on-surface-variant">Zero-touch data entry. Synchronize your digital storefront with your internal ERP and CRM pipelines instantly.</p>
</div>
<div class="p-8 bg-light-surface border border-light-border group hover:bg-primary-container/5 transition-all">
<div class="w-12 h-12 bg-primary-container text-white flex items-center justify-center mb-6">
<span class="material-symbols-outlined" data-icon="query_stats">query_stats</span>
</div>
<h3 class="font-headline-md text-headline-md mb-4">Predictive Analytics</h3>
<p class="font-body-md text-light-on-surface-variant">Forecast global demand spikes for specific product lines using our proprietary market-sensing engine.</p>
</div>
</div>
</div>
</section>
<!-- THE 7-STEP PROTOCOL: DARK -->
<section class="py-section-gap bg-surface-deep relative grid-mesh overflow-hidden">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<div class="mb-stack-lg border-l-4 border-secondary pl-8">
<span class="font-label-caps text-secondary text-label-caps tracking-[0.2em] uppercase mb-2 block">Methodology</span>
<h2 class="font-display-lg text-headline-lg">THE 7-STEP PROTOCOL</h2>
<p class="font-body-md text-on-surface-variant">Our immutable pathway from local concept to global dominance.</p>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
<div class="p-6 glass-card border-l-2 border-l-secondary/30">
<div class="font-label-caps text-secondary text-headline-md mb-2">01</div>
<h4 class="font-label-caps text-on-surface mb-2">Inspection</h4>
<p class="text-on-surface-variant text-label-sm">Deep audit of existing tech debt and market potential.</p>
</div>
<div class="p-6 glass-card border-l-2 border-l-secondary/30">
<div class="font-label-caps text-secondary text-headline-md mb-2">02</div>
<h4 class="font-label-caps text-on-surface mb-2">Architecture</h4>
<p class="text-on-surface-variant text-label-sm">Mapping the data flow and system requirements.</p>
</div>
<div class="p-6 glass-card border-l-2 border-l-secondary/30">
<div class="font-label-caps text-secondary text-headline-md mb-2">03</div>
<h4 class="font-label-caps text-on-surface mb-2">Engineering</h4>
<h4 class="font-label-caps text-on-surface mb-2">Engineering</h4>
<p class="text-on-surface-variant text-label-sm">Clean-slate code development and system build.</p>
</div>
<div class="p-6 glass-card border-l-2 border-l-secondary/30">
<div class="font-label-caps text-secondary text-headline-md mb-2">04</div>
<h4 class="font-label-caps text-on-surface mb-2">QA/Testing</h4>
<p class="text-on-surface-variant text-label-sm">Rigorous load testing and cross-border latency checks.</p>
</div>
<div class="p-6 glass-card border-l-2 border-l-secondary/30">
<div class="font-label-caps text-secondary text-headline-md mb-2">05</div>
<h4 class="font-label-caps text-on-surface mb-2">Deployment</h4>
<p class="text-on-surface-variant text-label-sm">CI/CD pipeline activation to global edge servers.</p>
</div>
<div class="p-6 glass-card border-l-2 border-l-secondary/30">
<div class="font-label-caps text-secondary text-headline-md mb-2">06</div>
<h4 class="font-label-caps text-on-surface mb-2">Optimization</h4>
<p class="text-on-surface-variant text-label-sm">Continuous AI-driven performance tuning.</p>
</div>
<div class="p-6 glass-card border-l-2 border-l-secondary/30 col-span-1 lg:col-span-2 bg-secondary/10">
<div class="font-label-caps text-secondary text-headline-md mb-2">07</div>
<h4 class="font-label-caps text-on-surface mb-2">Global Delivery</h4>
<p class="text-on-surface-variant text-label-sm">Full-scale market activation and scaling operations.</p>
</div>
</div>
</div>
</section>
<!-- BUILT BEYOND TEMPLATES SECTION: LIGHT -->
<section class="py-section-gap bg-light-surface text-light-on-surface relative">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<div class="flex flex-col md:flex-row gap-stack-lg items-center">
<div class="flex-1">
<span class="font-label-caps text-primary-container text-label-caps tracking-[0.2em] uppercase mb-4 block">Engineering Quality</span>
<h2 class="font-display-lg text-headline-lg text-light-on-surface mb-stack-md">BUILT BEYOND TEMPLATES</h2>
<p class="font-body-lg text-light-on-surface-variant mb-stack-md">
                            Most agencies sell you a modified WordPress theme. We build bespoke engines. Zero technical debt. Zero unnecessary plugins. 100% unique codebase.
                        </p>
<ul class="space-y-4 mb-stack-lg">
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary-container" data-icon="check_circle">check_circle</span>
<span class="font-body-md">Optimized Performance Scores (99+ Lighthouse)</span>
</li>
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary-container" data-icon="check_circle">check_circle</span>
<span class="font-body-md">Hardened Security Architecture</span>
</li>
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary-container" data-icon="check_circle">check_circle</span>
<span class="font-body-md">Full Data Ownership &amp; IP Rights</span>
</li>
</ul>
</div>
<div class="flex-1 w-full bg-white border border-light-border p-8 shadow-2xl relative overflow-hidden">
<div class="font-label-caps text-[11px] text-primary-container/30 mb-4">SYSTEM_BENCHMARK_v2.0</div>
<div class="space-y-6">
<div>
<div class="flex justify-between font-label-caps text-[10px] mb-2"><span>TEMPLATED_SOLUTION</span> <span class="text-error">42/100</span></div>
<div class="h-2 bg-light-surface rounded-full overflow-hidden">
<div class="h-full bg-error w-[42%]"></div>
</div>
</div>
<div>
<div class="flex justify-between font-label-caps text-[10px] mb-2"><span>VITALDC_ENGINE</span> <span class="text-primary-container font-bold">99/100</span></div>
<div class="h-2 bg-light-surface rounded-full overflow-hidden">
<div class="h-full bg-primary-container w-[99%]"></div>
</div>
</div>
</div>
<div class="mt-8 pt-8 border-t border-light-border text-center">
<p class="font-label-caps text-[12px] text-light-on-surface-variant italic">"Performance is not a feature; it's the foundation."</p>
</div>
</div>
</div>
</div>
</section>
<!-- PAIN POINTS SECTION: DARK -->
<section class="py-section-gap bg-surface-deep border-y border-glass">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 md:grid-cols-2 gap-stack-lg items-center">
<div>
<h2 class="font-display-lg text-headline-lg mb-stack-md leading-tight">
                        MOST EXPORT COMPANIES ARE <span class="text-export-orange">INVISIBLE</span> ONLINE.
                    </h2>
<p class="font-body-lg text-on-surface-variant mb-stack-lg max-w-md">
                        The world is searching for high-quality Egyptian products, but legacy digital presence is holding back your potential. We fix the infrastructure gap.
                    </p>
<div class="space-y-stack-md">
<div class="flex gap-6 group">
<div class="flex-shrink-0 w-12 h-12 flex items-center justify-center border border-glass bg-surface text-secondary font-label-caps">01</div>
<div>
<h4 class="font-label-caps text-on-surface mb-1">Search Insights</h4>
<p class="text-on-surface-variant text-body-md">We analyze global demand patterns for your specific product category.</p>
</div>
</div>
<div class="flex gap-6 group">
<div class="flex-shrink-0 w-12 h-12 flex items-center justify-center border border-glass bg-surface text-secondary font-label-caps">02</div>
<div>
<h4 class="font-label-caps text-on-surface mb-1">Protocol Terminal</h4>
<p class="text-on-surface-variant text-body-md">Engineering a site architecture that loads instantly across any continent.</p>
</div>
</div>
</div>
</div>
<div class="relative">
<div class="aspect-square glass-card p-1">
<div class="w-full h-full bg-surface overflow-hidden relative">
<div class="absolute inset-0 grid-mesh opacity-30"></div>
<div class="w-full h-full bg-cover bg-center grayscale hover:grayscale-0 transition-all duration-700" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB7VMha2PeePG1WcwsLcyZT2eKab3Plx6huPgfKNtQ6m_g8q8gXwzFwNBHsn50MekPuFm9-3Mx_fpuRLXCrGqP5xuyVi3CrMk5fh1G-AdPQZYPK-pleF8a7Csi5a2bpChGLFBzFxrPjSCRGX1qLL1QYE0U4OHDEKRlALrLNW1nxh7JzSiP_DSmtnEN1gflT4tHYlc83TuTeuHz0teKzYUzsss6IFNhgz4mY8mpQv4zjMpYRu4IO5XG3')"></div>
</div>
</div>
<!-- Secondary Floating Items -->
<div class="absolute -bottom-10 -left-10 glass-card p-6 hidden md:block">
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-secondary" data-icon="rocket_launch">rocket_launch</span>
<div>
<div class="font-label-caps text-label-sm text-secondary">DEPLOYMENT</div>
<div class="font-headline-md text-headline-md">READY</div>
</div>
</div>
</div>
<div class="absolute -top-10 -right-5 glass-card p-4 hidden md:block">
<span class="material-symbols-outlined text-export-orange" data-icon="query_stats">query_stats</span>
<div class="font-label-caps text-[9px] mt-1 text-on-surface-variant">NETWORK_ANALYTICS</div>
</div>
</div>
</div>
</section>
<!-- CTA SECTION: LIGHT -->
<section class="py-section-gap overflow-hidden relative bg-white text-light-on-surface">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop relative z-10 text-center">
<div class="glow-line-dark mb-16"></div>
<h2 class="font-display-lg text-display-lg mb-stack-md tracking-tighter text-light-on-surface">READY TO OPTIMIZE YOUR CORE?</h2>
<p class="font-body-lg text-light-on-surface-variant max-w-2xl mx-auto mb-stack-lg">
                    Join the elite network of Egyptian exporters who have digitized their entire international pipeline. Secure your infrastructure today.
                </p>
<div class="flex justify-center">
<button class="bg-primary-container text-white px-12 py-5 font-label-caps text-headline-md font-bold transition-all hover:scale-105 hover:bg-primary-container/90 active:opacity-80">
                        Initiate Connection
                    </button>
</div>
</div>
</section>
</main>
<!-- FOOTER: DARK -->
<footer class="bg-surface-deep border-t border-glass">
<div class="max-w-container-max mx-auto py-section-gap px-margin-mobile md:px-margin-desktop flex flex-col md:flex-row justify-between items-start gap-stack-lg">
<div class="max-w-sm">
<span class="font-display-lg text-headline-md font-bold text-on-surface block mb-4">VitalDC</span>
<p class="font-body-md text-on-surface-variant mb-6">Building the digital foundations for Egypt's next generation of global market leaders.</p>
<div class="flex gap-4">
<a class="w-10 h-10 flex items-center justify-center border border-glass hover:text-export-orange transition-all" href="#"><span class="material-symbols-outlined text-sm" data-icon="language">language</span></a>
<a class="w-10 h-10 flex items-center justify-center border border-glass hover:text-export-orange transition-all" href="#"><span class="material-symbols-outlined text-sm" data-icon="security">security</span></a>
</div>
</div>
<div class="grid grid-cols-2 gap-stack-lg">
<div class="space-y-4">
<h5 class="font-label-caps text-primary text-label-caps">NAVIGATE</h5>
<ul class="space-y-2 font-body-md text-on-surface-variant">
<li><a class="hover:text-export-orange transition-all" href="#">Digital Assets</a></li>
<li><a class="hover:text-export-orange transition-all" href="#">Global Trade Network</a></li>
<li><a class="hover:text-export-orange transition-all" href="#">Automation Systems</a></li>
</ul>
</div>
<div class="space-y-4">
<h5 class="font-label-caps text-primary text-label-caps">LEGAL</h5>
<ul class="space-y-2 font-body-md text-on-surface-variant">
<li><a class="hover:text-export-orange transition-all" href="#">Privacy Policy</a></li>
<li><a class="hover:text-export-orange transition-all" href="#">Terms of Service</a></li>
<li><a class="hover:text-export-orange transition-all" href="#">LinkedIn</a></li>
</ul>
</div>
</div>
</div>
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-8 border-t border-glass/30 text-on-surface-variant/50 font-label-caps text-[10px] flex justify-between">
<span>© 2024 VitalDC. DIGITAL INFRASTRUCTURE FOR EGYPTIAN EXPORTERS.</span>
<span class="hidden md:inline">SYSTEM_STATUS: SECURE_ENCRYPTION_ACTIVE</span>
</div>
</footer>
<script>
        // Micro-interaction for cards
        document.querySelectorAll('.glass-card, .bg-surface-container, .bg-white, .bg-light-surface').forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                card.style.setProperty('--mouse-x', `${x}px`);
                card.style.setProperty('--mouse-y', `${y}px`);
            });
        });
    </script>
</body></html>