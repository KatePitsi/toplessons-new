<?php get_header(); ?>

<section id="team" class="py-12 md:py-20 max-w-screen-2xl m-auto px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="p-6 m-auto">
            <?php
                $post_id = '';
                $featured_image = get_the_post_thumbnail($post_id, 'full');
                $featured_image_with_class = str_replace('class="', 'class="rounded-3xl max-w-lg mx-auto w-full block py-6', $featured_image);
                echo $featured_image_with_class;
            ?>
        </div>
        <div class="p-6 mx-auto">
            <p class="text-center md:text-left published-date text-sm italic text-slate-500">
                <?php echo get_the_date('F j, Y', $post_id) . ' | '; ?>
                <?php $categories = get_the_category($post_id); ?>

                <?php $item_categories = $categories; ?>
                <?php foreach ( $item_categories as $i => $item_category ) : ?>

                    <?php echo esc_html( $item_category->name ); ?>
                    <?php echo esc_html( $i < count( $item_categories ) - 1 ? ',' : '' ); ?>

                <?php endforeach; ?>
            </p>
            <h2 class="b-title big-title"><?php echo the_title(); ?></h2>

            <div class="p-tag">
                <?php echo the_content(); ?>
            </div>
        </div>
    </div>

    <div class="max-w-screen-xl m-auto pt-8 px-6">
        <div class="p-tag"><?php echo get_field('more_content') ;?></div>
    </div>
</section>

<?php get_footer(); ?>
