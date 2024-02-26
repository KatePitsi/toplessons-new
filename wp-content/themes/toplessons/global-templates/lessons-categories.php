<section class="lessons bg-slate-100 my-6 py-2 md:py-12">

    <p class="text-center text-xl md:text-4xl text-body p-4"><?php echo get_field('lessons_categories_title'); ?></p>

    <p class="text-center text-base mb-4 text-body p-4 w-100 max-w-xl mx-auto"><?php echo get_field('lessons_categories_subtitle'); ?></p>

    <div class="categories">

        <?php $selected_category = get_field('lessons_categories_choose_categories'); if ($selected_category && is_array($selected_category)) : ?>

            <div x-data="{swiper: null}" x-init="
    swiper = new Swiper($refs.container, {
        loop: true,
        centeredSlides: true,
        slidesPerView: 4,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            480: { slidesPerView: 1, centerInsufficientSlides: true, centeredSlidesBounds: true, centeredSlides: true },
        },
        autoplay: { delay: 2500, disableOnInteraction: false }
    })
" class="text-center md:text-left mx-auto max-w-[58.125rem] block">


            <div class="swiper mySwiper swiper-container" x-ref="container">
                    <div class="swiper-wrapper">
                        <?php foreach ($selected_category as $category) : ?>
                            <?php
                            $category_id = $category->term_id;
                            $category_link = get_term_link($category_id, 'lessons_category');
                            $category_image = get_field('category_image_image', 'category_' . $category_id);
                            ?>
                            <div class="swiper-slide inline px-3 mx-auto p-[1.25rem]">
                                <?php if ($category_image) : ?>
                                    <img src="<?php echo esc_url($category_image['url']); ?>" alt="<?php echo esc_attr($category_image['alt']); ?>">
                                <?php endif; ?>

                                <a href="<?php echo esc_url($category_link); ?>" target="_blank">
                                    <?php echo esc_html($category->name); ?>
                                </a>

                                <div class=""> <?php echo esc_html($category->{'description'}); ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>


        <?php endif; ?>

    </div>
    
</section>