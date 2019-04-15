<div class="bread">
    <div class="ui breadcrumb">
        <i class="dashboard icon divider"></i>
        <a class="section" href="dashboard.php?p=dados-dashboard">Dashboard</a>
        <i class="caret right icon"></i>
        <div class="active section">Cadastro</div>  
    </div>
</div>
<div class="cadastro-dentistas">
    <form class="ui form cadastro-dentistas-form" method="POST">
        <h2 class="ui dividing header">Cadastro de Dentistas</h2>
        <h3 class="ui header disabled">Informações Pessoais</h3>
        <div class="three fields">
            <div class="eleven wide field">
                <label>Nome Completo</label>
                <input type="text" name="nome_completo_dentistas" placeholder="Nome Completo">
            </div>
            
            <div class="three wide field">
                <label>Data de Nascimento</label>
                <input type="text" class="data" name="data_nascimento_dentistas" placeholder="Data de Nascimento">
            </div>
            
            <div class="three wide field">
                <label>Sexo</label>
                <select class="ui fluid dropdown" name="sexo_dentistas">
                    <option value="Feminino">Feminino</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Outros">Outros</option>
                </select>
            </div>
        </div>
        
        <div class="three fields">
            <div class="seven wide field">
                <label>CPF</label>
                <input type="text" class="cpf" name="cpf_dentistas" placeholder="CPF">
            </div>
            
            <div class="seven wide field">
                <label>RG</label>
                <input type="text" class="rg" name="rg_dentistas" placeholder="RG">
            </div>
            
            <div class="three wide field">
                <label>Órgão Emissor</label>
                <input type="text" name="orgao_emissor_dentistas" placeholder="Órgão Emissor">
            </div>
        </div>
        
        <h3 class="ui header disabled">Informações de Endereço</h3>
        <div class="three fields">
            <div class="three wide field">
                <label>CEP</label>
                <input type="text" class="cep" name="cep_dentistas" placeholder="CEP">
            </div>
            
            <div class="eight wide field">
                <label>Endereço</label>
                <input type="text" name="endereco_dentistas" placeholder="Endereço">
            </div>
            
            <div class="eight wide field">
                <label>Complemento</label>
                <input type="text" name="complemento_dentistas" placeholder="Complemento">
            </div>
        </div>
        
        <div class="four fields">
            <div class="six wide field">
                <label>Bairro</label>
                <input type="text" name="bairro_dentistas" placeholder="Bairro">
            </div>
            
            <div class="six wide field">
                <label>Cidade</label>
                <input type="text" name="cidade_dentistas" placeholder="Cidade">
            </div>
            
            <div class="two wide field">
                <label>UF</label>
                <input type="text" name="uf_dentistas" placeholder="UF">
            </div>
            
            <div class="four wide field">
                <label>País</label>
                <input type="text" name="pais_dentistas" placeholder="País">
            </div>
        </div>
        
        <h3 class="ui header disabled">Informações de Contato</h3>
        <div class="four fields">
            <div class="three wide field">
                <label>Telefone</label>
                <input type="text" class="telefone" name="telefone_dentistas" placeholder="(00) 0000-0000">
            </div>
            
            <div class="six wide field">
                <label>Celular</label>
                <div class="two fields">
                    <div class="three field">
                        <input type="text" class="celular" name="celular1_dentistas" placeholder="(00) 00000-0000">
                    </div>
                    
                    <div class="field">
                        <input type="text" class="celular" name="celular2_dentistas" placeholder="(00) 00000-0000">
                    </div>
                </div>
            </div>
            
            <div class="seven wide field">
                <label>Email</label>
                <input type="text" name="email_dentistas" placeholder="ex: dentista@gmail.com">
            </div>
        </div>
        
        <h3 class="ui header disabled">Especializações do Dentista</h3>
        <div class="three fields">
            <div class="six wide field">
                <label>Especialidade 01</label>
                <select class="ui fluid dropdown" name="especialidade1_dentistas">
                    <option value="" class="disabled">Selecione a Especialidade</option>
                    <option value="Cirurgia e Traumatologia Buco Maxilo Faciais">Cirurgia e Traumatologia Buco Maxilo Faciais</option>
                    <option value="Clínica Geral">Clínica Geral</option>
                    <option value="Dentistica">Dentistica</option> 
                    <option value="Dentistica Restauradora">Dentistica Restauradora</option> 
                    <option value="Disfuncao Temporo-Mandibular e Dor-Orofacial">Disfuncao Temporo-Mandibular e Dor-Orofacial</option> 
                    <option value="Endodontia">Endodontia</option> 
                    <option value="Estomatologia">Estomatologia</option> 
                    <option value="Implantodontia">Implantodontia</option> 
                    <option value="Odontologia do Trabalho">Odontologia do Trabalho</option> 
                    <option value="Odontologia em Saude Coletiva">Odontologia em Saude Coletiva</option> 
                    <option value="Odontologia Legal">Odontologia Legal</option> 
                    <option value="Odontologia para Pacientes com Necessidades Especiais">Odontologia para Pacientes com Necessidades Especiais</option> 
                    <option value="Odontogeriatria">Odontogeriatria</option> 
                    <option value="Odontopediatria">Odontopediatria</option> 
                    <option value="Ortodontia">Ortodontia</option> 
                    <option value="Ortodontia e Ortopedia Facial">Ortodontia e Ortopedia Facial</option> 
                    <option value="Ortopedia Funcional dos Maxilares">Ortopedia Funcional dos Maxilares</option> 
                    <option value="Patologia Bucal">Patologia Bucal</option> 
                    <option value="Periodontia">Periodontia</option> 
                    <option value="Protese Buco Maxilo Facial">Protese Buco Maxilo Facial</option> 
                    <option value="Protese Dentaria">Protese Dentaria</option> 
                    <option value="Radiologia">Radiologia</option> 
                    <option value="Radiologia Odontologica e Imaginologia">Radiologia Odontologica e Imaginologia</option> 
                    <option value="Saúde Coletiva">Saúde Coletiva</option> 
                </select>
            </div>
            
            <div class="six wide field">
                <label>Especialidade 02</label>
                <select class="ui fluid dropdown" name="especialidade2_dentistas">
                    <option value="" class="disabled">Selecione a Especialidade</option>
                    <option value="Cirurgia e Traumatologia Buco Maxilo Faciais">Cirurgia e Traumatologia Buco Maxilo Faciais</option>
                    <option value="Clínica Geral">Clínica Geral</option>
                    <option value="Dentistica">Dentistica</option> 
                    <option value="Dentistica Restauradora">Dentistica Restauradora</option> 
                    <option value="Disfuncao Temporo-Mandibular e Dor-Orofacial">Disfuncao Temporo-Mandibular e Dor-Orofacial</option> 
                    <option value="Endodontia">Endodontia</option> 
                    <option value="Estomatologia">Estomatologia</option> 
                    <option value="Implantodontia">Implantodontia</option> 
                    <option value="Odontologia do Trabalho">Odontologia do Trabalho</option> 
                    <option value="Odontologia em Saude Coletiva">Odontologia em Saude Coletiva</option> 
                    <option value="Odontologia Legal">Odontologia Legal</option> 
                    <option value="Odontologia para Pacientes com Necessidades Especiais">Odontologia para Pacientes com Necessidades Especiais</option> 
                    <option value="Odontogeriatria">Odontogeriatria</option> 
                    <option value="Odontopediatria">Odontopediatria</option> 
                    <option value="Ortodontia">Ortodontia</option> 
                    <option value="Ortodontia e Ortopedia Facial">Ortodontia e Ortopedia Facial</option> 
                    <option value="Ortopedia Funcional dos Maxilares">Ortopedia Funcional dos Maxilares</option> 
                    <option value="Patologia Bucal">Patologia Bucal</option> 
                    <option value="Periodontia">Periodontia</option> 
                    <option value="Protese Buco Maxilo Facial">Protese Buco Maxilo Facial</option> 
                    <option value="Protese Dentaria">Protese Dentaria</option> 
                    <option value="Radiologia">Radiologia</option> 
                    <option value="Radiologia Odontologica e Imaginologia">Radiologia Odontologica e Imaginologia</option> 
                    <option value="Saúde Coletiva">Saúde Coletiva</option> 
                </select>
            </div>
            
            <div class="six wide field">
                <label>Especialidade 03</label>
                <select class="ui fluid dropdown" name="especialidade3_dentistas">
                    <option value="" class="disabled">Selecione a Especialidade</option>
                    <option value="Cirurgia e Traumatologia Buco Maxilo Faciais">Cirurgia e Traumatologia Buco Maxilo Faciais</option>
                    <option value="Clínica Geral">Clínica Geral</option>
                    <option value="Dentistica">Dentistica</option> 
                    <option value="Dentistica Restauradora">Dentistica Restauradora</option> 
                    <option value="Disfuncao Temporo-Mandibular e Dor-Orofacial">Disfuncao Temporo-Mandibular e Dor-Orofacial</option> 
                    <option value="Endodontia">Endodontia</option> 
                    <option value="Estomatologia">Estomatologia</option> 
                    <option value="Implantodontia">Implantodontia</option> 
                    <option value="Odontologia do Trabalho">Odontologia do Trabalho</option> 
                    <option value="Odontologia em Saude Coletiva">Odontologia em Saude Coletiva</option> 
                    <option value="Odontologia Legal">Odontologia Legal</option> 
                    <option value="Odontologia para Pacientes com Necessidades Especiais">Odontologia para Pacientes com Necessidades Especiais</option> 
                    <option value="Odontogeriatria">Odontogeriatria</option> 
                    <option value="Odontopediatria">Odontopediatria</option> 
                    <option value="Ortodontia">Ortodontia</option> 
                    <option value="Ortodontia e Ortopedia Facial">Ortodontia e Ortopedia Facial</option> 
                    <option value="Ortopedia Funcional dos Maxilares">Ortopedia Funcional dos Maxilares</option> 
                    <option value="Patologia Bucal">Patologia Bucal</option> 
                    <option value="Periodontia">Periodontia</option> 
                    <option value="Protese Buco Maxilo Facial">Protese Buco Maxilo Facial</option> 
                    <option value="Protese Dentaria">Protese Dentaria</option> 
                    <option value="Radiologia">Radiologia</option> 
                    <option value="Radiologia Odontologica e Imaginologia">Radiologia Odontologica e Imaginologia</option> 
                    <option value="Saúde Coletiva">Saúde Coletiva</option> 
                </select>
            </div>
        </div>
            
        <h3 class="ui header disabled">Informações da Carteira Profissional do Dentista</h3>
        <div class="three fields">
            <div class="seven wide field">
                <label>Tipo do Conselho</label>
                <input type="text" name="conselho_tipo_dentistas" placeholder="Tipo do Conselho">
            </div>
            
            <div class="seven wide field">
                <label>Número do Conselho</label>
                <input type="text" name="conselho_numero_dentistas" placeholder="Número do Conselho">
            </div>
            
            <div class="four wide field">
                <label>UF de Expedição</label>
                <input type="text" name="conselho_estado_dentistas" placeholder="UF">
            </div>
        </div>
        
        <h3 class="ui header disabled">Informações Contratuais do Dentista com a Clínica</h3>
        <div class="four fields">
            <div class="four wide field">
                <label>Comissão</label>
                <input type="text" name="comissao_dentistas" placeholder="Comissão">
            </div>
            
            <div class="four wide field">
                <label>Data de Admissão</label>
                <input type="text" class="data" name="data_admissao_dentistas" placeholder="Data de Admissão">
            </div>
            
            <div class="four wide field">
                <label>Data de Demissão</label>
                <input type="text" class="data" name="data_demissao_dentistas" placeholder="Data de Demissão">
            </div>
            
            <div class="four wide field">
                <label>Status do Dentista</label>
                <select class="ui fluid dropdown" name="status_dentistas">
                    <option value="Ativo">Ativo</option>
                    <option value="Inativo">Inativo</option>
                </select>
                <script>$('select.dropdown').dropdown();</script>
            </div>
        </div>
        <div class="one fields">
            <div class="four wide field">
                <label>Nome de Usuário</label>
                <input type="text" name="nome_usuarios_dentistas" placeholder="Nome de Usuário">
            </div>
        </div>
        <br>
        <button class="ui button teal" type="submit" name="cadastrar_dentistas">Cadastrar Dentista</button>
        <div class="ui error message"></div>
    </form>
</div>

<?php 
    function soNumero($str){
        return preg_replace('/[^0-9]/', '', $str);
    }
    if($POST){
        if(isset($POST['cadastrar_dentistas'])){
            $Dentistas->setNome_completo_dentistas($POST['nome_completo_dentistas']);
            $Dentistas->setData_nascimento_dentistas(soNumero($POST['data_nascimento_dentistas']));
            $Dentistas->setSexo_dentistas($POST['sexo_dentistas']);
            $Dentistas->setCpf_dentistas(soNumero($POST['cpf_dentistas']));
            $Dentistas->setRg_dentistas(soNumero($POST['rg_dentistas']));
            $Dentistas->setOrgao_emissor_dentistas($POST['orgao_emissor_dentistas']);
            $Dentistas->setCep_dentistas(soNumero($POST['cep_dentistas']));
            $Dentistas->setEndereco_dentistas($POST['endereco_dentistas']);
            $Dentistas->setComplemento_dentistas($POST['complemento_dentistas']);
            $Dentistas->setBairro_dentistas($POST['bairro_dentistas']);
            $Dentistas->setCidade_dentistas($POST['cidade_dentistas']);
            $Dentistas->setUf_dentistas($POST['uf_dentistas']);
            $Dentistas->setPais_dentistas($POST['pais_dentistas']);
            $Dentistas->setTelefone_dentistas(soNumero($POST['telefone_dentistas']));
            $Dentistas->setCelular1_dentistas(soNumero($POST['celular1_dentistas']));
            $Dentistas->setCelular2_dentistas(soNumero($POST['celular2_dentistas']));
            $Dentistas->setEmail_dentistas($POST['email_dentistas']);
            $Dentistas->setEspecialidade1_dentistas($POST['especialidade1_dentistas']);
            $Dentistas->setEspecialidade2_dentistas($POST['especialidade2_dentistas']);
            $Dentistas->setEspecialidade3_dentistas($POST['especialidade3_dentistas']);
            $Dentistas->setConselho_tipo_dentistas($POST['conselho_tipo_dentistas']);
            $Dentistas->setConselho_numero_dentistas($POST['conselho_numero_dentistas']);
            $Dentistas->setConselho_estado_dentistas($POST['conselho_estado_dentistas']);
            $Dentistas->setComissao_dentistas($POST['comissao_dentistas']);
            $Dentistas->setData_admissao_dentistas(soNumero($POST['data_admissao_dentistas']));
            $Dentistas->setData_demissao_dentistas(soNumero($POST['data_demissao_dentistas']));
            $Dentistas->setStatus_dentistas($POST['status_dentistas']);
            $Dentistas->setNome_usuarios_dentistas($POST['nome_usuarios_dentistas']);
            
            $exe = $DentistasDAO->cadastrar_dentistas($Dentistas);
                if($exe == true){
                    echo '<script>toastr["success"]("Dentista cadastrado!", "Sucesso")</script>';
                }else{
                    echo '<script>toastr["error"]("Cadastro não efetuado!", "Erro")</script>';
                }
        }
    }