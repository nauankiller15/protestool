// Desvincular Daje
$(".api-request").submit(function() {
    var ip = $("#ip").val();
    var endPoint = $(this).attr("data-endpoint");
    var urlBase = "http://" + ip + ":8080/IntegratedWS/";

    $(".close").click();

    $.ajax({
        type: "GET",
        accept: "text/html",
        cookie: "Version=1",
        url: urlBase + endPoint,
        data: $(this).serialize(),
        success: function(data) {
            $(".sucesso-msg").text("Operação realizada com sucesso!");
            $("#sucesso").show();
            console.log("Teste: ");
        },
        error: function(data) {
            $(".error-msg").text(getStatusErrorMsg(data));
            $("#error").show();
            console.log("Erro: ");
        },
    });

    return false;
});

function getStatusErrorMsg(status) {
    switch (status) {
        case 500:
            msg = "Falha de parametrização de valores";
            break;
        case 400:
            msg = "Daje não localizado";
            break;
        default:
            msg = "Falha na operação, por favor, tente novamente.";
    }

    return msg;
}

// Load do Ajax

$(document).ajaxStart(function() {
    $("#lds-spinner").show();
});

$(document).ajaxStop(function() {
    $("#lds-spinner").hide();
});


// Função de notificar o usuário ao parametrizar configurações

$('.ip1,#empty1,#empty2').on('blur', '', function() {
    if (!$('.ip1, #empty1, #empty2').val().length != 0) {
        $(".circleoff").show();
    }
    if (!$('.ip1, #empty1, #empty2').val().length != 1) {
        $(".circleon").show();
    }
    if (!$('.ip1, #empty1, #empty2').val().length != 0) {
        $(".circleon").hide();
        $(".circleoff").show();

    } else {
        $(".circleoff").hide();
    }
});

// Ao clicar no botão de limpar, ele reseta as informações e mostra novamente a notificação

$(document).ready(function() {
    $('#reset').on('click', function() {
        $(".circleoff").show();
        $(".circleon").hide();
    });
});

// Fim do código