function abrir() {
    $("#popup").show();
}

function fechar() {
    $("#popup").fadeOut('300');

}

$(".popup").draggable();

function arrastarlista() {
    $(".lista-group").draggable();
}

function fecharpopup() {
    var elem = $('#popup')[0];
    $(document).on('keydown', function(e) {
        if (e.keyCode === 27) {
            $(elem).fadeOut('300');
        }
    });

}

function maskinput() {
    $(":input").inputmask();
}