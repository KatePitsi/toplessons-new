<?php if (get_field('counter_enable') ) : ?>

    <section id="counters" class="bg-neutral-100 py-4 md:py-8">

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 my-14 max-w-screen-2xl m-auto px-6">

            <?php foreach (get_field('counter_items') as $item ) : ?>

                <div class="m-auto">

                    <p class="counter text-center text-highlight text-xl md:text-5xl font-bold"><?php echo $item['number']; ?></p>

                    <p class="text-center py-4 text-base md:text-lg font-bold"><?php echo $item['title']; ?></p>

                </div>

            <?php endforeach; ?>

        </div>

    </section>

<?php endif; ?>