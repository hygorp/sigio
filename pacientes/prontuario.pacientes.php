<div class="modais">
    <?php 
        $modalProntuario = $PacientesDAO->prontuario();
        if($modalProntuario == true){
            while ($dados_modalProntuario = mysqli_fetch_assoc($modalProntuario)){
    ?>
    
        <div class="ui fullscreen modal prontuario-<?php echo $dados_modalProntuario['matricula_pacientes']?>">
            <div class="header">
                    <?php echo $dados_modalProntuario['nome_completo_pacientes'] ?>
            </div>

            <div class="scrolling content">
                <div class="ui top attached tabular menu">
                    <a class="item active" data-tab="first">Dados Pessoais</a>
                    <a class="item" data-tab="second">Second</a>
                    <a class="item" data-tab="third">Third</a>
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
                    Second
                </div>

                <div class="ui bottom attached tab segment" data-tab="third">
                    Third
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