<?php
class DentistasDAO {
    private $conexao;
    private $Dentistas;
    
    public function __construct() {
        $this->conexao = new Conexao();
        $this->Dentistas = new Dentistas();
    }
    
    public function cadastrar_dentistas($Dentistas){
        $sql = "INSERT INTO dentistas (nome_completo_dentistas, data_nascimento_dentistas, sexo_dentistas, cpf_dentistas, rg_dentistas, orgao_emissor_dentistas, cep_dentistas, endereco_dentistas, complemento_dentistas, bairro_dentistas, cidade_dentistas, uf_dentistas, pais_dentistas, telefone_dentistas, celular1_dentistas, celular2_dentistas, email_dentistas, especialidade1_dentistas, especialidade2_dentistas, especialidade3_dentistas, conselho_tipo_dentistas, conselho_numero_dentistas, conselho_estado_dentistas, comissao_dentistas, data_admissao_dentistas, data_demissao_dentistas, status_dentistas, nome_usuarios_dentistas)
                VALUES (
            '".$Dentistas->getNome_completo_dentistas()."', '".$Dentistas->getData_nascimento_dentistas()."', '".$Dentistas->getSexo_dentistas()."', '".$Dentistas->getCpf_dentistas()."', '".$Dentistas->getRg_dentistas()."', '".$Dentistas->getOrgao_emissor_dentistas()."', '".$Dentistas->getCep_dentistas()."', '".$Dentistas->getEndereco_dentistas()."', '".$Dentistas->getComplemento_dentistas()."', '".$Dentistas->getBairro_dentistas()."', '".$Dentistas->getCidade_dentistas()."', '".$Dentistas->getUf_dentistas()."', '".$Dentistas->getPais_dentistas()."', '".$Dentistas->getTelefone_dentistas()."', '".$Dentistas->getCelular1_dentistas()."', '".$Dentistas->getCelular2_dentistas()."', '".$Dentistas->getEmail_dentistas()."', '".$Dentistas->getEspecialidade1_dentistas()."', '".$Dentistas->getEspecialidade2_dentistas()."', '".$Dentistas->getEspecialidade3_dentistas()."', '".$Dentistas->getConselho_tipo_dentistas()."', '".$Dentistas->getConselho_numero_dentistas()."', '".$Dentistas->getConselho_estado_dentistas()."', '".$Dentistas->getComissao_dentistas()."', '".$Dentistas->getData_admissao_dentistas()."', '".$Dentistas->getData_demissao_dentistas()."', '".$Dentistas->getStatus_dentistas()."', '".$Dentistas->getNome_usuarios_dentistas()."')";
        if(mysqli_query($this->conexao->getCon(), $sql)){
            return true;
        }else{
            return false;
        }
    }
    
    public function contar_dentistas(){
        $sql = "SELECT COUNT(*) FROM dentistas;";
        $exe = mysqli_query($this->conexao->getCon(), $sql);
        if(mysqli_num_rows($exe) > 0){
            return $exe;
        }else{
            return false;
        }
    }
    
    public function listar_dentistas(){
        $sql = "SELECT * FROM dentistas";
        $exe = mysqli_query($this->conexao->getCon(), $sql);
        if(mysqli_num_rows($exe) > 0){
            return $exe;
        }else{
            return false;
        }
    }
}
