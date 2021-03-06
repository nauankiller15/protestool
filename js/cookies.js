var today = new Date();
var expiry = new Date(today.getTime() + 30 * 24 * 3600 * 1000); // plus 30 days

function setCookie(name, value) {
    document.cookie =
        name + "=" + escape(value) + "; path=/; expires=" + expiry.toGMTString();
}

function storeValues(form) {
    setCookie("ip", form.ip);
    setCookie("login_cliente", form.login_cliente);
    setCookie("senha_cliente", form.senha_cliente);
    toastr.success("Configuração salva!");
    return true;
}

function storeValuesLogin(form) {
    setCookie("ip", form.ip);
    toastr.success("Configuração salva!");
    return true;
}



// Deletar Cookies
var expired = new Date(today.getTime() - 24 * 3600 * 1000); // less 24 hours

function deleteCookie(name) {
    document.cookie = name + "=null; path=/; expires=" + expired.toGMTString();
}

$("#salvar-configuracao-login").click(function() {
    storeValuesLogin(getFormData($("#configip")));
    return false;
});


$("#salvar-configuracao-btn").click(function() {
    storeValues(getFormData($("#configip")));
    return false;
});

function clearCookies() {
    deleteCookie("ip");
    deleteCookie("login_cliente");
    deleteCookie("senha_cliente");
    toastr.warning("Configuração deletada!")
    return true;
}

function clearLoginConfig() {
    deleteCookie("login_cliente");
    deleteCookie("senha_cliente");
    return true;
}

function getCookie(name) {
    var re = new RegExp(name + "=([^;]+)");
    var value = re.exec(document.cookie);
    return value != null ? unescape(value[1]) : null;
}


// Mostrar Cookies

$("#ip").val(getCookie("ip"));
$("#logincliente").val(getCookie("login_cliente"));
$("#senhacliente").val(getCookie("senha_cliente"));


function getFormData($form) {
    var unindexed_array = $form.serializeArray();
    var indexed_array = {};

    $.map(unindexed_array, function(n, i) {
        indexed_array[n['name']] = n['value'];
    });

    return indexed_array;
}

$("#limparConfigBTN").click(function() {
    clearCookies();
});