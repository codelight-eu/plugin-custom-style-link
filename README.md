# TinyMCE Button Button
Add buttons to your TinyMCE editor. The "buttons" are actually just link tags with CSS classes you can define.

## Installation
Via Composer:  
`composer require codelight/tinymce-button-button`

Alternatively, download and install as a WordPress plugin.   
Note that v2 of this plugin will only be released as a composer package.

## Usage
Register different button styles using the following filter:  
```php
add_filter('tinyMCEButton', function ($buttons) {
    $buttons[] = [
        'text' => 'Intro Button', 
        'value' => 'button intro-button'
    ];
    return $buttons;
});
```
The `text` parameter is displayed to the user when selecting button styles. The `value` parameter is used as the link class.
