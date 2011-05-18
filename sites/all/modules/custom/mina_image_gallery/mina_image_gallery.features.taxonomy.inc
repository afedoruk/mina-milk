<?php
/**
 * @file
 * mina_image_gallery.features.taxonomy.inc
 */

/**
 * Implementation of hook_taxonomy_default_vocabularies().
 */
function mina_image_gallery_taxonomy_default_vocabularies() {
  return array(
    'section' => array(
      'name' => 'Раздел',
      'machine_name' => 'section',
      'description' => '',
      'hierarchy' => '0',
      'module' => 'taxonomy',
      'weight' => '0',
    ),
  );
}
