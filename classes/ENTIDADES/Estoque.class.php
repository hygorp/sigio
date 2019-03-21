<?php
class Estoque {
    private $id;
    private $produto;
    private $descricao;
    private $codigo_produto;
    private $quantidade;
    private $data_entrada;
    private $data_retirada;
    private $observacoes;
    private $unidade_medida;
    private $usuario;
    
    function getId() {
        return $this->id;
    }

    function getProduto() {
        return $this->produto;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getCodigo_produto() {
        return $this->codigo_produto;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getData_entrada() {
        return $this->data_entrada;
    }

    function getData_retirada() {
        return $this->data_retirada;
    }

    function getObservacoes() {
        return $this->observacoes;
    }

    function getUnidade_medida() {
        return $this->unidade_medida;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setProduto($produto) {
        $this->produto = $produto;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setCodigo_produto($codigo_produto) {
        $this->codigo_produto = $codigo_produto;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function setData_entrada($data_entrada) {
        $this->data_entrada = $data_entrada;
    }

    function setData_retirada($data_retirada) {
        $this->data_retirada = $data_retirada;
    }

    function setObservacoes($observacoes) {
        $this->observacoes = $observacoes;
    }

    function setUnidade_medida($unidade_medida) {
        $this->unidade_medida = $unidade_medida;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }


}
