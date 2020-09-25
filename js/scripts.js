function abrir() {
    $("#popup").show();
}

function fechar() {
    $("#popup").fadeOut('300');
    NotificationBarIndex();
}

function abrir2() {
    $("#popup2").show();
}

function fechar2() {
    $("#popup2").fadeOut('300');

}

function abrir3() {
    $("#popup3").show();
}

function fechar3() {
    $("#popup3").fadeOut('300');

}

$('#abrir_patchnotes').on('click', function() {
    $('.patchnotes').slideToggle('slow');
    window.localStorage.setItem('clicado', 'clicado');
    localStorage.removeItem('clicado');
});

$('#naoaparecer_patchnotes').on('click', function() {
    $('.patchnotes').slideToggle('slow');
    window.localStorage.setItem('clicado', 'clicado');
});


$(document).ready(function() {
    if (window.localStorage.getItem('clicado')) {
        $('.patchnotes').hide();
    }
});

// $('.menu-link').each(function() {
//     $(this).on('click', function() {
//         $('#menu').slideToggle('slow');
//     });
// });

$(".popup").draggable();


function fecharpopup() {
    $(document).on('keydown', function(e) {
        if (e.keyCode === 27) {
            $('#popup').fadeOut('300');
            $('#popup2').fadeOut('300');
            $('#popup3').fadeOut('300');
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

function apagarletras() {
    $('#apagarletras').on('click', function() {
        var input = $(".input100");
        input.val(input.val().slice(0, -1));
    });
}


function moveScroll() {
    $('table').floatThead({
        position: 'fixed',
        scrollContainer: true
    });
}

function VersaoAtual() {
    $("#ir_antigo").click(function() {
        $("#Atual").animate({
            marginLeft: "-100%"
        }, 1000)
        $("#Antiga").show("patchnotes");
        $("#Antiga").animate({
            marginLeft: "0px"
        }, 1000)
    })

    $("#ir_atual").click(function() {
        $("#Antiga").animate({
            marginLeft: "-200%"
        }, 1000)
        $("#Atual").animate({
            marginLeft: "0px"
        }, 1000)
    })
}