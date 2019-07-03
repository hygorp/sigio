<?php
class ProcedimentosPacientesDAO{
    private $conexao;
    private $ProcedimentosPacientes;
    
    public function __construct(){
        $this->conexao = new Conexao();
        $this->ProcedimentosPacientes = new ProcedimentosPacientes();
    }
    
    public function exibir_procedimento_id($matricula_pacientes){
        $sql = "SELECT * FROM procedimentos_pacientes WHERE matricula_pacientes = '$matricula_pacientes'";
        $exe = mysqli_query($this->conexao->getCon(), $sql);
        if(mysqli_num_rows($exe) > 0){
            return $exe;
        }else{
            return false;
        }
    }
    
    public function exibir_procedimento_id_join($matricula_pacientes, $matricula_dentistas){
        $sql = "SELECT * FROM procedimentos_pacientes INNER JOIN dentistas WHERE (procedimentos_pacientes.matricula_pacientes = '$matricula_pacientes' AND dentistas.matricula_dentistas = '$matricula_dentistas')";
        $exe = mysqli_query($this->conexao->getCon(), $sql);
        if(mysqli_num_rows($exe) > 0){
            return $exe;
        }else{
            return false;
        }
    }
    
    public function inserir_procedimento($ProcedimentosPacientes){
        $sql = "INSERT INTO procedimentos_pacientes (matricula_pacientes, matricula_dentistas, procedimento_procedimentos_pacientes, data_cadastro_procedimentos_pacientes, status_procedimentos_pacientes)
               VALUES ('".$ProcedimentosPacientes->getMatricula_pacientes()."', '".$ProcedimentosPacientes->getMatriculaDentistas()."', '".$ProcedimentosPacientes->getProcedimento_procedimentos_pacientes()."', '".$ProcedimentosPacientes->getData_cadatro_procedimentos_pacientes()."', '".$ProcedimentosPacientes->getStatus_procedimentos_pacientes()."')";
        
        if(mysqli_query($this->conexao->getCon(), $sql)){
            return true;
        }else{
            return false;
        }
    }
}