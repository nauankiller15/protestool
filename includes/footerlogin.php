<div id="popup">
    <div class="popup">
        <div class="popup_head">
            <div class="title">
                <span></span>
            </div>
        </div>
        <span data-tooltip3="Fechar tela"><a href="javascript: fechar();"><button type="submit" class="btnsair">✖️</button></a></span>
        <span data-tooltip7="Testar Conexão"><span id="testar-conexao-btn" class="btn4"><i class="fas fa-broadcast-tower"></i></span></span>
        <form id="configip" class="api-request" data-endpoint="Config">
            <div class="wrap-input100 validate-input m-b-23">
                <div class="textvalue">
                    <span class="label-input100">IP do servidor:</span>
                    <input class="input100" id="ip" title="Deve conter o padrão de IP do servidor" type="text" placeholder="Ex.:192.168.XXX.XXX" name="ip" autocomplete="off" required>
                    <span class="focus2-input100" data-symbol="&#xf233;"></span>
                </div>
            </div>
            <p class="avisoindex">Dica: Por padrão utiliza-se: <b>192.168.15.15/150</b>.</p>
            <div class="centralizar3">
                <button type="submit" class="btn3" id="salvar-configuracao-login"><i class="fas fa-save"></i>
                    Salvar</button> <button id="limparConfigBTN" type="reset" class="btnlimpar reset"><i class="far fa-times-circle"></i>
                    Limpar</button>
            </div>
        </form>
        <div class="shortcutkey2">
            <p>Teclas de atalho:</p> Alt + G
        </div>
    </div>
</div>
<div id="lds-spinner">
    <div class="lds-spinner">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<div class="footer">
    <p>© COPYRIGHT 2020. Siscart - Protestool.</p>
    <?php include("versoes/versao-sistema.php"); ?>
</div>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/darkmode.js"></script>
<script src="js/scripts.js"></script>
<script src="js/loginform.js"></script>
<script src="js/activemenu.js"></script>
<script src="js/loginnotification.js"></script>
<script src="js/toastr.js"></script>
<script src="js/cookies.js"></script>
<script src="js/ajax.js"></script>
<script src="js/main.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
<script src="https://kit.fontawesome.com/13e0382c7c.js"></script>
<script>
    bindApiRequestSubmit();
    inputvalue();
    fecharpopup();
    shortcutkey();
    codretorno();
    VersaoAtual();
    setCookie("bvExibida", false);
</script>