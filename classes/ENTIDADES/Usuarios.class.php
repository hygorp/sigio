<?php
class Usuarios {
    private $id;
    private $nome_usuarios;
    private $senha_usuarios;
    private $nivel_acesso_usuarios;
    
    function getId() {
        return $this->id;
    }

    function getNome_usuarios() {
        return $this->nome_usuarios;
    }

    function getSenha_usuarios() {
        return $this->senha_usuarios;
    }

    function getNivel_acesso_usuarios() {
        return $this->nivel_acesso_usuarios;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome_usuarios($nome_usuarios) {
        $this->nome_usuarios = $nome_usuarios;
    }

    function setSenha_usuarios($senha_usuarios) {
        $this->senha_usuarios = $senha_usuarios;
    }

    function setNivel_acesso_usuarios($nivel_acesso_usuarios) {
        $this->nivel_acesso_usuarios = $nivel_acesso_usuarios;
    }


}
