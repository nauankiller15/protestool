// Desvincular Daje
function bindApiRequestSubmit() {
  $(".api-request").submit(function () {
    var ip = $("#ip").val();
    var endPoint = $(this).attr("data-endpoint");
    var urlBase = "http://" + ip + ":8080/IntegratedWS/";

    $.ajax({
      type: "GET",
      accept: "text/html",
      cookie: "Version=1",
      url: urlBase + endPoint,
      data: $(this).serialize(),
      success: function (data) {
        toastr.success("Operação realizada com sucesso!");
      },
      error: function (data) {
        toastr.error(getStatusErrorMsg(data));
      },
    });

    return false;
  });
}

function getStatusErrorMsg(status) {
  switch (status) {
    case 500:
      msg = "500: Falha na parametrização de valores!";
      break;
    case 400:
      msg = "400: Daje não encontrando ou já desvinculado!";
      break;
    default:
      msg = "Falha na operação, por favor, tente novamente.";
      semRetornoIPIndex();
      abrir();
  }
  //   msg = status;
  return msg;
}

$("#testar-conexao-btn").click(function () {
  $("#configip").submit();
});

$(".login-enter").keypress(function (ev) {
  var keycode = ev.keyCode ? ev.keyCode : ev.which;
  if (keycode == "13") {
    $("#entrar").click();
  }
});

$("#entrar").click(function () {
  let usuario = $('[name="usuario"]').val();
  let senha = $('[name="senha"]').val();
  let ip = $('[name="ip"]').val();

  $.post(
    "./login-aut/logar.php",
    {
      usuario: usuario,
      senha: senha,
      ip: ip,
    },
    function (data) {
      if (usuario && senha) {
        if (data == "200") {
          window.location.href = "index.php";
          deletarBemVindo();
          clearLoginConfig();
        } else {
          semRetornoIP();
          abrir();
          toastr.error("Falha ao realizar login!");
        }
      } else {
        toastr.warning("Informe usuário e senha para entrar!");
      }
    }
  );
});
