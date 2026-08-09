<?php
/**
 * Footer template for the VitalDC theme.
 */
?>
</main>
<footer class="bg-surface-deep border-t border-glass">
    <div class="max-w-container-max mx-auto py-section-gap px-margin-mobile md:px-margin-desktop flex flex-col md:flex-row justify-between items-start gap-stack-lg">
        <div class="max-w-sm">
            <span class="font-display-lg text-headline-md font-bold text-on-surface block mb-4 flex items-center">
                <span class="text-export-orange">Vital</span>DC
            </span>
            <p class="font-body-md text-on-surface-variant mb-6"><?php echo vitaldc_t('Empowering Egyptian exporters with the digital foundations to lead in global markets.', 'تمكين المصدرين المصريين بالأساسات الرقمية للريادة في الأسواق العالمية.'); ?></p>
            <div class="flex gap-4">
                <a class="w-10 h-10 flex items-center justify-center border border-glass hover:text-export-orange transition-all" href="#"><span class="material-symbols-outlined text-sm" data-icon="language">language</span></a>
                <a class="w-10 h-10 flex items-center justify-center border border-glass hover:text-export-orange transition-all" href="#"><span class="material-symbols-outlined text-sm" data-icon="share">share</span></a>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-stack-lg">
            <div class="space-y-4">
                <h5 class="font-label-caps text-export-yellow text-label-caps"><?php echo vitaldc_t('SOLUTIONS', 'الحلول'); ?></h5>
                <ul class="space-y-2 font-body-md text-on-surface-variant">
                    <li><a class="hover:text-export-orange transition-all" href="#"><?php echo vitaldc_t('Professional Websites', 'مواقع احترافية'); ?></a></li>
                    <li><a class="hover:text-export-orange transition-all" href="#"><?php echo vitaldc_t('Export Marketing', 'تسويق التصدير'); ?></a></li>
                    <li><a class="hover:text-export-orange transition-all" href="#"><?php echo vitaldc_t('Growth Automation', 'أتمتة النمو'); ?></a></li>
                </ul>
            </div>
            <div class="space-y-4">
                <h5 class="font-label-caps text-export-yellow text-label-caps">VITALDC</h5>
                <ul class="space-y-2 font-body-md text-on-surface-variant">
                    <li><a class="hover:text-export-orange transition-all" href="#methodology-section"><?php echo vitaldc_t('Our Path', 'مسارنا'); ?></a></li>
                    <li><a class="hover:text-export-orange transition-all" href="#"><?php echo vitaldc_t('Privacy Policy', 'سياسة الخصوصية'); ?></a></li>
                    <li><a class="hover:text-export-orange transition-all" href="/start"><?php echo vitaldc_t('Contact Us', 'اتصل بنا'); ?></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-8 border-t border-glass/30 text-on-surface-variant/50 font-label-caps text-[10px] flex justify-between">
        <span><?php echo vitaldc_t('© 2024 VitalDC. DIGITAL FOUNDATIONS FOR EGYPTIAN EXPORTERS.', '© 2024 VitalDC. الأساسات الرقمية للمصدرين المصريين.'); ?></span>
        <span class="hidden md:inline text-export-yellow/50"><?php echo vitaldc_t('SYSTEM_STATUS: GLOBAL_READY', 'حالة_النظام: جاهز_عالمياً'); ?></span>
    </div>
</footer>
<script>
    document.querySelectorAll('.glass-card, .bg-surface-container, .bg-white, .bg-light-surface').forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            card.style.setProperty('--mouse-x', `${x}px`);
            card.style.setProperty('--mouse-y', `${y}px`);
        });
    });
</script>
<?php wp_footer(); ?>
</body>
</html>
