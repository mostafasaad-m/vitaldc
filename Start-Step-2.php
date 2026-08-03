<?php 
/**
 * Template Name: Vital-Start-Step-2
 */

 ?>
 <?php get_header(); ?>
<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>VitalDC | Infrastructure Package Selection</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=JetBrains+Mono:wght@400;500&amp;family=Geist:wght@500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "tertiary-fixed": "#ffdea9",
                    "surface-tint": "#a6cbe8",
                    "inverse-primary": "#3e627b",
                    "on-tertiary-fixed": "#271900",
                    "tertiary": "#ffba27",
                    "surface-container-low": "#001f2a",
                    "secondary-fixed": "#b2ebff",
                    "outline": "#8c9197",
                    "inverse-surface": "#bde9ff",
                    "border-glass": "rgba(142, 202, 230, 0.15)",
                    "on-secondary-fixed-variant": "#004e5f",
                    "background": "#00161f",
                    "on-secondary-fixed": "#001f27",
                    "surface-container-high": "#002e3d",
                    "outline-variant": "#42474d",
                    "secondary": "#69d4f4",
                    "surface-bright": "#003e52",
                    "on-secondary-container": "#002e39",
                    "export-orange": "#FB8500",
                    "error": "#ffb4ab",
                    "on-tertiary-fixed-variant": "#5e4100",
                    "on-primary-container": "#7498b4",
                    "on-tertiary": "#422c00",
                    "on-background": "#bde9ff",
                    "surface-variant": "#003a4c",
                    "surface-container-lowest": "#001018",
                    "on-secondary": "#003642",
                    "tertiary-container": "#3d2900",
                    "on-tertiary-container": "#c18a00",
                    "on-surface-variant": "#c2c7cd",
                    "surface-container": "#00232f",
                    "surface-dim": "#00161f",
                    "on-primary": "#07344b",
                    "primary-container": "#023047",
                    "on-primary-fixed": "#001e2f",
                    "on-error": "#690005",
                    "on-primary-fixed-variant": "#254a63",
                    "primary-fixed-dim": "#a6cbe8",
                    "on-surface": "#bde9ff",
                    "surface-deep": "#011B29",
                    "secondary-container": "#209dbb",
                    "error-container": "#93000a",
                    "on-error-container": "#ffdad6",
                    "surface-container-highest": "#003a4c",
                    "primary-fixed": "#c8e6ff",
                    "surface": "#00161f",
                    "secondary-fixed-dim": "#69d4f4",
                    "inverse-on-surface": "#003546",
                    "tertiary-fixed-dim": "#ffba27",
                    "primary": "#a6cbe8"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "spacing": {
                    "stack-lg": "48px",
                    "gutter": "24px",
                    "section-gap": "120px",
                    "stack-md": "24px",
                    "margin-mobile": "16px",
                    "stack-sm": "8px",
                    "margin-desktop": "64px",
                    "container-max": "1280px"
            },
            "fontFamily": {
                    "display-lg": ["Geist"],
                    "body-md": ["Inter"],
                    "body-lg": ["Inter"],
                    "headline-md": ["Geist"],
                    "headline-lg-mobile": ["Geist"],
                    "label-sm": ["Inter"],
                    "label-caps": ["JetBrains Mono"],
                    "headline-lg": ["Geist"]
            },
            "fontSize": {
                    "display-lg": ["64px", {"lineHeight": "1.1", "letterSpacing": "-0.04em", "fontWeight": "700"}],
                    "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "headline-md": ["24px", {"lineHeight": "1.4", "fontWeight": "500"}],
                    "headline-lg-mobile": ["32px", {"lineHeight": "1.2", "fontWeight": "600"}],
                    "label-sm": ["12px", {"lineHeight": "1.2", "fontWeight": "500"}],
                    "label-caps": ["14px", {"lineHeight": "1.2", "letterSpacing": "0.1em", "fontWeight": "500"}],
                    "headline-lg": ["40px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "600"}]
            }
          },
        },
      }
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
</head>
<body class="min-h-screen flex flex-col antialiased overflow-x-hidden">
<!-- Progress Navigation (Dark Context) -->
<nav class="relative z-10 w-full bg-surface-deep border-b border-border-glass px-margin-desktop py-6">
<div class="max-w-container-max mx-auto flex items-center justify-between">
<div class="flex items-center gap-4">
<span class="font-label-caps text-label-caps text-export-orange mono">PROTOCOL v2.4</span>
<div class="h-4 w-px bg-border-glass"></div>
<h1 class="font-headline-md text-headline-md geist tracking-tighter">VitalDC Configuration</h1>
</div>
<div class="flex flex-col items-end gap-2">
<div class="flex gap-2">
<div class="h-1.5 w-12 bg-export-orange rounded-full"></div>
<div class="h-1.5 w-12 bg-export-orange rounded-full"></div>
<div class="h-1.5 w-12 bg-surface-variant rounded-full"></div>
<div class="h-1.5 w-12 bg-surface-variant rounded-full"></div>
</div>
<span class="font-label-caps text-label-sm text-on-surface-variant mono">STEP 02 OF 04 : PACKAGE_REGISTRY</span>
</div>
</div>
</nav>
<main class="flex-grow flex flex-col bg-surface">
<!-- Content Canvas (Light/Technical Transition) -->
<section class="relative bg-white text-surface-deep flex-grow py-section-gap px-margin-mobile md:px-margin-desktop grid-pattern">
<div class="max-w-container-max mx-auto relative z-10">
<header class="mb-stack-lg border-l-4 border-export-orange pl-6">
<span class="font-label-caps text-label-caps text-on-surface-variant mono mb-2 block">REGISTRY_ALLOCATION</span>
<h2 class="font-display-lg text-headline-lg geist text-surface-deep uppercase">Infrastructure Tiers</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mt-4">
                        Select the operational capacity for your global trade architecture. All nodes include automated compliance auditing and real-time ledger synchronization.
                    </p>
</header>
<!-- Bento Grid / Package Layout -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter mt-12">
<!-- Package S -->
<div class="package-card flex flex-col bg-white border border-slate-200 p-8 transition-all duration-300 hover:border-export-orange group">
<div class="flex justify-between items-start mb-10">
<div>
<span class="font-label-caps text-label-sm mono text-on-surface-variant">NODE_TYPE: S</span>
<h3 class="font-headline-md text-headline-md geist font-bold text-surface-deep mt-1">Core Infrastructure</h3>
</div>
<span class="material-symbols-outlined text-4xl text-slate-300 group-hover:text-export-orange transition-colors">database</span>
</div>
<div class="flex-grow">
<ul class="space-y-4 mb-10">
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-export-orange text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-body-md text-body-md text-slate-600">Digital Asset Registry</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-export-orange text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-body-md text-body-md text-slate-600">Basic Protocol Support</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-export-orange text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-body-md text-body-md text-slate-600">Unified Ledger View</span>
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
                            SELECT PACKAGE
                        </button>
</div>
<!-- Package M (Highlighted) -->
<div class="package-card active-package flex flex-col bg-white border-2 border-export-orange p-8 transition-all duration-300 relative">
<div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-export-orange text-black px-4 py-1 font-label-caps text-[10px] tracking-widest font-bold">
                            RECOMMENDED_STAGING
                        </div>
<div class="flex justify-between items-start mb-10">
<div>
<span class="font-label-caps text-label-sm mono text-export-orange">NODE_TYPE: M</span>
<h3 class="font-headline-md text-headline-md geist font-bold text-surface-deep mt-1">Growth Infrastructure</h3>
</div>
<span class="material-symbols-outlined text-4xl text-export-orange">rocket_launch</span>
</div>
<div class="flex-grow">
<ul class="space-y-4 mb-10">
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-export-orange text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-body-md text-body-md text-surface-deep font-semibold">Everything in Core</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-export-orange text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-body-md text-body-md text-slate-600">Modern Marketing (LinkedIn/Google)</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-export-orange text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-body-md text-body-md text-slate-600">CRM Sync Bridge</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-export-orange text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-body-md text-body-md text-slate-600">Multi-Market Expansion Kit</span>
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
                            PACKAGE SELECTED
                        </button>
</div>
<!-- Package L -->
<div class="package-card flex flex-col bg-white border border-slate-200 p-8 transition-all duration-300 hover:border-export-orange group">
<div class="flex justify-between items-start mb-10">
<div>
<span class="font-label-caps text-label-sm mono text-on-surface-variant">NODE_TYPE: L</span>
<h3 class="font-headline-md text-headline-md geist font-bold text-surface-deep mt-1">Enterprise Protocol</h3>
</div>
<span class="material-symbols-outlined text-4xl text-slate-300 group-hover:text-export-orange transition-colors">hub</span>
</div>
<div class="flex-grow">
<ul class="space-y-4 mb-10">
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-export-orange text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-body-md text-body-md text-surface-deep font-semibold">Full Growth Suite</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-export-orange text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-body-md text-body-md text-slate-600">AI-Powered Automation</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-export-orange text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-body-md text-body-md text-slate-600">Predictive Intelligence</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-export-orange text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-body-md text-body-md text-slate-600">24/7 Dedicated Engineering</span>
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
<p class="font-label-caps text-label-sm text-surface-deep">UNLIMITED</p>
</div>
</div>
</div>
</div>
<button class="select-btn w-full py-4 border-2 border-export-orange text-export-orange font-label-caps text-label-caps transition-all duration-200">
                            SELECT PACKAGE
                        </button>
</div>
</div>
<!-- Technical Legend / Footer of Section -->
<div class="mt-stack-lg pt-stack-md border-t border-slate-100 flex flex-col md:flex-row justify-between gap-gutter items-center">
<div class="flex gap-8">
<div class="flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
<span class="font-label-caps text-[10px] text-slate-400 mono">NETWORK_STATUS: OPTIMAL</span>
</div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-sm text-slate-400">lock</span>
<span class="font-label-caps text-[10px] text-slate-400 mono">ENCRYPTION: AES-256</span>
</div>
</div>
<p class="font-label-caps text-label-sm text-slate-400 mono italic">
                        SYSTEM_OUTPUT: Selection affects global throughput metrics.
                    </p>
</div>
</div>
<!-- Background Decorative Grid (Technical Overlay) -->
<div class="absolute inset-0 pointer-events-none opacity-5">
<div class="h-full w-px bg-surface-deep absolute left-margin-desktop"></div>
<div class="h-full w-px bg-surface-deep absolute right-margin-desktop"></div>
<div class="w-full h-px bg-surface-deep absolute top-1/2"></div>
</div>
</section>
</main>
<!-- Global Action Bar (Dark Context) -->
<footer class="bg-surface-deep border-t border-border-glass px-margin-desktop py-8">
<div class="max-w-container-max mx-auto flex flex-col md:flex-row justify-between items-center gap-6">
<button class="group flex items-center gap-3 text-on-surface-variant hover:text-white transition-colors">
<span class="material-symbols-outlined">arrow_back</span>
<span class="font-label-caps text-label-caps mono">PREVIOUS: IDENTITY_VERIFICATION</span>
</button>
<button class="bg-export-orange text-black px-12 py-5 font-label-caps text-label-caps font-bold flex items-center gap-4 transition-transform hover:scale-[1.02] active:scale-95" onclick="window.location.reload()">
                CONTINUE TO STEP 03
                <span class="material-symbols-outlined">arrow_forward</span>
</button>
</div>
</footer>
<script>
        // Micro-interaction for package selection
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
                    btn.textContent = 'SELECT PACKAGE';
                });

                // Set active state
                card.classList.add('active-package');
                const activeBtn = card.querySelector('.select-btn');
                activeBtn.classList.remove('border-2', 'border-export-orange', 'text-export-orange');
                activeBtn.classList.add('bg-export-orange', 'text-black', 'font-bold');
                activeBtn.textContent = 'PACKAGE SELECTED';
                
                // Audio feedback (optional/conceptual)
                console.log(`Package ${['S', 'M', 'L'][index]} committed to memory.`);
            });
        });
    </script>
	<?php get_footer(); ?>
</body></html>