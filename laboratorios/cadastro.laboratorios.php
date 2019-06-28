<div class="bread">
    <div class="ui breadcrumb">
        <i class="dashboard icon divider"></i>
        <a class="section" href="dashboard.php?p=dados-dashboard">Dashboard</a>
        <i class="caret right icon"></i>
        <div class="active section">Cadastro</div>  
    </div>
</div>
<div class="cadastro-laboratorios">
    <form class="ui form cadastro-laboratorios-form" method="POST">
        <h2 class="ui dividing header">Cadastro de Laboratórios</h2>
        <h3 class="ui header disabled">Informações da Empresa</h3>
        <div class="two fields">
            <div class="eight wide field">
                <label>Razão Social</label>
                <input type="text" name="razao_social_laboratorios" placeholder="Razão Social">
            </div>
            
            <div class="eight wide field">
                <label>Nome Fantasia</label>
                <input type="text" name="nome_fantasia_laboratorios" placeholder="Nome Fantasia">
            </div>
        </div>
        
        <div class="three fields">
            <div class="six wide field">
                <label>CNPJ</label>
                <input type="text" class="cnpj" name="cnpj_laboratorios" placeholder="CNPJ">
            </div>
            
            <div class="five wide field">
                <label>Inscrição Estadual</label>
                <input type="text" name="inscricao_estadual_laboratorios" placeholder="Inscrição Estadual">
            </div>
            
            <div class="five wide field">
                <label>Área de Atuação</label>
                <input type="text" name="atuacao_laboratorios" placeholder="Atuação">
            </div>
        </div>
        
        <h3 class="ui header disabled">Informações de Endereço</h3>
        <div class="three fields">
            <div class="three wide field">
                <label>CEP</label>
                <input type="text" class="cep" name="cep_laboratorios" id="cep" placeholder="CEP">
            </div>
            
            <div class="eight wide field">
                <label>Endereço</label>
                <input type="text" name="endereco_laboratorios" id="endereco" placeholder="Endereço">
            </div>
            
            <div class="eight wide field">
                <label>Complemento</label>
                <input type="text" name="complemento_laboratorios" id="complemento" placeholder="Complemento">
            </div>
        </div>
        
        <div class="four fields">
            <div class="six wide field">
                <label>Bairro</label>
                <input type="text" name="bairro_laboratorios" id="bairro" placeholder="Bairro">
            </div>
            
            <div class="six wide field">
                <label>Cidade</label>
                <input type="text" name="cidade_laboratorios" id="cidade" placeholder="Cidade">
            </div>
            
            <div class="two wide field">
                <label>UF</label>
                <input type="text" name="uf_laboratorios" id="uf" placeholder="UF">
            </div>
            
            <div class="four wide field">
                <label>País</label>
                <input type="text" name="pais_laboratorios" placeholder="País" value="Brasil">
            </div>
        </div>
        
        <h3 class="ui header disabled">Informações de Contato</h3>
        <div class="four fields">
            <div class="three wide field">
                <label>Telefone</label>
                <input type="text" class="telefone" name="telefone_laboratorios" placeholder="(00) 0000-0000">
            </div>
            
            <div class="six wide field">
                <label>Celular</label>
                <div class="two fields">
                    <div class="three field">
                        <input type="text" class="celular" name="celular1_laboratorios" placeholder="(00) 00000-0000">
                    </div>
                    
                    <div class="field">
                        <input type="text" class="celular" name="celular2_laboratorios" placeholder="(00) 00000-0000">
                    </div>
                </div>
            </div>
            
            <div class="seven wide field">
                <label>Email</label>
                <input type="text" name="email_laboratorios" placeholder="ex: laboratorio@gmail.com">
            </div>
        </div>
        <div class="two fields">
            <div class="seven wide field">
                <label>Representante</label>
                <input type="text" name="nome_representante_laboratorios" placeholder="ex: representante@gmail.com">
            </div>
            
            <div class="seven wide field">
                <label>Celular</label>
                <input type="text" class="celular" name="celular_representante_laboratorios" placeholder="(00) 00000-0000">
            </div>
        </div>
        
        <h3 class="ui header disabled">Informações Bancárias Do Laboratório</h3>
        <div class="three fields">
            <div class="ten wide field">
                <label>Nome do Banco</label>
                <input type="text" name="banco_laboratorios" placeholder="Banco">
            </div>
            <div class="six wide field">
                <label>Agência</label>
                <input type="text" name="agencia_banco_laboratorios" placeholder="Agência">
            </div>
            <div class="six wide field">
                <label>Operação</label>
                <input type="text" name="operacao_banco_laboratorios" placeholder="Operação">
            </div>
        </div>
        <div class="three fields">
            <div class="six wide field">
                <label>Tipo da Conta</label>
                <input type="text" name="tipo_conta_banco_laboratorios" placeholder="Tipo da Conta">
            </div>
            
            <div class="six wide field">
                <label>Número da Conta</label>
                <input type="text" name="conta_banco_laboratorios" placeholder="Número da Conta">
            </div>
            
            <div class="six wide field">
                <label>Titular da Conta</label>
                <input type="text" name="favorecido_banco_laboratorios" placeholder="Titular">
            </div>
        </div>
        <div class="two fields">
            <div class="four wide field">
                    <label>Status do Laboratório</label>
                    <select class="ui fluid dropdown" name="status_laboratorios">
                        <option value="Ativo">Ativo</option>
                        <option value="Inativo">Inativo</option>
                    </select>
                    <script>$('select.dropdown').dropdown();</script>
            </div>
        </div>
        
        <div class="field">
            <label>Observações</label>
            <textarea rows="3" type="text" name="observacoes_laboratorios" placeholder="Observações"></textarea>
        </div>
        
        <button class="ui button teal" type="submit" name="cadastrar_laboratorios">Cadastrar Laboratório</button>
        <div class="ui error message"></div>
    </form>
</div>

<?php 
    function soNumero($str){
        return preg_replace('/[^0-9]/', '', $str);
    }
    if($POST){
        if(isset($POST['cadastrar_laboratorios'])){
            $Laboratorios->setRazao_social_laboratorios($POST['razao_social_laboratorios']);
            $Laboratorios->setNome_fantasia_laboratorios($POST['nome_fantasia_laboratorios']);
            $Laboratorios->setInscricao_estadual_laboratorios($POST['inscricao_estadual_laboratorios']);
            $Laboratorios->setCNPJ_laboratorios(soNumero($POST['cnpj_laboratorios']));
            $Laboratorios->setAtuacao_laboratorios($POST['atuacao_laboratorios']);
            $Laboratorios->setCep_laboratorios(soNumero($POST['cep_laboratorios']));
            $Laboratorios->setEndereco_laboratorios($POST['endereco_laboratorios']);
            $Laboratorios->setComplemento_laboratorios($POST['complemento_laboratorios']);
            $Laboratorios->setBairro_laboratorios($POST['bairro_laboratorios']);
            $Laboratorios->setCidade_laboratorios($POST['cidade_laboratorios']);
            $Laboratorios->setUf_laboratorios($POST['uf_laboratorios']);
            $Laboratorios->setPais_laboratorios($POST['pais_laboratorios']);
            $Laboratorios->setTelefone_laboratorios(soNumero($POST['telefone_laboratorios']));
            $Laboratorios->setCelular1_laboratorios(soNumero($POST['celular1_laboratorios']));
            $Laboratorios->setCelular2_laboratorios(soNumero($POST['celular2_laboratorios']));
            $Laboratorios->setEmail_laboratorios($POST['email_laboratorios']);
            $Laboratorios->setNome_representante_laboratorios($POST['nome_representante_laboratorios']);
            $Laboratorios->setCelular_representante_laboratorios(soNumero($POST['celular_representante_laboratorios']));
            $Laboratorios->setBanco_laboratorios($POST['banco_laboratorios']);
            $Laboratorios->setAgencia_banco_laboratorios($POST['agencia_banco_laboratorios']);
            $Laboratorios->setOperacao_banco_laboratorios($POST['operacao_banco_laboratorios']);
            $Laboratorios->setConta_banco_laboratorios($POST['conta_banco_laboratorios']);
            $Laboratorios->setTipo_conta_banco_laboratorios($POST['tipo_conta_banco_laboratorios']);
            $Laboratorios->setFavorecido_banco_laboratorios($POST['favorecido_banco_laboratorios']);
            $Laboratorios->setStatus_laboratorios($POST['status_laboratorios']);
            $Laboratorios->setObservacoes_laboratorios($POST['observacoes_laboratorios']);
            
            $exe = $LaboratoriosDAO->cadastrar_laboratorios($Laboratorios);
                if($exe == true){
                    echo '<script>toastr["success"]("Laboratório cadastrado!", "Sucesso")</script>';
                }else{
                    echo '<script>toastr["error"]("Cadastro não efetuado!", "Erro")</script>';
                }
        }
    }




