<?php
/**
 * @file
 * mina_image_gallery.features.inc
 */

/**
 * Implementation of hook_node_info().
 */
function mina_image_gallery_node_info() {
  $items = array(
    'image' => array(
      'name' => t('Image'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
