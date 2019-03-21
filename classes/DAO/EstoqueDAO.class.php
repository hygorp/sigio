<?php
class EstoqueDAO {
    private $conexao;
    
    public function inserir($Estoque) {
        $sql = "INSERTO INTO estoque (produto_estoque, descricao_produto_estoque, codigo_produto_estoque, quantidade_estoque, data_entrada_estoque, data_retirada_estoque, observacoes_estoque, unidade_medida_estoque, nome_usuarios)
                VALUES(
                
        '". $Estoque->getProduto()."',
        '". $Estoque->getDescricao()."',
        '". $Estoque->getCodigo_Produto()."',
        '". $Estoque->getQuantidade()."',
        '". $Estoque->getData_Entrada()."',
        '". $Estoque->getData_Retirada()."',
        '". $Estoque->getObservacoes()."',
        '". $Estoque->getUnidade_Medida()."',
        '". $Estoque->getUsuario()."',
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
    
    public function editar($id, $produto, $descricao, $codigo_produto, $quantidade, $data_entrada, $data_retirada, $observacoes, $unidade_medida, $usuario){
        $sql = "UPDATE estoque SET produto_estoque = '$produto', descricao_produto_estoque = '$descricao',
                codigo_produto_estoque = '$codigo_produto', quantidade_estoque = '$quantidade', 
                data_entrada_estoque = '$data_entrada', data_retirada_estoque = '$data_retirada',
                observacoes_estoque = '$observacoes', unidade_medida_estoque = '$unidade_medida',
                nome_usuarios = '$usuario'
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
    
    public function consultarId($id){
        $sql = "SELECT * FROM estoque WHERE id_estoque = '$id'";
        $resultado = mysqli_query($this->conexao->getCon(), $sql);
        if(mysqli_num_rows($resultado) > 0){
            return $resultado;
        }else{
            return false;
        }
    }
    
    public function deletar($id){
        $sql = "DELETE FROM estoque WHERE id_estoque = '$id'";
        if(mysqli_query($this->conexao->getCon(), $sql)){
            return true;
        }else{
            return false;
        }
    }
            
            
            
}
