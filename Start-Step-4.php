<?php 
/**
 * Template Name: Vital-Start-Step-4
 */
 get_header('start');?>

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

<?php get_footer('start'); ?>
</body></html>