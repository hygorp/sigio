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
                            <div class='ui mini fluid buttons' id='prontuario-".$dados_listaDePacientes['matricula_pacientes']."'>
                                <button class='ui teal button'>
                                    <i class='eye icon'></i>
                                    Abrir Prontuário
                                </button>
                            </div>
                        </td>
                    </tr>";
                    }
                }
            ?>   
        </tbody>
    </table>
</div>

<div class="modais">
    <?php 
        $modalProntuario = $PacientesDAO->prontuario();
        if($modalProntuario == true){
            for($i = 0; $i < mysqli_num_rows($modalProntuario); $i++){
                $dados_modalProntuario = mysqli_fetch_assoc($modalProntuario);
                echo '
                        <div class="ui fullscreen modal prontuario-'.$dados_modalProntuario['matricula_pacientes'].'">
                            <div class="header">
                                '.$dados_modalProntuario['nome_completo_pacientes'].'
                            </div>
                            
                            <div class="content">
                                <div class="ui top attached tabular menu">
                                    <a class="item active" data-tab="first">First</a>
                                    <a class="item" data-tab="second">Second</a>
                                    <a class="item" data-tab="third">Third</a>
                                </div>
                                
                                <div class="ui bottom attached tab segment active" data-tab="first">
                                    <div class="field">
                                        <div class="ui input">
                                            <input type="text" value="'.$dados_modalProntuario['nome_completo_pacientes'].'">
                                        </div>
                                    </div>
                                    <p class="cpf">'.$dados_modalProntuario['cpf_pacientes'].'</p>
                                    <p>'.$dados_modalProntuario['rg_pacientes'].'</p>
                                    <p>'.$dados_modalProntuario['telefone_pacientes'].'</p>
                                    <p>'.$dados_modalProntuario['celular1_pacientes'].'</p>
                                    <p>'.$dados_modalProntuario['celular2_pacientes'].'</p>
                                    <p>'.$dados_modalProntuario['email_pacientes'].'</p>
                                </div>
                                
                                <div class="ui bottom attached tab segment" data-tab="second">
                                    <p>'.$dados_modalProntuario['endereco_pacientes'].'</p>
                                    <p class="cpf">'.$dados_modalProntuario['cep_pacientes'].'</p>
                                    <p>'.$dados_modalProntuario['bairro_pacientes'].'</p>
                                    <p>'.$dados_modalProntuario['cidade_pacientes'].'</p>
                                    <p>'.$dados_modalProntuario['complemento_pacientes'].'</p>
                                    <p>'.$dados_modalProntuario['pais_pacientes'].'</p>
                                    <p>'.$dados_modalProntuario['uf_pacientes'].'</p>
                                </div>
                                
                                <div class="ui bottom attached tab segment" data-tab="third">
                                    Third
                                </div>
                            </div>
                            
                            <div class="actions">
                                <div class="ui cancel button">Cancel</div>
                                <div class="ui button">OK</div>
                            </div>
                        </div>
                        <script>
                            $(function(){
                                $("#prontuario-'.$dados_modalProntuario['matricula_pacientes'].'").click(function(){
                                    $(".prontuario-'.$dados_modalProntuario['matricula_pacientes'].'.fullscreen.modal").modal("show");
                                });
                                $(".prontuario-'.$dados_modalProntuario['matricula_pacientes'].'").modal({
                                    closable: true
                                });
                                $(".menu .item").tab();
                            });
                        </script>
                ';
            }
        }
    ?>
    
</div>