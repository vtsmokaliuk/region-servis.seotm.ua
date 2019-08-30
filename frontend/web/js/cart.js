$(document).ready(function () {
    function showHeaderCart() {
        let url = '/cart/show-header-cart';
        var $yiiform = $(this);
        $.ajax({
            type: $yiiform.attr('method'),
            url: url,
            data: $yiiform.serializeArray()
        }).done(function (data) {
            console.log('render- header');
            $('#show-header-cart').html(data);
        });
        return false;

    }

    function addToCart() {
        $(document).on('submit', '.form-add-to-cart', function () {
            console.log('click to cart');
            var $yiiform = $(this);
            $.ajax({
                type: $yiiform.attr('method'),
                url: $yiiform.attr('action'),
                data: $yiiform.serializeArray()
            }).done(function (data) {
                console.log('att-to-cart');
                console.log(data);
                showHeaderCart();
                if (data.success) {
                    // var num = +$('#count_'+id).val() +1;
                    // $('#count_'+id).val(num);
                    // $("#cart-count").html(data.success);
                } else {
                }
            }).fail(function () {
            })
            return false;
        })
    }

    function changeProductQuantity() {
        $(document).on('click, keyup, keypress, keydown, change', '.input-result-product-auantity', function () {
            let quantity = $(this).val();

            console.log(quantity);
        })
    }

    function addProductQuantity() {
        $(document).on('click', '.btn-add-product-quantity', function () {
            let productQuantity = $(this).parents('.quant-input').find('.input-result-product-auantity').val();
            productQuantity = parseInt(productQuantity);
            let productId = $(this).attr("data-product-id");
            $(this).parents('.quant-input').find('.input-result-product-auantity').val(productQuantity + 1);
            let url = '/cart/add/' + productId;
            var $yiiform = $(this);
            $.ajax({
                type: $yiiform.attr('method'),
                url: url,
                data: $yiiform.serializeArray()
            }).done(function (data) {
                //$('#show-header-cart').html(data);
            });
            return false;
        })
    }

    function minProductQuantity() {
        $(document).on('click', '.btn-min-product-quantity', function () {
            let productQuantity = $(this).parents('.quant-input').find('.input-result-product-auantity').val();
            productQuantity = parseInt(productQuantity);
            let productId = $(this).attr("data-product-id");
            if (productQuantity > 1) {
                $(this).parents('.quant-input').find('.input-result-product-auantity').val(productQuantity - 1);
                let url = '/cart/min/' + productId;
                var $yiiform = $(this);
                $.ajax({
                    type: $yiiform.attr('method'),
                    url: url,
                    data: $yiiform.serializeArray()
                }).done(function (data) {
                    //$('#show-header-cart').html(data);
                });
                return false;
            }
        })
    }

    function addToCartSmall() {
        $('.add-to-cart-small').on('click', function () {
            let url = $(this).attr('href');
            $.ajax({
                type: "POST",
                url: url,
                data: 'data'
            }).done(function (data) {
                showHeaderCart();
                if (data.success) {
                    // var num = +$('#count_'+id).val() +1;
                    // $('#count_'+id).val(num);
                    // $("#cart-count").html(data.success);
                } else {
                }
            }).fail(function () {
            })
            return false;
        })
    }

    addProductQuantity();
    minProductQuantity();
    changeProductQuantity();
    addToCart();
    addToCartSmall();
})