<?php
    $listaDePacientes = $PacientesDAO->listar_pacientes();
    if($listaDePacientes == true){
        for($i = 0; $i < mysqli_num_rows($listaDePacientes); $i++){
            $dados_listaDePacientes = mysqli_fetch_assoc($listaDePacientes);
            $date = date_create($dados_listaDePacientes['data_nascimento_pacientes']);
        }
    }
?>
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
            <tr>
                <td><?php echo $dados_listaDePacientes['nome_completo_pacientes'] ?></td>
                <td><?php echo $dados_listaDePacientes['cpf_pacientes'] ?></td>
                <td><?php echo $dados_listaDePacientes['data_nascimento_pacientes']; date('d/m/Y')?></td>
                <td><?php echo $dados_listaDePacientes['telefone_pacientes'] ?></td>
                <td><?php echo $dados_listaDePacientes['celular1_pacientes'] ?></td>
                <td><?php echo $dados_listaDePacientes['email_pacientes'] ?></td>
            </tr>
        </tbody>
    </table>
</div>