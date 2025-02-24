<?php 
$hero_bild = get_field('hero_bild');
$hero_rubrik = get_field('hero_rubrik');
$hero_text = get_field('hero_text');
?>

<?php if ($hero_bild): ?>
    <section class="hero" id="hero_background" style="background-image: url('<?php echo esc_url($hero_bild['url']); ?>');">
        <div class="hero_content">
            <h1 class="hero-title"><?php echo esc_html($hero_rubrik); ?></h1>
            <p class="hero-text"><?php echo esc_html($hero_text); ?></p>
        </div>
    </section>
<?php endif; ?>