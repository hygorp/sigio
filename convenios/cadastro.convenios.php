<div class="bread">
    <div class="ui breadcrumb">
        <i class="dashboard icon divider"></i>
        <a class="section" href="dashboard.php?p=dados-dashboard">Dashboard</a>
        <i class="caret right icon"></i>
        <div class="active section">Cadastro</div>  
    </div>
</div>
<div class="cadastro-convenios">
    <form class="ui form cadastro-convenios-form" method="POST">
        <h2 class="ui dividing header">Cadastro de Convênios</h2>
        <h3 class="ui header disabled">Informações da Empresa</h3>
        <div class="two fields">
            <div class="eight wide field">
                <label>Razão Social</label>
                <input type="text" name="razao_social_convenios" placeholder="Razão Social">
            </div>
            
            <div class="eight wide field">
                <label>Nome Fantasia</label>
                <input type="text" name="nome_fantasia_convenios" placeholder="Nome Fantasia">
            </div>
        </div>
        
        <div class="three fields">
            <div class="six wide field">
                <label>CNPJ</label>
                <input type="text" class="cnpj" name="cnpj_convenios" placeholder="CNPJ">
            </div>
            
            <div class="five wide field">
                <label>Inscrição Estadual</label>
                <input type="text" name="inscricao_estadual_convenios" placeholder="Inscrição Estadual">
            </div>
        </div>
        
        <h3 class="ui header disabled">Informações de Endereço</h3>
        <div class="three fields">
            <div class="three wide field">
                <label>CEP</label>
                <input type="text" class="cep" name="cep_convenios" id="cep" placeholder="CEP">
            </div>
            
            <div class="eight wide field">
                <label>Endereço</label>
                <input type="text" name="endereco_convenios" id="endereco" placeholder="Endereço">
            </div>
            
            <div class="eight wide field">
                <label>Complemento</label>
                <input type="text" name="complemento_convenios" id="complemento" placeholder="Complemento">
            </div>
        </div>
        
        <div class="four fields">
            <div class="six wide field">
                <label>Bairro</label>
                <input type="text" name="bairro_convenios" id="bairro" placeholder="Bairro">
            </div>
            
            <div class="six wide field">
                <label>Cidade</label>
                <input type="text" name="cidade_convenios" id="cidade" placeholder="Cidade">
            </div>
            
            <div class="two wide field">
                <label>UF</label>
                <input type="text" name="uf_convenios" id="uf" placeholder="UF">
            </div>
            
            <div class="four wide field">
                <label>País</label>
                <input type="text" name="pais_convenios" placeholder="País" value="Brasil">
            </div>
        </div>
        
        <h3 class="ui header disabled">Informações de Contato</h3>
        <div class="four fields">
            <div class="three wide field">
                <label>Telefone</label>
                <input type="text" class="telefone" name="telefone_convenios" placeholder="(00) 0000-0000">
            </div>
            
            <div class="six wide field">
                <label>Celular</label>
                <div class="two fields">
                    <div class="three field">
                        <input type="text" class="celular" name="celular1_convenios" placeholder="(00) 00000-0000">
                    </div>
                    
                    <div class="field">
                        <input type="text" class="celular" name="celular2_convenios" placeholder="(00) 00000-0000">
                    </div>
                </div>
            </div>
            
            <div class="seven wide field">
                <label>Email</label>
                <input type="text" name="email_convenios" placeholder="ex: convenio@gmail.com">
            </div>
        </div>
        <div class="two fields">
            <div class="seven wide field">
                <label>Nome do Representante</label>
                <input type="text" name="nome_representante_convenios" placeholder="Nome do Representante">
            </div>
            
            <div class="seven wide field">
                <label>Celular</label>
                <input type="text" class="celular" name="celular_representante_convenios" placeholder="(00) 00000-0000">
            </div>
        </div>
        
        <h3 class="ui header disabled">Informações Bancárias Do Convênio</h3>
        <div class="three fields">
            <div class="ten wide field">
                <label>Nome do Banco</label>
                <input type="text" name="banco_convenios" placeholder="Banco">
            </div>
            <div class="six wide field">
                <label>Agência</label>
                <input type="text" name="agencia_banco_convenios" placeholder="Agência">
            </div>
            <div class="six wide field">
                <label>Operação</label>
                <input type="text" name="operacao_banco_convenios" placeholder="Operação">
            </div>
        </div>
        <div class="three fields">
            <div class="six wide field">
                <label>Tipo da Conta</label>
                <input type="text" name="tipo_conta_banco_convenios" placeholder="Tipo da Conta">
            </div>
            
            <div class="six wide field">
                <label>Número da Conta</label>
                <input type="text" name="conta_banco_convenios" placeholder="Número da Conta">
            </div>
            
            <div class="six wide field">
                <label>Titular da Conta</label>
                <input type="text" name="favorecido_banco_convenios" placeholder="Titular">
            </div>
        </div>
        <div class="two fields">
            <div class="four wide field">
                    <label>Status do Convênio</label>
                    <select class="ui fluid dropdown" name="status_convenios">
                        <option value="Ativo">Ativo</option>
                        <option value="Inativo">Inativo</option>
                    </select>
                    <script>$('select.dropdown').dropdown();</script>
            </div>
        </div>
        
        <div class="field">
            <label>Observações</label>
            <textarea rows="3" type="text" name="observacoes_convenios" placeholder="Observações"></textarea>
        </div>
        
        <button class="ui button teal" type="submit" name="cadastrar_convenios">Cadastrar Convênio</button>
        <div class="ui error message"></div>
    </form>
</div>

<?php 
    function soNumero($str){
        return preg_replace('/[^0-9]/', '', $str);
    }
    if($POST){
        if(isset($POST['cadastrar_convenios'])){
            $Convenios->setRazao_social_convenios($POST['razao_social_convenios']);
            $Convenios->setNome_fantasia_convenios($POST['nome_fantasia_convenios']);
            $Convenios->setInscricao_estadual_convenios($POST['inscricao_estadual_convenios']);
            $Convenios->setCNPJ_convenios(soNumero($POST['cnpj_convenios']));
            $Convenios->setCep_convenios(soNumero($POST['cep_convenios']));
            $Convenios->setEndereco_convenios($POST['endereco_convenios']);
            $Convenios->setComplemento_convenios($POST['complemento_convenios']);
            $Convenios->setBairro_convenios($POST['bairro_convenios']);
            $Convenios->setCidade_convenios($POST['cidade_convenios']);
            $Convenios->setUf_convenios($POST['uf_convenios']);
            $Convenios->setPais_convenios($POST['pais_convenios']);
            $Convenios->setTelefone_convenios(soNumero($POST['telefone_convenios']));
            $Convenios->setCelular1_convenios(soNumero($POST['celular1_convenios']));
            $Convenios->setCelular2_convenios(soNumero($POST['celular2_convenios']));
            $Convenios->setEmail_convenios($POST['email_convenios']);
            $Convenios->setNome_representante_convenios($POST['nome_representante_convenios']);
            $Convenios->setCelular_representante_convenios(soNumero($POST['celular_representante_convenios']));
            $Convenios->setBanco_convenios($POST['banco_convenios']);
            $Convenios->setAgencia_banco_convenios($POST['agencia_banco_convenios']);
            $Convenios->setOperacao_banco_convenios($POST['operacao_banco_convenios']);
            $Convenios->setConta_banco_convenios($POST['conta_banco_convenios']);
            $Convenios->setTipo_conta_banco_convenios($POST['tipo_conta_banco_convenios']);
            $Convenios->setFavorecido_banco_convenios($POST['favorecido_banco_convenios']);
            $Convenios->setStatus_convenios($POST['status_convenios']);
            $Convenios->setObservacoes_convenios($POST['observacoes_convenios']);
            
            $exe = $ConveniosDAO->cadastrar_convenios($Convenios);
            if($exe == true){
                echo '<script>toastr["success"]("Convênio cadastrado!", "Sucesso")</script>';
            }else{
                echo '<script>toastr["error"]("Cadastro não efetuado!", "Erro")</script>';
            }
        }
    }






