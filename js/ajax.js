var urlBase = "http://192.168.15.150:8080/IntegratedWS/";

$(".api-request").submit(function() {
    var endPoint = $(this).attr("data-endpoint");
    $.ajax({
        type: "POST",
        url: urlBase + endPoint,
        data: $(this).serialize(),
        success: function(data) {
            $(".sucesso-msg").html(data);
            $("#sucesso").show();
        },
        error: function() {
            $(".error").html(data);
        }
    });

    return false;
});