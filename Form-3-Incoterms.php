<?php 
/**
 * Template Name: Form-3-Incoterms
 */

 ?>
<?php
$order_id = absint($_GET['quote_id'] ?? 0);

$order = wc_get_order($order_id);

if (!$order) {
    wp_die('Order not Find');
}

$total_metric_tons = (float) $order->get_meta('_quotation_total_metric_tons'); 


if (isset($_POST['save_shipping'])) {

    $order_id = absint($_GET['quote_id'] ?? 0);

    if (!$order_id) {
        wp_die('Order ID missing');
    }

    $order = wc_get_order(absint($order_id));

    if (!$order) {
        wp_die('Order not found');
    }

    /* ---------------------------------
       KEEP PRODUCTS FROM STEP 2
    ----------------------------------*/
    $products = $order->get_meta('_quotation_products');
    if (!is_array($products)) {
        $products = [];
    }

    /* ---------------------------------
       GET CURRENT STEP DATA
    ----------------------------------*/
    $incoterm = sanitize_text_field($_POST['incoterm'] ?? '');

    $handling = $_POST['handling'] ?? [];
    if (!is_array($handling)) {
        $handling = [];
    }

    /* ---------------------------------
       SAVE ALL METAS CLEANLY
    ----------------------------------*/
    $order->update_meta_data('_quotation_products', $products);
    $order->update_meta_data('_quotation_incoterm', $incoterm);
    $order->update_meta_data('_quotation_handling', $handling);

    $order->save();

    /* ---------------------------------
       REDIRECT NEXT STEP
    ----------------------------------*/
  wp_safe_redirect(
    add_query_arg(
        [
            'quote_id' => $order_id,
        ],
        site_url('/quotation/payment-terms/')
    )
);
exit;
   
}

?><!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Jana Fresh — Request a Quote: Logistics</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Geist:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface": "#fdf8f8",
                        "on-error": "#ffffff",
                        "surface-dim": "#ddd9d8",
                        "primary-fixed-dim": "#afceba",
                        "primary-container": "#052014",
                        "secondary-fixed": "#ffdcc2",
                        "on-primary": "#ffffff",
                        "on-error-container": "#93000a",
                        "inverse-primary": "#afceba",
                        "tertiary": "#000000",
                        "on-primary-fixed": "#052014",
                        "secondary-fixed-dim": "#ffb77c",
                        "on-tertiary-fixed-variant": "#484742",
                        "on-background": "#1c1b1b",
                        "inverse-surface": "#313030",
                        "outline-variant": "#c2c8c2",
                        "background": "#fdf8f8",
                        "error": "#ba1a1a",
                        "primary": "#000000",
                        "on-secondary": "#ffffff",
                        "on-primary-fixed-variant": "#324c3d",
                        "glass-white": "rgba(255, 255, 255, 0.03)",
                        "on-tertiary": "#ffffff",
                        "on-primary-container": "#6e8a79",
                        "secondary": "#904d00",
                        "surface-container-lowest": "#ffffff",
                        "surface-tint": "#496454",
                        "on-secondary-fixed-variant": "#6d3900",
                        "outline": "#727973",
                        "on-tertiary-fixed": "#1c1c18",
                        "on-surface-variant": "#424844",
                        "inverse-on-surface": "#f4f0ef",
                        "error-container": "#ffdad6",
                        "on-secondary-fixed": "#2e1500",
                        "surface-container-highest": "#e6e1e1",
                        "tertiary-fixed-dim": "#c9c6bf",
                        "surface-bright": "#fdf8f8",
                        "tertiary-container": "#1c1c18",
                        "map-glow": "rgba(254, 143, 20, 0.4)",
                        "surface-container-high": "#ece7e7",
                        "on-tertiary-container": "#85847e",
                        "on-surface": "#1c1b1b",
                        "surface-variant": "#e6e1e1",
                        "on-secondary-container": "#633300",
                        "surface-container": "#f1edec",
                        "primary-fixed": "#cbead5",
                        "surface-container-low": "#f7f2f2",
                        "secondary-container": "#fe8f14",
                        "tertiary-fixed": "#e5e2db"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "margin-tablet": "40px",
                        "stack-md": "64px",
                        "stack-lg": "120px",
                        "gutter": "32px",
                        "margin-mobile": "24px",
                        "stack-sm": "32px",
                        "unit": "8px",
                        "margin-desktop": "80px",
                        "container-max": "1440px"
                    },
                    "fontFamily": {
                        "display-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "label-sm": ["Geist"],
                        "label-md": ["Geist"],
                        "headline-lg": ["Inter"],
                        "body-lg": ["Inter"],
                        "headline-md": ["Inter"]
                    }
                }
            }
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }
        .active-card {
            border-left: 4px solid #fe8f14;
            background: rgba(254, 143, 20, 0.05);
        }
        .glass-panel {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(0, 0, 0, 0.05);
        }
    </style>
</head>
<body class="bg-surface text-on-surface font-body-md overflow-x-hidden">
<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 bg-surface/80 backdrop-blur-md shadow-sm border-b border-outline-variant/30">
<div class="flex justify-between items-center px-margin-desktop py-4 max-w-container-max mx-auto">
<div class="cursor-pointer transition-all duration-200 active:scale-95">
<img alt="JANA FRESH" class="h-10 w-auto object-contain" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCn8kBDd576Ww8axOYFh8cgq_meB4uyzhye4Xpo9xDdOfi_i4laA-bE8eZzZQ_VOSI74-sZhsfeDPdgl1v5Fnc6gT2GOLOwWSDkv9SdvIvF-QJEtva5Mxyk0yjovtQKczj25La1k8ukwuvSRc-jZDEAeL5xCyVgpuRItMSx9HChCqGLeQAeNyMauM1mrdohrTG43DarTjFW3TsAm4G4o4MW773hfLFYlFBJDJolL1rCfzNUWLDpxi4sUyp21l6WDIIMySDaaVRc-wj_"/>
</div>

<button class="bg-primary text-on-primary px-6 py-3 rounded font-label-md text-label-md hover:opacity-90 transition-opacity duration-300 active:scale-95">
            Step 3
        </button>
</div>
</nav>
<!-- Page Layout -->
<main class="flex min-h-screen pt-20">
<!-- SideNavBar -->
<aside class="fixed left-0 top-20 bottom-0 flex flex-col py-stack-sm bg-surface-container dark:bg-surface-container-high shadow-sm w-80 z-40">
<div class="px-8 pb-8 border-b border-outline-variant/10">
<div class="flex items-center gap-4 mb-2">
<div class="w-10 h-10 bg-secondary-container flex items-center justify-center">
<span class="material-symbols-outlined text-on-secondary-container">inventory_2</span>
</div>
<div>
<h3 class="font-label-md text-label-md text-primary font-bold">Quote Progress</h3>
<p class="font-label-sm text-label-sm text-on-surface-variant opacity-70">Step 3 of 5</p>
</div>
</div>
</div>
<nav class="flex-1 mt-6 space-y-1">
<!-- Step 1 -->
<div class="flex items-center gap-4 px-8 py-4 text-on-surface-variant pl-4 opacity-60 font-label-md text-label-md">
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span>Personal Details</span>
</div>
<!-- Step 2 -->
<div class="flex items-center gap-4 px-8 py-4 text-on-surface-variant pl-4 opacity-60 font-label-md text-label-md">
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span>Product Selection</span>
</div>
<!-- Step 3 (Active) -->
<div class="flex items-center gap-4 px-8 py-4 text-primary font-bold border-l-4 border-secondary bg-surface-bright pl-4 font-label-md text-label-md">
<span class="material-symbols-outlined text-secondary">local_shipping</span>
<span>Logistics</span>
</div>
<!-- Step 4 -->
<div class="flex items-center gap-4 px-8 py-4 text-on-surface-variant pl-4 opacity-60 font-label-md text-label-md hover:bg-surface-container-highest transition-all">
<span class="material-symbols-outlined">description</span>
<span>Documentation</span>
</div>
<!-- Step 5 -->
<div class="flex items-center gap-4 px-8 py-4 text-on-surface-variant pl-4 opacity-60 font-label-md text-label-md hover:bg-surface-container-highest transition-all">
<span class="material-symbols-outlined">fact_check</span>
<span>Review</span>
</div>
</nav>
<div class="px-8 mt-auto">
<button class="w-full py-4 border border-outline font-label-md text-label-md hover:bg-surface-container-highest transition-all">
                    Next Step
                </button>
</div>
</aside>
<!-- Main Content Canvas -->
<section class="ml-80 flex-1 px-margin-desktop py-stack-md">
<div class="max-w-4xl">
<div class="mb-stack-sm">
<h1 class="font-display-lg text-headline-lg text-primary mb-2">Logistics &amp; Shipping Terms</h1>
<p class="font-body-lg text-on-surface-variant max-w-2xl">
                        Select your preferred Incoterms and shipping methods to help us calculate the most accurate logistics quote.
                    </p>
</div>
<!-- Incoterms Selection Grid -->
<form method="post">
<input type="hidden" name="incoterm" id="incoterm-input-field">
<div class="grid grid-cols-1 gap-gutter mb-stack-md">
<!-- FOB -->
<div class="group relative bg-surface-container-low p-8 border border-outline-variant/20 cursor-pointer transition-all hover:bg-surface-container-high active-card" id="incoterm-fob" onclick="selectIncoterm(this)">
<div class="flex justify-between items-start">
<div class="flex items-center gap-4">
<div class="w-12 h-12 bg-primary flex items-center justify-center text-on-primary">
<span class="material-symbols-outlined">sailing</span>
</div>
<div>
<h3 class="font-headline-md text-headline-md text-primary">FOB</h3>
<p class="font-label-sm text-label-sm uppercase tracking-widest text-on-surface-variant">Free On Board</p>
</div>
</div>
<div class="w-6 h-6 border-2 border-secondary rounded-full flex items-center justify-center">
<div class="w-3 h-3 bg-secondary rounded-full"></div>
</div>
</div>
<p class="mt-6 font-body-md text-on-surface-variant leading-relaxed">
                            Jana Fresh delivers to the port of origin; buyer handles international freight. Ideal for clients with established freight forwarding partners.
                        </p>
</div>
<!-- EXW -->
<div class="group relative bg-surface-container-low p-8 border border-outline-variant/20 cursor-pointer transition-all hover:bg-surface-container-high" id="incoterm-exw" onclick="selectIncoterm(this)">
<div class="flex justify-between items-start">
<div class="flex items-center gap-4">
<div class="w-12 h-12 bg-primary flex items-center justify-center text-on-primary">
<span class="material-symbols-outlined">factory</span>
</div>
<div>
<h3 class="font-headline-md text-headline-md text-primary">EXW</h3>
<p class="font-label-sm text-label-sm uppercase tracking-widest text-on-surface-variant">Ex Works</p>
</div>
</div>
<div class="w-6 h-6 border-2 border-outline rounded-full"></div>
</div>
<p class="mt-6 font-body-md text-on-surface-variant leading-relaxed">
                            Buyer is responsible for the entire shipment from our facility gates. Maximizes your control over the entire supply chain and local transit.
                        </p>
</div>
<!-- CIF -->
<div class="group relative bg-surface-container-low p-8 border border-outline-variant/20 cursor-pointer transition-all hover:bg-surface-container-high" id="incoterm-cif" onclick="selectIncoterm(this)">
<div class="flex justify-between items-start">
<div class="flex items-center gap-4">
<div class="w-12 h-12 bg-primary flex items-center justify-center text-on-primary">
<span class="material-symbols-outlined">inventory_2</span>
</div>
<div>
<h3 class="font-headline-md text-headline-md text-primary">CIF</h3>
<p class="font-label-sm text-label-sm uppercase tracking-widest text-on-surface-variant">Cost, Insurance, &amp; Freight</p>
</div>
</div>
<div class="w-6 h-6 border-2 border-outline rounded-full"></div>
</div>
<p class="mt-6 font-body-md text-on-surface-variant leading-relaxed">
                            Jana Fresh manages the entire journey, including insurance, to your destination port. A turnkey solution for seamless international delivery.
                        </p>
</div>
</div>
<!-- Special Handling Section -->
<div class="bg-surface-container-lowest p-8 border border-outline-variant/10 shadow-sm">
<h2 class="font-headline-md text-headline-md text-primary mb-6">Special Handling Requirements</h2>
<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
<div class="space-y-6">
<label class="flex items-center justify-between group cursor-pointer">
<span class="font-label-md text-label-md text-on-surface group-hover:text-secondary transition-colors">Temperature Controlled (Reefer)</span>
<input name="handling[]" value="reefer" checked="" class="w-6 h-6 text-secondary border-outline-variant focus:ring-secondary rounded-none" type="checkbox"/>
</label>
<label class="flex items-center justify-between group cursor-pointer">
<span class="font-label-md text-label-md text-on-surface group-hover:text-secondary transition-colors">Air Freight Priority</span>
<input name="handling[]" value="air_priority" class="w-6 h-6 text-secondary border-outline-variant focus:ring-secondary rounded-none" type="checkbox"/>
</label>
<label class="flex items-center justify-between group cursor-pointer">
<span class="font-label-md text-label-md text-on-surface group-hover:text-secondary transition-colors">Sea Freight (Standard)</span>
<input name="handling[]" value="sea_standard" checked="" class="w-6 h-6 text-secondary border-outline-variant focus:ring-secondary rounded-none" type="checkbox"/>
</label>
</div>
<div class="flex flex-col justify-center items-center bg-surface-container-low p-6 border-l-4 border-secondary">
<span class="material-symbols-outlined text-4xl text-secondary mb-2">info</span>
<p class="text-center font-label-sm text-label-sm text-on-surface-variant italic">
                                Note: Temperature controlled shipping is recommended for fresh produce to maintain peak quality upon arrival.
                            </p>
</div>
</div>
</div>
<!-- Footer Actions -->
<div class="mt-stack-md flex justify-between items-center pt-8 border-t border-outline-variant/10">
<button class="flex items-center gap-2 font-label-md text-label-md text-on-surface hover:text-secondary transition-all">
<span class="material-symbols-outlined">arrow_back</span>
                        Back
                    </button>
<button name="save_shipping" class="px-10 py-5 bg-secondary text-on-secondary font-bold font-label-md text-label-md active:scale-95 transition-transform">
                        Next: Documentation
                    </button>
	</form>
	
</div>
</div>
</section>
</main>
<!-- Contextual Map / Visualization Overlay (Aesthetic Only) -->
<div class="fixed right-0 top-20 bottom-0 w-[400px] hidden xl:block opacity-10 pointer-events-none">
<img alt="Logistics Map Background" class="w-full h-full object-cover grayscale" data-alt="A highly detailed global maritime shipping route map showing intricate white lines connecting major international ports across deep black oceans. The aesthetic is ultra-modern and technical, featuring semi-transparent UI elements like coordinates and data points. The lighting is low-key, emphasizing a world-scale industrial logistics network with a sophisticated tech-first atmosphere." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCG16d_ovH1nFCrRbFcKMpa0Y3rv8DemnxhXpJGKR0NCMg11f7i_PcUBPv_8vE0V0wbWBRIoMgXYzIXXKIs84j7N-GHrRbDq3JSkzAFnDEXdVtZrqvguFLS00ONvW3haxV2gw2lO8DzAqL6j8K3WfSZNy1KAziQDPBCUUsmILdu4OcPt329FyJHVLuar1JjUBefg5mdUxYEIzE4hiI3LjU2dRnbfVfUdoSMUJL8IxeKHVn7RCh2dOPtdm9u-uGbGFsVKFcBjJff5bNs"/>
</div><script>
    function selectIncoterm(element) {

        // Set hidden input value (THIS IS THE IMPORTANT ADDITION)
        const incotermValue = element.id.replace('incoterm-', '').toUpperCase();
        const hiddenInput = document.getElementById('incoterm-input-field');
        if (hiddenInput) {
            hiddenInput.value = incotermValue;
        }

        // Remove active state from all
        document.querySelectorAll('[id^="incoterm-"]').forEach(card => {
            card.classList.remove('active-card');
            card.classList.remove('bg-surface-container-high');

            const radioContainer = card.querySelector('.rounded-full.flex');
            if (radioContainer) {
                radioContainer.innerHTML = '';
                radioContainer.className = 'w-6 h-6 border-2 border-outline rounded-full';
            }
        });

        // Add active state to clicked
        element.classList.add('active-card');
        element.classList.add('bg-surface-container-high');

        const radioContainer = element.querySelector('.rounded-full');
        radioContainer.className = 'w-6 h-6 border-2 border-secondary rounded-full flex items-center justify-center';
        radioContainer.innerHTML = '<div class="w-3 h-3 bg-secondary rounded-full"></div>';
    }

    // micro-interaction for buttons
    document.querySelectorAll('button').forEach(btn => {
        btn.addEventListener('mousedown', () => btn.classList.add('scale-95'));
        btn.addEventListener('mouseup', () => btn.classList.remove('scale-95'));
    });
</script>
</body></html>