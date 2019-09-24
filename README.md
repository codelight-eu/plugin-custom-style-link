# TinyMCE Button Button
Add buttons to your TinyMCE editor. The "buttons" are actually just link tags with CSS classes you can define.

## Installation
`composer require codelight/tinymce-button-button`

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
