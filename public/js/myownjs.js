

$(".effect-show").mouseenter(function(){
    
    $( this ).find(".noShow").addClass("show");
   
});



$(".effect-show").mouseleave(function(){
    
    $( this ).find(".noShow").removeClass("show");
    
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

$(".showdiscussion").on("click", function(){

    $(".tab-pane1").addClass("show");
    $(".tab-pane1").addClass("fadeup");
    $(".tab-pane1").addClass("active");

   

    $(".tab-pane2").removeClass("active");
    $(".tab-pane2").removeClass("show");

    $(".tab-pane3").removeClass("active");
    $(".tab-pane3").removeClass("show");
 
});

$(".showfollowing").on("click", function(){

    $(".tab-pane2").addClass("show");
    $(".tab-pane2").addClass("active");

    $(".tab-pane2").addClass("fadeup");

    $(".tab-pane1").removeClass("active");
    $(".tab-pane1").removeClass("show");

    $(".tab-pane3").removeClass("active");
    $(".tab-pane3").removeClass("show");
  
  

});


$(".showfollowers").on("click", function(){

    $(".tab-pane3").addClass("show");
    $(".tab-pane3").addClass("active");

    $(".tab-pane3").addClass("fadeup");

    $(".tab-pane1").removeClass("active");
    $(".tab-pane1").removeClass("show");

    $(".tab-pane2").removeClass("active");
    $(".tab-pane2").removeClass("show");
  
  

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

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});








