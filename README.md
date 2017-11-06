# Plugin TinyMCE Button Button
## Description : <br>
Plugin That gives you opportunity to create a link in wysiwyg editor, which has custom classes.

## How To Use : <br>
To add a button use tinyMCEButton filter.
Text key -> is text that is shown in admin when choosing the button.
Value key -> Classes that will be added to this button.

add_filter('tinyMCEButton', function ($buttons) {
    $buttons[] = ['text' => 'Intro Button', 'value' => 'button intro-button'];
    return $buttons;
});

## Installation : <br>
### in composer.json : <br>
#### under "repositories" :<br>

{
    "url": "https://github.com/codelight-eu/plugin-custom-style-link",
    "type": "git"
},


#### under "require" :<br>

"codelight/plugin-custom-style-link": "*",
