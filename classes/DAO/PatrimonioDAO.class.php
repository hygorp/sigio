<?php
class PatrimonioDAO {
    private $conexao;
    private $Patrimonio;


    public function __construct() {
        $this->conexao = new Conexao();
        $this->Patrimonio = new Patrimonio();
    }
    
    public function cadastrar_patrimonio($Patrimonio) {
        $sql = "INSERT INTO patrimonio (nome_patrimonio, descricao_patrimonio, quantidade_patrimonio, data_cadastro_patrimonio, status_patrimonio, usuario_cadastro_patrimonio, setor_patrimonio, valor_patrimonio, data_compra_patrimonio, cor_produto_patrimonio, fabricante_patrimonio, nota_fiscal_patrimonio, serie_nota_fiscal_patrimonio, observacoes_patrimonio, cobertura_garantia_patrimonio)
                VALUES ('".$Patrimonio->getNome_patrimonio()."', '".$Patrimonio->getDescricao_patrimonio()."', '".$Patrimonio->getQuantidade_patrimonio()."', '".$Patrimonio->getData_cadastro_patrimonio()."', '".$Patrimonio->getStatus_patrimonio()."', '".$Patrimonio->getUsuario_cadastro_patrimonio()."', '".$Patrimonio->getSetor_patrimonio()."', '".$Patrimonio->getValor_patrimonio()."', '".$Patrimonio->getData_compra_patrimonio()."', '".$Patrimonio->getCor_produto_patrimonio()."', '".$Patrimonio->getFabricante_patrimonio()."', '".$Patrimonio->getNota_fiscal_patrimonio()."', '".$Patrimonio->getSerie_nota_fiscal_patrimonio()."', '".$Patrimonio->getObservacoes_patrimonio()."', '".$Patrimonio->getCobertura_garantia_patrimonio()."')";
        
        if(mysqli_query($this->conexao->getCon(), $sql)){
            return true;
        }else{
            return false;
        }
    }

    public function listar_patrimonio(){
        $sql = "SELECT * FROM patrimonio";
        $exe = mysqli_query($this->conexao->getCon(), $sql);
        if(mysqli_num_rows($exe) > 0){
            return $exe;
        }else{
            return false;
        }
    }
}
