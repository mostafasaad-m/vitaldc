<?php 
/**
 * Template Name: start arch
 */

 ?>
 <?php get_header(); ?>

<body class="bg-background text-on-background font-body-md selection:bg-primary/30">
<!-- TopNavBar (Shared Component) -->

<main class="pt-[120px] pb-xl px-md max-w-container-max mx-auto min-h-screen">
<!-- Progress Indicator -->
<div class="max-w-4xl mx-auto mb-xl">
<div class="flex justify-between items-center mb-xs">
<span class="text-primary font-label-caps text-label-caps">Step 02 — ARCHITECTURE</span>
<span class="text-on-surface-variant font-label-caps text-label-caps uppercase tracking-widest"><?php echo "50% "."Complete";?> </span>
</div>
<div class="step-line">
<div class="step-line-active" style="width: 50%;"></div>
</div>
<div class="flex justify-between mt-xs px-1">
<div class="flex flex-col items-center">
<div class="w-2 h-2 rounded-full bg-primary glow-dot mb-2"></div>
<span class="font-label-caps text-[10px] text-primary">PROJECT TYPE</span>
</div>
<div class="flex flex-col items-center">
<div class="w-2 h-2 rounded-full bg-primary glow-dot mb-2"></div>
<span class="font-label-caps text-[10px] text-primary">ARCHITECTURE</span>
</div>
<div class="flex flex-col items-center">
<div class="w-2 h-2 rounded-full bg-white/20 mb-2"></div>
<span class="font-label-caps text-[10px] text-on-surface-variant opacity-50">NODE CONFIG</span>
</div>
<div class="flex flex-col items-center">
<div class="w-2 h-2 rounded-full bg-white/20 mb-2"></div>
<span class="font-label-caps text-[10px] text-on-surface-variant opacity-50">DEPLOYMENT</span>
</div>
</div>
</div>
<!-- Header -->
<div class="text-center mb-xl">
<h1 class="font-display-lg text-display-lg mb-sm">Select Your Core Plan</h1>
<p class="text-on-surface-variant font-body-md max-w-2xl mx-auto">
                Define the structural foundation of your digital infrastructure. Our architectures are pre-optimized for specific performance vectors.
            </p>
</div>
<!-- Selection Grid -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-sm max-w-6xl mx-auto">
<!-- Standard High-Availability -->
<label class="relative cursor-pointer group">
<input checked="" class="peer sr-only" name="architecture" type="radio" value="ha">
<div class="glass-card p-lg h-full flex flex-col peer-checked:selected peer-checked:ring-1 peer-checked:ring-primary/40">
<div class="mb-lg">
<span class="material-symbols-outlined text-primary text-4xl mb-md">account_tree</span>
<h3 class="font-headline-md text-headline-md mb-xs">Digital Foundation</h3>
<p class="text-on-surface-variant font-body-sm mb-lg">For companies that need a professional export-ready presence</p>
</div>
<div class="mb-auto space-y-md">
<div class="flex justify-between items-center py-xs border-b border-white/5">
<span class="font-code-snippet text-code-snippet text-on-surface">Professional website (up to 7 pages)</span>
</div>
<div class="flex justify-between items-center py-xs border-b border-white/5">
<span class="font-code-snippet text-code-snippet text-on-surface">Domain & hosting</span>
</div>
<div class="flex justify-between items-center py-xs border-b border-white/5">
<span class="font-code-snippet text-code-snippet text-on-surface">SEO setup</span>
</div>
	<div class="flex justify-between items-center py-xs border-b border-white/5">
<span class="font-code-snippet text-code-snippet text-on-surface">Google Business & Analytics setup</span>
</div>
	<div class="flex justify-between items-center py-xs border-b border-white/5">
<span class="font-code-snippet text-code-snippet text-on-surface">CRM (up to 10 users)</span>
</div>
	<div class="flex justify-between items-center py-xs border-b border-white/5">
<span class="font-code-snippet text-code-snippet text-on-surface">CRM onboarding & training</span>
</div>
	<div class="flex justify-between items-center py-xs border-b border-white/5">
<span class="font-code-snippet text-code-snippet text-on-surface">Website content updates & support</span>
</div>
	<div class="flex justify-between items-center py-xs border-b border-white/5">
<span class="font-code-snippet text-code-snippet text-on-surface">Security monitoring & backups</span>
</div>
	<div class="flex justify-between items-center py-xs border-b border-white/5">
<span class="font-code-snippet text-code-snippet text-on-surface">Lead inquiry forms</span>
</div>
	<div class="flex justify-between items-center py-xs border-b border-white/5">
<span class="font-code-snippet text-code-snippet text-on-surface">Reporting dashboard</span>
</div>

</div>
</div>
</label>
<!-- Global Edge Network -->
<label class="relative cursor-pointer group">
<input class="peer sr-only" name="architecture" type="radio" value="edge">
<div class="glass-card p-lg h-full flex flex-col peer-checked:selected peer-checked:ring-1 peer-checked:ring-primary/40">
<div class="mb-lg">
<span class="material-symbols-outlined text-primary text-4xl mb-md">language</span>
<h3 class="font-headline-md text-headline-md mb-xs">Growth & Marketing </h3>
<p class="text-on-surface-variant font-body-sm mb-lg">Everything in Digital Foundation, plus lead nurturing</p>
</div>
<div class="mb-auto space-y-md">
<div class="flex justify-between items-center py-xs border-b border-white/5">
<span class="font-code-snippet text-code-snippet text-on-surface">Everything in Package 1</span>
</div>
		
<div class="flex justify-between items-center py-xs border-b border-white/5">
<span class="font-code-snippet text-code-snippet text-on-surface">Email marketing platform setup</span>
</div>
<div class="flex justify-between items-center py-xs border-b border-white/5">
<span class="font-code-snippet text-code-snippet text-on-surface">4 Email Marketing campaigns/month</span>
</div>
	<div class="flex justify-between items-center py-xs border-b border-white/5">
<span class="font-code-snippet text-code-snippet text-on-surface">Newsletter management</span>
</div>
	<div class="flex justify-between items-center py-xs border-b border-white/5">
<span class="font-code-snippet text-code-snippet text-on-surface">Lead segmentation</span>
</div>
	<div class="flex justify-between items-center py-xs border-b border-white/5">
<span class="font-code-snippet text-code-snippet text-on-surface">CRM automation workflows</span>
</div>
	<div class="flex justify-between items-center py-xs border-b border-white/5">
<span class="font-code-snippet text-code-snippet text-on-surface">Lead scoring</span>
</div>
	<div class="flex justify-between items-center py-xs border-b border-white/5">
<span class="font-code-snippet text-code-snippet text-on-surface">Landing pages for campaigns</span>
</div>
	<div class="flex justify-between items-center py-xs border-b border-white/5">
<span class="text-on-surface-variant font-label-caps text-label-caps">Buyer journey optimization</span>
</div>
	
	<div class="flex justify-between items-center py-xs border-b border-white/5">
<span class="font-code-snippet text-code-snippet text-on-surface">Monthly performance reports</span>
</div>
	</div>

</div>

</label>
<!-- Custom Enterprise Logic -->
<label class="relative cursor-pointer group">
<input class="peer sr-only" name="architecture" type="radio" value="custom">
<div class="glass-card p-lg h-full flex flex-col peer-checked:selected peer-checked:ring-1 peer-checked:ring-primary/40">
<div class="mb-lg">
<span class="material-symbols-outlined text-primary text-4xl mb-md">settings_input_component</span>
<h3 class="font-headline-md text-headline-md mb-xs">Export Growth Partner</h3>
<p class="text-on-surface-variant font-body-sm mb-lg">A complete outsourced digital growth department</p>
</div>
<div class="mb-auto space-y-md">
<div class="flex justify-between items-center py-xs border-b border-white/5">
<span class="text-on-surface-variant font-label-caps text-label-caps">Everything in Package 2</span>
</div>
	<div class="flex justify-between items-center py-xs border-b border-white/5">
<span class="text-on-surface-variant font-label-caps text-label-caps">Dedicated account manager</span>
</div>
<div class="flex justify-between items-center py-xs border-b border-white/5">
<span class="text-on-surface-variant font-label-caps text-label-caps">Google Ads management</span>
</div>
<div class="flex justify-between items-center py-xs border-b border-white/5">
<span class="text-on-surface-variant font-label-caps text-label-caps">LinkedIn Ads management (optional)</span>
</div>
	<div class="flex justify-between items-center py-xs border-b border-white/5">
<span class="text-on-surface-variant font-label-caps text-label-caps">Export lead generation campaigns</span>
</div>
	<div class="flex justify-between items-center py-xs border-b border-white/5">
<span class="text-on-surface-variant font-label-caps text-label-caps">Monthly content creation</span>
</div>
	<div class="flex justify-between items-center py-xs border-b border-white/5">
<span class="text-on-surface-variant font-label-caps text-label-caps">AI sales assistant implementation</span>
</div>
	<div class="flex justify-between items-center py-xs border-b border-white/5">
<span class="text-on-surface-variant font-label-caps text-label-caps">CRM customization</span>
</div>
	<div class="flex justify-between items-center py-xs border-b border-white/5">
<span class="text-on-surface-variant font-label-caps text-label-caps">Sales pipeline management</span>
</div>
	<div class="flex justify-between items-center py-xs border-b border-white/5">
<span class="text-on-surface-variant font-label-caps text-label-caps">Conversion tracking</span>
</div>

		
	</div>

	</div>

</label>

</div>
<!-- Footer Actions -->
<div class="mt-xl flex flex-col md:flex-row items-center justify-between gap-lg max-w-6xl mx-auto pt-lg border-t border-white/5">
<div class="flex items-center gap-sm">
<div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center">
<span class="material-symbols-outlined text-on-surface-variant">info</span>
</div>
<div>
<p class="font-label-caps text-label-caps text-on-surface">Need help choosing?</p>
<a class="text-primary font-body-sm hover:underline" href="#">Compare architecture benchmarks</a>
</div>
</div>
<div class="flex gap-md w-full md:w-auto">
<button class="flex-1 md:flex-none px-xl py-md font-label-caps text-label-caps border border-white/10 hover:bg-white/5 rounded-lg transition-all" onclick="history.back()">Back</button>
<button class="flex-1 md:flex-none px-xl py-md font-label-caps text-label-caps bg-primary text-on-primary rounded-lg hover:brightness-110 active:scale-95 transition-all shadow-lg shadow-primary/10">Continue to Node Config</button>
</div>
</div>
</main>
<!-- Visual Background Element -->
<div class="fixed inset-0 pointer-events-none -z-10 overflow-hidden">
<div class="absolute top-[-10%] right-[-10%] w-[40%] h-[40%] bg-primary/5 blur-[120px] rounded-full"></div>
<div class="absolute bottom-[-10%] left-[-10%] w-[50%] h-[50%] bg-tertiary/5 blur-[120px] rounded-full"></div>
</div>
<!-- Footer (Shared Component) -->
<footer class="w-full py-xl border-t border-white/5 bg-surface-container-lowest">
<div class="flex flex-col md:flex-row justify-between items-center w-full px-xl max-w-container-max mx-auto gap-md">
<div class="flex flex-col gap-xs items-center md:items-start">
<span class="font-headline-md text-headline-md font-bold text-on-surface">VitalDC</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">© 2024 VitalDC Digital Infrastructure. Engineered for the Digital Age.</p>
</div>
<div class="flex gap-lg">
<a class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary transition-colors duration-200" href="#">Privacy Policy</a>
<a class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary transition-colors duration-200" href="#">Terms of Service</a>
<a class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary transition-colors duration-200" href="#">Security</a>
<a class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary transition-colors duration-200" href="#">System Status</a>
</div>
</div>
</footer>
<script>
        // Simple micro-interaction for card selection
        const cards = document.querySelectorAll('input[name="architecture"]');
        cards.forEach(card => {
            card.addEventListener('change', () => {
                // Tailwind classes handle the peer-checked logic, 
                // but we could add sound effects or complex animations here.
            });
        });
    </script>
</body></html>