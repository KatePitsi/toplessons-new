<?php if (get_field('welcome_enable') ) : ?>

    <section id="welcome" class="py-4 md:py-8 bg-neutral-100 reveal">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 my-16 max-w-screen-2xl m-auto px-6">
            <div class="m-auto">
                <?php $image = get_field('welcome_image'); if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="shadow-xl rounded-3xl w-auto mx-auto block" />
                <?php endif; ?>
            </div>
            <div class="m-auto">
                <h2 class="b-title hero-title mt-2 md:mt-8 pb-0">
                    <?php echo get_field('welcome_title'); ?>
                </h2>
                <p class="p-tag mx-auto md:mx-0 mb-2 md:mb-8">
                    <?php echo get_field('welcome_text'); ?>
                </p>

                <a href="<?php echo get_field( 'welcome_cta_link' ); ?>" target="_blank" class="shadow-xl text-white footer-btn rounded-full bg-highlight my-4 py-2 px-8 font-medium text-xs text-center md:mx-0 mx-auto block max-w-[13rem]">
                    <?php echo get_field( 'welcome_cta_text' ); ?>
                </a>
            </div>
        </div>

    </section>

<?php endif; ?>