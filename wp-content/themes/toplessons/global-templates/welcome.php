<section id="welcome" class="welcome relative mb-8 py-4">
    <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
        <div class="image my-auto col-span-2">
            <?php echo wp_get_attachment_image(get_field('welcome_image')['ID'] . '.webp', 'full', false, array('class' => 'w-100 mx-auto d-block p-2', 'alt' => get_field('welcome_image')['alt'])); ?>
        </div>
        <div class="content my-auto col-span-2 relative">
            <p class="text-center md:text-left text-xl md:text-4xl mb-4 text-body p-4"><?php echo get_field('welcome_title'); ?></p>
            <div class="text-center md:text-left text-base text-body welcome-text p-4"><?php echo get_field('welcome_content'); ?></div>
        </div>
        <div class="counter my-auto">

            <p class="counter-number text-center font-bold px-4 text-highlight my-4 text-xl md:text-4xl"><?php echo get_field('welcome_counter_number_hours'); ?></p>
            <p class="title text-center font-bold px-4 text-highlight mb-6 text-xl"><?php esc_html_e( 'Ώρες' ); ?></p>

            <p class="counter-number text-center font-bold x-4 text-highlight my-4 text-xl md:text-4xl"><?php echo get_field('welcome_counter_number_students'); ?></p>
            <p class="title text-center font-bold px-4 text-highlight mb-4 text-xl"><?php esc_html_e( 'Μαθητές' ); ?></p>

            <p class="counter-number text-center font-bold x-4 text-highlight my-4 text-xl md:text-4xl"><?php echo get_field('welcome_counter_number_lessons'); ?></p>
            <p class="title text-center font-bold x-4 text-highlight mb-6 text-xl"><?php esc_html_e( 'Μαθηματα' ); ?></p>

        </div>
    </div>
</section>