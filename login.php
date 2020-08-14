<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylelogin.css">
    <title>Entrar</title>
</head>

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
                <input type="text" placeholder="Digite aqui o usuário de administrador" name="username" required>
            </div>
            <div class="input-group">
                <label>Senha:</label>
                <input type="password" placeholder="Digite a senha de administrador" name="password" required>
            </div>

            <div class="input-group">
                <button type="Submit" name="login" class="btn">Entrar</button>
            </div>
            <p>Acesso somente autorizado!</p>
        </form>
    </div>
    
</body>
<div class="footer">
    © COPYRIGHT 2020. I9Software.
            </div>
</html>