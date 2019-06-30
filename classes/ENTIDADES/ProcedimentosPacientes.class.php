<?php
class ProcedimentosPacientes {
    private $codigo_procedimentos_pacientes;
    private $nome_procedimentos_pacientes;
    private $matricula_pacientes;
    private $matricula_dentistas;
    private $data_cadatro_procedimentos_pacientes;
    private $status_procedimentos_pacientes;
    
    function getCodigo_procedimentos_pacientes() {
        return $this->codigo_procedimentos_pacientes;
    }

    function getNome_procedimentos_pacientes() {
        return $this->nome_procedimentos_pacientes;
    }

    function getMatricula_pacientes() {
        return $this->matricula_pacientes;
    }

    function getMatricula_dentistas() {
        return $this->matricula_dentistas;
    }

    function getData_cadatro_procedimentos_pacientes() {
        return $this->data_cadatro_procedimentos_pacientes;
    }

    function getStatus_procedimentos_pacientes() {
        return $this->status_procedimentos_pacientes;
    }

    function setCodigo_procedimentos_pacientes($codigo_procedimentos_pacientes) {
        $this->codigo_procedimentos_pacientes = $codigo_procedimentos_pacientes;
    }

    function setNome_procedimentos_pacientes($nome_procedimentos_pacientes) {
        $this->nome_procedimentos_pacientes = $nome_procedimentos_pacientes;
    }

    function setMatricula_pacientes($matricula_pacientes) {
        $this->matricula_pacientes = $matricula_pacientes;
    }

    function setMatricula_dentistas($matricula_dentistas) {
        $this->matricula_dentistas = $matricula_dentistas;
    }

    function setData_cadatro_procedimentos_pacientes($data_cadatro_procedimentos_pacientes) {
        $this->data_cadatro_procedimentos_pacientes = $data_cadatro_procedimentos_pacientes;
    }

    function setStatus_procedimentos_pacientes($status_procedimentos_pacientes) {
        $this->status_procedimentos_pacientes = $status_procedimentos_pacientes;
    }
}


