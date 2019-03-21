<?php
class Pacientes {
    private $matricula;
    private $nome;
    private $data_nascimento;
    private $cpf;
    private $rg;
    private $orgao_emissor;
    private $cep;
    private $endereco;
    private $complemento;
    private $bairro;
    private $cidade;
    private $uf;
    private $pais;
    private $telefone;
    private $celular1;
    private $celular2;
    private $email;
    private $data_cadastro;
    private $status;
    
    function getMatricula() {
        return $this->matricula;
    }

    function getNome() {
        return $this->nome;
    }

    function getData_nascimento() {
        return $this->data_nascimento;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getRg() {
        return $this->rg;
    }

    function getOrgao_emissor() {
        return $this->orgao_emissor;
    }

    function getCep() {
        return $this->cep;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getComplemento() {
        return $this->complemento;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getUf() {
        return $this->uf;
    }

    function getPais() {
        return $this->pais;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getCelular1() {
        return $this->celular1;
    }

    function getCelular2() {
        return $this->celular2;
    }

    function getEmail() {
        return $this->email;
    }

    function getData_cadastro() {
        return $this->data_cadastro;
    }

    function getStatus() {
        return $this->status;
    }

    function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setData_nascimento($data_nascimento) {
        $this->data_nascimento = $data_nascimento;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setRg($rg) {
        $this->rg = $rg;
    }

    function setOrgao_emissor($orgao_emissor) {
        $this->orgao_emissor = $orgao_emissor;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setUf($uf) {
        $this->uf = $uf;
    }

    function setPais($pais) {
        $this->pais = $pais;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setCelular1($celular1) {
        $this->celular1 = $celular1;
    }

    function setCelular2($celular2) {
        $this->celular2 = $celular2;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setData_cadastro($data_cadastro) {
        $this->data_cadastro = $data_cadastro;
    }

    function setStatus($status) {
        $this->status = $status;
    }


}
