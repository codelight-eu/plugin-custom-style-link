<?php
/*
 * plugin name: Custom Style Links
 * version: 0.8
 * description: Add custom styled links in visual editor.
 * author: Robert
 */

//loading autoloader
require_once plugin_dir_path(__FILE__) . 'includes/csl_autoloader.php';

//function for starting plugin
function startCsl()
{
    new TinyMCE_Button\csl_loader();
}

startCsl();

