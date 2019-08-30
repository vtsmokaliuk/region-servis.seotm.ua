$(document).ready(function () {
   $('#attribute-result select').select2();
   $('.product-category-list').select2();
    $('#btn-add-attribute').on('click', function () {
        // let alias = "/admin/product/create-attribute";
        // let header = '123';;
        // var data = header;
        // $.ajax({
        //     url: alias,
        //     type: 'POST',
        //     data: data,
        //     success: function (data) {
        //         $('#attribute-result').append(data);
        //     }
        // });
       return false;
    })
    $(document).on('change', '.product-attribute-list', function () {
        // let val = $(this).val();
        // $(this).prev().val(val);
        // let element = $(this).prev().find('tr');
        // console.log(element);
        // console.log('+');
    })
})