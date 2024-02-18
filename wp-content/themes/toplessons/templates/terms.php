<?php
/*
 * Template Name: Terms
 * Template Post Type: post, page, whatever
 */

get_header();
?>

    <section id="single" class="py-4 md:py-8 max-w-screen-2xl m-auto px-6">

        <h1 class="b-title big-title"><?php echo the_title(); ?></h1>

        <div class="p-tag">

            <?php echo the_content(); ?>

        </div>

    </section>

<?php get_footer();