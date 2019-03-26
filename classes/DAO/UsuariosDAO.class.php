<?php
class UsuariosDAO {
    private $conexao;
    
    public function __construct() {
        $this->conexao = new Conexao();
    }
    
    public function login($usuario, $senha){
        $sql = "SELECT * FROM usuarios WHERE nome_usuarios = '$usuario' AND senha_usuarios = '$senha'";
        $exe = mysqli_query($this->conexao->getCon(), $sql);
        if (mysqli_num_rows($exe) > 0){
            return true;
        }else{
            return false;
        }
    }
}