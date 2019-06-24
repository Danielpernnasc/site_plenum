<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <link rel="stylesheet" href="../../estilo/estilo.css">
    <link rel="stylesheet" href="../../font.css">
    <link rel="stylesheet" href="../../bootstrap_3_3_7_dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../bootstrap_3_3_7_dist/css/bootstrap-theme.min.css">
    <script src="../../js/jquery.min.js"></script>
    <script src="../../bootstrap_3_3_7_dist/js/bootstrap.min.js"></script>
    <!--<script src="../../js/menu.js"></script>-->
    <script src="../../js/sidenav.js"></script>
</head>
<body>

<header>
<?php include 'menu_plenum.php';?>
</header>
<div  class="container" id="container_body_superior" >
<div id="fundo_nav" class="row"></div>  
    <div class="container-fluid">
        <div class="fundo_form row">
            <div class="box-form col-md-6 col-md-offset-3">
                    <h2>CRIAR UMA CONTA</h2>
                    <h4>Preencha os campos abaixo com os seus dados</h4>
                    <div class="row">
                        <div class="text-dados col-md-12">
                            <h6>Dados Pessoais</h6>
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="formulario-form" type="text">
                                </div>
                            </div>
                        </div>
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