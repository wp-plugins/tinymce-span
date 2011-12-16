tinyMCEPopup.requireLangPack();

var SpanDialog = {
	init : function() {
		this.resize();
	},

	resize : function() {
		var h, e;

		if (!self.innerWidth) {
			h = document.body.clientHeight;
		} else {
			h = self.innerHeight;
		}

		e = document.getElementById('source');

		if (e) {
			e.style.height = Math.abs(h - 50) + 'px';
		}
	},

 	insert : function() {
		tinyMCEPopup.execCommand(
            'mceInsertSpanText',
            document.getElementById('source').value
        );

		tinyMCEPopup.close();
	}
};

tinyMCEPopup.onInit.add(SpanDialog.init, SpanDialog);