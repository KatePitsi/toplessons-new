<?php
$query = new WP_Query(array(
    'posts_per_page' => 3,
));

wp_reset_postdata();
?>

<section id="posts" class="py-20 bg-neutral-100">

    <div class="mb-8">
        <h2 class="all-title basic-title px-6">
            <?php echo get_field('home_page_post_title', 'option'); ?>
        </h2>
        <p class="text-center max-w-2xl mx-auto px-8">
            <?php echo get_field('home_page_post_subtitle', 'option'); ?>
        </p>
    </div>

    <div class="hidden md:grid grid-cols-1 md:grid-cols-3 gap-8 my-16 max-w-screen-2xl m-auto px-6">
        <?php if ($query->have_posts()) : ?>

            <?php
                $query->the_post();
                $posts_content = $query->{'posts'};
                foreach ($posts_content as $post_item)  :
                    $post_id = $post_item->{'ID'};
                    $categories = get_the_category($post_id);
            ?>
                <div class="rounded-3xl shadow-xl mx-auto bg-white max-w-lg mx-auto w-full block">
                    <?php
                        $featured_image = get_the_post_thumbnail($post_id, 'full');
                        $featured_image_with_class = str_replace('class="', 'class="rounded-tl-3xl rounded-tr-3xl max-w-lg mx-auto w-full block h-[30vh] object-cover ', $featured_image);
                        echo '<a href="'.get_permalink($post_id).'">'.$featured_image_with_class.'</a>';
                    ?>
                    <div class="p-8 flex items-stretch flex-col">
                        <h4 class="pt-6 font-bold">
                            <?php echo $post_item->{'post_title'}; ?>
                        </h4>
                        <div class="post-meta">
                            <span class="published-date text-sm italic text-slate-500">
                                <?php echo get_the_date('F j, Y', $post_id) . ' | '; ?>

                                <?php $item_categories = $categories; ?>
                                <?php foreach ( $item_categories as $i => $item_category ) : ?>

                                    <?php echo esc_html( $item_category->name ); ?>
                                    <?php echo esc_html( $i < count( $item_categories ) - 1 ? ',' : '' ); ?>

                                <?php endforeach; ?>
                            </span>
                        </div>
                        <p class="my-4 post-content">
                            <?php echo wp_trim_words($post_item->{'post_content'}, 25, '...'); ?>
                        </p>
                        <a href="<?php echo get_permalink($post_id); ?>" class="text-highlight text-left py-4 item-end"><?php esc_html_e('Δείτε περισσότερα'); ?></a>
                    </div>
                </div>

            <?php endforeach; ?>

        <?php endif; ?>
    </div>

    <div x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, {loop: true, slidesPerView: 1, centeredSlides: true ,breakpoints: {320: {slidesPerView: 1, centerInsufficientSlides: true, centeredSlidesBounds:true, centeredSlides: true},480: {slidesPerView: 1}}, autoplay: {delay: 2500, disableOnInteraction: false},pagination: {el: '.swiper-pagination',clickable: true}})" class="text-center mx-auto max-w-[58.125rem] block md:hidden">
        <div class="swiper mySwiper swiper-container" pagination="true" x-ref="container">
            <div class="swiper-wrapper">
                <?php if ($query->have_posts()) : ?>
                    <?php
                        $query->the_post();
                        $posts_content = $query->{'posts'};
                        foreach ($posts_content as $post_item)  :
                        $post_id = $post_item->{'ID'};
                        $categories = get_the_category($post_id);
                    ?>
                        <div class="swiper-slide inline px-3 mx-auto p-[1.25rem]">
                            <div class="rounded-3xl shadow-xl mx-auto bg-white max-w-lg mx-auto w-full block">
                                <?php
                                    $featured_image = get_the_post_thumbnail($post_id, 'full');
                                    $featured_image_with_class = str_replace('class="', 'class="rounded-tl-3xl rounded-tr-3xl max-w-lg mx-auto w-full block h-[30vh] object-cover ', $featured_image);
                                    echo '<a href="'.get_permalink($post_id).'">'.$featured_image_with_class.'</a>';
                                ?>
                                <div class="p-8 flex items-stretch flex-col">
                                    <h4 class="pt-6 font-bold">
                                        <?php echo $post_item->{'post_title'}; ?>
                                    </h4>
                                    <div class="post-meta">
                                        <span class="published-date text-sm italic text-slate-500">
                                            <?php echo get_the_date('F j, Y', $post_id) . ' | '; ?>

                                            <?php $item_categories = $categories; ?>
                                            <?php foreach ( $item_categories as $i => $item_category ) : ?>

                                                <?php echo esc_html( $item_category->name ); ?>
                                                <?php echo esc_html( $i < count( $item_categories ) - 1 ? ',' : '' ); ?>

                                            <?php endforeach; ?>
                                        </span>
                                    </div>
                                    <p class="my-4 post-content">
                                        <?php echo wp_trim_words($post_item->{'post_content'}, 25, '...'); ?>
                                    </p>
                                    <a href="<?php echo get_permalink($post_id); ?>" class="text-highlight text-left py-4 item-end"><?php esc_html_e('Δείτε περισσότερα'); ?></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <div class="swiper-pagination relative top-0"></div>
        </div>
    </div>

</section>
