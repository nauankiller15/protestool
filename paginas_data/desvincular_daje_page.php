<div class="fadeIn2">
    <form class="api-request" data-endpoint="DesvincularApontamento">
        <div class="shortcutkey">
            <a href="javascript: abrir3();">
                <p>Teclas de atalho:</p> Alt + A
            </a>
        </div>
        <div class="wrap-input100 validate-input m-b-23">
            <span class="label-input100">Número do daje:</span>
            <input id="desvDaje" title="Número de DAJE Ex.: 0000 000 000000" accesskey="a" autocomplete="off" class="input100" pattern="[0-9]{13}" placeholder="Digite aqui o número do DAJE sem espaços" name="numero_daje" required>
            <span class="focus-input100" data-symbol="&#xf15c;"></span>
            <span id="apagarletras" class="focus2-input100" data-symbol="&#xf55a;"></span>
        </div>
        <p class="avisoindex"><b>Emissor, série</b> e <b>número</b> do <b>DAJE</b> necessários.
            <div class="centralizar2">
                <button id="enviar" type="submit" class="btn2"><i class="fas fa-undo"></i> Desvincular</button>
            </div>

    </form>
    <script>
        bindApiRequestSubmit();
        shortcutkey();
        inputvalue();
        apagarletras();
 
        document.title = "Protestool - Desvincular Daje";
    </script>
</div>