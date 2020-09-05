$(document).ajaxStart(function() {
    $("#lds-spinner").show();
});

$(document).ajaxStop(function() {
    $("#lds-spinner").fadeOut('300');
});

MenuAtivo();