$(document).ready(function() {
    function sendForm() {
        $('.form-order-rent').on('submit', function () {
            var $yiiform = $(this);
            $.ajax({
                type: $yiiform.attr('method'),
                url: $yiiform.attr('action'),
                data: $yiiform.serializeArray()
            }).done(function (data) {
                if(data == 'success') {
                    $('.form-order-rent-result').css('display', 'block');
                    $('.form-order-rent')[0].reset();
                }
            }).fail(function () {
            })
            return false;
        })
    }
    sendForm();
})