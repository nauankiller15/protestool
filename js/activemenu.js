var dataAtividade = new Date();
var verificarInatividade = window.setTimeout(verificaInatividade, 5000);

function MenuAtivo() {
    $("[data-load-page]").unbind("click");
    $("[data-load-page]").click(function() {
        var page = $(this).attr("data-load-page");

        if (!$(this).find("a").hasClass("menu-active")) {
            $("#conteudo").load(page);
            atualizarDataAtividade();
        }

        $(".menu-link a").removeClass("menu-active");
        $(this).find("a").addClass("menu-active");
        $(".footer-remover").fadeOut('300');
        $(".footer").fadeIn('300');

    });
}

function atualizarDataAtividade() {
    dataAtividade = new Date();
}

function verificaInatividade() {
    let dataAtual = new Date();
    let diferenca = (dataAtual - dataAtividade);

    if (diferenca > 72000000) {
        window.location.href = "logout.php";
    } else {
        verificarInatividade = window.setTimeout(verificaInatividade, 60000);
    }
}