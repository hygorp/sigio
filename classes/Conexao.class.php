<?php
    class Conexao{
        private $db_user   = "root";
        private $db_pass   = "raimundos123";
        private $db_route  = "localhost";
        private $db_schema = "sigio";
        private $con       = "";
        
        public function __construct(){
            $this->con = mysqli_connect($this->db_route, $this->db_user, $this->db_pass) or die ("A Conexão com o Banco de Dados Falhou! " .mysqli_error($this->con));
            mysqli_select_db($this->con, $this->db_schema) or die ("A Conexão com o Banco de Dados Falhou! " . mysqli_error($this->con));
        }
        
        public function getCon(){
            return $this->con;
        }
    }
