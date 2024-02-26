<?php $args = array('post_type'=>array('posts', 'review')); query_posts($args); ?>

<section id="reviews" class="py-20 bg-neutral-100 reveal">

    <div class="mb-8">
        <h2 class="all-title basic-title px-6">
            <?php echo get_field('home_page_review_title', 'option'); ?>
        </h2>

        <p class="text-center max-w-2xl mx-auto px-8">
            <?php echo get_field('home_page_review_subtitle', 'option'); ?>
        </p>
    </div>

    <div x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, {loop: true, slidesPerView: 1, centeredSlides: true ,breakpoints: {320: {slidesPerView: 1, centerInsufficientSlides: true, centeredSlidesBounds:true, centeredSlides: true},480: {slidesPerView: 1}}, autoplay: {delay: 2500, disableOnInteraction: false},pagination: {el: '.swiper-pagination',clickable: true}})" class="text-center mx-auto max-w-[58.125rem] block">
        <div class="swiper mySwiper swiper-container" pagination="true" x-ref="container">
            <div class="swiper-wrapper">
                <?php foreach(query_posts($args) as $item) : ?>
                    <div class="swiper-slide inline px-3 mx-auto p-[1.25rem]">
                        <h4 class="pt-6">
                            <?php echo $item->{'post_content'}; ?>
                        </h4>
                        <p class="my-4">
                            <span class="font-bold"><?php echo $item->{'post_title'}; ?></span> <?php esc_html_e( '-' ); ?> <?php echo $item->{'post_excerpt'}; ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination relative top-0"></div>
        </div>
    </div>

</section>