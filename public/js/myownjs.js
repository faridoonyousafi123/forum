$(".col-lg-3").mouseenter(function(){
    
    $( this ).find(".colorBtn").addClass("colorBtnShow");
});

$(".col-lg-3").mouseleave(function(){
    
    $( this ).find(".colorBtn").removeClass("colorBtnShow");
});

