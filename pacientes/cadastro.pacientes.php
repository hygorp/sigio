<div class="bread">
    <div class="ui breadcrumb">
        <i class="dashboard icon divider"></i>
        <a class="section" href="dashboard.php?p=dados-dashboard">Dashboard</a>
        <i class="users icon divider"></i>
        <div class="active section">Cadastro</div>  
    </div>
</div>
<div class="cadastro-pacientes">
    <form class="ui form cadastro-pacientes-form" method="POST">
        <h2 class="ui dividing header">Cadastro de Pacientes</h2>
        <h3 class="ui header disabled">Informações Pessoais</h3>
        <div class="two fields">
            <div class="fourteen wide field">
                <label>Nome Completo</label>
                <input type="text" name="nome_completo_pacientes" placeholder="Nome Completo">
            </div>
            
            <div class="three wide field">
                <label>Data de Nascimento</label>
                <input type="text" class="data" name="data_nascimento_pacientes" placeholder="Data de Nascimento">
            </div>
        </div>
        
        <div class="three fields">
            <div class="seven wide field">
                <label>CPF</label>
                <input type="text" class="cpf" name="cpf_pacientes" placeholder="CPF">
            </div>
            
            <div class="seven wide field">
                <label>RG</label>
                <input type="text" class="rg" name="rg_pacientes" placeholder="RG">
            </div>
            
            <div class="three wide field">
                <label>Órgão Emissor</label>
                <input type="text" name="orgao_emissor_pacientes" placeholder="Órgão Emissor">
            </div>
        </div>
        
        <h3 class="ui header disabled">Informações de Endereço</h3>
        <div class="three fields">
            <div class="three wide field">
                <label>CEP</label>
                <input type="text" class="cep" name="cep_pacientes" placeholder="CEP">
            </div>
            
            <div class="eight wide field">
                <label>Endereço</label>
                <input type="text" name="endereco_pacientes" placeholder="Endereço">
            </div>
            
            <div class="eight wide field">
                <label>Complemento</label>
                <input type="text" name="complemento_pacientes" placeholder="Complemento">
            </div>
        </div>
        
        <div class="four fields">
            <div class="six wide field">
                <label>Bairro</label>
                <input type="text" name="bairro_pacientes" placeholder="Bairro">
            </div>
            
            <div class="six wide field">
                <label>Cidade</label>
                <input type="text" name="cidade_pacientes" placeholder="Cidade">
            </div>
            
            <div class="two wide field">
                <label>UF</label>
                <input type="text" name="uf_pacientes" placeholder="UF">
            </div>
            
            <div class="four wide field">
                <label>País</label>
                <input type="text" name="pais_pacientes" placeholder="País">
            </div>
        </div>
        
        <h3 class="ui header disabled">Informações de Contato</h3>
        <div class="four fields">
            <div class="three wide field">
                <label>Telefone</label>
                <input type="text" class="telefone" name="telefone_pacientes" placeholder="(00) 0000-0000">
            </div>
            
            <div class="six wide field">
                <label>Celular</label>
                <div class="two fields">
                    <div class="three field">
                        <input type="text" class="celular" name="celular1_pacientes" placeholder="(00) 00000-0000">
                    </div>
                    
                    <div class="field">
                        <input type="text" class="celular" name="celular2_pacientes" placeholder="(00) 00000-0000">
                    </div>
                </div>
            </div>
            
            <div class="seven wide field">
                <label>Email</label>
                <input type="text" name="email_pacientes" placeholder="ex: paciente@gmail.com">
            </div>
        </div>
            
        <h3 class="ui header disabled">Informações de Convênios</h3>
        <div class="two fields">
            <div class="four wide field">
                <label>ID do Convênio</label>
                <input type="text" name="id_convenios_pacientes" placeholder="ID do Convênio">
            </div>
            <div class="eight wide field">
                <label>Carteira Convênio</label>
                <input type="text" name="carteira_convenio_pacientes" placeholder="Carteira Convênio">
            </div>
        </div>
        
        <div class="two fields">
            <div class="eight wide field">
                <label>Titular do Convênio</label>
                <input type="text" name="titular_convenio_pacientes" placeholder="Titular do Convênio">
            </div>
            <div class="eight wide field">
                <label>Tipo de Plano do Convênio</label>
                <input type="text" name="tipo_plano_convenio_pacientes" placeholder="Tipo de Plano do Convênio">
            </div>
            
        </div>
        
        <h3 class="ui header disabled">Finalizando</h3>
        <div class="two fields">
            <div class="four wide field">
                <label>Data de Cadastro</label>
                <input type="text" class="data" name="data_cadastro_pacientes" placeholder="Data de Cadastro">
            </div>
            
            <div class="four wide field">
                <label>Status do Paciente</label>
                <select class="ui fluid dropdown" name="status_pacientes">
                    <option value="Ativo">Ativo</option>
                    <option value="Inativo">Inativo</option>
                </select>
                <script>$('select.dropdown').dropdown();</script>
            </div>
        </div>
        <button class="ui button teal" type="submit" name="cadastrar_pacientes">Cadastrar Paciente</button>
        <div class="ui error message"></div>
    </form>
</div>

<?php 
    function soNumero($str){
        return preg_replace('/[^0-9]/', '', $str);
    }
    if($POST){
        if(isset($POST['cadastrar_pacientes'])){
            $Pacientes->setNome_completo_pacientes($POST['nome_completo_pacientes']);
            $Pacientes->setData_nascimento_pacientes(soNumero($POST['data_nascimento_pacientes']));
            $Pacientes->setCpf_pacientes(soNumero($POST['cpf_pacientes']));
            $Pacientes->setRg_pacientes(soNumero($POST['rg_pacientes']));
            $Pacientes->setOrgao_emissor_pacientes($POST['orgao_emissor_pacientes']);
            $Pacientes->setCep_pacientes(soNumero($POST['cep_pacientes']));
            $Pacientes->setEndereco_pacientes($POST['endereco_pacientes']);
            $Pacientes->setComplemento_pacientes($POST['complemento_pacientes']);
            $Pacientes->setBairro_pacientes($POST['bairro_pacientes']);
            $Pacientes->setCidade_pacientes($POST['cidade_pacientes']);
            $Pacientes->setUf_pacientes($POST['uf_pacientes']);
            $Pacientes->setPais_pacientes($POST['pais_pacientes']);
            $Pacientes->setTelefone_pacientes(soNumero($POST['telefone_pacientes']));
            $Pacientes->setCelular1_pacientes(soNumero($POST['celular1_pacientes']));
            $Pacientes->setCelular2_pacientes(soNumero($POST['celular2_pacientes']));
            $Pacientes->setEmail_pacientes($POST['email_pacientes']);
            $Pacientes->setStatus_pacientes($POST['status_pacientes']);
            $Pacientes->setCarteira_convenio_pacientes($POST['carteira_convenio_pacientes']);
            $Pacientes->setTitular_convenio_pacientes($POST['titular_convenio_pacientes']);
            $Pacientes->setTipo_plano_convenio_pacientes($POST['tipo_plano_convenio_pacientes']);
            $Pacientes->setData_cadastro_pacientes(soNumero($POST['data_cadastro_pacientes']));
            $Pacientes->setId_convenios_pacientes($POST['id_convenios_pacientes']);
            
            $exe = $PacientesDAO->cadastrar_pacientes($Pacientes);
                if($exe == true){
                    echo '<script>toastr["success"]("Paciente cadastrado!", "Sucesso")</script>';
                }else{
                    echo '<script>toastr["error"]("Cadastro não efetuado!", "Erro")</script>';
                }
        }
    }