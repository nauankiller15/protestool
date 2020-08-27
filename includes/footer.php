<div id="popup">
    <div class="popup">
        <div class="popup_head">
            <div class="title">
                <span></span>
            </div>
        </div>
        <span data-tooltip3="Fechar tela"><a href="javascript: fechar();"><button type="submit" class="btnsair">✖️</button></a></span>
        <form class="api-request" data-endpoint="DesvincularApontamento">
            <div class="input-group2">
                <span>
                    <label>IP do Servidor:</label>
                    <input id="ip"  class ='ip1' type="text" placeholder="Ex.:192.168.XXX.XXX" name="ip" required>
                    <p>Dica: Por padrão utiliza-se: <b>192.168.15.15/150</b>.</p>
                </span>
                <span>
                    <label>Login:</label>
                    <input type="text" id="empty1" placeholder="Login cliente" name="login" required>
                </span>
                <span>
                    <label>Senha:</label>
                    <input type="password" id="empty2" placeholder="Senha cliente" name="senha" required>
                </span>
            </div>
            <div class="centralizar3">
                <button type="save" id="save" class="btn3">Salvar</button><button id="reset" type="reset" class="btn3">Limpar</button>
            </div>
    </div>
</div>

<div class="footer">
    © COPYRIGHT 2020. Siscart - Protestool.
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
<script src="js/activemenu.js"></script>
<script src="js/notifcationbar.js"></script>
<script src="js/jquery.tablesorter.min.js"></script>
<script src="js/scripts.js"></script>
<script src="js/caixatexto.js"></script>
<script src="js/ajax.js"></script>
<script src="js/main.js"></script>