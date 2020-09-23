// Função de notificar o usuário ao parametrizar configurações

var alertaConfiguracaoTimeout = window.setTimeout(alertaConfiguracao, 3600);

// Rever todas as inputs e avisar ao usuário
function NotificationBarIndex() {
    ConfigIpFilled();
    reverLogin();
    reverSenha();
    IPFilled();
    LoginRequired();
    SenhaRequired();
}
// 

function alertaConfiguracao() {
    if (!$("#ip").val().length != 0) {
        toastr.error("IP do Servidor necessário para parametrização!");
        alertaConfiguracaoTimeout = window.setTimeout(alertaConfiguracao, 3500);
        $(".circleon").hide();
        $(".circleoff").show();
        $(".circle-requisicao").hide();
    } else {
        clearTimeout(alertaConfiguracaoTimeout);
    }
}

function ConfigIpFilled() {
    if (!$("#configip").val().length != 0) {
        alertaConfiguracaoTimeout = window.setTimeout(alertaConfiguracao, 200);
        $(".circleon").show();
        $(".circleoff").hide();
        $(".circle-requisicao").hide();
        $(".tooltip,.tooltiptext").hide();
    }
}

function reverLogin() {
    if (!$("#logincliente").val().length != 0) {
        toastr.warning("Login Cliente necessário!");
        alertaConfiguracaoTimeout = window.setTimeout(alertaConfiguracao, 200);
        $(".circleon").hide();
        $(".circleoff").hide();
        $(".circle-requisicao").show();
    } else {
        clearTimeout(alertaConfiguracaoTimeout);
    }
}

function reverSenha() {
    if (!$("#senhacliente").val().length != 0) {
        toastr.warning("Senha Cliente necessário!");
        alertaConfiguracaoTimeout = window.setTimeout(alertaConfiguracao, 200);
        $(".circleon").hide();
        $(".circleoff").hide();
        $(".circle-requisicao").show();
    } else {
        clearTimeout(alertaConfiguracaoTimeout);
    }
}


function IPFilled() {
    if (!$("#ip").val().length != 0) {
        $(".circleoff").show();
        $(".circle-requisicao").hide();
        $(".circleon").hide();
        $(".tooltip,.tooltiptext").hide();
        $(".userlogado1").hide();
        $(".userlogado2").show();
    }
}

function LoginRequired() {
    if (!$("#logincliente").val().length != 0) {
        $(".circleoff").hide();
        $(".circleon").hide();
        $(".circle-requisicao").show();
        $(".tooltip,.tooltiptext").hide();
        $(".userlogado1").hide();
        $(".userlogado2").show();
    }

}

function SenhaRequired() {
    if (!$("#senhacliente").val().length != 0) {
        $(".circleoff").hide();
        $(".circleon").hide();
        $(".circle-requisicao").show();
        $(".tooltip,.tooltiptext").hide();
        $(".userlogado1").hide();
        $(".userlogado2").show();
    }

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

// Login e Senha Requisição

$("#logincliente").on("blur", "", function() {
    if (!$("#logincliente").val().length != 0) {
        $(".circle-requisicao").show();
        $(".circleon").hide();
    }

    if (!$("#logincliente").val().length != 0) {
        $(".userlogado1").show();
        $(".userlogado2").hide();
    }

    if (!$("#logincliente").val().length != 1) {
        NotificationBarIndex();
        $(".circleon").show();
    }

    if (!$("#logincliente").val().length != 0) {
        $(".circleon").hide();
        $(".circle-requisicao").show();
    } else {
        $(".circle-requisicao").hide();
    }

});

$("#senhacliente").on("blur", "", function() {
    if (!$("#senhacliente").val().length != 0) {
        $(".circle-requisicao").show();
        $(".circleon").hide();
    }

    if (!$("#senhacliente").val().length != 0) {
        $(".userlogado1").show();
        $(".userlogado2").hide();
    }

    if (!$("#senhacliente").val().length != 1) {
        NotificationBarIndex();
        $(".circleon").show();
    }

    if (!$("#senhacliente").val().length != 0) {
        $(".circleon").hide();
        $(".circle-requisicao").show();
    } else {
        $(".circle-requisicao").hide();
    }

});


// Ip Requisição
$("#ip").on("blur", "", function() {
    if (!$("#ip").val().length != 0) {
        $(".circleoff").show();
        $(".circle-requisicao").hide();
    }

    if (!$("#ip").val().length != 0) {
        $(".circleoff").show();
        $(".tooltip,.tooltiptext").show();
        $(".userlogado1").show();
        $(".userlogado2").hide();
    }

    if (!$("#ip").val().length != 1) {
        NotificationBarIndex();
        $(".circleon").show();
    } else {
        $(".circleoff").show();
        $(".circleon").hide();
    }

    if (!$("#ip").val().length != 0) {
        $(".circleon").hide();
        $(".circleoff").show();
    } else {
        $(".tooltip,.tooltiptext").hide();
        $(".userlogado1").hide();
        $(".userlogado2").show();
        $(".circleoff").hide();
    }
});

// Ao clicar no botão de limpar, ele reseta as informações e mostra novamente a notificação

function resetConfig() {
    $("#limparConfigBTN").on("click", function() {
        $(".circleoff").show();
        $(".circleon").hide();
        $(".circle-requisicao").hide();
        $(".tooltip, .tooltiptext").show();
        $(".userlogado2").hide();
        $(".userlogado1").show();
        toastr.error("A conexão com o banco de dados foi perdida!");
        alertaConfiguracao2Timeout = window.setTimeout(alertaConfiguracao2, 9500);
        toastr.warning("Realize os parâmetros de configuração acima!");
        alertaConfiguracaoTimeout = window.setTimeout(alertaConfiguracao, 3500);
    });

};

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