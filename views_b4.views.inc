<?php
/**
 * @file
 * Provide views data and handlers for views_b4 module.
 */

/**
 * Implements hook_views_plugins().
 */
function views_b4_views_plugins() {
  return array(
    'style' => array(
      'flexviews' => array(
        'title' => t('views_b4'),
        'handler' => 'views_plugin_style_views_b4',
        'help' => t("Display content in views_b4"),
        'theme' => 'views_view_views_b4',
        'type' => 'normal',
        'path' => backdrop_get_path('module', 'views_b4'),
        'theme path' => backdrop_get_path('module', 'views_b4'),
        'uses row plugin' => TRUE,
        'uses row class' => TRUE,
        'uses grouping' => FALSE,
        'uses options' => TRUE,
      ),
    ),
  );
}

