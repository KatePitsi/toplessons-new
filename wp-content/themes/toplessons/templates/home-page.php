<?php
/*
 * Template Name: Home page
 * Template Post Type: post, page, whatever
 */

get_header();

?>

<section id="hero" class="w-screen m-auto p-4 bg-neutral-100">

    <div class="pt-4 md:pt-12 col-span-2 my-auto">

        <?php if ( get_field( 'hero_enable' ) ) : ?>

            <div class="video">
                <video loop muted autoplay preload="metadata" id="ban_video" class="rounded-3xl tv_video w-screen" playsinline>
                    <source src="<?php echo get_field( 'hero_video' ); ?>" type="video/mp4">
                </video>

                <?php if ( get_field( 'hero_enable_controls' ) ) : ?>
                    <div class="controls relative -top-12">
                        <div class="play-bt relative left-24"></div>
                        <div class="pause-bt relative left-24"></div>
                        <div class="mute-bt"></div>
                    </div>
                <?php endif; ?>
            </div>

        <?php else : ?>

            <div class="">
                <?php $hero_img = get_field('hero_image'); ?>
                <img src="<?php echo esc_url( wp_get_attachment_image_url( $hero_img['ID'], 'full' ) ); ?>" alt="placeholder image" class="rounded-3xl opacity-1 w-100 mx-auto h-auto">
            </div>

        <?php endif; ?>

    </div>

</section>

<?php get_template_part( 'global-templates/counter' ); ?>

<?php get_template_part( 'global-templates/banner' ); ?>

<?php get_template_part( 'global-templates/welcome' ); ?>

<?php get_template_part( 'global-templates/why-us' ); ?>

<?php get_template_part( 'global-templates/posts' ); ?>

<?php get_template_part( 'global-templates/team' ); ?>

<?php get_template_part( 'global-templates/reviews' ); ?>

<?php get_footer();