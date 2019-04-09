<?php
class PacientesDAO {
    private $conexao;
    private $Pacientes;
    
    public function __construct() {
        $this->conexao = new Conexao();
        $this->Pacientes = new Pacientes();
    }
    
    public function cadastrar_pacientes($Pacientes){
        $sql = "INSERT INTO pacientes (nome_completo_pacientes, data_nascimento_pacientes, cpf_pacientes, rg_pacientes, orgao_emissor_pacientes, cep_pacientes, endereco_pacientes, complemento_pacientes, bairro_pacientes, cidade_pacientes, uf_pacientes, pais_pacientes, telefone_pacientes, celular1_pacientes, celular2_pacientes, email_pacientes, status_pacientes, carteira_convenio_pacientes, titular_convenio_pacientes, tipo_plano_convenio_pacientes, data_cadastro_pacientes, id_convenios_pacientes)
                VALUES (
            '".$Pacientes->getNome_completo_pacientes()."', '".$Pacientes->getData_nascimento_pacientes()."', '".$Pacientes->getCpf_pacientes()."', '".$Pacientes->getRg_pacientes()."', '".$Pacientes->getOrgao_emissor_pacientes()."', '".$Pacientes->getCep_pacientes()."', '".$Pacientes->getEndereco_pacientes()."', '".$Pacientes->getComplemento_pacientes()."', '".$Pacientes->getBairro_pacientes()."', '".$Pacientes->getCidade_pacientes()."', '".$Pacientes->getUf_pacientes()."', '".$Pacientes->getPais_pacientes()."', '".$Pacientes->getTelefone_pacientes()."', '".$Pacientes->getCelular1_pacientes()."', '".$Pacientes->getCelular2_pacientes()."', '".$Pacientes->getEmail_pacientes()."', '".$Pacientes->getStatus_pacientes()."', '".$Pacientes->getCarteira_convenio_pacientes()."', '".$Pacientes->getTitular_convenio_pacientes()."', '".$Pacientes->getTipo_plano_convenio_pacientes()."', '".$Pacientes->getData_cadastro_pacientes()."', '".$Pacientes->getId_convenios_pacientes()."')";
        if(mysqli_query($this->conexao->getCon(), $sql)){
            return true;
        }else{
            return false;
        }
    }


    public function contar_pacientes(){
        $sql = "SELECT COUNT(*) FROM pacientes;";
        $exe = mysqli_query($this->conexao->getCon(), $sql);
        if(mysqli_num_rows($exe) > 0){
            return $exe;
        }else{
            return false;
        }
    }
    
    public function listar_pacientes(){
        $sql = "SELECT * FROM pacientes";
        $exe = mysqli_query($this->conexao->getCon(), $sql);
        if(mysqli_num_rows($exe) > 0){
            return $exe;
        }else{
            return false;
        }
    }
}