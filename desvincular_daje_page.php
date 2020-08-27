<div style="display: none;" id="sucesso" class="window-msg">
    <div class="sucesso">
        <button id="close" class="close">X</button>
        <p class="sucesso-msg"></p>
    </div>
</div>
<div style="display: none;" id="error" class="window-msg">
    <div class="error">
        <button id="close" class="close">X</button>
        <p class="error-msg"></p>
    </div>
</div>
<form class="api-request" data-endpoint="DesvincularApontamento">
    <div class="input-group">
        <label>Número do Daje:</label>
        <input type="text" placeholder="Digite aqui o número do DAJE sem espaços" name="numero_daje" required>
        <p><b>Emissor, série e número</b> do <b>DAJE</b> necessários.</p>
    </div>

    <div class="centralizar2">
        <button type="submit" class="btn2">Desvincular</button>
    </div>
</form>

<script>
    bindApiRequestSubmit();
    bindCloseCaixaTexto();
</script>