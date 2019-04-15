<?php
class FuncionariosDAO {
    private $conexao;
    private $Funcionarios;
    
    public function __construct() {
        $this->conexao = new Conexao();
        $this->Funcionarios = new Funcionarios();
    }
    
    public function cadastrar_funcionarios($Funcionarios){
        $sql = "INSERT INTO funcionarios (nome_completo_funcionarios, data_nascimento_funcionarios, sexo_funcionarios, cpf_funcionarios, rg_funcionarios, orgao_emissor_funcionarios, cep_funcionarios, endereco_funcionarios, complemento_funcionarios, bairro_funcionarios, cidade_funcionarios, uf_funcionarios, pais_funcionarios, telefone_funcionarios, celular1_funcionarios, celular2_funcionarios, email_funcionarios, cargo_funcionarios, salario_funcionarios, data_admissao_funcionarios, data_demissao_funcionarios, status_funcionarios, nome_usuarios_funcionarios)
                VALUES (
            '".$Funcionarios->getNome_completo_funcionarios()."', '".$Funcionarios->getData_nascimento_funcionarios()."', '".$Funcionarios->getSexo_funcionarios()."' ,'".$Funcionarios->getCpf_funcionarios()."', '".$Funcionarios->getRg_funcionarios()."', '".$Funcionarios->getOrgao_emissor_funcionarios()."', '".$Funcionarios->getCep_funcionarios()."', '".$Funcionarios->getEndereco_funcionarios()."', '".$Funcionarios->getComplemento_funcionarios()."', '".$Funcionarios->getBairro_funcionarios()."', '".$Funcionarios->getCidade_funcionarios()."', '".$Funcionarios->getUf_funcionarios()."', '".$Funcionarios->getPais_funcionarios()."', '".$Funcionarios->getTelefone_funcionarios()."', '".$Funcionarios->getCelular1_funcionarios()."', '".$Funcionarios->getCelular2_funcionarios()."', '".$Funcionarios->getEmail_funcionarios()."', '".$Funcionarios->getCargo_funcionarios()."', '".$Funcionarios->getSalario_funcionarios()."', '".$Funcionarios->getData_admissao_funcionarios()."', '".$Funcionarios->getData_demissao_funcionarios()."', '".$Funcionarios->getStatus_funcionarios()."', '".$Funcionarios->getNome_usuarios_funcionarios()."')";
        if(mysqli_query($this->conexao->getCon(), $sql)){
            return true;
        }else{
            return false;
        }
    }
    
    public function listar_funcionarios(){
        $sql = "SELECT * FROM funcionarios";
        $exe = mysqli_query($this->conexao->getCon(), $sql);
        if(mysqli_num_rows($exe) > 0){
            return $exe;
        }else{
            return false;
        }
    }
}
