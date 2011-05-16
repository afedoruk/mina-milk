<?php
/**
 * @file
 * controller_feature.features.user_role.inc
 */

/**
 * Implementation of hook_user_default_roles().
 */
function controller_feature_user_default_roles() {
  $roles = array();

  // Exported role: owner
  $roles['owner'] = array(
    'name' => 'owner',
    'weight' => '2',
  );

  return $roles;
}
