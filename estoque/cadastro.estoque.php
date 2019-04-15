<div class="bread">
    <div class="ui breadcrumb">
        <i class="dashboard icon divider"></i>
        <a class="section" href="dashboard.php?p=dados-dashboard">Dashboard</a>
        <i class="caret right icon"></i>
        <div class="active section">Cadastro</div>  
    </div>
</div>
<div class="cadastro-estoque">
    <form class="ui form cadastro-estoque-form" method="POST">
        <h2 class="ui dividing header">Cadastro de Produto</h2>
        <h3 class="ui header disabled">Informações</h3>
        <div class="two fields">
            <div class="eight wide field">
                <label>Nome do Produto</label>
                <input type="text" name="produto_estoque" placeholder="Produto">
            </div>
            
            <div class="ten wide field">
                <label>Descrição do Produto</label>
                <input type="text" name="descricao_produto_estoque" placeholder="Descrição">
            </div>
        </div>
        
        <div class="four fields">
            <div class="seven wide field">
                <label>Valor do Produto</label>
                <input type="text" name="valor_produto_estoque" placeholder="Valor">
            </div>
            <div class="seven wide field">
                <label>Código do Produto</label>
                <input type="text" name="codigo_produto_estoque" placeholder="Código">
            </div>
            
            <div class="five wide field">
                <label>Quantidade</label>
                <input type="text" name="quantidade_estoque" placeholder="Quantidade">
            </div>
            
            <div class="four wide field">
                <label>Data de Entrada</label>
                <input type="text" class="data" name="data_entrada_estoque" placeholder="Data de Entrada">
            </div>
        </div>
       
        <div class="three fields">
            <div class="four wide field">
                <label>Data de Retirada</label>
                <input type="text" class="data" name="data_retirada_estoque" placeholder="Data de Retirada">
            </div>
            
            <div class="eight wide field">
                <label>Usuário de Cadastro</label>
                <input type="text" name="usuario_cadastro_estoque" placeholder="Usuário" value="<?php echo $usuario_logado; ?>" readonly>
            </div>
            
            <div class="eight wide field">
                <label>Unidade de Medida</label>
                <input type="text" name="unidade_medida_estoque" placeholder="Unidade de Medida">
            </div>
        </div>
        
        <div class="field">
            <label>Observações</label>
            <textarea rows="3" type="text" name="observacoes_estoque" placeholder="Observações"></textarea>
        </div>     
        <button class="ui button teal" type="submit" name="cadastrar_produto">Cadastrar Produto</button>
        <div class="ui error message"></div>
    </form>
</div>

<?php
    function soNumero($str){
        return preg_replace('/[^0-9]/', '', $str);
    }
    if($POST){
        if(isset($POST['cadastrar_produto'])){
            
            $Estoque->setProduto_estoque($POST['produto_estoque']);
            $Estoque->setDescricao_produto_estoque($POST['descricao_produto_estoque']);
            $Estoque->setValor_produto_estoque($POST['valor_produto_estoque']);
            $Estoque->setCodigo_produto_estoque($POST['codigo_produto_estoque']);
            $Estoque->setQuantidade_estoque($POST['quantidade_estoque']);
            $Estoque->setData_entrada_estoque(soNumero($POST['data_entrada_estoque']));
            $Estoque->setData_retirada_estoque(soNumero($POST['data_retirada_estoque']));
            $Estoque->setUsuario_cadastro_estoque($POST['usuario_cadastro_estoque']);
            $Estoque->setUnidade_medida_estoque($POST['unidade_medida_estoque']);
            $Estoque->setObservacoes_estoque($POST['observacoes_estoque']);
            
            $exe = $EstoqueDAO->cadastrar_produto($Estoque);
            
            if($exe == true){
                echo '<script>toastr["success"]("Produto cadastrado!", "Sucesso")</script>';
            }else{
                echo '<script>toastr["error"]("Cadastro não efetuado!", "Erro")</script>';
            }
        }
    }