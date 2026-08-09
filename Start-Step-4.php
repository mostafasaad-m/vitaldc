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
<p class="font-label-caps text-label-caps text-export-orange mb-stack-sm tracking-widest"><?php echo vitaldc_t('STEP 04 OF 04 : FINAL REVIEW', 'الخطوة 04 من 04: المراجعة النهائية'); ?></p>
<h1 class="font-headline-lg text-headline-lg font-extrabold tracking-tight uppercase"><?php echo vitaldc_t('Review Your Order & Confirm', 'مراجعة وتأكيد طلبك'); ?></h1>
</div>
<div class="font-label-caps text-label-sm text-outline-variant text-right border-l-2 border-export-orange pl-4">
                        ORDER_ID: VDC-8821<br>
                        REGION: EGYPT & GLOBAL
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
<h2 class="font-headline-md text-headline-md font-bold uppercase tracking-tight"><?php echo vitaldc_t('Selected Package & Features', 'ملخص الباقة والميزات'); ?></h2>
</div>
<?php
$order_id = $_SESSION['vitaldc_onboarding_order_id'] ?? 0;
$selected_package = '';
$selected_addons = array();
if ( $order_id && function_exists( 'wc_get_order' ) ) {
    $order = wc_get_order( $order_id );
    if ( $order ) {
        $selected_package = $order->get_meta( '_onboarding_package', true );
        $selected_addons = (array) $order->get_meta( '_onboarding_addons', true );
    }
}
if ( empty( $selected_package ) ) {
    $selected_package = vitaldc_t('Growth & Marketing Package', 'باقة النمو والتسويق');
}
?>
<div class="space-y-4">
<!-- Tier Selection -->
<div class="p-6 border border-surface-container-low rounded bg-surface-container-lowest/50 flex justify-between items-center group hover:border-export-orange transition-colors">
<div>
<p class="font-label-caps text-xs text-outline-variant uppercase mb-1"><?php echo vitaldc_t('Selected Package', 'الباقة المختارة'); ?></p>
<p id="display-selected-package" class="font-headline-md text-headline-md font-bold"><?php echo esc_html( $selected_package ); ?></p>
</div>
<a href="/start/tiers" class="material-symbols-outlined text-outline group-hover:text-export-orange transition-colors">edit</a>
</div>
<!-- Extensions -->
<div class="p-6 border border-surface-container-low rounded bg-surface-container-lowest/50">
<p class="font-label-caps text-xs text-outline-variant uppercase mb-4"><?php echo vitaldc_t('Selected Add-on Features', 'الميزات الإضافية المختارة'); ?></p>
<div id="display-selected-addons" class="flex flex-wrap gap-3">
<?php if ( ! empty( $selected_addons ) ) : ?>
    <?php foreach ( $selected_addons as $addon ) : ?>
        <div class="flex items-center gap-2 px-3 py-1.5 bg-primary-container text-primary rounded-sm border border-primary/20">
            <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">check_circle</span>
            <span class="font-label-caps text-xs uppercase font-bold"><?php echo esc_html( $addon ); ?></span>
        </div>
    <?php endforeach; ?>
<?php else : ?>
<div class="flex items-center gap-2 px-3 py-1.5 bg-primary-container text-primary rounded-sm border border-primary/20">
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">security</span>
<span class="font-label-caps text-xs uppercase font-bold"><?php echo vitaldc_t('Security & SSL Shield', 'حماية الأمان وشهادة SSL'); ?></span>
</div>
<div class="flex items-center gap-2 px-3 py-1.5 bg-primary-container text-primary rounded-sm border border-primary/20">
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">analytics</span>
<span class="font-label-caps text-xs uppercase font-bold"><?php echo vitaldc_t('Smart Sales Analytics', 'تحليلات المبيعات الذكية'); ?></span>
</div>
<div class="flex items-center gap-2 px-3 py-1.5 bg-primary-container text-primary rounded-sm border border-primary/20">
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">language</span>
<span class="font-label-caps text-xs uppercase font-bold"><?php echo vitaldc_t('High-Speed CDN', 'تسريع الأداء والوصول السريع'); ?></span>
</div>
<?php endif; ?>
</div>
</div>
</div>
</section>
<section>
<div class="flex items-center gap-3 mb-stack-md">
<span class="material-symbols-outlined text-export-orange">gavel</span>
<h2 class="font-headline-md text-headline-md font-bold uppercase tracking-tight"><?php echo vitaldc_t('Terms & Service Agreement', 'الشروط واتفاقية الخدمة'); ?></h2>
</div>
<div class="space-y-4">
<label class="flex items-start gap-4 p-4 border border-surface-container-low rounded cursor-pointer hover:bg-surface-container-lowest transition-colors">
<input checked="" class="mt-1 w-5 h-5 rounded border-outline-variant text-export-orange focus:ring-export-orange" type="checkbox">
<div>
<p class="font-label-caps text-sm font-bold uppercase"><?php echo vitaldc_t('Client Data & IP Guarantee', 'ضمان ملكية البيانات والملكية الفكرية'); ?></p>
<p class="text-sm text-outline-variant mt-1"><?php echo vitaldc_t('Confirm that your company retains 100% full ownership of your domain, website assets, and customer lists.', 'تأكيد احتفاظ شركتك بملكية كاملة 100% لنطاقك وأصول موقعك وقوائم عملائك.'); ?></p>
</div>
</label>
<label class="flex items-start gap-4 p-4 border border-surface-container-low rounded cursor-pointer hover:bg-surface-container-lowest transition-colors">
<input class="mt-1 w-5 h-5 rounded border-outline-variant text-export-orange focus:ring-export-orange" type="checkbox">
<div>
<p class="font-label-caps text-sm font-bold uppercase"><?php echo vitaldc_t('Service Onboarding Agreement', 'اتفاقية الانطلاق والخدمات'); ?></p>
<p class="text-sm text-outline-variant mt-1"><?php echo vitaldc_t('Accept terms of dedicated onboarding, continuous support, and campaign launch setup.', 'الموافقة على شروط المتابعة والدعم المستمر وتجهيز إطلاق الخدمات.'); ?></p>
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
<h3 class="font-label-caps text-label-caps text-secondary mb-6 border-b border-glass pb-2 uppercase tracking-widest"><?php echo vitaldc_t('Package Guarantee', 'ضمانات الخدمة'); ?></h3>
<div class="space-y-6">
<div class="flex justify-between items-end">
<span class="font-label-caps text-xs text-outline uppercase"><?php echo vitaldc_t('Target Speed', 'درجة السرعة Target'); ?></span>
<span class="font-label-caps text-lg font-bold text-secondary">99+ Lighthouse</span>
</div>
<div class="flex justify-between items-end">
<span class="font-label-caps text-xs text-outline uppercase"><?php echo vitaldc_t('Security Shield', 'مستوى الأمان'); ?></span>
<span class="font-label-caps text-lg font-bold text-white">SSL Encrypted</span>
</div>
<div class="flex justify-between items-end">
<span class="font-label-caps text-xs text-outline uppercase"><?php echo vitaldc_t('Onboarding Time', 'مدة الإعداد'); ?></span>
<span class="font-label-caps text-lg font-bold text-export-orange">&lt; 24 Hours</span>
</div>
<div class="pt-6 mt-6 border-t border-glass">
<div class="flex items-center gap-2 mb-2">
<span class="w-2 h-2 bg-secondary rounded-full"></span>
<span class="font-label-caps text-[10px] text-outline uppercase"><?php echo vitaldc_t('System Readiness Check', 'فحص جاهزية النظام'); ?></span>
</div>
<div class="w-full bg-surface-container-low h-1.5 rounded-full overflow-hidden">
<div class="bg-secondary h-full w-[100%] animate-pulse"></div>
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
<h4 class="font-label-caps text-sm font-bold text-surface-deep uppercase"><?php echo vitaldc_t('Final Confirmation', 'التأكيد النهائي والبدء'); ?></h4>
</div>
<p class="text-sm text-outline-variant"><?php echo vitaldc_t('By submitting, you authorize VitalDC to process your request and begin setting up your custom package immediately.', 'تأكيد الطلب يتيح لـ VitalDC البدء فوراً في إعداد باقتك وتجهيز خدماتك.'); ?></p>
<button class="w-full py-4 bg-export-orange text-surface-deep font-label-caps font-extrabold uppercase tracking-widest rounded shadow-lg hover:brightness-110 active:scale-[0.98] transition-all flex items-center justify-center gap-3">
    <span><?php echo vitaldc_t('Submit & Launch Order', 'تأكيد وإرسال الطلب'); ?></span>
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
<span class="font-label-caps text-secondary text-xs uppercase tracking-widest"><?php echo vitaldc_t('Global Visibility', 'ظهور عالمي'); ?></span>
<h4 class="font-headline-md text-white font-bold uppercase"><?php echo vitaldc_t('Fast Global Access', 'وصول عالمي سريع'); ?></h4>
<p class="text-on-surface-variant text-sm"><?php echo vitaldc_t('Your website is optimized for lightning-fast loading across all regional and international markets.', 'موقعك محسّن للتحميل الفائق عبر جميع الأسواق المحلية والعالمية.'); ?></p>
</div>
<div class="space-y-4">
<span class="font-label-caps text-secondary text-xs uppercase tracking-widest"><?php echo vitaldc_t('Security & Trust', 'الأمان والثقة'); ?></span>
<h4 class="font-headline-md text-white font-bold uppercase"><?php echo vitaldc_t('Protected Data & Forms', 'حماية البيانات والنماذج'); ?></h4>
<p class="text-on-surface-variant text-sm"><?php echo vitaldc_t('All customer submissions and company records are encrypted and securely protected.', 'جميع بيانات العملاء وسجلات الشركة محمية ومشفّرة بأمان.'); ?></p>
</div>
<div class="space-y-4">
<span class="font-label-caps text-secondary text-xs uppercase tracking-widest"><?php echo vitaldc_t('Ongoing Support', 'الدعم المستمر'); ?></span>
<h4 class="font-headline-md text-white font-bold uppercase"><?php echo vitaldc_t('Expert Team Support', 'فريق دعم متخصص'); ?></h4>
<p class="text-on-surface-variant text-sm"><?php echo vitaldc_t('Our dedicated team guides you through every step of your digital and marketing journey.', 'يقوم فريقنا المتخصص بمرافقتك في كل خطوة من رحلتك الرقمية والتسويقية.'); ?></p>
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

        document.addEventListener('DOMContentLoaded', () => {
            const savedPkg = localStorage.getItem('vitaldc_selected_package');
            const pkgDisplay = document.getElementById('display-selected-package');
            if (savedPkg && pkgDisplay) {
                pkgDisplay.textContent = savedPkg;
            }

            const savedAddons = localStorage.getItem('vitaldc_selected_addons');
            const addonsContainer = document.getElementById('display-selected-addons');
            if (savedAddons && addonsContainer) {
                try {
                    const list = JSON.parse(savedAddons);
                    if (Array.isArray(list) && list.length > 0) {
                        addonsContainer.innerHTML = list.map(item => `
                            <div class="flex items-center gap-2 px-3 py-1.5 bg-primary-container text-primary rounded-sm border border-primary/20">
                                <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                <span class="font-label-caps text-xs uppercase font-bold">${item}</span>
                            </div>
                        `).join('');
                    }
                } catch(e){}
            }
        });
    </script>

<?php get_footer('start'); ?>