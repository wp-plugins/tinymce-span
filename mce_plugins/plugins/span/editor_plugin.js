(function() {
	var each = tinymce.each;

	tinymce.create('tinymce.plugins.mceSpan', {
		init : function(ed, url) {
			var t = this;

			t.editor = ed;

			// Register commands
			ed.addCommand('mceSpan', function(ui) {
				ed.windowManager.open({
					file : url + '/span.html',
					width : ed.getParam('span_popup_width', 420),
					height : ed.getParam('span_popup_height', 300),
					inline : 1
				}, {
					plugin_url : url
				});
			});

			ed.addCommand('mceInsertSpanText', t._insertSpanText, t);

			// Register buttons
			ed.addButton('span', {
                title : 'span_dlg.desc', 
                cmd : 'mceSpan',
                image : url + '/img/icon.png'
            });
		},

		_insertSpanText : function(content) {
            var span = document.createElement('span');
            span.setAttribute('class', 'prettyspan');
            span.setAttribute('className', 'prettyspan');
            span.class = 'prettyspan';
            span.className = 'prettyspan';
            if (typeof span.textContent != 'undefined') {
                span.textContent = content;
            } else {
                span.innerText = content;
            }
            var block = document.createElement('div');
            block.appendChild(span);
/*            var p = document.createElement('p'); */
            var space = document.createTextNode(' ');
            block.appendChild(space);
/*            block.appendChild(p); */
            ed = this.editor;
			ed.execCommand('mceInsertContent', false, block.innerHTML);
			ed.addVisual();
		}
	});

	// Register plugin
	tinymce.PluginManager.add('span', tinymce.plugins.mceSpan);
})();