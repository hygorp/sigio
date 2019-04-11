<div class="bread">
    <div class="ui breadcrumb">
        <i class="dashboard icon divider active"></i>
        <a class="section" href="dashboard.php?p=dados-dashboardp">Dashboard</a>
        <i class="caret right icon divider active"></i>
        <div class="section active">Fornecedores</div>
        <i class="caret right icon divider active"></i>
        <div class="section active">Controle de Fornecedores</div>
    </div>
</div>

<div class="consulta-fornecedores">
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
                $listaDeFornecedores = $FornecedoresDAO->listar_fornecedores();
                if($listaDeFornecedores == true){
                    for($i = 0; $i < mysqli_num_rows($listaDeFornecedores); $i++){
                        $dados_listaDeFornecedores = mysqli_fetch_assoc($listaDeFornecedores);
                        echo "<tr>
                        <td>".$dados_listaDeFornecedores['id_fornecedores']."</td>
                        <td>".$dados_listaDeFornecedores['nome_fantasia_fornecedores']."</td>
                        <td>".$dados_listaDeFornecedores['endereco_fornecedores']."</td>
                        <td>".$dados_listaDeFornecedores['telefone_fornecedores']."</td>
                        <td>".$dados_listaDeFornecedores['nome_representante_fornecedores']."</td>
                        <td>".$dados_listaDeFornecedores['status_fornecedores']."</td>
                        </tr>";
                    }
                }
            ?>
        </tbody>
    </table>
</div>

