<!DOCTYPE html>
<html lang="pt-br">

<?php include("includes/headlogin.php");?>

<body>

    <div class="titulo">
        <h2>ProtesTool</h2>
    </div>
    <div class="fadeIn">
        <div class="header">
        </div>
        <form method="post" action="index.php">
        <div class="wrap-input100 validate-input m-b-23" data-validate = "Usuário necessário">
						<span class="label-input100">Usuário:</span>
						<input class="input100" type="username" name="username" placeholder="Digite aqui seu Usuário" required>
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Senha necessária">
						<span class="label-input100">Senha:</span>
						<input class="input100" type="password" name="pass" placeholder="Digite aqui sua Senha" required>
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
            <div class="input-group">
                <button type="Submit" name="login" class="btn"><i class="fas fa-sign-in-alt"></i> Entrar</button>
            </div>
            <p>Acesso somente autorizado!</p>
        </form>
    </div>
</body>

<?php include("includes/footerlogin.php"); ?>
</html>