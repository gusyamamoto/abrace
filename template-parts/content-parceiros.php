<h2>Nossos Parceiros</h2>
<?php
// Check if the gallery field has images
$gallery = get_field('logo_parceiros'); // Replace with your field name
if ($gallery): ?>
    <div class="logo-parceiros-gallery">
        <?php foreach ($gallery as $image): ?>
            <div class="gallery-item">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                <?php if (!empty($image['caption'])): ?>
                    <p class="gallery-caption"><?php echo esc_html($image['caption']); ?></p>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
