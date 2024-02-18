<section id="team" class="py-20 reveal">

    <div class="mb-8">
        <h2 class="all-title basic-title px-6">
            <?php echo get_field('home_page_team_title', 'option'); ?>
        </h2>
        <p class="text-center max-w-2xl mx-auto px-8">
            <?php echo get_field('home_page_team_subtitle', 'option'); ?>
        </p>
    </div>

    <div class="hidden md:grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 my-16 max-w-screen-2xl m-auto px-6">
        <?php foreach(get_teams() as $item) : ?>
            <div class="rounded-3xl shadow-xl mx-auto bg-white max-w-lg mx-auto w-full block">
                <?php
                    $page_id = $item->{'ID'};
                    $featured_image = get_the_post_thumbnail($page_id, 'full');
                    $featured_image_with_class = str_replace('class="', 'class="rounded-full w-28 h-28 mt-8 mx-8 ', $featured_image);
                    echo $featured_image_with_class;
                ?>
                <div class="pb-8 px-8 flex items-stretch flex-col">
                    <h4 class="pt-6 font-bold">
                        <?php echo $item->{'post_title'}; ?>
                    </h4>
                    <p class="my-4">
                        <?php echo $item->{'post_excerpt'}; ?>
                    </p>
                    <a href="<?php echo get_permalink($item->{'ID'}); ?>" class="text-highlight text-left py-4 item-end"><?php esc_html_e( 'Δείτε περισσότερα' ); ?></a>
                </div>

            </div>
        <?php endforeach; ?>
    </div>

    <div x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, {loop: true, slidesPerView: 1, centeredSlides: true ,breakpoints: {320: {slidesPerView: 1, centerInsufficientSlides: true, centeredSlidesBounds:true, centeredSlides: true},480: {slidesPerView: 1}}, autoplay: {delay: 2500, disableOnInteraction: false},pagination: {el: '.swiper-pagination',clickable: true}})" class="text-center mx-auto max-w-[58.125rem] block md:hidden">
        <div class="swiper mySwiper swiper-container" pagination="true" x-ref="container">
            <div class="swiper-wrapper">
                <?php foreach(get_teams() as $item) : ?>
                    <div class="swiper-slide inline px-3 mx-auto p-[1.25rem]">
                        <div class="rounded-3xl shadow-xl mx-auto bg-white max-w-lg mx-auto w-full block">
                            <?php
                            $page_id = $item->{'ID'};
                            $featured_image = get_the_post_thumbnail($page_id, 'full');
                            $featured_image_with_class = str_replace('class="', 'class="rounded-full w-28 h-28 mt-8 mx-auto ', $featured_image);
                            echo $featured_image_with_class;
                            ?>
                            <div class="pb-8 px-8 flex items-stretch flex-col">
                                <h4 class="pt-6 font-bold">
                                    <?php echo $item->{'post_title'}; ?>
                                </h4>
                                <p class="my-4">
                                    <?php echo $item->{'post_excerpt'}; ?>
                                </p>
                                <a href="<?php echo get_permalink($item->{'ID'}); ?>" class="text-highlight text-left py-4 item-end"><?php esc_html_e( 'Δείτε περισσότερα' ); ?></a>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination relative top-0"></div>
        </div>
    </div>

</section>