function MenuAtivo() {
  $("[data-load-page]").unbind("click");
  $("[data-load-page]").click(function () {
    console.log("hello world!");
    var page = $(this).attr("data-load-page");

    $(".menu-link a").removeClass("menu-active");
    $(this).find("a").addClass("menu-active");
    $("#conteudo").load(page);
  });
}
