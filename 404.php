<?php get_header(); ?>

<section class="min-h-[60vh] flex flex-col items-center justify-center px-margin-mobile md:px-margin-desktop py-section-gap text-center">
    <span class="font-label-caps text-export-orange text-label-caps tracking-[0.2em] uppercase mb-4">ERROR 404</span>
    <h1 class="font-display-lg text-headline-lg text-on-surface mb-stack-md">Page Not Found</h1>
    <p class="font-body-md text-on-surface-variant max-w-md mb-stack-lg">The page you requested does not exist or has been moved.</p>
    <a class="bg-export-orange text-white px-8 py-4 font-label-caps text-label-caps font-bold transition-all hover:scale-[1.02]" href="<?php echo esc_url( home_url( '/' ) ); ?>">Back to Home</a>
</section>

<?php get_footer(); ?>
