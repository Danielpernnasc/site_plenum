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
    <?php include 'menu_plenum.php'?>
</header>
<div  class="container" id="container_body_superior" style="border: solid 1px #ffffff">
    <div id="fundo_nav" class="row"></div>  
    <div id="fundo_visita" class="row">
        <div  id="titulo_plenum" class="col-md-6">
                    <h2>Visita a Fábrica</h2>     
        </div>
    </div>
    <div  class="row">
        <div id="intro_visita" class="col-md-12">
            <div class="texto_visita">
                <p>Participe do Programa de Visitação à Fábrica Plenum.</p><br>
                <p>Venha passar um dia conosco e conhecer todo o processo<br>
                    de fabricação de nossos produtos.</p><br>
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
                        <br>
                        <p>Faça sua inscrição para  conhecer a fábrica</p>
                        <img src="../ASSETS/VISITA/logo.png" alt="">
                        <h6>Selecione a Data e o Horário de sua vista</h6>
                    </div>
                
                </div>
                <div id="campo_agendamento" class="col-md-6">
                <!--<div class="calendario">
                                    <div class="mes">
                                        <ul>
                                        <li class="prev">&#10094;</li>
                                        <li class="next">&#10095;</li>
                                        <li>
                                        August<br>
                                        <span style="font-size:18px">2017</span>
                                        </li>
                                        </ul>
                                    </div>
                                    
                                        <ul class="semana">
                                            <li>DOM</li>
                                            <li>SEG</li>
                                            <li>TER</li>
                                            <li>QUA</li>
                                            <li>QUI</li>
                                            <li>SEX</li>
                                            <li>SAB</li>
                                        </ul>
                                        <ul class="days">  
                                            <li>1</li>
                                            <li>2</li>
                                            <li>3</li>
                                            <li>4</li>
                                            <li>5</li>
                                            <li>6</li>
                                            <li>7</li>
                                            <li>8</li>
                                            <li>9</li>
                                            <li><span class="active">10</span></li>
                                            <li>11</li>
                                            <li>12</li>
                                            <li>13</li>
                                            <li>14</li>
                                            <li>15</li>
                                            <li>16</li>
                                            <li>17</li>
                                            <li>18</li>
                                            <li>19</li>
                                            <li>20</li>
                                            <li>21</li>
                                            <li>22</li>
                                            <li>23</li>
                                            <li>24</li>
                                            <li>25</li>
                                            <li>26</li>
                                            <li>27</li>
                                            <li>28</li>
                                            <li>29</li>
                                            <li>30</li>
                                            <li>31</li>
                           
                            </div>

                    
                </div>-->
                <div id="container" class="calendar-container" data-tippy-content="content tip" style="background:#fff;"></div>
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4626.930774294464!2d-46.97702928434898!3d-23.20065075425695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf25294a8f4953%3A0x933b04c9984ac379!2sAv.+Ain+Ata+-+Jardim+Ermida+I%2C+Jundia%C3%AD+-+SP!5e1!3m2!1spt-BR!2sbr!4v1556209208080!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            width="20" height="20"
                            viewBox="0 0 192 192"
                            style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,192v-192h192v192z" fill="none"></path><g id="original-icon" fill="#ffffff" opacity="0" visibility="hidden"><g id="surface1"><path d="M22.15385,29.53846c-12.23077,0 -22.15385,9.92308 -22.15385,22.15385v88.61538c0,12.23077 9.92308,22.15385 22.15385,22.15385h147.69231c12.23077,0 22.15385,-9.92308 22.15385,-22.15385v-88.61538c0,-12.23077 -9.92308,-22.15385 -22.15385,-22.15385zM5.76923,50.53846l90.23077,48.69231l90.23077,-48.69231l-57.23077,44.53846l47.30769,48.46154l-57.69231,-41.07692l-22.61538,14.53846l-22.61538,-14.53846l-57.69231,41.07692l47.30769,-48.46154z"></path></g></g><g id="subtracted-icon" fill="#ffffff"><g id="surface1 1"><path d="M169.84615,29.53846c12.23077,0 22.15385,9.92308 22.15385,22.15385v57.02993c-10.84707,-12.30983 -26.71104,-20.10686 -44.30769,-20.10686c-4.0959,0 -8.09793,0.42244 -11.96466,1.22591l50.50313,-39.30284l-90.23077,48.69231l-90.23077,-48.69231l57.23077,44.53846l-47.30769,48.46154l57.69231,-41.07692l22.61538,14.53846l2.14143,-1.37663c-6.02069,9.25068 -9.52604,20.27033 -9.52604,32.06894c0,5.0949 0.65364,10.04455 1.88121,14.76923h-68.34275c-12.23077,0 -22.15385,-9.92308 -22.15385,-22.15385v-88.61538c0,-12.23077 9.92308,-22.15385 22.15385,-22.15385z"></path></g></g><g fill="#000000"><g id="Windows_x5F_8"><path d="M147.69231,103.38462c-24.36923,0 -44.30769,19.93846 -44.30769,44.30769c0,24.36923 19.93846,44.30769 44.30769,44.30769c24.36923,0 44.30769,-19.93846 44.30769,-44.30769c0,-24.36923 -19.93846,-44.30769 -44.30769,-44.30769zM169.84615,155.07692h-14.76923v14.76923h-14.76923v-14.76923h-14.76923v-14.76923h14.76923v-14.76923h14.76923v14.76923h14.76923z"></path></g><g id="Windows_x5F_8" opacity="0"><path d="M147.69231,206.76923c32.49231,0 59.07692,-26.58462 59.07692,-59.07692c0,-32.49231 -26.58462,-59.07692 -59.07692,-59.07692c-32.49231,0 -59.07692,26.58462 -59.07692,59.07692c0,32.49231 26.58462,59.07692 59.07692,59.07692z"></path></g></g></g></svg>
                </div>
                <h6>contato@plenum.bio</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <?php include 'footer_plenum.php'?>
</footer>
<script src="../js/jquery.simple-calendar.js"></script>
<script src="../js/eventos.js"></script>
<script src="../js/jquery.simple-calendar-mobile.js"></script>
<!--<script>
        $(document).ready(function () {
            // Event Demo init
            $("#event-cal-container").simpleCalendar({
                events: ['2019-03-04', '2019-03-08', '2019-03-12', '2019-03-15'],
                eventsInfo: ['John\'s Birthday', 'Janet\'s Marriage','Graduation Day', 'Final Exams !'],
                selectCallback: function(date){
                    console.log('date selected '+date);
                }
            });

            tippy('.day.event', {
                theme: 'translucent',
            });
        });
    </script>-->

<!--<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>-->
</body>
</html>

