require('./bootstrap');

require('alpinejs');

$(document).ready(function(){
    $(".nav-toggler").each(function(_,navToggler){
        var target = $(navToggler).data('target');
        $(navToggler).on("click", function(){
            $(target).animate({
                height: "toogle",
            })
        });
    })
});
