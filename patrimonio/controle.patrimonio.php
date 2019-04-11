<div class="bread">
    <div class="ui breadcrumb">
        <i class="dashboard icon divider active"></i>
        <a class="section" href="dashboard.php?p=dados-dashboardp">Dashboard</a>
        <i class="caret right icon divider active"></i>
        <div class="section active">Patrimônio</div>
        <i class="caret right icon divider active"></i>
        <div class="section active">Controle de Patrimônio</div>
    </div>
</div>

<div class="controle-patrimonio">
    <table class="ui selectable celled table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Quantidade</th>
                <th>Data de Cadastro</th>
                <th>Status</th>
            </tr>
        </thead>
        
        <tbody>
            <?php
                $listaDePatrimonio = $PatrimonioDAO->listar_patrimonio();
                if($listaDePatrimonio == true){
                    for($i = 0; $i < mysqli_num_rows($listaDePatrimonio); $i++){
                        $dados_listaDePatrimonio = mysqli_fetch_assoc($listaDePatrimonio);
                        echo "<tr>
                        <td>".$dados_listaDePatrimonio['id_patrimonio']."</td>
                        <td>".$dados_listaDePatrimonio['nome_patrimonio']."</td>
                        <td>".$dados_listaDePatrimonio['descricao_patrimonio']."</td>
                        <td>".$dados_listaDePatrimonio['quantidade_patrimonio']."</td>
                        <td>".$dados_listaDePatrimonio['data_cadastro_patrimonio']."</td>
                        <td>".$dados_listaDePatrimonio['status_patrimonio']."</td>
                        </tr>";
                    }
                }
            ?>
        </tbody>
    </table>
</div>
