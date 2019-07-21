<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <link rel="stylesheet" href="../../estilo/estilo.css">
    <link rel="stylesheet" href="../../font.css">
    <link rel="stylesheet" href="../../bootstrap_3_3_7_dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../bootstrap_3_3_7_dist/css/bootstrap-theme.min.css">
    <script src="../../js/jquery.min.js"></script>
    <script src="../../bootstrap_3_3_7_dist/js/bootstrap.min.js"></script>
    <script src="../../js/menu.js"></script>
    <script src="../../js/sidenav.js"></script>
</head>
<body>
<header>
        <?php include 'menu_plenum.php';?>
        </header>
        <div  class="container" id="container_body_superior" >
        <div id="fundo_nav" class="row"></div>  
        </div>
        <div class="container-fluid">
            <div class="campo-login row">
                <div class="box-login col-md-4 col-md-offset-4">
                    <div class="row">
                        <a href="#">
                            <div class="btn-voltar-conta col-sm-2 col-md-offset-10">
                                <span>Voltar</span>
                            </div>
                        </a>
                    </div>
                    <h3>Indentificação</h3>
                    <h5>Informe seu E-mail ou CPF para prosseguir</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <input class="login-email" type="text">
                        </div>
                        <div class="col-md-6">
                        <button class="btn-login-continuar">enviar</button>
                        </div>
                    </div>
                    <div class="row">
                        <div id="texto-cadastro" class="col-md-12">
                            <p>Caso ainda não tenha uma conta vinculada ao E-mail ou CPF informado
                            você será direcionado para a tela de <span><a href="#">Cadastro</a><span></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button onclick="location.href='form.php'" class="btn-criar-conta">CRIAR MINHA CONTA</button>
                        </div>
                    </div>
                  
                   
                </div>
            </div>
        </div>

<footer>
        <?php include 'footer_plenum.php';?>
</footer>
    <script src="../../js/dropdown_mobile.js"></script>
</body>
</html>