<?php
    session_start();
        if(isset($_SESSION['usuario'])){
            header("location: dashboard.php?p=dados-dashboard");
        }
    include './classes/Conexao.class.php';
    include './classes/DAO/UsuariosDAO.class.php';
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sigio - Login</title>
        <link rel="icon" href="assets/images/fav_sigio.png" type="image/png" sizes="16x16">
        <link rel="stylesheet" type="text/css" href="assets/css/index.stylesheet.css">
        <link rel="stylesheet" type="text/css" href="assets/semantic/semantic.min.css">
        <link rel="stylesheet" type="text/css" href="assets/toastr/toastr.min.css">
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
        <div class="alerts">
        </div>
        
        <div class="logo">
            <img src="assets/images/login_sigio.png" width="180">
        </div>
        
        <div class="page-center">
            <div class="login">
                <form class="ui form login-form" action="" method="POST">
                    <div class="field">
                        <div class="ui left icon large input">
                            <input type="text" id="usuario" name="usuario" placeholder="Usuário">
                            <i class="user icon"></i>
                        </div>
                    </div>

                    <div class="field">
                        <div class="ui left icon large input">
                            <input type="password" id="senha" name="senha" placeholder="Senha">
                            <i class="key icon"></i>
                        </div>
                    </div>

                    <div class="field">
                        <button class="ui right labeled icon teal large button fluid" name="logar">
                            <i class="right arrow icon"></i>
                            Logar
                        </button>
                    </div>
                    
                    <div class="ui error message"></div>
                </form>
            </div>
        </div>
        <?php
            $POST = $_POST;
            if ($POST){
                //instanciando objeto $UsuarioDao a partir da Classe UsuariosDAO.class.php
                $UsuariosDAO = new UsuariosDAO();
                //variaveis usuario e senha recebem dados dos campos 'usuario e senha'
                $usuario    = $POST['usuario'];
                $senha      = md5($POST['senha']);
                //variavel responsavel por enviar os dados do formulario para o método login em UsuariosDao.class.php
                $user       = $UsuariosDAO->login($usuario, $senha);

                if (isset($POST['logar'])){
                    if($user == true){
                        $_SESSION['usuario'] = $usuario;
                        $_SESSION['senha']   = $senha;
                        header('location: dashboard.php?p=dados-dashboard');
                    }else{
                        echo '<script>toastr["error"]("Usuário ou Senha incorretos!", "Erro")</script>';
                    }
                }
            }
        ?>
    </body>
    
</html>