<!DOCTYPE html>
<html lang="pt-br">

<?php include("includes/headindex.php"); ?>

<body>

    <div class="titulo">
        <h2>ProtesTool</h2>
    </div>
    <nav>
        <?php include("includes/menu.php") ?>
        <div class="header">
        </div>
        <div class="entrada">
            <div style="display: none;" id="sucesso" class="window-msg">
                <div class="sucesso">
                    <button id="close" class="close">X</button>
                    <p class="sucesso-msg"></p>
                </div>
            </div>
            <div style="display: none;" id="error" class="window-msg">
                <div class="error">
                    <button id="close" class="close">X</button>
                    <p class="error-msg"></p>
                </div>
            </div>
            <form class="api-request" data-endpoint="DesvincularApontamento">
                <div class="input-group">
                    <span>
                        <label>IP do Servidor:</label>
                        <input id="ip" type="text" placeholder="Ex.:192.168.XXX.XXX" name="ip" required>
                        <p>Por padrão utiliza-se: <b>192.168.15.150</b>.</p>
                    </span>
                    <span>
                        <label>Login:</label>
                        <input type="text" placeholder="Login cliente" name="login" required>
                    </span>
                    <span>
                        <label>Senha:</label>
                        <input type="password" placeholder="Senha cliente" name="senha" required>
                    </span>
                </div>
                <div class="input-group">
                    <label>Número do Daje:</label>
                    <input type="text" placeholder="Digite aqui o número do daje sem espaços" name="numero_daje" required>
                    <p><b>Emissor, série e número</b> do daje necessários.</p>
                </div>

                <div class="centralizar2">
                    <button type="submit" class="btn2">Desvincular</button>
                </div>


            </form>
        </div>



        <?php include("includes/footer.php"); ?>
        <script>
        document.title = "Protestool - Desvincular Daje";
        </script>
</body>

</html>