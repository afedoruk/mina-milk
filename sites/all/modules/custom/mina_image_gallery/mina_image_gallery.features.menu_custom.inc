<?php
/**
 * @file
 * mina_image_gallery.features.menu_custom.inc
 */

/**
 * Implementation of hook_menu_default_menu_custom().
 */
function mina_image_gallery_menu_default_menu_custom() {
  $menus = array();

  // Exported menu: menu-menu-sections
  $menus['menu-menu-sections'] = array(
    'menu_name' => 'menu-menu-sections',
    'title' => 'Sections',
    'description' => '',
  );
  // Translatables
  // Included for use with string extractors like potx.
  t('Sections');


  return $menus;
}
