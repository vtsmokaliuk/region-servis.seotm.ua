$(function() {
    $('#delete_image_preview').click(function(){
        $('#trumb_image img').attr('src','/adminpublic/assets/images/placeholder.png');
        $('#page-image').attr('value','');
        return false;
    });
    $('#change_image_preview').click(function(){
        $('#page-image-btn').click();
        return false;
    });
    $('#delete_image_preview').click(function(){
        $('#trumb_image img').attr('src','/adminpublic/assets/images/placeholder.png');
        $('#section-image').attr('value','');
        return false;
    });
    $('#change_image_preview').click(function(){
        $('#section-image-btn').click();
        return false;
    });
    $('#delete_image_preview').click(function(){
        $('#trumb_image img').attr('src','/adminpublic/assets/images/placeholder.png');
        $('#category-image').attr('value','');
        return false;
    });
    $('#change_image_preview').click(function(){
        $('#category-image-btn').click();
        return false;
    });
    $('#delete_image_preview').click(function(){
        $('#trumb_image img').attr('src','/adminpublic/assets/images/placeholder.png');
        $('#catalog-image').attr('value','');
        return false;
    });
    $('#change_image_preview').click(function(){
        $('#catalog-image-btn').click();
        return false;
    });
    $('#delete_image_preview').click(function(){
        $('#trumb_image img').attr('src','/adminpublic/assets/images/placeholder.png');
        $('#product-image').attr('value','');
        return false;
    });
    $('#change_image_preview').click(function(){
        $('#product-image-btn').click();
        return false;
    });


});