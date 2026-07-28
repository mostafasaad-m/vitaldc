<?php 
/**
*
* Template Name: Jana Fresh
*
*/
?>


<!DOCTYPE html>

<html class="scroll-smooth" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Jana Fresh | Premium Global Agriculture</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;family=Geist:wght@300;400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "tertiary": "#000000",
                        "surface-container-high": "#ece7e7",
                        "on-secondary-container": "#633300",
                        "primary-fixed-dim": "#afceba",
                        "surface-container": "#f1edec",
                        "primary-fixed": "#cbead5",
                        "primary-container": "#00190d",
                        "surface-container-lowest": "#ffffff",
                        "on-background": "#1c1b1b",
                        "on-secondary-fixed-variant": "#6d3900",
                        "glass-white": "rgba(255, 255, 255, 0.03)",
                        "secondary-fixed-dim": "#ffb77c",
                        "surface": "#fcf9f8",
                        "inverse-primary": "#afceba",
                        "on-secondary": "#ffffff",
                        "inverse-on-surface": "#f4f0ef",
                        "outline": "#727973",
                        "tertiary-container": "#1c1c18",
                        "outline-variant": "#c1c8c2",
                        "on-tertiary-fixed": "#1c1c18",
                        "tertiary-fixed-dim": "#c9c6bf",
                        "on-tertiary-fixed-variant": "#484742",
                        "on-primary": "#ffffff",
                        "on-error": "#ffffff",
                        "tertiary-fixed": "#e5e2db",
                        "on-primary-container": "#6e8a79",
                        "on-surface-variant": "#414843",
                        "error": "#ba1a1a",
                        "surface-container-highest": "#e6e1e1",
                        "surface-dim": "#ddd9d8",
                        "on-tertiary": "#ffffff",
                        "error-container": "#ffdad6",
                        "on-primary-fixed": "#052014",
                        "surface-bright": "#fdf8f8",
                        "on-error-container": "#93000a",
                        "secondary": "#904d00",
                        "background": "#fdf8f8",
                        "primary": "#00190d",
                        "secondary-fixed": "#ffdcc2",
                        "on-primary-fixed-variant": "#324c3d",
                        "on-secondary-fixed": "#2e1500",
                        "inverse-surface": "#313030",
                        "surface-tint": "#496454",
                        "on-surface": "#1c1b1b",
                        "surface-variant": "#e6e1e1",
                        "surface-container-low": "#f7f2f2",
                        "secondary-container": "#fe8f14",
                        "on-tertiary-container": "#85847e"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "gutter": "32px",
                        "margin-mobile": "24px",
                        "stack-lg": "120px",
                        "container-max": "1440px",
                        "stack-sm": "32px",
                        "unit": "8px",
                        "stack-md": "64px",
                        "margin-tablet": "40px",
                        "margin-desktop": "80px"
                    },
                    "fontFamily": {
                        "display-lg-mobile": ["Inter"],
                        "body-lg": ["Inter"],
                        "headline-lg": ["Inter"],
                        "label-md": ["Geist"],
                        "display-lg": ["Inter"],
                        "label-sm": ["Geist"],
                        "body-md": ["Inter"],
                        "headline-md": ["Inter"]
                    },
                    "fontSize": {
                        "display-lg-mobile": ["40px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "600"}],
                        "body-lg": ["20px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "headline-lg": ["48px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "500"}],
                        "label-md": ["14px", {"lineHeight": "1.4", "letterSpacing": "0.05em", "fontWeight": "500"}],
                        "display-lg": ["72px", {"lineHeight": "1.1", "letterSpacing": "-0.04em", "fontWeight": "600"}],
                        "label-sm": ["12px", {"lineHeight": "1.4", "letterSpacing": "0.1em", "fontWeight": "600"}],
                        "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "headline-md": ["32px", {"lineHeight": "1.3", "fontWeight": "500"}]
                    }
                },
            },
        }
    </script>
<style>

.header-section{margin-top:80px;}
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .text-stroke {
            -webkit-text-stroke: 1px rgba(255, 255, 255, 0.3);
            color: transparent;
        }
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        
        .custom-scrollbar::-webkit-scrollbar { height: 6px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: #f1edec; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #496454; border-radius: 10px; }

        .quality-card-gradient {
            background: linear-gradient(180deg, rgba(255,255,255,0) 0%, rgba(0,0,0,0.8) 100%);
        }
    </style>
</head>


<body class="body bg-surface text-on-surface font-body-md selection:bg-secondary-container selection:text-on-secondary-container">
<!-- TopNavBar -->

<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 bg-surface/80 backdrop-blur-md shadow-sm border-b border-outline-variant/30">
<div class="flex justify-between items-center px-margin-desktop py-4 max-w-container-max mx-auto">
<div class="cursor-pointer transition-all duration-200 active:scale-95">
<img alt="JANA FRESH" class="h-10 w-auto object-contain" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCn8kBDd576Ww8axOYFh8cgq_meB4uyzhye4Xpo9xDdOfi_i4laA-bE8eZzZQ_VOSI74-sZhsfeDPdgl1v5Fnc6gT2GOLOwWSDkv9SdvIvF-QJEtva5Mxyk0yjovtQKczj25La1k8ukwuvSRc-jZDEAeL5xCyVgpuRItMSx9HChCqGLeQAeNyMauM1mrdohrTG43DarTjFW3TsAm4G4o4MW773hfLFYlFBJDJolL1rCfzNUWLDpxi4sUyp21l6WDIIMySDaaVRc-wj_"/>
</div>
<div class="hidden md:flex items-center gap-gutter">
<a class="font-label-md text-label-md text-primary font-bold border-b-2 border-primary pb-1 transition-all duration-200" href="#">Products</a>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-opacity duration-300" href="#">Quality</a>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-opacity duration-300" href="#">Logistics</a>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-opacity duration-300" href="#">Global Reach</a>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-opacity duration-300" href="#">Sustainability</a>
</div>
<a href="/quotation">  <button class="bg-primary text-on-primary px-6 py-3 rounded font-label-md text-label-md hover:opacity-90 transition-opacity duration-300 active:scale-95">
            Request a Quote
        </button></a>
</div>
</nav>
<!-- Section 1: Hero -->
<header class="header-section relative h-screen w-full flex items-center overflow-hidden bg-primary">
<div class="absolute inset-0 z-0">
<img class="w-full h-full object-cover opacity-60 scale-105 animate-[pulse_10s_infinite_alternate]" data-alt="A cinematic, high-angle wide shot of a vast, lush green citrus grove in Egypt during the golden hour." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAs0Kqts984sFapM2hqttXe-ScRm6G4TGbZPLJ-AuWJiwFs-8RVegnEPD4anlwR2wFRfDnhoYbk94MpBjaGxXek1nwK0S8uXY_k6ML4gHrCELb_Hrd8LHVN8mhjzcJ8Q7FYzSLsRrJbzU8df_ewYmYIe8Pp1JchnebARBFkovPn4cWp-ovxUTjoO_NIxERWEG7tvu7A6YgVRuoAQU5RESRrmo4XZ39vfk9zigPLXNaKHWdOC8QOjzzR0-gt-bjx7AM9rKjuFLV8S3wd"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary via-primary/20 to-transparent"></div>
</div>
<div class="relative z-10 px-margin-desktop max-w-container-max mx-auto w-full grid grid-cols-12 gap-gutter">
<div class="col-span-12 lg:col-span-8">
<span class="inline-block px-4 py-1 mb-stack-sm border border-secondary-container text-secondary-container font-label-sm text-label-sm rounded-full">
                GLOBAL AGRICULTURE LEADER
            </span>
<h1 class="font-display-lg text-display-lg text-white mb-stack-sm leading-[1.05]">
                From Egyptian Farms to <br/><span class="text-stroke" >Global Markets</span>
</h1>
<p class="font-body-lg text-body-lg text-white/80 max-w-2xl mb-stack-md">
                Premium fresh produce powered by technology, traceability, and uncompromising quality standards for the world's most demanding retailers.
            </p>
<div class="flex flex-wrap gap-4">
<button class="bg-secondary-container text-on-secondary-container px-8 py-4 font-label-md text-label-md rounded flex items-center gap-2 hover:brightness-110 transition-all active:scale-95">
                    Explore Products <span class="material-symbols-outlined">arrow_forward</span>
</button>
<button class="bg-white/10 backdrop-blur-md text-white border border-white/20 px-8 py-4 font-label-md text-label-md rounded hover:bg-white/20 transition-all active:scale-95">
                    Request a Quote
                </button>
</div>
</div>
<div class="col-span-12 mt-stack-md grid grid-cols-2 lg:grid-cols-4 gap-gutter border-t border-white/10 pt-stack-sm">
<div class="counter-item">
<p class="font-display-lg-mobile text-display-lg-mobile text-secondary-container font-bold" data-target="50">50+</p>
<p class="font-label-sm text-label-sm text-white/60">Countries Served</p>
</div>
<div class="counter-item">
<p class="font-display-lg-mobile text-display-lg-mobile text-secondary-container font-bold" data-target="350">350</p>
<p class="font-label-sm text-label-sm text-white/60">Tons Daily Capacity</p>
</div>
<div class="counter-item">
<p class="font-display-lg-mobile text-display-lg-mobile text-secondary-container font-bold" data-target="22000">22,000</p>
<p class="font-label-sm text-label-sm text-white/60">m² Facility Area</p>
</div>
<div class="counter-item">
<p class="font-display-lg-mobile text-display-lg-mobile text-secondary-container font-bold" data-target="3800">3,800+</p>
<p class="font-label-sm text-label-sm text-white/60">Pallet Storage</p>
</div>
</div>
</div>
</header><!-- Section 2: Our Story -->
<section class="py-stack-lg bg-surface">
<div class="max-w-container-max mx-auto px-margin-desktop">
<div class="grid grid-cols-12 gap-gutter items-center">
<div class="col-span-12 lg:col-span-6 order-2 lg:order-1">
<div class="relative group">
<img class="w-full aspect-[4/5] object-cover rounded" data-alt="Sophisticated close-up of premium Egyptian vegetables" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCJDftifz1vvInE-mdnSEKPcGgk6QxhDfCNdfVdSweJXyfiSs5VNDhD9F_VdznPv9hF0S_-rpNbB5icUBYS2l59O-hS1iN7u9qNY5pYDJ8B-1deD7ZM5lazhzKZUDQwz14Shf7uv0iRgusRzWUmNKfjMwhQuioMn93vQeO4yN-lBBt4cNulLIuVBJsFDjlTsjH6U9nsEBGhvgVx9dBOv7afiprEe9vYLoZZdEHAAXrKsomz_cXLofjG6m4KKmTxeYeHZM2AxSKjz70A"/>
<div class="absolute -bottom-10 -right-10 bg-primary p-12 hidden lg:block shadow-2xl">
<p class="text-white font-display-lg text-4xl mb-2">Est. 2011</p>
<p class="text-primary-fixed font-label-sm text-label-sm">A DECADE OF EXCELLENCE</p>
</div>
</div>
</div>
<div class="col-span-12 lg:col-span-5 lg:col-start-8 order-1 lg:order-2 mb-stack-md lg:mb-0">
<h2 class="font-label-sm text-label-sm text-secondary mb-4">OUR LEGACY</h2>
<h3 class="font-display-lg-mobile text-display-lg-mobile lg:font-headline-lg lg:text-headline-lg text-primary mb-stack-sm leading-tight">
                    Raised in agriculture. <br/>Driven by innovation.
                </h3>
<p class="font-body-lg text-body-lg text-on-surface-variant mb-stack-sm">
                    Since 2011, Jana Fresh has bridged the gap between Egypt's fertile soil and the world's most discerning tables. We don't just export produce; we export a commitment to precision.
                </p>
<p class="font-body-md text-body-md text-on-surface-variant opacity-70 mb-stack-md">
                    What started as a family vision has evolved into a global powerhouse, utilizing the latest European technology and rigid food safety protocols to ensure that every piece of fruit meets our 'zero-defect' philosophy.
                </p>
<a class="inline-flex items-center gap-2 font-label-md text-label-md text-primary font-bold group" href="#">
                    LEARN ABOUT OUR ROOTS 
                    <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>
</div>
</div>
</section>
<!-- Section 3: Elevated Quality Protocol (Horizontal Immersive) -->
<section class="py-stack-lg bg-surface-container overflow-hidden">
<div class="max-w-container-max mx-auto px-margin-desktop mb-stack-md">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
<div class="max-w-2xl">
<h2 class="font-headline-lg text-headline-lg text-primary mb-4">Quality Begins Long Before Packing</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant">Our rigorous 7-stage quality protocol starts at the root, ensuring total traceability and excellence through precision technology.</p>
</div>
<div class="hidden md:flex gap-2">
<button class="w-12 h-12 rounded-full border border-primary/30 flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all active:scale-95" id="protocol-prev">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<button class="w-12 h-12 rounded-full border border-primary/30 flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all active:scale-95" id="protocol-next">
<span class="material-symbols-outlined">chevron_right</span>
</button>
</div>
</div>
</div>
<div class="relative">
<div class="flex overflow-x-auto custom-scrollbar gap-8 px-margin-desktop pb-stack-sm snap-x snap-mandatory" id="protocol-scroll">
<!-- Stage 1 -->
<div class="flex-none w-[340px] md:w-[420px] snap-start group">
<div class="relative aspect-[3/4] overflow-hidden rounded-xl bg-surface-dim">
<img alt="Farm Prep" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDxin4-Y-5kc8vuUnLIgh07-R1-C70mxcxhZjZlPZL7aHP4ZkmyOtHXP1rXAugbg-itXbgLjNW5Tw2MHjiTtjSH-McwXG5lnvHM5MnUf3-t15dSmycc-dHNY2kFP0rlhYD6-mN1DzxZR_bPj2OVqRvHo2jccP7ZtFrSZwp-TJEum-naoib3gAK6dPwKGkAPRIVHxKaQIwz9K1OLsz5NLioSSRHnaFpaQuUPy5vls6nii0y6JgZAXm9vlH01-5TJ8SXakuNrnQyZS0PE"/>
<div class="absolute inset-0 quality-card-gradient flex flex-col justify-end p-8">
<span class="font-display-lg text-white/20 text-6xl mb-4">01</span>
<h4 class="font-headline-md text-white mb-2">Farm Prep</h4>
<p class="font-body-md text-white/70">Soil analysis, water purity testing, and elite seed selection for premium yields.</p>
</div>
</div>
</div>
<!-- Stage 2 -->
<div class="flex-none w-[340px] md:w-[420px] snap-start group">
<div class="relative aspect-[3/4] overflow-hidden rounded-xl bg-surface-dim">
<img alt="Harvest" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBJ6eKh8Nl5rgF5Muq2b8Yg5RnCJsu-12JyHBvTKHZ5svy1faCeTtgoj6XYXSlRqat7DaiyCGe4qN8FgQaDBuGnE92skPneO0SYPFYgnysSM2tbHB9tCvQTcx6jW1GT1U8U20gVyqOXABehXC3oO4_BFCkJuxFlWhJEiyEMMS6Si4b0cOX3voG6Ba_nNvkk9M_A74vK4GBwkKomgdVT2hTs6l8mOkj07Tyqht07fQ_P_pXj810pgqAN6h0QdIPGqM5d8H-NKvsyqFoZ"/>
<div class="absolute inset-0 quality-card-gradient flex flex-col justify-end p-8">
<span class="font-display-lg text-white/20 text-6xl mb-4">02</span>
<h4 class="font-headline-md text-white mb-2">Harvest</h4>
<p class="font-body-md text-white/70">Timed precisely by Brix levels and acidity ratios to guarantee peak flavor profile.</p>
</div>
</div>
</div>
<!-- Stage 3 -->
<div class="flex-none w-[340px] md:w-[420px] snap-start group">
<div class="relative aspect-[3/4] overflow-hidden rounded-xl bg-surface-dim">
<img alt="Collection" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC8vUMc6R21Ha51cBotTz43D3h1eL8e_Bk7NdBLMo3oQFXShQ_ETeqrAFv_HcACG4KH-kIvuEkOxg6_8NkoMMC9NG1Fq2buVln8u31HgFGeExwbJBdFBgA7arMsklMGxqmPqFlk3PtYgaluW8UXa1IbHUrP-uLaatv623gdAKMwPR7W6viu2_NrK7wuGXrRzigKQoMZNtaZKK3HCXecb0743CDm0pxhdEyGCcEut_FB-fFOObNtVpJSe-loFBUfDb575ATFadNcDkis"/>
<div class="absolute inset-0 quality-card-gradient flex flex-col justify-end p-8">
<span class="font-display-lg text-white/20 text-6xl mb-4">03</span>
<h4 class="font-headline-md text-white mb-2">Collection</h4>
<p class="font-body-md text-white/70">Secure field-to-packing transport in record time to maintain cellular integrity.</p>
</div>
</div>
</div>
<!-- Stage 4 -->
<div class="flex-none w-[340px] md:w-[420px] snap-start group">
<div class="relative aspect-[3/4] overflow-hidden rounded-xl bg-surface-dim">
<img alt="Transport" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCwKKaVaQxZNtBia4wHlNkhmthCiZw4eJexaQqhJS3XGOPtElBwwqhD6qzWOPTpmp4nwrLqbY9fyivOtfzOlqQq4LY6QCNYqdM9MgsnbqfGL-g7xrEDI-WT7mHhKolUJrTU57VOA7cfATWB3d0_OFZM-T_LGzzv_vsIFlaKSGhaBCPvLmSCUe_DBlwxzV8zyHTPr3ofRF99X61gnWDXw13NEbH9dYBFgxFLXgIFIjfVfwG80Q_BsKzOQjug2JfNiJumaMTQVxpBzvtg"/>
<div class="absolute inset-0 quality-card-gradient flex flex-col justify-end p-8">
<span class="font-display-lg text-white/20 text-6xl mb-4">04</span>
<h4 class="font-headline-md text-white mb-2">Transport</h4>
<p class="font-body-md text-white/70">Climate-controlled logistics with IoT real-time monitoring of oxygen and humidity.</p>
</div>
</div>
</div>
<!-- Stage 5 -->
<div class="flex-none w-[340px] md:w-[420px] snap-start group">
<div class="relative aspect-[3/4] overflow-hidden rounded-xl bg-surface-dim">
<img alt="Packing" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDQ_UkLya-xadrXTbmUC-IZnBE2csECJLo-5xH93Y5xfXXMQI8pgCcYWjEyk0IWh_J18kXhZ3Qhaou1Vao9M8o9l4D-MIT1s1wfVdSLjuoYl9ikN-eguQ_N6XNcRRqqM8Br39yu5RaKcl1e_KHFHnnDf6oGYvv0PYgyBGFP_F5UHoal7_vDJ4BOZJV2CMO_a16ByUx1hN3Nwc-5tasE4AWd7xdp_5Hj-g9DOUTUOTrKfIPCrGs76o79oTosqP029d7McSp-TzzAANuW"/>
<div class="absolute inset-0 quality-card-gradient flex flex-col justify-end p-8">
<span class="font-display-lg text-white/20 text-6xl mb-4">05</span>
<h4 class="font-headline-md text-white mb-2">Packing</h4>
<p class="font-body-md text-white/70">Automated, gentle handling systems that prevent bruising and ensure uniformity.</p>
</div>
</div>
</div>
<!-- Stage 6 -->
<div class="flex-none w-[340px] md:w-[420px] snap-start group">
<div class="relative aspect-[3/4] overflow-hidden rounded-xl bg-surface-dim">
<img alt="Storage" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAKKiZdS1eGRC9reQUOV2BcJhL7JA5B8adR4phjACif-4h3Y4r8B-ccnjEcZYIWUYS8Pm_K6rt2NLrhWLfTGmg9n4LuD2Lpz-Fw5wVvbJ2bhWo38jc1I48KoCY6lFT3Mhw-adzsY_FDrUmlCJ0ROwEO8ew-QAEEmF2UxTKwvwIPUE8YoobEHQNVLxQWaSQbmj6XNmIUvI1rsuhc0zJPaHDyp91TEfZwjwYBD-slAhr7Gdtae2BE_X6qghicRaM7PTCQRBMil5daTB3Q"/>
<div class="absolute inset-0 quality-card-gradient flex flex-col justify-end p-8">
<span class="font-display-lg text-white/20 text-6xl mb-4">06</span>
<h4 class="font-headline-md text-white mb-2">Storage</h4>
<p class="font-body-md text-white/70">Ultra-low oxygen cold rooms that pause the ripening process without chemicals.</p>
</div>
</div>
</div>
<!-- Stage 7 -->
<div class="flex-none w-[340px] md:w-[420px] snap-start group">
<div class="relative aspect-[3/4] overflow-hidden rounded-xl bg-surface-dim">
<img alt="Export" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCQcXyaOT5YyOb0uhojCqv4rtDhpooOkbrshC38JL-M5DnfK03fcelESCb9OSwE_R72b1RqeaRjAubnBqXEpN5fNVqhKjVbCElhCoO3z20Zo7gJ7hmVdQY3pVeN42MqJyYRhVQpRyNiHCU9LJ520y2vO7KSKam3dZ_X821bTimEtffStOtOd9A9I31ba89-_pSzawEwDsgGwLuTP3A9zZKek1sW6FKeZ6WsnTnJH2G7GimNn_1JbxhOW11eBVFkPiLGc0o-5gMIHf5j"/>
<div class="absolute inset-0 quality-card-gradient flex flex-col justify-end p-8">
<span class="font-display-lg text-white/20 text-6xl mb-4">07</span>
<h4 class="font-headline-md text-white mb-2">Export</h4>
<p class="font-body-md text-white/70">Global reach spanning 50+ countries with optimized shipping lanes.</p>
</div>
</div>
</div>
</div>
<!-- Progress Bar -->
<div class="max-w-container-max mx-auto px-margin-desktop mt-8">
<div class="h-1 w-full bg-outline-variant/30 rounded-full overflow-hidden">
<div class="h-full bg-primary w-1/7 transition-all duration-300" id="protocol-progress"></div>
</div>
</div>
</div>
</section>
<!-- Section 4: Advanced Tech (Dark Mode Focus) -->
<section class="py-stack-lg bg-primary-container relative overflow-hidden">
<div class="absolute top-0 right-0 w-1/2 h-full opacity-20 pointer-events-none">
<img class="w-full h-full object-cover" data-alt="Advanced automated sorting line for citrus fruits" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCskzvl7gZIjZLXkXQF4di6GG-W1Bp7MdzTBlOV8tsLq4yGub0C9OiBwxycvGhKSGu59sXRsBMhxiCSTfO5coK5e8jCuTCtqWKqmOgrfm33lLM8tXStjuT8I7pgy3QnO0bCJxtm3JyZOEi7kfoLZQipHOKgrJmxJAI6Qlk9KeyWlBDGOQdfFi8ql_fHhEL5UhYqTMJxMVtN6Y1cYgRRueaqFdir_eLpFp-mINevsAInCL_48vw8Is-7Z9VolvhRQpm9-lw4GYzEaS3e"/>
</div>
<div class="max-w-container-max mx-auto px-margin-desktop relative z-10">
<div class="grid grid-cols-12 gap-gutter">
<div class="col-span-12 lg:col-span-6">
<h2 class="font-label-sm text-label-sm text-secondary-container mb-4">TECHNOLOGICAL SUPERIORITY</h2>
<h3 class="font-headline-lg text-headline-lg text-white mb-stack-sm leading-tight">
                    Precision Grading.<br/>Consistent Results.
                </h3>
<div class="space-y-6">
<div class="glass-card p-6 rounded flex items-start gap-4">
<div class="text-secondary-container">
<span class="material-symbols-outlined text-4xl" data-weight="fill">camera</span>
</div>
<div>
<h4 class="font-body-lg text-white mb-1">9-Camera Optical System</h4>
<p class="font-body-md text-on-primary-container">Every single fruit is scanned by 9 high-resolution cameras at high speed for 360-degree surface inspection.</p>
</div>
</div>
<div class="glass-card p-6 rounded flex items-start gap-4">
<div class="text-secondary-container">
<span class="material-symbols-outlined text-4xl" data-weight="fill">psychology</span>
</div>
<div>
<h4 class="font-body-lg text-white mb-1">AI-Defect Detection</h4>
<p class="font-body-md text-on-primary-container">Machine learning algorithms identify skin blemishes, shape irregularities, and internal decay invisible to the human eye.</p>
</div>
</div>
<div class="glass-card p-6 rounded flex items-start gap-4">
<div class="text-secondary-container">
<span class="material-symbols-outlined text-4xl" data-weight="fill">equalizer</span>
</div>
<div>
<h4 class="font-body-lg text-white mb-1">Density &amp; Brix Analysis</h4>
<p class="font-body-md text-on-primary-container">Non-invasive sensors measure internal sweetness and juice content, ensuring batch uniformity.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Section 5: The Quality Journey (Horizontal Scroll Upgrade) -->
<section class="py-stack-lg bg-surface">
<div class="max-w-container-max mx-auto px-margin-desktop mb-stack-md">
<h2 class="font-headline-lg text-headline-lg text-primary">The Quality Journey</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant">Tracing the 11 critical touchpoints of every product.</p>
</div>
<div class="flex overflow-x-auto custom-scrollbar gap-gutter px-margin-desktop pb-stack-sm snap-x snap-mandatory">
<!-- Journey Cards -->
<div class="flex-none w-[320px] snap-start">
<div class="relative bg-surface-container-low h-[450px] flex flex-col justify-end border-t-4 border-secondary shadow-sm hover:shadow-md transition-shadow overflow-hidden group">
<img alt="Harvesting" class="absolute inset-0 w-full h-full object-cover opacity-10 group-hover:opacity-20 group-hover:scale-105 transition-all duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAerCjzb6jqup6z9Ma192fJSuhelNAEZYvhA8wJFYWf-VXiIx5DrpqhsAp6q8xkUgVo2aKdXQSuRFkrVMopT1oOC882A1O5CgEjT9VQ2Rr3uYZIfT0zbfADOdwUglIDu1Fc3G6uuYynrQh8J-FHCHrtQ9JVlDTbh4RlVROFLVmZY30mnBJZ1jrAHbPe96p_iMqOTpZEWVT0VUWz5YVqBhysgDD4MAIdIqE7_rE7TyON74awM535GPHSjgIHuH5Xwpl9k9Em8G0RPA-6?crop=0,0,512,512"/>
<div class="p-10 relative z-10 bg-gradient-to-t from-surface-container-low via-surface-container-low/80 to-transparent">
<span class="font-display-lg text-primary/10 text-7xl absolute top-4 left-4">01</span>
<h4 class="font-headline-md text-primary mb-3">Harvest</h4>
<p class="font-body-md text-on-surface-variant">Hand-picked by trained specialists during peak ripeness windows for optimal structural integrity.</p>
</div>
</div>
</div>
<div class="flex-none w-[320px] snap-start">
<div class="relative bg-surface-container-low h-[450px] flex flex-col justify-end border-t-4 border-primary shadow-sm group overflow-hidden">
<img alt="Inspection" class="absolute inset-0 w-full h-full object-cover opacity-10 group-hover:opacity-20 transition-all duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAerCjzb6jqup6z9Ma192fJSuhelNAEZYvhA8wJFYWf-VXiIx5DrpqhsAp6q8xkUgVo2aKdXQSuRFkrVMopT1oOC882A1O5CgEjT9VQ2Rr3uYZIfT0zbfADOdwUglIDu1Fc3G6uuYynrQh8J-FHCHrtQ9JVlDTbh4RlVROFLVmZY30mnBJZ1jrAHbPe96p_iMqOTpZEWVT0VUWz5YVqBhysgDD4MAIdIqE7_rE7TyON74awM535GPHSjgIHuH5Xwpl9k9Em8G0RPA-6?crop=512,0,1024,512"/>
<div class="p-10 relative z-10 bg-gradient-to-t from-surface-container-low via-surface-container-low/80 to-transparent">
<span class="font-display-lg text-primary/10 text-7xl absolute top-4 left-4">02</span>
<h4 class="font-headline-md text-primary mb-3">Inspection</h4>
<p class="font-body-md text-on-surface-variant">Immediate field-level quality assessment and individual tagging for full lot traceability.</p>
</div>
</div>
</div>
<div class="flex-none w-[320px] snap-start">
<div class="relative bg-surface-container-low h-[450px] flex flex-col justify-end border-t-4 border-primary shadow-sm group overflow-hidden">
<img alt="Washing" class="absolute inset-0 w-full h-full object-cover opacity-10 group-hover:opacity-20 transition-all duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAerCjzb6jqup6z9Ma192fJSuhelNAEZYvhA8wJFYWf-VXiIx5DrpqhsAp6q8xkUgVo2aKdXQSuRFkrVMopT1oOC882A1O5CgEjT9VQ2Rr3uYZIfT0zbfADOdwUglIDu1Fc3G6uuYynrQh8J-FHCHrtQ9JVlDTbh4RlVROFLVmZY30mnBJZ1jrAHbPe96p_iMqOTpZEWVT0VUWz5YVqBhysgDD4MAIdIqE7_rE7TyON74awM535GPHSjgIHuH5Xwpl9k9Em8G0RPA-6?crop=0,512,512,1024"/>
<div class="p-10 relative z-10 bg-gradient-to-t from-surface-container-low via-surface-container-low/80 to-transparent">
<span class="font-display-lg text-primary/10 text-7xl absolute top-4 left-4">03</span>
<h4 class="font-headline-md text-primary mb-3">Washing</h4>
<p class="font-body-md text-on-surface-variant">Multi-stage purification with pH-balanced recycled water systems to eliminate surface debris.</p>
</div>
</div>
</div>
<div class="flex-none w-[320px] snap-start">
<div class="relative bg-surface-container-low h-[450px] flex flex-col justify-end border-t-4 border-primary shadow-sm group overflow-hidden">
<img alt="Sanitize" class="absolute inset-0 w-full h-full object-cover opacity-10 group-hover:opacity-20 transition-all duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAerCjzb6jqup6z9Ma192fJSuhelNAEZYvhA8wJFYWf-VXiIx5DrpqhsAp6q8xkUgVo2aKdXQSuRFkrVMopT1oOC882A1O5CgEjT9VQ2Rr3uYZIfT0zbfADOdwUglIDu1Fc3G6uuYynrQh8J-FHCHrtQ9JVlDTbh4RlVROFLVmZY30mnBJZ1jrAHbPe96p_iMqOTpZEWVT0VUWz5YVqBhysgDD4MAIdIqE7_rE7TyON74awM535GPHSjgIHuH5Xwpl9k9Em8G0RPA-6?crop=512,512,1024,1024"/>
<div class="p-10 relative z-10 bg-gradient-to-t from-surface-container-low via-surface-container-low/80 to-transparent">
<span class="font-display-lg text-primary/10 text-7xl absolute top-4 left-4">04</span>
<h4 class="font-headline-md text-primary mb-3">Sanitize</h4>
<p class="font-body-md text-on-surface-variant">Advanced organic sanitization protocols eliminating biological contaminants without residue.</p>
</div>
</div>
</div>
<div class="flex-none w-[320px] snap-start">
<div class="bg-surface-container-low p-10 h-[450px] flex flex-col justify-between border-t-4 border-primary shadow-sm">
<span class="font-display-lg text-primary/10 text-7xl">05</span>
<div>
<h4 class="font-headline-md text-primary mb-3">Sorting</h4>
<p class="font-body-md text-on-surface-variant">Preliminary mechanical categorization ensuring only the right size profiles enter the optical line.</p>
</div>
</div>
</div>
<div class="flex-none w-[320px] snap-start">
<div class="bg-surface-container-low p-10 h-[450px] flex flex-col justify-between border-t-4 border-secondary shadow-sm">
<span class="font-display-lg text-primary/10 text-7xl">06</span>
<div>
<h4 class="font-headline-md text-primary mb-3">Waxing</h4>
<p class="font-body-md text-on-surface-variant">Application of food-grade protective natural coating to extend freshness and prevent weight loss.</p>
</div>
</div>
</div>
<div class="flex-none w-[320px] snap-start">
<div class="bg-surface-container-low p-10 h-[450px] flex flex-col justify-between border-t-4 border-primary shadow-sm">
<span class="font-display-lg text-primary/10 text-7xl">07</span>
<div>
<h4 class="font-headline-md text-primary mb-3">Drying</h4>
<p class="font-body-md text-on-surface-variant">Controlled temperature air-drying tunnels to set protective layers without thermal shock.</p>
</div>
</div>
</div>
<div class="flex-none w-[320px] snap-start">
<div class="bg-surface-container-low p-10 h-[450px] flex flex-col justify-between border-t-4 border-secondary shadow-sm">
<span class="font-display-lg text-primary/10 text-7xl">08</span>
<div>
<h4 class="font-headline-md text-primary mb-3">Optical</h4>
<p class="font-body-md text-on-surface-variant">360° digital analysis using the 9-camera array for precise grading by internal and external specs.</p>
</div>
</div>
</div>
<div class="flex-none w-[320px] snap-start">
<div class="bg-surface-container-low p-10 h-[450px] flex flex-col justify-between border-t-4 border-primary shadow-sm">
<span class="font-display-lg text-primary/10 text-7xl">09</span>
<div>
<h4 class="font-headline-md text-primary mb-3">Packing</h4>
<p class="font-body-md text-on-surface-variant">Automated packaging into retail-ready premium containers with minimal human contact.</p>
</div>
</div>
</div>
<div class="flex-none w-[320px] snap-start">
<div class="bg-surface-container-low p-10 h-[450px] flex flex-col justify-between border-t-4 border-primary shadow-sm">
<span class="font-display-lg text-primary/10 text-7xl">10</span>
<div>
<h4 class="font-headline-md text-primary mb-3">Cooling</h4>
<p class="font-body-md text-on-surface-variant">Pre-cooling down to optimal shipping temperature within hours of packing to lock in freshness.</p>
</div>
</div>
</div>
<div class="flex-none w-[320px] snap-start">
<div class="bg-surface-container-low p-10 h-[450px] flex flex-col justify-between border-t-4 border-secondary shadow-sm">
<span class="font-display-lg text-primary/10 text-7xl">11</span>
<div>
<h4 class="font-headline-md text-primary mb-3">Shipment</h4>
<p class="font-body-md text-on-surface-variant">Real-time tracked global logistics ensuring the cold chain is never broken until delivery.</p>
</div>
</div>
</div>
</div>
</section>
<!-- Footer -->

<html class="scroll-smooth" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Jana Fresh | Global Produce Precision</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;family=Geist:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "secondary-container": "#fe8f14",
                    "surface-container-highest": "#e6e1e1",
                    "on-tertiary-container": "#85847e",
                    "surface-container-low": "#f7f2f2",
                    "primary-fixed": "#cbead5",
                    "surface-dim": "#ddd9d8",
                    "tertiary": "#000000",
                    "on-background": "#1c1b1b",
                    "primary-container": "#0a2f1f",
                    "surface-bright": "#fdf8f8",
                    "on-primary-fixed-variant": "#324c3d",
                    "surface-container": "#f1edec",
                    "on-primary-container": "#6e8a79",
                    "on-secondary-fixed": "#2e1500",
                    "on-surface": "#1c1b1b",
                    "on-error": "#ffffff",
                    "tertiary-container": "#1c1c18",
                    "surface": "#fcf9f8",
                    "secondary": "#904d00",
                    "inverse-primary": "#afceba",
                    "on-surface-variant": "#424844",
                    "secondary-fixed": "#ffdcc2",
                    "inverse-on-surface": "#f4f0ef",
                    "surface-container-lowest": "#ffffff",
                    "on-tertiary": "#ffffff",
                    "on-tertiary-fixed-variant": "#484742",
                    "on-secondary-container": "#633300",
                    "tertiary-fixed-dim": "#c9c6bf",
                    "surface-tint": "#496454",
                    "outline-variant": "#c2c8c2",
                    "glass-white": "rgba(255, 255, 255, 0.03)",
                    "inverse-surface": "#313030",
                    "error-container": "#ffdad6",
                    "surface-variant": "#e6e1e1",
                    "surface-container-high": "#ece7e7",
                    "outline": "#727973",
                    "on-error-container": "#93000a",
                    "on-secondary-fixed-variant": "#6d3900",
                    "background": "#fdf8f8",
                    "on-secondary": "#ffffff",
                    "primary": "#000000",
                    "error": "#ba1a1a",
                    "tertiary-fixed": "#e5e2db",
                    "secondary-fixed-dim": "#ffb77c",
                    "on-tertiary-fixed": "#1c1c18",
                    "on-primary-fixed": "#052014",
                    "on-primary": "#ffffff",
                    "primary-fixed-dim": "#afceba"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "spacing": {
                    "stack-sm": "32px",
                    "margin-mobile": "24px",
                    "container-max": "1440px",
                    "stack-md": "64px",
                    "stack-lg": "120px",
                    "unit": "8px",
                    "margin-tablet": "40px",
                    "gutter": "32px",
                    "margin-desktop": "80px"
            },
            "fontFamily": {
                    "headline-lg": ["Inter"],
                    "display-lg-mobile": ["Inter"],
                    "display-lg": ["Inter"],
                    "body-md": ["Inter"],
                    "body-lg": ["Inter"],
                    "label-sm": ["Geist"],
                    "label-md": ["Geist"],
                    "headline-md": ["Inter"]
            },
            "fontSize": {
                    "headline-lg": ["48px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "500"}],
                    "display-lg-mobile": ["40px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "600"}],
                    "display-lg": ["72px", {"lineHeight": "1.1", "letterSpacing": "-0.04em", "fontWeight": "600"}],
                    "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "body-lg": ["20px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "label-sm": ["12px", {"lineHeight": "1.4", "letterSpacing": "0.1em", "fontWeight": "600"}],
                    "label-md": ["14px", {"lineHeight": "1.4", "letterSpacing": "0.05em", "fontWeight": "500"}],
                    "headline-md": ["32px", {"lineHeight": "1.3", "fontWeight": "500"}]
            }
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
      
        .map-glow {
            filter: drop-shadow(0 0 15px rgba(254, 143, 20, 0.4));
        }
    </style>
</head>
<body class="bg-surface text-on-surface font-body-md overflow-x-hidden">
<!-- TopNavBar -->
<!-- Section 6: Our Facility -->
<section class="relative min-h-screen pt-stack-lg flex flex-col justify-end bg-primary overflow-hidden" id="facility">
<div class="absolute inset-0 z-0">
<img alt="Jana Fresh facility" class="w-full h-full object-cover opacity-60" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAHclkUpC1HiAFrOcSXjfZK8WRkzmPOiFP3Lm74FIqmfgk8o10weem_YegIJAsJs3KziRPCVMVubw9yZehKJkbqSjDuD56Ll0VdWTg0tjJAuYSXZhbyymcDQTNqqw2lKLnG3kH2C6TYpxaaoYRQhHq573aue87s-BKiliqB3jj7hOL9K5DB_FlEH8PwBqiaQDcaF1z0foiL6CnKq_sPggFl-13l1JmgrA1ZSXUDyYmKlSpQo21ZE2t53IPt5CVb7MwuRkfydAv--wuV"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary via-primary/40 to-transparent"></div>
</div>
<div class="relative z-10 max-w-container-max mx-auto px-margin-desktop pb-stack-lg w-full">
<span class="font-label-sm text-label-sm text-secondary-container mb-4 block uppercase tracking-widest">Precision Infrastructure</span>
<h2 class="font-display-lg text-display-lg text-on-primary mb-stack-md max-w-3xl">Architectural Mastery in Agriculture.</h2>
<div class="grid grid-cols-2 md:grid-cols-4 gap-gutter">
<div class="border-l-4 border-secondary-container pl-6 py-4 surface-container-low/10 backdrop-blur-sm">
<div class="font-display-lg text-[40px] text-on-primary font-bold">22,000 m²</div>
<div class="font-label-md text-on-primary-container">Smart Facility</div>
</div>
<div class="border-l-4 border-secondary-container pl-6 py-4 surface-container-low/10 backdrop-blur-sm">
<div class="font-display-lg text-[40px] text-on-primary font-bold">6</div>
<div class="font-label-md text-on-primary-container">Production Lines</div>
</div>
<div class="border-l-4 border-secondary-container pl-6 py-4 surface-container-low/10 backdrop-blur-sm">
<div class="font-display-lg text-[40px] text-on-primary font-bold">350 Tons</div>
<div class="font-label-md text-on-primary-container">Daily Capacity</div>
</div>
<div class="border-l-4 border-secondary-container pl-6 py-4 surface-container-low/10 backdrop-blur-sm">
<div class="font-display-lg text-[40px] text-on-primary font-bold">Cold Chain</div>
<div class="font-label-md text-on-primary-container">Full Integration</div>
</div>
</div>
</div>
</section>
<!-- Section 7: Traceability & ERP -->
<section class="bg-primary-container py-stack-lg" id="erp">
<div class="max-w-container-max mx-auto px-margin-desktop grid grid-cols-1 md:grid-cols-12 gap-gutter items-center">
<div class="md:col-span-5 text-on-primary">
<span class="font-label-sm text-label-sm text-secondary-container mb-4 block uppercase">The Digital Harvest</span>
<h2 class="font-headline-lg text-headline-lg mb-stack-sm">Every Batch.<br/>Fully Traceable.</h2>
<p class="font-body-lg text-body-lg text-on-primary-container mb-stack-md opacity-80">
                    Our proprietary ERP ecosystem tracks every piece of produce from the exact plot coordinates to the final retail shelf. We provide total transparency through real-time telemetry and data-driven logistics.
                </p>
<div class="flex flex-col gap-4">
<div class="flex items-start gap-4 p-4 glass-card">
<span class="material-symbols-outlined text-secondary-container" data-weight="fill">verified</span>
<div>
<div class="font-label-md font-bold text-on-primary">Real-time Telemetry</div>
<div class="font-body-md text-on-primary-container text-sm">Instant monitoring of temp, humidity, and location.</div>
</div>
</div>
<div class="flex items-start gap-4 p-4 glass-card">
<span class="material-symbols-outlined text-secondary-container" data-weight="fill">qr_code_2</span>
<div>
<div class="font-label-md font-bold text-on-primary">QR-Enabled Logistics</div>
<div class="font-body-md text-on-primary-container text-sm">Full history accessible by scanning any shipment code.</div>
</div>
</div>
</div>
</div>
<div class="md:col-span-7 relative group">
<div class="absolute -inset-4 bg-secondary-container/20 blur-3xl opacity-0 group-hover:opacity-30 transition-opacity duration-700"></div>
<img alt="ERP Dashboard Traceability Interface" class="relative w-full rounded-lg shadow-2xl border border-white/10" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDAmEkbCgViuPt-PqAUi4d0rD5aFvJG1a6oxRVZjNaOdrL_ENJ_shX0XH2AjRVFZ6kDrPXhj9gVtf1s3rO-zJByjT2bAn-2Ys4x8rRQsTbNoy26wbKLbHgP_d7iC9yblRqyKua4ffNSY38BFht4efDdLdetzpXGPQhFd_mErt4o3bC4eIsVJFE2sAMtnYY0oWsvsCtE1opyFZ0vLYvNscASAZDoIClPbee6BqGFJWDIOHmmh0luehH0bFbHLyWjV3WPvuy40QwXjGOh"/>
</div>
</div>
</section>
<!-- Section 8: Global Reach -->
<section class="py-stack-lg bg-surface relative overflow-hidden" id="global">
<div class="absolute top-0 right-0 w-1/3 h-full bg-surface-container-low -skew-x-12 translate-x-1/2"></div>
<div class="max-w-container-max mx-auto px-margin-desktop relative z-10">
<div class="flex flex-col md:flex-row md:items-end justify-between mb-stack-md">
<div class="max-w-2xl">
<span class="font-label-sm text-label-sm text-primary mb-4 block uppercase">Global Logistics Partner</span>
<h2 class="font-headline-lg text-headline-lg">Trusted Across More Than 50 Countries.</h2>
</div>
<div class="flex gap-4 mt-8 md:mt-0">
<button class="w-12 h-12 flex items-center justify-center border border-outline hover:bg-primary hover:text-on-primary transition-all duration-300">
<span class="material-symbols-outlined">west</span>
</button>
<button class="w-12 h-12 flex items-center justify-center border border-outline hover:bg-primary hover:text-on-primary transition-all duration-300">
<span class="material-symbols-outlined">east</span>
</button>
</div>
</div>
<div class="relative bg-primary-container p-unit rounded-xl overflow-hidden shadow-2xl group">
<img alt="Interactive Global Supply Chain Map" class="w-full h-auto object-cover grayscale brightness-75 contrast-125 map-glow" src="https://lh3.googleusercontent.com/aida-public/AB6AXuANagYjVbIW52Xp6jjQjE2gUIpB27myDvQH9UJfGNq9bkQA19txvLO220xlmZnhEKA0IkXETZEIxlW2tzLG0flPOVG01uMVlel1dNIKejCG0DH8Ra739EXQR7iv_h3MxLp3vVcHUYq9jsoemq7b0T1fMq-eoToXNELBtbWnO9jAubJ1_eVEMQD7FBIlLcKUHynUT6OCVmz-3YMnKzyTn23ml-BtPmyNk5uwuKRuXOhEZI6FvoRdmdGIpAP1zZ2rH3lYpd9-y_u-so9r"/>
<!-- Floating Labels -->
<div class="absolute top-1/4 left-1/4 glass-card px-4 py-2 flex items-center gap-2">
<div class="w-2 h-2 rounded-full bg-secondary-container animate-pulse"></div>
<span class="font-label-sm text-on-primary">EUROPE HUB</span>
</div>
<div class="absolute bottom-1/3 right-1/4 glass-card px-4 py-2 flex items-center gap-2">
<div class="w-2 h-2 rounded-full bg-secondary-container animate-pulse"></div>
<span class="font-label-sm text-on-primary">ASIA PACIFIC</span>
</div>
</div>
<div class="grid grid-cols-2 md:grid-cols-5 gap-stack-sm mt-stack-md">
<div class="text-center">
<div class="font-headline-md text-primary mb-1">EUROPE</div>
<div class="w-8 h-1 bg-secondary-container mx-auto"></div>
</div>
<div class="text-center opacity-40 hover:opacity-100 transition-opacity cursor-pointer">
<div class="font-headline-md text-primary mb-1">AFRICA</div>
<div class="w-8 h-1 bg-transparent mx-auto"></div>
</div>
<div class="text-center opacity-40 hover:opacity-100 transition-opacity cursor-pointer">
<div class="font-headline-md text-primary mb-1">ASIA</div>
<div class="w-8 h-1 bg-transparent mx-auto"></div>
</div>
<div class="text-center opacity-40 hover:opacity-100 transition-opacity cursor-pointer">
<div class="font-headline-md text-primary mb-1">N. AMERICA</div>
<div class="w-8 h-1 bg-transparent mx-auto"></div>
</div>
<div class="text-center opacity-40 hover:opacity-100 transition-opacity cursor-pointer">
<div class="font-headline-md text-primary mb-1">S. AMERICA</div>
<div class="w-8 h-1 bg-transparent mx-auto"></div>
</div>
</div>
</div>
</section>
<!-- Section 9: Sustainability -->
<section class="py-stack-lg bg-surface-container-low" id="sustainability">
<div class="max-w-container-max mx-auto px-margin-desktop">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-stack-lg items-center">
<div class="order-2 lg:order-1">
<img alt="Sustainable agriculture magazine feature showcasing solar integration" class="w-full shadow-2xl rounded-sm" src="https://lh3.googleusercontent.com/aida-public/AB6AXuALBp518dL2jwyM6HRgKfG65IBIi0SM3Jz8pufOV9IOwp0VjNuFNegkYAGJ5y7UttpYAl8JNeKSeK993Uu2REqQH4-yV7O7QfwwrYNQUNdy8eNgqgHy-Xtr-wY78FNxjhEyQ1oVofehAUQylCp4Ob8R2DFOUX2w-IIjYSTO_D2icUfDO98jFvJK5tvBC_7P2pKnzEDxRev4OtVA5InOTGwLj2DSk30nFU-KTfdkXaFKJ0dHieH005ZVhFZsyW7guEw-rlBqUrxF8ciB"/>
</div>
<div class="order-1 lg:order-2">
<span class="font-label-sm text-label-sm text-primary mb-4 block uppercase tracking-widest">ESG Commitment</span>
<h2 class="font-display-lg text-display-lg mb-stack-sm text-primary">Resource Wisdom.</h2>
<div class="space-y-stack-sm">
<div class="group cursor-default">
<h3 class="font-headline-md text-primary flex items-center gap-4 mb-2">
<span class="text-stroke text-primary">01</span> Solar-ready Infrastructure
                            </h3>
<p class="font-body-md text-on-surface-variant max-w-lg transition-all duration-300 group-hover:text-primary">
                                Our facilities are engineered for energy autonomy, utilizing expansive rooftop solar arrays to power advanced cold storage systems with zero grid dependency.
                            </p>
</div>
<div class="h-[1px] w-full bg-outline-variant/30"></div>
<div class="group cursor-default">
<h3 class="font-headline-md text-primary flex items-center gap-4 mb-2">
<span class="text-stroke text-primary">02</span> Responsible Resource Management
                            </h3>
<p class="font-body-md text-on-surface-variant max-w-lg transition-all duration-300 group-hover:text-primary">
                                Closed-loop irrigation and intelligent waste diversion ensure that every liter of water and every kilogram of organic matter is optimized within our ecosystem.
                            </p>
</div>
</div>
<button class="mt-stack-md flex items-center gap-3 font-label-md text-primary group">
                        EXPLORE OUR SUSTAINABILITY REPORT
                        <span class="material-symbols-outlined group-hover:translate-x-2 transition-transform">arrow_forward</span>
</button>
</div>
</div>
</div>
</section>
<!-- Section 10: Testimonials & Partners -->
<section class="py-stack-lg bg-surface" id="partners">
<div class="max-w-container-max mx-auto px-margin-desktop">
<div class="text-center mb-stack-md">
<span class="font-label-sm text-label-sm text-outline mb-2 block uppercase">Trusted Network</span>
<h3 class="font-headline-md text-primary">Supplying the World's Leading Retailers</h3>
</div>
<div class="flex flex-wrap justify-center items-center gap-stack-lg opacity-40 grayscale hover:grayscale-0 transition-all duration-500">
<!-- Premium Logo Wall Placeholders -->
<div class="font-headline-md tracking-tighter text-on-surface hover:opacity-100 transition-opacity">GLOBALMART</div>
<div class="font-headline-md tracking-tighter text-on-surface hover:opacity-100 transition-opacity">EUROFOOD</div>
<div class="font-headline-md tracking-tighter text-on-surface hover:opacity-100 transition-opacity">ASIAN FRESH</div>
<div class="font-headline-md tracking-tighter text-on-surface hover:opacity-100 transition-opacity">PURELOGISTICS</div>
<div class="font-headline-md tracking-tighter text-on-surface hover:opacity-100 transition-opacity">AFRI-EXPORT</div>
</div>
<div class="mt-stack-lg grid grid-cols-1 md:grid-cols-3 gap-gutter">
<div class="p-stack-sm bg-surface-container-high relative">
<span class="material-symbols-outlined text-secondary-container absolute top-4 right-4 text-4xl opacity-20">format_quote</span>
<p class="font-body-md italic mb-6">"Jana Fresh has set a new standard for cold-chain reliability in our European distribution network."</p>
<div class="font-label-md font-bold">Category Director</div>
<div class="font-label-sm text-on-surface-variant">Tier-1 European Retail Group</div>
</div>
<div class="p-stack-sm bg-surface-container-high relative">
<span class="material-symbols-outlined text-secondary-container absolute top-4 right-4 text-4xl opacity-20">format_quote</span>
<p class="font-body-md italic mb-6">"Their traceability platform is second to none. Our audit team was thoroughly impressed by the data granularity."</p>
<div class="font-label-md font-bold">Head of Quality</div>
<div class="font-label-sm text-on-surface-variant">Global Logistics Enterprise</div>
</div>
<div class="p-stack-sm bg-surface-container-high relative">
<span class="material-symbols-outlined text-secondary-container absolute top-4 right-4 text-4xl opacity-20">format_quote</span>
<p class="font-body-md italic mb-6">"Consistent quality, year-round. They are more than a supplier; they are a strategic asset to our supply chain."</p>
<div class="font-label-md font-bold">Procurement VP</div>
<div class="font-label-sm text-on-surface-variant">Middle-Eastern Import Hub</div>
</div>
</div>
</div>
</section>
<!-- Section 11: Final CTA -->
<section class="relative py-stack-lg bg-primary overflow-hidden">
<div class="absolute inset-0 z-0">
<div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-10"></div>
<div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-secondary-container/10 rounded-full blur-[160px]"></div>
</div>
<div class="relative z-10 max-w-container-max mx-auto px-margin-desktop text-center">
<h2 class="font-display-lg text-display-lg text-on-primary mb-6">Your Trusted Produce Export Partner</h2>
<p class="font-body-lg text-on-primary-container max-w-3xl mx-auto mb-stack-md opacity-90">
                Delivering quality, consistency, and confidence to global markets. Join our network of elite partners today.
            </p>
<div class="flex flex-col sm:flex-row items-center justify-center gap-6">
<button class="bg-secondary-container text-on-secondary-container px-12 py-5 font-headline-md hover:scale-105 transition-transform duration-300 flex items-center gap-3 active:scale-95 shadow-xl">
                    Start Your Inquiry
                    <span class="material-symbols-outlined">arrow_forward</span>
</button>
<button class="border border-on-primary/30 text-on-primary px-12 py-5 font-headline-md hover:bg-on-primary hover:text-primary transition-all duration-300 active:scale-95 backdrop-blur-sm">
                    View Portfolio
                </button>
</div>
</div>
</section>
<!-- Footer -->
<footer class="bg-primary dark:bg-on-primary-fixed w-full py-stack-lg">
<div class="grid grid-cols-12 gap-gutter px-margin-desktop max-w-container-max mx-auto text-on-primary">
<div class="col-span-12 md:col-span-4 mb-stack-md">
<div class="font-headline-md text-headline-md text-on-primary mb-6">JANA FRESH</div>
<p class="font-body-md text-on-primary-container opacity-70 max-w-xs">
                    Leading the future of precision agriculture and global perishables logistics from seed to shelf.
                </p>
</div>
<div class="col-span-6 md:col-span-2">
<div class="font-label-md font-bold mb-4 uppercase text-secondary-fixed">Products</div>
<ul class="space-y-2 opacity-70 font-body-md">
<li class="hover:text-secondary-fixed cursor-pointer transition-colors">Premium Citrus</li>
<li class="hover:text-secondary-fixed cursor-pointer transition-colors">Leafy Greens</li>
<li class="hover:text-secondary-fixed cursor-pointer transition-colors">Exotic Fruits</li>
<li class="hover:text-secondary-fixed cursor-pointer transition-colors">Bulk Logistics</li>
</ul>
</div>
<div class="col-span-6 md:col-span-2">
<div class="font-label-md font-bold mb-4 uppercase text-secondary-fixed">Certifications</div>
<ul class="space-y-2 opacity-70 font-body-md">
<li class="hover:text-secondary-fixed cursor-pointer transition-colors">Global GAP</li>
<li class="hover:text-secondary-fixed cursor-pointer transition-colors">ISO 22000</li>
<li class="hover:text-secondary-fixed cursor-pointer transition-colors">Organic EU</li>
<li class="hover:text-secondary-fixed cursor-pointer transition-colors">HACCP</li>
</ul>
</div>
<div class="col-span-6 md:col-span-2">
<div class="font-label-md font-bold mb-4 uppercase text-secondary-fixed">Global HQ</div>
<ul class="space-y-2 opacity-70 font-body-md">
<li class="hover:text-secondary-fixed cursor-pointer transition-colors">Amsterdam, NL</li>
<li class="hover:text-secondary-fixed cursor-pointer transition-colors">Cairo, EG</li>
<li class="hover:text-secondary-fixed cursor-pointer transition-colors">Dubai, UAE</li>
</ul>
</div>
<div class="col-span-6 md:col-span-2">
<div class="font-label-md font-bold mb-4 uppercase text-secondary-fixed">Social</div>
<ul class="space-y-2 opacity-70 font-body-md">
<li class="hover:text-secondary-fixed cursor-pointer transition-colors">LinkedIn</li>
<li class="hover:text-secondary-fixed cursor-pointer transition-colors">Instagram</li>
</ul>
</div>
<div class="col-span-12 mt-stack-md pt-stack-sm border-t border-on-primary/10 flex flex-col md:flex-row justify-between items-center gap-4 opacity-60">
<div class="font-body-md text-body-md">© 2024 Jana Fresh Global. All rights reserved. Precision Agriculture &amp; Logistics.</div>
<div class="flex gap-stack-sm">
<a class="hover:text-secondary-fixed transition-colors" href="#">Privacy Policy</a>
<a class="hover:text-secondary-fixed transition-colors" href="#">Terms of Service</a>
</div>
</div>
</div>
</footer>
<script>
        // Simple intersection observer for reveal effects
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                    entry.target.classList.remove('opacity-0', 'translate-y-10');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('section > div').forEach(el => {
            el.classList.add('transition-all', 'duration-1000', 'opacity-0', 'translate-y-10');
            observer.observe(el);
        });
    </script>
</body></html>

<script>
    // Simple counter animation
    const observerOptions = { threshold: 0.5 };
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = entry.target;
                const endValue = parseInt(target.getAttribute('data-target'));
                let startValue = 0;
                const duration = 2000;
                const startTime = performance.now();
                function updateCounter(currentTime) {
                    const elapsed = currentTime - startTime;
                    const progress = Math.min(elapsed / duration, 1);
                    const currentValue = Math.floor(progress * endValue);
                    target.innerText = currentValue + (target.innerText.includes('+') ? '+' : '');
                    if (progress < 1) requestAnimationFrame(updateCounter);
                    else target.innerText = endValue + (target.innerText.includes('+') ? '+' : '');
                }
                requestAnimationFrame(updateCounter);
                counterObserver.unobserve(target);
            }
        });
    }, observerOptions);
    document.querySelectorAll('[data-target]').forEach(counter => counterObserver.observe(counter));

    // Atmospheric parallax effect for hero image
    window.addEventListener('scroll', () => {
        const scroll = window.pageYOffset;
        const heroImg = document.querySelector('header img');
        if (heroImg) {
            heroImg.style.transform = `translateY(${scroll * 0.4}px) scale(${1.05 + scroll * 0.0002})`;
        }
    });

    // Protocol Horizontal Scroll Controls
    const protocolScroll = document.getElementById('protocol-scroll');
    const protocolProgress = document.getElementById('protocol-progress');
    const nextBtn = document.getElementById('protocol-next');
    const prevBtn = document.getElementById('protocol-prev');

    if (protocolScroll) {
        protocolScroll.addEventListener('scroll', () => {
            const scrollPercent = (protocolScroll.scrollLeft / (protocolScroll.scrollWidth - protocolScroll.clientWidth)) * 100;
            protocolProgress.style.width = `${Math.max(14, scrollPercent)}%`;
        });

        nextBtn?.addEventListener('click', () => {
            protocolScroll.scrollBy({ left: 400, behavior: 'smooth' });
        });
        prevBtn?.addEventListener('click', () => {
            protocolScroll.scrollBy({ left: -400, behavior: 'smooth' });
        });
    }
</script>
</body></html>