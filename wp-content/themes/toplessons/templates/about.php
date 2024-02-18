<?php
/*
 * Template Name: About Us
 * Template Post Type: post, page, whatever
 */

get_header();
?>

    <section id="about" class="py-4 md:py-8">

        <div class="my-16 max-w-screen-2xl m-auto px-6">

            <?php
                $even = false;
                $r = 1;
                foreach (get_field('about_content') as $item) :
                $roomClass = ($even) ? 'even' : 'odd';
                $even = !$even;
            ?>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-auto px-4 py-6 <?= $roomClass ?>" id="item-<?= $r ?>">
                    <div class="content p-6 mauto">
                        <p class="b-title big-title">
                            <?php echo $item['title'] ?>
                        </p>
                        <div class="p-tag">
                            <?php echo $item['content'] ?>
                        </div>
                    </div>

                    <div class="image m-auto">
                        <?php echo wp_get_attachment_image( $item['image']['ID'], 'full', false, array( 'class' => 'rounded-3xl p-2' ) ); ?>
                    </div>
                </div>

            <?php $r++; endforeach; ?>

        </div>

    </section>

<?php get_template_part( 'global-templates/posts' ); ?>

<?php get_template_part( 'global-templates/team' ); ?>

<?php get_template_part( 'global-templates/reviews' ); ?>

<?php get_footer();