<?php if (get_field('why_us_enable') ) : ?>

    <section id="welcome" class="pt-6 pb-20 reveal">

        <div class="max-w-screen-2xl m-auto px-6 mb-6 mt-16">
            <p class="eyebrow p-tag text-highlight font-bold">
                <?php echo get_field( 'why_us_eyebrow' ); ?>
            </p>
            <h2 class="b-title hero-title">
                <?php echo get_field('why_us_title'); ?>
            </h2>
        </div>

        <div class="hidden md:grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 my-16 max-w-screen-2xl m-auto px-6 content-stretch">
            <?php $c = 1; foreach (get_field('why_us_items') as $item ) : ?>
                <div class="m-auto">
                    <div class="why-us-item shadow-xl max-x-sm mx-auto p-6 rounded-3xl hover:bg-highlight hover:text-white">
                        <p class="font-bold text-xl md:text-6xl text-highlight number"><span class="number text-xl text-highlight italic inline-block align-top">#</span><?php echo $c; ?></p>
                        <p class="py-4 p-tag font-bold px-2"><?php echo $item['title']; ?></p>
                        <p class="pb-4 p-tag px-2"><?php echo $item['text']; ?></p>
                    </div>
                </div>
            <?php $c++; endforeach; ?>
        </div>

        <div x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, {loop: true, slidesPerView: 1, centeredSlides: true ,breakpoints: {320: {slidesPerView: 1, centerInsufficientSlides: true, centeredSlidesBounds:true, centeredSlides: true},480: {slidesPerView: 1}}, autoplay: {delay: 1500, disableOnInteraction: false},pagination: {el: '.swiper-pagination',clickable: true}})" class="text-center mx-auto max-w-[58.125rem] block md:hidden">
            <div class="swiper mySwiper swiper-container" pagination="true" x-ref="container">
                <div class="swiper-wrapper">
                    <?php $c = 1; foreach (get_field('why_us_items') as $item ) : ?>
                        <div class="swiper-slide inline px-3 mx-auto p-[1.25rem]">
                            <div class="m-auto">
                                <div class="why-us-item shadow-xl max-x-sm mx-auto p-6 rounded-3xl bg-highlight text-white">
                                    <p class="font-bold text-xl md:text-6xl text-white number"><span class="number text-xl text-white italic inline-block align-top">#</span><?php echo $c; ?></p>
                                    <p class="py-4 p-tag font-bold px-2"><?php echo $item['title']; ?></p>
                                    <p class="pb-4 p-tag px-2"><?php echo $item['text']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php $c++; endforeach; ?>
                </div>
                <div class="swiper-pagination relative top-0"></div>
            </div>
        </div>

    </section>

<?php endif; ?>

