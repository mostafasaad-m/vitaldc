<?php 
/**
 * Template Name: marketing
 */

 ?>
 <?php get_header(); ?>
<style>
        body {
            background-color: #0b1020;
            color: #e5e2e3;
            overflow-x: hidden;
        }
        .glass-card {
            background: rgba(17, 24, 39, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: inset 0 1px 0 0 rgba(255, 255, 255, 0.05);
        }
        .neon-glow-blue {
            box-shadow: 0 0 15px rgba(176, 198, 255, 0.3);
        }
        .neon-glow-purple {
            box-shadow: 0 0 15px rgba(208, 188, 255, 0.3);
        }
        .grid-bg {
            background-image: linear-gradient(rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                              linear-gradient(90deg, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
            background-size: 40px 40px;
        }
        .scanline {
            width: 100%;
            height: 2px;
            background: linear-gradient(to right, transparent, rgba(176, 198, 255, 0.2), transparent);
            position: absolute;
            animation: scan 4s linear infinite;
        }
        @keyframes scan {
            from { top: 0%; }
            to { top: 100%; }
        }
        .pulse-node {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        @keyframes pulse {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.5; transform: scale(1.2); }
        }
    </style>

<body class="font-body-md text-body-md">
<!-- Top Navigation Bar -->


<div class="flex items-center gap-md">
<button class="px-md py-xs bg-secondary text-on-secondary font-label-caps text-label-caps rounded-lg hover:scale-105 active:scale-95 transition-all duration-200 uppercase tracking-widest">
                    Execute Protocol
                </button>
<div class="w-8 h-8 rounded-full overflow-hidden border border-outline">
<img alt="Operational Command Profile" class="w-full h-full object-cover" data-alt="A professional close-up portrait of a tech executive in a high-tech environment. The lighting is low-key with a sharp blue key light from a monitor highlighting their features. The background is a blurred server room with blinking LED indicators. The overall mood is serious, authoritative, and sophisticated, matching a deep navy and electric blue digital aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCv_nkwAYhiDZjbRpw4aP1iwPMWHOJQDC2lh8R8Mhwfi35FCQUQ1rC3fwLuHfjIXW4jeWkWcTd1Ze33bjinbQSdExKEJ8bz47Oke9Z5r9vO7ceK3hXSiO9XEAUU1n3BydLHnwzxLmzy261727bt27Xmo3C6vLBEM3r-7FPKVkPhxPA488hluwp3v3djd3KTh4F7LIjtQndgDfOh0KjFbMSOmJbaUdFcYoPjxYwxkDiciFooNK_fAFLzbii--wAlvSHXIaGYy_sNfYA"/>
</div>
</div>
</div>
</header>
<main class="relative min-h-screen pt-32 pb-xl overflow-hidden grid-bg">
<!-- Background Atmospheric Elements -->
<div class="absolute top-0 left-0 w-full h-full pointer-events-none opacity-20">
<div class="absolute top-1/4 left-1/4 w-96 h-96 bg-secondary rounded-full blur-[120px]"></div>
<div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-tertiary rounded-full blur-[120px]"></div>
</div>
<div class="max-w-container-max mx-auto px-gutter relative z-10">
<!-- Hero Content Grid -->
<div class="grid lg:grid-cols-12 gap-xl items-start">
<!-- Left Column: Copy & CTAs -->
<div class="lg:col-span-5 space-y-lg">
<div class="inline-flex items-center gap-xs px-sm py-1 border border-secondary/30 bg-secondary/10 rounded-full">
<span class="w-2 h-2 rounded-full bg-secondary pulse-node"></span>
<span class="font-code-snippet text-code-snippet text-secondary tracking-widest uppercase">System Status: Optimal</span>
</div>
<h1 class="font-display-lg text-display-lg text-on-surface">
                        Scale Egypt to the <br/>
<span class="text-secondary">World.</span>
</h1>
<p class="font-body-md text-on-surface-variant max-w-lg">
                        Precision-engineered growth protocols for elite exporters. We bridge the gap between local production and global market dominance through high-performance digital systems.
                    </p>
<div class="flex flex-col sm:flex-row gap-md pt-md">
<button class="px-lg py-md bg-secondary text-on-secondary font-headline-md text-headline-md rounded-xl hover:shadow-[0_0_20px_rgba(176,198,255,0.4)] transition-all flex items-center justify-center gap-sm">
                            Initialize Export Protocol
                            <span class="material-symbols-outlined">rocket_launch</span>
</button>
<button class="px-lg py-md border border-outline hover:bg-white/5 text-on-surface font-headline-md text-headline-md rounded-xl transition-all flex items-center justify-center gap-sm">
                            Review Global Reach
                        </button>
</div>
<!-- Market Status Indicators -->
<div class="grid grid-cols-2 gap-md pt-lg">
<div class="glass-card p-md rounded-xl space-y-xs">
<span class="font-label-caps text-label-caps text-outline uppercase">Active Ports</span>
<div class="text-headline-md font-code-snippet text-on-surface">14/14</div>
<div class="w-full bg-white/10 h-1 rounded-full overflow-hidden">
<div class="bg-secondary h-full w-[100%]"></div>
</div>
</div>
<div class="glass-card p-md rounded-xl space-y-xs">
<span class="font-label-caps text-label-caps text-outline uppercase">Market Velocity</span>
<div class="text-headline-md font-code-snippet text-secondary">98.4%</div>
<div class="w-full bg-white/10 h-1 rounded-full overflow-hidden">
<div class="bg-tertiary h-full w-[85%]"></div>
</div>
</div>
</div>
</div>
<!-- Right Column: Visualization Command Center -->
<div class="lg:col-span-7 space-y-md">
<div class="glass-card rounded-xl overflow-hidden relative min-h-[500px] flex items-center justify-center">
<!-- Scanline Effect -->
<div class="scanline"></div>
<!-- Map Visualization -->
<div class="absolute inset-0 p-lg flex items-center justify-center">
<div class="relative w-full h-full">
<img class="w-full h-full object-contain opacity-40 mix-blend-screen" data-alt="A highly detailed and stylized digital world map in a dark HUD style. Egypt is highlighted with a brilliant electric blue glow at the center. Luminous data paths emerge from Cairo and branch out across the globe, connecting to glowing nodes in London, New York, Dubai, and Berlin. The background features a subtle hexagonal grid and floating data metrics in monospaced typography. The overall visual style is sleek, cinematic, and cyber-tech inspired with deep navy and violet tones." data-location="Global" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDDgIXLdSePKmfSp1ldRQ-D_vRfofprT0mCLcJQ49bx_3RFBVQmpZHrSlk3WQHKsCzgLAbzkapmGUJYobjGn2lb30VCTpWxhdEw293GjYZ6SWxejBXcmGyODfQYtOfuIYbPdJWU8iEFzcEoze8Wkz1DSryNI4aSrvofAReUuQozkYpZwwG2DK3m9c_yLgNfEhtT4QbH_noD5jJufI-M_iM1XPg-ElQ7vaH7XLnV7nhFj1Ac-M_u27qsvS_SpO6GZpNpz72_7BLyn2I"/>
<!-- Decorative Nodes -->
<div class="absolute top-[45%] left-[55%] w-4 h-4 bg-secondary rounded-full pulse-node neon-glow-blue border border-white"></div>
<div class="absolute top-[45%] left-[55%] -translate-x-1/2 -translate-y-1/2">
<div class="p-xs bg-surface/80 border border-secondary/40 backdrop-blur rounded text-[10px] font-code-snippet text-secondary whitespace-nowrap">
                                        ORIGIN: CAI_PRIMARY
                                    </div>
</div>
<!-- Connection lines (Simulated with CSS) -->
<div class="absolute top-[35%] left-[45%] w-32 h-px bg-gradient-to-r from-transparent via-secondary/50 to-transparent rotate-[30deg]"></div>
<div class="absolute top-[55%] left-[65%] w-48 h-px bg-gradient-to-r from-transparent via-tertiary/50 to-transparent -rotate-[15deg]"></div>
</div>
</div>
<!-- Technical Metadata Overlay -->
<div class="absolute bottom-lg left-lg space-y-xs">
<div class="flex gap-md font-code-snippet text-code-snippet text-outline">
<div class="flex items-center gap-xs">
<span class="w-2 h-2 rounded-full bg-secondary"></span>
                                    REGION: EGY_V2
                                </div>
<div class="flex items-center gap-xs">
<span class="w-2 h-2 rounded-full bg-tertiary"></span>
                                    LATENCY: 24ms
                                </div>
<div class="flex items-center gap-xs">
<span class="w-2 h-2 rounded-full bg-green-400"></span>
                                    EXPORT_STATUS: OPERATIONAL
                                </div>
</div>
</div>
<!-- Top Technical Overlay -->
<div class="absolute top-4 right-4 flex gap-xs">
<div class="glass-card px-sm py-1 rounded text-[10px] font-code-snippet text-on-surface-variant">SECURE_LINK: AES-256</div>
<div class="glass-card px-sm py-1 rounded text-[10px] font-code-snippet text-secondary">ENCRYPTED</div>
</div>
</div>
<!-- Mini Bento Dashboard Footer -->
<div class="grid grid-cols-3 gap-md">
<div class="glass-card p-md rounded-xl">
<div class="flex justify-between items-center mb-xs">
<span class="font-label-caps text-[10px] text-outline">London Hub</span>
<span class="material-symbols-outlined text-secondary text-sm">trending_up</span>
</div>
<div class="text-title-sm font-code-snippet text-on-surface">4.2TB/s</div>
</div>
<div class="glass-card p-md rounded-xl">
<div class="flex justify-between items-center mb-xs">
<span class="font-label-caps text-[10px] text-outline">NYC Terminal</span>
<span class="material-symbols-outlined text-tertiary text-sm">sync</span>
</div>
<div class="text-title-sm font-code-snippet text-on-surface">Active</div>
</div>
<div class="glass-card p-md rounded-xl">
<div class="flex justify-between items-center mb-xs">
<span class="font-label-caps text-[10px] text-outline">Dubai Node</span>
<span class="material-symbols-outlined text-green-400 text-sm">check_circle</span>
</div>
<div class="text-title-sm font-code-snippet text-on-surface">Synced</div>
</div>
</div>
</div>
</div>
</div>
</main>
<!-- Footer Section -->
<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;family=Geist:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-surface": "#e5e2e3",
                        "on-primary-fixed-variant": "#414658",
                        "tertiary-fixed": "#e9ddff",
                        "surface-container": "#201f21",
                        "surface-container-high": "#2a2a2b",
                        "outline": "#909097",
                        "on-tertiary-fixed-variant": "#5516be",
                        "on-surface-variant": "#c7c6cd",
                        "on-primary": "#2b3041",
                        "error-container": "#93000a",
                        "surface-tint": "#c1c5dc",
                        "on-tertiary": "#3c0091",
                        "on-secondary-fixed-variant": "#00429c",
                        "primary-fixed-dim": "#c1c5dc",
                        "secondary-fixed": "#d9e2ff",
                        "on-tertiary-container": "#8c5ef8",
                        "secondary-container": "#568dff",
                        "secondary-fixed-dim": "#b0c6ff",
                        "outline-variant": "#46464c",
                        "primary-fixed": "#dee1f9",
                        "on-primary-container": "#777c90",
                        "tertiary": "#d0bcff",
                        "on-error-container": "#ffdad6",
                        "on-background": "#e5e2e3",
                        "on-secondary": "#002d6f",
                        "error": "#ffb4ab",
                        "tertiary-fixed-dim": "#d0bcff",
                        "surface-container-low": "#1c1b1d",
                        "surface-dim": "#131315",
                        "on-tertiary-fixed": "#23005c",
                        "surface-container-highest": "#353436",
                        "primary-container": "#0b1020",
                        "on-secondary-fixed": "#001945",
                        "inverse-primary": "#595e71",
                        "surface": "#131315",
                        "surface-variant": "#353436",
                        "tertiary-container": "#160040",
                        "surface-bright": "#39393a",
                        "on-secondary-container": "#002661",
                        "inverse-on-surface": "#313032",
                        "primary": "#c1c5dc",
                        "inverse-surface": "#e5e2e3",
                        "background": "#131315",
                        "secondary": "#b0c6ff",
                        "on-primary-fixed": "#161b2b",
                        "on-error": "#690005",
                        "surface-container-lowest": "#0e0e0f"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "container-max": "1440px",
                        "xl": "4rem",
                        "gutter": "24px",
                        "xs": "0.5rem",
                        "sm": "1rem",
                        "md": "1.5rem",
                        "lg": "2rem",
                        "base": "4px"
                    },
                    "fontFamily": {
                        "display-lg-mobile": ["Geist"],
                        "body-md": ["Inter"],
                        "display-lg": ["Geist"],
                        "headline-md": ["Geist"],
                        "body-sm": ["Inter"],
                        "title-sm": ["Geist"],
                        "label-caps": ["Geist"],
                        "code-snippet": ["Geist"]
                    },
                    "fontSize": {
                        "display-lg-mobile": ["36px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "display-lg": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "headline-md": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}],
                        "body-sm": ["14px", {"lineHeight": "1.5", "fontWeight": "400"}],
                        "title-sm": ["18px", {"lineHeight": "1.4", "fontWeight": "600"}],
                        "label-caps": ["12px", {"lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "600"}],
                        "code-snippet": ["14px", {"lineHeight": "1.6", "fontWeight": "400"}]
                    }
                },
            },
        }
    </script>
<style>
        body {
            background-color: #0B1020;
            color: #E5E2E3;
            -webkit-font-smoothing: antialiased;
        }
        .config-card {
            border: 1px solid #353436;
            background: rgba(28, 27, 29, 0.6);
            backdrop-filter: blur(12px);
            transition: all 0.3s ease;
        }
        .config-card:hover {
            border-color: #b0c6ff;
            box-shadow: 0 0 30px rgba(176, 198, 255, 0.05);
        }
        .tech-gradient {
            background-image: 
                radial-gradient(at 0% 0%, rgba(86, 141, 255, 0.08) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(140, 94, 248, 0.08) 0px, transparent 50%),
                linear-gradient(to bottom, #0B1020, #0e0e0f);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 20;
        }
        .toggle-switch {
            width: 28px;
            height: 14px;
            background: #353436;
            border-radius: 99px;
            position: relative;
            cursor: pointer;
        }
        .toggle-switch::after {
            content: '';
            position: absolute;
            left: 2px;
            top: 2px;
            width: 10px;
            height: 10px;
            background: #909097;
            border-radius: 50%;
            transition: all 0.2s ease;
        }
        .toggle-active {
            background: rgba(176, 198, 255, 0.2) !important;
        }
        .toggle-active::after {
            background: #b0c6ff !important;
            transform: translateX(14px);
        }
    </style>
</head>
<body class="font-body-md text-body-md tech-gradient min-h-screen">
<main class="max-w-container-max mx-auto px-lg py-xl">
<!-- Section Header -->
<header class="mb-xl text-center md:text-left">
<div class="inline-flex items-center gap-sm mb-md px-sm py-xs bg-secondary/10 border border-secondary/20 rounded-full">
<span class="w-1.5 h-1.5 rounded-full bg-secondary animate-pulse shadow-[0_0_8px_rgba(176,198,255,0.8)]"></span>
<span class="font-label-caps text-[11px] text-secondary uppercase tracking-[0.2em]">Market Access Protocol v4.2</span>
</div>
<h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-white mb-md">
                Global Export Protocols
            </h1>
<p class="max-w-2xl text-on-surface-variant/80 font-body-md text-body-md leading-relaxed">
                Precision-engineered digital strategies to scale Egyptian business across international borders. Secure your position in the global trade network.
            </p>
</header>
<!-- Services Modular Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-md">
<!-- Service Card 1: Global Email Marketing -->
<section class="config-card rounded-lg p-lg flex flex-col group">
<div class="flex justify-between items-center mb-lg border-b border-outline-variant/30 pb-md">
<div class="flex items-center gap-sm">
<div class="w-10 h-10 flex items-center justify-center rounded bg-secondary/10 border border-secondary/20 text-secondary">
<span class="material-symbols-outlined text-[20px]">mail</span>
</div>
<div>
<h3 class="font-title-sm text-white">Global Email Marketing</h3>
<p class="font-code-snippet text-[11px] text-on-surface-variant/40 uppercase">MODULE_OUTREACH_EXP</p>
</div>
</div>
<div class="toggle-switch toggle-active" onclick="this.classList.toggle('toggle-active')"></div>
</div>
<div class="space-y-sm flex-grow">
<p class="font-body-sm text-on-surface-variant/70 mb-md">Automated outreach protocols to reach international buyers. High-deliverability trade infrastructure.</p>
<div class="flex items-center justify-between p-sm bg-surface-container-low border border-outline-variant/20 rounded hover:border-secondary/30 transition-colors">
<div class="flex items-center gap-sm">
<span class="font-code-snippet text-[10px] text-secondary">STATUS_ACTIVE</span>
<span class="font-body-sm text-on-surface-variant">EU Buyer Database</span>
</div>
<span class="material-symbols-outlined text-[16px] text-secondary">verified_user</span>
</div>
<div class="flex items-center justify-between p-sm bg-surface-container-low border border-outline-variant/20 rounded hover:border-secondary/30 transition-colors">
<div class="flex items-center gap-sm">
<span class="font-code-snippet text-[10px] text-secondary">STATUS_ACTIVE</span>
<span class="font-body-sm text-on-surface-variant">Automated Follow-ups</span>
</div>
<span class="material-symbols-outlined text-[16px] text-secondary">sync</span>
</div>
</div>
<div class="mt-lg pt-md border-t border-outline-variant/30 flex items-center justify-between">
<span class="font-label-caps text-[10px] text-on-surface-variant/40 uppercase">Market Reach</span>
<div class="flex gap-1">
<div class="w-3 h-1.5 bg-secondary"></div>
<div class="w-3 h-1.5 bg-secondary"></div>
<div class="w-3 h-1.5 bg-secondary"></div>
<div class="w-3 h-1.5 bg-secondary/20"></div>
</div>
</div>
</section>
<!-- Service Card 2: Precision SEO -->
<section class="config-card rounded-lg p-lg flex flex-col group">
<div class="flex justify-between items-center mb-lg border-b border-outline-variant/30 pb-md">
<div class="flex items-center gap-sm">
<div class="w-10 h-10 flex items-center justify-center rounded bg-tertiary-container/20 border border-tertiary/20 text-tertiary">
<span class="material-symbols-outlined text-[20px]">language</span>
</div>
<div>
<h3 class="font-title-sm text-white">Precision SEO</h3>
<p class="font-code-snippet text-[11px] text-on-surface-variant/40 uppercase">MODULE_MARKET_ACCESS</p>
</div>
</div>
<div class="toggle-switch toggle-active" onclick="this.classList.toggle('toggle-active')"></div>
</div>
<div class="space-y-sm flex-grow">
<p class="font-body-sm text-on-surface-variant/70 mb-md">Dominating search results in global markets. Localized optimization for European, US, and Gulf regions.</p>
<div class="flex items-center justify-between p-sm bg-surface-container-low border border-outline-variant/20 rounded hover:border-tertiary/30 transition-colors">
<div class="flex items-center gap-sm">
<span class="font-code-snippet text-[10px] text-tertiary">STATUS_ACTIVE</span>
<span class="font-body-sm text-on-surface-variant">Gulf Region Visibility</span>
</div>
<span class="material-symbols-outlined text-[16px] text-tertiary">trending_up</span>
</div>
<div class="flex items-center justify-between p-sm bg-surface-container-low border border-outline-variant/20 rounded hover:border-tertiary/30 transition-colors">
<div class="flex items-center gap-sm">
<span class="font-code-snippet text-[10px] text-tertiary">STATUS_ACTIVE</span>
<span class="font-body-sm text-on-surface-variant">Multi-Language Indexing</span>
</div>
<span class="material-symbols-outlined text-[16px] text-tertiary">translate</span>
</div>
</div>
<div class="mt-lg pt-md border-t border-outline-variant/30 flex items-center justify-between">
<span class="font-label-caps text-[10px] text-on-surface-variant/40 uppercase">Growth Potential</span>
<div class="flex gap-1">
<div class="w-3 h-1.5 bg-tertiary"></div>
<div class="w-3 h-1.5 bg-tertiary"></div>
<div class="w-3 h-1.5 bg-tertiary/20"></div>
<div class="w-3 h-1.5 bg-tertiary/20"></div>
</div>
</div>
</section>
<!-- Service Card 3: Google Ads Optimization -->
<section class="config-card rounded-lg p-lg flex flex-col group">
<div class="flex justify-between items-center mb-lg border-b border-outline-variant/30 pb-md">
<div class="flex items-center gap-sm">
<div class="w-10 h-10 flex items-center justify-center rounded bg-secondary/10 border border-secondary/20 text-secondary">
<span class="material-symbols-outlined text-[20px]">ads_click</span>
</div>
<div>
<h3 class="font-title-sm text-white">Google Ads Optimization</h3>
<p class="font-code-snippet text-[11px] text-on-surface-variant/40 uppercase">MODULE_EXPORT_SCALE</p>
</div>
</div>
<div class="toggle-switch toggle-active" onclick="this.classList.toggle('toggle-active')"></div>
</div>
<div class="space-y-sm flex-grow">
<p class="font-body-sm text-on-surface-variant/70 mb-md">Targeted visibility at the point of intent. High-conversion lead routing for international export contracts.</p>
<div class="flex items-center justify-between p-sm bg-surface-container-low border border-outline-variant/20 rounded hover:border-secondary/30 transition-colors">
<div class="flex items-center gap-sm">
<span class="font-code-snippet text-[10px] text-secondary">STATUS_ACTIVE</span>
<span class="font-body-sm text-on-surface-variant">B2B Intent Targeting</span>
</div>
<span class="material-symbols-outlined text-[16px] text-secondary">radar</span>
</div>
<div class="flex items-center justify-between p-sm bg-surface-container-low border border-outline-variant/20 rounded hover:border-secondary/30 transition-colors">
<div class="flex items-center gap-sm">
<span class="font-code-snippet text-[10px] text-secondary">STATUS_ACTIVE</span>
<span class="font-body-sm text-on-surface-variant">Conversion Optimization</span>
</div>
<span class="material-symbols-outlined text-[16px] text-secondary">bolt</span>
</div>
</div>
<div class="mt-lg pt-md border-t border-outline-variant/30 flex items-center justify-between">
<span class="font-label-caps text-[10px] text-on-surface-variant/40 uppercase">Market Reach</span>
<div class="flex gap-1">
<div class="w-3 h-1.5 bg-secondary"></div>
<div class="w-3 h-1.5 bg-secondary"></div>
<div class="w-3 h-1.5 bg-secondary"></div>
<div class="w-3 h-1.5 bg-secondary"></div>
</div>
</div>
</section>
<!-- Service Card 4: Trade Intelligence -->
<section class="config-card rounded-lg p-lg flex flex-col group">
<div class="flex justify-between items-center mb-lg border-b border-outline-variant/30 pb-md">
<div class="flex items-center gap-sm">
<div class="w-10 h-10 flex items-center justify-center rounded bg-tertiary-container/20 border border-tertiary/20 text-tertiary">
<span class="material-symbols-outlined text-[20px]">query_stats</span>
</div>
<div>
<h3 class="font-title-sm text-white">Export Scale Analytics</h3>
<p class="font-code-snippet text-[11px] text-on-surface-variant/40 uppercase">MODULE_TRADE_PROTOCOLS</p>
</div>
</div>
<div class="toggle-switch toggle-active" onclick="this.classList.toggle('toggle-active')"></div>
</div>
<div class="space-y-sm flex-grow">
<p class="font-body-sm text-on-surface-variant/70 mb-md">Real-time monitoring of your global trade funnel. Track market access metrics and buyer engagement nodes.</p>
<div class="flex items-center justify-between p-sm bg-surface-container-low border border-outline-variant/20 rounded hover:border-tertiary/30 transition-colors">
<div class="flex items-center gap-sm">
<span class="font-code-snippet text-[10px] text-tertiary">STATUS_ACTIVE</span>
<span class="font-body-sm text-on-surface-variant">Global Lead Tracking</span>
</div>
<span class="material-symbols-outlined text-[16px] text-tertiary">monitoring</span>
</div>
<div class="flex items-center justify-between p-sm bg-surface-container-low border border-outline-variant/20 rounded hover:border-tertiary/30 transition-colors">
<div class="flex items-center gap-sm">
<span class="font-code-snippet text-[10px] text-tertiary">STATUS_ACTIVE</span>
<span class="font-body-sm text-on-surface-variant">Contract Lifecycle Data</span>
</div>
<span class="material-symbols-outlined text-[16px] text-tertiary">description</span>
</div>
</div>
<div class="mt-lg pt-md border-t border-outline-variant/30 flex items-center justify-between">
<span class="font-label-caps text-[10px] text-on-surface-variant/40 uppercase">Growth Potential</span>
<div class="flex gap-1">
<div class="w-3 h-1.5 bg-tertiary"></div>
<div class="w-3 h-1.5 bg-tertiary"></div>
<div class="w-3 h-1.5 bg-tertiary"></div>
<div class="w-3 h-1.5 bg-tertiary/20"></div>
</div>
</div>
</section>
</div>
<!-- Footer -->
<footer class="mt-xl flex flex-col md:flex-row items-center justify-between gap-md border-t border-white/5 pt-lg">
<div class="flex items-center gap-lg">
<div class="flex flex-col">
<span class="font-label-caps text-[10px] text-on-surface-variant/40 mb-1">LATENCY</span>
<span class="font-code-snippet text-code-snippet text-secondary">24ms</span>
</div>
<div class="flex flex-col border-l border-white/10 pl-lg">
<span class="font-label-caps text-[10px] text-on-surface-variant/40 mb-1">EXPORT_STATUS</span>
<span class="font-code-snippet text-code-snippet text-tertiary">OPERATIONAL</span>
</div>
</div>
<button class="px-lg py-md bg-secondary text-on-secondary rounded-lg font-label-caps tracking-widest hover:bg-secondary/90 transition-all active:scale-95 shadow-[0_0_20px_rgba(176,198,255,0.4)]">
                Initialize Export Growth
            </button>
</footer>
</main>


<script>
        // Simple interactive effect for nodes
        document.querySelectorAll('.glass-card').forEach(card => {
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