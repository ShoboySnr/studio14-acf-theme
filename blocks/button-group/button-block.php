<?php

$classes = isset( $block['className'] ) ? ' ' . $block['className'] : '';

$id = isset( $block['anchor'] ) ? $block['anchor'] : '';

$button = get_field('button_link');

if(!empty($button)) {
	echo '<div ' . ( !empty( $id ) ? 'id="' . $id . '" ' : '') . 'class="block-button-group ' . $classes . '">';
	
	$target = $button['target'] ? ' target="' . $button['target'] . '"' : '';
	echo '<a href="' . esc_url( $button['url'] ) . '" class="button button-primary"' . $target . '>' . esc_attr( $button['title'] ) . '</a>';
	
	echo '</div>';
}