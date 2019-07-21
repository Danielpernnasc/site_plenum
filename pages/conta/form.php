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
   
        <div class="fundo_form row">
            <div class="box-form col-md-6 col-md-offset-3">
                    <h2>CRIAR UMA CONTA</h2>
                    <h4>Preencha os campos abaixo com os seus dados</h4>
                    <div class="row">
                        <div id="text-dados"  class="col-md-12">
                            <h4>Dados Pessoais</h4>
                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="">CPF ou CNPJ</label>
                                        <input type="text" class="formulario-form ">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">CRO</label>
                                        <input type="text" class="formulario-form ">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">UF-CRO</label>
                                        <input type="text" class="formulario-form ">
                                    </div>

                                </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div id="text-dados" class="col-md-12">
                            <div class="row">
                                <div class="col-sm-5">
                                    <label>Responsável pela Compra</label>
                                </div>
                                <div class="col-sm-5">
                                    <label>Especialidade Profissional</label>
                                </div>
                            </div>
                                <div class="row">
                                    <div class="col-sm-5">
                                       <div class="ple-desti">
                                           <select name="" class="categoria">
                                               <option value="">Cirurgião Dentista</option>
                                               <option value="">Técnico de Prótese Dentária</option>
                                               <option value="">Clínica Dentária/Entidade Prestadora de Assistência Odontológica</option>
                                               <option value="">Laboratório de Prótese</option>
                                           </select>
                                       </div>
                                       
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ple-desti">
                                            <select class="especialidade" name="" id="">
                                                <option value="">Acunputura</option>
                                                <option value="">Cirurgia e Traumatologia Bucomaxilofacial</option>
                                                <option value="">Dentística</option>
                                                <option value="">Dentística Restauradora</option>
                                                <option value="">Disfunção Temporomandibular e Dor Facial</option>
                                                <option value="">Endodontia</option> 
                                                <option value="">Estomatologia</option>
                                                <option value="">Homeopatia</option>
                                                <option value="">Implantodontia</option>
                                                <option value="">Odontogeriatria</option>
                                                <option value="">Odontologia do Esporte</option>
                                                <option value="">Odontologia do Trabalho</option>
                                                <option value="">Odontologia em Saúde Coletiva</option>
                                                <option value="">Odontologia Legal</option>
                                                <option value="">Odontologia para Pacientes com Necessidades Especiais</option>
                                                <option value="">Odontopediatria</option>
                                                <option value="">Ortodontia</option>
                                                <option value="">Ortodontia e Ortopedia Facial</option>
                                                <option value="">Ortopedia Funcional dos Maxilares</option>
                                                <option value="">Patologia Oral e Maxilofacial</option>
                                                <option value="">Periodontia</option>
                                                <option value="">Prótese Bucomaxilofacial</option>
                                                <option value="">Prótese Dentária</option>
                                                <option value="">Radiologia</option>
                                                <option value="">Radiologia Odontológica e Imaginologia</option>
                                                <option value="">Saúde Coletiva</option>
                                            </select>
                                        </div>
                                    </div> 

                                </div>
                            
                        </div>
                    </div>
                    <div class="row">

                        <div id="text-dados" class="col-md-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label>Anexar Imagem do seu CRO</label>
                                </div>
                            </div>
                           <div class="row">
                               <div class="col-sm-11">
                                    <input type="text" class="formulario-form-arquivo" placeholder="Nenhum arquivo selecionado">
                                    <button class="btn-anexar">Anexar Arquivo</button>
                               </div>
                           </div>

                        </div>
                    </div>
                    <div class="row">
                        <div id="text-dados" class="col-md-12">
                            <label>Nome Completo</label>
                            <div class="row">
                                <div class="col-sm-11">
                                    <input type="text" class="formulario-form">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div id="text-dados" class="col-md-12">
                            <div class="row">
                                <div class="col-sm-1">
                                    <label for="">DDD</label>
                                </div>
                                <div class="col-sm-4">
                                    <label for="">Telefone Principal</label>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-1">
                                        <label for="">DDD</label>
                                </div>
                                <div class="col-sm-4">
                                     <label for="">Telefone Secundário <span>(opcional)</span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div id="text-dados" class="col-md-12">
                            <div class="row">
                                <div class="col-sm-1">
                                    <input type="text" class="formulario-form-ddd">
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="formulario-form">
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-1">
                                    <input type="text" class="formulario-form-ddd">
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="formulario-form">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div id="text-dados" class="col-md-12">
                            <h4>Dados de Acesso</h4>
                            <div class="row">
                                <div class="col-md-11">
                                    <label for="">E-mail</label>
                                    <input type="text" class="formulario-form">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="">Senha</label>
                                        <input type="password" class="formulario-form">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="">Senha</label>
                                        <input type="password" class="formulario-form">
                                </div>
                            </div>
                            <div class="row">
                                <div class="lembrete col-md-5">
                                    <span>*Mínimo de 8 caracteres, com letras maiúsculas e minúsculas e um número.</span>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                    <div class="row">
                         <div id="text-dados" class="col-md-12">
                            <h4>Receber informações sobre a Plenum</h4>
                            <form action="#">

                                <input  type="checkbox">  <span class="span-check">Desejo receber por SMS</span>  <br><br>
                                <input type="checkbox" > <span class="span-check">Desejo receber por Whatsapp</span> <br><br>
                                <input  type="checkbox" >  <span class="span-check">Desejo receber por E-mail</span> <br><br>  
                            </form>

                         </div>
                    </div>
                    <div class="row">
                        <div  id="text-dados" class="col-md-12">
                            <div class="row">
                                <div id="box-cinza" class="col-md-11">
                                    <p>Ao criar minha conta, declaro estar ciente e aceitar os termos de uso e as Políticas de
                                    Privacidade e do E-Commerce da Plenum. <span style="text-decoration: underline;">Ver Políticas<span></p>
                                </div>
                            </div>
                    
                        </div>
                    </div>
                    <div class="row">
                        <div id="text-dados" class="col-md-12">
                            <div class="row">
                                <div class="col-md-5 col-md-offset-3">
                                    <button class="btn-conta">CRIAR CONTA</button>
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