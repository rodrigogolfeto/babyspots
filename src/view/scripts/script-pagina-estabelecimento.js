// evento de click no botão "ver avaliações"
$('#ver-avaliacoes').click(function (event) {
    $("html, body").stop().animate({scrollTop: $('#avaliacoes').offset().top+'px'}, 600);
});

//script para contar os caracteres do comentario
$("form textarea").on("input", function (event) {
    $(".qt-chars").text($(this).val().length);
});

// script com o evento de click em "esconder detalhes"
$(".comentario").click(function (event) {
    if (event.target.classList.contains("ver-detalhes")) {
        $($(this).find(".detalhes")).stop().slideToggle();
        if (event.target.textContent == "esconder detalhes") {
            event.target.textContent = "mostrar detalhes";
        } else {
            event.target.textContent = "esconder detalhes";
        }
    }
});

//script para mostrar e ocutar o formulario de avaliação
$('.btn-avaliar, .btn-close, .popoup-critica').click(function (event) {
    if (event.target == this){
        $('.popoup-critica').slideToggle();
    }
});

//script das estrelas
$('.popoup-critica .avali').on("click", function (event) {
    var posX = event.pageX - $(this).offset().left;
    if (posX > 0 && posX < 10) {
        $(event.target).css("background-position", "0 -80px");
        $(event.target).find("input").val("1");
    }else if (posX > 15 && posX < 25){
        $(event.target).css("background-position", "0 -60px");
        $(event.target).find("input").val("2");
    } else if (posX > 30 && posX < 40){
        $(event.target).css("background-position", "0 -40px");
        $(event.target).find("input").val("3");
    } else if (posX > 45 && posX < 55){
        $(event.target).css("background-position", "0 -20px");
        $(event.target).find("input").val("4");
    } else if (posX > 55 && posX < 70){
        $(event.target).css("background-position", "0 0");
        $(event.target).find("input").val("5");
    }
});