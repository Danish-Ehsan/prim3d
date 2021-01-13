<?php

// Create id attribute allowing for custom "anchor" value.
$id = 'ACF-block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block-custom-accordion';

// Load values and assing defaults.
$header = get_field('header');
$content = get_field('content');

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> closed js--custom-accordion">
	<div class="block-custom-accordion__header-cont js--custom-accordion-header">
		<span class="block-custom-accordion__header"><?php echo $header; ?></span>
		<button class="block-custom-accordion__expand-icon js--custom-accordion-btn">
			<div class="block-custom-accordion__expand-icon-bar"></div>
			<div class="block-custom-accordion__expand-icon-bar"></div>
		</button>
    </div>
	<div class="block-custom-accordion__slide-panel js--custom-accordion-slide-panel">
		<div class="block-custom-accordion__content-cont">
			<?php echo $content; ?>
		</div>
	</div>
</div>