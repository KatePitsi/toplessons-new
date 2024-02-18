<?php
/*
 * Template Name: Paid form
 * Template Post Type: post, page, whatever
 */

get_header();
?>

    <section id="contact" class="w-screen m-auto">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 my-16">

            <div class="bg-slate-50 rounded-br-3xl pt-12 pb-4 px-8">

                <h2 class="b-title big-title mx-auto mb-12"><?php esc_html_e('Πώς μπορώ να σε βοηθήσω;'); ?><span class="px-6">👋</span></h2>

                <?php
                    $page_id = get_the_ID();
                    $featured_image = get_the_post_thumbnail($page_id, 'full');
                    $featured_image_with_class = str_replace('class="', 'class="rounded-3xl max-w-lg mx-auto w-full block py-6', $featured_image);
                    echo $featured_image_with_class;
                ?>

                <div class="contact-details p-4 md:pt-12 max-w-lg mx-auto block">

                    <p class="font-bold text-lg py-6 max-w-md"><?php echo get_field( 'contact_form_contact_details_main_title' ); ?></p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">

                        <div class="mb-8">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 inline p-1.5 mr-2 border-solid border rounded-full border-black"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg>
                            <span class="font-bold text-base"><?php esc_html_e('Στείλε μου email'); ?></span>
                            <p class="py-4 text-sm max-w-[10rem]"><?php echo get_field( 'contact_form_contact_details_email_text'); ?></p>
                            <p class="pb-2">
                                <?php if ( get_field( 'contact_form_contact_details_email' ) ) : ?>
                                    <a href="mailto:<?php echo get_field( 'contact_form_contact_details_email' ); ?>" class="link">
                                        <?php echo get_field( 'contact_form_contact_details_email' ); ?>
                                    </a>
                                <?php endif; ?>
                            </p>

                            <p class="pb-2">
                                <?php if ( get_field( 'contact_form_contact_details_email_two' ) ) : ?>
                                    <a href="mailto:<?php echo get_field( 'contact_form_contact_details_email_two' ); ?>" class="link">
                                        <?php echo get_field( 'contact_form_contact_details_email_two' ); ?>
                                    </a>
                                <?php endif; ?>
                            </p>
                        </div>
                        <div class="mb-8">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 inline p-1.5 mr-2 border-solid border rounded-full border-black"><path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0l6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z" /></svg>
                            <span class="font-bold text-base"><?php esc_html_e('Κάλεσέ με'); ?></span>
                            <p class="py-4 text-sm max-w-[14rem]"><?php echo get_field( 'contact_form_contact_details_phone_text'); ?></p>
                            <p class="pb-2">
                                <?php if ( get_field( 'contact_form_contact_details_mobile' ) ) : ?>
                                    <a href="tel:<?php echo get_field( 'contact_form_contact_details_mobile' ); ?>" class="link">
                                        <?php echo get_field( 'contact_form_contact_details_mobile' ); ?>
                                    </a>
                                <?php endif; ?>
                            </p>

                            <p class="pb-2">
                                <?php if ( get_field( 'contact_form_contact_details_phone' ) ) : ?>
                                    <a href="tel:<?php echo get_field( 'contact_form_contact_details_phone' ); ?>" class="link">
                                        <?php echo get_field( 'contact_form_contact_details_phone' ); ?>
                                    </a>
                                <?php endif; ?>
                            </p>
                        </div>

                    </div>

                    <div class="mb-8">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 inline p-1.5 mr-2 border-solid border rounded-full border-black"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg>
                        <span class="font-bold text-base"><?php esc_html_e('Θα με βρείτε εδώ'); ?></span>
                        <p class="py-2">
                            <?php if ( get_field( 'contact_form_contact_details_address' ) ) : ?>
                                <a href="<?php echo get_field( 'contact_form_contact_details_address_url' ); ?>" class="link">
                                    <?php echo get_field( 'contact_form_contact_details_address' ); ?>
                                </a>
                            <?php endif; ?>
                        </p>

                    </div>

                </div>

            </div>

            <div class="pt-12 pb-4 px-8">

                <div class="contact-form w-full mx-auto">

                    <div class="contact-form-wrapper">

                        <h2 class="b-title big-title mx-auto mb-4"><?php echo get_field( 'contact_form_form_title' ); ?></h2>
                        <p class="text-base py-6 max-w-lg mx-auto mb-4"><?php echo get_field( 'contact_form_form_subtitle' ); ?></p>

                        <?php  $contact_form7 = get_field( 'contact_form_contact' ); ?>

                        <?php if ( $contact_form7 ) : ?>

                        <div id="contact-form" class="contact-form max-w-lg mx-auto ">

                            <?php echo str_replace( array( '<br />', '<br>' ), array( '' ), do_shortcode( '[contact-form-7 id="' . $contact_form7->ID . '" title="' . $contact_form7->post_title . '" html_id="contact-form-' . $contact_form7->ID . '" html_class=""]' ) );?>

                        </div>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

        </div>

    </section>

<?php get_footer();