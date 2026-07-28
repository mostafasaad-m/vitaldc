<?php 
/**
* Template Name: Form-5-Review
*
*
*/?>
<?php
$order_id = absint($_GET['quote_id'] ?? 0);
$order = wc_get_order($order_id);
$billing_name    = trim($order->get_billing_first_name() . ' ' . $order->get_billing_last_name());
$company_name    = $order->get_billing_company();
$billing_state   = $order->get_billing_state();
$billing_country = $order->get_billing_country();
$countries = WC()->countries;

$billing_state_name = $countries->states[$billing_country][$billing_state] ?? $billing_state;
$billing_country_name = $countries->countries[$billing_country] ?? $billing_country;

$total_metric_tons = (float) $order->get_meta('_quotation_total_metric_tons');
 $products = $order->get_meta('_quotation_products');
    if (!is_array($products)) {
        $products = [];
    }

$payment_type = $order->get_meta('_quotation_payment_type');
$tt_percentage = $order->get_meta('_quotation_hybrid_tt_percentage');
$lc_percentage = $order->get_meta('_quotation_hybrid_lc_percentage');
$products = $order->get_meta('_quotation_products');
$incoterm = $order->get_meta('_quotation_incoterm');
$handling = $order->get_meta('_quotation_handling');


?>
<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Jana Fresh | Review &amp; Submit</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Geist:wght@400;500;600&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&amp;family=Inter:wght@100..900&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "secondary": "#904d00",
                        "error": "#ba1a1a",
                        "secondary-fixed-dim": "#ffb77c",
                        "primary-fixed-dim": "#afceba",
                        "on-tertiary-fixed": "#1c1c18",
                        "on-tertiary-fixed-variant": "#484742",
                        "on-primary-fixed": "#052014",
                        "outline": "#727973",
                        "surface-tint": "#496454",
                        "tertiary-container": "#1c1c18",
                        "surface-container": "#f1edec",
                        "on-surface-variant": "#424844",
                        "on-tertiary-container": "#85847e",
                        "on-primary-container": "#6e8a79",
                        "surface-bright": "#fdf8f8",
                        "map-glow": "rgba(254, 143, 20, 0.4)",
                        "surface-container-lowest": "#ffffff",
                        "secondary-fixed": "#ffdcc2",
                        "tertiary-fixed": "#e5e2db",
                        "on-secondary-fixed-variant": "#6d3900",
                        "on-background": "#1c1b1b",
                        "primary": "#000000",
                        "on-error-container": "#93000a",
                        "surface": "#fdf8f8",
                        "outline-variant": "#c2c8c2",
                        "on-primary-fixed-variant": "#324c3d",
                        "primary-fixed": "#cbead5",
                        "surface-dim": "#ddd9d8",
                        "background": "#fdf8f8",
                        "on-tertiary": "#ffffff",
                        "surface-container-highest": "#e6e1e1",
                        "on-secondary-container": "#633300",
                        "error-container": "#ffdad6",
                        "on-secondary": "#ffffff",
                        "primary-container": "#052014",
                        "inverse-on-surface": "#f4f0ef",
                        "inverse-primary": "#afceba",
                        "secondary-container": "#fe8f14",
                        "surface-variant": "#e6e1e1",
                        "on-primary": "#ffffff",
                        "surface-container-high": "#ece7e7",
                        "glass-white": "rgba(255, 255, 255, 0.03)",
                        "on-surface": "#1c1b1b",
                        "on-error": "#ffffff",
                        "on-secondary-fixed": "#2e1500",
                        "tertiary-fixed-dim": "#c9c6bf",
                        "inverse-surface": "#313030",
                        "tertiary": "#000000",
                        "surface-container-low": "#f7f2f2"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "unit": "8px",
                        "margin-tablet": "40px",
                        "gutter": "32px",
                        "stack-md": "64px",
                        "container-max": "1440px",
                        "margin-mobile": "24px",
                        "margin-desktop": "80px",
                        "stack-lg": "120px",
                        "stack-sm": "32px"
                    },
                    "fontFamily": {
                        "label-md": ["Geist"],
                        "body-md": ["Inter"],
                        "display-lg-mobile": ["Inter"],
                        "label-sm": ["Geist"],
                        "headline-md": ["Inter"],
                        "headline-lg": ["Inter"],
                        "display-lg": ["Inter"],
                        "body-lg": ["Inter"]
                    },
                    "fontSize": {
                        "label-md": ["14px", {"lineHeight": "1.4", "letterSpacing": "0.05em", "fontWeight": "500"}],
                        "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "display-lg-mobile": ["40px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "600"}],
                        "label-sm": ["12px", {"lineHeight": "1.4", "letterSpacing": "0.1em", "fontWeight": "600"}],
                        "headline-md": ["32px", {"lineHeight": "1.3", "fontWeight": "500"}],
                        "headline-lg": ["48px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "500"}],
                        "display-lg": ["72px", {"lineHeight": "1.1", "letterSpacing": "-0.04em", "fontWeight": "600"}],
                        "body-lg": ["20px", {"lineHeight": "1.6", "fontWeight": "400"}]
                    }
                },
            },
        }
    </script>
<style>
        body { font-family: 'Inter', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .document-texture {
            background-image: 
                radial-gradient(circle at 2px 2px, rgba(0,0,0,0.02) 1px, transparent 0);
            background-size: 24px 24px;
        }
        .glass-panel {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
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
            Step 5
        </button>
</div>
</nav>
<!-- Sidebar Navigation -->
<aside class="fixed left-0 top-20 bottom-0 flex flex-col py-stack-sm bg-surface-container dark:bg-surface-container-high w-80 shadow-sm border-r border-outline-variant/10">
<div class="px-8 mb-8">
<div class="flex items-center gap-3 mb-2">
<div class="w-8 h-8 flex items-center justify-center bg-secondary-container text-on-secondary-container rounded-none">
<span class="material-symbols-outlined text-[18px]">fact_check</span>
</div>
<h3 class="font-label-md text-label-md font-bold text-primary uppercase tracking-widest">Quote Progress</h3>
</div>
<p class="text-on-surface-variant opacity-60 text-sm">Step 5 of 5</p>
<div class="w-full bg-outline-variant/30 h-[2px] mt-4 overflow-hidden">
<div class="bg-secondary h-full w-full"></div>
</div>
</div>
<nav class="flex-1 space-y-1">
<div class="flex items-center py-4 text-on-surface-variant pl-4 opacity-100 cursor-default">
<span class="material-symbols-outlined text-secondary-container mr-3" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-label-md text-label-md font-medium">Product Selection</span>
</div>
<div class="flex items-center py-4 text-on-surface-variant pl-4 opacity-100 cursor-default">
<span class="material-symbols-outlined text-secondary-container mr-3" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-label-md text-label-md font-medium">Personal Details</span>
</div>
<div class="flex items-center py-4 text-on-surface-variant pl-4 opacity-100 cursor-default">
<span class="material-symbols-outlined text-secondary-container mr-3" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-label-md text-label-md font-medium">Logistics</span>
</div>
<div class="flex items-center py-4 text-on-surface-variant pl-4 opacity-100 cursor-default">
<span class="material-symbols-outlined text-secondary-container mr-3" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-label-md text-label-md font-medium">Documentation</span>
</div>
<div class="text-primary font-bold border-l-4 border-secondary bg-surface-bright pl-4 flex items-center py-4 active:translate-x-1 duration-300">
<span class="material-symbols-outlined mr-3">fact_check</span>
<span class="font-label-md text-label-md">Review</span>
</div>
</nav>
<div class="px-8 mt-auto">

</div>
</aside>
<!-- Main Content Canvas -->
<main class="ml-80 pt-32 pb-stack-lg px-margin-desktop">
<div class="max-w-[1000px] mx-auto">
<!-- Header Section -->
<section class="mb-stack-sm">
<h2 class="font-headline-lg text-headline-lg text-primary mb-4">Review Your Inquiry</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                    Please verify your selection and logistics details before final submission. Our team will review the parameters and issue an official pricing sheet via email.
                </p>
</section>
<!-- Quotation Document Preview -->
<div class="relative bg-white shadow-2xl document-texture border border-outline-variant/30 overflow-hidden mb-stack-sm">
<!-- Branding Header Accent -->
<div class="h-1.5 w-full bg-gradient-to-r from-primary via-secondary-container to-primary"></div>
<div class="p-12">
<!-- Document Header -->
<div class="flex justify-between items-start mb-16">
<div>
<div class="flex items-center gap-2 mb-6">

<img alt="JANA FRESH" class="h-10  object-contain items-left justify-left" style="width:250px; height:auto;" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCn8kBDd576Ww8axOYFh8cgq_meB4uyzhye4Xpo9xDdOfi_i4laA-bE8eZzZQ_VOSI74-sZhsfeDPdgl1v5Fnc6gT2GOLOwWSDkv9SdvIvF-QJEtva5Mxyk0yjovtQKczj25La1k8ukwuvSRc-jZDEAeL5xCyVgpuRItMSx9HChCqGLeQAeNyMauM1mrdohrTG43DarTjFW3TsAm4G4o4MW773hfLFYlFBJDJolL1rCfzNUWLDpxi4sUyp21l6WDIIMySDaaVRc-wj_"/></div>
<div class="space-y-1">
<p class="font-label-sm text-label-sm text-on-surface-variant uppercase opacity-60">Status</p>
<span class="inline-block px-3 py-1 bg-secondary-container/10 text-secondary-container border border-secondary-container font-label-md text-label-sm">DRAFT QUOTATION</span>
</div>
</div>
<div class="text-right">
<h4 class="font-headline-md text-headline-md text-primary mb-1">JF-Q2026-<?php echo $order_id ?></h4>
<p class="font-label-md text-label-md text-on-surface-variant">Issued: <?php echo date('F, d, Y');?></p>
<p class="font-label-md text-label-md text-on-surface-variant">Valid for: 7 Days</p>
</div>
</div>
<!-- Client Info -->
<div class="grid grid-cols-2 gap-stack-sm mb-16">
<div>
<h5 class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest mb-4 opacity-60">Prepared For</h5>
<div class="space-y-1">
<p class="font-headline-md text-body-lg font-bold text-primary"><?php echo $billing_name;?></p>
<p class="font-body-md text-body-md text-on-surface-variant"><?php echo "$company_name";?></p>
<p class="font-body-md text-body-md text-on-surface-variant"><?php echo $billing_state_name.",".$billing_country_name;?></p>
</div>
</div>
<div>
<h5 class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest mb-4 opacity-60">Supply Origin</h5>
<div class="space-y-1">
<p class="font-headline-md text-body-lg font-bold text-primary">Jana Fresh Industrial Complex</p>
<p class="font-body-md text-body-md text-on-surface-variant"> Western Delta</p>
<p class="font-body-md text-body-md text-on-surface-variant">Central Province, Egypt</p>
</div>
</div>
</div>
<!-- Line Items Table -->
<div class="mb-16">
<table class="w-full border-collapse">
<thead>
<tr class="border-b-2 border-primary">
<th class="text-left py-4 font-label-md text-label-md uppercase tracking-wider text-on-surface-variant">Product Description</th>
<th class="text-right py-4 font-label-md text-label-md uppercase tracking-wider text-on-surface-variant">Category</th>
<th class="text-right py-4 font-label-md text-label-md uppercase tracking-wider text-on-surface-variant">Quantity (MT)</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant/30">
<?php foreach ($products as $product): ?>
<tr>
    <td class="py-6 font-body-md font-bold text-primary">
        <?= esc_html($product['name']); ?>
    </td>
    <td class="py-6 text-right font-body-md text-on-surface-variant">
        <?= esc_html($product['grade']); ?>
    </td>
    <td class="py-6 text-right font-body-md font-medium text-primary">
        <?= esc_html($product['qty']); ?>
    </td>
</tr>
<?php endforeach; ?>

</tbody>
</table>
</div>
<!-- Logistics & Terms Grid -->
<div class="grid grid-cols-3 gap-8 p-8 bg-surface-container-low border-l-4 border-secondary-container">
<div>
<p class="font-label-sm text-label-sm text-on-surface-variant uppercase mb-2 opacity-60">Incoterms</p>
<p class="font-body-md font-bold text-primary"><?php echo $incoterm;?></p>
</div>
<div>
<p class="font-label-sm text-label-sm text-on-surface-variant uppercase mb-2 opacity-60">Freight Type</p>
<p class="font-body-md font-bold text-primary"><?php echo $handling;?></p>
</div>
<div>
<p class="font-label-sm text-label-sm text-on-surface-variant uppercase mb-2 opacity-60">Payment Model</p>
<p class="font-body-md font-bold text-primary"><?php echo strtoupper($payment_type);?></p>
</div>
</div>
<!-- Watermark -->
<div class="absolute bottom-12 right-12 opacity-10 select-none pointer-events-none">
<span class="material-symbols-outlined text-[120px]" style="font-variation-settings: 'FILL' 1;">verified</span>
</div>
</div>
</div>
<!-- Action Area -->
<div class="flex flex-col md:flex-row items-center justify-between gap-6 pt-stack-sm border-t border-outline-variant/20">
<button class="flex items-center gap-2 px-8 py-4 border border-on-surface hover:bg-surface-container transition-all group">
<span class="material-symbols-outlined group-hover:-translate-x-1 transition-transform">arrow_back</span>
<span class="font-label-md text-label-md uppercase tracking-widest font-bold">Back to Payment Terms</span>
</button>
<button class="w-full md:w-auto px-12 py-5 bg-secondary-container text-primary hover:bg-secondary transition-all active:scale-95 shadow-xl">
<div class="flex items-center justify-center gap-3">
<span class="material-symbols-outlined">mail</span>
<span class="font-label-md text-label-md font-bold uppercase tracking-widest">Email me prices</span>
</div>
</button>
</div>
<!-- Verification Footer -->
<p class="mt-8 text-center text-on-surface-variant opacity-60 text-sm italic">
                By clicking "Email me prices", you acknowledge that this is an inquiry only. Pricing is subject to market fluctuation until a binding contract is signed.
            </p>
</div>
</main>
<!-- Floating Atmosphere Elements -->
<div class="fixed inset-0 pointer-events-none -z-10 overflow-hidden opacity-20">
<div class="absolute -top-24 -left-24 w-96 h-96 bg-secondary-container/10 blur-[120px] rounded-full"></div>
<div class="absolute bottom-0 right-0 w-[50vw] h-[50vw] bg-on-primary-container/5 blur-[150px] rounded-full"></div>
</div>
<script>
        // Micro-interaction for the submission button
        document.querySelector('button.bg-secondary-container').addEventListener('click', function() {
            const btn = this;
            const originalContent = btn.innerHTML;
            btn.innerHTML = '<span class="material-symbols-outlined animate-spin">progress_activity</span> <span class="font-label-md text-label-md font-bold uppercase tracking-widest">Sending Request...</span>';
            btn.classList.add('opacity-80', 'cursor-not-allowed');
            
            setTimeout(() => {
                btn.innerHTML = '<span class="material-symbols-outlined">check_circle</span> <span class="font-label-md text-label-md font-bold uppercase tracking-widest">Request Sent</span>';
                btn.classList.remove('bg-secondary-container');
                btn.classList.add('bg-green-600', 'text-white');
            }, 1800);
        });
    </script>
</body></html>