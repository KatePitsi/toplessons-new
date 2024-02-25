<section id="welcome" class="relative">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="image">
            <?php echo wp_get_attachment_image(get_field('welcome_image')['ID'] . '.webp', 'full', false, array('class' => 'w-screen h-[800px] object-cover', 'alt' => get_field('welcome_image')['alt'])); ?>
        </div>
        <div class="content">
            <p><?php echo get_field('welcome_title'); ?></p>
            <div class=""><?php echo get_field('welcome_content'); ?></div>
        </div>
        <div class="counter">
            <?php
            // Get the repeater field values
            $repeater_items = get_field('your_repeater_field_name');

            // Check if there are any items in the repeater
            if ($repeater_items) {
                // Loop through each repeater item
                foreach ($repeater_items as $item) {
                    // Access individual sub-fields
                    $title = $item['title'];
                    $image = $item['image'];

                    // Display the sub-field values
                    echo '<h2>' . esc_html($title) . '</h2>';
                    echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
                }
            } else {
                // No repeater items found
                echo 'No items found.';
            }
            ?>

        </div>
    </div>
</section>