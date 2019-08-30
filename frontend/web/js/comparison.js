$(document).ready(function () {

    function addToComparison() {
        $('.add-to-comparison').on('click', function () {
            let textAddToComparison = $(this).attr('data-add-in-comparison');
            let textRemoneToComparison = $(this).attr('data-remove-in-comparison');
            if ($(this).hasClass('is_comparison')) {
                $(this).removeClass('is_comparison');
                $(this).attr('title', textRemoneToComparison);
            } else {
                $(this).addClass('is_comparison');
                $(this).attr('title')
                $(this).attr('title', textAddToComparison);
            }
            $.ajax({
                type: 'POST',
                url: $(this).attr('href'),
                data: 'data'
            }).done(function (data) {
                if (data) {
                    $('#comparison-widget').html(data);
                } else {
                }
            }).fail(function () {
            })
            return false;
        })
    }

    addToComparison();
})