<div id="popup">
    <div class="popup">
        <div class="popup_head">
            <div class="title">
                <span></span>
            </div>
        </div>
        <span data-tooltip3="Fechar tela"><a href="javascript: fechar();"><button type="submit" class="btnsair">✖️</button></a></span>
        <form class="api-request" data-endpoint="Config">
            <div class="wrap-input100 validate-input m-b-23">
                <span class="label-input100">IP do servidor:</span>
                <input class="input100"  data-inputmask="'mask': '999.999.99.999'"  id="ip" pattern="[0-9]{3}.[0-9]{3}.[0-9]{2}.[0-9]{2,}" title="Deve conter o padrão de IP do servidor" type="text" placeholder="Ex.:192.168.XXX.XXX" name="ip" required>
                <span class="focus-input100" data-symbol="&#xf233;"></span>
            </div>
              <p class="avisoindex">Dica: Por padrão utiliza-se: <b>192.168.15.15/150</b>.</p>
            <div class="centralizar3">
                <button type="save" id="save" class="btn3"><i class="fas fa-save"></i> Salvar</button> <button id="reset" type="reset" class="btnlimpar"><i class="far fa-times-circle"></i> Limpar</button>
            </div>
        </form>
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
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
<script src="https://kit.fontawesome.com/13e0382c7c.js"></script>
<script>
    bindApiRequestSubmit();
    maskinput();
</script>