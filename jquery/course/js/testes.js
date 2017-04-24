$(function(){
    $("#aviso").fadeIn(700, function(){
        window.setTimeout(function(){
            $('#aviso').fadeOut();
            $('#aviso2').delay(700).fadeIn();
        }, 2000);
    });
});