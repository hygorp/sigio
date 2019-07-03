<?php
class ProcedimentosClinica {
    private $codigo_procedimentos_clinica;
    private $nome_procedimentos_clinica;
    
    function getCodigo_procedimentos_clinica() {
        return $this->codigo_procedimentos_clinica;
    }

    function getNome_procedimentos_clinica() {
        return $this->nome_procedimentos_clinica;
    }

    function setCodigo_procedimentos_clinica($codigo_procedimentos_clinica) {
        $this->codigo_procedimentos_clinica = $codigo_procedimentos_clinica;
    }

    function setNome_procedimentos_clinica($nome_procedimentos_clinica) {
        $this->nome_procedimentos_clinica = $nome_procedimentos_clinica;
    }
}