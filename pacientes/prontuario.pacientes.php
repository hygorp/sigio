<div class="modais">
    <?php 
        $modalProntuario = $PacientesDAO->prontuario();
        if($modalProntuario == true){
            while ($dados_modalProntuario = mysqli_fetch_assoc($modalProntuario)){
    ?>
    
        <div class="ui fullscreen modal prontuario-<?php echo $dados_modalProntuario['matricula_pacientes']?>">
            <?php 
                $id_paciente_selecionado = $dados_modalProntuario['matricula_pacientes'];
                $retorna_id_dentista = $ProcedimentosPacientesDAO->exibir_procedimento_id($id_paciente_selecionado);
                if($retorna_id_dentista == true){
                    for($i = 0; $i < mysqli_num_rows($retorna_id_dentista); $i++){
                        $listarRetornaIdDentista = mysqli_fetch_array($retorna_id_dentista);
                    }
                }
                $id_dentista_selecionado = isset($listarRetornaIdDentista['matricula_dentistas']);
            ?>
            <div class="header">
                    <?php echo $dados_modalProntuario['nome_completo_pacientes'] ?>
            </div>

            <div class="scrolling content">
                <div class="ui top attached tabular menu">
                    <a class="item active" data-tab="first">Dados Pessoais</a>
                    <a class="item" data-tab="second">Procedimentos</a>
                    <a class="item" data-tab="third">Anamnese</a>
                </div>

                <div class="ui bottom attached tab segment active" data-tab="first">
                    <h4 class="ui header disabled">Informações Gerais do Paciente</h4>
                    <div class="ui form">
                        <div class="three fields">
                            <div class="twelve wide field">
                                <label>Nome Completo</label>
                                <input type="text" name="nome_completo_pacientes" value="<?php echo $dados_modalProntuario['nome_completo_pacientes'] ?>">
                            </div>

                            <div class="three wide field">
                                <label>Data de Nascimento</label>
                                <input type="text" name="data_nascimento_pacientes" value="<?php echo $dados_modalProntuario['data_nascimento_pacientes'] ?>" class="data">
                            </div>

                            <div class="three wide field">
                                <label>Sexo</label>
                                <select class="ui fluid dropdown" name="sexo_pacientes">
                                    <option selected="<?php echo $dados_modalProntuario['sexo_pacientes'] ?>"><?php echo $dados_modalProntuario['sexo_pacientes'] ?></option>
                                    <option value="Feminino">Feminino</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Outros">Outros</option>
                                </select>
                            </div>
                        </div>

                        <div class="three fields">
                            <div class="six wide field">
                                <label>CPF</label>
                                <input type="text" name="cpf_pacientes" value="<?php echo $dados_modalProntuario['cpf_pacientes'] ?>" class="cpf">
                            </div>

                            <div class="six wide field">
                                <label>RG</label>
                                <input type="text" name="rg_pacientes" value="<?php echo $dados_modalProntuario['rg_pacientes'] ?>" class="rg">
                            </div>

                            <div class="six wide field">
                                <label>Orgão Emissor</label>
                                <input type="text" name="orgao_emissor_pacientes" value="<?php echo $dados_modalProntuario['orgao_emissor_pacientes'] ?>">
                            </div>
                        </div>

                        <div class="two fields">
                            <div class="six wide field">
                                <label>CEP</label>
                                <input type="text" name="cep_pacientes" value="<?php echo $dados_modalProntuario['cep_pacientes'] ?>" class="cep">
                            </div>

                            <div class="twelve wide field">
                                <label>Endereço</label>
                                <input type="text" name="endereco_pacientes" value="<?php echo $dados_modalProntuario['endereco_pacientes'] ?>">
                            </div>
                        </div>

                        <div class="one fields">
                            <div class="sixteen wide field">
                                <label>Complemento</label>
                                <input type="text" name="complemento_pacientes" value="<?php echo $dados_modalProntuario['complemento_pacientes'] ?>">
                            </div>
                        </div>

                        <div class="four fields">
                            <div class="six wide field">
                                <label>Bairro</label>
                                <input type="text" name="bairro_pacientes" value="<?php echo $dados_modalProntuario['bairro_pacientes'] ?>">
                            </div>

                            <div class="six wide field">
                                <label>Cidade</label>
                                <input type="text" name="cidade_pacientes" value="<?php echo $dados_modalProntuario['cidade_pacientes'] ?>">
                            </div>

                            <div class="three wide field">
                                <label>UF</label>
                                <input type="text" name="uf_pacientes" value="<?php echo $dados_modalProntuario['uf_pacientes'] ?>">
                            </div>

                            <div class="three wide field">
                                <label>País</label>
                                <input type="text" name="pais_pacientes" value="<?php echo $dados_modalProntuario['pais_pacientes'] ?>">
                            </div>
                        </div>

                        <div class="four fields">
                            <div class="six wide field">
                                <label>Telefone</label>
                                <input type="text" name="telefone_pacientes" value="<?php echo $dados_modalProntuario['telefone_pacientes'] ?>" class="telefone">
                            </div>

                            <div class="twelve wide field">
                                <label>Celular</label>
                                <div class="two fields">
                                    <div class="three field">
                                        <input type="text" name="celular1_pacientes" value="<?php echo $dados_modalProntuario['celular1_pacientes'] ?>" class="celular">
                                    </div>

                                    <div class="field">
                                        <input type="text" name="celular2_pacientes" value="<?php echo $dados_modalProntuario['celular2_pacientes'] ?>" class="celular">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="three fields">
                            <div class="eight wide field">
                                <label>Email</label>
                                <input type="text" name="email_pacientes" value="<?php echo $dados_modalProntuario['email_pacientes'] ?>">
                            </div>

                            <div class="five wide field">
                                <label>Status</label>
                                <select class="ui fluid dropdown" name="status_pacientes">
                                    <option selected="<?php echo $dados_modalProntuario['status_pacientes'] ?>"><?php echo $dados_modalProntuario['status_pacientes'] ?></option>
                                    <option value="Ativo">Ativo</option>
                                    <option value="Inativo">Inativo</option>
                                </select>
                            </div>

                            <div class="three wide field">
                                <label>Data de Cadastro</label>
                                <input type="text" name="data_cadastro_pacientes" value="<?php echo $dados_modalProntuario['data_cadastro_pacientes'] ?>" class="data" readonly>
                            </div>
                        </div> 

                        <h4 class="ui header disabled">Informações do Convênio</h4>
                        <div class="one fields">
                            <div class="sixteen wide field">
                                <label>Nome Fantasia do Convênio</label>
                                <input type="text" name="" value="<?php echo $dados_modalProntuario['nome_convenio_pacientes'] ?>">
                            </div>
                        </div>
                            
                        <h4 class="ui header disabled">Informações do Convênio Paciente</h4>
                        <div class="two fields">
                            <div class="eight wide field">
                                <label>Titular do Convênio</label>
                                <input type="text" name="titular_convenio_pacientes" value="<?php echo $dados_modalProntuario['titular_convenio_pacientes'] ?>">
                            </div>

                            <div class="eight wide field">
                                <label>Tipo do Convênio</label>
                                <input type="text" name="tipo_plano_convenio_pacientes" value="<?php echo $dados_modalProntuario['tipo_plano_convenio_pacientes'] ?>">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="ui bottom attached tab segment" data-tab="second">
                    <h4 class="ui header disabled">Procedimentos</h4>

                    <button class="ui button positive labeled icon" id="incluir-procedimento">
                        <i class="plus icon"></i>
                        Incluir Procedimento
                    </button>
                    <div class="ui segment formulario-procedimento" style="display: none">
                    <form class="ui form">
                        <div class="two fields">
                            <div class="four wide field">
                                <label>Matrícula Pacientes</label>
                                <input type="text" value="<?php echo $dados_modalProntuario['matricula_pacientes'] ?>" readonly>
                            </div>
                            
                            <div class="twelve wide field">
                                <label>Nome do Paciente</label>
                                <input type="text" value="<?php echo $dados_modalProntuario['nome_completo_pacientes'] ?>" readonly>
                            </div>
                        </div>
                        <div class="three fields">
                            <div class="four wide field">
                                <label>Dentista</label>
                                <select class="ui fluid dropdown" name="nome_completo_dentistas">
                                    <?php
                                        $listaDeDentistas = $DentistasDAO->listar_dentistas();
                                        if($listaDeDentistas == true){
                                            for($i = 0; $i < mysqli_num_rows($listaDeDentistas); $i++){
                                                $dados_listaDeDentistas = mysqli_fetch_assoc($listaDeDentistas);
                                                echo '<option>'.$dados_listaDeDentistas['nome_completo_dentistas'].'</option>';
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                            
                            <div class="three wide field">
                                <label>Data de Cadastro</label>
                                <input type="text" name="data_cadastro_procedimentos_pacientes" value="<?php echo date ("d-m-Y"); ?>" class="data" readonly>
                            </div>
                            
                            <div class="five wide field">
                                <label>Status</label>
                                <select class="ui fluid dropdown" name="status_procedimentos_pacientes">
                                    <option value="Realizado">Realizado</option>
                                    <option value="Não Realizado">Não Realizado</option>
                                </select>
                            </div>
                        </div>
                        <div class="ui button red labeled icon" id="fechar-incluir-procedimento">
                            <i class="close icon"></i>
                            Fechar
                        </div>
                        <div class="ui button green labeled icon" id="salvar-incluir-procedimento">
                            <i class="checkmark icon"></i>
                            Salvar
                        </div>
                    </form>
                    </div>
                    
                    <script>
                        $('#incluir-procedimento').click(function(){
                            $('.formulario-procedimento').css("display", "block");
                        });
                        $('#fechar-incluir-procedimento').click(function(){
                            $('.formulario-procedimento').css("display", "none");
                        });
                    </script>
                    
                    <table class="ui celled table">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Procedimento</th>
                                <th>Data</th>
                                <th>Dentista</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $listaDeProcedimentos_Pacientes = $ProcedimentosPacientesDAO->exibir_procedimento_id_join($id_paciente_selecionado, $id_dentista_selecionado);
                                if($listaDeProcedimentos_Pacientes == true){
                                    while($dados_listaDeProcedimentos_Pacientes = mysqli_fetch_assoc($listaDeProcedimentos_Pacientes)){
                            ?>
                            
                            <tr>
                                <td><?php echo $dados_listaDeProcedimentos_Pacientes['codigo_procedimentos_pacientes'] ?></td>
                                <td><?php echo $dados_listaDeProcedimentos_Pacientes['nome_procedimentos_pacientes'] ?></td>
                                <td class="data"><?php echo $dados_listaDeProcedimentos_Pacientes['data_cadastro_procedimentos_pacientes'] ?></td>
                                <td><?php echo $dados_listaDeProcedimentos_Pacientes['nome_completo_dentistas'] ?></td>
                                <td><?php echo '<b>'.$dados_listaDeProcedimentos_Pacientes['status_procedimentos_pacientes'].'</b>' ?></td>
                                <td class="center aligned">
                                    <?php
                                        if($dados_listaDeProcedimentos_Pacientes['status_procedimentos_pacientes'] == "Realizado"){
                                            echo '<i class="large green checkmark icon"></i>';
                                        }else{
                                            echo '<i class="large red attention close icon"></i>';
                                        }
                                    ?>
                                </td>
                            </tr>
                            
                            <?php
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>

                <div class="ui bottom attached tab segment" data-tab="third">
                    <h4 class="ui header disabled">Anamnese</h4>
                    <h4 class="ui dividing header"></h4>
                    <table class="ui definition table">
                        <div class="ui form">
                            <div class="inline fields">
                                <label>1- Pelo qual motivo que está nos procurando?</label>
                                <input type="text" name="pergunta1_anamnese">
                            </div>
                            <h4 class="ui dividing header"></h4>
                            <div class="inline fields">
                                <label>2- Quando foi a sua última consulta?</label>
                                <input type="text" name="pergunta2_anamnese">
                            </div>
                            
                            <h4 class="ui dividing header"></h4>
                            <div class="inline fields">
                                <label>3- Com qual frequência você vai ao dentista?</label>
                                <input type="text" name="pergunta3_anamnese">
                            </div>
                            
                            <h4 class="ui dividing header"></h4>
                            <div class="inline fields">
                                <label>4- Sua gengiva costumar sangrar?</label>
                                <div class="field">
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="pergunta4_anamnese" tabindex="0" class="hidden">
                                        <label>Sim</label>
                                    </div>
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="pergunta4_anamnese" tabindex="0" class="hidden">
                                        <label>Não</label>
                                    </div>
                                </div>
                            </div>
                            
                            <h4 class="ui dividing header"></h4>
                            <div class="inline fields">
                                <label>5- Tem hábito de beber café ou refrigerante?</label>
                                <div class="field">
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="pergunta5_anamnese" tabindex="0" class="hidden">
                                        <label>Sim</label>
                                    </div>
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="pergunta5_anamnese" tabindex="0" class="hidden">
                                        <label>Não</label>
                                    </div>
                                </div>
                            </div>
                            
                            <h4 class="ui dividing header"></h4>
                            <div class="inline fields">
                                <label>6- Você fuma?</label>
                                <div class="field">
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="pergunta6_anamnese" tabindex="0" class="hidden">
                                        <label>Sim</label>
                                    </div>
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="pergunta6_anamnese" tabindex="0" class="hidden">
                                        <label>Não</label>
                                    </div>
                                </div>
                            </div>
                            
                            <h4 class="ui dividing header"></h4>
                            <div class="inline fields">
                                <label>7- Já se submeteu a anestesia dentária? Teve alguma reação?</label>
                                <input type="text" name="pergunta7_anamnese">
                            </div>
                            
                            <h4 class="ui dividing header"></h4>
                            <div class="inline fields">
                                <label>8- Toma algum medicamento? Qual?</label>
                                <input type="text" name="pergunta8_anamnese">
                            </div>
                            
                            <h4 class="ui dividing header"></h4>
                            <div class="inline fields">
                                <label>9- Tem alergia a algum medicamento? Qual?</label>
                                <input type="text" name="pergunta9_anamnese">
                            </div>
                            
                            <h4 class="ui dividing header"></h4>
                            <div class="inline fields">
                                <label>10- Está grávida? Quantos meses?</label>
                                <input type="text" name="pergunta10_anamnese">
                            </div>
                        </div>
                    </table>
                    
                    <div class="ui button green labeled icon" id="salvar-incluir-anamnese">
                        <i class="checkmark icon"></i>
                        Salvar
                    </div>
                </div>
            </div>

            <div class="actions">
                <button class="ui red labeled icon button cancel">
                    <i class="close icon"></i>
                    Fechar
                </button>

                <button class="ui primary labeled icon button cancel">
                    <i class="edit icon"></i>
                    Editar
                </button>
            </div>
        </div>

        <script>$("select.dropdown").dropdown();</script>
        <script>
            $(function(){
                $("#prontuario-<?php echo $dados_modalProntuario['matricula_pacientes'] ?>").click(function(){
                    $(".prontuario-<?php echo $dados_modalProntuario['matricula_pacientes'] ?>.fullscreen.modal").modal({ blurring: true }).modal("show");
                });
                $(".prontuario-<?php echo $dados_modalProntuario['matricula_pacientes'] ?>").modal({
                    closable: true
                });
                $(".menu .item").tab();
            });
        </script>
    
    <?php
            }
        } 
    ?>
    
</div>