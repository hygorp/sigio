<?php
class ProcedimentosPacientes {
    private $matricula_pacientes;
    private $nome_completo_dentistas;
    private $procedimento_procedimentos_pacientes;
    private $data_cadatro_procedimentos_pacientes;
    private $status_procedimentos_pacientes;
    
    function getMatricula_pacientes() {
        return $this->matricula_pacientes;
    }

    function getNome_completo_dentistas() {
        return $this->nome_completo_dentistas;
    }

    function getProcedimento_procedimentos_pacientes() {
        return $this->procedimento_procedimentos_pacientes;
    }

    function getData_cadatro_procedimentos_pacientes() {
        return $this->data_cadatro_procedimentos_pacientes;
    }

    function getStatus_procedimentos_pacientes() {
        return $this->status_procedimentos_pacientes;
    }

    function setMatricula_pacientes($matricula_pacientes) {
        $this->matricula_pacientes = $matricula_pacientes;
    }

    function setNome_completo_dentistas($nome_completo_dentistas) {
        $this->nome_completo_dentistas = $nome_completo_dentistas;
    }

    function setProcedimento_procedimentos_pacientes($procedimento_procedimentos_pacientes) {
        $this->procedimento_procedimentos_pacientes = $procedimento_procedimentos_pacientes;
    }

    function setData_cadatro_procedimentos_pacientes($data_cadatro_procedimentos_pacientes) {
        $this->data_cadatro_procedimentos_pacientes = $data_cadatro_procedimentos_pacientes;
    }

    function setStatus_procedimentos_pacientes($status_procedimentos_pacientes) {
        $this->status_procedimentos_pacientes = $status_procedimentos_pacientes;
    }


}