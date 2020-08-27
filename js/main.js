$(document).ajaxStart(function() {
    $("#lds-spinner").show();
});

$(document).ajaxStop(function() {
    $("#lds-spinner").hide();
});

MenuAtivo();