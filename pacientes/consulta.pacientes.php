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
                $listaDeProntuarios = $PacientesDAO->prontuario();
                if($listaDeProntuarios == true){
                    while($dados_listaDeProntuarios = mysqli_fetch_assoc($listaDeProntuarios)){  
            ?>
                <tr>    
                    <td><?php echo $dados_listaDeProntuarios['nome_completo_pacientes'] ?></td>
                    <td class="cpf"><?php echo $dados_listaDeProntuarios['cpf_pacientes'] ?></td>
                    <td class="telefone"><?php echo $dados_listaDeProntuarios['telefone_pacientes'] ?></td>
                    <td class="celular"><?php echo $dados_listaDeProntuarios['celular1_pacientes'] ?></td> 
                   
                    <td width="212">
                        <div class="ui mini fluid buttons" id="prontuario-<?php echo $dados_listaDeProntuarios['matricula_pacientes'] ?>">
                            <button class="ui teal button">
                                <i class="eye icon"></i>
                                Abrir Prontuário
                            </button>
                        </div>
                    </td>
                </tr>
            <?php
                    }
                }
            ?>   
        </tbody>
    </table>
</div>

<?php include 'prontuario.pacientes.php'; ?>