

$(".effect-show").mouseenter(function(){
    
    $( this ).find(".noShow").addClass("show");
    // $( this ).find(".noShown").addClass("fadeIn");
});



$(".effect-show").mouseleave(function(){
    
    $( this ).find(".noShow").removeClass("show");
    // $( this ).find(".noShown").removeClass("fadeIn");
});

$(".effect").on("click", function(){

    $( this ).toggleClass("effect-done");

});

$(".nav-item").on("click", function(){

    
    $( this ).toggleClass("show");

    $(".tab-pane").toggleClass("active");
    $(".tab-pane").toggleClass("show");
    $(".commentMessage").html("+ Show ");
    $(".comment-body").fadeToggle("slow","swing");
   
});



