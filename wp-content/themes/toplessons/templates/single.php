<?php
/*
 * Template Name: Single Page
 * Template Post Type: post, page, whatever
 */

get_header();
?>

    <section id="single" class="py-4 md:py-8 max-w-screen-2xl m-auto px-6">

        <h1 class="b-title big-title"><?php echo the_title(); ?></h1>

        <div class="p-tag">

            <?php echo the_content(); ?>

        </div>

        <?php if ( get_field('lessons_enable') ) : ?>

            <?php foreach ( get_field('lessons_items') as $items ) : ?>

                <div class="my-8">

                    <h2 class="b-title big-title"><?php echo $items['title']; ?></h2>
                    <p class="p-tag"><?php echo $items['content']; ?></p>

                </div>

            <?php endforeach; ?>

        <?php endif; ?>

        <?php if ( get_field('paid_form_banner_enable') ) : ?>

            <div class="paid-form bg-neutral-100 p-6 md:p-12 my-4 mt-4 md:mt-12">

                <h2 class="py-4 text-center font-bold max-w-6xl mb-4 mx-auto w-full leading-tight big-title">

                    <?php echo get_field('paid_form_banner_title') ?>

                </h2>

                <?php  $contact_form7 = get_field( 'paid_form_banner_choose_form' ); ?>

                <?php if ( $contact_form7 ) : ?>

                    <div id="contact-form" class="contact-form max-w-6xl w-full mx-auto ">

                        <?php echo str_replace( array( '<br />', '<br>' ), array( '' ), do_shortcode( '[contact-form-7 id="' . $contact_form7->ID . '" title="' . $contact_form7->post_title . '" html_id="contact-form-' . $contact_form7->ID . '" html_class=""]' ) );?>

                    </div>

                <?php endif; ?>

            </div>

        <?php endif; ?>

    </section>

<?php get_footer();