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
                    <input id="ip intTextBox" pattern="[0-9]{3}.[0-9]{3}.[0-9]{2}.[0-9]{3}" class ="ip1" type="text" placeholder="Ex.:192.168.XXX.XXX" name="ip" required>
                    <p>Dica: Por padrão utiliza-se: <b>192.168.15.15/150</b>.</p>
                </span>
                <span>
                    <label>Login:</label>
                    <input type="text" id="empty1" placeholder="Login cliente" name="login" required>
                </span>
                <span>
                    <label>Senha:</label>
                    <input type="password" id="empty2" placeholder="Senha cliente" name="senha" required>
                     <p>Por favor, confira se todas as <b>informações</b> preenchidas estão corretas, para depois realizar as <b>manutenções...</b></p>
                </span>
            </div>
            <div class="centralizar3">
                <button id="reset" type="reset" class="btnlimpar">Limpar</button><button type="save" id="save" class="btn3">Salvar</button>
            </div>
    </div>
</div>

<div class="footer">
    <p>© COPYRIGHT 2020. Siscart - Protestool.</p>
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
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="js/scripts.js"></script>
<script src="js/activemenu.js"></script>
<script src="js/notifcationbar.js"></script>
<script src="js/toastr.js"></script>
<script src="js/ajax.js"></script>
<script src="js/main.js"></script>