

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
    $(".nav").toggleClass("nav-tabs");
    $(".card-content").toggleClass("out");
    $(".samecolor").toggleClass("effect-comment");
   
   
});

//scrolling to comment inputbox
$("[data-scroll-to]").click(function() {
        var $this = $(this),
            $toElement      = $this.attr('data-scroll-to'),
            $focusElement   = $this.attr('data-scroll-focus'),
            $offset         = $this.attr('data-scroll-offset') * 1 || 0,
            $speed          = $this.attr('data-scroll-speed') * 1 || 800;
      
        $('html, body').animate({
          scrollTop: $($toElement).offset().top + $offset
        }, $speed);
        
        if ($focusElement) $($focusElement).focus();
});


    




