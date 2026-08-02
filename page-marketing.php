<?php 
/**
 * Template Name: marketing
 */

 ?>

<!-- Tailwind Configuration -->
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                "surface-container-lowest": "#001018",
                "secondary-fixed": "#b2ebff",
                "on-tertiary": "#422c00",
                "on-error-container": "#ffdad6",
                "tertiary": "#ffba27",
                "surface-container-low": "#001f2a",
                "surface": "#00161f",
                "on-surface-variant": "#c2c7cd",
                "surface-container-high": "#002e3d",
                "tertiary-container": "#3d2900",
                "surface-bright": "#003e52",
                "on-primary-fixed-variant": "#254a63",
                "secondary-container": "#209dbb",
                "on-secondary-container": "#002e39",
                "primary-fixed-dim": "#a6cbe8",
                "inverse-primary": "#3e627b",
                "secondary": "#69d4f4",
                "surface-deep": "#011B29",
                "tertiary-fixed-dim": "#ffba27",
                "export-orange": "#FB8500",
                "on-secondary": "#003642",
                "surface-container": "#00232f",
                "border-glass": "rgba(142, 202, 230, 0.15)",
                "secondary-fixed-dim": "#69d4f4",
                "on-background": "#bde9ff",
                "background": "#00161f",
                "on-primary-fixed": "#001e2f",
                "surface-tint": "#a6cbe8",
                "on-tertiary-fixed-variant": "#5e4100",
                "primary": "#a6cbe8",
                "on-error": "#690005",
                "inverse-surface": "#bde9ff",
                "outline-variant": "#42474d",
                "primary-container": "#023047",
                "on-primary-container": "#7498b4",
                "primary-fixed": "#c8e6ff",
                "on-tertiary-fixed": "#271900",
                "surface-container-highest": "#003a4c",
                "inverse-on-surface": "#003546",
                "error-container": "#93000a",
                "surface-dim": "#00161f",
                "error": "#ffb4ab",
                "on-primary": "#07344b",
                "on-surface": "#bde9ff",
                "tertiary-fixed": "#ffdea9",
                "outline": "#8c9197",
                "on-secondary-fixed": "#001f27",
                "on-secondary-fixed-variant": "#004e5f",
                "surface-variant": "#003a4c",
                "on-tertiary-container": "#c18a00"
            },
            "borderRadius": {
                "DEFAULT": "0.125rem",
                "lg": "0.25rem",
                "xl": "0.5rem",
                "full": "0.75rem"
            },
            "spacing": {
                "section-gap": "120px",
                "gutter": "24px",
                "stack-sm": "8px",
                "stack-md": "24px",
                "margin-mobile": "16px",
                "container-max": "1280px",
                "margin-desktop": "64px",
                "stack-lg": "48px"
            },
            "fontFamily": {
                "display-lg": ["Geist"],
                "headline-lg-mobile": ["Geist"],
                "headline-lg": ["Geist"],
                "body-lg": ["Inter"],
                "label-sm": ["Inter"],
                "label-caps": ["JetBrains Mono"],
                "headline-md": ["Geist"],
                "body-md": ["Inter"]
            },
            "fontSize": {
                "display-lg": ["64px", {"lineHeight": "1.1", "letterSpacing": "-0.04em", "fontWeight": "700"}],
                "headline-lg-mobile": ["32px", {"lineHeight": "1.2", "fontWeight": "600"}],
                "headline-lg": ["40px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "600"}],
                "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                "label-sm": ["12px", {"lineHeight": "1.2", "fontWeight": "500"}],
                "label-caps": ["14px", {"lineHeight": "1.2", "letterSpacing": "0.1em", "fontWeight": "500"}],
                "headline-md": ["24px", {"lineHeight": "1.4", "fontWeight": "500"}],
                "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}]
            }
          }
        }
      }
    </script>
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
</head>
<body class="font-body-md selection:bg-tertiary selection:text-on-tertiary">
<main class="relative">
<!-- Grid Background -->
<div class="fixed inset-0 grid-mask pointer-events-none z-0"></div>
<!-- 1. Hero Section (Dark) -->
<section class="relative pt-32 pb-section-gap px-margin-desktop min-h-screen flex items-center overflow-hidden">
<div class="max-w-container-max mx-auto w-full grid grid-cols-12 gap-gutter relative z-10">
<div class="col-span-12 lg:col-span-8">
<span class="inline-block font-label-caps text-label-caps text-tertiary mb-4 tracking-widest border-l-2 border-tertiary pl-4">EXPORT ACCELERATION PROTOCOL</span>
<h1 class="font-display-lg text-display-lg text-on-surface mb-stack-md"><h1 class="font-display-lg text-[48px] md:text-display-lg max-w-4xl mb-stack-md leading-[1.1] cursor-text" spellcheck="false" data-stitch-added-classes="cursor-text" style="--tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; font-size: 48px; font-weight: inherit; letter-spacing: normal; outline: none !important; box-shadow: none !important;">LAUNCH YOUR GLOBAL <span class="text-export-orange cursor-text" spellcheck="false" data-stitch-added-classes="cursor-text" style="--tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; --tw-text-opacity: 1; color: rgb(251, 133, 0);">DIGITAL PRESENCE.</span></h1></h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mb-stack-lg leading-relaxed">
                    Don't wait for buyers to find you. We build the digital infrastructure to put your brand in front of high-intent international importers, decision-makers, and distribution giants.
                </p>
<div class="flex flex-wrap gap-stack-md">
<button class="bg-[#FFB703] text-black px-8 py-4 font-label-caps font-bold text-lg hover:bg-export-orange transition-all flex items-center gap-3 group">
                        Start My Campaign
                        <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
</button>
<button class="border border-secondary text-secondary px-8 py-4 font-label-caps font-bold text-lg hover:bg-secondary/10 transition-all">
                        View Methodology
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
                        Generic Posting <br>
<span class="text-export-orange">Is Not Marketing.</span>
</h2>
<p class="font-body-lg text-body-lg text-slate-600 mb-stack-md">
                        The international market is flooded with noise. For Egyptian exporters, success isn't about being seen by everyone; it's about being trusted by the <span class="font-bold underline decoration-export-orange text-[#00161f]">right person</span> at the exact moment they need your inventory.
                    </p>
</div>
<div class="col-span-12 lg:col-start-7 lg:col-span-6 grid grid-cols-2 gap-4">
<div class="p-8 border-2 border-[#00161f]/10 bg-[#00161f]/5">
<h3 class="font-label-caps text-label-caps font-bold mb-2">PRECISION OVER VOLUME</h3>
<p class="text-sm opacity-80">Stop chasing likes. Start capturing procurement intents from verified regional buyers.</p>
</div>
<div class="p-8 border-2 border-[#00161f]/10 bg-[#00161f]/5 mt-8">
<h3 class="font-label-caps text-label-caps font-bold mb-2">TRUST OVER NOISE</h3>
<p class="text-sm opacity-80">We engineer authority. Your digital presence must match the quality of your export goods.</p>
</div>
</div>
</div>
</div>
</section>
<!-- 3. Service Pillars (Dark) -->
<section class="py-section-gap px-margin-desktop bg-surface-deep relative">
<div class="max-w-container-max mx-auto relative z-10">
<div class="mb-stack-lg border-l-4 border-secondary pl-6">
<h2 class="font-headline-lg text-headline-lg text-on-surface">Precision Modules</h2>
<p class="font-body-md text-on-surface-variant">Strategic deployment of digital assets across the global trade funnel.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<!-- LinkedIn Precision -->
<div class="glass-panel p-8 group hover:border-secondary transition-all">
<div class="w-12 h-12 bg-secondary/10 flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-secondary" style="font-variation-settings: 'FILL' 1;">hub</span>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface mb-4">LinkedIn Precision</h3>
<p class="text-on-surface-variant mb-6 text-sm">Directly target decision-makers (CEOs, Procurement Officers) in the GCC, Europe, and USA. We bypass the gatekeepers.</p>
<div class="flex flex-wrap gap-2">
<span class="font-label-caps text-[10px] bg-secondary/10 text-secondary px-2 py-1">ABM STRATEGY</span>
<span class="font-label-caps text-[10px] bg-secondary/10 text-secondary px-2 py-1">B2B SALES</span>
</div>
</div>
<!-- Google Search Intent -->
<div class="glass-panel p-8 group hover:border-export-orange transition-all">
<div class="w-12 h-12 bg-export-orange/10 flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-export-orange" style="font-variation-settings: 'FILL' 1;">ads_click</span>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface mb-4">Google Search Intent</h3>
<p class="text-on-surface-variant mb-6 text-sm">Capture global buyers at the exact moment they search for your specific products. Dominate 'Egyptian Supplier' queries.</p>
<div class="flex flex-wrap gap-2">
<span class="font-label-caps text-[10px] bg-export-orange/10 text-export-orange px-2 py-1">GLOBAL SEO</span>
<span class="font-label-caps text-[10px] bg-export-orange/10 text-export-orange px-2 py-1">PPC EXPORT</span>
</div>
</div>
<!-- Lead Qualification -->
<div class="glass-panel p-8 group hover:border-tertiary transition-all">
<div class="w-12 h-12 bg-tertiary/10 flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-tertiary" style="font-variation-settings: 'FILL' 1;">filter_alt</span>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface mb-4">Lead Qualification</h3>
<p class="text-on-surface-variant mb-6 text-sm">Advanced AI filtering to separate serious international importers from tire-kickers. Your sales team only speaks to high-value leads.</p>
<div class="flex flex-wrap gap-2">
<span class="font-label-caps text-[10px] bg-tertiary/10 text-tertiary px-2 py-1">AI SCORING</span>
<span class="font-label-caps text-[10px] bg-tertiary/10 text-tertiary px-2 py-1">CRM SYNC</span>
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
<span class="font-label-caps text-label-caps text-export-orange">OPERATIONAL FRAMEWORK</span>
<h2 class="font-headline-lg text-headline-lg mt-4 font-bold">The Marketing Protocol</h2>
</div>
<div class="hidden md:block h-px bg-slate-200 flex-grow mx-12"></div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-4 gap-12">
<!-- Step 01 -->
<div class="relative group">
<span class="font-label-caps text-6xl text-slate-100 absolute -top-8 -left-4 pointer-events-none">01</span>
<div class="relative z-10 pt-8">
<h4 class="font-label-caps text-[#00161f] font-bold mb-4">MARKET MAPPING</h4>
<p class="text-slate-500 text-sm">Identifying high-growth trade corridors and mapping regional demand for Egyptian inventory.</p>
</div>
<div class="mt-8 w-full h-1 bg-slate-100 relative overflow-hidden">
<div class="absolute inset-0 bg-export-orange w-0 group-hover:w-full transition-all duration-700"></div>
</div>
</div>
<!-- Step 02 -->
<div class="relative group">
<span class="font-label-caps text-6xl text-slate-100 absolute -top-8 -left-4 pointer-events-none">02</span>
<div class="relative z-10 pt-8">
<h4 class="font-label-caps text-[#00161f] font-bold mb-4">FUNNEL ARCHITECTURE</h4>
<p class="text-slate-500 text-sm">Designing digital landing zones and trust signals specifically for international B2B buyers.</p>
</div>
<div class="mt-8 w-full h-1 bg-slate-100 relative overflow-hidden">
<div class="absolute inset-0 bg-export-orange w-0 group-hover:w-full transition-all duration-700 delay-100"></div>
</div>
</div>
<!-- Step 03 -->
<div class="relative group">
<span class="font-label-caps text-6xl text-slate-100 absolute -top-8 -left-4 pointer-events-none">03</span>
<div class="relative z-10 pt-8">
<h4 class="font-label-caps text-[#00161f] font-bold mb-4">GLOBAL DEPLOYMENT</h4>
<p class="text-slate-500 text-sm">Activating cross-channel campaigns targeted at specific geographic zones and trade clusters.</p>
</div>
<div class="mt-8 w-full h-1 bg-slate-100 relative overflow-hidden">
<div class="absolute inset-0 bg-export-orange w-0 group-hover:w-full transition-all duration-700 delay-200"></div>
</div>
</div>
<!-- Step 04 -->
<div class="relative group">
<span class="font-label-caps text-6xl text-slate-100 absolute -top-8 -left-4 pointer-events-none">04</span>
<div class="relative z-10 pt-8">
<h4 class="font-label-caps text-[#00161f] font-bold mb-4">REAL-TIME OPTIMIZATION</h4>
<p class="text-slate-500 text-sm">Continuous adjustment of bid strategies and creative based on lead quality data.</p>
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
<h2 class="font-headline-lg text-headline-lg text-on-surface mb-stack-md">KPI Targets &amp; Benchmarks</h2>
<p class="text-on-surface-variant mb-stack-md text-sm">We don't just report clicks. We track infrastructure performance metrics that actually drive export growth.</p>
<div class="bg-surface-deep p-6 border border-glass">
<div class="flex items-center gap-4 text-secondary mb-2">
<span class="material-symbols-outlined">analytics</span>
<span class="font-label-caps text-xs">LIVE TRACKING ACTIVE</span>
</div>
<p class="text-[10px] text-outline">Protocol: VitalDC-MKT-2024</p>
</div>
</div>
<div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-3 gap-6">
<!-- CPA Card -->
<div class="bg-surface-container-high p-8 flex flex-col justify-between border-t-4 border-secondary">
<div>
<span class="font-label-caps text-secondary text-xs">COST PER ACQUISITION</span>
<div class="text-4xl font-bold mt-2">-$42.00</div>
</div>
<div class="mt-8 flex items-end gap-2">
<div class="w-2 h-8 bg-secondary/20"></div>
<div class="w-2 h-12 bg-secondary/40"></div>
<div class="w-2 h-16 bg-secondary"></div>
<span class="text-[10px] text-on-surface-variant">Optimization Path</span>
</div>
</div>
<!-- Lead Quality Card -->
<div class="bg-surface-container-high p-8 flex flex-col justify-between border-t-4 border-export-orange">
<div>
<span class="font-label-caps text-export-orange text-xs">LEAD QUALITY INDEX</span>
<div class="text-4xl font-bold mt-2">88%</div>
</div>
<div class="mt-8 relative pt-4">
<div class="h-2 w-full bg-export-orange/20 rounded-full">
<div class="h-full w-[88%] bg-export-orange"></div>
</div>
<span class="text-[10px] text-on-surface-variant absolute top-0">Target: 85%</span>
</div>
</div>
<!-- Impression Share -->
<div class="bg-surface-container-high p-8 flex flex-col justify-between border-t-4 border-tertiary">
<div>
<span class="font-label-caps text-tertiary text-xs">REGIONAL SHARE</span>
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
<h2 class="font-display-lg text-headline-lg md:text-display-lg text-on-surface mb-stack-md uppercase">Ready to Scale Globally?</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant mb-stack-lg max-w-2xl mx-auto">
                Activate the Egyptian export sector's most advanced digital marketing infrastructure today.
            </p>
<div class="flex flex-col sm:flex-row justify-center gap-stack-md">
<button class="bg-[#FFB703] text-black px-12 py-5 font-label-caps font-extrabold text-xl hover:bg-export-orange transition-all shadow-xl hover:shadow-export-orange/20">
                    Initialize Growth Protocol
                </button>
<button class="border border-on-surface-variant text-on-surface-variant px-12 py-5 font-label-caps font-bold text-xl hover:bg-on-surface-variant hover:text-surface transition-all">
                    Request Audit
                </button>
</div>
<div class="mt-16 flex items-center justify-center gap-8 opacity-50">
<span class="font-label-caps text-[10px] tracking-widest uppercase">Compliant with International Export Standards</span>
</div>
</div>
</section>
</main>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Subtle entrance animations could be added here
    });
</script>


</body></html>