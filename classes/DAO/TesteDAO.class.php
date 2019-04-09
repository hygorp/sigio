<?php
class TesteDAO{
    private $conexao;
    
    public function __construct() {
        $this->conexao = new Conexao();
    }
    
    public function inserir($Teste){
        $sql = "INSERT INTO teste VALUES ('".$Teste->getCampo1()."', '".$Teste->getCampo2()."') ";
        if(mysqli_query($this->conexao->getCon(), $sql)){
            return true;
        }else{
            return false;
        }
    }
}