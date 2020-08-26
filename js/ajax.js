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

$(document).ajaxStart(function() {
    $("#lds-spinner").show();
});

$(document).ajaxStop(function() {
    $("#lds-spinner").hide();
});


$('#empty1,#empty2,#ip').on('blur', '', function(ev) {
    if (!$('#ip').val().length != 0) {
        $(".circle").show();
    }
    if (!$('#empty1').val().length != 0) {
        $(".circle").show();
    }
    if (!$('#empty2').val().length != 0) {
        $(".circle").show();
    } else {
        $(".circle").hide();
    }
});