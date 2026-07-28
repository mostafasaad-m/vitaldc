<?php
/**
*
* Template name: Form-1-Details
*
*
*/
?>

<?php

if (
    isset($_POST['save_step_1']) || isset($_POST['secondary-save']) &&
    isset($_POST['quotation_nonce']) &&
    wp_verify_nonce($_POST['quotation_nonce'], 'quotation_step_1')
) {

    $full_name   = sanitize_text_field($_POST['full_name'] ?? '');
    $email       = sanitize_email($_POST['email'] ?? '');
    $phone       = sanitize_text_field($_POST['phone'] ?? '');
    $company     = sanitize_text_field($_POST['company_name'] ?? '');
    $country     = sanitize_text_field($_POST['country'] ?? '');
    $state       = sanitize_text_field($_POST['state'] ?? '');

    $name_parts = explode(' ', trim($full_name), 2);

    $first_name = $name_parts[0] ?? '';
    $last_name  = $name_parts[1] ?? '';

    /*
     * WooCommerce Order
     */
    $order = wc_create_order();

    $order->set_billing_first_name($first_name);
    $order->set_billing_last_name($last_name);
    $order->set_billing_email($email);
    $order->set_billing_phone($phone);
    $order->set_billing_company($company);
    $order->set_billing_country($country);
    $order->set_billing_state($state);

    $order->save();

    $order_id = $order->get_id();

    /*
     * Jetpack CRM Contact
     * (verify function exists in your installation)
     */
    $contact_id = 0;

    if (function_exists('zeroBS_addUpdateCustomer')) {

        $contact_id = zeroBS_addUpdateCustomer([
            'email'   => $email,
            'fname'   => $first_name,
            'lname'   => $last_name,
            'phoneno' => $phone,
        ]);
    }

    /*
     * Jetpack CRM Company
     */
    $company_id = 0;

    if (function_exists('zeroBS_addUpdateCompany')) {

        $company_id = zeroBS_addUpdateCompany([
            'name' => $company,
        ]);
    }


    /*
     * Save references
     */
    $order->update_meta_data('_jpcrm_contact_id', $contact_id);
    $order->update_meta_data('_jpcrm_company_id', $company_id);

    $order->save();

    /*
     * Store order for next step
     */
    WC()->session->set('quotation_order_id', $order_id);

$url = add_query_arg(
    'quote_id',
    $order_id,
    site_url('/quotation/select-products')
);

wp_safe_redirect($url);
exit;
}
?>

<!DOCTYPE html>

<html class="light scroll-smooth" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Jana Fresh - Request Quote - Step 1</title>
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
                        "on-primary-container": "#6e8a79",
                        "glass-white": "rgba(255, 255, 255, 0.03)",
                        "secondary-container": "#fe8f14",
                        "background": "#fdf8f8",
                        "surface-bright": "#fdf8f8",
                        "tertiary-fixed": "#e5e2db",
                        "surface-dim": "#ddd9d8",
                        "primary-container": "#052014",
                        "outline-variant": "#c2c8c2",
                        "on-tertiary": "#ffffff",
                        "surface-tint": "#496454",
                        "surface": "#fdf8f8",
                        "surface-container-low": "#f7f2f2",
                        "on-tertiary-container": "#85847e",
                        "on-secondary-fixed": "#2e1500",
                        "surface-container-lowest": "#ffffff",
                        "on-surface": "#1c1b1b",
                        "on-background": "#1c1b1b",
                        "tertiary-fixed-dim": "#c9c6bf",
                        "primary-fixed-dim": "#afceba",
                        "surface-container": "#f1edec",
                        "on-error-container": "#93000a",
                        "on-secondary-container": "#633300",
                        "surface-container-highest": "#e6e1e1",
                        "inverse-on-surface": "#f4f0ef",
                        "on-primary-fixed-variant": "#324c3d",
                        "inverse-surface": "#313030",
                        "map-glow": "rgba(254, 143, 20, 0.4)",
                        "on-surface-variant": "#424844",
                        "on-primary": "#ffffff",
                        "outline": "#727973",
                        "on-secondary-fixed-variant": "#6d3900",
                        "inverse-primary": "#afceba",
                        "surface-variant": "#e6e1e1",
                        "on-secondary": "#ffffff",
                        "tertiary-container": "#1c1c18",
                        "secondary-fixed": "#ffdcc2",
                        "primary": "#000000",
                        "on-primary-fixed": "#052014",
                        "secondary-fixed-dim": "#ffb77c",
                        "on-error": "#ffffff",
                        "surface-container-high": "#ece7e7",
                        "secondary": "#904d00",
                        "error": "#ba1a1a",
                        "tertiary": "#000000",
                        "on-tertiary-fixed-variant": "#484742",
                        "error-container": "#ffdad6",
                        "primary-fixed": "#cbead5",
                        "on-tertiary-fixed": "#1c1c18"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "unit": "8px",
                        "stack-lg": "120px",
                        "margin-tablet": "40px",
                        "gutter": "32px",
                        "margin-mobile": "24px",
                        "margin-desktop": "80px",
                        "stack-md": "64px",
                        "stack-sm": "32px",
                        "container-max": "1440px"
                    },
                    "fontFamily": {
                        "headline-md": ["Inter"],
                        "label-sm": ["Geist"],
                        "label-md": ["Geist"],
                        "display-lg-mobile": ["Inter"],
                        "display-lg": ["Inter"],
                        "headline-lg": ["Inter"],
                        "body-lg": ["Inter"],
                        "body-md": ["Inter"]
                    },
                    "fontSize": {
                        "headline-md": ["32px", {"lineHeight": "1.3", "fontWeight": "500"}],
                        "label-sm": ["12px", {"lineHeight": "1.4", "letterSpacing": "0.1em", "fontWeight": "600"}],
                        "label-md": ["14px", {"lineHeight": "1.4", "letterSpacing": "0.05em", "fontWeight": "500"}],
                        "display-lg-mobile": ["40px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "600"}],
                        "display-lg": ["72px", {"lineHeight": "1.1", "letterSpacing": "-0.04em", "fontWeight": "600"}],
                        "headline-lg": ["48px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "500"}],
                        "body-lg": ["20px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}]
                    }
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            line-height: 1;
            vertical-align: middle;
        }
        
        .glass-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #c2c8c2;
            border-radius: 10px;
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
<button class="bg-primary text-on-primary px-6 py-3 rounded font-label-md text-label-md hover:opacity-90 transition-opacity duration-300 active:scale-95">
           Step 1
        </button>
</div>
</nav>
<div class="flex h-screen pt-20">
<!-- Sidebar Navigation -->
<!-- SideNavBar (Quote Builder) -->
<aside class="fixed left-0 top-20 bottom-0 flex flex-col py-stack-sm bg-surface-container dark:bg-surface-container-high shadow-sm w-80 z-40">
<div class="px-8 pb-8 border-b border-outline-variant/10">
<div class="flex items-center gap-4 mb-2">
<div class="w-10 h-10 bg-secondary-container flex items-center justify-center">
<span class="material-symbols-outlined text-on-secondary-container">inventory_2</span>
</div>
<div>
<h3 class="font-label-md text-label-md text-primary font-bold">Quote Progress</h3>
<p class="font-label-sm text-label-sm text-on-surface-variant opacity-70">Step 1 of 5</p>
</div>
</div>
</div>
<nav class="flex-1 mt-6 space-y-1">
<div class="flex items-center gap-4 px-8 py-4 text-primary font-bold border-l-4 border-secondary bg-surface-bright pl-4 font-label-md text-label-md">
<span class="material-symbols-outlined text-secondary">Person</span>
<span>Personal Details</span>
</div>
<!-- Step 2 -->
<div class="flex items-center gap-4 px-8 py-4 text-on-surface-variant pl-4 opacity-60 font-label-md text-label-md">
<span class="material-symbols-outlined text-primary">nutrition</span>
<span>Select Products</span>
</div>
<!-- Step 3 (Active) -->
<div class="flex items-center gap-4 px-8 py-4 text-on-surface-variant pl-4 opacity-60 font-label-md text-label-md hover:bg-surface-container-highest transition-all">
<span class="material-symbols-outlined">delivery_truck_speed</span>
<span>Incoterms</span>
</div>

<!-- Step 4 -->
<div class="flex items-center gap-4 px-8 py-4 text-on-surface-variant pl-4 opacity-60 font-label-md text-label-md hover:bg-surface-container-highest transition-all">
<span class="material-symbols-outlined">Payments</span>
<span>Payment Terms</span>
</div>
<!-- Step 5 -->
<div class="flex items-center gap-4 px-8 py-4 text-on-surface-variant pl-4 opacity-60 font-label-md text-label-md hover:bg-surface-container-highest transition-all">
<span class="material-symbols-outlined">fact_check</span>
<span>Review</span>
</div>
</nav>
<div class="px-8 mt-auto">
<button id="secondary-save" type="submit" form="user_info_form" class="w-full py-4 border border-outline font-label-md text-label-md hover:bg-surface-container-highest transition-all">
                    Next Step
                </button>
</div>
</aside>
<!-- Main Content Area -->
<main class="ml-80 flex-grow bg-surface overflow-y-auto custom-scrollbar">
<div class="max-w-[800px] mx-auto py-stack-md px-margin-mobile">
<section class="mb-12">
<h1 class="font-headline-lg text-headline-lg text-primary-container mb-4">Personal &amp; Company Details</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                        Please provide your contact information and company details to help us personalize your quote and verify your global trade credentials.
                    </p>
</section>
<form id="user_info_form" class="space-y-stack-md" method="post">
<?php wp_nonce_field('quotation_step_1','quotation_nonce'); ?>
<!-- Personal Information Section -->
<fieldset class="space-y-6">
<div class="flex items-center gap-3 mb-6">
<div class="w-1 h-8 bg-secondary-container"></div>
<legend class="font-headline-md text-headline-md font-semibold">Personal Information</legend>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="space-y-2">
<label class="font-label-md text-label-md text-on-surface-variant block" for="full_name">Full Name</label>
<input name="full_name" required class="w-full bg-surface-container-lowest border border-outline-variant px-4 py-3 focus:border-secondary-container focus:ring-0 transition-all outline-none" id="full_name" placeholder="Johnathan Doe" type="text"/>
</div>
<div class="space-y-2">
<label class="font-label-md text-label-md text-on-surface-variant block" for="email">Email Address</label>
<input name="email" required class="w-full bg-surface-container-lowest border border-outline-variant px-4 py-3 focus:border-secondary-container focus:ring-0 transition-all outline-none" id="email" placeholder="j.doe@enterprise.com" type="email"/>
</div>
</div>
<div class="space-y-2">
<label class="font-label-md text-label-md text-on-surface-variant block" for="phone">Phone Number</label>
<div class="flex">
<select class="bg-surface-container-high border border-outline-variant border-r-0 px-3 py-3 font-label-md text-label-md focus:ring-0 outline-none">
<option>+1 (USA)</option>
<option>+31 (NLD)</option>
<option>+44 (GBR)</option>
<option>+971 (UAE)</option>
</select>
<input name="phone" required class="flex-grow bg-surface-container-lowest border border-outline-variant px-4 py-3 focus:border-secondary-container focus:ring-0 transition-all outline-none" id="phone" placeholder="555-0123" type="tel"/>
</div>
</div>
</fieldset>
<!-- Company Information Section -->
<fieldset class="space-y-6">
<div class="flex items-center gap-3 mb-6">
<div class="w-1 h-8 bg-secondary-container"></div>
<legend class="font-headline-md text-headline-md font-semibold">Company Information</legend>
</div>
<div class="space-y-2">
<label class="font-label-md text-label-md text-on-surface-variant block" for="company_name">Company Name</label>
<input name="company_name" required class="w-full bg-surface-container-lowest border border-outline-variant px-4 py-3 focus:border-secondary-container focus:ring-0 transition-all outline-none" id="company_name" placeholder="Global Logistics &amp; Produce Ltd." type="text"/>
</div>
</fieldset>
<!-- Tom Select -->
<link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>

<!-- Location Section -->
<fieldset class="space-y-6">
    <div class="flex items-center gap-3 mb-6">
        <div class="w-1 h-8 bg-secondary-container"></div>
        <legend class="font-headline-md text-headline-md font-semibold">
            Location
        </legend>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Country -->
        <div class="space-y-2">
            <label class="font-label-md text-label-md text-on-surface-variant block">
                Country
            </label>

            <select id="country" name="country" required>
                <option value="">Select Country</option>

                <?php
                foreach ( WC()->countries->get_countries() as $code => $name ) {
                    echo '<option value="' . esc_attr($code) . '">' . esc_html($name) . '</option>';
                }
                ?>
            </select>
        </div>

        <!-- State -->
        <div class="space-y-2">
            <label class="font-label-md text-label-md text-on-surface-variant block">
                State / Province
            </label>

            <select id="state" name="state">
                <option value="">Select Country First</option>
            </select>
        </div>

    </div>
</fieldset>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const statesData = <?php echo wp_json_encode(WC()->countries->get_states()); ?>;

    // Make BOTH searchable (Tom Select)
    const countrySelect = new TomSelect('#country', {
        create: false,
        maxOptions: 500,
        searchField: ['text']
    });

    const stateSelect = new TomSelect('#state', {
        create: false,
        maxOptions: 500,
        searchField: ['text']
    });

    countrySelect.on('change', function (countryCode) {

        stateSelect.clear(true);
        stateSelect.clearOptions();

        if (!statesData[countryCode]) {
            stateSelect.addOption({
                value: '',
                text: 'No states available'
            });
            stateSelect.refreshOptions(false);
            return;
        }

        stateSelect.addOption({
            value: '',
            text: 'Select State'
        });

        Object.entries(statesData[countryCode]).forEach(([code, name]) => {
            stateSelect.addOption({
                value: code,
                text: name
            });
        });

        stateSelect.refreshOptions(false);
    });

});
</script>
<!-- Navigation Actions -->
<div class="pt-12 flex justify-between items-center border-t border-outline-variant/20">
<button class="flex items-center gap-2 text-on-surface-variant font-label-md text-label-md hover:text-primary transition-colors" type="button">
<span class="material-symbols-outlined">arrow_back</span>
                            Back
                        </button>
<div class="flex gap-4">
<button class="bg-primary text-on-primary px-8 py-4 font-bold tracking-tight hover:bg-primary-container active:scale-95 transition-all" type="submit" id="save_step_1" name="save_step_1">
                                Next: Select Products
                            </button>

</div>
</div>
</form>
<!-- Informational Note -->
<div class="mt-stack-md p-6 bg-surface-container-low border-l-4 border-secondary-container">
<p class="font-label-md text-label-md text-on-surface-variant leading-relaxed">
<span class="font-bold text-primary">Global Compliance Note:</span> Jana Fresh adheres strictly to international trade regulations. Your company information will be verified against our global export database to ensure seamless customs clearance.
                    </p>
</div>
</div>
<!-- Footer Section inside Main (to allow scrolling content) -->
<footer class="w-full py-stack-sm px-margin-desktop flex justify-between items-center bg-surface-dim border-t border-outline-variant/20">
<p class="font-label-sm text-label-sm uppercase tracking-widest text-on-surface-variant/60">
                    © 2026 Jana Fresh Export. Crafted by <strong><a href="https://vitaldc.com">VitalDC</a></strong>. All Rights Reserved.
                </p>
<div class="flex gap-stack-sm">
<a class="font-label-sm text-label-sm uppercase tracking-widest text-on-surface-variant/60 hover:text-secondary transition-colors" href="#">Privacy Policy</a>
<a class="font-label-sm text-label-sm uppercase tracking-widest text-on-surface-variant/60 hover:text-secondary transition-colors" href="#">Terms of Service</a>
</div>
</footer>
</main>
</div>
<!-- Background Decorative Element (Subtle Glass Effect) -->
<div class="fixed bottom-0 right-0 w-1/3 h-1/2 pointer-events-none opacity-10">

</div>
<script>
        // Micro-interactions for form fields
        const inputs = document.querySelectorAll('input, select');
        inputs.forEach(input => {
            input.addEventListener('focus', () => {
                input.parentElement.classList.add('scale-[1.01]');
            });
            input.addEventListener('blur', () => {
                input.parentElement.classList.remove('scale-[1.01]');
            });
        });

        // Simple autocomplete mock behavior for Country/City
        const countryInput = document.getElementById('country');
        const cityInput = document.getElementById('city');

        countryInput.addEventListener('input', (e) => {
            // Placeholder logic for future autocomplete implementation
            console.log('Searching for country:', e.target.value);
        });

        // Toggle focus state on side nav items
        const sideNavItems = document.querySelectorAll('aside nav > div');
        sideNavItems.forEach(item => {
            if (!item.classList.contains('bg-secondary-container')) {
                item.addEventListener('click', () => {
                    console.log('Navigation to:', item.textContent.trim());
                });
            }
        });
    </script>
</body></html>