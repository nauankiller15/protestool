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
            <form method="post" action="reenviar_daje.html">
                <div class="input-group">
                    <label>Número da requisição:</label>
                    <input type="text" placeholder="Digite aqui o número de requisição" name="requisição" required>
                </div>

                <div class="centralizar2">
                    <button type="Submit" name="login" class="btn2">Reenviar</button>
                </div>
            </form>
            <div class="lista-group">
                <label>Últimas requisições realizadas:</label>
                <table class="bordered striped centered">
                    <thead>
                        <tr>
                            <div>
                                <th>
                                    <p><span data-tooltip="Esse 'ID Requisição' é uma forma de comunicação que é passado para o TJBA e retorna com esse número de identificação. - Eles ficam no banco de dados">ID
                                            Requisição (?)</span>
                                    </p>
                                </th>
                            </div>
                            <th>Número Daje</th>
                            <th>Protocolo</th>
                            <th><span data-tooltip="Clique aqui para consultar os códigos."><a href="http://localhost/ProtesTool/cods_retorno.php">Cod Retorno
                                        (?)</a></span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>510521</td>
                            <td>2020 002 13545</td>
                            <td>15500</td>
                            <td>Null</td>
                        </tr>
                        <tr>
                            <td>510522</td>
                            <td>2020 002 13546</td>
                            <td>15501</td>
                            <td>400</td>
                        </tr>
                        <tr>
                            <td>510523</td>
                            <td>2020 002 13547</td>
                            <td>15502</td>
                            <td>400</td>
                        </tr>
                        <tr>
                            <td>510524</td>
                            <td>2020 002 13548</td>
                            <td>15503</td>
                            <td>400</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <?php include("includes/footer.php"); ?>
        <script>
            document.title = "Protestool - Reenviar Daje";
        </script>
</body>

</html>