<?php 
/**
 * Template Name: Vital-Start-Step-1
 */


get_header('start');?>

<style>

input{color:#fff;}

</style>


<div class="flex flex-col md:flex-row min-h-[600px]">
<!-- Left Sidebar (Contextual Info) -->
<div class="md:w-1/3 bg-surface-container-low text-white p-stack-lg flex flex-col justify-between border-r border-glass">
<div>
<span class="font-label-caps text-label-caps text-tertiary block mb-stack-md">PROTOCOL_INSTRUCTIONS</span>
<p class="font-body-md text-on-surface-variant mb-stack-lg leading-relaxed">
                            Complete the initial identity verification block. This data forms the cryptographic root for your Egyptian export dashboard and global trade logistics routing.
                        </p>
<ul class="space-y-4">
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="text-xs font-label-caps text-on-surface">Identity Validation</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="text-xs font-label-caps text-on-surface">Domain Verification</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="text-xs font-label-caps text-on-surface">Contact Secure Protocol</span>
</li>
</ul>
</div>
<div class="pt-stack-lg">
<div class="p-4 border border-glass bg-surface-dim rounded">
<span class="font-label-caps text-[10px] text-on-surface-variant block mb-2 uppercase">System_Status</span>
<div class="flex items-center gap-2">
<div class="w-1.5 h-1.5 rounded-full bg-secondary"></div>
<span class="text-xs font-label-caps text-white">Registry Ready</span>
</div>
</div>
</div>
</div>
<!-- Right Form Content -->
<div class="md:w-2/3 p-stack-lg md:p-12">
<div class="mb-stack-lg">
<h2 class="font-label-caps text-label-caps text-on-surface-variant mb-2">PRIMARY_DATA_VERIFICATION</h2>
<p class="font-body-md text-surface-container-highest">Provide your core business data to begin the global trade verification process.</p>
</div>
<form class="space-y-6">
<!-- Full Name -->
<div class="group">
<label class="surface block font-label-caps text-xs  mb-2 uppercase tracking-widest group-focus-within:text-secondary transition-colors" for="full_name">
                                Full Name <span class="text-export-orange">*</span>
</label>
<input class="w-full bg-surface-container-lowest border-0 border-b-2 border-surface-container-highest focus:border-secondary focus:ring-0 text-surface-deep font-body-md py-3 transition-all placeholder:text-surface-container-highest/30" id="full_name" name="full_name" placeholder="E.G. AHMED MANSOUR" required="" type="text"/>
</div>
<!-- Company Name -->
<div class="group">
<label class="block font-label-caps text-xs surface mb-2 uppercase tracking-widest group-focus-within:text-secondary transition-colors" for="company_name">
                                Company Name <span class="text-export-orange">*</span>
</label>
<input class="w-full bg-surface-container-lowest border-0 border-b-2 border-surface-container-highest focus:border-secondary focus:ring-0 text-surface-deep font-body-md py-3 transition-all placeholder:text-surface-container-highest/30" id="company_name" name="company_name" placeholder="VITAL LOGISTICS EGYPT" required="" type="text"/>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-gutter">
<!-- Corporate Email -->
<div class="group">
<label class="block font-label-caps text-xs surface mb-2 uppercase tracking-widest group-focus-within:text-secondary transition-colors" for="email">
                                    Corporate Email <span class="text-export-orange">*</span>
</label>
<input class="w-full bg-surface-container-lowest border-0 border-b-2 border-surface-container-highest focus:border-secondary focus:ring-0 text-surface-deep font-body-md py-3 transition-all placeholder:text-surface-container-highest/30" id="email" name="email" placeholder="ADMIN@COMPANY.COM" required="" type="email"/>
</div>
<!-- Phone Number -->
<div class="group">
<label class="block font-label-caps text-xs surface mb-2 uppercase tracking-widest group-focus-within:text-secondary transition-colors" for="phone">
                                    Phone (Country Code) <span class="text-export-orange">*</span>
</label>
<input class="w-full bg-surface-container-lowest border-0 border-b-2 border-surface-container-highest focus:border-secondary focus:ring-0 text-surface-deep font-body-md py-3 transition-all placeholder:text-surface-container-highest/30" id="phone" name="phone" placeholder="+20 1XX XXX XXXX" required="" type="tel"/>
</div>
</div>
<!-- Website URL -->
<div class="group">
<label class="block font-label-caps text-xs surface mb-2 uppercase tracking-widest group-focus-within:text-secondary transition-colors" for="website">
                                Current Website URL <span class="surface/50">(OPTIONAL)</span>
</label>
<input class="w-full bg-surface-container-lowest border-0 border-b-2 border-surface-container-highest focus:border-secondary focus:ring-0 text-surface-deep font-body-md py-3 transition-all placeholder:text-surface-container-highest/30" id="website" name="website" placeholder="HTTPS://WWW.COMPANY.COM" type="url"/>
</div>
<!-- Action Buttons -->
<div class="pt-stack-lg flex flex-col-reverse md:flex-row gap-4 items-center justify-between">
<button class="text-on-surface-variant font-label-caps text-xs hover:text-surface-deep transition-colors uppercase tracking-widest flex items-center gap-2" type="button">
<span class="material-symbols-outlined text-sm">close</span> Cancel Session
                            </button>
<a href="/start/tiers" ><button class="w-full md:w-auto bg-export-orange text-white font-label-caps text-sm font-bold px-12 py-4 rounded-sm hover:brightness-110 active:scale-[0.98] transition-all shadow-lg flex items-center justify-center gap-3" type="submit">
                                Continue to Step 02 <span class="material-symbols-outlined text-base">arrow_forward</span>
</button></a>
</div>
</form>
</div>
</div>
</section>
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
</main>
<script>
        // Simple micro-interaction for the form fields
        const inputs = document.querySelectorAll('input');
        inputs.forEach(input => {
            input.addEventListener('focus', () => {
                // Potential for adding audio cues or specific UI highlights
                console.log('Focus on field: ' + input.id);
            });
        });

        // Form submission prevent default for demo
        document.querySelector('form').addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Step 01 validated. Initializing protocol Step 02...');
        });
    </script>

    	<?php get_footer(); ?>

</body></html>