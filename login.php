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

        <form method="post" action="login.php">
            <div class="input-group">
                <label>Usuário:</label>
                <input type="text" placeholder="Digite aqui o usuário de administrador" class="password" name="username"
                    required>
            </div>
            <div class="input-group">
                <label>Senha:</label>
                <input type="password" placeholder="Digite a senha de administrador" class="password" name="password"
                    required>
            </div>

            <div class="input-group">
                <button type="Submit" name="login" class="btn">Entrar</button>
            </div>
            <p>Acesso somente autorizado!</p>
        </form>
    </div>

</body>

<?php include("includes/footer.php"); ?>

</html>