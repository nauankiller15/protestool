<div class="userlogado1">
    <p> <?php if (isset($_SESSION["usuario"])) : ?>
            <p><strong>SISCART <?php echo $_SESSION['usuario']; ?></strong>
            <?php endif ?></p>
</div>
<div class="userlogado2">
    <p> <?php if (isset($_SESSION["usuario"])) : ?>
            <p><strong>SISCART <?php echo $_SESSION['usuario']; ?></strong>
            <?php endif ?></p>
</div>
<nav class="menu">
    <ul>
        <li accesskey="S" class="menu menu-link" data-load-page="desvincular_daje_page.php"><a><b><i class="fas fa-file-export"></i></b> De<u>s</u>vincular Daje</a></li>
        <li accesskey="C" id="removerFooter" class="menu menu-link" data-load-page="consulta_daje_page.php"><a><b><i class="fas fa-file-import"></i></b> <u>C</u>onsultar Daje</a></li>
        <li accesskey="R" id="removerFooter" class="menu menu-link" data-load-page="reenviar_daje_page.php"><a><b><i class="fas fa-file-upload"></i></b> <u>R</u>eenviar Daje</a></li>
        <span data-tooltip2="Códigos de retorno"><li class="menu menu-link" id="codretorno" data-load-page="cods_retorno_page.php"><a><b><i class="fas fa-project-diagram"></i></b></a></li></span>
        <div class="tools">
            <div class="positiontheme-index">
                <p><i style="margin-right: 2px;" class="fas fa-palette"></i> </p><input accesskey="l" class="inputheme" type="checkbox" id="switch" name="theme" /><label class="labeltheme" for="switch">Toggle</label>
            </div>
            <span data-tooltip4="Sair do sistema"><a accesskey="q" href="javascript: abrir2();"><button type="sair" class="btnsair">✖️</button></a></span>
            <div class="circleoff" style="animation-delay: 0s"></div>
            <div class="circleoff" style="animation-delay: 0.8s"></div>
            <div class="circleoff" style="animation-delay: 1.8s"></div>
            <div class="circleon" style="animation-delay: 0s"></div>
            <div class="circleon" style="animation-delay: 0.8s"></div>
            <div class="circleon" style="animation-delay: 1.8s"></div>
            <div class="circle-requisicao" style="animation-delay: 0s"></div>
            <div class="circle-requisicao" style="animation-delay: 0.8s"></div>
            <div class="circle-requisicao" style="animation-delay: 1.8s"></div>
            <span data-tooltip2="Parâmetros do servidor">
                <div class="tooltip">
                    <span class="tooltiptext">Parametrizar configurações: ⚙️
                </div><a accesskey="g" href="javascript: abrir();"><button class="gear">⚙️</button></a>
            </span>
            </span>
        </div>
    </ul>
</nav>