<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <article <?php post_class( 'max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-section-gap' ); ?>>
        <h1 class="font-headline-lg text-headline-lg text-on-surface mb-stack-md"><?php the_title(); ?></h1>
        <div class="font-body-md text-on-surface-variant"><?php the_content(); ?></div>
    </article>
<?php endwhile; ?>

<?php get_footer(); ?>
