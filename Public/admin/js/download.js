/**
 * Created by baidu on 15/11/8.
 */

$(document).ready(function () {

    /**
     * add
     */
    $('#btn-add').click(function () {
        $('#myModal-download input[name="name"]').attr('value', '');
        $('#myModal-download input[name="address"]').attr('value', '');

        $('#id-download_id').val(null);
    });

    /**
     * 编辑
     */
    $('.btn-edit').click(function () {
        var id = $(this).data('id');
        var name = $(this).data('name');
        var address = $(this).data('address');

        $('#myModal-download').modal('show');
        $('#myModal-download input[name="name"]').attr('value', name);
        $('#myModal-download input[name="address"]').attr('value', address);

        $('#id-download_id').val(id);
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
            url: "/Admin/Download/del",
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
    $('#myModal-download .btn-submit').click(function () {
        var id = $('#id-download_id').val();
        var name = $('#myModal-download input[name="name"]').val();
        var address = $('#myModal-download input[name="address"]').val();

        var url = "/admin/download/add";
        if (id) {
            url = "/admin/download/update";
        }

        $.ajax({
            url: url,
            type: "GET",
            dataType: "json",
            data: {
                id: id,
                name: name,
                address: address
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