<?php get_header(); ?>

<section id="team" class="py-12 md:py-20 max-w-screen-2xl m-auto px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="p-6 m-auto">
            <?php $image = get_field('image'); if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="shadow-xl rounded-3xl w-auto mx-auto block" />
            <?php endif; ?>
        </div>
        <div class="p-6 m-auto">
            <h2 class="b-title big-title"><?php echo the_title(); ?></h2>

            <?php if ( get_field('team_infos_enable' ) ) : ?>

                <div class="my-4">
                    <a href="<?php echo get_field('team_infos_facebook'); ?>" class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="w-9 h-9 inline p-1.5 border-solid border rounded-full border-black"><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
                    </a>

                    <a href="<?php echo get_field('team_infos_linkedin'); ?>" class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-9 h-9 inline p-1.5 border-solid border rounded-full border-black"><path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg>
                    </a>

                    <a href="<?php echo get_field('team_infos_instagram'); ?>" class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-9 h-9 inline p-1.5 border-solid border rounded-full border-black"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                    </a>

                    <a href="mailto:<?php echo get_field('team_infos_email'); ?>" class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 inline p-1.5 border-solid border rounded-full border-black"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg>
                    </a>

                    <a href="tel:<?php echo get_field('team_infos_phone'); ?>" class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 inline p-1.5 border-solid border rounded-full border-black"><path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0l6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z" /></svg>
                    </a>
                </div>

            <?php endif; ?>

            <div class="p-tag">
                <?php echo the_content(); ?>
            </div>

        </div>

    </div>
</section>

<section class="max-w-screen-2xl m-auto px-8">
    <div class="text-center md:text-left">
        <?php if ( get_field('cv_enable' ) ) : ?>
            <?php echo get_field('cv_content' ); ?>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
