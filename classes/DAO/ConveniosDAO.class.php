<?php
class ConveniosDAO {
    private $conexao;
    private $Convenios;
    
    public function __construct() {
        $this->conexao = new Conexao();
        $this->Convenios = new Convenios();
    }
    
    public function cadastrar_convenios($Convenios){
        $sql = "INSERT INTO convenios (razao_social_convenios, nome_fantasia_convenios, inscricao_estadual_convenios, cnpj_convenios, cep_convenios, endereco_convenios, complemento_convenios, bairro_convenios, cidade_convenios, uf_convenios, pais_convenios, telefone_convenios, celular1_convenios, celular2_convenios, email_convenios, nome_representante_convenios, celular_representante_convenios, banco_convenios, agencia_banco_convenios, operacao_banco_convenios, conta_banco_convenios, tipo_conta_banco_convenios, favorecido_banco_convenios, status_convenios, observacoes_convenios)
                VALUES (
            '".$Convenios->getRazao_social_convenios()."', '".$Convenios->getNome_fantasia_convenios()."', '".$Convenios->getInscricao_estadual_convenios()."', '".$Convenios->getCnpj_convenios()."', '".$Convenios->getCep_convenios()."', '".$Convenios->getEndereco_convenios()."', '".$Convenios->getComplemento_convenios()."', '".$Convenios->getBairro_convenios()."', '".$Convenios->getCidade_convenios()."', '".$Convenios->getUf_convenios()."', '".$Convenios->getPais_convenios()."', '".$Convenios->getTelefone_convenios()."', '".$Convenios->getCelular1_convenios()."', '".$Convenios->getCelular2_convenios()."', '".$Convenios->getEmail_convenios()."', '".$Convenios->getNome_representante_convenios()."', '".$Convenios->getCelular_representante_convenios()."', '".$Convenios->getBanco_convenios()."', '".$Convenios->getAgencia_banco_convenios()."', '".$Convenios->getOperacao_banco_convenios()."', '".$Convenios->getConta_banco_convenios()."', '".$Convenios->getTipo_conta_banco_convenios()."', '".$Convenios->getFavorecido_banco_convenios()."', '".$Convenios->getStatus_convenios()."', '".$Convenios->getObservacoes_convenios()."')";
        if(mysqli_query($this->conexao->getCon(), $sql)){
            return true;
        }else{
            return false;
        }
    }
    
    public function listar_convenios(){
        $sql = "SELECT * FROM convenios";
        $exe = mysqli_query($this->conexao->getCon(), $sql);
        if(mysqli_num_rows($exe) > 0){
            return $exe;
        }else{
            return false;
        }
    }
}
