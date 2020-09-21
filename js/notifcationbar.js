// Função de notificar o usuário ao parametrizar configurações

var alertaConfiguracaoTimeout = window.setTimeout(alertaConfiguracao, 3600);

function alertaConfiguracao() {
    if (!$("#ip").val().length != 0) {
        toastr.warning("Realize os parâmetros de configuração acima!");
        alertaConfiguracaoTimeout = window.setTimeout(alertaConfiguracao, 3500);
        $(".circleon").hide();
        $(".circleoff").show();
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
    } else {
        clearTimeout(alertaConfiguracao2Timeout);
    }
}

$("#ip").on("blur", "", function() {
    if (!$("#ip").val().length != 0) {
        $(".circleoff").show();
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

var iteminfo = setTimeout(function() {
    toastr.info("Seja bem-vindo ao Protestool!");
}, 700);
window.setTimeout(function() {
    // First check, if localStorage is supported.
    if (window.localStorage) {
        // Get the expiration date of the previous popup.
        var nextPopup = localStorage.getItem(iteminfo);

        if (nextPopup > new Date()) {
            return;
        }

        // Store the expiration date of the current popup in localStorage.
        var expires = new Date();
        expires = expires.setHours(expires.getHours() + 24);

        localStorage.setItem(iteminfo, expires);
    }

    show(iteminfo);
});

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