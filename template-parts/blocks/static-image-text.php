<?php

// Create id attribute allowing for custom "anchor" value.
$id = 'ACF-block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block-static-image';

if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.
$header = get_field('header');
$body_copy = get_field('body_copy');
$image = get_field('main_image');
$bck_image = get_field('background_image');

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
	<div class="block-static-image__image-cont" style="background-image: url(<?php echo $image; ?>);">
    </div>
    <div class="block-static-image__copy-cont" style="background-image: url(<?php echo $bck_image; ?>);">
	<?php if (!empty($header)) : ?>
		<span class="block-static-image__header"><?php echo $header; ?></span>
	<?php endif; ?>
		<div class="block-static-image__body-copy"><?php echo $body_copy; ?></div>
    </div>
</div>


