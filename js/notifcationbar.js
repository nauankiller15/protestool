// Função de notificar o usuário ao parametrizar configurações

var alertaConfiguracaoTimeout = window.setTimeout(alertaConfiguracao, 4000);

function alertaConfiguracao() {
    if (!$(".ip1, #empty1, #empty2").val().length != 0) {
        toastr.warning("Realize os parâmetros de Configuração acima!");
        alertaConfiguracaoTimeout = window.setTimeout(alertaConfiguracao, 2500);
    } else {
        clearTimeout(alertaConfiguracaoTimeout);
    }
}

$("#ip,#empty1,#empty2").on("blur", "", function() {
    if (!$("#ip, #empty1, #empty2").val().length != 0) {
        $(".circleoff").show();
    }
    if (!$("#ip:required:invalid").true) {
        $(".circleoff").show();
    }

    if (!$("#ip, #empty1, #empty2").val().length != 0) {
        $(".tooltip,.tooltiptext").show();
        $(".userlogado1").show();
        $(".userlogado2").hide();
    }

    if (!$("#ip, #empty1, #empty2").val().length != 1) {
        $(".circleon").show();
    }
    if (!$("#ip, #empty1, #empty2").val().length != 0) {
        $(".circleon").hide();
        $(".circleoff").show();
    } else {
        $(".circleoff").hide();
        $(".tooltip,.tooltiptext").hide();
        $(".userlogado1").hide();
        $(".userlogado2").show();
    }
});

// Ao clicar no botão de limpar, ele reseta as informações e mostra novamente a notificação

$(document).ready(function() {
    $("#reset").on("click", function() {
        $(".circleoff").show();
        $(".circleon").hide();
        $(".tooltip, .tooltiptext").show();
        $(".userlogado2").hide();
        $(".userlogado1").show();

        toastr.warning("Realize os parâmetros de Configuração acima!");
        alertaConfiguracaoTimeout = window.setTimeout(alertaConfiguracao, 2000);
    });

    setTimeout(function() {
        toastr.info("Seja bem-vindo ao Protestool!");
    }, 700);


});

function codretorno() {
    $("#codretorno").click(function() {
        toastr.info("Esta página contém: Lista dos códigos de retorno, para simplificar o reenvio.");
    });
}

// Fim do código