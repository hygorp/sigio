<?php
class Patrimonio {
    private $id_patrimonio;
    private $nome_patrimonio;
    private $descricao_patrimonio;
    private $quantidade_patrimonio;
    private $data_cadastro_patrimonio;
    private $status_patrimonio;
    private $usuario_cadastro_patrimonio;
    private $setor_patrimonio;
    private $valor_patrimonio;
    private $data_compra_patrimonio;
    private $cor_produto_patrimonio;
    private $fabricante_patrimonio;
    private $nota_fiscal_patrimonio;
    private $serie_nota_fiscal_patrimonio;
    private $observacoes_patrimonio;
    private $cobertura_garantia_patrimonio;

    function getId_patrimonio() {
        return $this->id_patrimonio;
    }

    function getNome_patrimonio() {
        return $this->nome_patrimonio;
    }

    function getDescricao_patrimonio() {
        return $this->descricao_patrimonio;
    }

    function getQuantidade_patrimonio() {
        return $this->quantidade_patrimonio;
    }

    function getData_cadastro_patrimonio() {
        return $this->data_cadastro_patrimonio;
    }

    function getStatus_patrimonio() {
        return $this->status_patrimonio;
    }

    function getUsuario_cadastro_patrimonio() {
        return $this->usuario_cadastro_patrimonio;
    }

    function getSetor_patrimonio() {
        return $this->setor_patrimonio;
    }

    function getValor_patrimonio() {
        return $this->valor_patrimonio;
    }

    function getData_compra_patrimonio() {
        return $this->data_compra_patrimonio;
    }

    function getCor_produto_patrimonio() {
        return $this->cor_produto_patrimonio;
    }

    function getFabricante_patrimonio() {
        return $this->fabricante_patrimonio;
    }

    function getNota_fiscal_patrimonio() {
        return $this->nota_fiscal_patrimonio;
    }

    function getSerie_nota_fiscal_patrimonio() {
        return $this->serie_nota_fiscal_patrimonio;
    }

    function getObservacoes_patrimonio() {
        return $this->observacoes_patrimonio;
    }

    function getCobertura_garantia_patrimonio() {
        return $this->cobertura_garantia_patrimonio;
    }

    function setId_patrimonio($id_patrimonio) {
        $this->id_patrimonio = $id_patrimonio;
    }

    function setNome_patrimonio($nome_patrimonio) {
        $this->nome_patrimonio = $nome_patrimonio;
    }

    function setDescricao_patrimonio($descricao_patrimonio) {
        $this->descricao_patrimonio = $descricao_patrimonio;
    }

    function setQuantidade_patrimonio($quantidade_patrimonio) {
        $this->quantidade_patrimonio = $quantidade_patrimonio;
    }

    function setData_cadastro_patrimonio($data_cadastro_patrimonio) {
        $this->data_cadastro_patrimonio = $data_cadastro_patrimonio;
    }

    function setStatus_patrimonio($status_patrimonio) {
        $this->status_patrimonio = $status_patrimonio;
    }

    function setUsuario_cadastro_patrimonio($usuario_cadastro_patrimonio) {
        $this->usuario_cadastro_patrimonio = $usuario_cadastro_patrimonio;
    }

    function setSetor_patrimonio($setor_patrimonio) {
        $this->setor_patrimonio = $setor_patrimonio;
    }

    function setValor_patrimonio($valor_patrimonio) {
        $this->valor_patrimonio = $valor_patrimonio;
    }

    function setData_compra_patrimonio($data_compra_patrimonio) {
        $this->data_compra_patrimonio = $data_compra_patrimonio;
    }

    function setCor_produto_patrimonio($cor_produto_patrimonio) {
        $this->cor_produto_patrimonio = $cor_produto_patrimonio;
    }

    function setFabricante_patrimonio($fabricante_patrimonio) {
        $this->fabricante_patrimonio = $fabricante_patrimonio;
    }

    function setNota_fiscal_patrimonio($nota_fiscal_patrimonio) {
        $this->nota_fiscal_patrimonio = $nota_fiscal_patrimonio;
    }

    function setSerie_nota_fiscal_patrimonio($serie_nota_fiscal_patrimonio) {
        $this->serie_nota_fiscal_patrimonio = $serie_nota_fiscal_patrimonio;
    }

    function setObservacoes_patrimonio($observacoes_patrimonio) {
        $this->observacoes_patrimonio = $observacoes_patrimonio;
    }

    function setCobertura_garantia_patrimonio($cobertura_garantia_patrimonio) {
        $this->cobertura_garantia_patrimonio = $cobertura_garantia_patrimonio;
    }
}
