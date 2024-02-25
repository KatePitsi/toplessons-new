<nav class="top-0 relative px-4 pb-4 shadow-xl">
    <!--  Desktop Menu  -->
    <div class="desktop hidden md:block">
        <div class="top-row my-auto">
            <?php get_template_part( 'global-templates/contact-details-header' ); ?>
        </div>
        <div class="main-nav">
            <div class="my-auto grid grid-cols-1 md:grid-cols-7 gap-4 justify-between top-sticky">
                <div class="logo md:col-span-1">
                    <a class="" href="<?php echo home_url(); ?>">
                        <?php $image = get_field('logo_main_logo', 'option'); if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="white-logo w-full max-w-[8rem] mx-auto" />
                        <?php endif; ?>

                        <?php $image = get_field('logo_scrolled_logo', 'option'); if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="hidden blue-logo w-full max-w-[8rem] mx-auto" />
                        <?php endif; ?>
                    </a>
                </div>
                <div class="menu col-span-5 my-auto">
                    <?php custom_header_home_menu();?>
                </div>
                <div class="col-span-1 my-auto mr-6">
                    <?php get_template_part( 'global-templates/right-menu' ); ?>
                </div>
            </div>
        </div>
    </div>

    <!--  Mobile Menu  -->
    <div class="mobile block md:hidden">
        <div class="grid grid-cols-3 top-sticky">
            <div class="inline md:hidden my-auto ">
                <div class="right-0">
                    <button class="navbar-burger flex items-center text-black p-3 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 inline p-1.5 border-solid border rounded-full border-black"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" /></svg>
                        <span class="inline px-2 hidden sm:inline"><?php esc_html_e('MENU'); ?></span>
                    </button>
                </div>
            </div>
            <div class="logo">
                <a class="" href="<?php echo home_url(); ?>">
                    <?php $image = get_field('logo_main_logo', 'option'); if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="white-logo w-full max-w-[8rem] mx-auto" />
                    <?php endif; ?>

                    <?php $image = get_field('logo_scrolled_logo', 'option'); if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="hidden blue-logo w-full max-w-[8rem] mx-auto" />
                    <?php endif; ?>
                </a>
            </div>
            <div class="contact-details my-auto text-right">
                <a href="tel:<?php echo get_field('details_contact_details_phone', 'option'); ?>" class="text-xs">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 inline p-1.5 border-solid border rounded-full border-black">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0l6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z" />
                    </svg>
                </a>
            </div>
        </div>

    </div>

</nav>

<div class="navbar-menu relative z-50 hidden mobile-menu">
    <nav class="bg-white border-r bottom-0 fixed flex flex-col left-0 mobile overflow-y-auto px-6 py-6 top-0 w-screen h-screen">
        <button class="navbar-close fixed right-10 top-10">
            <svg class="w-8 md:w-12 h-8 md:h-12 inline p-1.5 border-solid border rounded-full border-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
        <div class="my-5">
            <a class="" href="<?php echo home_url(); ?>">
                <?php $image = get_field('logo_scrolled_logo', 'option'); if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="blue-logo w-full max-w-[8rem] md:max-w-[14rem]" />
                <?php endif; ?>
            </a>
        </div>
        <div class="gap-2 grid grid-cols-1 h-screen md:grid-cols-2">
            <div class="m-auto w-auto">
                <?php custom_header_home_menu();?>
            </div>
            <div class="m-auto w-auto">
                <div class="pt-6">
                    <?php get_template_part( 'global-templates/contact-details' ); ?>
                </div>
            </div>
        </div>

        <div class="gap-2 grid grid-cols-1 md:grid-cols-2 opacity-0 sm:opacity-100">
            <div>
                <?php custom_footer_menu_copyright(); ?>
            </div>
            <div>
                <?php get_template_part( 'global-templates/social-media-menu' ); ?>
            </div>
        </div>
    </nav>
</div>
<script>
    // Burger menus
    document.addEventListener('DOMContentLoaded', function() {
        // open
        const burger = document.querySelectorAll('.navbar-burger');
        const menu = document.querySelectorAll('.navbar-menu');

        if (burger.length && menu.length) {
            for (var i = 0; i < burger.length; i++) {
                burger[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        // close
        const close = document.querySelectorAll('.navbar-close');
        const backdrop = document.querySelectorAll('.navbar-backdrop');

        if (close.length) {
            for (var i = 0; i < close.length; i++) {
                close[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        if (backdrop.length) {
            for (var i = 0; i < backdrop.length; i++) {
                backdrop[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }
    });
</script>

