// Função de notificar o usuário ao parametrizar configurações

var alertaConfiguracaoTimeout = window.setTimeout(alertaConfiguracao, 3600);

function alertaConfiguracao() {
    if (!$("#ip").val().length != 0) {
        toastr.warning("Realize os parâmetros de configuração acima!");
        alertaConfiguracaoTimeout = window.setTimeout(alertaConfiguracao, 3500);
        $(".circleon").hide();
        $(".circleoff").show();
        $(".circle-requisicao").hide();
    } else {
        clearTimeout(alertaConfiguracaoTimeout);
    }
}


if (!$("#ip:required").val().length != 0) {
    $(".circleoff").hide();
    $(".circleon").show();
    $(".tooltip,.tooltiptext").hide();
    $(".userlogado1").hide();
    $(".userlogado2").show();
}

var alertaConfiguracao2Timeout = window.setTimeout(alertaConfiguracao2, 12000);

function alertaConfiguracao2() {
    if (!$("#ip").val().length != 0) {
        toastr.error("A conexão com o banco de dados foi perdida!");
        alertaConfiguracao2Timeout = window.setTimeout(alertaConfiguracao2, 9500);
        $(".circleon").hide();
        $(".circleoff").show();
        $(".circle-requisicao").hide();
    } else {
        clearTimeout(alertaConfiguracao2Timeout);
    }
}

// Ip Requisição
$("#ip").on("blur", "", function() {
    if (!$("#ip").val().length != 0) {
        $(".circleoff").show();
        $(".circle-requisicao").hide();
    }

    if (!$("#ip").val().length != 0) {
        $(".tooltip,.tooltiptext").show();
        $(".userlogado1").show();
        $(".userlogado2").hide();
    }

    if (!$("#ip").val().length != 1) {
        $(".circleon").show();
    }

    if (!$("#ip").val().length != 0) {
        $(".circleon").hide();
        $(".circleoff").show();
    } else {
        $(".circleoff").hide();
        $(".tooltip,.tooltiptext").hide();
        $(".userlogado1").hide();
        $(".userlogado2").show();
    }

});

$("#senhacliente, #logincliente").on("blur", "", function() {
    if (!$("#senhacliente, #logincliente").val().length != 0) {
        $(".circle-requisicao").show();
        $(".circleon").hide();
    }

    if (!$("#senhacliente, #logincliente").val().length != 0) {
        $(".userlogado1").show();
        $(".userlogado2").hide();
    }

    if (!$("#senhacliente, #logincliente").val().length != 1) {
        $(".circleon").show();
    }

    if (!$("#senhacliente, #logincliente").val().length != 0) {
        $(".circleon").hide();
        $(".circle-requisicao").show();
    } else {
        $(".circle-requisicao").hide();
    }

});

// Ao clicar no botão de limpar, ele reseta as informações e mostra novamente a notificação

$(document).ready(function() {
    $(".reset").on("click", function() {
        $(".circleoff").show();
        $(".circleon").hide();
        $(".tooltip, .tooltiptext").show();
        $(".userlogado2").hide();
        $(".userlogado1").show();
        toastr.error("A conexão com o banco de dados foi perdida!");
        alertaConfiguracao2Timeout = window.setTimeout(alertaConfiguracao2, 9500);
        toastr.warning("Realize os parâmetros de configuração acima!");
        alertaConfiguracaoTimeout = window.setTimeout(alertaConfiguracao, 3500);
    });



});

// (function() {
//     var visited = localStorage.getItem('visited');
//     if (!visited) {
//         setTimeout(function() {
//             toastr.info("Seja bem-vindo ao Protestool!");
//         }, 700);
//         localStorage.setItem('visited', true);
//     }
// })();

function avisoNotificacao() {
    if (localStorage.last) {
        if ((localStorage.last - Date.now()) / (1000 * 60 * 60 * 24) >= 1) { //Date.now() is in milliseconds, so convert it all to days, and if it's more than 1 day, show the div
            setTimeout(function() {
                toastr.info("Não esqueça de checar sempre as configurações!");
            }, 800); //Show the div
            localStorage.last = Date.now(); //Reset your timer
        }
    } else {
        localStorage.last = Date.now();
        setTimeout(function() {
            toastr.info("Não esqueça de checar sempre as configurações!");
        }, 800); //Show the div because you haven't ever shown it before.
    }
}

function apagarAviso() {
    localStorage.clear();
    bemvindo = 0;
    avisoNotificacao() = bemvindo;
}

// Final do código;

function codretorno() {
    $("#codretorno").click(function() {
        toastr.info("Esta página contém: Lista detalhada para especificar os códigos, o que cada um representa!");
        $(this).find("a").addClass("menu-active");
    });
}

function codretorno2() {
    $("#codretorno2").click(function() {
        toastr.info("Esta página contém: Lista detalhada para especificar os códigos, o que cada um representa!");
        $(this).find("a").addClass("menu-active");
    });
}

// Fim do código