/**
 * Created by baidu on 15/11/8.
 */

$(document).ready(function () {

    /**
     * 提交
     */
    $('.btn-submit').click(function () {
        var code = $('#login-code').val();

        $.ajax({
            url: "/admin/login/submit",
            type: "POST",
            dataType: "json",
            data: {
                code: code
            },
            success: function (json) {
                if (json.status != 1) {
                    alert(json.message);
                    return false;
                }

                window.location.href = '/admin/activity/index';
            }
        });

    });

});