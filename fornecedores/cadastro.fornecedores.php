<div class="bread">
    <div class="ui breadcrumb">
        <i class="dashboard icon divider"></i>
        <a class="section" href="dashboard.php?p=dados-dashboard">Dashboard</a>
        <i class="caret right icon"></i>
        <div class="active section">Cadastro</div>  
    </div>
</div>
<div class="cadastro-fornecedores">
    <form class="ui form cadastro-fornecedores-form" method="POST">
        <h2 class="ui dividing header">Cadastro de Fornecedores</h2>
        <h3 class="ui header disabled">Informações da Empresa</h3>
        <div class="two fields">
            <div class="eight wide field">
                <label>Razão Social</label>
                <input type="text" name="razao_social_fornecedores" placeholder="Razão Social">
            </div>
            
            <div class="eight wide field">
                <label>Nome Fantasia</label>
                <input type="text" name="nome_fantasia_fornecedores" placeholder="Nome Fantasia">
            </div>
        </div>
        
        <div class="three fields">
            <div class="six wide field">
                <label>CNPJ</label>
                <input type="text" class="cnpj" name="cnpj_fornecedores" placeholder="CNPJ">
            </div>
            
            <div class="five wide field">
                <label>Inscrição Estadual</label>
                <input type="text" name="inscricao_estadual_fornecedores" placeholder="Inscrição Estadual">
            </div>
            
            <div class="five wide field">
                <label>Área de Atuação</label>
                <input type="text" name="atuacao_fornecedores" placeholder="Atuação">
            </div>
        </div>
        
        <h3 class="ui header disabled">Informações de Endereço</h3>
        <div class="three fields">
            <div class="three wide field">
                <label>CEP</label>
                <input type="text" class="cep" name="cep_fornecedores" id="cep" placeholder="CEP">
            </div>
            
            <div class="eight wide field">
                <label>Endereço</label>
                <input type="text" name="endereco_fornecedores" id="endereco" placeholder="Endereço">
            </div>
            
            <div class="eight wide field">
                <label>Complemento</label>
                <input type="text" name="complemento_fornecedores" id="complemento" placeholder="Complemento">
            </div>
        </div>
        
        <div class="four fields">
            <div class="six wide field">
                <label>Bairro</label>
                <input type="text" name="bairro_fornecedores" id="bairro" placeholder="Bairro">
            </div>
            
            <div class="six wide field">
                <label>Cidade</label>
                <input type="text" name="cidade_fornecedores" id="cidade" placeholder="Cidade">
            </div>
            
            <div class="two wide field">
                <label>UF</label>
                <input type="text" name="uf_fornecedores" id="uf" placeholder="UF">
            </div>
            
            <div class="four wide field">
                <label>País</label>
                <input type="text" name="pais_fornecedores" placeholder="País" value="Brasil">
            </div>
        </div>
        
        <h3 class="ui header disabled">Informações de Contato</h3>
        <div class="four fields">
            <div class="three wide field">
                <label>Telefone</label>
                <input type="text" class="telefone" name="telefone_fornecedores" placeholder="(00) 0000-0000">
            </div>
            
            <div class="six wide field">
                <label>Celular</label>
                <div class="two fields">
                    <div class="three field">
                        <input type="text" class="celular" name="celular1_fornecedores" placeholder="(00) 00000-0000">
                    </div>
                    
                    <div class="field">
                        <input type="text" class="celular" name="celular2_fornecedores" placeholder="(00) 00000-0000">
                    </div>
                </div>
            </div>
            
            <div class="seven wide field">
                <label>Email</label>
                <input type="text" name="email_fornecedores" placeholder="ex: fornecedor@gmail.com">
            </div>
        </div>
        <div class="two fields">
            <div class="seven wide field">
                <label>Representante</label>
                <input type="text" name="nome_representante_fornecedores" placeholder="ex: representante@gmail.com">
            </div>
            
            <div class="seven wide field">
                <label>Celular</label>
                <input type="text" class="celular" name="celular_representante_fornecedores" placeholder="(00) 00000-0000">
            </div>
        </div>
        
        <h3 class="ui header disabled">Informações Bancárias Do Fornecedor</h3>
        <div class="three fields">
            <div class="ten wide field">
                <label>Nome do Banco</label>
                <input type="text" name="banco_fornecedores" placeholder="Banco">
            </div>
            <div class="six wide field">
                <label>Agência</label>
                <input type="text" name="agencia_banco_fornecedores" placeholder="Agência">
            </div>
            <div class="six wide field">
                <label>Operação</label>
                <input type="text" name="operacao_banco_fornecedores" placeholder="Operação">
            </div>
        </div>
        <div class="three fields">
            <div class="six wide field">
                <label>Tipo da Conta</label>
                <input type="text" name="tipo_conta_banco_fornecedores" placeholder="Tipo da Conta">
            </div>
            
            <div class="six wide field">
                <label>Número da Conta</label>
                <input type="text" name="conta_banco_fornecedores" placeholder="Número da Conta">
            </div>
            
            <div class="six wide field">
                <label>Titular da Conta</label>
                <input type="text" name="favorecido_banco_fornecedores" placeholder="Titular">
            </div>
        </div>
        
        <div class="two fields">
            <div class="four wide field">
                    <label>Status do Fornecedor</label>
                    <select class="ui fluid dropdown" name="status_fornecedores">
                        <option value="Ativo">Ativo</option>
                        <option value="Inativo">Inativo</option>
                    </select>
                    <script>$('select.dropdown').dropdown();</script>
            </div>
        </div>
        
        <div class="field">
            <label>Observações</label>
            <textarea rows="3" type="text" name="observacoes_fornecedores" placeholder="Observações"></textarea>
        </div>
        
        <button class="ui button teal" type="submit" name="cadastrar_fornecedores">Cadastrar Fornecedor</button>
        <div class="ui error message"></div>
    </form>
</div>

<?php 
    function soNumero($str){
        return preg_replace('/[^0-9]/', '', $str);
    }
    if($POST){
        if(isset($POST['cadastrar_fornecedores'])){
            $Fornecedores->setRazao_social_fornecedores($POST['razao_social_fornecedores']);
            $Fornecedores->setNome_fantasia_fornecedores($POST['nome_fantasia_fornecedores']);
            $Fornecedores->setInscricao_estadual_fornecedores($POST['inscricao_estadual_fornecedores']);
            $Fornecedores->setCNPJ_fornecedores(soNumero($POST['cnpj_fornecedores']));
            $Fornecedores->setAtuacao_fornecedores($POST['atuacao_fornecedores']);
            $Fornecedores->setCep_fornecedores(soNumero($POST['cep_fornecedores']));
            $Fornecedores->setEndereco_fornecedores($POST['endereco_fornecedores']);
            $Fornecedores->setComplemento_fornecedores($POST['complemento_fornecedores']);
            $Fornecedores->setBairro_fornecedores($POST['bairro_fornecedores']);
            $Fornecedores->setCidade_fornecedores($POST['cidade_fornecedores']);
            $Fornecedores->setUf_fornecedores($POST['uf_fornecedores']);
            $Fornecedores->setPais_fornecedores($POST['pais_fornecedores']);
            $Fornecedores->setTelefone_fornecedores(soNumero($POST['telefone_fornecedores']));
            $Fornecedores->setCelular1_fornecedores(soNumero($POST['celular1_fornecedores']));
            $Fornecedores->setCelular2_fornecedores(soNumero($POST['celular2_fornecedores']));
            $Fornecedores->setEmail_fornecedores($POST['email_fornecedores']);
            $Fornecedores->setNome_representante_fornecedores($POST['nome_representante_fornecedores']);
            $Fornecedores->setCelular_representante_fornecedores(soNumero($POST['celular_representante_fornecedores']));
            $Fornecedores->setBanco_fornecedores($POST['banco_fornecedores']);
            $Fornecedores->setAgencia_banco_fornecedores($POST['agencia_banco_fornecedores']);
            $Fornecedores->setOperacao_banco_fornecedores($POST['operacao_banco_fornecedores']);
            $Fornecedores->setConta_banco_fornecedores($POST['conta_banco_fornecedores']);
            $Fornecedores->setTipo_conta_banco_fornecedores($POST['tipo_conta_banco_fornecedores']);
            $Fornecedores->setFavorecido_banco_fornecedores($POST['favorecido_banco_fornecedores']);
            $Fornecedores->setStatus_fornecedores($POST['status_fornecedores']);
            $Fornecedores->setObservacoes_fornecedores($POST['observacoes_fornecedores']);
            
            $exe = $FornecedoresDAO->cadastrar_fornecedores($Fornecedores);
                if($exe == true){
                    echo '<script>toastr["success"]("Fornecedor cadastrado!", "Sucesso")</script>';
                }else{
                    echo '<script>toastr["error"]("Cadastro não efetuado!", "Erro")</script>';
                }
        }
    }



