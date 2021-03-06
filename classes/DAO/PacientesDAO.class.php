<?php
class PacientesDAO {
    private $conexao;
    private $Pacientes;
    
    public function __construct() {
        $this->conexao = new Conexao();
        $this->Pacientes = new Pacientes();
    }
    
    public function cadastrar_pacientes($Pacientes){
        $sql = "INSERT INTO pacientes (nome_completo_pacientes, data_nascimento_pacientes, sexo_pacientes, cpf_pacientes, rg_pacientes, orgao_emissor_pacientes, cep_pacientes, endereco_pacientes, complemento_pacientes, bairro_pacientes, cidade_pacientes, uf_pacientes, pais_pacientes, telefone_pacientes, celular1_pacientes, celular2_pacientes, email_pacientes, status_pacientes, nome_convenio_pacientes, carteira_convenio_pacientes, titular_convenio_pacientes, tipo_plano_convenio_pacientes, data_cadastro_pacientes)
                VALUES (
            '".$Pacientes->getNome_completo_pacientes()."', '".$Pacientes->getData_nascimento_pacientes()."', '".$Pacientes->getSexo_pacientes()."', '".$Pacientes->getCpf_pacientes()."', '".$Pacientes->getRg_pacientes()."', '".$Pacientes->getOrgao_emissor_pacientes()."', '".$Pacientes->getCep_pacientes()."', '".$Pacientes->getEndereco_pacientes()."', '".$Pacientes->getComplemento_pacientes()."', '".$Pacientes->getBairro_pacientes()."', '".$Pacientes->getCidade_pacientes()."', '".$Pacientes->getUf_pacientes()."', '".$Pacientes->getPais_pacientes()."', '".$Pacientes->getTelefone_pacientes()."', '".$Pacientes->getCelular1_pacientes()."', '".$Pacientes->getCelular2_pacientes()."', '".$Pacientes->getEmail_pacientes()."', '".$Pacientes->getStatus_pacientes()."', '".$Pacientes->getNome_convenio_pacientes()."','".$Pacientes->getCarteira_convenio_pacientes()."', '".$Pacientes->getTitular_convenio_pacientes()."', '".$Pacientes->getTipo_plano_convenio_pacientes()."', '".$Pacientes->getData_cadastro_pacientes()."')";
        if(mysqli_query($this->conexao->getCon(), $sql)){
            return true;
        }else{
            return false;
        }
    }

    public function prontuario(){
        $sql = "SELECT * FROM pacientes ORDER BY nome_completo_pacientes ASC;";
        $exe = mysqli_query($this->conexao->getCon(), $sql);
        if(mysqli_num_rows($exe) > 0){
            return $exe;
        }else{
            return false;
        }
    }
    
    public function editar_prontuario($matricula_pacientes, $nome_completo_pacientes, $data_nascimento_pacientes, $sexo_pacientes, $cpf_pacientes, $rg_pacientes, $orgao_emissor_pacientes, $cep_pacientes, $endereco_pacientes, $complemento_pacientes, $bairro_pacientes, $cidade_pacientes, $uf_pacientes, $pais_pacientes, $telefone_pacientes, $celular1_pacientes, $celular2_pacientes, $email_pacientes, $status_pacientes, $nome_convenio_pacientes, $carteira_convenio_pacientes, $titular_convenio_pacientes, $tipo_plano_convenio_pacientes, $data_cadastro_pacientes){
        $sql = "UPDATE pacientes SET nome_completo_pacientes = '$nome_completo_pacientes', data_nascimento_pacientes = '$data_nascimento_pacientes', sexo_pacientes = '$sexo_pacientes', cpf_pacientes = '$cpf_pacientes', rg_pacientes = '$rg_pacientes', orgao_emissor_pacientes = '$orgao_emissor_pacientes', cep_pacientes = '$cep_pacientes', endereco_pacientes = '$endereco_pacientes', complemento_pacientes = '$complemento_pacientes', bairro_pacientes = '$bairro_pacientes', cidade_pacientes = '$cidade_pacientes', uf_pacientes = '$uf_pacientes', pais_pacientes = '$pais_pacientes', telefone_pacientes = '$telefone_pacientes', celular1_pacientes = '$celular1_pacientes', celular2_pacientes = '$celular2_pacientes', email_pacientes = '$email_pacientes', status_pacientes = '$status_pacientes', nome_convenio_pacientes = '$nome_convenio_pacientes', carteira_convenio_pacientes = '$carteira_convenio_pacientes', titular_convenio_pacientes = '$titular_convenio_pacientes', tipo_plano_convenio_pacientes = '$tipo_plano_convenio_pacientes', data_cadastro_pacientes = '$data_cadastro_pacientes' WHERE matricula_pacientes = '$matricula_pacientes'";
        if(mysqli_query($this->conexao->getCon(), $sql)){
            return true;
        }else{
            return false;
        }
    }
}