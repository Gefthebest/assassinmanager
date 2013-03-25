<?php
/**
 * @file
 * license_to_kill_system.features.inc
 */

/**
 * Implements hook_node_info().
 */
function license_to_kill_system_node_info() {
  $items = array(
    'license_to_kill' => array(
      'name' => t('License to kill'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}