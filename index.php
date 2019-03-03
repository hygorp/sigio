<!DOCTYPE html>
<html>
<meta charset="utf-8">
    <head>
        <meta charset="UTF-8">
        <title>Sigio - Login</title>
        <link rel="stylesheet" type="text/css" href="assets/css/index.stylesheet.css">
        <link rel="stylesheet" type="text/css" href="assets/semantic/semantic.min.css">
        <link rel="stylesheet" type="text/css" href="assets/toastr/toastr.min.css">
        <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="assets/semantic/semantic.min.js"></script>
        <script type="text/javascript" src="assets/toastr/toastr.min.js"></script>
    </head>
    
    <body>
        <div class="alerts">
            
        </div>
        
        <div class="page-center">
            <div class="login-title">
                <img src="assets/images/login_sigio.png" width="150">
            </div>
            
            <div class="login">
                <form class="ui form">
                    <div class="field">
                        <div class="ui left icon input">
                            <input type="text" name="usuario" placeholder="Usuário">
                            <i class="user icon"></i>
                        </div>
                    </div>

                    <div class="field">
                        <div class="ui left icon input">
                            <input type="password" name="senha" placeholder="Senha">
                            <i class="lock icon"></i>
                        </div>
                    </div>

                    <div class="field">
                        <button class="ui right labeled icon primary button" type="submit">
                            <i class="right arrow icon"></i>
                            Logar
                        </button>
                    </div>
                    
                    <div class="ui error message"></div>
                </form>
            </div>
        </div>
        <script type="text/javascript" src="assets/js/form-validation.js"></script>
    </body>
    
</html