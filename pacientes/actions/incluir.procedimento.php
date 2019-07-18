<?php
    @define (DB_USER, 'root');
    @define (DB_PASSWORD, 'raimundos123');
    @define (DB_DATABASE, 'sigio');
    @define (DB_HOST, 'localhost');
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
    
    $sql = "INSERT INTO procedimentos_pacientes (matricula_pacientes, nome_completo_dentistas, procedimento_procedimentos_pacientes, data_cadastro_procedimentos_pacientes, status_procedimentos_pacientes) VALUES ('".$_POST['matricula_pacientes']."','".$_POST['nome_completo_dentistas']."','".$_POST['procedimento_procedimentos_pacientes']."','".$_POST['data_cadastro_procedimentos_pacientes']."','".$_POST['status_procedimentos_pacientes']."')";
    
    $result = $mysqli->query($sql);
    
    echo json_encode($data);