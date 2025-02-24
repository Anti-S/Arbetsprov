<div class="page-width">
  <section class="gallery">
    <?php 
    $galleri_grupp = get_field('galleri_grupp'); 

    if ($galleri_grupp): ?>
      <div class="gallery-container">
        <?php 
        $max_bilder = 5; // Max antal bilder
        for ($i = 1; $i <= $max_bilder; $i++): 
          $bild = $galleri_grupp['bild_' . $i]; 
          if ($bild && isset($bild['url'])): ?>
            <div class="gallery-item">
              <img src="<?php echo esc_url($bild['url']); ?>" alt="<?php echo esc_attr($bild['alt']); ?>" class="img-fluid">
            </div>
          <?php endif; 
        endfor; ?>
      </div>
    <?php else: ?>
      <p>Inga bilder att visa.</p>
    <?php endif; ?>
  </section>
</div>
