<?php
/*
 * plugin name: TinyMCE Button Button
 * version: 0.9
 * description: Add custom styled links in visual editor.
 * author: Robert
 */

//loading autoloader
require_once plugin_dir_path(__FILE__) . 'includes/button_autoloader.php';

//function for starting plugin
function startTmbb()
{
    new TinyMCE_Button\ButtonLoader();
}

startTmbb();

