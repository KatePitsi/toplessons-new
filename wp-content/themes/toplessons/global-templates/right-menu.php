<div class="right-menu-dongle text-right" onclick="toggleRightDongle()">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 inline p-1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" /></svg>
</div>

<div class="shadow-xl right-dongle fixed top-0 right-0 h-full w-96 bg-white overflow-hidden transition-transform duration-500 transform translate-x-full z-50" id="rightDongle">
    <div class="inner py-20 px-8">
        <button class="close fixed right-10 top-16" onclick="toggleRightDongle()">
            <svg class="w-8 h-8 inline p-1.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <?php $image = get_field('right_menu_logo', 'option'); if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="w-full max-w-[12rem] mx-auto my-6" />
        <?php endif; ?>

        <p class="my-2 font-bold text-lg"><?php echo get_field('right_menu_title', 'option'); ?></p>
        <p class="mt-2 mb-8 text-base"><?php echo get_field('right_menu_subtitle', 'option'); ?></p>

        <?php esc_html_e('Τηλέφωνο'); ?>
        <div class="pr-4 mb-4 text-[#282749]">
            <a href="tel:<?php echo get_field('details_contact_details_phone', 'option'); ?>" class="text-xs">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 inline p-1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0l6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z" /></svg>
                <span class="text-base"><?php echo get_field('details_contact_details_phone', 'option'); ?></span>
            </a>
        </div>

        <?php esc_html_e('Email'); ?>
        <div class="pr-4 mb-4 text-[#282749]">
            <a href="mailto:<?php echo get_field('details_contact_details_email', 'option'); ?>" class="text-xs">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 inline p-1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg>
                <span class="text-base"><?php echo get_field('details_contact_details_email', 'option'); ?></span>
            </a>
        </div>

        <?php esc_html_e('Διεύθυνση'); ?>
        <div class="pr-4 mb-4 text-[#282749]">
            <a href="<?php echo get_field('details_contact_details_address_url', 'option'); ?>" class="text-xs">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 inline p-1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg>
                <span class="text-base"><?php echo get_field('details_contact_details_address', 'option'); ?></span>
            </a>
        </div>

        <?php get_template_part( 'global-templates/social-media' ); ?>
    </div>
</div>

<script type="text/javascript">
    document.getElementById('rightDongle').style.display = 'none';

    function toggleRightDongle() {
        const rightDongle = document.getElementById('rightDongle');
        rightDongle.style.display = rightDongle.style.display === 'none' || rightDongle.style.display === '' ? 'block' : 'none';
        rightDongle.classList.toggle('translate-x-full');
    }
</script>