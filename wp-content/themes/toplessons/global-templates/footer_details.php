<div class="newsletter-section px-5" id="newsletter-section">
    <?php if ( get_field('newsletter_enable', 'option' ) ) : ?>
        <div class="newsletter-section bg-[url('/wp-content/uploads/2023/06/newsletter-bg-1.webp')] bg-no-repeat bg-center rounded-3xl bg-cover max-w-7xl w-100 mx-auto px-16 py-5 relative bottom-[-6rem]">
            <div class="grid grid-cols-1 md:grid-cols-2 justify-between items-center">
                <div>
                    <p class="b-title big-title text-white">
                        <?php echo get_field('newsletter_title', 'option'); ?>
                    </p>
                    <p class="py-4 text-center md:text-left text-white max-w-xs text-sm leading-tight">
                        <?php echo get_field('newsletter_sub_text', 'option'); ?>
                    </p>
                </div>
                <div class="mx-auto block mb-4 md:mb-0 w-100 mx-auto">
                    <a href="<?php echo get_field('newsletter_button_link', 'option'); ?>" target="_blank" class="bg-[#316ea0] shadow-lg shadow-white-500/50 px-8 py-2 rounded-full text-white text-base md:text-2xl lg:text-4xl uppercase font-bold">
                        <?php esc_html_e('Εγγραφη'); ?>
                    </a>

                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

<div class="footer-section bg-[#0f172a] p-14 border-t-2 pt-32" id="footer-section">

    <div class="grid grid-cols-1 md:grid-cols-2 justify-between items-center text-white max-w-7xl w-100 mx-auto my-6">
        <div class="mb-12 mx-auto block">
            <p class="b-title big-title mb-4">
                <?php echo get_field('contact_details_title', 'option'); ?>
            </p>
            <a href="tel:<?php echo get_field('contact_details_mobile', 'option'); ?>" target="_blank" class="text-black footer-btn rounded-full bg-white py-2 px-8 font-medium text-xs text-center md:mx-0 mx-auto block max-w-[11rem]">
                <?php esc_html_e('Κάλεσε τωρα'); ?>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 inline"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" /></svg>
            </a>
        </div>

        <div class="py-4 text-center md:text-left text-white max-w-lg text-xs leading-tight mx-auto block">
            <?php echo get_field('contact_details_footer_text', 'option'); ?>

            <?php get_template_part( 'global-templates/social-media' ); ?>
        </div>
    </div>
    <hr class="max-w-7xl w-100 mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 justify-between items-center text-white max-w-7xl w-100 mx-auto">
        <div class="py-4 text-center md:text-left text-sm">
            <?php custom_footer_menu_copyright(); ?>
        </div>
        <div class="py-4 text-center md:text-right text-[#94a3b8e6] text-sm">
            <?php echo get_field('details_copyright', 'option'); ?>
        </div>
    </div>
</div>







