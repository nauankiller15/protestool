function abrir() {
    $("#popup").show();
}

function fechar() {
    $("#popup").fadeOut('300');

}

function abrir2() {
    $("#popup2").show();
}

function fechar2() {
    $("#popup2").fadeOut('300');

}

$(".popup").draggable();

function arrastarlista() {
    $(".lista-group").draggable();
}

function fecharpopup() {
    $(document).on('keydown', function(e) {
        if (e.keyCode === 27) {
            $('#popup').fadeOut('300');
            $('#popup2').fadeOut('300');
        }
    });
}

function maskinput() {
    $(":input").inputmask();
}


function shortcutkey() {
    $(".shortcutkey").find("p").fadeIn(800).delay(3000).fadeOut(800);
    $(".shortcutkey2").find("p").fadeIn(600).delay(2700).fadeOut(600);
}