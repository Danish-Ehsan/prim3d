<?php

// Create id attribute allowing for custom "anchor" value.
$id = 'ACF-block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'custom-accordion-image';

if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.
$header = get_field('header');
$content = get_field('content');
$image = get_field('main_image');
$bck_image = get_field('background_image');

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> js--custom-accordion-image">
	<div class="custom-accordion-image__top-panel js--custom-accordion-image-top-panel">
		<div class="custom-accordion-image__image-cont" style="background-image: url(<?php echo $image; ?>);">
		</div>
		<div class="custom-accordion-image__header-cont" style="background-image: url(<?php echo $bck_image; ?>);">
			<div class="custom-accordion-image__header"><?php echo $header; ?></div>
			<button class="custom-accordion-image__expand-icon js--custom-accordion-image-btn">
				<div class="custom-accordion-image__expand-icon-bar"></div>
				<div class="custom-accordion-image__expand-icon-bar"></div>
			</button>
		</div>
	</div>
	<div class="custom-accordion-image__slide-panel">
		<div class="custom-accordion-image__content-cont">
			<?php echo $content; ?>
		</div>
	</div>
</div>


