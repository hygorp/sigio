<?php
class FornecedoresDAO {
    private $conexao;
    private $Fornecedores;
    
    public function __construct() {
        $this->conexao = new Conexao();
        $this->Fornecedores = new Fornecedores();
    }
    
    public function cadastrar_fornecedores($Fornecedores){
        $sql = "INSERT INTO fornecedores (razao_social_fornecedores, nome_fantasia_fornecedores, inscricao_estadual_fornecedores, cnpj_fornecedores, atuacao_fornecedores, cep_fornecedores, endereco_fornecedores, complemento_fornecedores, bairro_fornecedores, cidade_fornecedores, uf_fornecedores, pais_fornecedores, telefone_fornecedores, celular1_fornecedores, celular2_fornecedores, email_fornecedores, nome_representante_fornecedores, celular_representante_fornecedores, banco_fornecedores, agencia_banco_fornecedores, operacao_banco_fornecedores, conta_banco_fornecedores, tipo_conta_banco_fornecedores, favorecido_banco_fornecedores, status_fornecedores, observacoes_fornecedores)
                VALUES (
            '".$Fornecedores->getRazao_social_fornecedores()."', '".$Fornecedores->getNome_fantasia_fornecedores()."', '".$Fornecedores->getInscricao_estadual_fornecedores()."', '".$Fornecedores->getCnpj_fornecedores()."', '".$Fornecedores->getAtuacao_fornecedores()."', '".$Fornecedores->getCep_fornecedores()."', '".$Fornecedores->getEndereco_fornecedores()."', '".$Fornecedores->getComplemento_fornecedores()."', '".$Fornecedores->getBairro_fornecedores()."', '".$Fornecedores->getCidade_fornecedores()."', '".$Fornecedores->getUf_fornecedores()."', '".$Fornecedores->getPais_fornecedores()."', '".$Fornecedores->getTelefone_fornecedores()."', '".$Fornecedores->getCelular1_fornecedores()."', '".$Fornecedores->getCelular2_fornecedores()."', '".$Fornecedores->getEmail_fornecedores()."', '".$Fornecedores->getNome_representante_fornecedores()."', '".$Fornecedores->getCelular_representante_fornecedores()."', '".$Fornecedores->getBanco_fornecedores()."', '".$Fornecedores->getAgencia_banco_fornecedores()."', '".$Fornecedores->getOperacao_banco_fornecedores()."', '".$Fornecedores->getConta_banco_fornecedores()."', '".$Fornecedores->getTipo_conta_banco_fornecedores()."', '".$Fornecedores->getFavorecido_banco_fornecedores()."', '".$Fornecedores->getStatus_fornecedores()."', '".$Fornecedores->getObservacoes_fornecedores()."')";
        if(mysqli_query($this->conexao->getCon(), $sql)){
            return true;
        }else{
            return false;
        }
    }
    
    public function listar_fornecedores(){
        $sql = "SELECT * FROM fornecedores";
        $exe = mysqli_query($this->conexao->getCon(), $sql);
        if(mysqli_num_rows($exe) > 0){
            return $exe;
        }else{
            return false;
        }
    }
}
