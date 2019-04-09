<div class="bread">
    <div class="ui breadcrumb">
        <i class="dashboard icon divider"></i>
        <a class="section" href="dashboard.php">Dashboard</a>
        <i class="users icon divider"></i>
        <div class="active section">Cadastro</div>  
    </div>
</div>
<div class="cadastro-dentistas">
    <form class="ui form cadastro-dentistas-form">
        <h2 class="ui dividing header">Cadastro de Dentistas</h2>
        <h3 class="ui header disabled">Informações Pessoais</h3>
        <div class="two fields">
            <div class="fourteen wide field">
                <label>Nome Completo</label>
                <input type="text" name="nome_completo_dentistas" placeholder="Nome Completo">
            </div>
            
            <div class="three wide field">
                <label>Data de Nascimento</label>
                <input type="text" name="data_nascimento_dentistas" placeholder="Data de Nascimento">
            </div>
        </div>
        
        <div class="three fields">
            <div class="seven wide field">
                <label>CPF</label>
                <input type="text" name="cpf_dentistas" placeholder="CPF">
            </div>
            
            <div class="seven wide field">
                <label>RG</label>
                <input type="text" name="rg_dentistas" placeholder="RG">
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
                <input type="text" name="cep_dentistas" placeholder="CEP">
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
                <input type="text" name="telefone_dentistas" placeholder="(00) 0000-0000">
            </div>
            
            <div class="six wide field">
                <label>Celular</label>
                <div class="two fields">
                    <div class="three field">
                        <input type="text" name="celular1_dentistas" placeholder="(00) 00000-0000">
                    </div>
                    
                    <div class="field">
                        <input type="text" name="celular2_dentistas" placeholder="(00) 00000-0000">
                    </div>
                </div>
            </div>
            
            <div class="seven wide field">
                <label>Email</label>
                <input type="text" name="email_dentistas" placeholder="ex: dentista@gmail.com">
            </div>
        </div>
        
        <h3 class="ui header disabled">Especializações do Dentista</h3>
            
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
                <input type="text" name="data_admissao_dentistas" placeholder="Data de Admissão">
            </div>
            
            <div class="four wide field">
                <label>Data de Demissão</label>
                <input type="text" name="data_demissao_dentistas" placeholder="Data de Demissão">
            </div>
            
            <div class="four wide field">
                <label>Status do Dentista</label>
                <select class="ui fluid dropdown">
                    <option value="Ativo">Ativo</option>
                    <option value="Inativo">Inativo</option>
                </select>
                <script>$('select.dropdown').dropdown();</script>
            </div>
        </div>
        <button class="ui button teal" type="submit" name="cadastrar_dentista">Cadastrar Dentista</button>
        <div class="ui error message"></div>
    </form>
</div>