<?php
/*
*
* Template Name: Form-4-Payment
*
*/
?>
<?php 
$order_id = absint($_GET['quote_id'] ?? 0);
$order = wc_get_order($order_id);

$total_metric_tons = (float) $order->get_meta('_quotation_total_metric_tons');

if (isset($_POST['save_payment'])) {

$order_id = absint($_GET['quote_id'] ?? 0);
    $order = wc_get_order($order_id);

    if (!$order) {
        wp_die('Order not found');
    }

    $total_metric_tons = (float)
        $order->get_meta('_quotation_total_metric_tons');

    $payment_type = sanitize_text_field(
        $_POST['payment_type'] ?? ''
    );

    if (
        $payment_type === 'lc'
        && $total_metric_tons < 500
    ) {
        wp_die(
            'Letter of Credit is only available for orders of 500 metric tons or more.'
        );
    }

    $order->update_meta_data(
        '_quotation_payment_type',
        $payment_type
    );

    if ($payment_type === 'hybrid') {

        $order->update_meta_data(
            '_quotation_hybrid_tt_percentage',
            (int) $_POST['hybrid_tt_percentage']
        );

        $order->update_meta_data(
            '_quotation_hybrid_lc_percentage',
            (int) $_POST['hybrid_lc_percentage']
        );
    }

    $order->save();

wp_safe_redirect(
    add_query_arg(
        [
            'quote_id' => $order_id,
        ],
        site_url('/quotation/review/')
    )
);
exit;
}

?>
<!DOCTYPE html>
<script><script>
const totalMetricTons = <?php echo json_encode($total_metric_tons); ?>;
</script></script>
<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Jana Fresh | Request a Quote - Step 4</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Geist:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 24px;
            height: 24px;
            background: #fe8f14;
            cursor: pointer;
            border-radius: 2px;
        }
        input[type="range"]::-moz-range-thumb {
            width: 24px;
            height: 24px;
            background: #fe8f14;
            cursor: pointer;
            border-radius: 2px;
        }
    </style>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-secondary-fixed-variant": "#6d3900",
                        "on-secondary-fixed": "#2e1500",
                        "inverse-surface": "#313030",
                        "outline": "#727973",
                        "on-error": "#ffffff",
                        "on-background": "#1c1b1b",
                        "surface-tint": "#496454",
                        "primary-fixed": "#cbead5",
                        "error-container": "#ffdad6",
                        "tertiary": "#000000",
                        "secondary-container": "#fe8f14",
                        "surface-container-low": "#f7f2f2",
                        "on-primary-fixed": "#052014",
                        "surface-dim": "#ddd9d8",
                        "on-tertiary-fixed-variant": "#484742",
                        "secondary-fixed-dim": "#ffb77c",
                        "on-error-container": "#93000a",
                        "surface-bright": "#fdf8f8",
                        "map-glow": "rgba(254, 143, 20, 0.4)",
                        "on-primary-container": "#6e8a79",
                        "inverse-primary": "#afceba",
                        "primary-fixed-dim": "#afceba",
                        "secondary": "#904d00",
                        "on-primary-fixed-variant": "#324c3d",
                        "tertiary-fixed": "#e5e2db",
                        "on-primary": "#ffffff",
                        "on-tertiary": "#ffffff",
                        "on-secondary": "#ffffff",
                        "inverse-on-surface": "#f4f0ef",
                        "background": "#fdf8f8",
                        "surface-container-high": "#ece7e7",
                        "on-surface": "#1c1b1b",
                        "primary-container": "#052014",
                        "on-tertiary-fixed": "#1c1c18",
                        "surface-container": "#f1edec",
                        "tertiary-fixed-dim": "#c9c6bf",
                        "secondary-fixed": "#ffdcc2",
                        "error": "#ba1a1a",
                        "surface-variant": "#e6e1e1",
                        "surface": "#fdf8f8",
                        "glass-white": "rgba(255, 255, 255, 0.03)",
                        "primary": "#000000",
                        "outline-variant": "#c2c8c2",
                        "on-tertiary-container": "#85847e",
                        "tertiary-container": "#1c1c18",
                        "on-secondary-container": "#633300",
                        "surface-container-highest": "#e6e1e1",
                        "on-surface-variant": "#424844",
                        "surface-container-lowest": "#ffffff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "stack-sm": "32px",
                        "unit": "8px",
                        "gutter": "32px",
                        "margin-tablet": "40px",
                        "stack-lg": "120px",
                        "margin-mobile": "24px",
                        "margin-desktop": "80px",
                        "stack-md": "64px",
                        "container-max": "1440px"
                    },
                    "fontFamily": {
                        "display-lg": ["Inter"],
                        "label-md": ["Geist"],
                        "body-lg": ["Inter"],
                        "headline-md": ["Inter"],
                        "body-md": ["Inter"],
                        "label-sm": ["Geist"],
                        "headline-lg": ["Inter"]
                    },
                    "fontSize": {
                        "display-lg": ["72px", {"lineHeight": "1.1", "letterSpacing": "-0.04em", "fontWeight": "600"}],
                        "label-md": ["14px", {"lineHeight": "1.4", "letterSpacing": "0.05em", "fontWeight": "500"}],
                        "body-lg": ["20px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "headline-md": ["32px", {"lineHeight": "1.3", "fontWeight": "500"}],
                        "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "label-sm": ["12px", {"lineHeight": "1.4", "letterSpacing": "0.1em", "fontWeight": "600"}],
                        "headline-lg": ["48px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "500"}]
                    }
                },
            },
        }
    </script>
</head>
<body class="bg-surface text-on-surface font-body-md overflow-x-hidden">
<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 bg-surface/80 backdrop-blur-md shadow-sm border-b border-outline-variant/30">
<div class="flex justify-between items-center px-margin-desktop py-4 max-w-container-max mx-auto">
<div class="cursor-pointer transition-all duration-200 active:scale-95">
<img alt="JANA FRESH" class="h-10 w-auto object-contain" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCn8kBDd576Ww8axOYFh8cgq_meB4uyzhye4Xpo9xDdOfi_i4laA-bE8eZzZQ_VOSI74-sZhsfeDPdgl1v5Fnc6gT2GOLOwWSDkv9SdvIvF-QJEtva5Mxyk0yjovtQKczj25La1k8ukwuvSRc-jZDEAeL5xCyVgpuRItMSx9HChCqGLeQAeNyMauM1mrdohrTG43DarTjFW3TsAm4G4o4MW773hfLFYlFBJDJolL1rCfzNUWLDpxi4sUyp21l6WDIIMySDaaVRc-wj_"/>
</div>

<button class="bg-primary text-on-primary px-6 py-3 rounded font-label-md text-label-md hover:opacity-90 transition-opacity duration-300 active:scale-95">
            Step 4
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
<p class="font-label-sm text-label-sm text-on-surface-variant opacity-70">Step 4 of 5</p>
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
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span>Shipping Terms</span>
</div>
<!-- Step 4 -->
<div class="flex items-center gap-4 px-8 py-4 text-on-surface-variant pl-4 opacity-60 font-label-md text-label-md hover:bg-surface-container-highest transition-all">
<span class="material-symbols-outlined">description</span>
<span>Payment Terms</span>
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
<!-- Main Content Area -->
<main class="flex-1 ml-80 p-margin-desktop bg-surface-container-low">

<form method="post">

<div class="max-w-container-max mx-auto">
<header class="mb-stack-md">
<h1 class="font-headline-lg text-headline-lg text-primary-container mb-4">Payment Terms</h1>
<p class="text-on-surface-variant max-w-2xl font-body-lg text-body-lg">Select your preferred transaction framework. Our industrial precision logistics supports flexible financial structures to ensure seamless international trade.</p>
</header>
<!-- Payment Selection Grid -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter mb-stack-md" id="payment-grid">
<!-- T/T -->
<label class="relative group cursor-pointer">
<input class="peer sr-only" name="payment_type" onclick="validateLC(this)" type="radio" value="tt"/>
<div class="h-full p-8 border border-outline-variant peer-checked:border-secondary peer-checked:bg-white bg-surface transition-all duration-300 group-hover:shadow-lg">
<div class="flex justify-between items-start mb-6">
<span class="material-symbols-outlined text-secondary text-4xl">payments</span>
<div class="w-4 h-4 rounded-full border border-outline peer-checked:bg-secondary"></div>
</div>
<h3 class="font-headline-md text-headline-md mb-2">T/T</h3>
<p class="text-on-surface-variant font-body-md text-body-md">Telegraphic Transfer. Standard international bank wire. Recommended for established logistics pipelines.</p>
<div class="mt-6 pt-6 border-t border-outline-variant/30 flex items-center text-secondary font-label-sm text-label-sm tracking-widest uppercase">
                                FASTEST PROCESSING
                            </div>
</div>
</label>
<!-- L/C -->
<label class="relative group cursor-pointer">
<input class="peer sr-only" name="payment_type" onclick="validateLC(this)" type="radio" value="lc"/>
<div class="h-full p-8 border border-outline-variant peer-checked:border-secondary peer-checked:bg-white bg-surface transition-all duration-300 group-hover:shadow-lg">
<div class="flex justify-between items-start mb-6">
<span class="material-symbols-outlined text-secondary text-4xl">account_balance</span>
<div class="w-4 h-4 rounded-full border border-outline peer-checked:bg-secondary"></div>
</div>
<h3 class="font-headline-md text-headline-md mb-2">L/C</h3>
<p class="text-on-surface-variant font-body-md text-body-md">Letter of Credit. Maximum security via banking intermediaries. Preferred for large-scale agricultural infrastructure projects.</p>
<div class="mt-6 pt-6 border-t border-outline-variant/30 flex items-center text-secondary font-label-sm text-label-sm tracking-widest uppercase">
                                HIGHEST SECURITY
                            </div>
</div>
</label>
<!-- Hybrid -->
<label class="relative group cursor-pointer">
<input class="peer sr-only" name="payment_type" onclick="toggleHybrid(true)" type="radio" value="hybrid"/>
<div class="h-full p-8 border border-outline-variant peer-checked:border-secondary peer-checked:bg-white bg-surface transition-all duration-300 group-hover:shadow-lg">
<div class="flex justify-between items-start mb-6">
<span class="material-symbols-outlined text-secondary text-4xl">layers</span>
<div class="w-4 h-4 rounded-full border border-outline peer-checked:bg-secondary"></div>
</div>
<h3 class="font-headline-md text-headline-md mb-2">Hybrid</h3>
<p class="text-on-surface-variant font-body-md text-body-md">Custom split between T/T and L/C. Optimized cash flow management for precision farming operations.</p>
<div class="mt-6 pt-6 border-t border-outline-variant/30 flex items-center text-secondary font-label-sm text-label-sm tracking-widest uppercase">
                                FLEXIBLE LIQUIDITY
                            </div>
</div>
</label>
</div>
<!-- Hybrid Configuration (Hidden by default) -->
<div class="hidden opacity-0 transition-all duration-500 transform translate-y-4" id="hybrid-config">
<div class="bg-primary-container p-10 border-l-4 border-secondary shadow-2xl relative overflow-hidden">
<!-- Background Texture -->
<div class="absolute inset-0 opacity-10 pointer-events-none">

</div>
<div class="relative z-10">
<div class="flex justify-between items-end mb-8">
<div>
<h4 class="font-headline-md text-headline-md text-on-primary mb-2">Hybrid Configuration</h4>
<p class="text-on-primary-container font-body-md text-body-md">Adjust the volume split between bank guarantee and direct wire.</p>
</div>
<div class="text-right">
<div class="text-secondary font-display-lg text-headline-lg leading-none" id="split-display">30% / 70%</div>
<div class="text-on-primary-container font-label-sm text-label-sm uppercase tracking-widest mt-2">Payment Split: T/T / L/C</div>
<input type="hidden" name="hybrid_tt_percentage" id="hybrid_tt_percentage" value="30">
    <input type="hidden" name="hybrid_lc_percentage" id="hybrid_lc_percentage" value="70">
</div>
</div>
<div class="space-y-6">
<div class="relative h-12 flex items-center">
<div class="absolute w-full h-1 bg-on-primary-fixed-variant opacity-20"></div>
<input class="absolute w-full h-1 bg-transparent appearance-none cursor-pointer" id="split-slider" max="80" min="20" oninput="updateSplit(this.value)" type="range" value="30"/>
</div>
<div class="flex justify-between font-label-md text-label-md text-on-primary-container">
<span>20% T/T (Min)</span>
<span>80% T/T (Max)</span>
</div>
</div>
</div>
</div>
</div>
<!-- Footer Actions -->
<div class="mt-stack-lg flex items-center justify-between pt-gutter border-t border-outline-variant/20">
<button class="flex items-center gap-2 px-8 py-4 border border-outline text-on-surface font-label-md text-label-md hover:bg-surface-variant transition-colors group">
<span class="material-symbols-outlined transition-transform group-hover:-translate-x-1">arrow_back</span>
                        Back
                    </button>
<button name="save_payment" type="submit" class="flex items-center gap-2 px-12 py-4 bg-secondary-container text-primary-container font-label-md text-label-md font-bold hover:brightness-110 active:scale-95 transition-all group">
                        Next: Review
                        <span class="material-symbols-outlined transition-transform group-hover:translate-x-1">arrow_forward</span>
</button>
	</form>
</div>
</div>
</main>
</div>
<!-- Background Decorative Elements -->
<div class="fixed bottom-0 right-0 w-1/3 h-1/2 opacity-5 pointer-events-none -z-10">
<span class="material-symbols-outlined text-[400px] text-primary" style="font-variation-settings: 'wght' 100;">agriculture</span>
</div>
<script>
        function toggleHybrid(show) {
            const config = document.getElementById('hybrid-config');
            if (show) {
                config.classList.remove('hidden');
                setTimeout(() => {
                    config.classList.remove('opacity-0', 'translate-y-4');
                }, 10);
            } else {
                config.classList.add('opacity-0', 'translate-y-4');
                setTimeout(() => {
                    config.classList.add('hidden');
                }, 500);
            }
        }

      function updateSplit(value) {

    const tt = parseInt(value);
    const lc = 100 - tt;

    document.getElementById('split-display').innerText =
        `${tt}% / ${lc}%`;

    document.getElementById('hybrid_tt_percentage').value = tt;
    document.getElementById('hybrid_lc_percentage').value = lc;
}

        // Initialize with default state if needed
        document.addEventListener('DOMContentLoaded', () => {
            const selected = document.querySelector('input[name="payment_type"]:checked');
            if (selected && selected.value === 'hybrid') {
                toggleHybrid(true);
            }
        });
    </script>
	<script>
function validateLC(radio) {

    if (totalMetricTons < 500) {

        alert(
            'Letter of Credit (L/C) is only available for orders of 500 metric tons or more.'
        );

        radio.checked = false;
    }
}

</script>
</body></html>