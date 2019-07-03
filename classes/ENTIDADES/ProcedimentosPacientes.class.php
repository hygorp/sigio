<?php
class ProcedimentosPacientes {
    private $matricula_pacientes;
    private $matricula_dentistas;
    private $procedimento_procedimentos_pacientes;
    private $data_cadatro_procedimentos_pacientes;
    private $status_procedimentos_pacientes;
    
    function getMatricula_pacientes() {
        return $this->matricula_pacientes;
    }

    function getMatricula_dentistas() {
        return $this->matricula_dentistas;
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

    function setMatricula_dentistas($matricula_dentistas) {
        $this->matricula_dentistas = $matricula_dentistas;
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