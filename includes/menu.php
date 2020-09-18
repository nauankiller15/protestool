<div class="userlogado1">
    <p>  <?php if (isset($_SESSION["username"])) : ?>
            <p><strong><?php echo $_SESSION['username']; ?></strong>
            <?php endif ?></p>
</div>
<div class="userlogado2">
    <p>  <?php if (isset($_SESSION["username"])) : ?>
            <p><strong><?php echo $_SESSION['username']; ?></strong>
            <?php endif ?></p>
</div>
<nav class="menu">
    <ul>
        <li accesskey="S" class="menu menu-link" data-load-page="desvincular_daje_page.php"><a><i class="fas fa-file-export"></i> De<u>s</u>vincular Daje</a></li>
        <li accesskey="C" class="menu menu-link" data-load-page="consulta_daje_page.php"><a><i class="fas fa-file-import"></i> <u>C</u>onsultar Daje</a></li>
        <li accesskey="R" class="menu menu-link" data-load-page="reenviar_daje_page.php"><a><i class="fas fa-file-upload"></i> <u>R</u>eenviar Daje</a></li>
        <li class="menu menu-link" id="codretorno" data-load-page="cods_retorno_page.php"><a><i class="fas fa-project-diagram"></i></a></li>
        <label class="theme-toggle-container">
        <input name="theme" type="checkbox" class="hidden animating">
        <span class="theme-toggle"></span>
        <strong class="hidden">Alterar tema do site</strong>
      </label>
        <div class="tools">
            <span data-tooltip4="Sair do sistema"><a accesskey="q" href="javascript: abrir2();"><button type="sair" class="btnsair">✖️</button></a></span>
            <div class="circleoff" style="animation-delay: 0s"></div>
            <div class="circleoff" style="animation-delay: 0.8s"></div>
            <div class="circleoff" style="animation-delay: 1.8s"></div>
            <div class="circleon" style="animation-delay: 0s"></div>
            <div class="circleon" style="animation-delay: 0.8s"></div>
            <div class="circleon" style="animation-delay: 1.8s"></div>
            <span data-tooltip2="Parâmetros do servidor">
                <div class="tooltip">
                    <span class="tooltiptext">Parametrizar configurações: ⚙️
                </div><a accesskey="g" href="javascript: abrir();"><button class="gear">⚙️</button></a>
            </span>
            </span>
        </div>
        </div>
    </ul>
</nav>