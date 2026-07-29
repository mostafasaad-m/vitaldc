<?php 
/**
 * Template Name: Custom Start
 */


get_header();?>

<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body {
            background-color: #131315;
            color: #e5e2e3;
            -webkit-font-smoothing: antialiased;
        }
        .glass-card {
            background: rgba(17, 24, 39, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: inset 0 1px 1px rgba(255, 255, 255, 0.05);
        }
        .glow-input:focus {
            outline: none;
            border-color: #06B6D4;
            box-shadow: 0 0 15px rgba(6, 182, 212, 0.2);
        }
        .step-active {
            color: #b0c6ff;
            text-shadow: 0 0 10px rgba(176, 198, 255, 0.5);
        }
    </style>

<body class="bg-background text-on-background min-h-screen flex flex-col font-body-md">
<!-- TopAppBar -->

<!-- Main Content Area -->
<main class="flex-grow pt-[120px] pb-xl px-md max-w-container-max mx-auto w-full">
<!-- Progress Indicator -->
<div class="max-w-3xl mx-auto mb-xl">
<div class="flex justify-between items-center relative">
<div class="absolute top-1/2 left-0 w-full h-[1px] bg-outline-variant -z-10"></div>
<!-- Step 1: Audit -->
<div class="flex flex-col items-center gap-xs bg-background px-xs">
<div class="w-8 h-8 rounded-full border-2 border-primary flex items-center justify-center bg-primary-container">
<span class="material-symbols-outlined text-primary text-[18px]">search</span>
</div>
<span class="font-label-caps text-label-caps text-primary">Audit</span>
</div>
<!-- Step 2: Architecture -->
<div class="flex flex-col items-center gap-xs bg-background px-xs">
<div class="w-8 h-8 rounded-full border border-outline-variant flex items-center justify-center bg-surface-container">
<span class="material-symbols-outlined text-on-surface-variant text-[18px]">architecture</span>
</div>
<span class="font-label-caps text-label-caps text-on-surface-variant">Architecture</span>
</div>
<!-- Step 3: Services -->
<div class="flex flex-col items-center gap-xs bg-background px-xs">
<div class="w-8 h-8 rounded-full border border-outline-variant flex items-center justify-center bg-surface-container">
<span class="material-symbols-outlined text-on-surface-variant text-[18px]">settings_input_component</span>
</div>
<span class="font-label-caps text-label-caps text-on-surface-variant">Services</span>
</div>
<!-- Step 4: Deploy -->
<div class="flex flex-col items-center gap-xs bg-background px-xs">
<div class="w-8 h-8 rounded-full border border-outline-variant flex items-center justify-center bg-surface-container">
<span class="material-symbols-outlined text-on-surface-variant text-[18px]">rocket_launch</span>
</div>
<span class="font-label-caps text-label-caps text-on-surface-variant">Deploy</span>
</div>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-xl">
<!-- Sidebar / Context -->
<div class="lg:col-span-4 space-y-lg">
<div class="space-y-sm">
<h1 class="font-display-lg text-display-lg text-on-background leading-none">Audit &amp; <br><span class="text-secondary">Discovery</span></h1>
<p class="font-body-md text-on-surface-variant max-w-sm">
                        Initialize your digital footprint assessment. Provide your current technical stack details to let our engine calculate optimal infrastructure paths.
                    </p>
</div>
<div class="glass-card p-md rounded-xl space-y-md">
<div class="flex items-center gap-sm">
<span class="material-symbols-outlined text-secondary">info</span>
<span class="font-label-caps text-label-caps text-secondary uppercase tracking-widest">Why an Audit?</span>
</div>
<p class="font-body-sm text-on-surface-variant">
                        Our discovery phase analyzes latency bottlenecks and cost inefficiencies within your current environment to suggest immediate high-impact optimizations.
                    </p>
<div class="pt-sm border-t border-white/5">
<div class="flex justify-between items-center text-on-surface-variant">
<span class="font-code-snippet text-code-snippet">Estimated Time</span>
<span class="font-code-snippet text-code-snippet text-on-surface">~4 mins</span>
</div>
</div>
</div>
<div class="relative h-[240px] rounded-xl overflow-hidden border border-white/10 group">
<img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="A futuristic data center interior with rows of server racks illuminated by sharp blue and violet LED strips. The atmosphere is cold, precise, and high-tech, featuring a dark polished floor reflecting the glowing server lights. The image conveys high-performance digital infrastructure with a cinematic and minimal cyber-tech aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDT2MTiJ5JnB9jcLBTwnKJq2GNeNE9Fa4ccyora4mGaJsGEnLynslRVxFPsWbehhfnukGdvef3M1h259disO9mRo7k7cr7rT03ESFG4AUDECqLg_LG5VbhJsBTrKAIITDXtRTzKvAJtz1KY1iV0wiXivDtBVsR0pWKgCL3VBkxzi49PWQs8a8iyrUMgP46gLcOBKviLqyCv6hzLrs2Nn36nylqDS89JXNsRTvMbnKDr0Uy-FGpSYFFy1iPKtJRQV4T8t9jm8TguRuw">
<div class="absolute inset-0 bg-gradient-to-t from-background/90 to-transparent flex flex-col justify-end p-md">
<span class="font-label-caps text-[10px] text-primary bg-primary/10 px-xs py-[2px] w-fit mb-xs">LIVE ENVIRONMENT</span>
<p class="font-body-sm font-semibold">DC-Node: Frankfurt-01</p>
</div>
</div>
</div>
<!-- Intake Form Canvas -->
<div class="lg:col-span-8">
<div class="glass-card p-xl rounded-xl">

<form id="architecture-intake-form" class="space-y-xl main-form" method="POST" action="<?php echo esc_url( admin_url('admin-ajax.php') ); ?>">
<input type="hidden" name="action" value="save_architecture_intake">
<!-- Infrastructure Section -->
<section class="space-y-md">
<div class="flex items-center gap-xs">
<span class="font-code-snippet text-secondary">01</span>
<h2 class="font-headline-md text-headline-md">Contact Inforamtaion</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-md">
<div class="space-y-xs">
<label class="font-label-caps text-label-caps text-on-surface-variant uppercase required-field">Name</label>
<input name="billing_first_name" class="w-full bg-surface-container-lowest border border-outline-variant rounded-lg p-md font-body-md glow-input text-on-surface" placeholder="Name" type="text">
</div>
<div class="space-y-xs">
<label class="font-label-caps text-label-caps text-on-surface-variant uppercase required-field">Company</label>
<input name="billing_company" class="w-full bg-surface-container-lowest border border-outline-variant rounded-lg p-md font-body-md glow-input text-on-surface" placeholder="Company" type="text">
</div>
<div class="space-y-xs">
<label class="font-label-caps text-label-caps text-on-surface-variant uppercase required-field">Phone</label>
<input name="billing_phone" class="w-full bg-surface-container-lowest border border-outline-variant rounded-lg p-md font-body-md glow-input text-on-surface" placeholder="Phone" type="text">
</div>
<div class="space-y-xs">
<label class="font-label-caps text-label-caps text-on-surface-variant uppercase required-field">Email</label>
<input name="billing_mail" class="w-full bg-surface-container-lowest border border-outline-variant rounded-lg p-md font-body-md glow-input text-on-surface" placeholder="John-doe@email.com" type="text">
</div>
<div class="space-y-xs">
<label class="font-label-caps text-label-caps text-on-surface-variant uppercase required-field">Current Website Host</label>
<select name="current_provider" id="current_provider" class="w-full bg-surface-container-lowest border border-outline-variant rounded-lg p-md font-body-md glow-input text-on-surface appearance-none">
<option value="no">I don't have a website</option>
<option>Google Cloud Platform</option>
<option>Microsoft Azure</option>
<option>Hostgator</option>
<option>Hostinger</option>
<option>GoDaddy</option>
<option>Egyptian Provider</option>
<option value="no">I don't know</option>
</select>
</div>


<div id="website-wrapper" class="hidden">
    <label class="font-label-caps text-label-caps text-on-surface-variant uppercase required-field">
        Website URL
    </label>

    <input
        type="url"
        name="website_url"
        id="website_url"
        class="w-full bg-surface-container-lowest border border-outline-variant rounded-lg p-md font-body-md glow-input text-on-surface"
    >
</div>

<div class="space-y-xs">
<label class="font-label-caps text-label-caps text-on-surface-variant uppercase required-field">Do you have a CRM system?</label>
<select name="crm_status" class="w-full bg-surface-container-lowest border border-outline-variant rounded-lg p-md font-body-md glow-input text-on-surface appearance-none">
<option>No</option>
<option>Yes</option>
<option>I don't know</option>
</select>
</div>



</div>
</section>
<!-- Pain Points / Technical Requirements -->
<section class="space-y-md">
<div class="flex items-center gap-xs">
<span class="font-code-snippet text-secondary">02</span>
<h2 class="font-headline-md text-headline-md">Key Requirements</h2>
</div>
<div class="space-y-md">
<label class="font-label-caps text-label-caps text-on-surface-variant uppercase block">What do you want to achieve with VitalDC?</label>
<div class="grid grid-cols-2 md:grid-cols-3 gap-sm">
<label class="flex items-center gap-sm p-md border border-outline-variant rounded hover:border-secondary/50 cursor-pointer transition-colors bg-surface-container/50">
<input name="pain_points[]" value="company-website" class="rounded border-outline-variant text-primary focus:ring-primary bg-background" type="checkbox">
<span class="font-body-sm">Company Website</span>
</label>
<label class="flex items-center gap-sm p-md border border-outline-variant rounded hover:border-secondary/50 cursor-pointer transition-colors bg-surface-container/50">
<input name="pain_points[]" value="business emails" class="rounded border-outline-variant text-primary focus:ring-primary bg-background" type="checkbox" >
<span class="font-body-sm">Business Emails</span>
</label>
<label class="flex items-center gap-sm p-md border border-outline-variant rounded hover:border-secondary/50 cursor-pointer transition-colors bg-surface-container/50">
<input name="pain_points[]" value="leads" class="rounded border-outline-variant text-primary focus:ring-primary bg-background" type="checkbox">
<span class="font-body-sm">New Export Leads</span>
</label>
<label class="flex items-center gap-sm p-md border border-outline-variant rounded hover:border-secondary/50 cursor-pointer transition-colors bg-surface-container/50">
<input name="pain_points[]" value="crm" class="rounded border-outline-variant text-primary focus:ring-primary bg-background" type="checkbox">
<span class="font-body-sm">Internal CRM</span>
</label>
<label class="flex items-center gap-sm p-md border border-outline-variant rounded hover:border-secondary/50 cursor-pointer transition-colors bg-surface-container/50">
<input name="pain_points[]" value="erp" class="rounded border-outline-variant text-primary focus:ring-primary bg-background" type="checkbox">
<span class="font-body-sm">ERP System</span>
</label>
<label class="flex items-center gap-sm p-md border border-outline-variant rounded hover:border-secondary/50 cursor-pointer transition-colors bg-surface-container/50">
<input name="pain_points[]" value="ai-integration" class="rounded border-outline-variant text-primary focus:ring-primary bg-background" type="checkbox">
<span class="font-body-sm">AI Integrations</span>
</label>
</div>
</div>
</section>
<!-- Additional Context -->
<section class="space-y-md">
<div class="flex items-center gap-xs">
<span class="font-code-snippet text-secondary">03</span>
<h2 class="font-headline-md text-headline-md">Contextual Data</h2>
</div>
<div class="space-y-xs">
<label class="font-label-caps text-label-caps text-on-surface-variant uppercase">Current Overview</label>
<textarea name="additional_info" class="w-full bg-surface-container-lowest border border-outline-variant rounded-lg p-md font-body-md glow-input text-on-surface resize-none" placeholder="Tell us more about your current situation..." rows="4"></textarea>
</div>
</section>
<div class="pt-xl flex flex-col md:flex-row justify-between items-center gap-md">
<button class="text-on-surface-variant hover:text-on-surface transition-colors font-label-caps text-label-caps px-md py-xs flex items-center gap-xs" type="button">
<span class="material-symbols-outlined text-[18px]">chevron_left</span>
                                Back to Dashboard
                            </button>
<button type="submit" class="w-full md:w-auto bg-secondary text-on-secondary-fixed font-label-caps text-label-caps px-xl py-md rounded-lg flex items-center justify-center gap-sm hover:brightness-110 active:scale-95 transition-all shadow-lg shadow-secondary/10" type="submit">
                                Enhance My Export Potential
                                <span class="material-symbols-outlined text-[18px]">arrow_right_alt</span>
</button>
</div>
</form>


</div>
<!-- Micro-Interactions Footer -->
<div class="mt-md flex justify-between items-center px-sm">
<div class="flex items-center gap-sm text-[11px] font-code-snippet text-on-surface-variant/40">
<span>SYSTEM STATUS: <span class="text-secondary">READY</span></span>
<span class="w-[1px] h-3 bg-outline-variant"></span>
<span>LATENCY: 12ms</span>
</div>
<div class="flex items-center gap-xs">
<div class="w-1.5 h-1.5 rounded-full bg-secondary animate-pulse"></div>
<span class="text-[11px] font-code-snippet text-on-surface-variant/40 uppercase">AI-Consultant Online</span>
</div>
</div>
</div>
</div>
</main>
<!-- Footer -->
<footer class="w-full py-xl border-t border-white/5 bg-surface-container-lowest">
<div class="flex flex-col md:flex-row justify-between items-center w-full px-xl max-w-container-max mx-auto gap-md">
<span class="font-headline-md text-headline-md font-bold text-on-surface">VitalDC</span>
<div class="flex gap-md">
<a class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary transition-colors duration-200" href="#">Privacy Policy</a>
<a class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary transition-colors duration-200" href="#">Terms of Service</a>
<a class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary transition-colors duration-200" href="#">Security</a>
<a class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary transition-colors duration-200" href="#">System Status</a>
</div>
<p class="font-body-sm text-body-sm text-secondary opacity-80 hover:opacity-100 transition-opacity">
                © 2026 VitalDC Digital Infrastructure. Engineered for the Digital Age.
            </p>
</div>
</footer>
<script>

document.addEventListener('DOMContentLoaded', function () {

    console.log('Architecture form loaded');

    const form = document.getElementById('architecture-intake-form');

    if (!form) {
        console.error('Form not found');
        return;
    }

    const providerSelect = document.getElementById('current_provider');
    const websiteWrapper = document.getElementById('website-wrapper');
    const websiteInput = document.getElementById('website_url');

    function toggleWebsiteField() {

        if (!providerSelect) return;

        if (providerSelect.value !== 'no') {

            if (websiteWrapper) {
                websiteWrapper.classList.remove('hidden');
            }

            if (websiteInput) {
                websiteInput.required = true;
            }

        } else {

            if (websiteWrapper) {
                websiteWrapper.classList.add('hidden');
            }

            if (websiteInput) {
                websiteInput.required = false;
                websiteInput.value = '';
            }
        }
    }

    if (providerSelect) {
        providerSelect.addEventListener('change', toggleWebsiteField);
        toggleWebsiteField();
    }

    form.addEventListener('submit', function (e) {

        e.preventDefault();

        console.log('Submit clicked');

        let firstInvalid = null;

        const requiredFields = [
            'billing_first_name',
            'billing_company',
            'billing_phone',
            'billing_mail',
            'current_provider',
            'crm_status'
        ];

        requiredFields.forEach(function (fieldName) {

            const field = form.querySelector(`[name="${fieldName}"]`);

            if (!field) {
                console.warn('Missing field:', fieldName);
                return;
            }

            field.classList.remove(
                'border-red-500',
                'ring-2',
                'ring-red-300'
            );

            if (!field.value.trim()) {

                field.classList.add(
                    'border-red-500',
                    'ring-2',
                    'ring-red-300'
                );

                if (!firstInvalid) {
                    firstInvalid = field;
                }
            }
        });

        const checkedPainPoints = form.querySelectorAll(
    '[name="pain_points[]"]:checked'
);

if (checkedPainPoints.length === 0) {

    const firstPainPoint = form.querySelector(
        '[name="pain_points[]"]'
    );

    firstInvalid = firstInvalid || firstPainPoint;
}
        if (
            websiteInput &&
            websiteInput.required &&
            !websiteInput.value.trim()
        ) {

            firstInvalid = firstInvalid || websiteInput;
        }

        if (firstInvalid) {

            firstInvalid.focus();

            alert('Please complete all required fields.');

            return;
        }

        const formData = new FormData(form);

        formData.set(
            'action',
            'create_draft_architecture_order'
        );

        console.log('Sending AJAX');

        fetch('/wp-admin/admin-ajax.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(text => {

            console.log('AJAX response:', text);

            let data;

            try {
                data = JSON.parse(text);
            } catch (e) {
                alert('Invalid JSON response');
                return;
            }

            if (
                data.success &&
                data.data &&
                data.data.order_id
            ) {

                window.location.href =
                    '/start/arch/?order_id=' +
                    data.data.order_id;

            } else {

                alert(
                    data.data?.message ||
                    'Order creation failed'
                );
            }

        })
        .catch(error => {

            console.error(error);

            alert('AJAX request failed');
        });

    });

});
</script>


</body></html>