<div class="modais">
    <?php
        $dadosDoProntuario = $PacientesDAO->prontuario();
        if($dadosDoProntuario == true){
            while($linha_dadosDoProntuario = mysqli_fetch_assoc($dadosDoProntuario)){  
    ?>
    <div class="ui fullscreen modal prontuario-<?php echo $linha_dadosDoProntuario['matricula_pacientes'] ?>">
        <div class="header">
            <?php echo $linha_dadosDoProntuario['nome_completo_pacientes'] ?>
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
                            <input type="text" name="nome_completo_pacientes" value="<?php echo $linha_dadosDoProntuario['nome_completo_pacientes'] ?>">
                        </div>

                        <div class="three wide field">
                            <label>Data de Nascimento</label>
                            <input type="text" name="data_nascimento_pacientes" value="<?php echo $linha_dadosDoProntuario['data_nascimento_pacientes'] ?>" class="data">
                        </div>

                        <div class="three wide field">
                            <label>Sexo</label>
                            <select class="ui fluid dropdown" name="sexo_pacientes">
                                <option selected="<?php echo $linha_dadosDoProntuario['sexo_pacientes'] ?>"><?php echo $linha_dadosDoProntuario['sexo_pacientes'] ?></option>
                                <option value="Feminino">Feminino</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Outros">Outros</option>
                            </select>
                        </div>
                    </div>

                    <div class="three fields">
                        <div class="six wide field">
                            <label>CPF</label>
                            <input type="text" name="cpf_pacientes" value="<?php echo $linha_dadosDoProntuario['cpf_pacientes'] ?>" class="cpf">
                        </div>

                        <div class="six wide field">
                            <label>RG</label>
                            <input type="text" name="rg_pacientes" value="<?php echo $linha_dadosDoProntuario['rg_pacientes'] ?>" class="rg">
                        </div>

                        <div class="six wide field">
                            <label>Orgão Emissor</label>
                            <input type="text" name="orgao_emissor_pacientes" value="<?php echo $linha_dadosDoProntuario['orgao_emissor_pacientes'] ?>">
                        </div>
                    </div>

                    <div class="two fields">
                        <div class="six wide field">
                            <label>CEP</label>
                            <input type="text" name="cep_pacientes" value="<?php echo $linha_dadosDoProntuario['cep_pacientes'] ?>" class="cep">
                        </div>

                        <div class="twelve wide field">
                            <label>Endereço</label>
                            <input type="text" name="endereco_pacientes" value="<?php echo $linha_dadosDoProntuario['endereco_pacientes'] ?>">
                        </div>
                    </div>

                    <div class="one fields">
                        <div class="sixteen wide field">
                            <label>Complemento</label>
                            <input type="text" name="complemento_pacientes" value="<?php echo $linha_dadosDoProntuario['complemento_pacientes'] ?>">
                        </div>
                    </div>

                    <div class="four fields">
                        <div class="six wide field">
                            <label>Bairro</label>
                            <input type="text" name="bairro_pacientes" value="<?php echo $linha_dadosDoProntuario['bairro_pacientes'] ?>">
                        </div>

                        <div class="six wide field">
                            <label>Cidade</label>
                            <input type="text" name="cidade_pacientes" value="<?php echo $linha_dadosDoProntuario['cidade_pacientes'] ?>">
                        </div>

                        <div class="three wide field">
                            <label>UF</label>
                            <input type="text" name="uf_pacientes" value="<?php echo $linha_dadosDoProntuario['uf_pacientes'] ?>">
                        </div>

                        <div class="three wide field">
                            <label>País</label>
                            <input type="text" name="pais_pacientes" value="<?php echo $linha_dadosDoProntuario['pais_pacientes'] ?>">
                        </div>
                    </div>

                    <div class="four fields">
                        <div class="six wide field">
                            <label>Telefone</label>
                            <input type="text" name="telefone_pacientes" value="<?php echo $linha_dadosDoProntuario['telefone_pacientes'] ?>" class="telefone">
                        </div>

                        <div class="twelve wide field">
                            <label>Celular</label>
                            <div class="two fields">
                                <div class="three field">
                                    <input type="text" name="celular1_pacientes" value="<?php echo $linha_dadosDoProntuario['celular1_pacientes'] ?>" class="celular">
                                </div>

                                <div class="field">
                                    <input type="text" name="celular2_pacientes" value="<?php echo $linha_dadosDoProntuario['celular2_pacientes'] ?>" class="celular">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="three fields">
                        <div class="eight wide field">
                            <label>Email</label>
                            <input type="text" name="email_pacientes" value="<?php echo $linha_dadosDoProntuario['email_pacientes'] ?>">
                        </div>

                        <div class="five wide field">
                            <label>Status</label>
                            <select class="ui fluid dropdown" name="status_pacientes">
                                <option selected="<?php echo $linha_dadosDoProntuario['status_pacientes'] ?>"><?php echo $linha_dadosDoProntuario['status_pacientes'] ?></option>
                                <option value="Ativo">Ativo</option>
                                <option value="Inativo">Inativo</option>
                            </select>
                        </div>

                        <div class="three wide field">
                            <label>Data de Cadastro</label>
                            <input type="text" name="data_cadastro_pacientes" value="<?php echo $linha_dadosDoProntuario['data_cadastro_pacientes'] ?>" class="data" readonly>
                        </div>
                    </div> 

                    <h4 class="ui header disabled">Informações do Convênio</h4>
                    <div class="one fields">
                        <div class="sixteen wide field">
                            <label>Nome Fantasia do Convênio</label>
                            <input type="text" name="" value="<?php echo $linha_dadosDoProntuario['nome_convenio_pacientes'] ?>">
                        </div>
                    </div>

                    <h4 class="ui header disabled">Informações do Convênio Paciente</h4>
                    <div class="two fields">
                        <div class="eight wide field">
                            <label>Titular do Convênio</label>
                            <input type="text" name="titular_convenio_pacientes" value="<?php echo $linha_dadosDoProntuario['titular_convenio_pacientes'] ?>">
                        </div>

                        <div class="eight wide field">
                            <label>Tipo do Convênio</label>
                            <input type="text" name="tipo_plano_convenio_pacientes" value="<?php echo $linha_dadosDoProntuario['tipo_plano_convenio_pacientes'] ?>">
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
                    <form class="ui form" method="POST" id="ajax-incluir-procedimento">
                        <div class="two fields">
                            <div class="four wide field">
                                <label>Matrícula Pacientes</label>
                                <input type="text" name="matricula_pacientes" value="<?php echo $linha_dadosDoProntuario['matricula_pacientes'] ?>" readonly>
                            </div>

                            <div class="twelve wide field">
                                <label>Nome do Paciente</label>
                                <input type="text" value="<?php echo $linha_dadosDoProntuario['nome_completo_pacientes'] ?>" readonly>
                            </div>
                        </div>

                        <div class="one fields">
                            <div class="sixteen wide field">
                                <label>Nome do Procedimento</label>
                                <select class="ui fluid dropdown" name="procedimento_procedimentos_pacientes">
                                    
                                </select>
                            </div>
                        </div>

                        <div class="three fields">
                            <div class="eight wide field">
                                <label>Dentista</label>
                                <select class="ui fluid dropdown" name="matricula_dentistas">
                                <?php
                                    $dentistaProcedimento = $DentistasDAO->listar_dentistas();
                                    if($dentistaProcedimento == true){
                                        while($linha_dentistaProcedimento = mysqli_fetch_assoc($dentistaProcedimento)){  
                                ?>
                                    <option value="<?php echo $linha_dentistaProcedimento['nome_completo_dentistas'] ?>"><?php echo $linha_dentistaProcedimento['nome_completo_dentistas'] ?></option>
                                <?php
                                        }
                                    }
                                ?>
                                </select>
                            </div>

                            <div class="three wide field">
                                <label>Data de Cadastro</label>
                                <input type="text" name="data_cadastro_procedimentos_pacientes" value="<?php echo date("d-m-Y"); ?>" class="data" readonly>
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
                        <button class="ui button green labeled icon" id="salvar-incluir-procedimento" type="submit" name="salvar-incluir-procedimento">
                            <i class="checkmark icon"></i>
                            Salvar
                        </button>
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
                        
                    </tbody>
                </table>
            </div>

            <div class="ui bottom attached tab segment" data-tab="third">
                <h4 class="ui header disabled">Anamnese</h4>
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
                $("#prontuario-<?php echo $linha_dadosDoProntuario['matricula_pacientes'] ?>").click(function(){
                    $(".prontuario-<?php echo $linha_dadosDoProntuario['matricula_pacientes'] ?>.fullscreen.modal").modal({ blurring: true }).modal("show");
                });
                $(".prontuario-<?php echo $linha_dadosDoProntuario['matricula_pacientes'] ?>").modal({
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