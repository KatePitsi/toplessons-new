<section class="map my-12 p-2 md:p-8 bg-map-image bg-contain bg-no-repeat bg-center text-center">
    <p class="text-xl md:text-4xl mb-4 text-body p-4"><?php echo get_field('map_title'); ?></p>

    <a href="<?php echo get_field( 'map_button_url' ); ?>" target="_blank" class="main-btn text-white">
        <?php esc_html_e( 'Κάνε αίτηση τώρα' ); ?>
    </a>
</section>