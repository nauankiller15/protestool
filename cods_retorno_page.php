<div class="fadeIn2">
    <div id="informacao" class="window-msg">
        <div class="lista-group">
            <label>Lista de códigos de retorno:</label>
            <table class="bordered striped centered">
                <thead>
                <tr class="top-table">
                        <th><i class="fas fa-project-diagram"></i> Cod. Retorno</th>
                        <th><i class="fas fa-list-ul"></i> Tipo Retorno</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>500</td>
                        <td>Falha na parametrização de valores!</td>
                    </tr>
                    <tr>
                        <td>400</td>
                        <td>Daje não localizado / Daje já desvinculado.</td>
                    </tr>
                    <tr>
                        <td>300</td>
                        <td>Desconhecido.</td>
                    </tr>
                    <tr>
                        <td>200</td>
                        <td>Conexão estabelecida com sucesso.</td>
                    </tr>
                    <tr>
                        <td>100</td>
                        <td>Desconhecido.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    document.title = "Protestool - Códigos Retorno";
    MenuAtivo();
    codretorno();
    codretorno2();
    arrastarlista();
    bindApiRequestSubmit();
    inputvalue();
    darkmode();
</script>