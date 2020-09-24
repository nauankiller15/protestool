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
                    <span class="label-input100">IP do Servidor:</span>
                    <input class="input100" id="ip" title="Deve conter o padrão de IP do servidor" type="text" placeholder="Ex.:192.168.XXX.XXX" name="ip" autocomplete="off" required>
                    <span class="focus-input100" data-symbol="&#xf233;"></span>
                </div>
            </div>
            <p class="avisoindex2">Dica: Por padrão utiliza-se: <b>192.168.15.15/150</b>.</p>
            <div style="margin-top:15px;" class="wrap-input100 validate-input m-b-23">
                <div class="textvalue">
                    <span class="label-input100">Login:</span>
                    <input class="input100" id="logincliente" title="Login Cliente" type="text" placeholder="Login Cliente" name="login_cliente" autocomplete="off" required>
                    <span class="focus-input100" data-symbol="&#xf084;"></span>
                </div>
            </div>
            <div style="margin-top:15px;" class="wrap-input100 validate-input m-b-23">
                <div class="textvalue">
                    <span class="label-input100">Senha:</span>
                    <input class="input100" id="senhacliente" title="Senha Cliente" type="text" placeholder="Senha Cliente" name="senha_cliente" autocomplete="off" required>
                    <span class="focus-input100" data-symbol="&#xf023;"></span>
                </div>
            </div>
            <div class="centralizar3">
                <button type="submit" class="btn3" id="salvar-configuracao-btn"><i class="fas fa-save"></i>
                    Salvar</button> <button id="limparConfigBTN" type="reset" class="btnlimpar reset"><i class="far fa-times-circle"></i>
                    Limpar</button>
            </div>
        </form>
        <div class="shortcutkey2">
            <p>Teclas de atalho:</p> Alt + G
        </div>
    </div>
</div>

<div id="popup3">
    <div style=" cursor: default;" class="popup">
        <div class="popup_head">
            <div class="title">
                <span></span>
            </div>
        </div>
        <span data-tooltip3="Fechar tela"><a href="javascript: fechar3();"><button type="submit" class="btnsair">✖️</button></a></span>
        <div class="centralizar4">
            <h2>Atalhos do Sistema</h2>
            <li>Caixa de Consulta - <div class="shortcutkey3">Alt + A</div>
            </li>
            <li>Desvincular Daje - <div class="shortcutkey3">Alt + S</div>
            </li>
            <li>Consultar Daje - <div class="shortcutkey3">Alt + C</div>
            </li>
            <li>Reenviar Daje - <div class="shortcutkey3">Alt + R</div>
            </li>
            <li>Abrir Configurações - <div class="shortcutkey3">Alt + G</div>
            </li>
            <li>Mudar a Cor do Tema - <div class="shortcutkey3">Alt + L</div>
            </li>
            <li>Sair do Sistema - <div class="shortcutkey3">Alt + Q</div>
            </li>
        </div>
    </div>
</div>

<div class="caixasair">
    <div id="popup2">
        <div class="popup">
            <div class="popup_head">
                <div class="title">
                    <span></span>
                </div>
            </div>
            <div class="shortcutkey2">
                <p>Teclas de atalho:</p> Alt + Q
            </div>
            <div class="centralizar3">
                <h2>Tem certeza que deseja sair?</h2>
            </div>
            <div class="centralizar3">
                <a href="javascript: fechar2();"><button type="noexit" id="noexit" class="btn3"><i class="fas fa-undo-alt"></i> Voltar</button></a> <a href="logout.php" id="exit" type="exit" class="btnfechar"><i class="fas fa-power-off"></i> Sair</a>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="footer">
    <p>© COPYRIGHT 2020. Siscart - Protestool.</p>
    <ul><i class="rotate fas fa-cog"></i> Versão do sistema: 1.0.</ul>
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
<script src="js/jquery-3.5.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/notifcationbar.js"></script>
<script src="js/darkmode.js"></script>
<script src="js/scripts.js"></script>
<script src="js/loginform.js"></script>
<script src="js/activemenu.js"></script>
<script src="js/toastr.js"></script>
<script src="js/cookies.js"></script>
<script src="js/ajax.js"></script>
<script src="js/jquery.floatThead.js"></script>
<script src="js/main.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
<script src="https://kit.fontawesome.com/13e0382c7c.js"></script>
<script>
    NotificationBarIndex();
    userLogadoPOS();
    resetConfig();
    inputvalue();
    fecharpopup();
    shortcutkey();
    codretorno();
    bindApiRequestSubmit();
</script>