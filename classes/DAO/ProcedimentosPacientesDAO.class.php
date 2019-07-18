<?php
class ProcedimentosPacientesDAO{
    private $conexao;
    private $ProcedimentosPacientes;
    
    public function __construct(){
        $this->conexao = new Conexao();
        $this->ProcedimentosPacientes = new ProcedimentosPacientes();
    }
    
    public function exibir_procedimento_id($matricula_paciente_procedimentos){
        $sql = "SELECT * FROM procedimentos_pacientes WHERE matricula_pacientes = '$matricula_paciente_procedimentos'";
        $exe = mysqli_query($this->conexao->getCon(), $sql);
        if(mysqli_num_rows($exe) > 0){
            return $exe;
        }else{
            return false;
        }
    }
    
    public function inserir_procedimento($ProcedimentosPacientes){
        $sql = "INSERT INTO procedimentos_pacientes (matricula_pacientes, nome_completo_dentistas, procedimento_procedimentos_pacientes, data_cadastro_procedimentos_pacientes, status_procedimentos_pacientes)
               VALUES ('".$ProcedimentosPacientes->getMatricula_pacientes()."', '".$ProcedimentosPacientes->getNome_completo_dentistas()."', '".$ProcedimentosPacientes->getProcedimento_procedimentos_pacientes()."', '".$ProcedimentosPacientes->getData_cadatro_procedimentos_pacientes()."', '".$ProcedimentosPacientes->getStatus_procedimentos_pacientes()."')";
        
        if(mysqli_query($this->conexao->getCon(), $sql)){
            return true;
        }else{
            return false;
        }
    }
}