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
            <div id="informacao" class="window-msg">    
                <div class="informacao">
                    <button id="close" class="close"
                        onclick="document.getElementById('informacao').style.display='none'">X</button>Lista dos códigos
                    de retorno, para simplificar o reenvio.
                </div>
            </div>
            <div class="lista-group">
                <label>Lista de códigos de retorno:</label>
                <table class="bordered striped centered tablesorter">
                    <thead>
                        <tr>
                            <th><span data-tooltip="Clique para ordernar por número">Cod. Retorno</span></th>
                            <th>Tipo Retorno</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>500</td>
                            <td>Comunicação realizada com sucesso!</td>
                        </tr>
                        <tr>
                            <td>400</td>
                            <td>Tipo de ato inválido.</td>
                        </tr>
                        <tr>
                            <td>300</td>
                            <td>Desconhecido.</td>
                        </tr>
                        <tr>
                            <td>200</td>
                            <td>Desconhecido.</td>
                        </tr>
                        <tr>
                            <td>100</td>
                            <td>Desconhecido.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <?php include("includes/footer.php"); ?>
        <script>
        document.title = "Protestool - Códigos Retorno";
        </script>
</body>

</html>