<div class="banner px-5 my-20 md:my-32" id="banner">
    <div class="bg-neutral-100 rounded-3xl max-w-7xl w-100 mx-auto px-16 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 justify-between items-center">
            <div>
                <p class="eyebrow p-tag text-highlight font-bold">
                    <?php echo get_field( 'banner_eyebrow' ); ?>
                </p>
                <p class="b-title big-title">
                    <?php echo get_field( 'banner_title' ); ?>
                </p>
                <p class="text-center md:text-left max-w-md text-sm leading-tight">
                    <?php echo get_field( 'banner_subtitle' ); ?>
                </p>
                <p class="py-4 text-center md:text-left max-w-md text-sm leading-tight">
                    <?php echo get_field( 'banner_content' ); ?>
                </p>
            </div>
            <div class="mx-auto block mb-4 md:mb-0 w-100 mx-auto">
                <div class="bg-[#316ea0] shadow-lg shadow-white-500/50 px-8 py-2 rounded-full text-white text-base md:text-2xl lg:text-4xl font-bold text-center">
                    <a href="<?php echo get_field('banner_cta_link'); ?>" target="_blank" class="uppercase">
                        <?php echo get_field('banner_cta_text'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>