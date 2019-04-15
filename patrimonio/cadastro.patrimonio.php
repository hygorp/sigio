<div class="bread">
    <div class="ui breadcrumb">
        <i class="dashboard icon divider"></i>
        <a class="section" href="dashboard.php?p=dados-dashboard">Dashboard</a>
        <i class="caret right icon"></i>
        <div class="active section">Cadastro</div>  
    </div>
</div>
<div class="cadastro-patrimonio">
    <form class="ui form cadastro-patrimonio-form" method="POST">
        <h2 class="ui dividing header">Cadastro de Patrimônio</h2>
        <h3 class="ui header disabled">Informações</h3>
        <div class="two fields">
            <div class="eight wide field">
                <label>Nome do Patrimônio</label>
                <input type="text" name="nome_patrimonio" placeholder="Patrimônio">
            </div>
            
            <div class="ten wide field">
                <label>Descrição do Patrimônio</label>
                <input type="text" name="descricao_patrimonio" placeholder="Descrição">
            </div>
        </div>
        
        <div class="four fields">
            <div class="seven wide field">
                <label>Valor do Patrimônio</label>
                <div class="ui labeled input">
                    <label for="amount" class="ui label active">R$</label>
                    <input type="text" name="valor_patrimonio" placeholder="Valor">
                </div>
            </div>
            
            <div class="seven wide field">
                <label>Setor de Alocação</label>
                <input type="text" name="setor_patrimonio" placeholder="Setor">
            </div>
            
            <div class="three wide field">
                <label>Quantidade</label>
                <input type="text" name="quantidade_patrimonio" placeholder="Quantidade">
            </div>
            
            <div class="six wide field">
                <label>Cor</label>
                <input type="text" name="cor_produto_patrimonio" placeholder="Cor">
            </div>
        </div>
       
        <div class="two fields">
            <div class="four wide field">
                <label>Data da Compra</label>
                <input type="text" class="data" name="data_compra_patrimonio" placeholder="Data da Compra">
            </div>
            
            <div class="twelve wide field">
                <label>Fabricante</label>
                <input type="text" name="fabricante_patrimonio" placeholder="Fabricante">
            </div>
        </div>
        
        <div class="three fields">
            <div class="six wide field">
                <label>Nota Fiscal</label>
                <input type="text" name="nota_fiscal_patrimonio" placeholder="Nota Fiscal">
            </div>
            
            <div class="six wide field">
                <label>Série</label>
                <input type="text" name="serie_nota_fiscal_patrimonio" placeholder="Série">
            </div>
            
            <div class="six wide field">
                <label>Cobertura da Garantia</label>
                <input type="text" name="cobertura_garantia_patrimonio" placeholder="Garantia">
            </div>
        </div>
        
        <div class="three fields">
            <div class="four wide field">
                <label>Status</label>
                <input type="text" name="status_patrimonio" placeholder="Status">
            </div>
            
            <div class="four wide field">
                <label>Usuário de Cadastro</label>
                <input type="text" name="usuario_cadastro_patrimonio" placeholder="Usuário" value="<?php echo $usuario_logado; ?>">
            </div>
            
            <div class="four wide field">
                <label>Data de Cadastro</label>
                <input type="text" class="data" name="data_cadastro_patrimonio" placeholder="Data de Cadastro">
            </div>
        </div>
        
        <div class="field">
            <label>Observações</label>
            <textarea rows="3" type="text" name="observacoes_patrimonio" placeholder="Observações"></textarea>
        </div>     
        <button class="ui button teal" type="submit" name="cadastrar_patrimonio">Cadastrar Patrimônio</button>
        <div class="ui error message"></div>
    </form>
</div>

<?php
    function soNumero($str){
        return preg_replace('/[^0-9]/', '', $str);
    }
    if($POST){
        if(isset($POST['cadastrar_patrimonio'])){
            
            $Patrimonio->setNome_patrimonio($POST['nome_patrimonio']);
            $Patrimonio->setDescricao_patrimonio($POST['descricao_patrimonio']);
            $Patrimonio->setQuantidade_patrimonio($POST['quantidade_patrimonio']);
            $Patrimonio->setData_cadastro_patrimonio(soNumero($POST['data_cadastro_patrimonio']));
            $Patrimonio->setStatus_patrimonio($POST['status_patrimonio']);
            $Patrimonio->setUsuario_cadastro_patrimonio($POST['usuario_cadastro_patrimonio']);
            $Patrimonio->setSetor_patrimonio($POST['setor_patrimonio']);
            $Patrimonio->setValor_patrimonio($POST['valor_patrimonio']);
            $Patrimonio->setData_compra_patrimonio(soNumero($POST['data_compra_patrimonio']));
            $Patrimonio->setCor_produto_patrimonio($POST['cor_produto_patrimonio']);
            $Patrimonio->setFabricante_patrimonio($POST['fabricante_patrimonio']);
            $Patrimonio->setNota_fiscal_patrimonio($POST['nota_fiscal_patrimonio']);
            $Patrimonio->setSerie_nota_fiscal_patrimonio($POST['serie_nota_fiscal_patrimonio']);
            $Patrimonio->setObservacoes_patrimonio($POST['observacoes_patrimonio']);
            $Patrimonio->setCobertura_garantia_patrimonio($POST['cobertura_garantia_patrimonio']);

            
            $exe = $PatrimonioDAO->cadastrar_patrimonio($Patrimonio);
            
            if($exe == true){
                echo '<script>toastr["success"]("Patrimônio cadastrado!", "Sucesso")</script>';
            }else{
                echo '<script>toastr["error"]("Cadastro não efetuado!", "Erro")</script>';
            }
        }
    }
