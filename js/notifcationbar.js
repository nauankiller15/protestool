// Função de notificar o usuário ao parametrizar configurações

$('.ip1,#empty1,#empty2').on('blur', '', function() {
    if (!$('.ip1, #empty1, #empty2').val().length != 0) {
        $(".circleoff").show();
    }

    if (!$('.ip1, #empty1, #empty2').val().length != 0) {
        $(".tooltip,.tooltiptext").show();
    }

    if (!$('.ip1, #empty1, #empty2').val().length != 1) {
        $(".circleon").show();
    }
    if (!$('.ip1, #empty1, #empty2').val().length != 0) {
        $(".circleon").hide();
        $(".circleoff").show();

    } else {
        $(".circleoff").hide();
        $(".tooltip,.tooltiptext").hide();
    }
});

// Ao clicar no botão de limpar, ele reseta as informações e mostra novamente a notificação

$(document).ready(function() {
    $('#reset').on('click', function() {
        $(".circleoff").show();
        $(".circleon").hide();
        $(".tooltip,.tooltiptext").show();
    });
});

// Fim do código