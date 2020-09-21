<?php
// session_start ();
//  //Se o usuário não estiver logado, não poderá sair desta página

//  if (!isset($_SESSION['usuario'])){ 
//     header('location: login.php');
// }

?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <?php include("includes/headindex.php"); ?>

    <body>
        <div class="titulo">
            <h2>ProtesTool</h2>
        </div>
        <nav>
            <div class="fadeIn">
            </div>
            <div class="header">
            </div>
            <div id="conteudo" class="entrada">
                <div class="fadeIn">
                    <div class="seta-pra-baixo">
                    </div>
                    <h2>ERRO 404 / Página Não Encontrada!
                    </h2>
                    <a class="voltar" href="index.php">Voltar</a>
                    <div class="positiontheme-error404">
                <p><i class="fas fa-palette"></i></p><input accesskey="l" class="inputheme" type="checkbox" id="switch" name="theme" /><label class="labeltheme" for="switch">Toggle</label>
            </div>
                </div>
            </div>

            <?php include("includes/footer404.php"); ?>
            <script>
                fecharpopup();
                bindApiRequestSubmit();
                apagarletras();
                document.title = "Protestool - Erro 404";
            </script>
    </body>

    </html>