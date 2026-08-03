<?php 
/**
 * Template Name: Vital-Start-Step-3
 */
 get_header('start');?>

<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .grid-line-overlay {
            background-image: linear-gradient(to right, rgba(142, 202, 230, 0.05) 1px, transparent 1px),
                              linear-gradient(to bottom, rgba(142, 202, 230, 0.05) 1px, transparent 1px);
            background-size: 40px 40px;
        }
    </style>
<!-- Tailwind Config Injection -->

<body class="bg-background text-on-background min-h-screen flex flex-col font-body-md overflow-x-hidden">
<!-- Top Header Navigation Shell (Shared Component: TopNavBar) -->

<!-- Main Content Canvas (High Contrast White Background for Content Area) -->
<main class="flex-grow pt-24 pb-32 bg-white relative">
<div class="absolute inset-0 grid-line-overlay opacity-40 pointer-events-none"></div>
<div class="max-w-container-max mx-auto px-gutter py-stack-lg relative z-10">
<!-- Section Header -->
<div class="mb-stack-lg max-w-3xl">
<div class="flex items-center gap-2 mb-2">
<span class="w-8 h-[2px] bg-export-orange"></span>
<span class="font-label-caps text-label-caps text-surface-deep uppercase font-bold">PROTOCOL_EXTENSIONS</span>
</div>
<h2 class="font-headline-lg text-headline-lg text-surface-deep mb-4">ENHANCE YOUR INFRASTRUCTURE</h2>
<p class="font-body-lg text-body-lg text-surface-variant max-w-2xl">
                    Select modular protocol extensions to optimize your global trade throughput. Add-ons are hot-swappable and billable per-node.
                </p>
</div>
<!-- Bento-Style Grid of Add-on Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
<!-- Card 1: Security+ Protocol -->
<div class="group border border-surface-container text-surface-deep p-6 hover:border-export-orange transition-all duration-300 bg-surface-container-lowest/50 backdrop-blur-sm flex flex-col justify-between min-h-[320px]">
<div>
<div class="flex justify-between items-start mb-6">
<div class="p-3 bg-surface-deep text-export-orange">
<span class="material-symbols-outlined">security</span>
</div>
<span class="font-label-caps text-[10px] text-outline uppercase border border-outline px-2 py-0.5">TYPE: CRYPTO_VAULT</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 font-bold">Security+ Protocol</h3>
<p class="font-body-md text-label-sm text-surface-variant leading-relaxed">
                            End-to-end hardware encryption, biometric hardware keys, and SOC2 compliance vault for sensitive trade data.
                        </p>
</div>
<div class="mt-8">
<button class="w-full py-3 border border-surface-deep font-label-caps text-label-caps uppercase hover:bg-surface-deep hover:text-white transition-colors flex justify-between items-center px-4">
<span class="">Enable Module</span>
<span class="material-symbols-outlined text-[18px]">add</span>
</button>
</div>
</div>
<!-- Card 2: Regional Accelerator -->
<div class="group border border-surface-container text-surface-deep p-6 hover:border-export-orange transition-all duration-300 bg-surface-container-lowest/50 backdrop-blur-sm flex flex-col justify-between min-h-[320px]">
<div>
<div class="flex justify-between items-start mb-6">
<div class="p-3 bg-surface-deep text-export-orange">
<span class="material-symbols-outlined">language</span>
</div>
<span class="font-label-caps text-[10px] text-outline uppercase border border-outline px-2 py-0.5">TYPE: EDGE_NODE</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 font-bold">Regional Accelerator</h3>
<p class="font-body-md text-label-sm text-surface-variant leading-relaxed">
                            Localized CDN nodes in MENA &amp; GCC, sub-50ms latency routing, and guaranteed local data residency.
                        </p>
</div>
<div class="mt-8">
<button class="w-full py-3 border border-surface-deep font-label-caps text-label-caps uppercase hover:bg-surface-deep hover:text-white transition-colors flex justify-between items-center px-4">
<span class="">Enable Module</span>
<span class="material-symbols-outlined text-[18px]">add</span>
</button>
</div>
</div>
<!-- Card 3: Advanced Analytics -->
<div class="group border border-surface-container text-surface-deep p-6 hover:border-export-orange transition-all duration-300 bg-surface-container-lowest/50 backdrop-blur-sm flex flex-col justify-between min-h-[320px]">
<div>
<div class="flex justify-between items-start mb-6">
<div class="p-3 bg-surface-deep text-export-orange">
<span class="material-symbols-outlined">leaderboard</span>
</div>
<span class="font-label-caps text-[10px] text-outline uppercase border border-outline px-2 py-0.5">TYPE: DATA_VIZ</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 font-bold">Advanced Analytics</h3>
<p class="font-body-md text-label-sm text-surface-variant leading-relaxed">
                            Real-time trade flow visualization, predictive supply chain alerts, and custom SQL reporting tools.
                        </p>
</div>
<div class="mt-8">
<button class="w-full py-3 border border-surface-deep font-label-caps text-label-caps uppercase hover:bg-surface-deep hover:text-white transition-colors flex justify-between items-center px-4">
<span class="">Enable Module</span>
<span class="material-symbols-outlined text-[18px]">add</span>
</button>
</div>
</div>
<!-- Card 4: API Bridge -->
<div class="group border border-surface-container text-surface-deep p-6 hover:border-export-orange transition-all duration-300 bg-surface-container-lowest/50 backdrop-blur-sm flex flex-col justify-between min-h-[320px]">
<div>
<div class="flex justify-between items-start mb-6">
<div class="p-3 bg-surface-deep text-export-orange">
<span class="material-symbols-outlined">integration_instructions</span>
</div>
<span class="font-label-caps text-[10px] text-outline uppercase border border-outline px-2 py-0.5">TYPE: MIDDLEWARE</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 font-bold">API Bridge</h3>
<p class="font-body-md text-label-sm text-surface-variant leading-relaxed">
                            Native ERP integrations, programmable webhook triggers, and custom endpoint provisioning for developers.
                        </p>
</div>
<div class="mt-8">
<button class="w-full py-3 border border-surface-deep font-label-caps text-label-caps uppercase hover:bg-surface-deep hover:text-white transition-colors flex justify-between items-center px-4">
<span class="">Enable Module</span>
<span class="material-symbols-outlined text-[18px]">add</span>
</button>
</div>
</div>
</div>
<!-- Visual Asset Section (Technical Detail) -->
<div class="mt-section-gap grid grid-cols-1 lg:grid-cols-3 gap-gutter items-center">
<div class="col-span-1 lg:col-span-2 relative h-[300px] bg-surface-deep overflow-hidden">
<div class="absolute inset-0 opacity-20">
<div class="h-full w-full" style="background-image: radial-gradient(circle at 2px 2px, #219EBC 1px, transparent 0); background-size: 24px 24px;"></div>
</div>
<!-- Mock Shipping Tracker / Data Viz -->
<div class="absolute inset-0 flex items-center justify-center p-gutter">
<div class="w-full h-full border border-glass p-6 flex flex-col">
<div class="flex justify-between items-center mb-6">
<div class="flex gap-2">
<div class="w-3 h-3 bg-export-orange animate-pulse"></div>
<span class="font-label-caps text-[10px] text-primary">LIVE_THROUGHPUT_MONITOR</span>
</div>
<span class="font-label-caps text-[10px] text-outline">UPTIME: 99.999%</span>
</div>
<div class="flex-grow flex items-end gap-1 overflow-hidden">
<div class="w-full bg-secondary/20 h-1/4"></div>
<div class="w-full bg-secondary/30 h-2/4"></div>
<div class="w-full bg-secondary/40 h-3/4"></div>
<div class="w-full bg-export-orange h-1/2"></div>
<div class="w-full bg-secondary/20 h-1/3"></div>
<div class="w-full bg-secondary/50 h-5/6"></div>
<div class="w-full bg-secondary/20 h-1/2"></div>
<div class="w-full bg-export-orange h-full"></div>
<div class="w-full bg-secondary/30 h-2/3"></div>
<div class="w-full bg-secondary/40 h-1/4"></div>
</div>
</div>
</div>
</div>
<div class="col-span-1 border-l-0 lg:border-l border-glass lg:pl-gutter">
<h4 class="font-label-caps text-label-caps text-surface-deep mb-4 uppercase">System Metadata</h4>
<ul class="space-y-4 font-label-caps text-[12px] text-surface-variant">
<li class="flex justify-between border-b border-surface-container-low pb-2">
<span class="">NETWORK_STATUS</span>
<span class="text-green-600 font-bold">OPTIMAL</span>
</li>
<li class="flex justify-between border-b border-surface-container-low pb-2">
<span class="">ENCRYPTION</span>
<span class="text-surface-deep">AES-256-GCM</span>
</li>
<li class="flex justify-between border-b border-surface-container-low pb-2">
<span class="">PROTOCOL_VERSION</span>
<span class="text-surface-deep">v4.0.2-STABLE</span>
</li>
<li class="flex justify-between border-b border-surface-container-low pb-2">
<span class="">GATEWAY_LATENCY</span>
<span class="text-surface-deep">12ms</span>
</li>
</ul>
</div>
</div>
</div>

</main>
<?php get_footer('start'); ?>  
</body>



<!-- Interactive Layer: Hover states and selection logic -->
<script>
        document.querySelectorAll('.group').forEach(card => {
            card.addEventListener('click', () => {
                const button = card.querySelector('button');
                const label = button.querySelector('span:first-child');
                const icon = button.querySelector('.material-symbols-outlined');
                
                if (card.getAttribute('data-selected') === 'true') {
                    card.setAttribute('data-selected', 'false');
                    card.classList.remove('ring-2', 'ring-export-orange', 'bg-export-orange/5');
                    label.textContent = 'Enable Module';
                    icon.textContent = 'add';
                } else {
                    card.setAttribute('data-selected', 'true');
                    card.classList.add('ring-2', 'ring-export-orange', 'bg-export-orange/5');
                    label.textContent = 'Module Active';
                    icon.textContent = 'check';
                }
            });
        });
    </script>

