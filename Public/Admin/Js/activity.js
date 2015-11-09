/**
 * Created by baidu on 15/11/8.
 */

$(document).ready(function () {

    init();

    function init() {
        var id = $('#activity_id').val();
        if (id) {
            $.ajax({
                url: '/admin/activity/one',
                type: "GET",
                dataType: "json",
                data: {
                    id: id
                },
                success: function (json) {
                    if (json.status != 1) {
                        alert(json.message);
                        return false;
                    }

                    $('#activity_title').val(json.data.title);
                    editor.value(json.data.contents);
                }
            });
        }
    }

    /**
     * 提交
     */
    $('.btn-submit').click(function () {

        var id = $('#activity_id').val();

        var title = $('#activity_title').val();

        var contents = editor.value();

        //var html = $('.editor-preview').html();
        var html = getEditorHtml();

        $.ajax({
            url: '/admin/activity/save',
            type: "POST",
            dataType: "json",
            data: {
                id: id,
                title: title,
                contents: contents,
                html: html
            },
            success: function (json) {
                if (json.status != 1) {
                    alert(json.message);
                    return false;
                }
                window.location.href = '/admin/activity/detail?id=' + json.data.id;
            }
        });

    });


    /**
     * 删除
     */
    $('.btn-del').click(function () {
        var id = $(this).data('id');

        if (!confirm('确定删除?')) {
            return;
        }

        $.ajax({
            url: "/admin/activity/del",
            type: "GET",
            dataType: "json",
            data: {
                id: id
            },
            success: function (json) {
                if (json.status != 1) {
                    alert(json.message);
                    return false;
                }

                window.location.reload();
            }
        });
    });


    function getEditorHtml() {
        var cm = editor.codemirror;
        var wrapper = cm.getWrapperElement();
        var preview = wrapper.lastChild;
        var html = editor.options.previewRender(editor.value(), preview);

        return html;
    }

});