(function() {
    tinymce.PluginManager.add('ex_first_button', function( editor, url ) {
        editor.addButton( 'ex_first_button', {
            title: 'add container',
            type: 'menubutton',
            icon: 'icon ex-icon',
            menu: [
                {
                    text: 'container', value:
                    '[container] ' +
                        'your content ' +
                    '[/container]',
                    onclick: function() {
                        editor.insertContent(this.value());
                    }
                },
                {
                    text: 'container and 2 columns', value:
                    '[container row="1"] ' +
                        '[col class="2"] your content in column 1 [/col] ' +
                        '[col class="2"] your content in column 2 [/col] ' +
                    '[/container]',
                    onclick: function() {
                        editor.insertContent(this.value());
                    }
                },
                {
                    text: 'container and 3 columns', value:
                    '[container row="1"] ' +
                        '[col class="4"] your content in column 1 [/col] ' +
                        '[col class="4"] your content in column 2 [/col] ' +
                        '[col class="4"] your content in column 3 [/col] ' +
                    '[/container]',
                    onclick: function() {
                        editor.insertContent(this.value());
                    }
                },
                {
                    text: 'container and 4 columns', value:
                    '[container row="1"] ' +
                        '[col class="3"] your content in column 1 [/col] ' +
                        '[col class="3"] your content in column 2 [/col] ' +
                        '[col class="3"] your content in column 3 [/col] ' +
                        '[col class="3"] your content in column 4 [/col] ' +
                    '[/container]',
                    onclick: function() {
                        editor.insertContent(this.value());
                    }
                }
            ]
        });
    });
})();
(function() {
    tinymce.PluginManager.add('ex_my_button', function( editor, url ) {
        editor.addButton( 'ex_my_button', {
            text: "",
            title: 'add button',
            icon: "icon dashicons-editor-code",
            onclick: function() {
                editor.insertContent('[row] content [/row]'
                );
            }
        });
    });
})();