<section class="text-image">
   <div class=text_ruta> 
        <div class="text_rubrik">
            <h1><?php the_field('text_image_rubrik'); ?></h1>
        </div>

        <div class="text_text">
            <p><?php the_field('text_image_text'); ?></p>
        </div>
    </div>

    <div class="text_image">
        <?php 
        $bild = get_field('text_image_bild');
        if ($bild): ?>
            <img src="<?php echo esc_url($bild['url']); ?>" alt="<?php echo esc_attr($bild['alt']); ?>">
        <?php endif; ?>
    </div>
</section>