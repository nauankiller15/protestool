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

function inputvalue() {
    $('.input100').each(function() {
        $(this).on('blur', function() {
            if ($(this).val().trim() != "") {
                $(this).addClass('has-val');
            } else {
                $(this).removeClass('has-val');
            }
        })
    })
}

$("#save").on("click", function() {
    setTimeout(function() {
        toastr.warning("Tentando se comunicar com o banco de dados!");
    }, 2300);
})