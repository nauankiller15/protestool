function abrir() {
    document.getElementById('popup').style.display = 'block';
}

function fechar() {
    document.getElementById('popup').style.display = 'none';
}


$(".popup").draggable();

function fecharpopup() {
    var elem = $('#popup')[0];
    $(document).on('keydown', function(e) {
        if (e.keyCode === 27) {
            $(elem).hide();
        }
    });

}