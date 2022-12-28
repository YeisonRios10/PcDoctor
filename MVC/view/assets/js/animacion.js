$(document).ready(function(){
  
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) { //donde aparce
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 400);//tiempo de retorno
        return false;
    });

});