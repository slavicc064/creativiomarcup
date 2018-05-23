/*(function() {
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
                    text: 'container full width', value:
                    '[container width="full-width"] ' +
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
})();*/
(function() {
    tinymce.PluginManager.add('ex_first_button', function( editor, url ) {
        editor.addButton( 'ex_first_button', {
            title: 'Тестовая кнопка',
            icon: 'icon ex-icon',
            onclick: function() {
                editor.windowManager.open( {
                    title: 'Container',
                    body: [{
                        type: 'checkbox',
                        name: 'title',
                        label: 'Container full width'
                    },
                        {
                            type: 'listbox',
                            name: 'level',
                            label: 'Уровень заголовка',
                            'values': [
                                {text: '1/1', value: ' your content '},
                                {text: '1/2 + 1/2', value: '2'},
                                {text: '1/3 + 1/3 + 1/3', value: '3'},
                                {text: '1/4 + 1/4 + 1/4 + 1/4', value: '4'},
                                {text: '2/3 + 1/3', value: '5'},
                                {text: '1/4 + 3/4', value: '6'},
                                {text: '1/4 + 1/2 + 1/4', value: '7'},
                                {text: '5/6 + 1/6', value: '8'},
                                {text: '1/6 + 1/6 + 1/6 + 1/6 + 1/6 + 1/6', value: '9'},
                                {text: '1/6 + 4/6 + 1/6', value: '10'},
                                {text: '1/6 + 1/6 + 1/6 + 1/2', value: '11'}
                            ]
                        }],
                    onsubmit: function( e ) {

                        if (e.data.title === true)
                            editor.insertContent( '[container width="full-width"]' + e.data.level + '[/container]');

                        else
                            editor.insertContent( '[container] ' + e.data.level + ' [/container]');
                    }
                });
            }
        });
    });
})();
(function() {
    tinymce.PluginManager.add('ex_my_button', function( editor, url ) {
        editor.addButton( 'ex_my_button', {
            title: 'add html element',
            type: 'menubutton',
            text: "html",
            menu: [
                {
                    text: 'button',
                    onclick: function() {
                        editor.windowManager.open( {
                            title: 'Text for the button',
                            body: [{
                                type: 'textbox',
                                name: 'title',
                                label: 'Text for the button'
                            }],
                            onsubmit: function( e ) {
                                editor.insertContent( "<div class='button'>" + e.data.title + "</div>");
                            }
                        });
                    }
                },
            ]
        });
    });
})();