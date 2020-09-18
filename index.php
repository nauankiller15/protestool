<?php 
session_start ();
 //Se o usuário não estiver logado, não poderá sair desta página

 if (!isset($_SESSION['usuario'])){ 
    header('location: login.php');
}

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
            <?php include("includes/menu.php") ?>
        </div>
        <div class="header">
        </div>
        <div id="conteudo" class="entrada">
            <div class="fadeIn">
                <h2>Escolha uma das opções acima para poder realizar as manutenções.</h2>
            </div>
        </div>

        <?php include("includes/footer.php"); ?>
        <script>
            fecharpopup();
            bindApiRequestSubmit();
            apagarletras();
        </script>
</body>

</html>