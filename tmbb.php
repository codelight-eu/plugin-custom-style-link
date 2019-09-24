<?php
/*
 * Plugin Name: TinyMCE Button Button
 * Plugin URI: https://github.com/codelight-eu/tinymce-button-button/
 * Version: 0.91
 * Description: Add custom styled links in visual editor.
 * Author: Codelight
 * Author URI: https://codelight.eu/
 */

//loading autoloader
require_once plugin_dir_path(__FILE__) . 'includes/button_autoloader.php';

//function for starting plugin
function startTmbb()
{
    new TinyMCE_Button\ButtonLoader();
}

startTmbb();

