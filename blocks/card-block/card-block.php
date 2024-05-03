<?php

$classes = isset( $block['className'] ) ? ' ' . $block['className'] : '';

$id = isset( $block['anchor'] ) ? $block['anchor'] : '';

$title = get_field('title');
$subtitle = get_field('subtitle');

echo '<div ' . ( !empty( $id ) ? 'id="' . $id . '" ' : '') . 'class="card-button-group ' . $classes . '">';

echo '<h1>'.$title. '</h1>';
echo '<div class="subtitle">';
echo '<p>'. $subtitle.'</p>';
echo '</div>';
echo '</div>';

