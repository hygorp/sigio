<?php
class Conexao {
    private $db_user    = 'root';
    private $db_pass    = 'root';
    private $db_schema  = 'sigio';
    private $db_route   = '';
    private $db_con     = '';
    
    public function __construct() {
        $this->db_con = mysqli_connect($this->db_route, $this->db_user, $this->db_pass) or die ('A Conexão com o Banco de Dados Falhou! ' .mysqli_error($this->db_con));
        mysqli_select_db($this->db_con, $this->db_schema) or die ('A Conexão com o banco de Dados Falhou! '. mysqli_error($this->db_con));
    }
    
    public function getCon(){
        return $this->db_con;
    }
}
