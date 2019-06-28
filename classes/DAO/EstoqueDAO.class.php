<?php
class EstoqueDAO {
    private $conexao;
    private $Estoque;


    public function __construct() {
        $this->conexao = new Conexao();
        $this->Estoque = new Estoque();
    }
    
    public function cadastrar_produto($Estoque) {
        $sql = "INSERT INTO estoque (produto_estoque, descricao_produto_estoque, valor_produto_estoque, codigo_produto_estoque, quantidade_estoque, data_entrada_estoque, data_retirada_estoque, usuario_cadastro_estoque, observacoes_estoque, unidade_medida_estoque)
                VALUES ('".$Estoque->getProduto_estoque()."', '".$Estoque->getDescricao_produto_estoque()."', '".$Estoque->getValor_produto_estoque()."', '".$Estoque->getCodigo_produto_estoque()."', '".$Estoque->getQuantidade_estoque()."', '".$Estoque->getData_entrada_estoque()."', '".$Estoque->getData_retirada_estoque()."', '".$Estoque->getUsuario_cadastro_estoque()."', '".$Estoque->getObservacoes_estoque()."', '".$Estoque->getUnidade_medida_estoque()."')";
        
        if(mysqli_query($this->conexao->getCon(), $sql)){
            return true;
        }else{
            return false;
        }
    }
    public function listar_estoque(){
        $sql = "SELECT * FROM estoque";
        $exe = mysqli_query($this->conexao->getCon(), $sql);
        if(mysqli_num_rows($exe) > 0){
            return $exe;
        }else{
            return false;
        }
    }
}