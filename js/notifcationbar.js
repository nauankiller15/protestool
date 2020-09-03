// Função de notificar o usuário ao parametrizar configurações

var alertaConfiguracaoTimeout = window.setTimeout(alertaConfiguracao, 3500);
function alertaConfiguracao() {
  if (!$(".ip1, #empty1, #empty2").val().length != 0) {
    toastr.warning("Realize os parâmetros de Configuração acima!");
    alertaConfiguracaoTimeout = window.setTimeout(alertaConfiguracao, 2500);
  } else {
    clearTimeout(alertaConfiguracaoTimeout);
  }
}

$(".ip1,#empty1,#empty2").on("blur", "", function () {
  if (!$(".ip1, #empty1, #empty2").val().length != 0) {
    $(".circleoff").show();
  }

  if (!$(".ip1, #empty1, #empty2").val().length != 0) {
    $(".tooltip,.tooltiptext").show();
  }

  if (!$(".ip1, #empty1, #empty2").val().length != 1) {
    $(".circleon").show();
  }
  if (!$(".ip1, #empty1, #empty2").val().length != 0) {
    $(".circleon").hide();
    $(".circleoff").show();

  } else {
    $(".circleoff").hide();
    $(".tooltip,.tooltiptext").hide();
  }
});

// Ao clicar no botão de limpar, ele reseta as informações e mostra novamente a notificação

$(document).ready(function () {
  $("#reset").on("click", function () {
    $(".circleoff").show();
    $(".circleon").hide();
    $(".tooltip, .tooltiptext").show();
    toastr.warning("Realize os parâmetros de Configuração acima!");
    alertaConfiguracaoTimeout = window.setTimeout(alertaConfiguracao, 2000);
  });
});


$(document).ready(function () {
    setTimeout(function(){ 
      toastr.info('Bem-vindo ao Protestool!');
  }, 1000);
  });

  $(document).ready(function () {
    $("#cod-retorno").on("click", function () {
    toastr.info("Lista dos códigos de retorno, para simplificar o reenvio.");
});
});

// Fim do código
