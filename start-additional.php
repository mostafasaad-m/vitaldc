<?php 
/**
 * Template Name: additional start
 */
 get_header();?>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .glass-card {
            background: rgba(17, 24, 39, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: inset 0 1px 1px rgba(255, 255, 255, 0.05);
        }
        .neon-glow:focus-within {
            box-shadow: 0 0 15px rgba(6, 182, 212, 0.3);
        }
        input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 16px;
            height: 16px;
            background: #c1c5dc;
            border-radius: 2px;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(193, 197, 220, 0.5);
        }
    </style>


<body class="bg-background text-on-background font-body-md min-h-screen selection:bg-primary/30">
<!-- TopNavBar -->

<main class="pt-32 pb-xl px-md max-w-container-max mx-auto">
<!-- Progress Indicator -->
<section class="mb-xl">
<div class="flex justify-between max-w-3xl mx-auto relative">
<div class="absolute top-1/2 left-0 w-full h-[2px] bg-white/5 -translate-y-1/2 z-0"></div>
<div class="absolute top-1/2 left-0 w-2/3 h-[2px] bg-primary -translate-y-1/2 z-0 transition-all duration-700"></div>
<div class="relative z-10 flex flex-col items-center gap-xs">
<div class="w-8 h-8 rounded-full bg-primary text-on-primary flex items-center justify-center font-bold text-sm">1</div>
<span class="font-label-caps text-label-caps text-on-surface-variant">PLAN</span>
</div>
<div class="relative z-10 flex flex-col items-center gap-xs">
<div class="w-8 h-8 rounded-full bg-primary text-on-primary flex items-center justify-center font-bold text-sm">2</div>
<span class="font-label-caps text-label-caps text-on-surface-variant">RESOURCE</span>
</div>
<div class="relative z-10 flex flex-col items-center gap-xs">
<div class="w-8 h-8 rounded-full bg-primary text-on-primary flex items-center justify-center font-bold text-sm">3</div>
<span class="font-label-caps text-label-caps text-primary">SERVICES</span>
</div>
<div class="relative z-10 flex flex-col items-center gap-xs">
<div class="w-8 h-8 rounded-full bg-surface-container-highest border border-white/10 text-on-surface-variant flex items-center justify-center font-bold text-sm">4</div>
<span class="font-label-caps text-label-caps text-on-surface-variant">DEPLOY</span>
</div>
</div>
</section>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-xl items-start">
<!-- Service Configuration Main Panel -->
<div class="lg:col-span-8 flex flex-col gap-lg">
<header>
<h1 class="font-display-lg text-display-lg text-on-background mb-xs">Service Configuration</h1>
<p class="text-on-surface-variant max-w-2xl">Toggle specialized modules and configure performance parameters for your digital infrastructure stack.</p>
</header>
<!-- Configuration Cards Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-md">
<!-- AI Integrations -->
<div class="glass-card p-md rounded-xl flex flex-col gap-md transition-all hover:border-primary/40 group">
<div class="flex justify-between items-start">
<div class="flex flex-col gap-xs">
<span class="material-symbols-outlined text-secondary text-3xl" data-weight="fill">psychology</span>
<h3 class="font-title-sm text-title-sm text-on-surface">AI Integrations</h3>
</div>
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox">
<div class="w-11 h-6 bg-surface-container-highest peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">Deploy LLM-optimized clusters and vector databases for real-time inference.</p>
<div class="mt-auto pt-md border-t border-white/5">
<div class="flex justify-between mb-xs">
<span class="font-label-caps text-label-caps text-on-surface-variant">INFERENCE PRIORITY</span>
<span class="font-code-snippet text-code-snippet text-primary">LOW LATENCY</span>
</div>
<input class="w-full h-1 bg-surface-container-highest rounded-lg appearance-none cursor-pointer accent-primary" type="range">
</div>
</div>
<!-- Automated CI/CD -->
<div class="glass-card p-md rounded-xl flex flex-col gap-md transition-all hover:border-primary/40 group">
<div class="flex justify-between items-start">
<div class="flex flex-col gap-xs">
<span class="material-symbols-outlined text-secondary text-3xl" data-weight="fill">cycle</span>
<h3 class="font-title-sm text-title-sm text-on-surface">Automated CI/CD</h3>
</div>
<label class="relative inline-flex items-center cursor-pointer">
<input class="sr-only peer" type="checkbox">
<div class="w-11 h-6 bg-surface-container-highest peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">Enable zero-downtime deployment pipelines with integrated testing suites.</p>
<div class="mt-auto pt-md border-t border-white/5">
<div class="flex justify-between mb-xs">
<span class="font-label-caps text-label-caps text-on-surface-variant">PIPELINE CONCURRENCY</span>
<span class="font-code-snippet text-code-snippet text-primary">4 THREADS</span>
</div>
<input class="w-full h-1 bg-surface-container-highest rounded-lg appearance-none cursor-pointer accent-primary" type="range">
</div>
</div>
<!-- Advanced Analytics -->
<div class="glass-card p-md rounded-xl flex flex-col gap-md transition-all hover:border-primary/40 group">
<div class="flex justify-between items-start">
<div class="flex flex-col gap-xs">
<span class="material-symbols-outlined text-secondary text-3xl" data-weight="fill">monitoring</span>
<h3 class="font-title-sm text-title-sm text-on-surface">Advanced Analytics</h3>
</div>
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox">
<div class="w-11 h-6 bg-surface-container-highest peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">Full-stack observability with eBPF tracing and custom dashboarding.</p>
<div class="mt-auto pt-md border-t border-white/5">
<div class="flex justify-between mb-xs">
<span class="font-label-caps text-label-caps text-on-surface-variant">RETENTION DEPTH</span>
<span class="font-code-snippet text-code-snippet text-primary">90 DAYS</span>
</div>
<input class="w-full h-1 bg-surface-container-highest rounded-lg appearance-none cursor-pointer accent-primary" type="range">
</div>
</div>
<!-- Edge Acceleration -->
<div class="glass-card p-md rounded-xl flex flex-col gap-md transition-all hover:border-primary/40 group">
<div class="flex justify-between items-start">
<div class="flex flex-col gap-xs">
<span class="material-symbols-outlined text-secondary text-3xl" data-weight="fill">bolt</span>
<h3 class="font-title-sm text-title-sm text-on-surface">Edge Acceleration</h3>
</div>
<label class="relative inline-flex items-center cursor-pointer">
<input class="sr-only peer" type="checkbox">
<div class="w-11 h-6 bg-surface-container-highest peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">Global CDN integration with edge-side rendering capabilities.</p>
<div class="mt-auto pt-md border-t border-white/5">
<div class="flex justify-between mb-xs">
<span class="font-label-caps text-label-caps text-on-surface-variant">POP DENSITY</span>
<span class="font-code-snippet text-code-snippet text-primary">OPTIMIZED</span>
</div>
<input class="w-full h-1 bg-surface-container-highest rounded-lg appearance-none cursor-pointer accent-primary" type="range">
</div>
</div>
</div>
<div class="flex justify-between mt-md">
<button class="flex items-center gap-xs px-lg py-md border border-white/10 hover:bg-white/5 transition-all text-on-surface font-label-caps text-label-caps uppercase">
<span class="material-symbols-outlined">chevron_left</span>
                        Resource Selection
                    </button>
<button class="bg-primary text-on-primary px-xl py-md font-label-caps text-label-caps uppercase rounded-DEFAULT hover:opacity-90 active:scale-95 transition-all flex items-center gap-xs">
                        Finalize Deployment
                        <span class="material-symbols-outlined">chevron_right</span>
</button>
</div>
</div>
<!-- Performance Widget Sidebar -->
<aside class="lg:col-span-4 sticky top-32">
<div class="glass-card p-lg rounded-xl flex flex-col gap-lg border-primary/20">
<div class="flex flex-col gap-xs">
<h2 class="font-headline-md text-headline-md text-on-surface">System Forecast</h2>
<p class="text-on-surface-variant font-body-sm">Real-time performance estimation based on current configurations.</p>
</div>
<!-- Performance Gauges -->
<div class="flex flex-col gap-md">
<div class="space-y-2">
<div class="flex justify-between">
<span class="font-label-caps text-label-caps text-on-surface-variant">THROUGHPUT</span>
<span class="font-code-snippet text-code-snippet text-secondary">92.4 Gb/s</span>
</div>
<div class="w-full h-2 bg-surface-container-highest overflow-hidden">
<div class="bg-primary h-full w-[92%] relative overflow-hidden" style="width: 91.1612%;">
<div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent animate-[pulse_2s_infinite]"></div>
</div>
</div>
</div>
<div class="space-y-2">
<div class="flex justify-between">
<span class="font-label-caps text-label-caps text-on-surface-variant">LATENCY</span>
<span class="font-code-snippet text-code-snippet text-primary">12ms (P99)</span>
</div>
<div class="w-full h-2 bg-surface-container-highest overflow-hidden">
<div class="bg-secondary h-full w-[15%]" style="width: 15.7243%;"></div>
</div>
</div>
<div class="space-y-2">
<div class="flex justify-between">
<span class="font-label-caps text-label-caps text-on-surface-variant">AI INFERENCE SPEED</span>
<span class="font-code-snippet text-code-snippet text-on-tertiary-container">450 t/sec</span>
</div>
<div class="w-full h-2 bg-surface-container-highest overflow-hidden">
<div class="bg-tertiary h-full w-[78%]" style="width: 77.4078%;"></div>
</div>
</div>
</div>
<!-- Visual Representation -->
<div class="relative h-48 w-full bg-surface-container-lowest rounded-lg border border-white/5 overflow-hidden group">
<div class="absolute inset-0 flex items-center justify-center">
<!-- Simulated Data Center Abstract Visual -->
<div class="grid grid-cols-8 grid-rows-4 gap-1 w-full h-full p-4">
<div class="bg-primary/20 animate-pulse transition-all duration-500 rounded-sm"></div>
<div class="bg-secondary/10 rounded-sm"></div>
<div class="bg-primary/40 rounded-sm"></div>
<div class="bg-primary/10 rounded-sm"></div>
<div class="bg-primary/20 rounded-sm"></div>
<div class="bg-secondary/30 animate-pulse rounded-sm"></div>
<div class="bg-primary/10 rounded-sm"></div>
<div class="bg-primary/5 rounded-sm"></div>
<div class="bg-primary/5 rounded-sm"></div>
<div class="bg-secondary/20 rounded-sm"></div>
<div class="bg-primary/10 rounded-sm"></div>
<div class="bg-primary/30 rounded-sm"></div>
<div class="bg-secondary/10 rounded-sm"></div>
<div class="bg-primary/40 rounded-sm"></div>
<div class="bg-primary/10 rounded-sm"></div>
<div class="bg-secondary/20 rounded-sm"></div>
<div class="bg-primary/20 rounded-sm"></div>
<div class="bg-primary/10 rounded-sm"></div>
<div class="bg-secondary/40 rounded-sm"></div>
<div class="bg-primary/10 rounded-sm"></div>
<div class="bg-primary/5 rounded-sm"></div>
<div class="bg-secondary/10 rounded-sm"></div>
<div class="bg-primary/30 rounded-sm"></div>
<div class="bg-primary/10 rounded-sm"></div>
<div class="bg-primary/10 rounded-sm"></div>
<div class="bg-secondary/20 rounded-sm"></div>
<div class="bg-primary/30 rounded-sm"></div>
<div class="bg-primary/10 rounded-sm"></div>
<div class="bg-secondary/10 rounded-sm"></div>
<div class="bg-primary/5 rounded-sm"></div>
<div class="bg-primary/40 rounded-sm"></div>
<div class="bg-secondary/20 rounded-sm"></div>
</div>
</div>
<div class="absolute inset-0 bg-gradient-to-t from-surface-container-lowest to-transparent"></div>
<div class="absolute bottom-4 left-4 flex flex-col">
<span class="font-code-snippet text-[10px] text-primary">VDC_NODE_CLUSTER_BRAVO</span>
<span class="font-code-snippet text-[10px] text-on-surface-variant">Uptime: 99.9992%</span>
</div>
</div>
<div class="flex flex-col gap-xs pt-md border-t border-white/5">
<div class="flex justify-between items-center">
<span class="text-on-surface-variant font-body-sm">Est. Monthly Cost</span>
<span class="font-headline-md text-headline-md text-on-surface">$1,420.00</span>
</div>
<p class="text-[10px] text-on-surface-variant leading-tight">Billing is calculated per minute based on actual resource consumption and service overhead.</p>
</div>
</div>
</aside>
</div>
</main>
<!-- Footer -->
<footer class="w-full py-xl border-t border-white/5 bg-surface-container-lowest mt-xl">
<div class="flex flex-col md:flex-row justify-between items-center w-full px-xl max-w-container-max mx-auto gap-md">
<div class="font-headline-md text-headline-md font-bold text-on-surface">VitalDC</div>
<p class="font-body-sm text-body-sm text-on-surface-variant md:order-last">© 2024 VitalDC Digital Infrastructure. Engineered for the Digital Age.</p>
<div class="flex gap-md">
<a class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary transition-colors duration-200 uppercase" href="#">Privacy Policy</a>
<a class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary transition-colors duration-200 uppercase" href="#">Terms of Service</a>
<a class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary transition-colors duration-200 uppercase" href="#">Security</a>
<a class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary transition-colors duration-200 uppercase" href="#">System Status</a>
</div>
</div>
</footer>
<script>
        // Micro-interactions for slider updates
        const ranges = document.querySelectorAll('input[type="range"]');
        ranges.forEach(range => {
            range.addEventListener('input', (e) => {
                const valueDisplay = e.target.parentElement.querySelector('.text-primary');
                // Logic to simulate dynamic value change if needed
            });
        });

        // Toggle interaction animation for sidebar gauges
        setInterval(() => {
            const bars = document.querySelectorAll('.bg-primary, .bg-secondary, .bg-tertiary');
            bars.forEach(bar => {
                if(bar.parentElement.classList.contains('w-full')) {
                   const currentWidth = parseInt(bar.style.width) || (bar.classList.contains('w-[92%]') ? 92 : bar.classList.contains('w-[15%]') ? 15 : 78);
                   const flicker = Math.random() * 2 - 1;
                   bar.style.width = `${Math.min(100, Math.max(5, currentWidth + flicker))}%`;
                }
            });
        }, 1500);
    </script>
</body></html>