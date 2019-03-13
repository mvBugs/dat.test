
(function() {
    var k = {
            readOnly: 1,
            preserveState: !0,
            editorFocus: !1,
            exec: function (a) {
                this.toggleState();
                this.refresh(a)
            },
            refresh: function (a) {
                if (a.document) {
                    var ed = a.editable();
                    var c = this.state != CKEDITOR.TRISTATE_ON || a.elementMode == CKEDITOR.ELEMENT_MODE_INLINE && !a.focusManager.hasFocus ? "removeClass" : "attachClass";
                    ed[c]("cke_copycopy");
                }
            }
        },
        cc = {
            exec: function (a) {
                if (a.document) {
                    var ed = a.editable();
                    var els = ed.find("[data-clone=\"true\"]");
                    for(var i=0; i < els.count(); i++) {
                        var el = els.getItem(i);

                        console.log(el);
                    }
                }
            },
        };
    CKEDITOR.plugins.add('copycopy',
    {
        lang: "ru,en",
        icons: "copycopy",
        hidpi: true,
        init: function (a) {

            var lang = a.lang.copycopy,
                b = a.addCommand("copyElement", k);
                a.addCommand("copyElementVeiw", cc);
            function c() {
                b.refresh(a)
            }
            CKEDITOR.addCss(".cke_copycopy [data-clone=\"true\"] { outline: #999 dashed 1px;}");
            if (!a.blockless) {
                b.canUndo = !1;
                a.config.startupOutlineBlocks && b.setState(CKEDITOR.TRISTATE_ON);
                a.ui.addButton && a.ui.addButton("copyElement", {
                    label: lang.label,
                    command: 'copyElement',
                    icon: this.path + 'icons/icon.png'
                });
                a.on("mode", function () {
                    b.state != CKEDITOR.TRISTATE_DISABLED && b.refresh(a)
                });
                a.elementMode == CKEDITOR.ELEMENT_MODE_INLINE && (a.on("focus", c), a.on("blur", c));
                a.on("contentDom", function () {

                    b.state != CKEDITOR.TRISTATE_DISABLED &&
                    b.refresh(a)
                });
                a.addMenuGroup("copycopy", 109);
                a.addMenuItems && a.addMenuItems({
                    copycopy: {
                        label: lang.label,
                        command: "copyElementVeiw",
                        group: "copycopy"
                    }
                });
                a.contextMenu && a.contextMenu.addListener(function(a) {

                    var parent = a.getParent();

                    if (b.state == 1 && parent && parent.getAttribute('data-clone')) return {
                        copycopy: CKEDITOR.TRISTATE_OFF
                    }

                    return null
                })
            }
        }
    });
})();

