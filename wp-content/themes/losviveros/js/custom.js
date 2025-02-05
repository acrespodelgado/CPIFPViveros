jQuery(document).ready(function( $ ){

    $(document).on('click', 'a[href^="#home-oferta-educativa"]', function (event) {
        event.preventDefault();
    
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });

    $("#home-oferta-educativa-boton-farmacia").on('click', function(event) {
        event.preventDefault();
        $("#home-oferta-educativa").find(".btn-yellow").toggleClass("btn-yellow btn-white", 700);
        $("#home-carrusel-oferta-educativa").find(".show").toggleClass("show hide", 700);
        $("#home-oferta-educativa-farmacia").toggleClass("show hide", 700);
        $("#home-oferta-educativa-farmacia-img").toggleClass("show hide", 700);
        $(this).toggleClass("btn-yellow btn-white", 700);
    });

    $("#home-oferta-educativa-boton-comercio").on('click', function(event) {
        event.preventDefault();
        $("#home-oferta-educativa").find(".btn-yellow").toggleClass("btn-yellow btn-white", 700);
        $("#home-carrusel-oferta-educativa").find(".show").toggleClass("show hide", 700);
        $("#home-oferta-educativa-comercio").toggleClass("show hide", 700);
        $("#home-oferta-educativa-comercio-img").toggleClass("show hide", 700);
        $(this).toggleClass("btn-yellow btn-white", 700);
    });

    $("#home-oferta-educativa-boton-electricidad").on('click', function(event) {
        event.preventDefault();
        $("#home-oferta-educativa").find(".btn-yellow").toggleClass("btn-yellow btn-white", 700);
        $("#home-carrusel-oferta-educativa").find(".show").toggleClass("show hide", 700);
        $("#home-oferta-educativa-electricidad").toggleClass("show hide", 700);
        $("#home-oferta-educativa-electricidad-img").toggleClass("show hide", 700);
        $(this).toggleClass("btn-yellow btn-white", 700);
    });

    $("#home-oferta-educativa-boton-instalacion").on('click', function(event) {
        event.preventDefault();
        $("#home-oferta-educativa").find(".btn-yellow").toggleClass("btn-yellow btn-white", 700);
        $("#home-carrusel-oferta-educativa").find(".show").toggleClass("show hide", 700);
        $("#home-oferta-educativa-instalacion").toggleClass("show hide", 700);
        $("#home-oferta-educativa-instalacion-img").toggleClass("show hide", 700);
        $(this).toggleClass("btn-yellow btn-white", 700);
    });

    $("#home-oferta-educativa-boton-administracion").on('click', function(event) {
        event.preventDefault();
        $("#home-oferta-educativa").find(".btn-yellow").toggleClass("btn-yellow btn-white", 700);
        $("#home-carrusel-oferta-educativa").find(".show").toggleClass("show hide", 700);
        $("#home-oferta-educativa-administracion").toggleClass("show hide", 700);
        $("#home-oferta-educativa-administracion-img").toggleClass("show hide", 700);
        $(this).toggleClass("btn-yellow btn-white", 700);
    });
});