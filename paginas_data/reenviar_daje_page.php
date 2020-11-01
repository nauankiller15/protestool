<div class="fadeIn2">
    <form method="post" action="">
        <div class="shortcutkey">
            <a href="javascript: abrir3();">
                <p>Teclas de atalho:</p> Alt + A
            </a>
        </div>
        <form method="post" action="consulta_daje.php">
            <div class="wrap-input100 validate-input m-b-23">
                <span class="label-input100">Número da requisição:</span>
                <input accesskey="a" class="input100" name="protocolo" id="protocolo" title="Permitido apenas número de requisição do banco de dados" pattern="[0-9]+$" placeholder="Digite aqui o número da requisição" required>
                <span class="focus-input100" data-symbol="&#xf574;"></span>
                <span id="apagarletras" class="focus2-input100" data-symbol="&#xf55a;"></span>
            </div>
            <div class="centralizar2">
                <button type="Submit" name="login" class="btn2"><i class="far fa-share-square"></i> Reenviar</button>
            </div>
        </form>
        <div class="finaldapagina">
            <div class="lista-group">
                <label>Últimas requisições realizadas:</label>
                <div id="table-scroll">
                    <table class="bordered striped centered">
                        <thead>
                            <tr class="top-table">
                                <div>
                                    <th>
                                        <p><span data-tooltip="Número de identificação de requisição do banco de dados.">
                                                <i class="fas fa-file-upload"></i> ID Requisição <i class="fas fa-question"></i></span>
                                        </p>
                                    </th>
                                </div>
                                <th><i class="fas fa-file-alt"></i> Número Daje</th>
                                <th><i class="fas fa-file-powerpoint"></i> Protocolo</th>
                                <th><span data-tooltip5="Clique aqui para consultar os códigos.">
                                        <button class="codretorno codretorno2" data-load-page="paginas_data/cods_retorno_page.php">
                                            <i class="fas fa-exclamation-circle"></i> Cod Retorno <i class="fas fa-question"></i></button>
                                    </span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><b>510521</b></td>
                                <td>2020 002 13545</td>
                                <td>15500</td>
                                <td>Null</td>
                            </tr>
                            <tr>
                                <td><b>510522</b></td>
                                <td>2020 002 13546</td>
                                <td>15501</td>
                                <td>400</td>
                            </tr>
                            <tr>
                                <td><b>510523</b></td>
                                <td>2020 002 13547</td>
                                <td>15502</td>
                                <td>400</td>
                            </tr>
                            <tr>
                                <td><b>510524</b></td>
                                <td>2020 002 13548</td>
                                <td>15503</td>
                                <td>400</td>
                            </tr>
                            <tr>
                                <td><b>510525</b></td>
                                <td>2020 002 13549</td>
                                <td>15504</td>
                                <td>500</td>
                            </tr>
                            <tr>
                                <td><b>510526</b></td>
                                <td>2020 002 13549</td>
                                <td>15504</td>
                                <td>300</td>
                            </tr>
                            <tr>
                                <td><b>510527</b></td>
                                <td>2020 002 13550</td>
                                <td>15505</td>
                                <td>300</td>
                            </tr>
                            <tr>
                                <td><b>510527</b></td>
                                <td>2020 002 13550</td>
                                <td>15505</td>
                                <td>300</td>
                            </tr>
                            <tr>
                                <td><b>510527</b></td>
                                <td>2020 002 13550</td>
                                <td>15505</td>
                                <td>300</td>
                            </tr>
                            <tr>
                                <td><b>510527</b></td>
                                <td>2020 002 13550</td>
                                <td>15505</td>
                                <td>300</td>
                            </tr>
                            <tr>
                                <td><b>510527</b></td>
                                <td>2020 002 13550</td>
                                <td>15505</td>
                                <td>300</td>
                            </tr>
                            <tr>
                                <td><b>510527</b></td>
                                <td>2020 002 13550</td>
                                <td>15505</td>
                                <td>300</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script>
            MenuAtivo();
            codretorno();
            codretorno2();
            bindApiRequestSubmit();
            shortcutkey();
            inputvalue();
            apagarletras();
            moveScroll();
            document.title = "Protestool - Reenviar Daje";
        </script>
</div>