<?php
class Patrimonio {
    private $id;
    private $nome;
    private $descricao;
    private $quantidade;
    private $data_cadastro;
    private $status;
    private $setor;
    private $valor;
    private $data_compra;
    private $cor_produto;
    private $fabricante;
    private $nota_fiscal;
    private $serie_nota;
    private $observacoes;
    private $cobertura_garantia;
    private $usuario;
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getData_cadastro() {
        return $this->data_cadastro;
    }

    function getStatus() {
        return $this->status;
    }

    function getSetor() {
        return $this->setor;
    }

    function getValor() {
        return $this->valor;
    }

    function getData_compra() {
        return $this->data_compra;
    }

    function getCor_produto() {
        return $this->cor_produto;
    }

    function getFabricante() {
        return $this->fabricante;
    }

    function getNota_fiscal() {
        return $this->nota_fiscal;
    }

    function getSerie_nota() {
        return $this->serie_nota;
    }

    function getObservacoes() {
        return $this->observacoes;
    }

    function getCobertura_garantia() {
        return $this->cobertura_garantia;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function setData_cadastro($data_cadastro) {
        $this->data_cadastro = $data_cadastro;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setSetor($setor) {
        $this->setor = $setor;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setData_compra($data_compra) {
        $this->data_compra = $data_compra;
    }

    function setCor_produto($cor_produto) {
        $this->cor_produto = $cor_produto;
    }

    function setFabricante($fabricante) {
        $this->fabricante = $fabricante;
    }

    function setNota_fiscal($nota_fiscal) {
        $this->nota_fiscal = $nota_fiscal;
    }

    function setSerie_nota($serie_nota) {
        $this->serie_nota = $serie_nota;
    }

    function setObservacoes($observacoes) {
        $this->observacoes = $observacoes;
    }

    function setCobertura_garantia($cobertura_garantia) {
        $this->cobertura_garantia = $cobertura_garantia;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }


}
