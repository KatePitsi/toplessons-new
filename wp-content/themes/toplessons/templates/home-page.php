<?php
/*
 * Template Name: Home page
 * Template Post Type: post, page, whatever
 */

get_header();

?>

    <section id="hero" class="w-screen m-auto p-4 bg-neutral-100">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-2 my-12 max-w-screen-2xl m-auto">

            <div class="pt-4 md:pt-12 px-2 my-auto">

                <p class="eyebrow p-tag text-highlight font-bold"><?php echo get_field( 'hero_content_eyebrow_title' ); ?></p>

                <h1 class="b-title hero-title my-2 md:my-8"><?php echo get_field( 'hero_content_title' ); ?></h1>

                <p class="p-tag max-w-xs mx-auto md:mx-0 mb-6"><?php echo get_field( 'hero_content_subtitle' ); ?></p>

                <?php foreach ( get_field( 'hero_content_checks' ) as $check ) : ?>

                    <div class="">
                        <?php echo $check['icon']; ?><span class="inline-block"><?php echo $check['title']; ?></span>
                    </div>

                <?php endforeach; ?>

                <a href="<?php echo get_field( 'hero_content_cta_url' ); ?>" target="_blank" class="text-white footer-btn uppercase rounded-full bg-highlight my-4 py-2 px-8 font-medium text-xs md:text-xl text-center md:mx-0 mx-auto block max-w-[15rem]">
                    <?php echo get_field( 'hero_content_cta_text' ); ?>
                </a>

                <?php get_template_part( 'global-templates/social-media-hero-homepage' ); ?>

            </div>

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

        </div>

    </section>

    <?php get_template_part( 'global-templates/counter' ); ?>

    <?php get_template_part( 'global-templates/banner' ); ?>

    <?php get_template_part( 'global-templates/welcome' ); ?>

    <?php get_template_part( 'global-templates/why-us' ); ?>

    <?php if ( get_field('home_page_post_enable', 'option') ) : ?>

        <?php get_template_part( 'global-templates/posts' ); ?>

    <?php endif; ?>

    <?php if ( get_field('home_page_team_enable', 'option') ) : ?>

        <?php get_template_part( 'global-templates/team' ); ?>

    <?php endif; ?>

    <?php if ( get_field('home_page_review_enable', 'option') ) : ?>

        <?php get_template_part( 'global-templates/reviews' ); ?>

    <?php endif; ?>


<?php get_footer();