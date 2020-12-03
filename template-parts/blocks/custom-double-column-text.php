<?php

// Create id attribute allowing for custom "anchor" value.
$id = 'ACF-block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'custom-double-column-text-block';

if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.
$copy_left_column = get_field('left_column_text');
$copy_right_column = get_field('right_column_text');

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="custom-double-column-text-block__copy-cont" style="background-image: url(<?php echo $bck_image; ?>);">
		<div class="custom-double-column-text-block__left-column-copy"><?php echo $copy_left_column; ?></div>
		<div class="custom-double-column-text-block__right-column-copy"><?php echo $copy_right_column; ?></div>
    </div>
</div>


