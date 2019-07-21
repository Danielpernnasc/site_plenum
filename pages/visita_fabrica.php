<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visita á Fábrica</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <link rel="stylesheet" href="../estilo/estilo.css">
    <link rel="stylesheet" href="../estilo/calendario.css">
    <link rel="stylesheet" href="../estilo/simple_calendar.css">
    <link rel="stylesheet" href="../estilo/demo.css">

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
    <div id="fundo_visita" class="row">
        <div  id="titulo_plenum" class="col-md-6">
                    <h2>Visita a Fábrica</h2>     
        </div>
    </div>
    <div  class="row">
        <div id="intro_visita" class="col-md-12">
            <div class="texto_visita">
                <p>Participe do Programa de Visitação à Fábrica Plenum.</p>
                <p>Venha passar um dia conosco e conhecer todo o processo<br>
                    de fabricação de nossos produtos.</p>
                <p>Inscreva-se e agende a data de sua visita.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div id="fundo_calendario" class="col-md-12">
            <div class="texto_visita_fabrica">
                <h2>Visite nossa Fábrica</h2>
                <p>
                Venha conhecer de perto a nossa Fábrica. Visite todos os setores desde a pesquisa e desenvolvimento de produtos,
                passando pela impressão 3D de implantes, Separação, Controle de Qualidade até a Logística de entrega.
                </p>
            </div>
            <div id="visita_fabrica_plenum" class="row">
                <div class="col-md-6">
                    <div class="agenda">
                        <h2>Agende uma Visita</h2>
                        <img src="../ASSETS/VISITA/logo.png" alt="">
                        <h3>Preencha o formulário</h3>

                        <p>Entraremos em contato com você<br>
                        para agendamento da sua visita.</p>
                       
                    </div>
                
                </div>
                <div id="campo_agendamento" class="col-md-6">
                    <!--<div id="container" class="calendar-container" data-tippy-content="content tip" style="background:#fff;"></div>
                    <div id="event-cal-container" class="calendar-container"></div>
                    <div id="container" class="calendar-container" data-tippy-content="content tip" style="background:#fff;"></div>
                    <div id="event-cal-container-mobile" class="calendar-container"></div>

                        <div id="agendamento" class="row">
                        <h5>Datas e Horários Disponíveis</h5>
                        <div class="col-md-6">
                            <input class="calendar_agenda"type="date" name="" id="">
                        </div>
                        <div class="col-md-6">
                            <input class="calendar_agenda" type="date" name="" id="">
                        </div>
                        <h6>Vagas Limitada. Sujeito a disponibilidade de vagas</h6>
                        </div> -->
                        <div class="container-agenda container">
                            <h4>Faça sua inscrição para conhecer a fábrica</h4>
                            <div class="row">
                                <label for="">Nome</label>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="agendamento-label col-sm-12">
                                            <label for="">Nome</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="campo-agendamento col-sm-12">
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="agendamento-label col-sm-12">
                                            <label for="">E-mail</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="campo-agendamento col-sm-12">
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="agendamento-label col-sm-2">
                                            <label for="">DDD</label>
                                        </div>
                                        <div class="agendamento-label col-sm-10">
                                            <label for="">Telefone</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="campo-agendamento col-sm-2"   >
                                            <input  type="text" style="margin: 10% 0; padding: 6% 15%;">
                                        </div>
                                        <div class="campo-agendamento col-sm-10">
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="row">
                                       <div class="agendamento-label col-sm-10">
                                           <label for="">Cidade</label>
                                       </div>
                                       <div class="agendamento-label col-sm-2" >
                                           <label for="">UF</label>
                                       </div>
                                    </div>
                                    <div class="row">
                                        <div class="campo-agendamento col-sm-10">
                                            <input type="text">
                                        </div>
                                        <div class="campo-agendamento col-sm-2" >
                                            <input  type="text" style="margin: 10% 0; padding: 6% 15%;" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <div id="campo_agendar" class="row">
                        <button class="agendar_visita">AGENDAR VISITA</button>
                       </div>
                </div>
            
                  
 
            </div>
        </div>
    </div>
    <div class="row">
        <div id="fundo_localiza" class="col-md-12">
            <h2 class="h2_localiza">Onde Estamos</h2>
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d520.8181114931126!2d-46.97550198483501!3d-23.200596871710733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf25294a8f4953%3A0x933b04c9984ac379!2sAv.+Ain+Ata+-+Jardim+Ermida+I%2C+Jundia%C3%AD+-+SP!5e1!3m2!1spt-BR!2sbr!4v1563548841797!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div id="endereco" class="row">
                <div id="campo_address"class="col-md-4">
                    <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="20" height="20"
                        viewBox="0 0 192 192"
                        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,192v-192h192v192z" fill="none"></path><g fill="#ffffff"><g id="surface1"><path d="M96,1.38462c-31.84615,0 -57.69231,25.84615 -57.69231,57.69231c0,31.84615 50.30769,88.70192 50.30769,131.53846h14.76923c0,-42.72115 50.30769,-102.25961 50.30769,-131.53846c0,-31.84615 -25.84615,-57.69231 -57.69231,-57.69231zM96,82.73077c-13.06731,0 -23.65385,-10.61538 -23.65385,-23.65385c0,-13.03846 10.58654,-23.65385 23.65385,-23.65385c13.06731,0 23.65385,10.58654 23.65385,23.65385c0,13.06731 -10.58654,23.65385 -23.65385,23.65385z"></path></g></g></g></svg>
                    </div>
                    <h6>Av. Ain Ata, 640 - Jundiaí - SP 13212-213</h6>
                </div>
                <div id="campo_address" class="col-md-4">
                <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            width="20" height="20"
                            viewBox="0 0 192 192"
                            style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,192v-192h192v192z" fill="none"></path><g fill="#ffffff"><g id="surface1"><path d="M165.31731,133.125c-11.42308,-9.77885 -23.04808,-15.72115 -34.32693,-5.94231l-6.75,5.88462c-4.93269,4.29808 -14.10577,24.31731 -49.5577,-16.5c-35.45192,-40.73077 -14.36538,-47.07692 -9.40384,-51.3173l6.77885,-5.91347c11.22115,-9.77884 6.98077,-22.09615 -1.125,-34.78846l-4.875,-7.67308c-8.13462,-12.63461 -17.01923,-20.9423 -28.26923,-11.19231l-6.08654,5.33654c-4.99038,3.60577 -18.89423,15.40384 -22.26923,37.78846c-4.06731,26.85577 8.76923,57.63462 38.10577,91.38462c29.30769,33.77885 58.03846,50.74039 85.21154,50.45192c22.58653,-0.25961 36.25961,-12.375 40.52884,-16.78846l6.08654,-5.33654c11.25,-9.75 4.26923,-19.70192 -7.1827,-29.48077z"></path></g></g></g></svg>
                </div>
                <h6>+55 (11) 3109.9000</h6>
                </div>
                <div id="campo_address" class="col-md-4">
                <div class="icon">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                            width="25px" height="25px" viewBox="0 0 14 14" style="enable-background:new 0 0 14 14;" xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path style="fill:#fff;" d="M7,9L5.268,7.484l-4.952,4.245C0.496,11.896,0.739,12,1.007,12h11.986
                                                                c0.267,0,0.509-0.104,0.688-0.271L8.732,7.484L7,9z"/>
                                                            <path style="fill:#fff;" d="M13.684,2.271C13.504,2.103,13.262,2,12.993,2H1.007C0.74,2,0.498,2.104,0.318,2.273L7,8
                                                                L13.684,2.271z"/>
                                                            <polygon style="fill:#fff;" points="0,2.878 0,11.186 4.833,7.079 		"/>
                                                            <polygon style="fill:#fff;" points="9.167,7.079 14,11.186 14,2.875 		"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                    </svg>
                </div>
                <h6>relaciomento@plenum.bio</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <?php include '../menu-footer/footer_plenum.php'?>
</footer>
<script src="../js/dropdown_mobile.js"></script>
<script src="../js/jquery.simple-calendar.js"></script>
<script src="../js/eventos.js"></script>




</body>
</html>

