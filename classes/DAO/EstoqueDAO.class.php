<?php
class EstoqueDAO {
    private $conexao;
    
    public function inserir($Estoque) {
        $sql = "INSERTO INTO estoque (produto_estoque, descricao_produto_estoque, codigo_produto_estoque, quantidade_estoque, data_entrada_estoque, data_retirada_estoque, usuario_cadastro_estoque, observacoes_estoque, unidade_medida_estoque)
                VALUES(
                
        '". $Estoque->getProduto_estoque()."',
        '". $Estoque->getDescricao_produto_estoque()."',
        '". $Estoque->getCodigo_produto_estoque()."',
        '". $Estoque->getQuantidade_estoque()."',
        '". $Estoque->getData_entrada_estoque()."',
        '". $Estoque->getData_retirada_estoque()."',
        '". $Estoque->getUsuario_cadastro_estoque()."',
        '". $Estoque->getObservacoes_estoque()."',
        '". $Estoque->getUnidade_medida_estoque()."',
                )";
        
        if(mysqli_query($this->conexao->getCon(), $sql)){
            return true;
        }else{
            return false;
        }
    }
    
    public function consultar($Estoque){
        $sql = "SELECT * FROM estoque WHERE id_estoque = $Estoque";
        //Variável criada para rodar todas as linhas do resultado.
        $resultado = mysqli_query($this->conexao->getCon(), $sql);
        if(mysqli_num_rows($resultado)){
            return $resultado;
        }else{
            return false;
        }
    }
    
    public function editar($id_estoque, $produto_estoque, $descricao_produto_estoque, $codigo_produto_estoque, $quantidade_estoque, $data_entrada_estoque, $data_retirada_estoque, $usuario_cadastro_estoque, $observacoes_estoque, $unidade_medida_estoque){
        $sql = "UPDATE estoque SET produto_estoque = '$produto_estoque', descricao_produto_estoque = '$descricao_produto_estoque',
                codigo_produto_estoque = '$codigo_produto_estoque', quantidade_estoque = '$quantidade_estoque', 
                data_entrada_estoque = '$data_entrada_estoque', data_retirada_estoque = '$data_retirada_estoque',
                usuario_cadastro_estoque = '$usuario_cadastro_estoque',observacoes_estoque = '$observacoes_estoque',
                unidade_medida_estoque = '$unidade_medida_estoque'
               ";
        if(mysqli_query($this->conexao->getCon(), $sql)){
            return true;
        }else{
            return false;
        }
    }
    
    public function exibirEstoque(){
        $sql = "SELECT * FROM estoque ORDER BY id_estoque";
        $resultado = mysqli_query($this->conexao->getCon(), $sql);
        if(mysqli_num_rows($resultado) > 0){
            return $resultado;
        }else{
            return false;
        }
    }
    
    public function consultarId($id_estoque){
        $sql = "SELECT * FROM estoque WHERE id_estoque = '$id_estoque'";
        $resultado = mysqli_query($this->conexao->getCon(), $sql);
        if(mysqli_num_rows($resultado) > 0){
            return $resultado;
        }else{
            return false;
        }
    }
    
    public function deletar($id_estoque){
        $sql = "DELETE FROM estoque WHERE id_estoque = '$id_estoque'";
        if(mysqli_query($this->conexao->getCon(), $sql)){
            return true;
        }else{
            return false;
        }
    }
            
            
            
}
