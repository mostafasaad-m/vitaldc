<?php 
/**
 * Template Name: Vital-Start-Step-4
 */
 get_header();?>


<!DOCTYPE html><html class="dark" lang="en" style=""><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>VitalDC | Review Protocol Deployment</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&amp;family=Inter:wght@100..900&amp;family=JetBrains+Mono:wght@100..800&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<!-- Tailwind Configuration -->
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "primary-container": "#023047",
                    "outline": "#8c9197",
                    "on-secondary": "#003642",
                    "surface-container": "#00232f",
                    "secondary": "#69d4f4",
                    "primary-fixed-dim": "#a6cbe8",
                    "on-primary-fixed": "#001e2f",
                    "surface-container-low": "#001f2a",
                    "border-glass": "rgba(142, 202, 230, 0.15)",
                    "secondary-fixed-dim": "#69d4f4",
                    "surface-bright": "#003e52",
                    "surface-container-highest": "#003a4c",
                    "tertiary-container": "#3d2900",
                    "on-error": "#690005",
                    "on-primary": "#07344b",
                    "secondary-container": "#209dbb",
                    "on-background": "#bde9ff",
                    "tertiary-fixed": "#ffdea9",
                    "error": "#ffb4ab",
                    "surface-container-lowest": "#001018",
                    "on-secondary-fixed": "#001f27",
                    "surface-tint": "#a6cbe8",
                    "on-surface": "#bde9ff",
                    "on-tertiary": "#422c00",
                    "export-orange": "#FB8500",
                    "error-container": "#93000a",
                    "on-primary-container": "#7498b4",
                    "on-tertiary-fixed": "#271900",
                    "on-tertiary-container": "#c18a00",
                    "background": "#00161f",
                    "outline-variant": "#42474d",
                    "surface-dim": "#00161f",
                    "on-primary-fixed-variant": "#254a63",
                    "on-secondary-container": "#002e39",
                    "on-surface-variant": "#c2c7cd",
                    "surface-container-high": "#002e3d",
                    "surface-variant": "#003a4c",
                    "primary": "#a6cbe8",
                    "surface-deep": "#011B29",
                    "inverse-primary": "#3e627b",
                    "tertiary-fixed-dim": "#ffba27",
                    "tertiary": "#ffba27",
                    "inverse-on-surface": "#003546",
                    "surface": "#00161f",
                    "on-tertiary-fixed-variant": "#5e4100",
                    "secondary-fixed": "#b2ebff",
                    "inverse-surface": "#bde9ff",
                    "on-error-container": "#ffdad6",
                    "on-secondary-fixed-variant": "#004e5f",
                    "primary-fixed": "#c8e6ff"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "spacing": {
                    "stack-sm": "8px",
                    "gutter": "24px",
                    "stack-md": "24px",
                    "container-max": "1280px",
                    "stack-lg": "48px",
                    "section-gap": "120px",
                    "margin-mobile": "16px",
                    "margin-desktop": "64px"
            },
            "fontFamily": {
                    "headline-lg-mobile": ["Geist"],
                    "display-lg": ["Geist"],
                    "label-sm": ["Inter"],
                    "headline-md": ["Geist"],
                    "body-md": ["Inter"],
                    "body-lg": ["Inter"],
                    "label-caps": ["JetBrains Mono"],
                    "headline-lg": ["Geist"]
            },
            "fontSize": {
                    "headline-lg-mobile": ["32px", {"lineHeight": "1.2", "fontWeight": "600"}],
                    "display-lg": ["64px", {"lineHeight": "1.1", "letterSpacing": "-0.04em", "fontWeight": "700"}],
                    "label-sm": ["12px", {"lineHeight": "1.2", "fontWeight": "500"}],
                    "headline-md": ["24px", {"lineHeight": "1.4", "fontWeight": "500"}],
                    "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
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
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden;
        }
        .grid-pattern {
            background-size: 40px 40px;
            background-image: linear-gradient(to right, rgba(142, 202, 230, 0.05) 1px, transparent 1px),
                              linear-gradient(to bottom, rgba(142, 202, 230, 0.05) 1px, transparent 1px);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        .glass-border-b { border-bottom: 1px solid rgba(142, 202, 230, 0.15); }
        .glass-border-r { border-right: 1px solid rgba(142, 202, 230, 0.15); }
    </style>
</head>
<body class="font-body-md text-on-surface">
<!-- Top Technical Margin -->

<!-- Sidebar Metadata (Left) -->

<!-- Main Content Area -->
<main class="min-h-screen pt-16 pb-24">
<!-- White Canvas Header -->
<div class="bg-white text-surface-deep py-stack-lg border-b border-surface-container-low w-full">
<div class="max-w-container-max mx-auto px-gutter">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-gutter">
<div>
<p class="font-label-caps text-label-caps text-export-orange mb-stack-sm tracking-widest">STEP 04 OF 04 : FINAL_INITIALIZATION</p>
<h1 class="font-headline-lg text-headline-lg font-extrabold tracking-tight uppercase">Review Protocol Deployment</h1>
</div>
<div class="font-label-caps text-label-sm text-outline-variant text-right border-l-2 border-export-orange pl-4">
                        SYSTEM_ID: VDC-8821-X<br>
                        REGION: EGY-CAI-NORTH
                    </div>
</div>
</div>
</div>
<!-- Content Canvas -->
<div class="bg-white min-h-[60vh] relative">
<!-- Grid Accents for White Canvas -->
<div class="absolute inset-0 grid-pattern pointer-events-none opacity-[0.03]"></div>
<div class="max-w-container-max mx-auto px-gutter py-section-gap relative z-10 text-surface-deep">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-stack-lg">
<!-- Left Column: Summary -->
<div class="lg:col-span-7 space-y-stack-lg">
<section>
<div class="flex items-center gap-3 mb-stack-md">
<span class="material-symbols-outlined text-export-orange">inventory_2</span>
<h2 class="font-headline-md text-headline-md font-bold uppercase tracking-tight">Deployment Summary</h2>
</div>
<div class="space-y-4">
<!-- Tier Selection -->
<div class="p-6 border border-surface-container-low rounded bg-surface-container-lowest/50 flex justify-between items-center group hover:border-export-orange transition-colors">
<div>
<p class="font-label-caps text-xs text-outline-variant uppercase mb-1">Infrastructure Tier</p>
<p class="font-headline-md text-headline-md font-bold">Growth Infrastructure - Tier M</p>
</div>
<span class="material-symbols-outlined text-outline group-hover:text-export-orange transition-colors">edit</span>
</div>
<!-- Extensions -->
<div class="p-6 border border-surface-container-low rounded bg-surface-container-lowest/50">
<p class="font-label-caps text-xs text-outline-variant uppercase mb-4">Active Protocol Extensions</p>
<div class="flex flex-wrap gap-3">
<div class="flex items-center gap-2 px-3 py-1.5 bg-primary-container text-primary rounded-sm border border-primary/20">
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">security</span>
<span class="font-label-caps text-xs uppercase font-bold">Security+ Protocol</span>
</div>
<div class="flex items-center gap-2 px-3 py-1.5 bg-primary-container text-primary rounded-sm border border-primary/20">
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">analytics</span>
<span class="font-label-caps text-xs uppercase font-bold">Advanced Analytics</span>
</div>
<div class="flex items-center gap-2 px-3 py-1.5 bg-primary-container text-primary rounded-sm border border-primary/20">
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">language</span>
<span class="font-label-caps text-xs uppercase font-bold">Global CDN Node</span>
</div>
</div>
</div>
</div>
</section>
<section>
<div class="flex items-center gap-3 mb-stack-md">
<span class="material-symbols-outlined text-export-orange">gavel</span>
<h2 class="font-headline-md text-headline-md font-bold uppercase tracking-tight">Terms &amp; Compliance</h2>
</div>
<div class="space-y-4">
<label class="flex items-start gap-4 p-4 border border-surface-container-low rounded cursor-pointer hover:bg-surface-container-lowest transition-colors">
<input checked="" class="mt-1 w-5 h-5 rounded border-outline-variant text-export-orange focus:ring-export-orange" type="checkbox">
<div>
<p class="font-label-caps text-sm font-bold uppercase">Data Sovereignty Clause</p>
<p class="text-sm text-outline-variant mt-1">Confirm that all exported data assets remain within Egypt's regional infrastructure as per VDC Regulatory Compliance v2.0.</p>
</div>
</label>
<label class="flex items-start gap-4 p-4 border border-surface-container-low rounded cursor-pointer hover:bg-surface-container-lowest transition-colors">
<input class="mt-1 w-5 h-5 rounded border-outline-variant text-export-orange focus:ring-export-orange" type="checkbox">
<div>
<p class="font-label-caps text-sm font-bold uppercase">Protocol Governance Agreement</p>
<p class="text-sm text-outline-variant mt-1">Accept the terms of automated scaling and resource allocation during peak export periods.</p>
</div>
</label>
</div>
</section>
</div>
<!-- Right Column: Specs & Confirm -->
<div class="lg:col-span-5">
<div class="sticky top-24 space-y-stack-md">
<!-- Technical Specifications Block -->
<div class="bg-surface-deep text-on-surface p-8 rounded-lg shadow-xl relative overflow-hidden border border-glass">
<div class="absolute top-0 right-0 p-4 opacity-10">
<span class="material-symbols-outlined text-8xl">memory</span>
</div>
<h3 class="font-label-caps text-label-caps text-secondary mb-6 border-b border-glass pb-2 uppercase tracking-widest">Technical Specifications</h3>
<div class="space-y-6">
<div class="flex justify-between items-end">
<span class="font-label-caps text-xs text-outline uppercase">SLA Uptime</span>
<span class="font-label-caps text-lg font-bold text-secondary">99.99%</span>
</div>
<div class="flex justify-between items-end">
<span class="font-label-caps text-xs text-outline uppercase">Encryption</span>
<span class="font-label-caps text-lg font-bold text-white">AES-256-GCM</span>
</div>
<div class="flex justify-between items-end">
<span class="font-label-caps text-xs text-outline uppercase">Provisioning Time</span>
<span class="font-label-caps text-lg font-bold text-export-orange">&lt; 15.0m</span>
</div>
<div class="pt-6 mt-6 border-t border-glass">
<div class="flex items-center gap-2 mb-2">
<span class="w-2 h-2 bg-secondary rounded-full"></span>
<span class="font-label-caps text-[10px] text-outline uppercase">Infrastructure Health Check</span>
</div>
<div class="w-full bg-surface-container-low h-1.5 rounded-full overflow-hidden">
<div class="bg-secondary h-full w-[88%] animate-pulse"></div>
</div>
</div>
</div>
</div>
<!-- Final Call to Action -->
<div class="p-8 border-2 border-export-orange rounded-lg bg-export-orange/5 space-y-6">
<div class="flex items-center gap-4">
<div class="bg-export-orange text-surface-deep p-2 rounded">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">rocket_launch</span>
</div>
<h4 class="font-label-caps text-sm font-bold text-surface-deep uppercase">Final Confirmation</h4>
</div>
<p class="text-sm text-outline-variant">By initializing, you authorize VitalDC to provision the requested resources and activate the selected security protocols immediately.</p>
<button class="w-full py-4 bg-export-orange text-surface-deep font-label-caps font-extrabold uppercase tracking-widest rounded shadow-lg hover:brightness-110 active:scale-[0.98] transition-all flex items-center justify-center gap-3">
                                    Initialize Deployment
                                    <span class="material-symbols-outlined">chevron_right</span>
</button>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Visualization Section (Technical Metaphor) -->
<section class="bg-surface-container-low py-section-gap overflow-hidden relative border-t border-glass">

<div class="max-w-container-max mx-auto px-gutter relative z-10">
<div class="grid grid-cols-1 md:grid-cols-3 gap-stack-lg text-center md:text-left">
<div class="space-y-4">
<span class="font-label-caps text-secondary text-xs uppercase tracking-widest">Global Reach</span>
<h4 class="font-headline-md text-white font-bold uppercase">Multi-Region Redundancy</h4>
<p class="text-on-surface-variant text-sm">Your infrastructure is mirrored across CAI-01 and AMS-04 nodes to ensure 24/7 export availability.</p>
</div>
<div class="space-y-4">
<span class="font-label-caps text-secondary text-xs uppercase tracking-widest">Security First</span>
<h4 class="font-headline-md text-white font-bold uppercase">Zero-Trust Architecture</h4>
<p class="text-on-surface-variant text-sm">Every data packet is validated against the selected Security+ Protocol before crossing gateway thresholds.</p>
</div>
<div class="space-y-4">
<span class="font-label-caps text-secondary text-xs uppercase tracking-widest">Speed Optimization</span>
<h4 class="font-headline-md text-white font-bold uppercase">Light-Speed Routes</h4>
<p class="text-on-surface-variant text-sm">Direct peering with major European trade hubs reduces latency by an estimated 45ms.</p>
</div>
</div>
</div>
</section>
</main>
<!-- Bottom Technical Margin (Footer/Nav) -->
<footer class="fixed bottom-0 w-full z-50 bg-surface-deep/90 backdrop-blur-xl border-t border-glass">
<div class="max-w-container-max mx-auto h-20 flex items-center justify-between px-gutter">
<!-- Left Side: Nav Actions -->
<div class="flex items-center gap-6">
<button class="flex items-center gap-2 text-outline-variant font-label-caps text-label-caps uppercase tracking-widest hover:text-white transition-colors">
<span class="material-symbols-outlined">arrow_back</span>
                    Back to Add-ons
                </button>
</div>
<!-- Middle: Status Metadata (SCREEN_2 continuity) -->
<div class="hidden xl:flex items-center gap-12 font-label-caps text-[10px] text-outline uppercase tracking-widest">
<div class="flex flex-col">
<span class="">Protocol Layer</span>
<span class="text-secondary">L-07_APP_SEC</span>
</div>
<div class="flex flex-col">
<span class="">Auth Token</span>
<span class="text-secondary">VDC_PR_882</span>
</div>
<div class="flex flex-col">
<span class="">Gateway ID</span>
<span class="text-secondary">NS-42-DELTA</span>
</div>
</div>
<!-- Right Side: Primary Action -->
<div class="flex items-center gap-6">
<div class="hidden md:flex flex-col items-end pr-6 border-r border-glass">
<span class="font-label-caps text-[10px] text-outline uppercase">Setup Fee Total</span>
<span class="font-label-caps text-lg font-bold text-white">$1,450.00 <span class="text-[10px] font-normal text-outline">USD</span></span>
</div>
<button class="px-8 py-3 bg-export-orange text-surface-deep font-label-caps font-extrabold uppercase tracking-widest rounded hover:scale-105 active:scale-95 transition-all shadow-[0_0_20px_rgba(251,133,0,0.3)]">
                    Initialize Deployment
                </button>
</div>
</div>
</footer>
<!-- Small Interaction Script -->
<script>
        document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const parent = this.closest('label');
                if (this.checked) {
                    parent.classList.add('bg-export-orange/5', 'border-export-orange');
                } else {
                    parent.classList.remove('bg-export-orange/5', 'border-export-orange');
                }
            });
        });
    </script>

<?php get_footer(); ?>
</body></html>