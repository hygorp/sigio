<div class="bread">
    <div class="ui breadcrumb">
        <i class="dashboard icon divider active"></i>
        <a class="section" href="dashboard.php?p=dados-dashboardp">Dashboard</a>
        <i class="caret right icon divider active"></i>
        <div class="section active">Funcionários</div>
        <i class="caret right icon divider active"></i>
        <div class="section active">Consultar Funcionários</div>
    </div>
</div>

<div class="consulta-funcionarios">
    <table class="ui selectable celled table">
        <thead>
            <tr>
                <th>Nome Completo</th>
                <th>Data de Nascimento</th>
                <th>CPF</th>
                <th>Cargo</th>
                <th>Celular</th>
                <th>Email</th>
            </tr>
        </thead>
        
        <tbody>
            <?php
                $listaDeFuncionarios = $FuncionariosDAO->listar_funcionarios();
                if($listaDeFuncionarios == true){
                    for($i = 0; $i < mysqli_num_rows($listaDeFuncionarios); $i++){
                        $dados_listaDeFuncionarios = mysqli_fetch_assoc($listaDeFuncionarios);
                        echo "<tr>
                        <td>".$dados_listaDeFuncionarios['nome_completo_funcionarios']."</td>
                        <td>".$dados_listaDeFuncionarios['data_nascimento_funcionarios']."</td>
                        <td>".$dados_listaDeFuncionarios['cpf_funcionarios']."</td>
                        <td>".$dados_listaDeFuncionarios['cargo_funcionarios']."</td>
                        <td>".$dados_listaDeFuncionarios['celular1_funcionarios']."</td>
                        <td>".$dados_listaDeFuncionarios['email_funcionarios']."</td>
                        </tr>";
                    }
                }
            ?>
        </tbody>
    </table>
</div>