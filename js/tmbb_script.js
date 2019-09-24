(function () {
    //add button to TinyMCE editor
    tinymce.PluginManager.add('styledLink', function (editor, url) {
        editor.addButton('styledLink', {
            title: 'Insert styled link',
            cmd: 'styledLink',
            image: url + '/../assets/icon.png',
            onclick: function () {

            }
        });
        //create new windows with values
        editor.addCommand('styledLink', function insertStyledLink() {
            var listbox = editor.windowManager.open({
                title: 'Insert styled link',
                style: 'width: 500px;',
                body: [
                    {
                        type: 'textbox',
                        name: 'titleValue',
                        label: 'Title',
                        tooltip: 'Text to display. If you dont want text, leave the placeholder intact',
                        value: ''
                    },
                    {
                        type: 'textbox',
                        name: 'urlValue',
                        label: 'URL',
                        tooltip: 'Check if you added http://',
                        value: 'http://'
                    },
                    {
                        type: 'listbox',
                        name: 'styleValue',
                        label: 'Choose the style',
                        values: tinyMCEButtonStyleOptions
                    }
                ],
                //returning html with selected values
                onsubmit: function (SelectListData) {
                    var styleNode = SelectListData.data.styleValue;
                    var titleNode = SelectListData.data.titleValue;
                    var urlNode = SelectListData.data.urlValue;
                    var creatingElement = '<a href="' + urlNode + '" class="' + styleNode + '">' + titleNode + '</a>'
                    tinymce.activeEditor.execCommand('mceInsertContent', false, creatingElement)
                }
            });
        });
    });
})();
