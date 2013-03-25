<?php
/**
 * @file
 * game_content.features.inc
 */

/**
 * Implements hook_node_info().
 */
function game_content_node_info() {
  $items = array(
    'game' => array(
      'name' => t('Game'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}