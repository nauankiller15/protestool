function bindCloseCaixaTexto() {
  $(".close").click(function () {
    $(this).parents(".window-msg").hide();
  });
}
