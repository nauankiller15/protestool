<div class="fadeIn2">
    <form class="api-request" data-endpoint="DesvincularApontamento">
        <div class="wrap-input100 validate-input m-b-23">
            <span class="label-input100">Número do daje:</span>
            <input class="input100" pattern="[0-9]{4}[A-Z]{2}[0-9]{6}" type="text"
                placeholder="Digite aqui o número do DAJE sem espaços" name="numero_daje" required>
            <span class="focus-input100" data-symbol="&#xf15c;"></span>
        </div>
        <p class="avisoindex"><b>Emissor, série e número</b> do <b>DAJE</b> necessários.</p>

        <div class="centralizar2">
            <button type="submit" class="btn2">Desvincular</button>
        </div>
    </form>

    <script>
    bindApiRequestSubmit();
    </script>
</div>