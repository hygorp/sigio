<div class="bread">
    <div class="ui breadcrumb">
        <i class="dashboard icon divider active"></i>
        <a class="section" href="dashboard.php?p=dados-dashboardp">Dashboard</a>
        <i class="caret right icon divider active"></i>
        <div class="section active">Pacientes</div>
        <i class="caret right icon divider active"></i>
        <div class="section active">Consultar Pacientes</div>
    </div>
</div>

<div class="consulta-pacientes">
    <table class="ui selectable celled table">
        <thead>
            <tr>
                <th>Nome Completo</th>
                <th>CPF</th>
                <th>Data de Nascimento</th>
                <th>Telefone</th>
                <th>Celular</th>
                <th>Email</th>
            </tr>
        </thead>
        
        <tbody>
            <?php
                $listaDePacientes = $PacientesDAO->listar_pacientes();
                if($listaDePacientes == true){
                    for($i = 0; $i < mysqli_num_rows($listaDePacientes); $i++){
                        $dados_listaDePacientes = mysqli_fetch_assoc($listaDePacientes);
                        echo "<tr>
                        <td>".$dados_listaDePacientes['nome_completo_pacientes']."</td>
                        <td class='cpf'>".$dados_listaDePacientes['cpf_pacientes']."</td>
                        <td class='data'>".$dados_listaDePacientes['data_nascimento_pacientes']."</td>
                        <td class='telefone'>".$dados_listaDePacientes['telefone_pacientes']."</td>
                        <td class='celular'>".$dados_listaDePacientes['celular1_pacientes']."</td>
                        <td>".$dados_listaDePacientes['email_pacientes']."</td>
                    </tr>";
                    }
                }
            ?>   
        </tbody>
    </table>
</div>