<?php 
/**
 * Template Name: Vital-Start-Step-1
 */


get_header('start');?>

<div class="flex flex-col md:flex-row min-h-[600px]">
<!-- Left Sidebar (Contextual Info) -->
<div class="md:w-1/3 bg-surface-container-low text-white p-stack-lg flex flex-col justify-between border-r border-glass">
<div>
<span class="font-label-caps text-label-caps text-tertiary block mb-stack-md"><?php echo vitaldc_t('GET STARTED', 'ابدأ الخطوة الأولى'); ?></span>
<p class="font-body-md text-on-surface-variant mb-stack-lg leading-relaxed">
    <?php echo vitaldc_t('Provide your business contact details so our team can tailor your website build, IT automation, and marketing strategy.', 'أدخل بيانات التواصل الخاصة بشركتك لنتمكن من تخصيص بناء موقعك، وأتمتة خدماتك، وخطتك التسويقية.'); ?>
</p>
<ul class="space-y-4">
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="text-xs font-label-caps text-on-surface"><?php echo vitaldc_t('Company Details', 'تفاصيل الشركة'); ?></span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="text-xs font-label-caps text-on-surface"><?php echo vitaldc_t('Website & Contact', 'الموقع والتواصل'); ?></span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="text-xs font-label-caps text-on-surface"><?php echo vitaldc_t('Personalized Guidance', 'إرشاد مخصص لك'); ?></span>
</li>
</ul>
</div>
<div class="pt-stack-lg">
<div class="p-4 border border-glass bg-surface-dim rounded">
<span class="font-label-caps text-[10px] text-on-surface-variant block mb-2 uppercase"><?php echo vitaldc_t('Form Status', 'حالة_النموذج'); ?></span>
<div class="flex items-center gap-2">
<div class="w-1.5 h-1.5 rounded-full bg-secondary"></div>
<span class="text-xs font-label-caps text-white"><?php echo vitaldc_t('Form Ready', 'النموذج جاهز'); ?></span>
</div>
</div>
</div>
</div>
<!-- Right Form Content -->
<div class="md:w-2/3 p-stack-lg md:p-12">
<div class="mb-stack-lg">
<h2 class="font-label-caps text-label-caps text-slate-900 font-bold mb-2"><?php echo vitaldc_t('BUSINESS INFORMATION', 'بيانات_الشركة_والمعلومات_الأساسية'); ?></h2>
<p class="font-body-md text-slate-600"><?php echo vitaldc_t('Fill in your core business details below to begin your digital setup.', 'أدخل بيانات عملك الأساسية أدناه للبدء في تجهيز انطلاقتك الرقمية.'); ?></p>
</div>
<form id="step-1-form" class="space-y-6">
<!-- Full Name -->
<div class="group">
<label class="block font-label-caps text-xs text-slate-700 font-semibold mb-2 uppercase tracking-widest group-focus-within:text-export-orange transition-colors" for="full_name">
    <?php echo vitaldc_t('Full Name', 'الاسم الكامل'); ?> <span class="text-export-orange">*</span>
</label>
<input class="w-full bg-slate-50 border-0 border-b-2 border-slate-300 focus:border-export-orange focus:bg-white focus:ring-0 text-slate-900 font-body-md px-3 py-3 transition-all placeholder:text-slate-400" id="full_name" name="full_name" placeholder="<?php echo vitaldc_t('E.G. AHMED MANSOUR', 'مثال: أحمد منصور'); ?>" required="" type="text"/>
</div>
<!-- Company Name -->
<div class="group">
<label class="block font-label-caps text-xs text-slate-700 font-semibold mb-2 uppercase tracking-widest group-focus-within:text-export-orange transition-colors" for="company_name">
    <?php echo vitaldc_t('Company Name', 'اسم الشركة'); ?> <span class="text-export-orange">*</span>
</label>
<input class="w-full bg-slate-50 border-0 border-b-2 border-slate-300 focus:border-export-orange focus:bg-white focus:ring-0 text-slate-900 font-body-md px-3 py-3 transition-all placeholder:text-slate-400" id="company_name" name="company_name" placeholder="<?php echo vitaldc_t('VITAL LOGISTICS EGYPT', 'فيتال للخدمات اللوجستية مصر'); ?>" required="" type="text"/>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-gutter">
<!-- Corporate Email -->
<div class="group">
<label class="block font-label-caps text-xs text-slate-700 font-semibold mb-2 uppercase tracking-widest group-focus-within:text-export-orange transition-colors" for="email">
    <?php echo vitaldc_t('Corporate Email', 'البريد الإلكتروني للشركة'); ?> <span class="text-export-orange">*</span>
</label>
<input class="w-full bg-slate-50 border-0 border-b-2 border-slate-300 focus:border-export-orange focus:bg-white focus:ring-0 text-slate-900 font-body-md px-3 py-3 transition-all placeholder:text-slate-400" id="email" name="email" placeholder="ADMIN@COMPANY.COM" required="" type="email"/>
</div>
<!-- Phone Number -->
<div class="group">
<label class="block font-label-caps text-xs text-slate-700 font-semibold mb-2 uppercase tracking-widest group-focus-within:text-export-orange transition-colors" for="phone">
    <?php echo vitaldc_t('Phone (Country Code)', 'الهاتف (رمز الدولة)'); ?> <span class="text-export-orange">*</span>
</label>
<input class="w-full bg-slate-50 border-0 border-b-2 border-slate-300 focus:border-export-orange focus:bg-white focus:ring-0 text-slate-900 font-body-md px-3 py-3 transition-all placeholder:text-slate-400" id="phone" name="phone" placeholder="+20 1XX XXX XXXX" required="" type="tel"/>
</div>
</div>
<!-- Website URL -->
<div class="group">
<label class="block font-label-caps text-xs text-slate-700 font-semibold mb-2 uppercase tracking-widest group-focus-within:text-export-orange transition-colors" for="website">
    <?php echo vitaldc_t('Current Website URL', 'رابط الموقع الحالي'); ?> <span class="text-slate-400 text-[10px]"><?php echo vitaldc_t('(OPTIONAL)', '(اختياري)'); ?></span>
</label>
<input class="w-full bg-slate-50 border-0 border-b-2 border-slate-300 focus:border-export-orange focus:bg-white focus:ring-0 text-slate-900 font-body-md px-3 py-3 transition-all placeholder:text-slate-400" id="website" name="website" placeholder="HTTPS://WWW.COMPANY.COM" type="url"/>
</div>
</form>
</div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Restore pre-filled data if exists
    const savedData = localStorage.getItem('vitaldc_step_1_payload');
    if (savedData) {
        try {
            const data = JSON.parse(savedData);
            Object.keys(data).forEach(key => {
                const el = document.getElementById(key);
                if (el) el.value = data[key];
            });
        } catch(e){}
    }

    // Save field updates to local storage on input change
    const form = document.getElementById('step-1-form');
    if (form) {
        form.addEventListener('input', () => {
            const payload = {};
            form.querySelectorAll('input').forEach(input => {
                if (input.name) payload[input.name] = input.value;
            });
            localStorage.setItem('vitaldc_step_1_payload', JSON.stringify(payload));
        });
    }
});
</script>

<!-- Technical Metadata Footer -->
<div class="w-full max-w-4xl mt-stack-md flex justify-between items-center px-4">
<div class="flex gap-6 opacity-30">
<span class="font-label-caps text-[10px]">AUTH_MODE: SECURE</span>
<span class="font-label-caps text-[10px]">ENCRYPTION: AES-256</span>
<span class="font-label-caps text-[10px]">SERVER: CAIRO_NORTH_01</span>
</div>
<div class="font-label-caps text-[10px] text-tertiary">
    VITALDC INFRASTRUCTURE V.2.4.0
</div>
</div>

<?php get_footer('start'); ?>