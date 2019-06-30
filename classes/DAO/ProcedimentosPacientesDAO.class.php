<?php
class ProcedimentosPacientesDAO{
    private $conexao;
    private $ProcedimentosPacientes;
    
    public function __construct(){
        $this->conexao = new Conexao();
        $this->ProcedimentosPacientes = new ProcecimentosPacientes();
    }
    
    public function inserir_procedimento($ProcedimentosPacientes){
        $sql = "INSERT INTO procedimentos_pacientes (codigo_procedimentos_pacientes, nome_procedimentos_pacientes, matricula_pacientes, matricula_dentistas, data_cadastro_procedimentos_pacientes, status_procedimentos_pacientes)
               VALUES ('".$ProcedimentosPacientes -> getCodigo_procedimentos_pacientes()."', '".$ProcedimentosPacientes -> getNome_procedimentos_pacientes()."', '".$ProcedimentosPacientes -> getMatricula_pacientes()."', '".$ProcedimentosPacientes -> getMatricula_dentistas()."', '".$ProcedimentosPacientes -> getData_cadastro_procedimentos_pacientes()."', '".$ProcedimentosPacientes -> getStatus_procedimentos_pacientes()."')";
        if(mysqli_query($this->conexao->getCon(), $sql)){
            return true;
        }else{
            return false;
        }
    }
}