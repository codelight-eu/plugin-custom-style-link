<?php
namespace TinyMCE_Button;

class Csl_Filter
{
//following should be removed from final release and is only for testing purpose
//start
    public $buttonStyleOptions = [
        ['text' => 'Green button', 'value' => 'btn btn-success homepage-button'],
        ['text' => 'Light Blue button', 'value' => 'btn btn-info homepage-button'],
        ['text' => 'Blue button', 'value' => 'btn btn-primary homepage-button'],
        ['text' => 'Orange button', 'value' => 'btn btn-lg pumpkin-btn-flat homepage-button'],
        ['text' => 'Facebook', 'value' => 'fa fa-facebook'],
        ['text' => 'Twitter', 'value' => 'fa fa-twitter'],
        ['text' => 'Email', 'value' => 'fa fa-envelope'],
    ];
//end

    //empty filter for adding custom styles
    public function customStyleLinkFilter($buttonStyleOptions)
    {
        return $buttonStyleOptions;
    }
    //adding filter
    public function getButtonStyleOptions()
    {
        ?>
        <script>
            var js_data = '<?= json_encode(apply_filters('tinyMCEButton', $this->buttonStyleOptions)) ?>';
        </script>
        <?php
    }
    //returning custom styles to JS
    public function outputButtonStyleOptions()
    {
        ?>
        <script>
            window.tinyMCEButtonStyleOptions = JSON.parse(js_data);
        </script>
        <?php
    }
    //starter function for adding filter and custom styles
    public function styleVariables()
    {
        $this->getButtonStyleOptions();
        $this->outputButtonStyleOptions();
    }
}
