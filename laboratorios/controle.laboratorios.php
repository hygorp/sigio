<div class="bread">
    <div class="ui breadcrumb">
        <i class="dashboard icon divider active"></i>
        <a class="section" href="dashboard.php?p=dados-dashboardp">Dashboard</a>
        <i class="caret right icon divider active"></i>
        <div class="section active">Laboratórios</div>
        <i class="caret right icon divider active"></i>
        <div class="section active">Controle de Laboratórios</div>
    </div>
</div>

<div class="controle-laboratorios">
    <table class="ui selectable celled table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome Fantasia</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>Representante</th>
                <th>Status</th>
            </tr>
        </thead>
        
        <tbody>
            <?php
                $listaDeLaboratorios = $LaboratoriosDAO->listar_laboratorios();
                if($listaDeLaboratorios == true){
                    for($i = 0; $i < mysqli_num_rows($listaDeLaboratorios); $i++){
                        $dados_listaDeLaboratorios = mysqli_fetch_assoc($listaDeLaboratorios);
                        echo "<tr>
                        <td>".$dados_listaDeLaboratorios['id_laboratorios']."</td>
                        <td>".$dados_listaDeLaboratorios['nome_fantasia_laboratorios']."</td>
                        <td>".$dados_listaDeLaboratorios['endereco_laboratorios']."</td>
                        <td class='telefone'>".$dados_listaDeLaboratorios['telefone_laboratorios']."</td>
                        <td>".$dados_listaDeLaboratorios['nome_representante_laboratorios']."</td>
                        <td>".$dados_listaDeLaboratorios['status_laboratorios']."</td>
                        </tr>";
                    }
                }
            ?>
        </tbody>
    </table>
</div>


