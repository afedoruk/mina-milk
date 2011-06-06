<?php
/**
 * @file
 * controller_feature.features.menu_custom.inc
 */

/**
 * Implementation of hook_menu_default_menu_custom().
 */
function controller_feature_menu_default_menu_custom() {
  $menus = array();

  // Exported menu: menu-external-links
  $menus['menu-external-links'] = array(
    'menu_name' => 'menu-external-links',
    'title' => 'External links',
    'description' => '',
  );
  // Translatables
  // Included for use with string extractors like potx.
  t('External links');


  return $menus;
}
