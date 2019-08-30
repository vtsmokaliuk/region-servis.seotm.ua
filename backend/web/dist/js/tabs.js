$(document).ready(function () {
    $('#product-tab .nav-link').on('click', function () {
        let href = $(this).attr('href');
        $('#product-tab .nav-link').removeClass('active');
        $('#product-tab .tab-pane-2').removeClass('active');
        $(href).addClass('active');
        $(this).addClass('active');
        return false;
    })
})