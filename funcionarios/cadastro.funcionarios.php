<div class="bread">
    <div class="ui breadcrumb">
        <i class="dashboard icon divider"></i>
        <a class="section" href="dashboard.php?p=dados-dashboard">Dashboard</a>
        <i class="caret right icon"></i>
        <div class="active section">Cadastro</div>  
    </div>
</div>
<div class="cadastro-funcionarios">
    <form class="ui form cadastro-funcionarios-form" method="POST">
        <h2 class="ui dividing header">Cadastro de Funcionários</h2>
        <h3 class="ui header disabled">Informações Pessoais</h3>
        <div class="three fields">
            <div class="ten wide field">
                <label>Nome Completo</label>
                <input type="text" name="nome_completo_funcionarios" placeholder="Nome Completo">
            </div>
            
            <div class="three wide field">
                <label>Data de Nascimento</label>
                <input type="text" class="data" name="data_nascimento_funcionarios" placeholder="Data de Nascimento">
            </div>
            
            <div class="three wide field">
                <label>Status do Funcionário</label>
                <select class="ui fluid dropdown" name="sexo_funcionarios">
                    <option value="Feminino">Feminino</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Outros">Outros</option>
                </select>
            </div>
        </div>
        
        <div class="three fields">
            <div class="seven wide field">
                <label>CPF</label>
                <input type="text" class="cpf" name="cpf_funcionarios" placeholder="CPF">
            </div>
            
            <div class="seven wide field">
                <label>RG</label>
                <input type="text" class="rg" name="rg_funcionarios" placeholder="RG">
            </div>
            
            <div class="three wide field">
                <label>Órgão Emissor</label>
                <input type="text" name="orgao_emissor_funcionarios" placeholder="Órgão Emissor">
            </div>
        </div>
        
        <h3 class="ui header disabled">Informações de Endereço</h3>
        <div class="three fields">
            <div class="three wide field">
                <label>CEP</label>
                <input type="text" class="cep" name="cep_funcionarios" placeholder="CEP">
            </div>
            
            <div class="eight wide field">
                <label>Endereço</label>
                <input type="text" name="endereco_funcionarios" placeholder="Endereço">
            </div>
            
            <div class="eight wide field">
                <label>Complemento</label>
                <input type="text" name="complemento_funcionarios" placeholder="Complemento">
            </div>
        </div>
        
        <div class="four fields">
            <div class="six wide field">
                <label>Bairro</label>
                <input type="text" name="bairro_funcionarios" placeholder="Bairro">
            </div>
            
            <div class="six wide field">
                <label>Cidade</label>
                <input type="text" name="cidade_funcionarios" placeholder="Cidade">
            </div>
            
            <div class="two wide field">
                <label>UF</label>
                <input type="text" name="uf_funcionarios" placeholder="UF">
            </div>
            
            <div class="four wide field">
                <label>País</label>
                <input type="text" name="pais_funcionarios" placeholder="País">
            </div>
        </div>
        
        <h3 class="ui header disabled">Informações de Contato</h3>
        <div class="four fields">
            <div class="three wide field">
                <label>Telefone</label>
                <input type="text" class="telefone" name="telefone_funcionarios" placeholder="(00) 0000-0000">
            </div>
            
            <div class="six wide field">
                <label>Celular</label>
                <div class="two fields">
                    <div class="three field">
                        <input type="text" class="celular" name="celular1_funcionarios" placeholder="(00) 00000-0000">
                    </div>
                    
                    <div class="field">
                        <input type="text" class="celular" name="celular2_funcionarios" placeholder="(00) 00000-0000">
                    </div>
                </div>
            </div>
            
            <div class="seven wide field">
                <label>Email</label>
                <input type="text" name="email_funcionarios" placeholder="ex: funcionario@gmail.com">
            </div>
        </div>
        
        <h3 class="ui header disabled">Informações Contratuais do Funcionário com a Clínica</h3>
        <div class="two fields">
            <div class="ten wide field">
                <label>Função</label>
                <input type="text" name="cargo_funcionarios" placeholder="Função">
            </div>
            <div class="six wide field">
                <label>Salário</label>
                <input type="text" name="salario_funcionarios" placeholder="Salário">
            </div>
        </div>
        <div class="three fields">
            <div class="six wide field">
                <label>Data de Admissão</label>
                <input type="text" class="data" name="data_admissao_funcionarios" placeholder="Data de Admissão">
            </div>
            
            <div class="six wide field">
                <label>Data de Demissão</label>
                <input type="text" class="data" name="data_demissao_funcionarios" placeholder="Data de Demissão">
            </div>
            
            <div class="six wide field">
                <label>Status do Funcionário</label>
                <select class="ui fluid dropdown">
                    <option value="Ativo">Ativo</option>
                    <option value="Inativo">Inativo</option>
                </select>
                <script>$('select.dropdown').dropdown();</script>
            </div>
        </div>
        <button class="ui button teal" type="submit" name="cadastrar_funcionarios">Cadastrar Funcionário</button>
        <div class="ui error message"></div>
    </form>
</div>

<?php 
    function soNumero($str){
        return preg_replace('/[^0-9]/', '', $str);
    }
    if($POST){
        if(isset($POST['cadastrar_funcionarios'])){
            $Funcionarios->setNome_completo_funcionarios($POST['nome_completo_funcionarios']);
            $Funcionarios->setData_nascimento_funcionarios(soNumero($POST['data_nascimento_funcionarios']));
            $Funcionarios->setSexo_funcionarios($POST['sexo_funcionarios']);
            $Funcionarios->setCpf_funcionarios(soNumero($POST['cpf_funcionarios']));
            $Funcionarios->setRg_funcionarios(soNumero($POST['rg_funcionarios']));
            $Funcionarios->setOrgao_emissor_funcionarios($POST['orgao_emissor_funcionarios']);
            $Funcionarios->setCep_funcionarios(soNumero($POST['cep_funcionarios']));
            $Funcionarios->setEndereco_funcionarios($POST['endereco_funcionarios']);
            $Funcionarios->setComplemento_funcionarios($POST['complemento_funcionarios']);
            $Funcionarios->setBairro_funcionarios($POST['bairro_funcionarios']);
            $Funcionarios->setCidade_funcionarios($POST['cidade_funcionarios']);
            $Funcionarios->setUf_funcionarios($POST['uf_funcionarios']);
            $Funcionarios->setPais_funcionarios($POST['pais_funcionarios']);
            $Funcionarios->setTelefone_funcionarios(soNumero($POST['telefone_funcionarios']));
            $Funcionarios->setCelular1_funcionarios(soNumero($POST['celular1_funcionarios']));
            $Funcionarios->setCelular2_funcionarios(soNumero($POST['celular2_funcionarios']));
            $Funcionarios->setEmail_funcionarios($POST['email_funcionarios']);
            $Funcionarios->setCargo_funcionarios($POST['cargo_funcionarios']);
            $Funcionarios->setSalario_funcionarios($POST['salario_funcionarios']);
            $Funcionarios->setData_admissao_funcionarios(soNumero($POST['data_admissao_funcionarios']));
            $Funcionarios->setData_demissao_funcionarios(soNumero($POST['data_demissao_funcionarios']));
            $Funcionarios->setStatus_funcionarios($POST['status_funcionarios']);
            $Funcionarios->setNome_usuarios_funcionarios($POST['nome_usuarios_funcionarios']);
            
            $exe = $FuncionariosDAO->cadastrar_funcionarios($Funcionarios);
                if($exe == true){
                    echo '<script>toastr["success"]("Funcionário cadastrado!", "Sucesso")</script>';
                }else{
                    echo '<script>toastr["error"]("Cadastro não efetuado!", "Erro")</script>';
                }
        }
    }

