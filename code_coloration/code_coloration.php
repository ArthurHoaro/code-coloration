<?php

/**
 * Adds PRISM CSS file.
 *
 * @param array $data data passed to plugin
 *
 * @return array altered $data.
 */
function hook_code_coloration_render_includes($data)
{
    // Only execute when linklist is rendered.
    if ($data['_PAGE_'] == Router::$PAGE_LINKLIST) {
        $data['css_files'][] = PluginManager::$PLUGINS_PATH . '/code_coloration/prism.css';
    }
    return $data;
}

/**
 * Adds PRISM JS file.
 *
 * @param array $data data passed to plugin
 *
 * @return array altered $data.
 */
function hook_code_coloration_render_footer($data)
{
    // Only execute when linklist is rendered.
    if ($data['_PAGE_'] == Router::$PAGE_LINKLIST) {
        $filename = !empty($GLOBALS['plugins']['CUSTOM_PRISM_JS_FILENAME'])
            ? $GLOBALS['plugins']['CUSTOM_PRISM_JS_FILENAME']
            : 'prism.js';
        $data['js_files'][] = PluginManager::$PLUGINS_PATH . '/code_coloration/'. $filename;
    }
    return $data;
}
