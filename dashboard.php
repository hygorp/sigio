<?php
    session_start();
    
    if(!(isset($_SESSION['usuario']))){
        header("location: index.php");
    }
    
    include './classes/Conexao.class.php';
    include './classes/ENTIDADES/Usuarios.class.php';
    include './classes/DAO/UsuariosDAO.class.php';
    $UsuariosDAO = new UsuariosDAO();
    $Usuarios = new Usuarios();
    $usuario_logado = $_SESSION['usuario'];

    $exibir_usuario_logado = $UsuariosDAO->usuario_logado($usuario_logado);
    if($exibir_usuario_logado == true){
        for($i = 0; $i < mysqli_num_rows($exibir_usuario_logado); $i++){
            $dados_usuario_logado = mysqli_fetch_assoc($exibir_usuario_logado);
            $Usuarios->setId($dados_usuario_logado['id_usuarios']);
            $Usuarios->setNome_usuarios($dados_usuario_logado['nome_usuarios']);
            $Usuarios->setSenha_usuarios($dados_usuario_logado['senha_usuarios']);
            $Usuarios->setNivel_acesso_usuarios($dados_usuario_logado['nivel_acesso_usuarios']); 
        }
    }
    
    //regra para nivel de acesso
    //Master
    if($Usuarios->getNivel_acesso_usuarios() == 1){
        $funcoes = '
                    <button class="accordion-button">
                        <i class="users icon"></i>
                        Pacientes
                    </button>
                    <div class="panel">
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Cadastro
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Consultar Paciente
                        </button>
                    </div>

                    <button class="accordion-button">
                        <i class="user md icon"></i>
                        Dentistas
                    </button>
                    <div class="panel">
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Cadastro
                        </button>
                    
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Consultar Dentista
                        </button>
                    </div>
                
                    <button class="accordion-button">
                        <i class="id badge icon"></i>
                        Funcionários
                    </button>
                    <div class="panel">
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Cadastro
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Consultar Funcionário
                        </button>
                    </div>

                    <button class="accordion-button">
                        <i class="calendar alternate icon"></i>
                        Agenda
                    </button>
                    <div class="panel">
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Hello
                        </button>
                    </div>
                
                    <button class="accordion-button">
                        <i class="dollar sign icon"></i>
                        Financeiro
                    </button>
                    <div class="panel">
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Contas à Pagar
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Contas à Receber
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Formas de Pagamento
                        </button>
                    </div>
                
                    <button class="accordion-button">
                        <i class="chart line icon"></i>
                        Relatórios
                    </button>
                    <div class="panel">
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Financeiro
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Estoque
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Fornecedores
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Produtos
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Patrimônio
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Consultas
                        </button>
                    </div>
                
                    <button class="accordion-button">
                        <i class="box icon"></i>
                        Estoque
                    </button>
                    <div class="panel">
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Controle de Estoque
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Produtos
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Fornecedores
                        </button>
                    </div>
                    
                    <button class="accordion-button">
                        <i class="building icon"></i>
                        Patrimônio
                    </button>
                    <div class="panel">                
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Cadastro
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Controle de Patrimônio
                        </button>
                    </div>
                
                    <button class="accordion-button">
                        <i class="shipping fast icon"></i>
                        Fornecedores
                    </button>
                    <div class="panel">                
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Cadastro
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Controle de Fornecedores
                        </button>
                    </div>
                
                    <button class="accordion-button">
                        <i class="flask icon"></i>
                        Laboratórios
                    </button>
                    <div class="panel">                
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Cadastro
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Controle de Laboratórios
                        </button>
                    </div>
                
                    <button class="accordion-button">
                        <i class="address card icon"></i>
                        Convênios
                    </button>
                    <div class="panel">                
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Cadastro
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Consultar Convênios
                        </button>
                    </div>
                    

                <!--menu-responsive-->
                
             <div class="menu-responsive">
                <div class="menu-item-responsive">
                    <i class="big users icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Pacientes
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Cadastro
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Consultar Paciente
                        </a>
                    </div>
                </div>

                <div class="menu-item-responsive">
                    <i class="big user md icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Dentistas
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Cadastro
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Consultar Dentista
                        </a>
                    </div>
                </div>

                <div class="menu-item-responsive">
                    <i class="big id badge icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Funcionários
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Cadastro
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Consultar Funcionário
                        </a>
                    </div>
                </div>

                <div class="menu-item-responsive">
                    <i class="big calendar alternate icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Agenda
                        </a>
                    </div>
                </div>

                <div class="menu-item-responsive">
                    <i class="big dollar sign icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Financeiro
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Contas à Pagar
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Contas à Receber
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Formas de Pagamento
                        </a>
                    </div>
                </div>

                <div class="menu-item-responsive">
                    <i class="big chart line alternate icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Relatórios
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Financeiro
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Estoque
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Fornecedores
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Produtos
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Patrimônio
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Consultas
                        </a>
                    </div>
                </div>

                <div class="menu-item-responsive">
                    <i class="big box icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Estoque
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Controle de Estoque
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Produtos
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Fornecedores
                        </a>
                    </div>
                </div>

                <div class="menu-item-responsive">
                    <i class="big building icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Patrimônio
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Cadastro
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Controle de Patrimônio
                        </a>
                    </div>
                </div>

                <div class="menu-item-responsive">
                    <i class="big shipping fast icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Fornecedores
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Cadastro
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Controle de Fornecedores
                        </a>
                    </div>
                </div>

                <div class="menu-item-responsive">
                    <i class="big flask icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Laboratórios
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Cadastro
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Controle de Laboratórios
                        </a>
                    </div>
                </div>

                <div class="menu-item-responsive">
                    <i class="big address card icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Convênios
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Cadastro
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Consultar Convênios
                        </a>
                    </div>
                </div>
            </div>
                    ';
    }
    //Administrador
    if($Usuarios->getNivel_acesso_usuarios() == 2){
        $funcoes = '
                    <button class="accordion-button">
                        <i class="users icon"></i>
                        Pacientes
                    </button>
                    <div class="panel">
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Cadastro
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Consultar Paciente
                        </button>
                    </div>

                    <button class="accordion-button">
                        <i class="user md icon"></i>
                        Dentistas
                    </button>
                    <div class="panel">
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Cadastro
                        </button>
                    
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Consultar Dentista
                        </button>
                    </div>
                
                    <button class="accordion-button">
                        <i class="id badge icon"></i>
                        Funcionários
                    </button>
                    <div class="panel">
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Cadastro
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Consultar Funcionário
                        </button>
                    </div>

                    <button class="accordion-button">
                        <i class="calendar alternate icon"></i>
                        Agenda
                    </button>
                    <div class="panel">
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Hello
                        </button>
                    </div>
                
                    <button class="accordion-button">
                        <i class="dollar sign icon"></i>
                        Financeiro
                    </button>
                    <div class="panel">
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Contas à Pagar
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Contas à Receber
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Formas de Pagamento
                        </button>
                    </div>
                
                    <button class="accordion-button">
                        <i class="chart line icon"></i>
                        Relatórios
                    </button>
                    <div class="panel">
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Financeiro
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Estoque
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Fornecedores
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Produtos
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Patrimônio
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Consultas
                        </button>
                    </div>
                
                    <button class="accordion-button">
                        <i class="box icon"></i>
                        Estoque
                    </button>
                    <div class="panel">
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Controle de Estoque
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Produtos
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Fornecedores
                        </button>
                    </div>
                    
                    <button class="accordion-button">
                        <i class="building icon"></i>
                        Patrimônio
                    </button>
                    <div class="panel">                
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Cadastro
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Controle de Patrimônio
                        </button>
                    </div>
                
                    <button class="accordion-button">
                        <i class="shipping fast icon"></i>
                        Fornecedores
                    </button>
                    <div class="panel">                
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Cadastro
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Controle de Fornecedores
                        </button>
                    </div>
                
                    <button class="accordion-button">
                        <i class="flask icon"></i>
                        Laboratórios
                    </button>
                    <div class="panel">                
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Cadastro
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Controle de Laboratórios
                        </button>
                    </div>
                
                    <button class="accordion-button">
                        <i class="address card icon"></i>
                        Convênios
                    </button>
                    <div class="panel">                
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Cadastro
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Consultar Convênios
                        </button>
                    </div>
                    

                <!--menu-responsive-->
                
             <div class="menu-responsive">
                <div class="menu-item-responsive">
                    <i class="big users icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Pacientes
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Cadastro
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Consultar Paciente
                        </a>
                    </div>
                </div>

                <div class="menu-item-responsive">
                    <i class="big user md icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Dentistas
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Cadastro
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Consultar Dentista
                        </a>
                    </div>
                </div>

                <div class="menu-item-responsive">
                    <i class="big id badge icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Funcionários
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Cadastro
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Consultar Funcionário
                        </a>
                    </div>
                </div>

                <div class="menu-item-responsive">
                    <i class="big calendar alternate icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Agenda
                        </a>
                    </div>
                </div>

                <div class="menu-item-responsive">
                    <i class="big dollar sign icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Financeiro
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Contas à Pagar
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Contas à Receber
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Formas de Pagamento
                        </a>
                    </div>
                </div>

                <div class="menu-item-responsive">
                    <i class="big chart line alternate icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Relatórios
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Financeiro
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Estoque
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Fornecedores
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Produtos
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Patrimônio
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Consultas
                        </a>
                    </div>
                </div>

                <div class="menu-item-responsive">
                    <i class="big box icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Estoque
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Controle de Estoque
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Produtos
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Fornecedores
                        </a>
                    </div>
                </div>

                <div class="menu-item-responsive">
                    <i class="big building icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Patrimônio
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Cadastro
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Controle de Patrimônio
                        </a>
                    </div>
                </div>

                <div class="menu-item-responsive">
                    <i class="big shipping fast icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Fornecedores
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Cadastro
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Controle de Fornecedores
                        </a>
                    </div>
                </div>

                <div class="menu-item-responsive">
                    <i class="big flask icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Laboratórios
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Cadastro
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Controle de Laboratórios
                        </a>
                    </div>
                </div>

                <div class="menu-item-responsive">
                    <i class="big address card icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Convênios
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Cadastro
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Consultar Convênios
                        </a>
                    </div>
                </div>
            </div>
                    ';
    }
    //Dentistas
    if($Usuarios->getNivel_acesso_usuarios() == 3){
        $funcoes = '
                    <button class="accordion-button">
                        <i class="users icon"></i>
                        Pacientes
                    </button>
                    <div class="panel">
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Consultar Paciente
                        </button>
                    </div>

                    <button class="accordion-button">
                        <i class="calendar alternate icon"></i>
                        Agenda
                    </button>
                    <div class="panel">
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Hello
                        </button>
                    </div>
                    
                    <button class="accordion-button">
                        <i class="chart line icon"></i>
                        Relatórios
                    </button>
                    <div  class="panel">
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Estoque
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Produtos
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Patrimônio
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Consultas
                        </button>
                    </div>
                
                    <button class="accordion-button">
                        <i class="box icon"></i>
                        Estoque
                    </button>
                    <div class="panel">
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Controle de Estoque
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Produtos
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Fornecedores
                        </button>
                    </div>
                    
                    <button class="accordion-button">
                        <i class="address card icon"></i>
                        Convênios
                    </button>
                    <div class="panel">              
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Consultar Convênios
                        </button>
                    </div>
                    
                <!--menu-responsive-->
                
            <div class="menu-responsive">
                <div class="menu-item-responsive">
                    <i class="big users icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Pacientes
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Consultar Paciente
                        </a>
                    </div>
                </div>

                <div class="menu-item-responsive">
                    <i class="big calendar alternate icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Agenda
                        </a>
                    </div>
                </div>

                <div class="menu-item-responsive">
                    <i class="big chart line alternate icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Relatórios
                        </a>
                        
                        <a href="#">
                            <i class="caret right icon"></i>
                            Estoque
                        </a>
                        
                        <a href="#">
                            <i class="caret right icon"></i>
                            Produtos
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Patrimônio
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Consultas
                        </a>
                    </div>
                </div>

                <div class="menu-item-responsive">
                    <i class="big box icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Estoque
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Controle de Estoque
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Produtos
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Fornecedores
                        </a>
                    </div>
                </div>

                <div class="menu-item-responsive">
                    <i class="big address card icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Convênios
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Consultar Convênios
                        </a>
                    </div>
                </div>
            </div>
                    ';
    }
    //Funcionários (Secretária)
    if($Usuarios->getNivel_acesso_usuarios() == 4){
        $funcoes = '
                    <button class="accordion-button">
                        <i class="users icon"></i>
                        Pacientes
                    </button>
                    
                    <div class="panel">
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Cadastro
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Consultar Paciente
                        </button>
                    </div>
                    
                    <button class="accordion-button">
                        <i class="user md icon"></i>
                        Dentistas
                    </button>
                    <div class="panel">
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Consultar Dentista
                        </button>
                    </div>
                    
                    <button class="accordion-button">
                        <i class="calendar alternate icon"></i>
                        Agenda
                    </button>
                    <div class="panel">
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Hello
                        </button>
                    </div>
                    
                    <button class="accordion-button">
                        <i class="dollar sign icon"></i>
                        Financeiro
                    </button>
                    <div class="panel">
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Contas à Pagar
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Contas à Receber
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Formas de Pagamento
                        </button>
                    </div>
                
                    <button class="accordion-button">
                        <i class="chart line icon"></i>
                        Relatórios
                    </button>
                    <div class="panel">
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Financeiro
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Estoque
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Fornecedores
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Produtos
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Patrimônio
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Consultas
                        </button>
                    </div>
                
                    <button class="accordion-button">
                        <i class="box icon"></i>
                        Estoque
                    </button>
                    <div class="panel">
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Controle de Estoque
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Produtos
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Fornecedores
                        </button>
                    </div>
                    
                    <button class="accordion-button">
                        <i class="building icon"></i>
                        Patrimônio
                    </button>
                    <div class="panel">                
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Cadastro
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Controle de Patrimônio
                        </button>
                    </div>
                
                    <button class="accordion-button">
                        <i class="shipping fast icon"></i>
                        Fornecedores
                    </button>
                    <div class="panel">                
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Cadastro
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Controle de Fornecedores
                        </button>
                    </div>
                
                    <button class="accordion-button">
                        <i class="flask icon"></i>
                        Laboratórios
                    </button>
                    <div class="panel">                
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Cadastro
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Controle de Laboratórios
                        </button>
                    </div>
                
                    <button class="accordion-button">
                        <i class="address card icon"></i>
                        Convênios
                    </button>
                    <div class="panel">                
                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Cadastro
                        </button>

                        <button class="accordion-item">
                            <i class="caret right icon"></i>
                            Consultar Convênios
                        </button>
                    </div>
                    

                <!--menu-responsive-->
                
             <div class="menu-responsive">
                <div class="menu-item-responsive">
                    <i class="big users icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Pacientes
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Cadastro
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Consultar Paciente
                        </a>
                    </div>
                </div>

                <div class="menu-item-responsive">
                    <i class="big user md icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Dentistas
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Consultar Dentista
                        </a>
                    </div>
                </div>

                <div class="menu-item-responsive">
                    <i class="big calendar alternate icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Agenda
                        </a>
                    </div>
                </div>

                <div class="menu-item-responsive">
                    <i class="big dollar sign icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Financeiro
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Contas à Pagar
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Contas à Receber
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Formas de Pagamento
                        </a>
                    </div>
                </div>

                <div class="menu-item-responsive">
                    <i class="big chart line alternate icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Relatórios
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Financeiro
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Estoque
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Fornecedores
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Produtos
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Patrimônio
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Consultas
                        </a>
                    </div>
                </div>

                <div class="menu-item-responsive">
                    <i class="big box icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Estoque
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Controle de Estoque
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Produtos
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Fornecedores
                        </a>
                    </div>
                </div>

                <div class="menu-item-responsive">
                    <i class="big building icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Patrimônio
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Cadastro
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Controle de Patrimônio
                        </a>
                    </div>
                </div>

                <div class="menu-item-responsive">
                    <i class="big shipping fast icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Fornecedores
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Cadastro
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Controle de Fornecedores
                        </a>
                    </div>
                </div>

                <div class="menu-item-responsive">
                    <i class="big flask icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Laboratórios
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Cadastro
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Controle de Laboratórios
                        </a>
                    </div>
                </div>

                <div class="menu-item-responsive">
                    <i class="big address card icon"></i>
                    <div class="dropdown-content">
                        <a class="first-dropdown-content">
                            Convênios
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Cadastro
                        </a>
                        <a href="#">
                            <i class="caret right icon"></i>
                            Consultar Convênios
                        </a>
                    </div>
                </div>
            </div>
                    ';
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sigio - Dashboard</title>
        <link rel="icon" href="assets/images/fav_sigio.png" type="image/png" sizes="16x16">
        <link rel="stylesheet" type="text/css" href="assets/css/dashboard.stylesheet.css">
        <link rel="stylesheet" type="text/css" href="assets/semantic/semantic.min.css">
        <link rel="stylesheet" type="text/css" href="assets/toastr/toastr.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">
        <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="assets/semantic/semantic.min.js"></script>
        <script type="text/javascript" src="assets/toastr/toastr.min.js"></script>
        <script type="text/javascript" src="assets/js/form-validation.js"></script>
        <script>
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-center",
                "preventDuplicates": false, 
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        </script>
    </head>
    
    <body>
        <div class="sg-header">
            <div class="sg-header-logo">
                <img src="assets/images/dashboard_sigio.png" width="90">
            </div>
            
            <div class="sg-header-logo-responsive">
                <img src="assets/images/sidenav-sigio.png" width="40">
            </div>
            
            <form action="" method="POST">
                <button class="sg-header-logout" type="submit" name="logout" alt="Logout">
                    <div class="logout-icon">
                        <i class="power off large icon"></i>
                    </div>
                </button>
                <?php
                    $POST = $_POST;
                    if($POST){
                        if (isset($POST['logout'])){
                            SESSION_DESTROY();
                            echo '<script>toastr["warning"]("Você será desconectado!", "Atenção")</script>';
                            header("refresh: 3; index.php");
                        }
                    }
                ?>
            </form>
        </div>
        
        <div class="sidenav">       
            <div class="active-user">
                <div class="active-user-data">
                    <img class="active-user-image ui circular image" src="https://bit.ly/2FnXHSe" width="52">
                    <div class="active-user-data-info">
                        <span><?php echo $Usuarios->getNome_usuarios(); ?></span>
                        <div class="user-status">
                            <div class="online-icon" id="online-icon"></div>
                            <p>Online</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="initial-menu">
                <p>
                    <i class="bars icon"></i>
                    Menu Principal
                </p>
            </div>
            
            <div class="menu-accordion">
                <?php echo $funcoes; ?>
            </div>    
        </div>
        
        <div class="main-content">
            <div class="main-dashboard-monitor">
                <div class="ui grid">
                    <div class="eight wide column">
                        <div class="ui teal segment monitor-pacientes">Teal</div>
                    </div>
                    <div class="eight wide column">
                        <div class="ui blue segment monitor-consultas">Blue</div>
                    </div>
                </div>
            </div>
        </div>
        
        <script type="text/javascript" src="assets/js/dashboard.accordion.menu.js"></script>
        
    </body>
</html>