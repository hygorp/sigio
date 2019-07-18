<?php include './includes/dashboard.config.php'; ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sigio - Dashboard</title>
        <link rel="icon" href="assets/images/fav_sigio.png" type="image/png" sizes="16x16">
        <link rel="stylesheet" type="text/css" href="assets/css/dashboard.stylesheet.css">
        <link rel="stylesheet" type="text/css" href="assets/semantic/semantic.css">
        <link rel="stylesheet" type="text/css" href="assets/toastr/toastr.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">
        <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="assets/semantic/semantic.min.js"></script>
        <script type="text/javascript" src="assets/toastr/toastr.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.mask.js"></script>
        <script type="text/javascript" src="assets/js/form-validation.js"></script>
        <script type="text/javascript" src="assets/js/cep.js"></script>
        <script>
            var url = "http://localhost:8080/";
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
            <?php require_once './routes/sigio.routes.php';?>
        </div>
  
        <script type="text/javascript" src="assets/js/dashboard.accordion.menu.js"></script>
    </body>
</html>