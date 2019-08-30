$(document).ready(function() {
   $('.search_category').on('click', function() {
        let category = $(this).data('category');
        let categoryText = $(this).text();
        $('.search_category_field').val(category);
        $('.category-text').text(categoryText);
   })
    function searchAjax() {
        $('.search-field-input').bind("change keyup input click", function () {
            let category = $('.search_category_field').val();
            let text = $('.search-field-input').val();
            let url = "/search/search-ajax";
            let data = $('#search-form').serialize();
            if (this.value.length >= 2) {
                $.ajax({
                    type: 'post',
                    url: url,
                    data: data,
                    response: 'text',
                    success: function (data) {
                        $(".search_result").html(data).fadeIn();
                    }
                })
            }
            else{
                $(".search_result").fadeOut();
            }
        })
        $(".search_result").hover(function () {
            $(".search-field-input").blur();
        })
        $(".search_result").on("click", "li", function () {
            s_user = $(this).text();
            $(".search_result").fadeOut();
        })
    }
    searchAjax();
})