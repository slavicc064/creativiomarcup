(function() {
    tinymce.PluginManager.add('row_button', function( editor, url ) {
        editor.addButton( 'row_button', {
            title: 'add row',
            icon: 'icon icon-row',
            onclick: function( e ) {
                editor.insertContent(
                    "<p>[row]</p> your content <p>[/row]</p>"
                );
            }
        });
    });

    tinymce.PluginManager.add('row_full_width_button', function( editor, url ) {
        editor.addButton( 'row_full_width_button', {
            title: 'add row full width',
            icon: 'icon icon-row-full-width',
            onclick: function( e ) {
                editor.insertContent(
                    '<p>[row_full_width]</p> your content <p>[/row_full_width]</p>'
                );
            }
        });
    });

    tinymce.PluginManager.add('ex_col-2_button', function( editor, url ) {
        editor.addButton( 'ex_col-2_button', {
            title: 'add columns 1/2 + 1/2',
            icon: 'icon col-2',
            onclick: function( e ) {
                editor.insertContent(
                    '<p>[col class="6"]</p> <p>[text]</p>your content in column 1<p>[/text]</p> <p>[/col]</p>' +
                    '<p>[col class="6"]</p> <p>[text]</p>your content in column 2<p>[/text]</p> <p>[/col]</p>'
                );
            }
        });
    });

    tinymce.PluginManager.add('ex_col-3_button', function( editor, url ) {
        editor.addButton( 'ex_col-3_button', {
            title: 'add columns 1/3 + 1/3 + 1/3',
            icon: 'icon col-3',
            onclick: function( e ) {
                editor.insertContent(
                    '<p>[col class="4"]</p> <p>[text]</p>your content in column 1<p>[/text]</p> <p>[/col]</p>' +
                    '<p>[col class="4"]</p> <p>[text]</p>your content in column 2<p>[/text]</p> <p>[/col]</p>' +
                    '<p>[col class="4"]</p> <p>[text]</p>your content in column 3<p>[/text]</p> <p>[/col]</p>'
                );
            }
        });
    });

    tinymce.PluginManager.add('ex_col-4_button', function( editor, url ) {
        editor.addButton( 'ex_col-4_button', {
            title: 'add columns 1/4 + 1/4 + 1/4 + 1/4',
            icon: 'icon col-4',
            onclick: function( e ) {
                editor.insertContent(
                    '<p>[col class="3"]</p> <p>[text]</p>your content in column 1<p>[/text]</p> <p>[/col]</p>' +
                    '<p>[col class="3"]</p> <p>[text]</p>your content in column 2<p>[/text]</p> <p>[/col]</p>' +
                    '<p>[col class="3"]</p> <p>[text]</p>your content in column 3<p>[/text]</p> <p>[/col]</p>' +
                    '<p>[col class="3"]</p> <p>[text]</p>your content in column 4<p>[/text]</p> <p>[/col]</p>'
                );
            }
        });
    });

    tinymce.PluginManager.add('ex_col-2-3_1-3_button', function( editor, url ) {
        editor.addButton( 'ex_col-2-3_1-3_button', {
            title: 'add columns 2/3 + 1/3',
            icon: 'icon col-2-3_1-3',
            onclick: function( e ) {
                editor.insertContent(
                    '<p>[col class="8"]</p> <p>[text]</p>your content in column 1<p>[/text]</p> <p>[/col]</p>' +
                    '<p>[col class="4"]</p> <p>[text]</p>your content in column 2<p>[/text]</p> <p>[/col]</p>'
                );
            }
        });
    });

    tinymce.PluginManager.add('ex_col-1-4_3-4_button', function( editor, url ) {
        editor.addButton( 'ex_col-1-4_3-4_button', {
            title: 'add columns 1/4 + 3/4',
            icon: 'icon col-1-4_3-4',
            onclick: function( e ) {
                editor.insertContent(
                    '<p>[col class="3"]</p> <p>[text]</p>your content in column 1<p>[/text]</p> <p>[/col]</p>' +
                    '<p>[col class="9"]</p> <p>[text]</p>your content in column 2<p>[/text]</p> <p>[/col]</p>'
                );
            }
        });
    });

    tinymce.PluginManager.add('ex_col-1-4_1-2_1-4_button', function( editor, url ) {
        editor.addButton( 'ex_col-1-4_1-2_1-4_button', {
            title: 'add columns 1/4 + 1/2 + 1/4',
            icon: 'icon col-1-4_1-2_1-4',
            onclick: function( e ) {
                editor.insertContent(
                    '<p>[col class="3"]</p> <p>[text]</p>your content in column 1<p>[/text]</p> <p>[/col]</p>' +
                    '<p>[col class="6"]</p> <p>[text]</p>your content in column 2<p>[/text]</p> <p>[/col]</p>' +
                    '<p>[col class="3"]</p> <p>[text]</p>your content in column 3<p>[/text]</p> <p>[/col]</p>'
                );
            }
        });
    });

    tinymce.PluginManager.add('ex_col-5-6_1-6_button', function( editor, url ) {
        editor.addButton( 'ex_col-5-6_1-6_button', {
            title: 'add columns 5/6 + 1/6',
            icon: 'icon col-5-6_1-6',
            onclick: function( e ) {
                editor.insertContent(
                    '<p>[col class="10"]</p> <p>[text]</p>your content in column 1<p>[/text]</p> <p>[/col]</p>' +
                    '<p>[col class="2"]</p> <p>[text]</p>your content in column 2<p>[/text]</p> <p>[/col]</p>'
                );
            }
        });
    });

    tinymce.PluginManager.add('ex_col-6_button', function( editor, url ) {
        editor.addButton( 'ex_col-6_button', {
            title: 'add columns 1/6 + 1/6 + 1/6 + 1/6 + 1/6 + 1/6',
            icon: 'icon col-6',
            onclick: function( e ) {
                editor.insertContent(
                    '<p>[col class="2"]</p> <p>[text]</p>your content in column 1<p>[/text]</p> <p>[/col]</p>' +
                    '<p>[col class="2"]</p> <p>[text]</p>your content in column 2<p>[/text]</p> <p>[/col]</p>' +
                    '<p>[col class="2"]</p> <p>[text]</p>your content in column 3<p>[/text]</p> <p>[/col]</p>' +
                    '<p>[col class="2"]</p> <p>[text]</p>your content in column 4<p>[/text]</p> <p>[/col]</p>' +
                    '<p>[col class="2"]</p> <p>[text]</p>your content in column 5<p>[/text]</p> <p>[/col]</p>' +
                    '<p>[col class="2"]</p> <p>[text]</p>your content in column 6<p>[/text]</p> <p>[/col]</p>'
                );
            }
        });
    });

    tinymce.PluginManager.add('ex_col-1-6_4-6_1-6_button', function( editor, url ) {
        editor.addButton( 'ex_col-1-6_4-6_1-6_button', {
            title: 'add columns 1/6 + 4/6 + 1/6',
            icon: 'icon col-1-6_4-6_1-6',
            onclick: function( e ) {
                editor.insertContent(
                    '<p>[col class="2"]</p> <p>[text]</p>your content in column 1<p>[/text]</p> <p>[/col]</p>' +
                    '<p>[col class="8"]</p> <p>[text]</p>your content in column 2<p>[/text]</p> <p>[/col]</p>' +
                    '<p>[col class="2"]</p> <p>[text]</p>your content in column 3<p>[/text]</p> <p>[/col]</p>'
                );
            }
        });
    });

    tinymce.PluginManager.add('ex_col-1-6_1-6_1-6_1-2_button', function( editor, url ) {
        editor.addButton( 'ex_col-1-6_1-6_1-6_1-2_button', {
            title: 'add columns 1/6 + 1/6 + 1/6 + 1/2',
            icon: 'icon col-1-6_1-6_1-6_1-2',
            onclick: function( e ) {
                editor.insertContent(
                    '<p>[col class="2"]</p> <p>[text]</p>your content in column 1<p>[/text]</p> <p>[/col]</p>' +
                    '<p>[col class="2"]</p> <p>[text]</p>your content in column 2<p>[/text]</p> <p>[/col]</p>' +
                    '<p>[col class="2"]</p> <p>[text]</p>your content in column 3<p>[/text]</p> <p>[/col]</p>' +
                    '<p>[col class="6"]</p> <p>[text]</p>your content in column 4<p>[/text]</p> <p>[/col]</p>'
                );
            }
        });
    });

    tinymce.PluginManager.add('text_button', function( editor, url ) {
        editor.addButton( 'text_button', {
            title: 'add text',
            text: "Text",
            icon: false,
            onclick: function( e ) {
                editor.insertContent(
                    '<p>[text]</p>content<p>[/text]</p>'
                );
            }
        });
    });

    tinymce.PluginManager.add('add_button', function( editor, url ) {
        editor.addButton( 'add_button', {
            title: 'add button',
            icon: 'icon add_button',
            onclick: function() {
                editor.windowManager.open( {
                    title: 'add button',
                    body: [{
                        type: 'textbox',
                        name: 'title',
                        label: 'Button Text'
                    },
                        {
                            type: 'listbox',
                            name: 'level',
                            label: 'Button Style',
                            'values': [
                                {text: 'Primary', value: '[button btn="primary"]'},
                                {text: 'Secondary', value: '[button btn="secondary"]'},
                                {text: 'Success', value: '[button btn="success"]'},
                                {text: 'Danger', value: '[button btn="danger"]'},
                                {text: 'Warning', value: '[button btn="warning"]'},
                                {text: 'Info', value: '[button btn="info"]'},
                                {text: 'Light', value: '[button btn="light"]'},
                                {text: 'Dark', value: '[button btn="dark"]'},
                                {text: 'Link', value: '[button btn="link"]'}
                            ]
                        }],
                    onsubmit: function( e ) {
                        editor.insertContent( e.data.level + e.data.title + '[/button]');
                    }
                });
            }
        });
    });

})();