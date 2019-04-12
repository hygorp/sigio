<?php
class LaboratoriosDAO {
    private $conexao;
    private $Laboratorios;
    
    public function __construct() {
        $this->conexao = new Conexao();
        $this->Laboratorios = new Laboratorios();
    }
    
    public function cadastrar_laboratorios($Laboratorios){
        $sql = "INSERT INTO laboratorios (razao_social_laboratorios, nome_fantasia_laboratorios, inscricao_estadual_laboratorios, cnpj_laboratorios, atuacao_laboratorios, cep_laboratorios, endereco_laboratorios, complemento_laboratorios, bairro_laboratorios, cidade_laboratorios, uf_laboratorios, pais_laboratorios, telefone_laboratorios, celular1_laboratorios, celular2_laboratorios, email_laboratorios, nome_representante_laboratorios, celular_representante_laboratorios, banco_laboratorios, agencia_banco_laboratorios, operacao_banco_laboratorios, conta_banco_laboratorios, tipo_conta_banco_laboratorios, favorecido_banco_laboratorios, status_laboratorios, observacoes_laboratorios)
                VALUES (
            '".$Laboratorios->getRazao_social_laboratorios()."', '".$Laboratorios->getNome_fantasia_laboratorios()."', '".$Laboratorios->getInscricao_estadual_laboratorios()."', '".$Laboratorios->getCnpj_laboratorios()."', '".$Laboratorios->getAtuacao_laboratorios()."', '".$Laboratorios->getCep_laboratorios()."', '".$Laboratorios->getEndereco_laboratorios()."', '".$Laboratorios->getComplemento_laboratorios()."', '".$Laboratorios->getBairro_laboratorios()."', '".$Laboratorios->getCidade_laboratorios()."', '".$Laboratorios->getUf_laboratorios()."', '".$Laboratorios->getPais_laboratorios()."', '".$Laboratorios->getTelefone_laboratorios()."', '".$Laboratorios->getCelular1_laboratorios()."', '".$Laboratorios->getCelular2_laboratorios()."', '".$Laboratorios->getEmail_laboratorios()."', '".$Laboratorios->getNome_representante_laboratorios()."', '".$Laboratorios->getCelular_representante_laboratorios()."', '".$Laboratorios->getBanco_laboratorios()."', '".$Laboratorios->getAgencia_banco_laboratorios()."', '".$Laboratorios->getOperacao_banco_laboratorios()."', '".$Laboratorios->getConta_banco_laboratorios()."', '".$Laboratorios->getTipo_conta_banco_laboratorios()."', '".$Laboratorios->getFavorecido_banco_laboratorios()."', '".$Laboratorios->getStatus_laboratorios()."', '".$Laboratorios->getObservacoes_laboratorios()."')";
        if(mysqli_query($this->conexao->getCon(), $sql)){
            return true;
        }else{
            return false;
        }
    }
    
    public function listar_laboratorios(){
        $sql = "SELECT * FROM laboratorios";
        $exe = mysqli_query($this->conexao->getCon(), $sql);
        if(mysqli_num_rows($exe) > 0){
            return $exe;
        }else{
            return false;
        }
    }
}
