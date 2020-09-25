<!DOCTYPE html>
<html lang="pt-br">
<?php
session_start();
include("includes/headlogin.php");
if (isset($_SESSION['usuario'])) {
    header('location: index.php');
}
?>

<body>

    <div class="theme-color-div">
        <p><i style="margin-right: 4px;" class="fas fa-palette"></i> Ajuste a Cor do Tema:</p>
        <div class="positiontheme-login">
            <input accesskey="l" class="inputheme" type="checkbox" id="switch" name="theme" /><label class="labeltheme labelposition" for="switch">Toggle</label>
        </div>
    </div>
    <div class="lamp"></div>
    <div class="titulo">
        <h2>ProtesTool</h2>
    </div>
    <div class="input-group2">
    </div>
    <a style="cursor: pointer;" type="abrir_patch" id="abrir_patchnotes">
        <div class="input-group">
        </div>
        <div class="input-group3">
        </div>
    </a>
    <div id="patchnotes">
        <div class="patchnotes">
            <div class="naoaparecerPatch">
            <a id="naoaparecer_patchnotes"> Não aparecer mais isso</a>
            </div>
            <h2><i class="fas fa-clipboard"></i> Novidades:</h2>
            <div id="novidades-scroll">

            <ul class="version">Versão: 1.0</ul>
            <li>Novo alerta adicionado na tela de login.</li>
            <li>Desvinculamento dos dajes funcionando.</li>
            <li>Consultas de dajes funcionando.</li>
            </div>
        </div>
    </div>
    <div class="fadeIn">
        <div class="header">
        </div>
        <form id="login" data-endpoint="Login" class="formlogin api-request">
            <div class="wrap-input100 validate-input m-b-23" data-validate="Usuário necessário">
                <span class="label-input100">Usuário:</span>
                <input class="input100 login-enter" type="text" name="usuario" placeholder="Digite aqui seu Usuário" required>
                <span class="focus-input100" data-symbol="&#xf206;"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Senha necessária">
                <span class="label-input100">Senha:</span>
                <input class="input100 login-enter" type="password" name="senha" placeholder="Digite aqui sua Senha" required>
                <span class="focus-input100" data-symbol="&#xf190;"></span>
            </div>
            <button type="button" id="entrar" class="btn"><i class="fas fa-sign-in-alt"></i> Entrar</button>
            <div class="tools">
                <div class="circleoff" style="animation-delay: 0s"></div>
                <div class="circleoff" style="animation-delay: 0.8s"></div>
                <div class="circleoff" style="animation-delay: 1.8s"></div>
                <div class="circleoff" style="animation-delay: 2.8s"></div>
                <div class="circleon" style="animation-delay: 0s"></div>
                <div class="circleon" style="animation-delay: 0.8s"></div>
                <div class="circleon" style="animation-delay: 1.8s"></div>
                <span data-tooltip2="Parâmetros do servidor">
                    <div class="tooltip"><span class="tooltiptext">Parametrizar configurações: ⚙️</div><a accesskey="g" href="javascript: abrir();">
                        <span class="gear">⚙️</button>
                    </a>
                </span>
                </span>
            </div>
            <p>Acesso somente autorizado!</p>
    </div>
    </form>
    </div>

</body>
<script>
    document.title = "Protestool - Entrar";
</script>
<?php include("includes/footerlogin.php"); ?>

</html>