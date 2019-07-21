<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seu Endereço</title>
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
    <?php include 'menu-compra.php'?>
  
         
</header>
    <div  class="container" id="container_body_superior" >
        <div id="fundo_nav" class="row"></div>  
        </div>
        <div class="barra-pedidos row">
            <div class="col-md-2">
                <a href="quantidade.php">
                    <div id="btn-voltar-compra" class="row">
                        <div class="col-sm-1">
                            <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                width="20" height="20"
                                viewBox="0 0 172 172"
                                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><g id="surface1"><path d="M45.00219,44.65281c-2.02906,-0.06719 -3.9775,0.76594 -5.33469,2.27094l-36.14687,39.07625l36.14687,39.07625c1.65281,1.84094 4.17906,2.66063 6.61125,2.12313c2.41875,-0.5375 4.36719,-2.33813 5.09281,-4.71656c0.72562,-2.37844 0.12094,-4.95844 -1.59906,-6.75906l-21.13719,-22.84375h133.04469c2.48594,0.04031 4.78375,-1.26312 6.03344,-3.41312c1.26313,-2.13656 1.26313,-4.79719 0,-6.93375c-1.24969,-2.15 -3.5475,-3.45344 -6.03344,-3.41313h-133.04469l21.13719,-22.84375c1.86781,-1.97531 2.40531,-4.85094 1.37063,-7.36375c-1.02125,-2.49937 -3.42656,-4.17906 -6.14094,-4.25969z"></path></g></g></g></svg>
                            </span>    
                        </div>
                        <div class="col-sm-1">
                            <span>Voltar</span>
                        </div>
                    </div>
                </a>
            </div>
            <div id="titulo-comprar-resumo" class="col-md-10">
                <h2>FINALIZAR COMPRA</h2>
            </div>
        </div>
      
          
                    <div id="barra-entrega" class=" row">
                        <div class="titulo-entrega col-md-12">
                            <h3>ENTREGA</h3>
                        </div>
                    </div>

                    <div id="caixa-entrega" class="row">
                        <div class="col-md-5">
                            <div class="row">
                                <div class="col-sm-2">
                                        <span>
                                            <img src="https://img.icons8.com/ios/50/000000/marker-filled.png">
                                        </span>
                                    </div>
                                <div class="col-sm-5">
                                        <h5>Osvaldo Marchesi Junior</h5>
                                        <p>Rua Mesquita</p>
                                        <p>121 - 4º andar - Aclimação</p>
                                        <p>São Paulo</p>
                                        <p>SP - CEP 01544-010</p>
                                </div>
                                <div class="btn_editar_dest col-sm-2">
                                    <h5>EDITAR</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                          
                                        <button id="incluir" class="incluir-endereco">+ INCLUIR NOVO ENDEREÇO</button>
                                 
                                   
                                </div>
                            </div>
                        
                        </div>
                        <div class="col-md-2">
                            <div class="lv"></div>
                        </div>
                        <div class="col-md-5">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h5>MÉTODO DE ENVIO</h5>
                                </div>
                            </div>
                            <div class="row">
                                    <div class="linha-envio col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-1">
                                                <button class="radio-frete"></button>
                                                
                                            </div>
                                            <div class="legenda-destino col-sm-5">
                                                <span>Normal</span>
                                                <span class="tempo-dest">24 horas</span>
                                            </div>
                                            <div id="valor-destino" class="col-sm-4 col-sm-offset-2">
                                                <span >R$0,00</span>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                    <div class="linha-envio col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-1">
                                                <button class="radio-frete"></button>
                                            </div>
                                            <div class="legenda-destino col-sm-5">
                                                <span>Retirada na Plenum</span>
                                                
                                            </div>
                                            <div id="valor-destino" class="col-sm-4 col-sm-offset-2">
                                                <span>R$0,00</span>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                          
                        
                            
                        </div>
                    </div>

                <!--incluir endereco-->
                <div id="endereco-incluir"  style="display: none;">
                   <div id="caixa-entrega" class="row">
                        <div  class="col-md-5">
                            <div class="row">
                                <div class="endereco col-sm-6">
                                    
                                    <h5>ENDEREÇO DE ENTREGA</h5>
                                </div>
                                <div class="cancelar col-sm-3 col-md-offset-2">
                                    <h5>CANCELAR</h5>
                                </div>
                            </div>
                            <div class="espaco-input row">
                                <div class="col-sm-10">
                                    <input type="text" class="ple-desti" placeholder="Nome Completo">
                                </div>
                            </div>
                            <div class="espaco-input row">
                                <div class="col-sm-5">
                                    <input type="text" class="ple-desti" placeholder="CEP">
                                </div>
                                <div class="col-sm-5">
                                    <button class="plenum-buscar">BUSCAR</button>
                                </div>
                            </div>
                            <div class="espaco-input row">
                                <div class="col-sm-10">
                                    <input type="text" class="ple-desti" placeholder="Endereço">
                                </div>
                            </div>
                            <div class="espaco-input row">
                                <div class="col-sm-5">
                                    <input type="text" class="ple-desti" placeholder="Número">
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" class="ple-desti" placeholder="Complemento">
                                </div>
                            </div>
                            <div class="espaco-input row">
                                <div class="col-sm-10">
                                    <input type="text" class="ple-desti" placeholder="Bairro">
                                </div>
                            </div> 
                            <div class="espaco-input row">
                                <div class="col-sm-5">
                                <div class="ple-desti">
                                    <select  name="" id="uf" >
                                        <option value="">UF</option>
                                        <option value="">SP</option>
                                        <option value="">RJ</option>
                                        <option value="">MG</option>
                                        <option value="">ES</option>
                                    </select>
                                </div>
                              
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" class="ple-desti" placeholder="Complemento">
                                </div>
                            </div>
                            <div class="espaco-input row">
                                <div class="col-sm-10">
                                    <input type="text" class="ple-desti" placeholder="Telefone">
                                </div>
                            </div>    
                       
                        </div>
                   </div>
                </div>
                <!--incluir endereco-->
                  


        <div id="linha-total" class="row">
            <div class="campo-btn-comprar  col-md-6">
                <button class="btn-escolher">ESCOLHER MAIS PRODUTOS
                    
                </button>  
            </div>
          
            <div class="campo-btn-comprar col-md-6">
                <button onclick="location.href='pagamento.php'"class="btn-mais-comprar">CONTINUAR
                    <span>
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            width="15" height="15"
                            viewBox="0 0 172 172"
                            style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><g id="surface1"><path d="M75.50842,23.72236l-18.70913,18.70913l43.56851,43.56851l-43.56851,43.56851l18.70913,18.70913l62.27764,-62.27765z"></path></g></g></g></svg>
                    </span>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="container">
                    <div class="campo-dados-car row">
                        <div id="loja-compras" class="col-md-6">
                            <h4>TELEFONES PARA CONTATO</h4>
                            <p>de segunda a domingo</p>
                            <p>das 7h às 22h.</p>
                            <div class="fones_faq">
                                <div class="fonecompras">
                                    <h4>011 3109 9000</h4>
                                    <h6>Capitais e regiões metropolitanas</h6>
                                </div>
                                <div class="fonecompraslocal">
                                    <h4>0800 270 9604</h4>
                                    <h6>Demais localidaes</h6>
                                </div>
                            </div>
                        </div>
                        <div id="compra_chat" class="col-md-3">
                            <h4>CHAT</h4>
                            <p>de segunda a domingo</p>
                            <p>das 7h às 22h.</p>
                            <button class="btn_compras">CHAT</button>
                        </div>
                        <div id="compra_email" class="col-md-3">
                            <h4>E-MAIL</h4>
                            <p>sua mensagem será</p>
                            <p>respondida em até 48h</p>
                            <button class="btn_compras">E-MAIL</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
        
<footer>
        <?php include 'footer_plenum.php';?>
</footer>  
    
<script src="../../js/dropdown_mobile.js"></script> 
<script>
$(document).ready(function(){
    $("#incluir").click(function(event){
	  event.preventDefault();
	  $("#endereco-incluir").show(0);
	});
});
</script>
</body>
</html>