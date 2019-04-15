<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    session_start();
    
    if(!(isset($_SESSION['usuario']))){
        header("location: index.php");
    }
    
    include './classes/Conexao.class.php';
    include './classes/ENTIDADES/Usuarios.class.php';
    include './classes/ENTIDADES/Pacientes.class.php';
    include './classes/ENTIDADES/Dentistas.class.php';
    include './classes/ENTIDADES/Funcionarios.class.php';
    include './classes/ENTIDADES/Estoque.class.php';
    include './classes/ENTIDADES/Patrimonio.class.php';
    include './classes/ENTIDADES/Fornecedores.class.php';
    include './classes/ENTIDADES/Laboratorios.class.php';
    include './classes/ENTIDADES/Convenios.class.php';
    include './classes/DAO/UsuariosDAO.class.php';
    include './classes/DAO/PacientesDAO.class.php';
    include './classes/DAO/DentistasDAO.class.php';
    include './classes/DAO/FuncionariosDAO.class.php';
    include './classes/DAO/EstoqueDAO.class.php';
    include './classes/DAO/PatrimonioDAO.class.php';
    include './classes/DAO/FornecedoresDAO.class.php';
    include './classes/DAO/LaboratoriosDAO.class.php';
    include './classes/DAO/ConveniosDAO.class.php';
    $UsuariosDAO = new UsuariosDAO();
    $PacientesDAO = new PacientesDAO();
    $DentistasDAO = new DentistasDAO();
    $FuncionariosDAO = new FuncionariosDAO();
    $EstoqueDAO = new EstoqueDAO(); 
    $PatrimonioDAO = new PatrimonioDAO();
    $FornecedoresDAO = new FornecedoresDAO();
    $LaboratoriosDAO = new LaboratoriosDAO();
    $ConveniosDAO = new ConveniosDAO();
    $Usuarios = new Usuarios();
    $Pacientes = new Pacientes();
    $Dentistas = new Dentistas();
    $Funcionarios = new Funcionarios();
    $Estoque = new Estoque();
    $Patrimonio = new Patrimonio();
    $Fornecedores = new Fornecedores();
    $Laboratorios = new Laboratorios();
    $Convenios = new Convenios();
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
    
    $quantidade_pacientes = $PacientesDAO->contar_pacientes();
    if($quantidade_pacientes == true){
        for($i = 0; $i < mysqli_num_rows($quantidade_pacientes); $i++){
            $dados_quantidade_pacientes = mysqli_fetch_assoc($quantidade_pacientes);
        }
    }
    
    $quantidade_dentistas = $DentistasDAO->contar_dentistas();
    if($quantidade_dentistas == true){
        for($i = 0; $i < mysqli_num_rows($quantidade_dentistas); $i++){
            $dados_quantidade_dentistas = mysqli_fetch_assoc($quantidade_dentistas);
        }
    }
    
    //regra para nivel de acesso
    //Master
    if($Usuarios->getNivel_acesso_usuarios() == 1){
        $funcoes = 'menu/menu_master.php';
    }
    //Administrador
    if($Usuarios->getNivel_acesso_usuarios() == 2){
        $funcoes = 'menu/menu_admin.php';
    }
    //Dentistas
    if($Usuarios->getNivel_acesso_usuarios() == 3){
        $funcoes = 'menu/menu_dentistas.php';
    }
    //Funcionários (Secretária)
    if($Usuarios->getNivel_acesso_usuarios() == 4){
        $funcoes = 'menu/menu_funcionarios.php';
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
        <script type="text/javascript" src="assets/js/jquery.mask.js"></script>
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
                <img src="assets/images/sidenav-sigio.png" width="40" onclick="location.href='dashboard.php?p=dados-dashboard'">
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
            
            <div class="initial-menu" onclick="location.href='dashboard.php?p=dados-dashboard'">
                <p>
                    <i class="dashboard icon"></i>
                    Dashboard
                </p>
            </div>
            
            <div class="menu-accordion">
                <?php include $funcoes; ?>
            </div>    
        </div>
        
        <div class="sidenav-responsive">
            <?php include $funcoes; ?>
        </div>
        
        <div class="main-content">
            <?php
                $valueGet = @$_GET['p'];
                if($valueGet == "dados-dashboard"){require_once 'dashboard/dados.dashboard.php';}
                if($valueGet == "cadastro-pacientes"){require_once 'pacientes/cadastro.pacientes.php';}
                if($valueGet == "consultar-pacientes"){require_once 'pacientes/consulta.pacientes.php';}
                if($valueGet == "prontuario-pacientes"){require_once 'pacientes/prontuario.pacientes.php';}
                if($valueGet == "cadastro-dentistas"){require_once 'dentistas/cadastro.dentistas.php';}
                if($valueGet == "consultar-dentistas") {require_once 'dentistas/consulta.dentistas.php';}
                if($valueGet == "cadastro-funcionarios"){require_once 'funcionarios/cadastro.funcionarios.php';}
                if($valueGet == "consultar-funcionarios"){require_once 'funcionarios/consulta.funcionarios.php';}
                if($valueGet == "cadastro-estoque"){require_once 'estoque/cadastro.estoque.php';}
                if($valueGet == "cadastro-patrimonio"){require_once 'patrimonio/cadastro.patrimonio.php';}
                if($valueGet == "controle-patrimonio"){require_once 'patrimonio/controle.patrimonio.php';}
                if($valueGet == "cadastro-fornecedores"){require_once 'fornecedores/cadastro.fornecedores.php';}
                if($valueGet == "controle-fornecedores"){require_once 'fornecedores/controle.fornecedores.php';}
                if($valueGet == "cadastro-laboratorios"){require_once 'laboratorios/cadastro.laboratorios.php';}
                if($valueGet == "controle-laboratorios"){require_once 'laboratorios/controle.laboratorios.php';}
                if($valueGet == "cadastro-convenios"){require_once 'convenios/cadastro.convenios.php';}
            ?>
        </div>
  
        <script type="text/javascript" src="assets/js/dashboard.accordion.menu.js"></script>
    </body>
</html>