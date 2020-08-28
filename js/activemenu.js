function MenuAtivo() {
  $("[data-load-page]").unbind("click");
  $("[data-load-page]").click(function () {
    var page = $(this).attr("data-load-page");

    if (!$(this).find("a").hasClass("menu-active")) {
      $("#conteudo").load(page);
    }

    $(".menu-link a").removeClass("menu-active");
    $(this).find("a").addClass("menu-active");
  });
}
