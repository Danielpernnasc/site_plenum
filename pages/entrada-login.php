<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login-Entrada</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <link rel="stylesheet" href="../estilo/estilo.css">
    <link rel="stylesheet" href="../font.css">
    <link rel="stylesheet" href="../bootstrap_3_3_7_dist/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap_3_3_7_dist/css/bootstrap-theme.min.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../bootstrap_3_3_7_dist/js/bootstrap.min.js"></script>
    <script src="../js/menu.js"></script>
    <script src="../js/sidenav.js"></script>
</head>
<body>
<header>
        <?php include '../menu-footer/menu_plenum.php';?>
</header>
<div  class="container" id="container_body_superior" >
        <div id="fundo_nav" class="row"></div>  
        </div>
        <div class="container-fluid">
            <div class="campo-login row">
                <div class="box-login col-md-4 col-md-offset-4">
                    <div class="row">
                        <div class="btn-voltar col-sm-12">
                            <h6>Voltar</h6>
                        </div>
                    </div>
                    <h5>Seja Bem-Vindo(a)</h5>
                    <h3>Nathaly Caroline Lopes Talasso</h3>
           
                    <div class="row">
                       <div class="col-md-12">
                           <input class="login-entrada-email" type="text">
                       </div>
                    </div>
                    <div class="entre row">
                        <h5>INFORME SUA SENHA DE ACESSO</h5>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                           <input class="login-entrada-senha" type="password">
                           <div id="olho" class="col-md-1 col-md-offset-9">
                               <span>
                               <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                    width="30" height="30"
                                        viewBox="0 0 192 192"
                                        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,192v-192h192v192z" fill="none"></path><g id="original-icon" fill="#969696"><g id="surface1"><path d="M96,46.08c-51.195,0 -91.2,47.4 -91.2,47.4c-1.26,1.44 -1.26,3.6 0,5.04c0,0 40.005,47.4 91.2,47.4c51.195,0 91.2,-47.4 91.2,-47.4c1.26,-1.44 1.26,-3.6 0,-5.04c0,0 -40.005,-47.4 -91.2,-47.4zM96,53.76c10.095,0 19.74,2.085 28.68,5.28c6,6.78 9.72,15.645 9.72,25.44c0,21.255 -17.145,38.4 -38.4,38.4c-21.255,0 -38.4,-17.145 -38.4,-38.4c0,-9.795 3.6,-18.66 9.6,-25.44c8.97,-3.21 18.675,-5.28 28.8,-5.28zM54.48,64.68c-2.88,6 -4.56,12.72 -4.56,19.8c0,25.41 20.67,46.08 46.08,46.08c25.41,0 46.08,-20.67 46.08,-46.08c0,-7.05 -1.605,-13.8 -4.44,-19.8c21.69,11.025 37.29,27.015 41.28,31.32c-6.24,6.75 -40.785,42.24 -82.92,42.24c-42.135,0 -76.68,-35.49 -82.92,-42.24c3.99,-4.32 19.665,-20.295 41.4,-31.32zM96,65.28c-10.605,0 -19.2,8.595 -19.2,19.2c0,10.605 8.595,19.2 19.2,19.2c10.605,0 19.2,-8.595 19.2,-19.2c0,-10.605 -8.595,-19.2 -19.2,-19.2z"></path></g></g></g></svg>
                               </span>
                        </div>
                       </div>
                       
                    </div>
                  
                    <div class="row">
                        <div class="campo-email-entrada col-md-12">
                            <button class="btn-criar-conta" onclick="window.location.href='minha_conta.php'">Entrar</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="campo-recuperar col-md-12">
                            <span><a href="#">Esqueci Minha Senha</a></span>
                        </div>
                    </div>
                  
                   
                </div>
            </div>
        </div>

<footer>
        <?php include '../menu-footer/footer_plenum.php';?>
</footer>  
    
<script src="../js/dropdown_mobile.js"></script> 
</body>
</html>