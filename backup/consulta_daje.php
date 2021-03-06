<!DOCTYPE html>
<html lang="pt-br">

<?php include("includes/headindex.php"); ?>

<body>

    <div class="titulo">
        <h2>ProtesTool</h2>
    </div>
    <nav>
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
                <form method="post" action="consulta_daje.php">

                    <div class="input-group">
                        <label>Número do protocolo:</label>
                        <input type="text" placeholder="Digite aqui o número do protocolo" name="daje" required>
                    </div>

                    <div class="centralizar2">
                        <button type="Submit" name="login" class="btn2">Consultar</button>
                    </div>

                </form>

                <div class="lista-group">
                    <label>Dajes Encontrados:</label>
                    <table class="bordered striped centered">
                        <thead>
                            <tr>
                                <th>Número Daje</th>
                                <th>
                                    <p><span data-tooltip="ID de Requisição do banco de dados para consulta e reenvio do daje.">ID Requisição
                                            (?)</span>
                                    </p>
                                </th>
                                <th>Protocolo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2020 002 13545</td>
                                <td>510521</td>
                                <td>15500</td>
                            </tr>
                            <tr>
                                <td>2020 002 13546</td>
                                <td>510522</td>
                                <td>15501</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <?php include("includes/footer.php"); ?>
            <script>
                document.title = "Protestool - Consultar Daje";
            </script>

</body>

</html>