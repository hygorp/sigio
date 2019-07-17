<?php
    //funcoes do php para mostrar erros
    ini_set('display_errors',1);
    ini_set('display_startup_erros',1);
    error_reporting(E_ALL); 
    session_start();
    
    //verificando se existe sessao de usuario criada
    if(!(isset($_SESSION['usuario']))){
        header("location: index.php");
    }
    
    //include das entidades(classes)
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
    include './classes/ENTIDADES/ProcedimentosPacientes.class.php';
    include './classes/ENTIDADES/ProcedimentosClinica.class.php';
    
    //include das classes DAO(Data Acess Object)
    include './classes/DAO/UsuariosDAO.class.php';
    include './classes/DAO/PacientesDAO.class.php';
    include './classes/DAO/DentistasDAO.class.php';
    include './classes/DAO/FuncionariosDAO.class.php';
    include './classes/DAO/EstoqueDAO.class.php';
    include './classes/DAO/PatrimonioDAO.class.php';
    include './classes/DAO/FornecedoresDAO.class.php';
    include './classes/DAO/LaboratoriosDAO.class.php';
    include './classes/DAO/ConveniosDAO.class.php';
    include './classes/DAO/ProcedimentosPacientesDAO.class.php';
    include './classes/DAO/ProcedimentosClinicaDAO.class.php';
    
    //instancias das classes DAO(Data Acess Object)
    $UsuariosDAO = new UsuariosDAO();
    $PacientesDAO = new PacientesDAO();
    $DentistasDAO = new DentistasDAO();
    $FuncionariosDAO = new FuncionariosDAO();
    $EstoqueDAO = new EstoqueDAO(); 
    $PatrimonioDAO = new PatrimonioDAO();
    $FornecedoresDAO = new FornecedoresDAO();
    $LaboratoriosDAO = new LaboratoriosDAO();
    $ConveniosDAO = new ConveniosDAO();
    $ProcedimentosPacientesDAO = new ProcedimentosPacientesDAO();
    $ProcedimentosClinicaDAO = new ProcedimentosClinicasDAO();
    
    //instancia das entidades classes
    $Usuarios = new Usuarios();
    $Pacientes = new Pacientes();
    $Dentistas = new Dentistas();
    $Funcionarios = new Funcionarios();
    $Estoque = new Estoque();
    $Patrimonio = new Patrimonio();
    $Fornecedores = new Fornecedores();
    $Laboratorios = new Laboratorios();
    $Convenios = new Convenios();
    $ProcedimentosPacientes = new ProcedimentosPacientes;
    $ProcedimentosClinica = new ProcedimentosClinica;
    
    //variavel recebe sessao criada para o usuario que esta logado
    $usuario_logado = $_SESSION['usuario'];
    
    //algoritimo para armazenar os dados do usuario logado
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