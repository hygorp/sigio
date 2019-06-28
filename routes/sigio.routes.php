<?php
    $valueGet = filter_input(INPUT_GET, 'p');
    if($valueGet == "dados-dashboard"){
        require_once 'dashboard/dados.dashboard.php';
    }
    if($valueGet == "cadastro-pacientes"){
        require_once 'pacientes/cadastro.pacientes.php';
    }
    if($valueGet == "consultar-pacientes"){
        require_once 'pacientes/consulta.pacientes.php';
    }
    if($valueGet == "prontuario-pacientes"){
        require_once 'pacientes/prontuario.pacientes.php';
    }
    if($valueGet == "cadastro-dentistas"){
        require_once 'dentistas/cadastro.dentistas.php';
    }
    if($valueGet == "consultar-dentistas"){
        require_once 'dentistas/consulta.dentistas.php';
    }
    if($valueGet == "cadastro-funcionarios"){
        require_once 'funcionarios/cadastro.funcionarios.php';
    }
    if($valueGet == "consultar-funcionarios"){
        require_once 'funcionarios/consulta.funcionarios.php';
    }
    if($valueGet == "cadastro-estoque"){
        require_once 'estoque/cadastro.estoque.php';
    }
    if($valueGet == "controle-estoque"){
        require_once 'estoque/controle.estoque.php';
    }
    if($valueGet == "cadastro-patrimonio"){
        require_once 'patrimonio/cadastro.patrimonio.php';
    }
    if($valueGet == "controle-patrimonio"){
        require_once 'patrimonio/controle.patrimonio.php';
    }
    if($valueGet == "cadastro-fornecedores"){
        require_once 'fornecedores/cadastro.fornecedores.php';
    }
    if($valueGet == "controle-fornecedores"){
        require_once 'fornecedores/controle.fornecedores.php';
    }
    if($valueGet == "cadastro-laboratorios"){
        require_once 'laboratorios/cadastro.laboratorios.php';
    }
    if($valueGet == "controle-laboratorios"){
        require_once 'laboratorios/controle.laboratorios.php';
    }
    if($valueGet == "cadastro-convenios"){
        require_once 'convenios/cadastro.convenios.php';
    }
    if($valueGet == "controle-convenios"){
        require_once 'convenios/controle.convenios.php';
    }