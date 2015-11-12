/**
 * Created by baidu on 15/11/8.
 */

$(document).ready(function () {

    /**
     * add
     */
    $('#btn-add').click(function () {
        $('#myModal-notice input[name="name"]').attr('value', '');
        $('#myModal-notice textarea[name="contents"]').val('');

        $('#id-notice_id').val(null);
    });

    /**
     * 编辑
     */
    $('.btn-edit').click(function () {
        var id = $(this).data('id');
        var name = $(this).data('name');
        var contents = $(this).data('contents');

        $('#myModal-notice').modal('show');
        $('#myModal-notice input[name="name"]').attr('value', name);
        $('#myModal-notice textarea[name="contents"]').val(contents);

        $('#id-notice_id').val(id);
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
            url: "/admin/notice/del",
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

    /**
     * 提交
     */
    $('#myModal-notice .btn-submit').click(function () {
        var id = $('#id-notice_id').val();
        var name = $('#myModal-notice input[name="name"]').val();
        var contents = $('#myModal-notice textarea[name="contents"]').val();

        $.ajax({
            url: "/admin/notice/save",
            type: "GET",
            dataType: "json",
            data: {
                id: id,
                name: name,
                contents: contents
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

});