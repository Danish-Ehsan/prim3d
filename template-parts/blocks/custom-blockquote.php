<?php

// Create id attribute allowing for custom "anchor" value.
$id = 'ACF-block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'custom-blockquote';

if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.
$text = get_field('text');

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
	<div class="custom-blockquote__copy-cont"><?php echo $text; ?></div>
</div>


