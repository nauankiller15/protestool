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
                    <label>Número do Daje:</label>
                    <input type="text" placeholder="Digite aqui o número do DAJE sem espaços" name="numero_daje" required>
                    <p><b>Emissor, série e número</b> do <b>DAJE</b> necessários.</p>
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