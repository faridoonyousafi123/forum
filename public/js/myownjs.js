$(".col-lg-4").mouseenter(function(){
    
    $( this ).find(".colorBtn").addClass("colorBtnShow");
});

$(".col-lg-4").mouseleave(function(){
    
    $( this ).find(".colorBtn").removeClass("colorBtnShow");
});

$(".col-lg-4").mouseenter(function(){
    
    $( this ).find(".noShow").addClass("show");
});

$(".col-lg-4").mouseleave(function(){
    
    $( this ).find(".noShow").removeClass("show");
});


