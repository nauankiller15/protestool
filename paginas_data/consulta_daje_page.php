<div class="fadeIn2">
    <form method="post">
        <div class="shortcutkey">
            <a href="javascript: abrir3();">
                <p>Teclas de atalho:</p> Alt + A
            </a>
        </div>
        <div class="wrap-input100 validate-input m-b-23">
            <span class="label-input100">Número do protocolo:</span>
            <input accesskey="a" class="input100" name="protocolo" id="protocolo" title="Permitido apenas número de protocolo do banco de dados" pattern="[0-9]+$" placeholder="Digite aqui o número do protocolo" required>
            <span class="focus-input100" data-symbol="&#xf1c4;"></span>
            <span id="apagarletras" class="focus2-input100" data-symbol="&#xf55a;"></span>
        </div>

        <div class="centralizar2">
            <button id="enviar" name="consultar" class="btn2"><i class="fas fa-search"></i> Consultar</button>
        </div>

    </form>

    <div class="lista-group">
        <label>Dajes Encontrados:</label>
        <div class="finaldapagina">
            <div id="table-scroll">
                <table class="bordered striped centered">
                    <thead>
                        <tr style="margin: 25px;" class="top-table">
                            <th><i class="fas fa-file-alt"></i> Número Daje</th>
                            <th>
                                <p><span data-tooltip="Número de Identificação de Requisição do Banco de dados."><i class="fas fa-file-upload"></i> ID
                                        Requisição <i class="fas fa-question"></i></span>
                                </p>
                            </th>
                            <th><i class="fas fa-file-powerpoint"></i> Protocolo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2020 002 13545</td>
                            <td>510521</td>
                            <td><b>15500</b></td>
                        </tr>
                        <tr>
                            <td>2020 002 13546</td>
                            <td>510522</td>
                            <td><b>15501</b></td>
                        </tr>
                        <tr>
                            <td>2020 002 13547</td>
                            <td>510523</td>
                            <td><b>15502</b></td>
                        </tr>
                        <tr>
                            <td>2020 002 13547</td>
                            <td>510523</td>
                            <td><b>15502</b></td>
                        </tr>
                        <tr>
                            <td>2020 002 13547</td>
                            <td>510523</td>
                            <td><b>15502</b></td>
                        </tr>
                        <tr>
                            <td>2020 002 13547</td>
                            <td>510523</td>
                            <td><b>15502</b></td>
                        </tr>
                        <tr>
                            <td>2020 002 13547</td>
                            <td>510523</td>
                            <td><b>15502</b></td>
                        </tr>
                        <tr>
                            <td>2020 002 13547</td>
                            <td>510523</td>
                            <td><b>15502</b></td>
                        </tr>
                        <tr>
                            <td>2020 002 13547</td>
                            <td>510523</td>
                            <td><b>15502</b></td>
                        </tr>
                        <tr>
                            <td>2020 002 13547</td>
                            <td>510523</td>
                            <td><b>15502</b></td>
                        </tr>
                        <tr>
                            <td>2020 002 13547</td>
                            <td>510523</td>
                            <td><b>15502</b></td>
                        </tr>
                        <tr>
                            <td>2020 002 13547</td>
                            <td>510523</td>
                            <td><b>15502</b></td>
                        </tr>
                        <tr>
                            <td>2020 002 13547</td>
                            <td>510523</td>
                            <td><b>15502</b></td>
                        </tr>
                        <tr>
                            <td>2020 002 13547</td>
                            <td>510523</td>
                            <td><b>15502</b></td>
                        </tr>
                        <tr>
                            <td>2020 002 13547</td>
                            <td>510523</td>
                            <td><b>15502</b></td>
                        </tr>
                        <tr>
                            <td>2020 002 13547</td>
                            <td>510523</td>
                            <td><b>15502</b></td>
                        </tr>
                        <tr>
                            <td>2020 002 13547</td>
                            <td>510523</td>
                            <td><b>15502</b></td>
                        </tr>
                        <tr>
                            <td>2020 002 13547</td>
                            <td>510523</td>
                            <td><b>15502</b></td>
                        </tr>
                        <tr>
                            <td>2020 002 13547</td>
                            <td>510523</td>
                            <td><b>15502</b></td>
                        </tr>
                        <tr>
                            <td>2020 002 13547</td>
                            <td>510523</td>
                            <td><b>15502</b></td>
                        </tr>
                        <tr>
                            <td>2020 002 13547</td>
                            <td>510523</td>
                            <td><b>15502</b></td>
                        </tr>
                        <tr>
                            <td>2020 002 13547</td>
                            <td>510523</td>
                            <td><b>15502</b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script>
    bindApiRequestSubmit();
    moveScroll();
    shortcutkey();
    inputvalue();
    apagarletras();

    document.title = "Protestool - Consulta Daje";
</script>