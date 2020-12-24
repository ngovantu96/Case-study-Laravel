

$("[data-trigger]").on("click",function (){
    var targeet_id = $(this).attr('data-trigger');
    $(targeet_id).toggleClass("show");
    $('body').toggleClass("offcanvas-active");
});
$(".btn-close").click(function (e){
    $(".navbar-collapse").removeClass("show");
    $("body").removeClass("offcanvas-active");
});
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})



function updateCart(id,qty){
    console.log(qty);
    console.log(id);
}

