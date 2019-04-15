<div class="bread">
    <div class="ui breadcrumb">
        <i class="dashboard icon divider active"></i>
        <a class="section" href="dashboard.php?p=dados-dashboard">Dashboard</a>
        <i class="caret right icon divider active"></i>
        <div class="section active">Pacientes</div>
        <i class="caret right icon divider active"></i>
        <div class="section active">Consultar Pacientes</div>
    </div>
</div>

<div class="consulta-pacientes">
    <h2 class="ui dividing header">Consultar Pacientes</h2>
    
    <table class="ui selectable celled table">
        <thead>
            <tr>
                <th>Nome Completo</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Celular</th>
                <th>Ações</th>
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
                        <td class='telefone'>".$dados_listaDePacientes['telefone_pacientes']."</td>
                        <td class='celular'>".$dados_listaDePacientes['celular1_pacientes']."</td>
                        <td width='212'>
                            <div class='ui mini fluid buttons'>
                                <a class='ui teal button' href='dashboard.php?p=prontuario-pacientes' id='".$dados_listaDePacientes['matricula_pacientes']."'>
                                    <i class='eye icon'></i>
                                    Abrir Prontuário
                                </a>
                            </div>
                        </td>
                    </tr>";
                    }
                }
            ?>   
        </tbody>
    </table>
</div>