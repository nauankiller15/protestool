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
            <form class="api-request" data-endpoint="DesvincularApontamento">
                <div class="input-group2">
                    <span>
                    <label>Login:</label>
                    <input type="text" placeholder="login cliente" name="login">
                    </span>
                    <span>
                    <label>Senha:</label>
                    <input type="text" placeholder="senha cliente" name="senha">
                    </span>
                    </div>
                <div class="input-group">
                    <label>Número do daje:</label>
                    <input type="text" placeholder="Digite aqui o número do daje" name="numero_daje" required>
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