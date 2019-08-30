$(document).ready(function () {
    $('#transliteButton').on('click', function () {
        let header = $('.header-field').val();
        let csrf = yii.getCsrfToken();
        let alias = "/admin/url/translit-url";
        var data = header;
        $.ajax({
            url: alias,
            type: 'POST',
            data: data,
            success: function (data) {
                $('#alias-field input').val(data);
            }
        });
        return false;

    })
})