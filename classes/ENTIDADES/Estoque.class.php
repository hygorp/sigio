<?php
class Estoque {
    private $id_estoque;
    private $produto_estoque;
    private $descricao_produto_estoque;
    private $valor_produto_estoque;
    private $codigo_produto_estoque;
    private $quantidade_estoque;
    private $data_entrada_estoque;
    private $data_retirada_estoque;
    private $usuario_cadastro_estoque;
    private $observacoes_estoque;
    private $unidade_medida_estoque;

    
    function getId_estoque() {
        return $this->id_estoque;
    }

    function getProduto_estoque() {
        return $this->produto_estoque;
    }

    function getDescricao_produto_estoque() {
        return $this->descricao_produto_estoque;
    }
    
    function getValor_produto_estoque() {
        return $this->valor_produto_estoque;
    }

    function getCodigo_produto_estoque() {
        return $this->codigo_produto_estoque;
    }

    function getQuantidade_estoque() {
        return $this->quantidade_estoque;
    }

    function getData_entrada_estoque() {
        return $this->data_entrada_estoque;
    }

    function getData_retirada_estoque() {
        return $this->data_retirada_estoque;
    }

    function getUsuario_cadastro_estoque() {
        return $this->usuario_cadastro_estoque;
    }

    function getObservacoes_estoque() {
        return $this->observacoes_estoque;
    }

    function getUnidade_medida_estoque() {
        return $this->unidade_medida_estoque;
    }

    function setId_estoque($id_estoque) {
        $this->id_estoque = $id_estoque;
    }

    function setProduto_estoque($produto_estoque) {
        $this->produto_estoque = $produto_estoque;
    }

    function setDescricao_produto_estoque($descricao_produto_estoque) {
        $this->descricao_produto_estoque = $descricao_produto_estoque;
    }
    
    function setValor_produto_estoque($valor_produto_estoque) {
        $this->valor_produto_estoque = $valor_produto_estoque;
    }

    function setCodigo_produto_estoque($codigo_produto_estoque) {
        $this->codigo_produto_estoque = $codigo_produto_estoque;
    }

    function setQuantidade_estoque($quantidade_estoque) {
        $this->quantidade_estoque = $quantidade_estoque;
    }

    function setData_entrada_estoque($data_entrada_estoque) {
        $this->data_entrada_estoque = $data_entrada_estoque;
    }

    function setData_retirada_estoque($data_retirada_estoque) {
        $this->data_retirada_estoque = $data_retirada_estoque;
    }

    function setUsuario_cadastro_estoque($usuario_cadastro_estoque) {
        $this->usuario_cadastro_estoque = $usuario_cadastro_estoque;
    }

    function setObservacoes_estoque($observacoes_estoque) {
        $this->observacoes_estoque = $observacoes_estoque;
    }

    function setUnidade_medida_estoque($unidade_medida_estoque) {
        $this->unidade_medida_estoque = $unidade_medida_estoque;
    }
}
