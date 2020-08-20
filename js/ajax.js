var urlBase = "http://192.168.15.150:8080/IntegratedWS/";

$(".api-request").submit(function() {
    var endPoint = $(this).attr("data-endpoint");
    $.ajax({
        type: "GET",
        accept: "text/html",
        cookie: "Version=1",
        url: urlBase + endPoint,
        data: $(this).serialize(),
        success: function(data) {
            //$(".sucesso-msg").html(data);
            //$("#sucesso").show();
            console.log("Teste: ");
        },
        error: function() {
            //$(".error").html(data);
            console.log("Erro: ");
        }
    });

    return false;
});