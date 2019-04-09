<div class="bread">
    <div class="ui breadcrumb">
        <i class="dashboard icon divider"></i>
        <a class="section" href="dashboard.php?p=dados-dashboard">Dashboard</a>
        <i class="users icon divider"></i>
        <div class="active section">Cadastro</div>  
    </div>
</div>
<div class="cadastro-funcionarios">
    <form class="ui form cadastro-funcionarios-form" method="POST">
        <h2 class="ui dividing header">Cadastro de Funcionários</h2>
        <h3 class="ui header disabled">Informações Pessoais</h3>
        <div class="two fields">
            <div class="fourteen wide field">
                <label>Nome Completo</label>
                <input type="text" name="nome_completo_funcionarios" placeholder="Nome Completo">
            </div>
            
            <div class="three wide field">
                <label>Data de Nascimento</label>
                <input type="text" name="data_nascimento_funcionarios" placeholder="Data de Nascimento">
            </div>
        </div>
        
        <div class="three fields">
            <div class="seven wide field">
                <label>CPF</label>
                <input type="text" name="cpf_funcionarios" placeholder="CPF">
            </div>
            
            <div class="seven wide field">
                <label>RG</label>
                <input type="text" name="rg_funcionarios" placeholder="RG">
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
                <input type="text" name="cep_funcionarios" placeholder="CEP">
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
                <input type="text" name="telefone_funcionarios" placeholder="(00) 0000-0000">
            </div>
            
            <div class="six wide field">
                <label>Celular</label>
                <div class="two fields">
                    <div class="three field">
                        <input type="text" name="celular1_funcionarios" placeholder="(00) 00000-0000">
                    </div>
                    
                    <div class="field">
                        <input type="text" name="celular2_funcionarios" placeholder="(00) 00000-0000">
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
                <input type="text" name="data_admissao_funcionarios" placeholder="Data de Admissão">
            </div>
            
            <div class="six wide field">
                <label>Data de Demissão</label>
                <input type="text" name="data_demissao_funcionarios" placeholder="Data de Demissão">
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
    if($POST){
        if(isset($POST['cadastrar_funcionarios'])){
            $Funcionarios->setNome_completo_funcionarios($POST['nome_completo_funcionarios']);
            $Funcionarios->setData_nascimento_funcionarios($POST['data_nascimento_funcionarios']);
            $Funcionarios->setCpf_funcionarios($POST['cpf_funcionarios']);
            $Funcionarios->setRg_funcionarios($POST['rg_funcionarios']);
            $Funcionarios->setOrgao_emissor_funcionarios($POST['orgao_emissor_funcionarios']);
            $Funcionarios->setCep_funcionarios($POST['cep_funcionarios']);
            $Funcionarios->setEndereco_funcionarios($POST['endereco_funcionarios']);
            $Funcionarios->setComplemento_funcionarios($POST['complemento_funcionarios']);
            $Funcionarios->setBairro_funcionarios($POST['bairro_funcionarios']);
            $Funcionarios->setCidade_funcionarios($POST['cidade_funcionarios']);
            $Funcionarios->setUf_funcionarios($POST['uf_funcionarios']);
            $Funcionarios->setPais_funcionarios($POST['pais_funcionarios']);
            $Funcionarios->setTelefone_funcionarios($POST['telefone_funcionarios']);
            $Funcionarios->setCelular1_funcionarios($POST['celular1_funcionarios']);
            $Funcionarios->setCelular2_funcionarios($POST['celular2_funcionarios']);
            $Funcionarios->setEmail_funcionarios($POST['email_funcionarios']);
            $Funcionarios->setCargo_funcionarios($POST['cargo_funcionarios']);
            $Funcionarios->setSalario_funcionarios($POST['salario_funcionarios']);
            $Funcionarios->setData_admissao_funcionarios($POST['data_admissao_funcionarios']);
            $Funcionarios->setData_demissao_funcionarios($POST['data_demissao_funcionarios']);
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

