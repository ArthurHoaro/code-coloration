<?php

use Shaarli\Router;
use Shaarli\Plugin\PluginManager;
use Shaarli\Config\ConfigManager;

/**
 * Adds PRISM CSS file.
 *
 * @param array $data data passed to plugin
 * @param ConfigManager $conf instance.
 *
 * @return array altered $data.
 */
function hook_code_coloration_render_includes($data, $conf)
{
    // Only execute when linklist is rendered.
    if ($data['_PAGE_'] == Router::$PAGE_LINKLIST) {
        $custom = $conf->get('plugins.CUSTOM_PRISM_CSS_FILENAME');
        $filename = !empty($custom) ? $custom : 'prism.css';
        $data['css_files'][] = PluginManager::$PLUGINS_PATH . '/code_coloration/' . $filename;
    }
    return $data;
}

/**
 * Adds PRISM JS file.
 *
 * @param array         $data data passed to plugin
 * @param ConfigManager $conf instance.
 *
 * @return array altered $data.
 */
function hook_code_coloration_render_footer($data, $conf)
{
    // Only execute when linklist is rendered.
    if ($data['_PAGE_'] == Router::$PAGE_LINKLIST) {
        $custom = $conf->get('plugins.CUSTOM_PRISM_JS_FILENAME');
        $filename = !empty($custom) ? $custom : 'prism.js';
        $data['js_files'][] = PluginManager::$PLUGINS_PATH . '/code_coloration/'. $filename;
    }
    return $data;
}
