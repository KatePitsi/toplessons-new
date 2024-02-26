<?php
/*
 * Template Name: Home page
 * Template Post Type: post, page, whatever
 */

get_header();

?>

<section id="hero" class="m-auto relative">

    <?php if ( get_field( 'hero_enable' ) ) : ?>

        <div class="video">
            <video loop muted autoplay preload="metadata" id="ban_video" class="tv_video object-cover h-screen md:w-screen h-100" playsinline>
                <source src="<?php echo get_field( 'hero_video' ); ?>" type="video/mp4">
            </video>

            <?php if ( get_field( 'hero_enable_controls' ) ) : ?>
                <div class="controls relative -top-12">
                    <div class="play-bt relative"></div>
                    <div class="pause-bt relative"></div>
                </div>
            <?php endif; ?>
        </div>

    <?php else : ?>

        <div class="h-100 relative w-100 overflow-hidden">

            <?php echo wp_get_attachment_image(get_field('hero_image')['ID'] . '.webp', 'full', false, array('class' => 'w-screen h-[800px] object-cover')); ?>

        </div>

    <?php endif; ?>

    <div class="slogan absolute top-[25%] z-40 text-white px-6">

        <p class="text-4xl my-4 w-100 max-w-[410px]">
            <?php echo get_field( 'hero_hero_content_title' ); ?>
        </p>
        <h1 class="text-xl my-4 w-100 max-w-[410px]">
            <?php echo get_field( 'hero_hero_content_subtitle' ); ?>
        </h1>
        <p class="text-xl mb-6 w-100 max-w-[410px]">
            <?php echo get_field( 'hero_hero_content_slogan' ); ?>
        </p>
        <a href="<?php echo get_field( 'hero_hero_content_button_url' ); ?>" target="_blank" class="main-btn">
            <?php esc_html_e( 'Κάνε αίτηση τώρα' ); ?>
        </a>

    </div>

</section>

<?php get_template_part( 'global-templates/welcome' ); ?>

<?php get_template_part( 'global-templates/lessons' ); ?>

<?php get_template_part( 'global-templates/map' ); ?>

<?php get_template_part( 'global-templates/lessons-categories' ); ?>

<?php get_template_part( 'global-templates/team' ); ?>

<?php get_template_part( 'global-templates/reviews' ); ?>

<?php get_footer();