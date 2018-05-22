(function() {
    tinymce.PluginManager.add('ex_first_button', function( editor, url ) {
        editor.addButton( 'ex_first_button', {
            title: 'add column',
            icon: 'icon ex-icon',
            onclick: function() {
                editor.windowManager.open( {
                    title: 'Сolumns',
                    body: [{
                        type: 'listbox',
                        name: 'level',
                        label: 'Сolumns',
                        'values': [
                            {
                                text: 'row and 2 columns', value:
                                    '[row] ' +
                                        '[col] your content in column 1 [/col] ' +
                                        '[col] your content in column 2 [/col] ' +
                                    '[/row]'
                            },
                            {
                                text: 'row and 3 columns', value:
                                    '[row] ' +
                                        '[col] your content in column 1 [/col] ' +
                                        '[col] your content in column 2 [/col] ' +
                                        '[col] your content in column 3 [/col] ' +
                                    '[/row]'
                            },
                            {
                                text: 'row and 4 columns', value:
                                    '[row] ' +
                                        '[col] your content in column 1 [/col] ' +
                                        '[col] your content in column 2 [/col] ' +
                                        '[col] your content in column 3 [/col] ' +
                                        '[col] your content in column 4 [/col] ' +
                                    '[/row]'
                            },
                            {
                                text: 'row and 5 columns', value:
                                    '[row] ' +
                                        '[col] your content in column 1 [/col] ' +
                                        '[col] your content in column 2 [/col] ' +
                                        '[col] your content in column 3 [/col] ' +
                                        '[col] your content in column 4 [/col] ' +
                                        '[col] your content in column 5 [/col] ' +
                                    '[/row]'
                            },
                            {
                                text: 'row', value:
                                    '[row] your content [/row]'
                            }
                        ]
                    }
                        ],
                    onsubmit: function( e ) {
                        editor.insertContent( e.data.level );
                    }
                });
            }
        });
    });
})();
(function() {
    tinymce.PluginManager.add('ex_my_button', function( editor, url ) {
        editor.addButton( 'ex_my_button', {
            title: 'container',
            icon: "icon dashicons-editor-code",
            onclick: function() {
                editor.insertContent('[row] content [/row]'
                );
            }
        });
    });
})();