<!DOCTYPE html>
<html lang="pt-br">

<?php include("includes/headlogin.php"); ?>

<body>

    <div class="titulo">
        <h2>ProtesTool</h2>
    </div>
    <div class="input-group2">
    </div>
    <div class="fadeIn">
        <div class="header">
        </div>
        <form id="login" data-endpoint="login" class="formlogin api-request">
            <div class="wrap-input100 validate-input m-b-23" data-validate="Usuário necessário">
                <span class="label-input100">Usuário:</span>
                <input class="input100" type="username" name="usuario" placeholder="Digite aqui seu Usuário" required>
                <span class="focus-input100" data-symbol="&#xf206;"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Senha necessária">
                <span class="label-input100">Senha:</span>
                <input class="input100" type="password" name="senha" placeholder="Digite aqui sua Senha" required>
                <span class="focus-input100" data-symbol="&#xf190;"></span>
            </div>
            <div class="input-group">
                <button type="submit" name="entrar" class="btn"><i class="fas fa-sign-in-alt"></i> Entrar</button>
            </div>
            <div class="tools">
                <div class="circleoff" style="animation-delay: 0s"></div>
                <div class="circleoff" style="animation-delay: 0.8s"></div>
                <div class="circleoff" style="animation-delay: 1.8s"></div>
                <div class="circleon" style="animation-delay: 0s"></div>
                <div class="circleon" style="animation-delay: 0.8s"></div>
                <div class="circleon" style="animation-delay: 1.8s"></div>
                <span data-tooltip2="Parâmetros do servidor">
                    <div class="tooltip">
                        <span class="tooltiptext">Parametrizar configurações: ⚙️
                    </div><a accesskey="g" href="javascript: abrir();"><span class="gear">⚙️</button></a>
                </span>
                </span>
            </div>
            <p>Acesso somente autorizado!</p>
    </div>
    </form>
    </div>
</body>

<?php include("includes/footerlogin.php"); ?>

</html>