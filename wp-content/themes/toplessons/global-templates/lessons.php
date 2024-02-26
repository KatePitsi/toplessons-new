<section class="lessons bg-slate-100 my-4 p-2 md:p-8">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 my-4 md:my-12 py-2 md:py-6">
        <div class="text-center md:text-left text-base text-body welcome-text p-4 my-auto"><?php echo get_field('welcome_content'); ?></div>
        <div class="image my-auto">
            <?php echo wp_get_attachment_image(get_field('lessons_image')['ID'] . '.webp', 'full', false, array('class' => 'w-100 mx-auto d-block')); ?>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-6 gap-8 my-4 md:my-12 py-2 md:py-6">
        <div class="title text-body font-bold"><?php echo get_field('lessons_title'); ?></div>
        <div class="lessons welcome-text text-center md:text-left text-sm text-body"><?php echo get_field('lessons_lessons_1'); ?></div>
        <div class="lessons welcome-text text-center md:text-left text-sm text-body"><?php echo get_field('lessons_lessons_2'); ?></div>
        <div class="lessons welcome-text text-center md:text-left text-sm text-body"><?php echo get_field('lessons_lessons_3'); ?></div>
        <div class="lessons welcome-text text-center md:text-left text-sm text-body"><?php echo get_field('lessons_lessons_4'); ?></div>
        <div class="lessons welcome-text text-center md:text-left text-sm text-body"><?php echo get_field('lessons_lessons_5'); ?></div>
    </div>
</section>