<div class="fadeIn2">
<div style="display: none;" id="sucesso" class="window-msg">
    <div class="sucesso">
        <button id="close" class="close">X</button>
        <p class="sucesso-msg"></p>
    </div>
</div>
<form class="api-request" data-endpoint="DesvincularApontamento">
    <div class="input-group">
        <label>Número do Daje:</label>
        <input pattern="[0-9]{4}[A-Z]{2}[0-9]{6}" type="text" placeholder="Digite aqui o número do DAJE sem espaços" name="numero_daje" required>
        <p><b>Emissor, série e número</b> do <b>DAJE</b> necessários.</p>
    </div>

    <div class="centralizar2">
        <button type="submit" class="btn2">Desvincular</button>
    </div>
</form>

<script>
    bindApiRequestSubmit();
</script>
</div>