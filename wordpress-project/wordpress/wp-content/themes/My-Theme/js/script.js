$( document ).ready(function() {
    navbar();
});


function navbar(){
    $(".wrapper").click(function(){
        $(".icon").toggleClass("close");
        $(".header nav").slideToggle(400);        
    });
    $(window).resize(function() {
        if($(window).width()>991.98){
          $(".icon").removeClass("close");
          $(".header nav").show();
        }else{
          $(".header nav").hide();
        }
        if($(window).width()<=991.98){
          $(".icon").removeClass("close");
        }else if($(window).width()<=575.98){
          $(".icon").removeClass("close");
        }else if($(window).width()<=768){
          $(".icon").removeClass("close");
        }
      });
}