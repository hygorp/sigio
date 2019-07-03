<?php
class ProcedimentosClinicasDAO {
    private $conexao;
    private $ProcedimentosClinica;
    
    public function __construct() {
        $this->conexao = new Conexao();
        $this->ProcedimentosClinica = new ProcedimentosClinica();
    }
    
    public function exibir_procedimentos(){
        $sql = "SELECT * FROM procedimentos_clinica";
        $exe = mysqli_query($this->conexao->getCon(), $sql);
        if(mysqli_num_rows($exe) > 0){
            return $exe;
        }else{
            return false;
        }
    }
}
