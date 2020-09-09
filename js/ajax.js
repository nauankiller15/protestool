// Desvincular Daje
function bindApiRequestSubmit() {
    $(".api-request").submit(function() {
        var ip = $("#ip").val();
        var endPoint = $(this).attr("data-endpoint");
        var urlBase = "http://" + ip + ":8080/IntegratedWS/";


        $.ajax({
            type: "GET",
            accept: "text/html",
            cookie: "Version=1",
            url: urlBase + endPoint,
            data: $(this).serialize(),
            success: function(data) {
                toastr.success("Operação realizada com sucesso!");
            },
            error: function(data) {
                toastr.error(getStatusErrorMsg(data));
            },
        });

        return false;
    });

    // Load do Ajax
}

function getStatusErrorMsg(status) {
    switch (status) {
        case 500:
            msg = "500: Falha na parametrização de valores!";
            break;
        case 400:
            msg = "400: Daje já desvinculado!";
            break;
        default:
            msg = "Falha na operação, por favor, tente novamente.";
    }

    return msg;
}