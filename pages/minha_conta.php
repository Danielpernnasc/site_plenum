<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Minha Conta</title>
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
        <div class="dados row">
            <div class="saudacao col-md-4">
                <h3>Olá, Dr. Elizeu Silva</h3>
                <h5>Sair</h5>
            </div>
            
                <div class="campo-conta col-md-8">
                
                        <div id="dados-conta" class="col-md-2">Meus Dados</div>
                        <div id="dados-conta" class="col-md-2">Meus Pedidos</div>
                        <div id="dados-conta" class="col-md-2">Cursos</div>
                        <div id="dados-conta" class="col-md-2">Visita à Fábrica</div>
                  
            </div>
           
          
        </div>
        <div class="container-fluid">
 
            <div id="linha-conta" class="row">
                <div id="titulo-dados" class="col-xs-6 col-md-4">
                    <h3>Meus Dados</h3>
                    <div id="linha-btn" class="row">
                        <!--<div id="btn-dados-super" class="btn-dados" ><a class="link-dados"  href="dados-cliente" >Dados Pessoais<span style="float: right;">></span></a></div>-->
                        <button id="btn-dados-super" class="btn-dados" ><a class="link-dados"  href="dados-cliente" >Dados Pessoais<span style="float: right;">></span></a></button>
            
                        
                    </div>
                    <div id="linha-btn" class="row">
                        <button class="btn-dados"><a class="link-dados" href="endereco-cliente">Endereços<span style="float: right;">></span></a></button>
                      
                    </div>
                    <div id="linha-btn" class="row">
                        <button class="btn-dados"><a class="link-dados" href="cartao-cliente" >Dados de Pagamento<span style="float: right;">></span></a></button>
                        <span></span>
                    </div>
                    <div id="linha-btn" class="row">
                        <button id="btn-dados-infer" class="btn-dados"><a class="link-dados" href="senha-cliente">Dados de Acesso<span style="float: right;">></span></a></button>
                       
                    </div>
                     <div id="linha_receber" class="row">
                         <div id="campo-receber"class="col-md-12">
                            <h5>Receber informações sobre a Plenum</h5>
                            <form action="#">

                                <input id="delivery" type="checkbox">  <span class="deliveryapp">Desejo receber por SMS</span>  <br><br>
                                <input id="delivery" type="checkbox" > <span class="deliveryapp">Desejo receber por Whatsapp</span> <br><br>
                                <input id="delivery" type="checkbox" >  <span class="deliveryapp">Desejo receber por E-mail</span> <br><br>  
                            </form>

                         </div>
                     </div>
                    
                </div>
                <div id="dados-cliente" class="div-dados col-xs-12 col-sm-6 col-md-8">
                            <div class="col-xs-4">
                                <img class="dentista-conta" src="../ASSETS/CONTA/eliseu_silva.jpg" alt="">
                                <button class="selecionar">Selecionar Foto</button>
                            </div>
                            <div class="col-xs-8">
                                <div class="row">
                                    <div class="dados-dentista col-xs-12 col-sm-6 col-md-8">
                                        <span>Nome</span><br>
                                        <span class="resposta-dados">Elizeu Silva</span>
                                    </div>
                                    <div class="dados-dentista col-xs-6 col-md-4">
                                        <span>CPF/CNPJ</span><br>
                                        <span class="resposta-dados">123.456.789-00</span>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="dados-dentista col-xs-6 col-sm-4">
                                        <span>CRO</span><br>
                                        <span class="resposta-dados">123456</span>
                                    </div>
                                    <div class="dados-dentista col-xs-6 col-sm-4">
                                        <span>UF CRO</span><br>
                                        <span class="resposta-dados">SP</span>
                                    </div>
                                    <div class="dados-dentista col-xs-6 col-sm-4">
                                        <span>Categoria</span><br>
                                        <span class="resposta-dados">Cirurgião</span>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="dados-dentista col-xs-6 col-md-4">
                                        <span>Gênero</span><br>
                                        <span class="resposta-dados">Masculino</span>
                                    </div>
                                    <div class="dados-dentista col-xs-12 col-sm-6 col-md-8">
                                        <span>Data de Nascimento</span><br>
                                        <span class="resposta-dados">00/00/0000</span>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="dados-dentista col-xs-6 col-md-4">
                                        <span>Telefone Principal</span><br>
                                        <span class="resposta-dados">11 944866696</span>
                                    </div>
                                    <div class="dados-dentista col-xs-12 col-sm-6 col-md-8">
                                        <span>Telefone Secundário</span>&nbsp;<span style="font-size: 12px;">(Opcional)</span><br>
                                        <span class="resposta-dados">11 3109 9000</span>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="dados-dentista col-xs-9">
                                        <span>E-mail</span><br>
                                        <span class="resposta-dados">elizeu.silva@plenum.bio</span>
                                    </div>
                                </div><br>
                        
                            </div>
                                    
                            <div class="row">
                                <button class="editar-conta">Editar</button>
                            </div> 
                </div>
                
                 <div id="endereco-cliente" class="div-dados col-xs-12 col-sm-6 col-md-8">
                        <div id="linha-endereco" class="row">
                            <div id="titulo-dados"class="col-sm-2">
                                <span>Endereço 1</span>
                            </div>
                            <div class="col-md-10">
                                <span class="excluir">Excluir Endereço</span>
                            </div>
                        </div>
                        <div id="linha-endereco" class="row">
                            <div class="col-md-12">
                                <span>CEP</span><br>
                                <span id="resposta-endereco">20.081-902</span>
                            </div>
                        </div>
                        <div id="linha-endereco" class="row">
                            <div  class="col-md-4">
                                <span>Rua</span><br>
                                <span id="resposta-endereco">Av. Ain Ata</span>
                            </div>
                            <div  class="col-md-4">
                                    <span>Número</span><br>
                                <span id="resposta-endereco">640</span>
                            </div>
                            <div class="col-md-4">
                                <span>Complemento</span><br>
                                <span id="resposta-endereco"  >Térreo</span>
                            </div>
                        </div>
                        <div id="linha-endereco" class="row">
                            <div class="col-md-4">
                                <span>Bairro</span><br>
                                <span   id="resposta-endereco" >Jardim Ermida</span>
                            </div>
                            <div  class="col-md-4">
                                    <span>Cidade</span><br>
                                <span id="resposta-endereco">Jundiaí</span>
                            </div>
                            <div  class="col-md-4">
                                <span>Estado</span><br>
                                <span id="resposta-endereco">São Paulo</span>
                            </div>
                        </div>
                        <div id="linha-endereco" class="row">
                            <div  class="col-md-12">
                                <span>Referência</span><br>
                                <span id="resposta-endereco">LOT M II P - Logística</span>
                            </div>
                        </div>
                        <div id="linha-endereco" class="row">
                            <div class="col-md-4 col-md-offset-8">
                                <button class="btn-editar">Editar</button> <button class="btn-adicionar">Adicionar Endereço</button>
                            </div>
                        </div>
               
                  
                </div>
                <div id="cartao-cliente" class="div-dados col-xs-12 col-sm-6 col-md-8">
                    <div class="row">


                                        <div id="linha-endereco" class="row">
                                        <div id="titulo-dados"class="col-sm-3">
                                            <span>Cartão de Crédito 1</span>
                                        </div>
                                        <div class="col-md-9">
                                            <span class="excluir">Excluir Cartão</span>
                                        </div>
                                    </div>
                                    <div id="linha-endereco" class="row">
                                        <div class="col-md-2">
                                            <span>Número do Cartão</span><br>
                                            <span id="resposta-endereco">**** **** **** 0257</span>
                                        </div>
                                        <div class="col-md-2">
                                            <span><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="70px" height="70px" viewBox="0 0 215 194" enable-background="new 0 0 215 194" xml:space="preserve">  <image id="image0" width="215" height="194" x="0" y="0"
                                                            href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANcAAADCCAYAAADaZledAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                                                        AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAABmJLR0QA/wD/AP+gvaeTAAAA
                                                        CXBIWXMAAC4jAAAuIwF4pT92AAAbVklEQVR42u2de3RV1Z3HPwkhIQUCCY8QeWwPEBCBABZpElqr
                                                        MlqqUloEWh2rnZm205npGvuaOtSu+qgza9rprNGxo87D1rYiFYviY3y0TodacsMjVh4REIKHDQgE
                                                        SEEgQghJ5o9zE+5N7j3n3Me559zc32ctF+befc797ZN879779/vt387r6upCEPzAUKoAMIAyoAM4
                                                        Chw0te7027Z0kCfiEjKFodQ4oBaoCf87Cyjq1ewUsB54Bnja1Pqs33Yni4hL8ARDqYHAHKLFNC7B
                                                        2xwD7gMeM7Xu8LtPiSLiEtKCoVQ5loi6hfRhoDhNt68DPmtq/Z7f/UwEEZeQMIZSA4CZXByVqoHJ
                                                        Hn/se8ACU+t3/O6/W0RcgiOGUqVcHJWqgY8AQ30wZT8wz9S62e9n4gYRlxCFoVQeMA1rVPpI+N9p
                                                        QJ7ftoX5X+A6U+vA/+EW+G2A4C+GUkOxRFTNxdGp1G+7bFgA3Ab8wm9DnJCRK8cwlJrMRSHVYq2d
                                                        BvhtV4LsBaYEPR4mI1c/xlCqGMtr1+14qAHK/bYrDUwCrgNe89sQO0Rc/YgYQdo5wEC/7erFCWAj
                                                        UA+EgK3AGWA68EXgS0C+i/ssRsQleEGagrRe0wW8gyWiemADsCPOdK4BaDCUegl4FucvhWv87pwT
                                                        subKEjwO0qaLM8AmLDFtBOpNrVuS6Os9wL0OzbqAkabWf/S70/GQkSuA+BSkTYZ3uSikELDN1PpC
                                                        Gu77MHA39qNXXvjZ/I/fDyEeIq4AEKAgrR3nsKZuGwivl0ytj3jxQabWfzSUagg/DztqEXEJ3WRB
                                                        kLab97BE1O14eMvUui2Dnx/CWVxO7/uKrLk8JkuCtO1YXrtux0PI1Hq/nwYZSi0B1jg0awWGp2kq
                                                        mnZk5EozWRKkPUb0qLQ5gPum6l20GYy1J+xNv42NhYgrBbIkSNsJNBIxKgF7g56bZ2p92FDKxNqp
                                                        bEctIq7sJ0uDtJtMrU/5bVSShHAWVw2WdzFwiLji0A+DtNlICPhThza1fhsZDxFXmFwK0mYRbtZd
                                                        ylBqbBB3KeekuCRImzVsw/pCGeLQrgb4ld/G9iYnxJUlQdqzWAtzz4O02YCh1CVYX34ncRZXLSIu
                                                        78niIO0fTK3P+22UH4TrF1YRvb69NIFbBHLdlfVBZAnSZh+9ZhK1wDycRyc7zmMFkwMVq8u6kStL
                                                        grRHiV4rBTFImxHCM4lK4KNc/J2leyZRiOWAWu93fyMJtLiyJEjbAWwnYq1EFgRpvSL8O7uS6Cne
                                                        yAx8dC0irvhIkDb7CNDvLHDrLt/ElaVB2hCwM4dHpYFYuXyRv7MJftsVJnAZ8hlzaGRhkLYeK0h7
                                                        wm+j/MJQagTRv7MrsZJlg0qlqXWT30Z048nIlYVB2u5RqTHHgrQ99AphdItpKsELYdhRC/QvcWVZ
                                                        kLYnDy/Hg7SDuRgHDGoII1FqgJ/7bUQ3CYsry4K0dVxMaM3ZIC2AodSlRI9KVQTMoZUGAuXUcLXm
                                                        MpSaDXySi7GKoH3DtQNvERFbyvEgbSFwBdGj0li/7coAHUBZULy3cb+5wiPUzcAKrF9UkGjGGpFy
                                                        PkgLYCg1ir6Oh6A5izLBAKxlya/9NgTiiMtQaizW3PVavw1EgrRRGErlA5cTPcWrJHjTcr+oIaji
                                                        MpSqwioTPMYnmyRIG4GhVAlW7l2k53W433YFmMCsu6LWXOG8vXoyk64CEqTtg6HURKJHpSDmTgaZ
                                                        97HWXb7vxu4ZuQylBgHP4a2wJEgbgaFUEdG5k7X4N2PoLwzDOtRhu9+GRE4LvwfMSPP9JUgbQThL
                                                        ZT7RWSpFftvVD6klKOIKOzC+nuK9egdp67Pl7FoviJGlUgtM9NuuHKEW+A+/jegeuf4GGJTgtRKk
                                                        jcBQajjR+8zmASV+25WjBCKJN6+rqwtDqX2ActG+Hfgx8Kip9R6/jfeLcAxwEpaI5of/vRx3h7YJ
                                                        3tMFlJtaH/PTiIKwh9CtsBaZWgf6ND8viLFpsxYY7bddQlzysH5Hz/tpRAHunRgP5IqwwmvQyIyH
                                                        K7C2kgvZQyDEVeGi3QUCWjI4VdJQeUgIJr6vuwpwF6Dc21/iUTEqD32EYG8AFJJjrqFUoZ9OtgKs
                                                        dKN+SdjxMJXoUSmI22ME9+zD8k4vx96BVIxVRmKjX4YWAG68foahVHHQM8/DGwAjKw9Vk7lULiH9
                                                        nAf+QHTs9D0AQ6kZOPsLavBZXI1YnkC7ij2BrAtnKDWB6FFpFsGrFiW4J5FD+UI4i6sWeNCvzhSY
                                                        Wn9gKLUF6xvfyVDfxJUl1aIE93QCO4hOj9uTQNJ2CPiyQxtfM+S7MzTqcSeujGEoNZLojIegVx4S
                                                        7DlFdNL2BlPrkyncL+SizVhDqQl+7UrvFlcI+FuHttVeGdFPKg8J0fRO2t5uat2Rxvs3YU0jRzm0
                                                        qwV8F5cT5YZSk0yt96b6oYZSQ4jeABjEuhyCe9qITtr2/PgjU+suQ6l64FMOTWuBX/rxUArChh4w
                                                        lDoAjHdoXwMkLK4cqTyUSzRzMWk7BLxpat3mgx0h3InLFyL/wOtxFlct8KRdgxiVh2qBS/zqoJAy
                                                        3TVMIkeld/02KoybGdcsQ6nBptatmTYuUlwhrMCcHX1SSrKkTLXgnpNEFwMKcg2TBqxYmF3eZwGW
                                                        M2xdpo3rLS4nZhpKVQOzuSimSYjjIVvpwprmh7CmeSFgRxDqT7jB1PpsOIw0z6FpLT6LawvwAfAh
                                                        m/YDcHfCuhBMeu8WD5laH/XbqBQJ4SwuX5J4e1d/+h1wlR+GCJ7Q789dNpRaBqx2aNYCjMp0VbHe
                                                        HrsQIq5s5QKwjehRaZ/fRmUAN8uZEVhx012ZNCyWuITs4ATRo9JGPzxifmNq/Z6h1H6cD+GrxWdx
                                                        bcBa5IqDIlhI8VR7QjiLqwb4SSaNihKXqfUxQ6k9wJTMPhuhF63AZqK3WrT4bVSACQGfc2iT8WBy
                                                        rCyJECKuTLOf6FFpq6l1u99GZRFuljOXGUqVZnJHfSxx1QNfyJQBOUjkWWLdjoeDfhuV5WzFGu3t
                                                        dk3kYyWfv5Ipo+KNXEL6OE50xsPmXHQ8eImp9QVDqc3A1Q5Na/FZXDuwUmCGZ8qIfkQXsJPoKd47
                                                        4njICCHciStjxDy21VDqVeATmTQkS5FTWwKCodSNwEsOzc4Aw9O8rywu8bZ9hBBxxWIf0aPStlw+
                                                        tSVguAkjDcHa7vRWJgyyE1eu07vyUMjU+pDfRgmxMbVuMZR6B7jMoWktPotrI9Y+nlw60bD7EPPI
                                                        DYCBLiUn9CGEO3H9eyaMiSkuU+vThlKNWKXK+iOdWCXlIqd4OXuIeT8iBPy5Q5uMZcjbbbUP0X/E
                                                        dYpod/iGAG8AFJLHzXYow1CqwtT6sNfGOInrrzL2WNJLZOWh9VjHxWbFBkAhJXYCfwTKHNrVAmu8
                                                        NsZOXNmyKbJ35aG6XD4uNpcJV4TaANzg0LQGP8Vlar3XUOoIwTtd/gjRayW/Kg8JwSSEs7gyEkx2
                                                        Km9WD3wmE4bEIciVh4Rg4mbGdYWh1CBT63NeGuIkrhCZFddJoh0PG02tT2fw84XsZxPwhIt2o/G4
                                                        Em/M9KduDKXm493hC11YxxdFTvGypvKQIDjhNHK9ieUwKErDZ50legNgyNT6uN8PQBC8wnbkAjCU
                                                        CpFc4O09oksev5WODYCGUoOATwLXAjOxznT+UEo3FQR7OrBipU1Yy5YXTK0d63G4Ede/AN9w8eFb
                                                        saaQ3aNSWuezhlLDgG8Df41shxH8Zz1wn6n16/EauBHXzcCvHD7oFFDmVSq/odQi4D8JXlhAEFYD
                                                        X4m11SjfxcVuMuRLgOleWG4otQJ4HhGWEEyWA5sMpSb2fsNRXOEcrH0uPiTtgTlDqb8D/hEp9SYE
                                                        m8nAbw2lxka+6GbkAnejV1qzjQ2lFgL/lJlnIwgpo4Bfhc/uBtIrrrSNXIZSQ4H/TsA+QQgC1cA3
                                                        u39Ip7gmG0qNTpORdwJjU76LIGSeFYZSZeBeXNuxins4kfLoZShVAHzVv2cjCClRAvwFuBRXuAjL
                                                        JhdN07HuugYo9+3RCELqfA4SW9Nkat11jS+PQxDSx2xDqdJExOUmlX9u+MDxVJjh40MRhHSQD0xP
                                                        VFxOBVwGAVekaJgEi4X+QLlrcYXTO3a6aJrq1LDY10ciCOnhQ4nGkTIeTBaEbCVRcblZd2X8kDFB
                                                        CCJejFyXGEpd6nfHBMFvEhXXO4Cb40Nl9BJynoTEFS73vMFFU1l3CTlPMomxGU3iFYRsxStxVRlK
                                                        DfG7c4LgJ8mIazPgdOBbATDP784Jgp8kLK7wYdlbXTSVqaGQ0yS7GVGCyYLggKfiMpSS2hdCzpKs
                                                        uNxkapQC0/zuoCD4RVLiMrXWWBV1nZB1l5CzpFIARtZdgmBDKuKSJF5BsMHrkWuqodQIvzspCH6Q
                                                        irjewjoWyI48ZGoo5ChJi8vU+jzQ4KKpTA2FnCTVirZu1l0ycgk5SaricrPuujJc6FMQcopMjFyD
                                                        gdl+d1QQMk1K4jK1Pop1lKUTsu4Sco50nCIiwWRBiEGmxCUjl5BzZEpcEwylxvndWUHIJOkQ19vA
                                                        +y7ayegl5BQpi8vUuhPY6KKpiEvIKdIVfwoB1zu0yWqnRllZGWPHJn7YZVtbGwcOHODsWadMsdhM
                                                        nDiRggL7X1NTUxOdnZ0AjC4vp3x0/AM+Ozo72fH22wnZMGbMGObOnctl06Yxbtw4ykaMoLCwkLa2
                                                        Nj5obaWlpYWmpiYaGxvZumUL7e3tST/nMWPGMLSkJOYJ813Ant27k753pkmXuNzEu+YYSn3I1PoD
                                                        vzudDNMuv5w7v/Y15syZw4ABAxK6tr29nbXPPcc93/se586dc31deXk5v379dfLz408wdu/ezcLr
                                                        L36v/e2dd3LrrbfGbW+aJguucT4CbciQISxbvpylS5cy7fLLXdt87tw5fv/GGzzwwAMc2L/f9XXL
                                                        li/n69/4BmPG2B9yM7+mhsOHD7u+r5+kS1wbgA7A7q9uIDAXeMPvTidD3fr11K1fT2lpKTfccAOL
                                                        Fi9m3jx3Ba4GDhzIsuXL6ejo4DsrVrj+zM8sWWIrLICnVq6M+nny5Mm27Zua7MOSeXl53H7HHdz5
                                                        ta8xfPjwhJ/ToEGDuO766/nRj37k+pply5fzgx/+0FXbqlmzskZc6XBoYGp9Csux4UTWr7tOnDjB
                                                        ypUr+dzy5Vz3J3/CUytXcr6tzdW1S5YsobjY/QlJS5YssX3/7NmzPPfss1GvOYlrr424SoYN4xdP
                                                        Psk9996blLC66ejoYJ9pumpbNGgQ377rLtf3njV7dtJ2ZZq0iCtMzm2e3NvUxHfvvpurrrqKVatW
                                                        0dHRYdu+sKjI9RSrqqqKyZWVtm1eeP55Tp8+3fNzaWkpZWVlttfEG7lKhg1j1apV1M6fn/Jz0fv2
                                                        uV53LbrpJkaMcL/lb1ZVVcr2ZYp0istVMLk/VoQ62tzM3StW8MRPf8qBAwds286cOdPVPZfcfLNj
                                                        m5UJTgkBmvbsifn6gw8+mNDayvYzmtxkxFl8/o47Err3zKoq8vKy408o0+IaAUz1u9NesW7dOsaP
                                                        H8/BgwfjjmIzZjgf+Txw4EA+tXixbZtt27bRuH171GtOIx3E/sNftGgRV7twcrjFrbhmz57t+sum
                                                        myFDhjBx0qS02eoladsKYmrdZCh1FBjt0PTjwC6/O+4FDQ0NnG9rY9y4cZw+fZqOjo4+a5fpLsR1
                                                        7YIFjmuelU8+2ec1J3EdOnSIDz7o66z9669+1dGmw4cP8/Of/YxQXR1HjhzhwoULFBcXM3r0aKZM
                                                        nUp1dTXXLlhASUmJa3HddvvtST3nWbNm2a4dg0K691nVA4sd2nzTUOoZU+s/+t35dNN27hwNDQ3U
                                                        zp/P0KFDaW9v5/Dhw1RUVPS0qayspKioiDYbJ4jTlPD0qVO8+MILfV5PxlM4ubKSqVPtJxNvNzZy
                                                        6y23RK3vwHLuHDp0iC1btrD66acpKirixptuYuuWLY7PqqysjJtuvDGp51xVVcWza9YkdW0mSee0
                                                        ENxNDSuBrYZS3zeUWmEo9W9+P4R0UldX1/P/AwcOpKKigoMHD/a8NmDAAC677LK415eVlXGNwxRt
                                                        zZo1MeNlyXgK58yZ49inRx55pI+wYtHW1saza9ZguvAUfvazn6WwqCjme52dnZw/fz7utdniMUy3
                                                        uH7nst044LvAPwKL/H4I6aRu/fo+r1VUVNDc3Nzzs92661OLFztmZDz11FN9Xhs8eHDUCBmLPTGc
                                                        GU7XAAwbNiytzyg/P59bb7st7vv19fXs2LEj7vvTpk1j4MCBabXJC9ItrgbgYMp3yWIaGxs5depU
                                                        1GsDBgygpKSk59t/hs0i/maHKeHGjRtjevwmuVjkx5oWOgWpAb7xzW+6cpa45dprr7VNJXv+uef6
                                                        OGsiKSwstB39g0JaxWVq3QH8u9+d8pPOzk7qQ31nx8XFxZw5cwaIP3JNmTLF0eHROyOjG1eewhii
                                                        jJyyxmPkyJG88OKLfOnLX0449SsWdu73c+fO8corr7DdRlxgZWoEnXSPXAAPA/v87pifRK67Iqmo
                                                        qOCdXbuYMnVqzGnNzUuX2t63paWF1159NeZ7TuJqaWnh5MmTfV4P1dXR1dXl2KdBgwax4jvf4bXf
                                                        /IaFn/xk0s/GMAw+9rGPxX3/16+9RmtrK9u22h8BNzsL1l1pF1f4cLzbgPOp3itbCcURF8CUqVNp
                                                        bW1lSi8PXX5+Pp/+9Kdt7/vMM8/EXegnm1N46NAhXn75Zdd9mzhxIo88+ihrX3iB+R/9aMLP5rbP
                                                        f972/e50rj179tjuJMjVkQtT6zrgFnJUYO+++27c5NK8vDyOHTvWZ2r4sauuYpTNVpGuri5WxXBk
                                                        dOMorjiZGQAP3H8/J06cSKiPVVVV/OLJJ3nwoYdc5yEWFxez1GZ0Pn7sGOvDDqHOzk4aGxtt+zt4
                                                        8OCEbM40nogLwNT6WWABoP3upB/YjV6VlZVMmxZ9dJmTI+P3b7wRdwtHYWEhEyZMsL3eLrDb3NzM
                                                        l774xZ41YSJ8avFinn/xRSqnTHFs++nPfIahJSVx31+7dm1UZovd1DAvLy/h7I5M45m4AEyt1wPT
                                                        sdzuzSneLqtYH8MlH8kll1zS8/8lJSVcd739XtNYGRndGIbh6PVzypr4w5tvsnTJEsfcyFiMHz+e
                                                        lU89xaWXXmrbzu2UsBundVfQp4aeigusNZip9T9gxbauBb4D/CfwM+Ah4B6/H4IXhEL28fTq6uoe
                                                        z9sNN95IUZyAKsCRI0f47W9/G/f9yiQ9hb3ZvXs3NyxcyFMrV7pyckQycuRIHv7xj+PG6OZeeWWf
                                                        0TqSnTt3snPnzqjXtma5uDJWZtrU+gLwf+H/+j3Hjh5l9+7dTIkzXRoydCiVlZXs2rXLcUr4S4ft
                                                        LJMc1lunT5+OCmLb0draynfvvptVq1bxrW99i49ffbXrPk+fMYPFixezJkZq0u0OeYSx0pn279/P
                                                        yZMn467pZgVcXJ6PXLlMnc26C6x4l1KKD8+dG7dNR0cHT//yl7b3cXLDJ5Pk+nZjI3/2hS+wbOlS
                                                        GhrcHGZjsXT58j6vjRo1ik8sXGjbx+fXro353rZt2+JeN3bs2IT2gmUaEZeH1Dmsu6bPmOGYpPv6
                                                        b37jOOqkurXfjjcbGli+dCl/f9ddtsnG3cyZPbvPfqvP3XKLbbpSw+bN5OXlMWrUqD7/vbt3r+3n
                                                        BXlqKKePeMimjRvp6OiIm9Uwc+ZMysvLbe9h58gAKz5mGIZtm1TE1c3qp5+mubmZnz7xhG27wqIi
                                                        hg4d2pMCNmDAAG6xKZgD8JHqajZu3pyUXbNmzeL/bNajfiIjl4ecOXPGdvvFFR/+MGPHxS9ErLV2
                                                        9DpOmDCBwsJC2zbpEBfA79atY9cu5614kVv8r7v+eseKTqkQ5HWXiMtjnMRhh13QuBs3nsJY2fDJ
                                                        bpV3EvL7778flVnh5MhIlSBPC0VcHhNycGrE4/z58zyzerVjO6f1VltbGwdjxK5efvVVvvyXf0lp
                                                        aalrmxYtWsTEiRNt20SO1JMrK6mu8bYWbGlpKeMdAuh+IeLymLfeeiuparuvvPyyq5SkSQ4j17t7
                                                        9/aJWY0aPZqpU6fy9ytWUL9hA48+9hhLly1j0qRJMeNUlVOmcM+99/KvDz3kaM+rEYnFn3cIGqeL
                                                        oFaEEoeGx7S3t7Np48aE4kXQt7JTPJLa2h9xTWFREZ9YuLDHVX7hwgXef/99zp09S0dnJyNGjHCd
                                                        w3f8+PEel/rgwYNdVbBKB1WzZvHSSy9l5LMSQcSVAdavX5+QuHbv3k2DS++Z0ybJWOstO0EWFBQk
                                                        HTv6/v3394zSS26+2VGUz6xe3eP8yMvPJz/OOjA/P59lMeJn3QR127+IKwMkuu5ycr93U1FR4fgH
                                                        7DRypYufPfFEVNEcpynh9u3buevb33Z9/+qaGsaPHx/zvRkzZpCfn99zGEVQkDVXBti5cyctLS2u
                                                        2p49e5a1zz3nqq2rnMIY4nJzXSL85PHHuf+++3p+rq6pccwacdvHbuxCGsXFxWnvUzoQcWWI+pCb
                                                        wljw/Nq1riotgfMIdOHCBfS+fQlf55bm5mb+6itf4YHvfz/KaeLkfu/o6IhZGs6OLQ7l2oI4NRRx
                                                        ZQinPMNu3DoywNlTuF/rmDXbH3vsMduNiE7s2bOH++69l2s+/vE+ZQfGjBnjuH3m92+8wfHjxxP6
                                                        TLscQwhmvEvWXBnif19/nX/+wQ9s25xpbeXtBP7oN2/axFGbvEOtY+9T/cnjj/OTxx+nrKyMK+fN
                                                        Y/r06RgTJ3KpUgwfPpySkhIGFRfT3t7OqVOnOHL4MHv27GH79u1s2LDBdvtKeXk5jz7yiK3d69at
                                                        S/j5vd3YyI8ffjju+24K7WSavET37XiNodR2wLnmsyAEm9tlWigIHiHiEgSPEHEJgkeIuATBI0Rc
                                                        guARIi5B8AgRlyB4hIhLEDxCxCUIHiHiEgSPEHEJgkeIuATBI0RcguARIi5B8AgRlyB4hIhLEDxC
                                                        xCUIHiHiEgSPEHEJgkeIuATBI0RcguARIi5B8IggiitYtd4EITm6giiuD/w2QBDSwAdBFNd7fhsg
                                                        CGngvSCKa7vfBghCilwAdgRRXK/7bYAgpMhGU+vTQRRXHWD6bYQgpMBKCKC30NS6C/hXv+0QhCQ5
                                                        BvwcAiiuMP8B7PLbCEFIgu+aWrdCQMVlan0euAM477ctgpAArwD/1f1DIMUFYGq9CfgLIFinSAtC
                                                        bLYCt4aXNUCAxQVgav0kcDvQ5rctgmBDPbDA1Ppk5IuBFheAqfVKYD6wLdV7CUKauQD8ELja1Lql
                                                        95uBO7Y1HoZSBVjrsK8D0/22R8hpzgKrgX8ytY7reMsacUViKDUbuAZLZGOBIX7bJPRrLgAngCZg
                                                        E/B67ylgLP4fuk5LBjkcS0gAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTktMDUtMTZUMTE6MTA6MDAt
                                                        MDc6MDD0Ng6FAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE5LTA1LTE2VDExOjEwOjAwLTA3OjAwhWu2
                                                        OQAAAABJRU5ErkJggg==" />
                                                        </svg>
                                                        </span>
                                    
                                        </div>
                                        <div class="col-md-2">
                                            <span>Validade</span><br>
                                            <span id="resposta-endereco">11/02</span>
                                        </div>
                                        
                                    </div>
                                    <div id="linha-endereco" class="row">
                                        <div  class="col-md-4">
                                            <span>Nome do Titular</span><br>
                                            <span id="resposta-endereco">Elizeu Silva</span>
                                        </div>
                                        </div>
                                    <div id="linha-endereco" class="row">
                                        <div class="col-md-4">
                                            <span>Endereço de Cobrança</span><br>
                                            <span id="resposta-endereco">Avenida Ain Ata, 640 - Térreo</span><br>
                                            <span id="resposta-endereco">20081-902</span><br>
                                            <span id="resposta-endereco">Jardim Ernida - Jundiaí - SP</span>
                                        </div>
                                        
                                    </div>
                                    
                                    






                    </div>
                    <div class="row">


                                    <div id="linha-endereco" class="row">
                                    <div id="titulo-dados"class="col-sm-3">
                                        <span>Cartão de Crédito 2</span>
                                    </div>
                                    <div class="col-md-9">
                                        <span class="excluir">Excluir Cartão</span>
                                    </div>
                                    </div>
                                    <div id="linha-endereco" class="row">
                                    <div class="col-md-2">
                                        <span>Número do Cartão</span><br>
                                        <span id="resposta-endereco">**** **** **** 8321</span>
                                    </div>
                                    <div class="col-md-2">
                                        <span>
                                                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="70px" height="70px" viewBox="0 0 70 70" enable-background="new 0 0 70 70" xml:space="preserve">  <image id="image0" width="70" height="70" x="0" y="0"
                                                    href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEYAAABGCAYAAABxLuKEAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                                                AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAABmJLR0QA/wD/AP+gvaeTAAAA
                                                CXBIWXMAAC4jAAAuIwF4pT92AAAAB3RJTUUH4wUQBxYE2kd8KAAAC+xJREFUeNrdnF1sFNcVx38z
                                                u/YC3rW9sWPAwTbGjvEH2MVg2tI4JDEpJI0CTSFRU7VpGrWqWiURykNfWhURKkWoCg+NIpU8tA8o
                                                WG0ihSgpSWzaRiJEDdg4MTbgJTY2xqw/ANv4Yz9n+nBn1uNl157ZNSzhL1nYs3Pv3Pubc+495967
                                                SHxDVVxUBGADcoBy4NtAPbAamACOAH8FBgF6enst1W9PdQctQNBBuIESYB2wEagGioEs7XNdNUAV
                                                8CIwZPWZUqo7PQ8MG3APUGoAUQOsBDIBeZ5qVOAPwJ/AmtXcERYTZRE5c4CI9yKngQHgDNANbEK4
                                                lgQ8hXCpESttSgkYAwi7AUQtM65RZALEZaADOAmcAs4BXsAPrAXe14AWa//eeWBigLg/BgjXHCCm
                                                4oAY1EBE3ER71nngSw1IFmJAPpVyMFEgcmOAKDQBol8D8QXQYgARMIKIo4BWdjtiHFqrt8vsOLMg
                                                YKJA3KuBWK+BWKuBcM4BYlIDcQZhETqIIZMgIurp7dXb0w6EtDZVAQ4067plYAwg0uKAKJgDhIqw
                                                iEtRIM4nAsLQHglYoj27CthmuKUU4cIDCwomBogyYANQZwCRQXyLmEBYRDszY0SXBiKYIAi0Z67Q
                                                2rBRezmrgTytrbqWI6zWNJiYHYkCkac9bH0MELGkIlzjkgZCHyO6gOEFBFGnvZxYIKKlAC8Afzf7
                                                bHsMEEsNIDYCa7TGzAViIg6IkSRA6K6xQmvDRgsgohUZgM3KrjViCbAD+KFWwQrtWrwxYgLoiwLh
                                                SRIEzFiEDmI9Ig+6F0i30rEYqgIWI2Kg+cFoAP4IvAQsigPixhwgQkmAiGcRS7FmEWZUgggdLpkF
                                                8zTwGwMUHUQv8JUGotUAImw1U00RiGgtRQSSpsH8AjG1gogd3gL+B1wArrJwFqEPluWIMSJZ17Aq
                                                F1AJHDcLpkL73Y9wqX8sAIgqZiwiVSBiyXQEbAfCBjCXzECJAnEfs12jnNvjGnNJz7a/QoQOTyNe
                                                TKXW5qn5KrADX2sdyUBkop+bBGF0jaWk1iJ0EHqSeRI4q10rBR4B8rX+5QEXzYBpRaxf2DCYWhSI
                                                aNe4E0EYlx2MOdMVxIyar0EptgImoHW0BmFuZXcoiE7ELHkKYRGzQMTRuAbtOwivqAT+YwZMBzCq
                                                0dwMfMLCBFTJyIdYf+lktmuYAREtFRF/6TI1ANsRZtWvgVmi/dxuTSNMPnqMSARERAZ36kDAXoSY
                                                hZ2I6H1OMNcQwVvtbQThI7ZrXEkGxBz6GpHAFiBW9ZYh4rQ5wYQQ6yLP3CYQRou4VSCiNYjwjALE
                                                MLHKDBg0MEEWLvZINYhoTWjPr0ckkpXAJ3ONMzoYD8KlliYB4koUiE7EGOFLAYiItHFGRbx8XWsR
                                                KwdqvHI6mCuIqNcsmHggUmURZtSBiIL1KTsTGJsPzBhirt9gAUS7ds1ykplCMG8itniHmL2de5Mk
                                                Q5T7O+A17fcQwoLOcrNF+BAxTh1it8+V6h6bVLTbGBfhFITb/xcxKKv2qLnej9hm6AB+ot0UHWJn
                                                IfaDXwCyU93bBZSi9ff3wDvGXQJ9/SUf4X+TgD9qhw/EotbL3CH73gsoGZEK/RkYNp4WuIJYtQMx
                                                CK+KUbgQeO4uhBLdxxeNYPRkC0RaUBmj0Gqt4N2u7xrBxJrrjS4EYqC9m61FV5YMs6ZaPdkCkWx9
                                                U2acBVf0249OtpYidgwWXKqqoigKAJIkIUnSrL9lOf5hKUVRUFUx++r3mS2bKJjoZKuEeZKtRICo
                                                qkpubi4VlZVUVlaybNky0tLSGB8fp7u7mzPt7fT09ODz+bDZZuIwRVGQZZkVBQWsWbOG1WVl5OTm
                                                AnDt2jW6uro4097O5cuXCYfDSQGKBmNMthYhljQ/jhpnEpaiKOTm5vLk9u3s2LGD+8vKWLx48U33
                                                jIyMcOKzzzj89tu0tLQQDov1+lWrVvH0M8+wdetWVhQUkJY2O+cNhUL09/fT3NREY2MjFzyehOFE
                                                Xsfo2Bju7GwQa6KPaZcHEEe2dFUAO5knnI4HZV1tLfv27ePHzz7L8uXLb+oYCFfIyMigvKKChi1b
                                                kCSJttOnaWho4LX9+/n+1q243e5ZlqRLlmWys7OpXb+eB+rrGRsbw+PxoCgKkmTpHGZwVu0aGKfW
                                                +XRE1PtPZg7cJARGURTq6+t5bf9+qqurTb9Fh8OBx+MhrCiUlpay5dFHSU83t+Lqdrv53gMP4PP5
                                                aG9vR1UUMA8nGKuFPYgBGMSW5nIrEGJBWbt2LXv27qW4uNhS2eamJnp6ejhw4AD5+fk0Hj4cGWTN
                                                yOVysXv3brbv2BF/fSGOYoEZ0uDAzBnbhKSqKtnZ2ex+5RVKSkoslR0YGKCpqYmfPfcc9+TksHPX
                                                LgYGBmhtabFUj9Pl4qWXX6aystIS1FhgJhGZNIiEsioZMI89/jgP1tdbLvvR0aN8a906SkvFe3E6
                                                nfzgiSdobm4mEAhYqquwsJCfP/+8aTeMBwZu3m6wPNiqqorb7eZHO3diT7O2Yjo8PIzH46GhoWHW
                                                9erqamw2G52dnZbqA2hoaKCqqioyw1kCY4iAzzKzvVCOWGqwJEVRqK6poarKusGdaW8nPz+fZcuW
                                                zbput9tZV1vL6dZWy3Xek5PDQw8/bHp2imcxF9G+tYEI9lZYbYgkSdTV1d0Up5jR+fPn4wItLy/H
                                                6/Xi9/ks1gp1dXVkZGREouZEwAwj0gMQp5B+i9h3Mj3fORwOylavttz4YDDI0NAQhXGCypycHABG
                                                R0ct111YVEROTk5SYKaZOfUgA78Cfm22Aaqq4nA4WJqXlxAYVJXMzMyYnzscDhwOBzduWE/hMjMz
                                                cbvdSYEBeBtxHt94r2mLSU9Px7FokdnbIwqFQsg2G+lxBmxZlkl3OPD5TR/yjshms5l27ZvAGAbg
                                                LuCXwDuIuMYL5uOkcDiMYnIGiO44EDfmUFUVJRyOmRLMJ1VVCSUyK8WAcxL4KfAQsN8KGL/fz9jY
                                                mNnbI7Lb7QSDQaanY586DYVCTE9Pk5GRYbFm8Pl8jI+Pm5qZ4rpST2+v/uPr6e3tQyx9mpIkSfj9
                                                fnoT2GtyOBy4XC4GBwdjfj4xMUEwGCQry3IEwdDQENeuXk0OTLIKhUK0tbWZGuiMkiSJwsJCurq6
                                                Yn7e19eH0+mMOzjPpbOdnYyOjqYWjCRJnDp5kisDpr/XEFFNTQ3nzp3DFyNWaTt9mvLycqvLCASD
                                                QT799FMx65nQLQMjyzIXL17k2LFjlsuuKinBbrfzZVvbrOtDQ0N0d3dTu3695To7Ozr4/MQJ00se
                                                twwMCHdqbGzk8uXLlsqlpaXRsGULR48eZWpq5uTpxx99RHlFBXkW4yO/38+hQ4cYHh5OOiVYEMmy
                                                TGdHB28dPIjfYtxRV1dHZmYm7x85AsDp1lYuXLjAtm3bLNUD8OEHH/CvDz+05H6mgwFtdS+hFbzz
                                                586R4XRaWr2TZZlVJSUcee89hgYHOX78OLt27aJo5UpLUI4fP86re/dy9epVK+u/wVsORpIkQqEQ
                                                ra2tyLJMZVWV6XURp9OJ3+dj36uvsmHDBp7cvt1058LhMM1NTezZs4dLfX1WF8VvPRgdTiAQ4OQX
                                                X3Cxp4f8++4jNzd3zsZev3aNd999lzffeAOv14vH42F0dJTCggKysrLiuoWqqvT39/PWwYMceP11
                                                vF5vIjsFQdNOp22hPAU0ksRZPUVRyMvLo/7BB9m8eTP3l5Xhdrux2+1MTU1xZWCAlpYWmpubOdPe
                                                TiAQQJblSDxUXFzMIw0NbNq0iaKVK8l0uUCSuDE+Tm9fH5+fOMG/jx2ju7sbVVUtT+uapm47GJjZ
                                                hUxPTyc7OxuXy4Vss+H3+bh+/TqTk5MoihIzH9J3IRcvXozb7WZJRgYSMDk5yejoaCSVSHI3ciol
                                                G/SSJGGz2QiHw4yMjDA8PDzrM/3zWNI7HAgE8Hq9EUvSyy3E9izcAScX9A7d7rLzySreAOJI1t0u
                                                v1UwvcD1VLf6Nui8VTBdiG+n3M2aBP5mOh7RNv3DiONoNYgjZ3fs/1iUoHyIs8B/sdQxw3GQUsTO
                                                wcOIs/l3g7zAYeAQMPF/MyN4g9mtN+wAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTktMDUtMTZUMTQ6
                                                MjI6MDQtMDc6MDCAQS+5AAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE5LTA1LTE2VDE0OjIyOjA0LTA3
                                                OjAw8RyXBQAAAABJRU5ErkJggg==" />
                                                </svg>

                                        </span>

                                    </div>
                                    <div class="col-md-2">
                                        <span>Validade</span><br>
                                        <span id="resposta-endereco">09/24</span>
                                    </div>

                                    </div>
                                    <div id="linha-endereco" class="row">
                                    <div  class="col-md-4">
                                        <span>Nome do Titular</span><br>
                                        <span id="resposta-endereco">Elizeu Silva</span>
                                    </div>
                                    </div>
                                    <div id="linha-endereco" class="row">
                                    <div class="col-md-4">
                                        <span>Endereço de Cobrança</span><br>
                                        <span id="resposta-endereco">Avenida Ain Ata, 640 - Térreo</span><br>
                                        <span id="resposta-endereco">20081-902</span><br>
                                        <span id="resposta-endereco">Jardim Ernida - Jundiaí - SP</span>
                                    </div>

                                    </div>

                    </div>


                    <div id="linha-endereco" class="row">
                                        <div class="col-md-4 col-md-offset-8">
                                            <button class="btn-editar">Editar</button> <button class="btn-adicionar">Adicionar Endereço</button>
                                        </div>
                                    </div>
                   
               
                  
                </div>
                <div id="senha-cliente" class="div-dados col-xs-12 col-sm-6 col-md-8">
                   <div id="linha-endereco" class="row">
                       <div id="titulo-dados"class="col-sm-4">
                           <span>Dados de Acesso</span>
                       </div>
                       
                   </div>
                   <div id="linha-endereco" class="row">
                       <div class="col-md-4">
                           <span>E-mail Cadastrado</span><br>
                           <span id="resposta-endereco">elizeu.silva@plenum.bio</span>
                       </div>
                   </div>
                   <div id="linha-endereco" class="row">
                       <div  class="col-md-4">
                           <span>Senha Atual</span><br>
                           <span id="resposta-endereco">**********************</span>
                           <div class="col-md-6 col-md-offset-12">
                           <button class="btn-editar-senha">Editar</button> 
                       </div>
                       </div>
                       
                   </div>
               
                      
                  
               
                  
                </div>
                <script>
                                    $(function(){

                    $(".div-dados").css("display", "none");
                    $(".div-dados#dados-cliente").addClass("active");

                    $(".link-dados").on("click", function( e ){         
                    e.preventDefault();
                        
                        $("div").removeClass("active");
                        var id = $(this).attr("href"); 
                        $("#"+id+"").addClass("active");
                        
                    });
                    })
                </script>
                
            </div>
            <div id="linha-titulo" class="row">
                <div class="titulo-conta col-md-6">
                    <h2>Inscrições de Cursos</h2>
                </div>
                <div class="button-cancelar col-md-6">
                    <button class="btn-curso">Cancelar Curso</button>
                </div>
            </div>
            <div id="cancelar-curso" class="row">
              <div id="imagem-cancelar" class="col-xs-6 col-md-4">
                  <img src="../ASSETS/CONTA/como_fazer_cirurgia.jpg" alt="">
              </div>
              <div class="col-xs-12 col-sm-6 col-md-8">
              <div class="container-horario">
                        <div class="titulo-curso col-md-4" >
                            <h2>Como fazer
                            um planejamento
                            cirúrgico</h2>
                            <h4>Prof.Alberto Blay</h4>
                        </div>
                        <div class="descricao-curso col-md-6" >
                            <div class="row">
                                    <div class="calendario-edu col-md-2">
                                        <span> 
                                            <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">  <image id="image0" width="50" height="50" x="0" y="0"
                                                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAQAAAC0NkA6AAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                                            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
                                            cwAALiMAAC4jAXilP3YAAAAHdElNRQfjBQwXMSlDtNlvAAAGEklEQVRYw63Xe2zV5RnA8c/vnLa0
                                            XFostw4KdVwUBkjG0CxjM2NxwYRLwmQKmrjMQcZBiYsQkLkwBmOBuUkAl986BpmRmOmMzDjFy0Jp
                                            FlgissULoozJZGqkpDDbHi497fntj/44nLanXEyfJs15nvfyfZ/nfX/v87yBPAnneFaJPealLkB4
                                            vX1qnDAj9QGEJZ4zS8Z3U8/HI35incDG1GqXkSLCS1qpIpRKxLZiJShRHOsJZUgqzY0pE6DvpTlS
                                            hSBhx+T9RJpEOXt/pVpyWqRUfxdk4h6RIhXafZZrD1RIuqAlLABKKLHAc/Z60TjZnP3H6szVHmvt
                                            ZqvziCDWs8Z4yRPKc8vqp1adPR5WWShcS60zAGllsS0QGGWSQSIBApFBJnmbWKfMJAMV5S32BpMx
                                            3SgPOd/VkxUGxKvjnGZpTdrjFWY0SWuSiYOS1SSt2TlkRSIt0tJaRPGIwAITu3syIreF0zzlNkUa
                                            VBqPaZ4wXz9pjaZhvEoPGabdEQuVGWKi36sTOG684bnd/EKB05X7tcYI74tMMs+XcZc2+2UUu99C
                                            TLHDbi0CsyySVOlxf3BS5Bb3GpabKegKCcKoiyXq0unKeudpM+5IvdCTJz2t41r1ApK4cpdrlKLu
                                            2CKv9TKkTUN3yJxe9yXTHZL5PPNcVrJdDUWelOxVRJtHvdkVsvBqzsc1+bGrO6RNsY+82yuA4Sbl
                                            bupOEHjF/b0CudvOQnHpgLS70CuQtsLm+IvvmmbCwb6tBC1eTqXDCW4BJ+xLRbksWKIEmbwFRpeF
                                            dJMvClXguNelzbQZkVB9GAmM9jU3G22ghGYn/MMBR7Ta7xmzCn3xPUmQ9x9a7fRzWTdZZI5RXS6k
                                            Bnttt899FuWS8hUhQdySFCChza+tF3nACjWgXZNmkb4GKjbUAjPt8EtbFF8t5FNblaFRE/5ppVpF
                                            1luiD056xavedUZWuTFmmGWs6yx3o2U+7BGSVxhJcUJ+JVWnTh/rPCApY7dfOZR3ebzjeY9LWaTc
                                            HIFF4cnOBymR92uoatVGKEOJ4apVq8pdOndbKum8jX7goGGq9U+RVKXaCCestEwDZlmVq9O6Qfr6
                                            rXr19pqO8faoV+9pQ+PTtlKZrN/YoMgv7FNvHqr8Sb16tQZ60mppgfvc2tOeJIw0Gln9UGq0/kjG
                                            Pe5yI/5uk1Y/tUoCA1HsetUYaptGu3zVYhUW+5vWQp70dMqgwlyBVqFTkiYXGBWRolXoJL7phsKe
                                            ZP3HALRrwTnv64+PtWGs8fhAHSInHBXhNDKOSaPZeVLCww6YZ4iveKcQJG1JfMLP4L34y213GmOU
                                            47CGlLDdI9aDJnzqTklknQGtDponYUKYd1VdgkQa8zzMOJmnDZbEJ/EF+L+8lnanugTuI5HAkMLh
                                            KvWgGmT9zltqPKgUjR5zJt6ZbLyLi00BT6sv8FC42KsgpMSdpoK/esswP9QX/7XdGadlJVRJyEqY
                                            FRcf76kvcFSqBHSKSidix0OhTRZRHJqO0vu4FnzJoPBSvwIFA5KmInK0J0g2/uuu/csxjDM93r2O
                                            lm7ZI2Ssr+OMN/IDeSlc56xRicgh/NsixUhrxGkvmarUEnWabPYMONQNkfB9I3HAkfyWIGxVrNYS
                                            l5cJ9qiRsdamXLg65dMQ5tppkLPu8efOnmRRqfyyRV6bI7bYpNgqzWq1FgBwu80GifzRy52HB+FB
                                            07R4+7KlxFEPy9jmewJn7bDVsS49hrjXClVot97GjtlSOcjtthrnSvKoNcpttkACR+32mmOaRPoa
                                            6Rvmm5ZLCs3u8ReDnbqICUImm6/mClflWdscdp3llhgUWxrizDhUBTjvDZNV2GWVmRZb69UOTJBL
                                            L1cqVgNZJN1qqW91e0inHbTdHvNNtMF3bDTQh5Z5gVTH1KGrkdTFnn1MMcPNapRLSPvYm+q87jME
                                            +lnsZ/GL+hM/8qzomovt3IKK9FcmcF7LxQSVErLADn1z3Rss99TnrOi7+p66ZB9ti9l5TY029O6z
                                            oQM+3BZ35O1xU+8+gLxoNs3qVZkcY5o81suQGJNWr9JNkk5bbWuvQ2LMOfuNUGOtWm3/B5dQ74vo
                                            8D0wAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDE5LTA1LTEzVDA2OjQ5OjQwLTA3OjAwZxu9zwAAACV0
                                            RVh0ZGF0ZTptb2RpZnkAMjAxOS0wNS0xM1QwNjo0OTo0MS0wNzowMLAxDscAAAAASUVORK5CYII=" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="data col-md-6">
                                                <h2>31/03/2019</h2>
                                    </div>
                                </div>
                            <div class="row">
                                    <div class="relogio-edu col-md-2">
                                        <span> 
                                            <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">  <image id="image0" width="50" height="50" x="0" y="0"
                                                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAQAAAC0NkA6AAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                                            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
                                            cwAALiMAAC4jAXilP3YAAAAHdElNRQfjBQwXNRqYCH19AAAGqElEQVRYw6XXf5CVZRUH8M/dvVyB
                                            VWC3xRTBUAlHJ8gJQXBidAMpZAfZJkkjnZxq8jKkw7SaaROgxg9FHJF6J/pDzZgUQoRmIaMkI0Mz
                                            SEBH2TRQ2AVyuQvbLMv+7o/73nfv3b27rXjef85znvM83+ec55zznDcGBBD3BTcpM9YwMQ0O2mmz
                                            XZpIyk8BDDLFTaa6xBCdTqq2w2Z7tGXWxSLVKy1wkwvTkohS/mC1XflhApjiLjOU5Ex0OmqzJ72T
                                            XhcjoECFn7q8l+PWWuqXWpI9IRK+634jell3wAM26UgqDIj5hjUu1hudZ7pWr1e154rLEyotM6zX
                                            daW+pMZb5eK41gqlvaq2+MBeDeJBS7eZuAZbfN5nJHqFWeGQV2PBUOvM6kXpQ9tt8YY6RUYa5QIl
                                            BqFJyjGHHdGo1ESz3dCrJ6rMi7tRWd7Jas96ziEjTVfmKiMNzTlxi1OOeNMOO2012i1uMzbPPmVm
                                            xoJN5vSYqPOUQI0p5rnBxQr0Th0+tN06u1wk6Y48jn8xFhxxUTfhTovsdLW7zTRU/+iUbZ7wD1Mt
                                            MbXbXE0saBXPccJTFmt1t+85v5tyu0aNWpBQpEhht/n/+IUnDLDYHTmObYsF7VnOOG25lS73iOk5
                                            SXncm16332H1mnGOYqOMc42rfDpLr9Mf3euASvcZ3OXQWPBR5MXTlnhcmdVZadlhn+dt9S9NeZw0
                                            yGfNMtf4rIMecJcdFloUwdQVls90CWi10gozrHVptOB9S/3I7x1P16HyrP2Tymlz3F9tcdSYqLCU
                                            ut471kmYEjr0tbgXfNEArLfcNdYYFd3AJg/an94wpLE+F3JvqU5LA45aZbufqAg3HeVnbrPcJeah
                                            1aZYMMImk+wzBxtMCDdp8rhHnMotjEGl5SF7X3JllhyGutdCg0LRbjfjReP9XUWBWisds0ytRVkQ
                                            D1nSHQIFCsMvJ3OS6SBe4qHo5iZYpNYyxzyqNo7NGvzFHHMjR622qmfVzaHO3GESQYtVhqoMnTbX
                                            NpvV20FBkhYvKcoydasVmvuEyEtJmq2wNYq8hYq8pCUZmT07clWtB9V/fIgQpt6DaiOXzc54WZIi
                                            t4Z53+kZe84KIUN7PBM6M+5WRck0SMA4E0OVGs/qODs7Qls6PKsmHE40LkiDYGpUCF/OxP8ngKn2
                                            cjgYmi6WccRNCoXttmvv32ZBfoDMLvPCGJskrq0AQ4wJtert/URmZGiv+pAbY0jakmLDQ9Fxx/rp
                                            rK/1eAVbPeFA2p7gmONh2R2uWCqOc6N6eUJjP886KXJxF8hv0yBolAq5wc5NX3wien6a+3sjeagt
                                            qwq0OxNyhRJpkDYdoWhAn6+5bt1lLhVmzRYYEHId2tJ30hjhDjMw7+OUoVpv9DrX7FTED4xavjMa
                                            0yAnpVwAzjc8iot8tN7mPmZPR9zwqD9IOZkBOeRKUOqKoK9kbNbs/1LAFdGTfigD0mKPG0FCmS3d
                                            y3gX9TO8Y8qibmWPlkxZ2RndxAwjgv5t1bsdI8wIB012kqnCu70diseq+EQYUBEl6tt2h1UYJ2wM
                                            nVToTqPP3paA0e4M867TRidEIKz3Xshd6QcSZwcTkFAZBhHvWZ9mCiDJQWvDbI+5w+1iHx8mIOZ2
                                            3wqTst1aB5NdIOj0tFdCvsjDKvIX8z4hqPCwolDwiqczcRrLUrrW80aGw6Pu8Zz2/oVtAIVu8agL
                                            Q9ERX/e3zNqoMy/niDrTnAPOM03Cfk3lylX1CVAOJe7xUJSCDSpVidbFstXFLcgyuN2frPSKlvDe
                                            8ltAwnUqTYsO3OjH1mjrWhHrtqTQfEsUR8KTtvq113qtaMUm+6ZZWT9L9Rb5ufbsQ+WCXKfE73zV
                                            Updl6Zy2z5+9plqd09oQN1ipsSa73visPxHed78XzHTEP7tgsv+yEuabbrG1DlhsVvQmDDbZZK1S
                                            6qQ0YZASpUoijTS1qrLYu5IWWe/7XQ9gdnRdbZtSZ/zKUnVutcD4Pp+pbOq0zxq/UeoBtxnoQzd0
                                            NVdd0RWz0HTETVAmZYONDhvmU93O25Oa7PaYB7yhwpNuFMcQNV7tFl0Bo22PWiOabXePd5WY4sum
                                            uNSwHk9zh5P+bZeX7JIyzjLTDIxm9/iKj5Ld7mR21m8ccSmnkFKlSonRxrrMRYoNxBn1aryv2sEo
                                            7hq0hjmWpnFmWJd78QOVZ5200WrLNUQ/bCmpsA0vUICOqPWQyaDgA99R69sR0AA325DOsQxIm/2u
                                            N0An/mulR6PmIkrDQO72PdLzhB86bb5BiOlIl3n4HzzvCW75CvMFAAAAJXRFWHRkYXRlOmNyZWF0
                                            ZQAyMDE5LTA1LTEzVDA2OjUzOjI2LTA3OjAwFAjOewAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxOS0w
                                            NS0xM1QwNjo1MzoyNi0wNzowMGVVdscAAAAASUVORK5CYII=" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="curso-descricao col-md-6">
                                                <h3>18h00 - 20h00</h3>
                                    </div>
                            </div>
                            <div class="row">
                                    <div class="local-edu col-md-2">
                                        <span> 
                                        <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="40px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">  <image id="image0" width="50" height="50" x="0" y="0"
                                                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAQAAAC0NkA6AAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                                            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
                                            cwAALiMAAC4jAXilP3YAAAAHdElNRQfjBQwXOQYgvG4+AAAETUlEQVRYw6WXXWxURRSAv3u3xWob
                                            imURq7FpLFpLaSSBhMSAICqJqLGaGIy2Ie0D8VJMTOODMf68aOKDBBMlN/KgEaQx5acSTNBCa1yK
                                            ShGr9mdZcWmlUGpr+qP92XbXrQ93u+7M/dl7d8/Tzjln5rtnzuyZMwqWoi/+KKCUSqq4j1Juo5Cb
                                            yQFizDLJCANcopteBpgy3DXL1RRbwK2s5SEeoBw/edhLhL/4je/4hi7GrUGKJaCcap6iigLcyzS/
                                            coIvCJlBKZAE4F7q2UGph+VTZYBmPpZBSYgOsJSdvMQ9ltP/ZZopZogCudxCAfn4LD0v8yGfMvk/
                                            RklBrOZtniRHmhLnOr9wkV6uMsY0MSCHfIoooZJ13M+dqNKcGCd5g95FjJJEbOV9qiTnKc5yjABX
                                            mbPZnpsoYTPPsMmUv25ept3AKAnENj6S8hCllf0EmDaGVoczedDzeZA9PEqulJ8X+Rq0BGQ9TVIm
                                            rvMuB/nbbnkL1FJ28ip3SNl5nh81FB1W8DlbBWOQPbS7AUigh/mACsHQznOMqijUsUUw9LPL2E23
                                            iKRvG7voFwxbqENRKaNeOB0zvEmH+xhSQUAHbzGTolSpp0ylmlWCbyvHMkEkMUc5LShXUa2yXfhL
                                            RWliNjNEAjNLE9EUlY/tKmsErxG6MiYsShejwniNSpGgGGM88zgSsYwzJqiK5ILgM5UI76LKNU1l
                                            QhivYKXufjkL0WElfkE1odInKJazMetINrJcGAdVviIuRFaLP/NYdPBTI2x5nFMqLdJ/dAO78WWG
                                            0cHHbjYIygFaVEIcYiFF6aORWhQdbyAdHRRqaRTSvsAhQipxDvC94F/IXhrIwwNGB8ijgb0UCoYf
                                            OEDcKPWb+IwSwRjhMO9xyRho6ZYHKOcVaqS+ZpAaAlry0nqa/RRL83/nE5oJL26mZre8QhnPUmfq
                                            DYZp4Hji0kq4P8E+qVQCXKGVU/zMMPMWYSzhdtbyGNu422QL08hJFhLXbxKznnd4xOIfP88gQfoI
                                            c4NJIkAehRRTxmoquIslphlx2nmNC0IjkcT40WhkmW0CokQT3UqudJ+nygT70Bk1tURJTC4tPE52
                                            cpwdxFJzmNJlaYAepTtLyAJniYmHxJyBHqHMeJd/OC+rJIgGIaMRyljChOTDbo5kkBtZQS4YDwhn
                                            yBjhrCAdQiUEMLXXEOUgfwCVUjeWXi5zmlkC5iKUY+F8hCPAZr709AiCZl63Npi2K/kd3cZTxrXM
                                            m0+VQyQGRh/nW9Z5gAzTY1et7XuTBdqIeID0MmRnsoVo8BNXPEA6bR9Kjl3WCOdcI+bsM+IMiXOG
                                            mEvIEH3296cDRINOBl1CepzqhHNTes1pEwQ5b3lzuoLEOOOqJkfodDKna6/P8acLyDWCTh2NI0SD
                                            fi66gPQ4f0q6SOYIuIB0Cm8rzxA4SqvjQY7RRrPzEgppRIdiXqCaCpZJnxRngiAnOMyQ8+vsP7r8
                                            MBGEsHqgAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDE5LTA1LTEzVDA2OjU3OjA2LTA3OjAwX8ZpfAAA
                                            ACV0RVh0ZGF0ZTptb2RpZnkAMjAxOS0wNS0xM1QwNjo1NzowNi0wNzowMC6b0cAAAAAASUVORK5C
                                            YII=" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="auditorio-conta col-xs-9">
                                            <h3><span>Auditório Plenum</span><br>
                                            Av. Ain Ata, 640 - Jundiaí - SP</h3>
                                            </div>
                            </div>
                          
                        </div>
                    </div>
              </div>
            </div>
            <div id="linha-titulo" class="row">
                <div class="titulo-conta col-md-6">
                    <h2>Programa de Visita à Fábrica Plenum</h2>
                </div>
                <div class="button-cancelar col-md-6">
                    <button class="btn-curso">Agendar Visita</button>
                </div>
            </div>
            <div id="agendar-visita" class="row">
                <div id="image-agendar" class="col-xs-6 col-md-4">
                    <img src="../ASSETS/CONTA/fabrica.jpg" alt="">
                </div>
             
                    <div class="col-xs-12 col-sm-6 col-md-8">
                        <div class="row">
                            <div class="container-saudacao">
                                <h3>O(a) Dr.(a) não possui nenhum agendamento de visita à Fábrica da Plenum</h3>
                            </div>
                        </div>
                        <div id="linha-data-horas"class="row">
                            <div class="data col-md-4">
                                <h3>Próxima Data:</h3>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-3">
                                        <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">  <image id="image0" width="50" height="50" x="0" y="0"
                                            href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAQAAAC0NkA6AAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                                        AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
                                        cwAALiMAAC4jAXilP3YAAAAHdElNRQfjBQwXMSlDtNlvAAAGEklEQVRYw63Xe2zV5RnA8c/vnLa0
                                        XFostw4KdVwUBkjG0CxjM2NxwYRLwmQKmrjMQcZBiYsQkLkwBmOBuUkAl986BpmRmOmMzDjFy0Jp
                                        FlgissULoozJZGqkpDDbHi497fntj/44nLanXEyfJs15nvfyfZ/nfX/v87yBPAnneFaJPealLkB4
                                        vX1qnDAj9QGEJZ4zS8Z3U8/HI35incDG1GqXkSLCS1qpIpRKxLZiJShRHOsJZUgqzY0pE6DvpTlS
                                        hSBhx+T9RJpEOXt/pVpyWqRUfxdk4h6RIhXafZZrD1RIuqAlLABKKLHAc/Z60TjZnP3H6szVHmvt
                                        ZqvziCDWs8Z4yRPKc8vqp1adPR5WWShcS60zAGllsS0QGGWSQSIBApFBJnmbWKfMJAMV5S32BpMx
                                        3SgPOd/VkxUGxKvjnGZpTdrjFWY0SWuSiYOS1SSt2TlkRSIt0tJaRPGIwAITu3syIreF0zzlNkUa
                                        VBqPaZ4wXz9pjaZhvEoPGabdEQuVGWKi36sTOG684bnd/EKB05X7tcYI74tMMs+XcZc2+2UUu99C
                                        TLHDbi0CsyySVOlxf3BS5Bb3GpabKegKCcKoiyXq0unKeudpM+5IvdCTJz2t41r1ApK4cpdrlKLu
                                        2CKv9TKkTUN3yJxe9yXTHZL5PPNcVrJdDUWelOxVRJtHvdkVsvBqzsc1+bGrO6RNsY+82yuA4Sbl
                                        bupOEHjF/b0CudvOQnHpgLS70CuQtsLm+IvvmmbCwb6tBC1eTqXDCW4BJ+xLRbksWKIEmbwFRpeF
                                        dJMvClXguNelzbQZkVB9GAmM9jU3G22ghGYn/MMBR7Ta7xmzCn3xPUmQ9x9a7fRzWTdZZI5RXS6k
                                        Bnttt899FuWS8hUhQdySFCChza+tF3nACjWgXZNmkb4GKjbUAjPt8EtbFF8t5FNblaFRE/5ppVpF
                                        1luiD056xavedUZWuTFmmGWs6yx3o2U+7BGSVxhJcUJ+JVWnTh/rPCApY7dfOZR3ebzjeY9LWaTc
                                        HIFF4cnOBymR92uoatVGKEOJ4apVq8pdOndbKum8jX7goGGq9U+RVKXaCCestEwDZlmVq9O6Qfr6
                                        rXr19pqO8faoV+9pQ+PTtlKZrN/YoMgv7FNvHqr8Sb16tQZ60mppgfvc2tOeJIw0Gln9UGq0/kjG
                                        Pe5yI/5uk1Y/tUoCA1HsetUYaptGu3zVYhUW+5vWQp70dMqgwlyBVqFTkiYXGBWRolXoJL7phsKe
                                        ZP3HALRrwTnv64+PtWGs8fhAHSInHBXhNDKOSaPZeVLCww6YZ4iveKcQJG1JfMLP4L34y213GmOU
                                        47CGlLDdI9aDJnzqTklknQGtDponYUKYd1VdgkQa8zzMOJmnDZbEJ/EF+L+8lnanugTuI5HAkMLh
                                        KvWgGmT9zltqPKgUjR5zJt6ZbLyLi00BT6sv8FC42KsgpMSdpoK/esswP9QX/7XdGadlJVRJyEqY
                                        FRcf76kvcFSqBHSKSidix0OhTRZRHJqO0vu4FnzJoPBSvwIFA5KmInK0J0g2/uuu/csxjDM93r2O
                                        lm7ZI2Ssr+OMN/IDeSlc56xRicgh/NsixUhrxGkvmarUEnWabPYMONQNkfB9I3HAkfyWIGxVrNYS
                                        l5cJ9qiRsdamXLg65dMQ5tppkLPu8efOnmRRqfyyRV6bI7bYpNgqzWq1FgBwu80GifzRy52HB+FB
                                        07R4+7KlxFEPy9jmewJn7bDVsS49hrjXClVot97GjtlSOcjtthrnSvKoNcpttkACR+32mmOaRPoa
                                        6Rvmm5ZLCs3u8ReDnbqICUImm6/mClflWdscdp3llhgUWxrizDhUBTjvDZNV2GWVmRZb69UOTJBL
                                        L1cqVgNZJN1qqW91e0inHbTdHvNNtMF3bDTQh5Z5gVTH1KGrkdTFnn1MMcPNapRLSPvYm+q87jME
                                        +lnsZ/GL+hM/8qzomovt3IKK9FcmcF7LxQSVErLADn1z3Rss99TnrOi7+p66ZB9ti9l5TY029O6z
                                        oQM+3BZ35O1xU+8+gLxoNs3qVZkcY5o81suQGJNWr9JNkk5bbWuvQ2LMOfuNUGOtWm3/B5dQ74vo
                                        8D0wAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDE5LTA1LTEzVDA2OjQ5OjQwLTA3OjAwZxu9zwAAACV0
                                        RVh0ZGF0ZTptb2RpZnkAMjAxOS0wNS0xM1QwNjo0OTo0MS0wNzowMLAxDscAAAAASUVORK5CYII=" />
                                        </svg>

                                    </div>
                                    <div class="nova-data col-md-3">
                                        <h2>25/02/2019</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">  <image id="image0" width="50" height="50" x="0" y="0"
                                            href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAQAAAC0NkA6AAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                                        AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
                                        cwAALiMAAC4jAXilP3YAAAAHdElNRQfjBQwXNRqYCH19AAAGqElEQVRYw6XXf5CVZRUH8M/dvVyB
                                        VWC3xRTBUAlHJ8gJQXBidAMpZAfZJkkjnZxq8jKkw7SaaROgxg9FHJF6J/pDzZgUQoRmIaMkI0Mz
                                        SEBH2TRQ2AVyuQvbLMv+7o/73nfv3b27rXjef85znvM83+ec55zznDcGBBD3BTcpM9YwMQ0O2mmz
                                        XZpIyk8BDDLFTaa6xBCdTqq2w2Z7tGXWxSLVKy1wkwvTkohS/mC1XflhApjiLjOU5Ex0OmqzJ72T
                                        XhcjoECFn7q8l+PWWuqXWpI9IRK+634jell3wAM26UgqDIj5hjUu1hudZ7pWr1e154rLEyotM6zX
                                        daW+pMZb5eK41gqlvaq2+MBeDeJBS7eZuAZbfN5nJHqFWeGQV2PBUOvM6kXpQ9tt8YY6RUYa5QIl
                                        BqFJyjGHHdGo1ESz3dCrJ6rMi7tRWd7Jas96ziEjTVfmKiMNzTlxi1OOeNMOO2012i1uMzbPPmVm
                                        xoJN5vSYqPOUQI0p5rnBxQr0Th0+tN06u1wk6Y48jn8xFhxxUTfhTovsdLW7zTRU/+iUbZ7wD1Mt
                                        MbXbXE0saBXPccJTFmt1t+85v5tyu0aNWpBQpEhht/n/+IUnDLDYHTmObYsF7VnOOG25lS73iOk5
                                        SXncm16332H1mnGOYqOMc42rfDpLr9Mf3euASvcZ3OXQWPBR5MXTlnhcmdVZadlhn+dt9S9NeZw0
                                        yGfNMtf4rIMecJcdFloUwdQVls90CWi10gozrHVptOB9S/3I7x1P16HyrP2Tymlz3F9tcdSYqLCU
                                        ut471kmYEjr0tbgXfNEArLfcNdYYFd3AJg/an94wpLE+F3JvqU5LA45aZbufqAg3HeVnbrPcJeah
                                        1aZYMMImk+wzBxtMCDdp8rhHnMotjEGl5SF7X3JllhyGutdCg0LRbjfjReP9XUWBWisds0ytRVkQ
                                        D1nSHQIFCsMvJ3OS6SBe4qHo5iZYpNYyxzyqNo7NGvzFHHMjR622qmfVzaHO3GESQYtVhqoMnTbX
                                        NpvV20FBkhYvKcoydasVmvuEyEtJmq2wNYq8hYq8pCUZmT07clWtB9V/fIgQpt6DaiOXzc54WZIi
                                        t4Z53+kZe84KIUN7PBM6M+5WRck0SMA4E0OVGs/qODs7Qls6PKsmHE40LkiDYGpUCF/OxP8ngKn2
                                        cjgYmi6WccRNCoXttmvv32ZBfoDMLvPCGJskrq0AQ4wJtert/URmZGiv+pAbY0jakmLDQ9Fxx/rp
                                        rK/1eAVbPeFA2p7gmONh2R2uWCqOc6N6eUJjP886KXJxF8hv0yBolAq5wc5NX3wien6a+3sjeagt
                                        qwq0OxNyhRJpkDYdoWhAn6+5bt1lLhVmzRYYEHId2tJ30hjhDjMw7+OUoVpv9DrX7FTED4xavjMa
                                        0yAnpVwAzjc8iot8tN7mPmZPR9zwqD9IOZkBOeRKUOqKoK9kbNbs/1LAFdGTfigD0mKPG0FCmS3d
                                        y3gX9TO8Y8qibmWPlkxZ2RndxAwjgv5t1bsdI8wIB012kqnCu70diseq+EQYUBEl6tt2h1UYJ2wM
                                        nVToTqPP3paA0e4M867TRidEIKz3Xshd6QcSZwcTkFAZBhHvWZ9mCiDJQWvDbI+5w+1iHx8mIOZ2
                                        3wqTst1aB5NdIOj0tFdCvsjDKvIX8z4hqPCwolDwiqczcRrLUrrW80aGw6Pu8Zz2/oVtAIVu8agL
                                        Q9ERX/e3zNqoMy/niDrTnAPOM03Cfk3lylX1CVAOJe7xUJSCDSpVidbFstXFLcgyuN2frPSKlvDe
                                        8ltAwnUqTYsO3OjH1mjrWhHrtqTQfEsUR8KTtvq113qtaMUm+6ZZWT9L9Rb5ufbsQ+WCXKfE73zV
                                        Updl6Zy2z5+9plqd09oQN1ipsSa73visPxHed78XzHTEP7tgsv+yEuabbrG1DlhsVvQmDDbZZK1S
                                        6qQ0YZASpUoijTS1qrLYu5IWWe/7XQ9gdnRdbZtSZ/zKUnVutcD4Pp+pbOq0zxq/UeoBtxnoQzd0
                                        NVdd0RWz0HTETVAmZYONDhvmU93O25Oa7PaYB7yhwpNuFMcQNV7tFl0Bo22PWiOabXePd5WY4sum
                                        uNSwHk9zh5P+bZeX7JIyzjLTDIxm9/iKj5Ld7mR21m8ccSmnkFKlSonRxrrMRYoNxBn1aryv2sEo
                                        7hq0hjmWpnFmWJd78QOVZ5200WrLNUQ/bCmpsA0vUICOqPWQyaDgA99R69sR0AA325DOsQxIm/2u
                                        N0An/mulR6PmIkrDQO72PdLzhB86bb5BiOlIl3n4HzzvCW75CvMFAAAAJXRFWHRkYXRlOmNyZWF0
                                        ZQAyMDE5LTA1LTEzVDA2OjUzOjI2LTA3OjAwFAjOewAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxOS0w
                                        NS0xM1QwNjo1MzoyNi0wNzowMGVVdscAAAAASUVORK5CYII=" />
                                        </svg>
                                    </div>
                                    <div class="horas col-md-9">
                                        <h3>8h00 - 12h00</h3>
                                    </div>
                                </div>
                               
                            </div>
                               
                        </div>
                       <!-- <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-8">
                                <div class="col-md-3 col-md-offset-3">
                                    <h5>Próxima Data:</h5>
                                </div>
                                <div class="col-md-6 col-md-offset-5">
                                <div class="col-md-4">
                                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">  <image id="image0" width="50" height="50" x="0" y="0"
                                        href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAQAAAC0NkA6AAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                                    AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
                                    cwAALiMAAC4jAXilP3YAAAAHdElNRQfjBQwXMSlDtNlvAAAGEklEQVRYw63Xe2zV5RnA8c/vnLa0
                                    XFostw4KdVwUBkjG0CxjM2NxwYRLwmQKmrjMQcZBiYsQkLkwBmOBuUkAl986BpmRmOmMzDjFy0Jp
                                    FlgissULoozJZGqkpDDbHi497fntj/44nLanXEyfJs15nvfyfZ/nfX/v87yBPAnneFaJPealLkB4
                                    vX1qnDAj9QGEJZ4zS8Z3U8/HI35incDG1GqXkSLCS1qpIpRKxLZiJShRHOsJZUgqzY0pE6DvpTlS
                                    hSBhx+T9RJpEOXt/pVpyWqRUfxdk4h6RIhXafZZrD1RIuqAlLABKKLHAc/Z60TjZnP3H6szVHmvt
                                    ZqvziCDWs8Z4yRPKc8vqp1adPR5WWShcS60zAGllsS0QGGWSQSIBApFBJnmbWKfMJAMV5S32BpMx
                                    3SgPOd/VkxUGxKvjnGZpTdrjFWY0SWuSiYOS1SSt2TlkRSIt0tJaRPGIwAITu3syIreF0zzlNkUa
                                    VBqPaZ4wXz9pjaZhvEoPGabdEQuVGWKi36sTOG684bnd/EKB05X7tcYI74tMMs+XcZc2+2UUu99C
                                    TLHDbi0CsyySVOlxf3BS5Bb3GpabKegKCcKoiyXq0unKeudpM+5IvdCTJz2t41r1ApK4cpdrlKLu
                                    2CKv9TKkTUN3yJxe9yXTHZL5PPNcVrJdDUWelOxVRJtHvdkVsvBqzsc1+bGrO6RNsY+82yuA4Sbl
                                    bupOEHjF/b0CudvOQnHpgLS70CuQtsLm+IvvmmbCwb6tBC1eTqXDCW4BJ+xLRbksWKIEmbwFRpeF
                                    dJMvClXguNelzbQZkVB9GAmM9jU3G22ghGYn/MMBR7Ta7xmzCn3xPUmQ9x9a7fRzWTdZZI5RXS6k
                                    Bnttt899FuWS8hUhQdySFCChza+tF3nACjWgXZNmkb4GKjbUAjPt8EtbFF8t5FNblaFRE/5ppVpF
                                    1luiD056xavedUZWuTFmmGWs6yx3o2U+7BGSVxhJcUJ+JVWnTh/rPCApY7dfOZR3ebzjeY9LWaTc
                                    HIFF4cnOBymR92uoatVGKEOJ4apVq8pdOndbKum8jX7goGGq9U+RVKXaCCestEwDZlmVq9O6Qfr6
                                    rXr19pqO8faoV+9pQ+PTtlKZrN/YoMgv7FNvHqr8Sb16tQZ60mppgfvc2tOeJIw0Gln9UGq0/kjG
                                    Pe5yI/5uk1Y/tUoCA1HsetUYaptGu3zVYhUW+5vWQp70dMqgwlyBVqFTkiYXGBWRolXoJL7phsKe
                                    ZP3HALRrwTnv64+PtWGs8fhAHSInHBXhNDKOSaPZeVLCww6YZ4iveKcQJG1JfMLP4L34y213GmOU
                                    47CGlLDdI9aDJnzqTklknQGtDponYUKYd1VdgkQa8zzMOJmnDZbEJ/EF+L+8lnanugTuI5HAkMLh
                                    KvWgGmT9zltqPKgUjR5zJt6ZbLyLi00BT6sv8FC42KsgpMSdpoK/esswP9QX/7XdGadlJVRJyEqY
                                    FRcf76kvcFSqBHSKSidix0OhTRZRHJqO0vu4FnzJoPBSvwIFA5KmInK0J0g2/uuu/csxjDM93r2O
                                    lm7ZI2Ssr+OMN/IDeSlc56xRicgh/NsixUhrxGkvmarUEnWabPYMONQNkfB9I3HAkfyWIGxVrNYS
                                    l5cJ9qiRsdamXLg65dMQ5tppkLPu8efOnmRRqfyyRV6bI7bYpNgqzWq1FgBwu80GifzRy52HB+FB
                                    07R4+7KlxFEPy9jmewJn7bDVsS49hrjXClVot97GjtlSOcjtthrnSvKoNcpttkACR+32mmOaRPoa
                                    6Rvmm5ZLCs3u8ReDnbqICUImm6/mClflWdscdp3llhgUWxrizDhUBTjvDZNV2GWVmRZb69UOTJBL
                                    L1cqVgNZJN1qqW91e0inHbTdHvNNtMF3bDTQh5Z5gVTH1KGrkdTFnn1MMcPNapRLSPvYm+q87jME
                                    +lnsZ/GL+hM/8qzomovt3IKK9FcmcF7LxQSVErLADn1z3Rss99TnrOi7+p66ZB9ti9l5TY029O6z
                                    oQM+3BZ35O1xU+8+gLxoNs3qVZkcY5o81suQGJNWr9JNkk5bbWuvQ2LMOfuNUGOtWm3/B5dQ74vo
                                    8D0wAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDE5LTA1LTEzVDA2OjQ5OjQwLTA3OjAwZxu9zwAAACV0
                                    RVh0ZGF0ZTptb2RpZnkAMjAxOS0wNS0xM1QwNjo0OTo0MS0wNzowMLAxDscAAAAASUVORK5CYII=" />
                                    </svg>

                                </div>
                                    <div class="col-md-3">
                                        <h2>25/02/2019</h2>
                                    </div>
                                </div>
                               
                                
                                <div class="col-md-6 col-md-offset-5">
                                    <div class="col-md-4">
                                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">  <image id="image0" width="50" height="50" x="0" y="0"
                                            href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAQAAAC0NkA6AAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                                        AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
                                        cwAALiMAAC4jAXilP3YAAAAHdElNRQfjBQwXNRqYCH19AAAGqElEQVRYw6XXf5CVZRUH8M/dvVyB
                                        VWC3xRTBUAlHJ8gJQXBidAMpZAfZJkkjnZxq8jKkw7SaaROgxg9FHJF6J/pDzZgUQoRmIaMkI0Mz
                                        SEBH2TRQ2AVyuQvbLMv+7o/73nfv3b27rXjef85znvM83+ec55zznDcGBBD3BTcpM9YwMQ0O2mmz
                                        XZpIyk8BDDLFTaa6xBCdTqq2w2Z7tGXWxSLVKy1wkwvTkohS/mC1XflhApjiLjOU5Ex0OmqzJ72T
                                        XhcjoECFn7q8l+PWWuqXWpI9IRK+634jell3wAM26UgqDIj5hjUu1hudZ7pWr1e154rLEyotM6zX
                                        daW+pMZb5eK41gqlvaq2+MBeDeJBS7eZuAZbfN5nJHqFWeGQV2PBUOvM6kXpQ9tt8YY6RUYa5QIl
                                        BqFJyjGHHdGo1ESz3dCrJ6rMi7tRWd7Jas96ziEjTVfmKiMNzTlxi1OOeNMOO2012i1uMzbPPmVm
                                        xoJN5vSYqPOUQI0p5rnBxQr0Th0+tN06u1wk6Y48jn8xFhxxUTfhTovsdLW7zTRU/+iUbZ7wD1Mt
                                        MbXbXE0saBXPccJTFmt1t+85v5tyu0aNWpBQpEhht/n/+IUnDLDYHTmObYsF7VnOOG25lS73iOk5
                                        SXncm16332H1mnGOYqOMc42rfDpLr9Mf3euASvcZ3OXQWPBR5MXTlnhcmdVZadlhn+dt9S9NeZw0
                                        yGfNMtf4rIMecJcdFloUwdQVls90CWi10gozrHVptOB9S/3I7x1P16HyrP2Tymlz3F9tcdSYqLCU
                                        ut471kmYEjr0tbgXfNEArLfcNdYYFd3AJg/an94wpLE+F3JvqU5LA45aZbufqAg3HeVnbrPcJeah
                                        1aZYMMImk+wzBxtMCDdp8rhHnMotjEGl5SF7X3JllhyGutdCg0LRbjfjReP9XUWBWisds0ytRVkQ
                                        D1nSHQIFCsMvJ3OS6SBe4qHo5iZYpNYyxzyqNo7NGvzFHHMjR622qmfVzaHO3GESQYtVhqoMnTbX
                                        NpvV20FBkhYvKcoydasVmvuEyEtJmq2wNYq8hYq8pCUZmT07clWtB9V/fIgQpt6DaiOXzc54WZIi
                                        t4Z53+kZe84KIUN7PBM6M+5WRck0SMA4E0OVGs/qODs7Qls6PKsmHE40LkiDYGpUCF/OxP8ngKn2
                                        cjgYmi6WccRNCoXttmvv32ZBfoDMLvPCGJskrq0AQ4wJtert/URmZGiv+pAbY0jakmLDQ9Fxx/rp
                                        rK/1eAVbPeFA2p7gmONh2R2uWCqOc6N6eUJjP886KXJxF8hv0yBolAq5wc5NX3wien6a+3sjeagt
                                        qwq0OxNyhRJpkDYdoWhAn6+5bt1lLhVmzRYYEHId2tJ30hjhDjMw7+OUoVpv9DrX7FTED4xavjMa
                                        0yAnpVwAzjc8iot8tN7mPmZPR9zwqD9IOZkBOeRKUOqKoK9kbNbs/1LAFdGTfigD0mKPG0FCmS3d
                                        y3gX9TO8Y8qibmWPlkxZ2RndxAwjgv5t1bsdI8wIB012kqnCu70diseq+EQYUBEl6tt2h1UYJ2wM
                                        nVToTqPP3paA0e4M867TRidEIKz3Xshd6QcSZwcTkFAZBhHvWZ9mCiDJQWvDbI+5w+1iHx8mIOZ2
                                        3wqTst1aB5NdIOj0tFdCvsjDKvIX8z4hqPCwolDwiqczcRrLUrrW80aGw6Pu8Zz2/oVtAIVu8agL
                                        Q9ERX/e3zNqoMy/niDrTnAPOM03Cfk3lylX1CVAOJe7xUJSCDSpVidbFstXFLcgyuN2frPSKlvDe
                                        8ltAwnUqTYsO3OjH1mjrWhHrtqTQfEsUR8KTtvq113qtaMUm+6ZZWT9L9Rb5ufbsQ+WCXKfE73zV
                                        Updl6Zy2z5+9plqd09oQN1ipsSa73visPxHed78XzHTEP7tgsv+yEuabbrG1DlhsVvQmDDbZZK1S
                                        6qQ0YZASpUoijTS1qrLYu5IWWe/7XQ9gdnRdbZtSZ/zKUnVutcD4Pp+pbOq0zxq/UeoBtxnoQzd0
                                        NVdd0RWz0HTETVAmZYONDhvmU93O25Oa7PaYB7yhwpNuFMcQNV7tFl0Bo22PWiOabXePd5WY4sum
                                        uNSwHk9zh5P+bZeX7JIyzjLTDIxm9/iKj5Ld7mR21m8ccSmnkFKlSonRxrrMRYoNxBn1aryv2sEo
                                        7hq0hjmWpnFmWJd78QOVZ5200WrLNUQ/bCmpsA0vUICOqPWQyaDgA99R69sR0AA325DOsQxIm/2u
                                        N0An/mulR6PmIkrDQO72PdLzhB86bb5BiOlIl3n4HzzvCW75CvMFAAAAJXRFWHRkYXRlOmNyZWF0
                                        ZQAyMDE5LTA1LTEzVDA2OjUzOjI2LTA3OjAwFAjOewAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxOS0w
                                        NS0xM1QwNjo1MzoyNi0wNzowMGVVdscAAAAASUVORK5CYII=" />
                                        </svg>
                                    </div>
                                    <div class="col-md-8">
                                        <h4>8h00 - 12h00</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
              
                   
                    
                    
                </div>
            </div>
            
            </div>
            <div id="linha-titulo" class="row">
                <div class="row">
                    <div class="titulo-conta col-md-12">
                        <h2>Históricos de Pedidos</h2>
                    </div>
                </div>
              
                <div id="row-historico" class="row">
                    <div id="campo-historico" class="col-md-5" >
                        <div class="col-md-4">
                            <h3>Último Pedido</h3>
                        </div>
                        <div class="col-md-4" style="float: right;">
                            <button class="button-history">Todos os Pedidos</button>
                        </div>
                    </div>
                    <div  id="campo-historico" class="col-md-5">
                        <div class="col-md-4">
                            <h3>Pedido Padrão</h3>
                        </div>
                        <div class="col-md-4" style="float: right; ">
                            <button class="button-history">Refazer Compra</button>
                        </div>

                    </div>
                </div>
                <div id="row-dados" class="row">
                    <div class="campo-dados-compra col-md-5">
                        <div id="linha-compra" class="row" >
                            <div id="codigo" class=" col-md-3">
                                    Nº 123456789
                            </div>
                            <div id="data-pedido" class="col-md-6">
                            Data do Pedido: 22/02/2019 - 09:12:43
                            </div>
                            <div id="valor" class="col-md-2">
                            R$ 520,80
                            </div>
                        </div>
                        <div id="status-compra" class="row" >
                            <div id="item" class="col-md-4" >
                                <h4>Itens</h4><br>
                                <p>Implante Dental SLIM D3,0 X 8MM,</p>
                                <p>Implante Dental REGULAR D3,5 X 11,5MM,</p>
                                <p>Componente Cicatrizador SL D3,5 X 2MM...</p>
                                <h6>Ver Todos</h6>
                            </div>
                            <div id="pay" class="col-md-4" s>
                                <h4>Forma de Pagamento</h4>
                                <div id="campo-pagamento" class="row">
                                    <div class="col-sm-6">
                                        <span>
                                           <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80px" height="40px" viewBox="0 0 100 50" enable-background="new 0 0 100 50" xml:space="preserve">  <image id="image0" width="100" height="50" x="0" y="0"
                                                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAAAyCAMAAACd646MAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                                            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAC4lBMVEX///8hHx8hHx8hHx8h
                                            Hx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8h
                                            Hx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8h
                                            Hx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8h
                                            Hx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8h
                                            Hx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8h
                                            Hx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8h
                                            Hx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8h
                                            Hx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8h
                                            Hx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8h
                                            Hx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8h
                                            Hx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8h
                                            Hx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8h
                                            Hx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx8hHx////91PYAnAAAA9HRSTlMAAI3h
                                            qYHABSLL29ndXyDVQmnfzB6CsoV2Yrx5yRgNvtzehhLOXkfXNmXCepxxxYe0dXgopzrGe71mQ9oy
                                            Vs+b4qYBA6yQoVG6iKiZ5SfyciX9T3z1I5rUn4/uHQ+eFfdvVEDoueygi3TgjukWMPSKRO2SPPYc
                                            t8cCzauio8OVJuskTInnDhTwbPw+s9Fw4y6/5mPvG8G4XNidUH34d+SR8fpVQYzIRZQ9aPnQrmEH
                                            DCtNWGsLqhFKZ8qwV7EQtm1bxC0ICpNgMTW7WTmArylqNx8hmBl+hG4J/gbzLNNJTlMEtXMXP0vS
                                            L60a6qU4RkgqZBNdZw7MDQAAAAFiS0dEAIgFHUgAAAAJcEhZcwAALiMAAC4jAXilP3YAAAAHdElN
                                            RQfjBRACNShQ/aVBAAAErklEQVRYw+2X+VNTVxTHvUQaNKIIimUX0FiFsCkUirJF2UQWi7YYRDZl
                                            EYhhE0QwBK1QQEHEorIJsopQi+KKWFIpSC1tbCupuHXR1lbs8v0DegM8LGPacabT6Uwn3x/evfd7
                                            z3uf8855b+a9adNUUulflBpruvorbI0ZMzmzNGfP0ZqrrTOPzNdd8Kqetr6BoZGxyUKOqZn5osVc
                                            7SWvkaXLLCwJT9vKiFjbWNvSCDsr8+U6tivsHWa97uj0xkxnZ87KVS5Grm7uHvzVazy92N4snzGI
                                            LwzX+rHX+QMICAxa/yaCN5CNb72tZgtWyCZBqBv1N4dtCY8AIold1JpoYoatAuK5ZFtMLOLityck
                                            JgmtdoiQzLJbT0OR4pSalo6dGfzMXSaabFNkjUF2IzvHlL1HTAPCc1MldtikQXIyN+bxMFO4N23f
                                            QuqvfWd/vhcK3iWxrJhCMh9+acSyyNW6GM7CA2EHRWYlWqVQc7aVKCD2h8oO66I8g7/T/ch77Aoc
                                            VUFUEBVEBVFBVBAV5H8PWR5MA2L34NhxVOYSyyWeIVWorqkVhJZSf1vYCV4dUE8MxMn6xAdlArLb
                                            OYt+zxyoESUkbjnZ0LgfTdUWxxSQ5pZWgTcMM/in2spPT4W0C3xtdNO5HW3vn4lesY8Ub6ua+4Gh
                                            b2dhwtlzDssaqrqiIyINyxPJecsLMWTpxUthxMDToOXyRd/8K925V1tyEn3Le6ZfS/lwWXZ275no
                                            MKFOkwd/o3oIVzoF8hE/PM9szfWmmqbrQou+j/lEqfpP5h1UusHfk6DU75oCkUo5gNWAiaNjiQOd
                                            ldcrPWcpcEOZX1+e5PUykPZT8BOM77DtF8F/8Hmkx+RME6hTYpNioPFlIYeZvU+YjLslMTf1S6Ld
                                            Y/unQj4dyrpqon8p/nwHXWgdbQC8LfPO0nlvfla6iWNhcl3CX0CiPkubN+9zWaC9Qel2H6ki5hAH
                                            cbcCho4XVgbp9j6HfOGaWnDky5b8kAoU0XX/V+mA+/zbw0Q2vVU+oN4ZnlwBVsDXSiFy//21tbV3
                                            tgBJdl0KRg8g7BjLaCQT1SMMpDsbd0fGb9kCcgW1BdCiQ8JdmI6XuT1WDqGHMoio755EIrn/QM96
                                            DuLyM0gXBzMeThQw8gSEDGQx8E2nnQXVt+on4NJOCA84Q4M6IddkKl4IkYbSnnzHRHQMAPeJQIyb
                                            jBN4B64M5DiQfcVmTG2um82kkxBrFHzPnHALSSv/vvEkC9Aj0hKw0iYMWpAeBvIIUGcCmwdl9BgA
                                            cOlA/08WMGm6gNP9IuQxxCkCmUw2W+OHiNXAj6GEDMah6B4d+U9sK9FmTEgfsIo+4vFAfC7t63C/
                                            N3CaXnIIuG0eSh42UcpsNkU0m6DswZ8bvwuZllHD0iJ5gegnMdVW/1axjV67Ip8N8dWtFSUDVn6t
                                            2U4K47RcflnhR0RXimboO54KvnOuWbFe51IQ5PY4kJDLA5ViwwHHu8F71yYqNswP4OcxSGy6cGiz
                                            1OPp6A7uMy6X+6zR/peuybqFPr3Ww7sgyR1/856Mjk70TXbvV16xXiNTTePIG5p1v43l9ciJd/v3
                                            wYkrdNxKL/6v/4lVUukf6w8Rlew93powcwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAxOS0wNS0xNlQw
                                            OTo1Mzo0MC0wNzowMOye+uUAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMTktMDUtMTZUMDk6NTM6NDAt
                                            MDc6MDCdw0JZAAAAAElFTkSuQmCC" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div id="valores-boleto" class="col-sm-6">
                                        <p>Boleto Bancário</p>
                                        <p>2x de R$ 260,40sem juros</p>
                                       
                                    </div>
                                    <div class="pendente" >
                                      <span>Parcela Pendente: </span> <span><b>1</b></span>
                                    </div>
                                </div>
                            </div>
                            <div id="entrega" class="col-md-4" >
                                <h4>Status de Entrega</h4>
                                <div id="linha-fabrica" class="row">
                                    <div class="col-md-4"> 
                                        <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80px" height="40px" viewBox="0 0 214 178" enable-background="new 0 0 214 178" xml:space="preserve">  <image id="image0" width="214" height="178" x="0" y="0"
                                                    href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANYAAACyCAMAAAAJWMFQAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                                                AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAC91BMVEX///8gHh4gHh4gHh4g
                                                Hh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4g
                                                Hh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4g
                                                Hh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4g
                                                Hh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4g
                                                Hh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4g
                                                Hh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4g
                                                Hh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4g
                                                Hh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4g
                                                Hh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4g
                                                Hh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4g
                                                Hh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4g
                                                Hh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4g
                                                Hh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4g
                                                Hh7////v9uHrAAAA+3RSTlMABjhheoeEc04XAUuu9f3IaApVjY9xDD3O52Vut4K/G8ICoegz0vHe
                                                KFbsJes0FM8H90CRfwRNJHWz4Pbv2KZdGRBZGFtyWidDvv6KHLisKqgpHrU8NX5MQWP8opej9Gav
                                                T4Vkw7G8cKVHlc37q9QR7pbh6h3X7fk2DrtC88cTutMfSdssZytc+ESABVGMmGl0veYIjpnJL5rW
                                                nqfisIHM+pPl5PIgyqTw3DkwRQMWVNUjMiY/eTt2i1idb2DBbJR4ywtQquO2CRUhSi6csjoNRlKS
                                                XjFrPneDYhJTLXu0wEiJoNmbrWrEkNHd6RoPIleGfH3Fxt+fiLk30Fx9C+8AAAABYktHRACIBR1I
                                                AAAACXBIWXMAAC4jAAAuIwF4pT92AAAAB3RJTUUH4wUQAxoyvkEOYQAACt5JREFUeNrtnXl4lMUd
                                                x5coTYgcgcQoZwnWyBFCgEA4whFJEBBEUIPcgYAggiAIxHAbMBxCuWmlCMFwiE1BQE24CkQ86AEU
                                                i9QWBYHWtraUKr3mn4YAstmd73fmfZ1lGZ98/9Ln4TO/95PdfXdm3plZj8eOVAi5486K3wsNqxTs
                                                CzGY8LsqVxHXUrVaRHUXLdSIjPLL3dHBtbrnXuGdmrXCnbZQW8hSJ5hS4XWr+l5Pve87bKO+VEsE
                                                8eWKaSC5nvt+4KyR++VaTv86BhMlvaDYEEeNPCDXahg0q0byCxKNmzhpJU7eSNNgWcWDCxKiWYKD
                                                ZprL22gRLK2WAiZRv5VWoInWt9gmqU3bdu2TO3Ts1Bxrte+s3VwKaOLBW6DSJTWxblrXh0r+q1v3
                                                HkIjD2s33RO0UCvgUt16Xf92eqT3ozpOJbmvlW7jfUALaQGW6vuYpkqZPK7b/BOggfTAWvVLdmMl
                                                7tRt/8lv/TZ2k/4DXFmJgboFWoMGBgXSqkZVRzI300u3woOggcEBtOozxKWV6K5bYihoIENJDhte
                                                0S+ZFXRqjnBrJUbqaqWBBp5SgaOk2GiNkk+7thJjdLXSQQPVVOAzUmysxjfLOPdaEbpaD4MGnlWB
                                                oOc/XlkxZoJ7rT66Ws+BBiaqwEly7nllxS7urSbrWnkGgxamqEDQJVX/PZu41wrV1soALUxVcKjn
                                                nxXAVyvuBW2tbNRGAudQz3+asmLMdLdaEdpWnhmojZmcex5gYeqST7m0muVgVm02amQO51DPP1Vd
                                                8kV3HcKceH0rTzvUylzOZQFsnkbNlzIjnCc3xYGVpzHSUsxfTQOY/s0qoJmPtBZwLgxgC4MtVJpF
                                                8K38MgdTAbY42EalGQ+1OnFwHsCWBNuoNH2h1g85uBRgOl34wKc31GrDwYUA0x4RBTRZUKsuByMB
                                                towwacun+yW5wYoAaE2DWis5uApgqzGyRk7cHQCtYVDrRxzsCLAfYyRXTrwSAK1UqLWWg20B9hOM
                                                1JYT6wKghe7TQrTlYD2ATcDIq3KifgC0QqFWPQ6uB9gGjOTJCeX0goskQq31HOyAOHxjGy0HlgdA
                                                azHU6sDBjYjDw4decmB+ALSWQK3XOJiPuE0Q2QyIACwq2AK1tlIuHM6i43Ha64Doa15rHdQaQIfY
                                                0ZDbBhn07OcN81pkXoEuNOoMsZ8ipAA9R1XP6jjOaqz1M8Y1gRgcp8UjYrt5rR1Y603G7YQYHKft
                                                QsRQ81oTsdYaxu2GGBynbUPEW+a1pmCttxl3F8TecYwUmteairWeZlwRxOA4rRMi9hi3SsBW/JNc
                                                C2JwnLYXERnGtWYSrX0MTIMYHKfVRcR+41pziNYBBqZDrCNCfo6I2ca1XiJaBxlYCDE4TkPj6QB0
                                                4UOI1nAG4i4yHKf1QoT5LvwCotWSgaMhdgghmyFy2LRWMdGi992REIPPd1+HiPp5s8PkCpx3Gdgd
                                                YkcQghdv0f6Mm0QQrfcYeAhiyYAowOucnjSt1YZo1WcgnMoQYwERjysZ78K/imuJexn4GubelxO7
                                                MGG8Cx+Ja4kcBsZi7gM5Qb5LDprWWoVriZqECycLAj+UI0cxYXxJZkdcS0wnXDThfiFHyE33l6a1
                                                fkUur0cM5thKmF/LkdqYqGxaqzu5PHEMc00IdlyOLMSE8S78ZnJ5ojPmdhLshBz5DSZmm9aazLTI
                                                DpzdBDspR/BEq9hoWusI0/oIc/0I9ls5UgcTzU1r0UX2pzBXRLCP5QiZkRRutnSyjGVaRzFXi2Cn
                                                5UgOQXqatVrBrEQjDKYRLEqOkKk79FXnNh9Qrd9hMJFg8i/XGLZRwfAeuA+p1l4MFhLsUSnxCav0
                                                e7Naf6BaZzC4hGCfSokkVsnwZrFtrJaoiMHRBPtMSmSxSh97jOY41crD4EiCPSMlzrJK58xqnaBa
                                                n2OQ9SXPS4murNIFs1onqdYjGDxEMHlX6ACrdNGs1h+pFtkD1oFgsVIinVVSLG1xmneo1p8wSKYy
                                                RFXps/QvWKU/m9U6LVwWi2WcdJJ2ICOOeIwmitUSf4FcON3bKD1l5VNGVDGrdYFq/RVyhymXJENm
                                                UMTsCtC1tBb+G/JNPdLlI+cp8qVRLfrOED0KEEd7QvKt3HEUUez8cJjPaC3xN8R9RLEXJUQ4Hdmx
                                                EauLrKe18MEtpyhWQ0Kk8ErFRrX4G148hLijFLtDQvydVyJDOxfZyIvBg1suUay2hGjKKy01qhXL
                                                i8FBa3+KyY5J4GMF8Q+TVuGKbW/9EDiKYrJxWhGvZHTDTXVeSxQh8DLFZOM03qnmD3SdppJCKxOB
                                                5ygmG6fxP4T6BAEneVOhBXd/PEcx2ThtJa9En3w6zRpeS/wTgQMpJhunfc4rtTOp9bZCC04xVKbY
                                                VxKiLa+Ub1LrLK+FT6fIpphsnPY1r9RjkUGt7QqtBghko4y4bNkiVTZLICbszzM5Mtmn0IIPP+Vb
                                                y3tcyUjvB54SgA78gPPjLodtcnxUJA+dDSrJLAT6bS0fO7vBqBZkG7fkiz95f15mlvFFXFfzlkLr
                                                awR6by0fMmNMZlPVe6hMBz4gL5FXhiu07kfg1Bsfo3NFDaVjzYKGRbu9///GN+TWEXlDQ+QvUUHD
                                                Rt0cXn940on0Wv7rEVoqtK6A5iqUfIwuXgYfo8MhEYNmDPFZYZ0lqp4fl14MXqIbSKS+0ftNM/NG
                                                lPbU/R+AvKLQigNtLgIfo579Lo87f2NSqoxWJfASlUX0tLqcPbh28s3Pqv/2uXcVWvqPqlvNzS3M
                                                Lnu3U+xb9lR4Y1+kD7JSXeVcnZrKT8p7Ci2hcxzgC48fuHBIct4O0RrfYtS/mkk2FkRhJOWUvIpM
                                                CxypezP85I3wTcULM66g7UtSrZik7afbwlUTUc6ryLSaqbTgItqSd1BUPX4Mla9W9ZCIMSPyKfKF
                                                D7Ki5L6wX3WQob9WjoKQHto0c5r8HUS0viz7IdfRqnR86eDZY9WITKumCnmi7NuBvoOkWqW3kkm6
                                                SOkS9ZKvvIp1lFfGtJQHLn2zNrjV1a+JfJ0q3ySqxag9h5o7QvZcvfu0d4RItGKUh77eOLSp9XKH
                                                tW5h/LSOKZGu1/7hmg3BvnYnWp2VyPUlz6s0Wr99tHYpkeuH684K9qU70tqpRK4fruv20LPgaJ1S
                                                IoU2ah1VIoNs1LqkRAbbqNVfiWTYqLVXiWTbqHVGiVSTaN2TpIjvbNtKFeC7LamdCihzlJif1r+V
                                                Ws9KtJQ7/nwfSJ9RAb7zejkqoMwmcD8tuBH45t/NRi3FU4ySNLZR66JSa76NWv9RaokKFmp9pdb6
                                                xEIt8KNH3ulroRY4+tw7vS3U0pg6+a+FWu3VWt3s00JHn3tnmH1airVwpUm1Twv96JF35tmnhY4+
                                                906ofVroR4+8s9Bfq/JgRXy31f1PBfjuEs5XAWX2tvtqoR898s5if63bLb5aYRrMEvu0umowW+zT
                                                GqrBrLNPK1SDWWafVqIGs9o+rUINZod9Wks0mIn2aW3RYCbYp7VOg9lgn9YyHSjBOq3VOtBM67R2
                                                6EBzrNOaqAPNtU5L65fzQqzT0lpsscA2rQQtqNg2rXgtKNc2rU1aUIRtWnO1oDa2acXv00npaaPH
                                                tf5pkDLMU57y3D6Jif6OpXSTx8mtwb59mU7jlz2eY84WBluRKQXf5geHb9+klGtZlHItm1KuZVPK
                                                tWxKiie6SrCvwXwmxXg8l7Q3itmS5deONm71HUuJ0v8BCS4HekE0Am0AAAAldEVYdGRhdGU6Y3Jl
                                                YXRlADIwMTktMDUtMTZUMTA6MjY6NTAtMDc6MDD1vM8iAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE5
                                                LTA1LTE2VDEwOjI2OjUwLTA3OjAwhOF3ngAAAABJRU5ErkJggg==" />
                                                </svg>

                                    </div>
                                    <div class="col-md-8" style="margin: 6% 0;">
                                        Preparando Pedido
                                    </div>
                                </div>
                                <div class="row" style="margin:0 8%;">
                                    <span>Previsão de Entrega</span><br>
                                    <span>25/02/2019</span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="campo-dados-compra col-md-5">
                        
                        <div id="status-compra" class="row" >
                            <div id="item" class="col-md-4" >
                                <h4>Itens</h4><br>
                                <p>Implante Dental SLIM D3,0 X 8MM,</p>
                                <p>Implante Dental REGULAR D3,5 X 11,5MM,</p>
                                <p>Componente Cicatrizador SL D3,5 X 2MM...</p>
                                <h6>Ver Todos</h6>
                            </div>
                            <div id="pay" class="col-md-4" s>
                                <h4>Forma de Pagamento</h4>
                                <div id="campo-pagamento" class="row">
                                    <div class="col-sm-6">
                                        <span>
                                        <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="70px" height="35px" viewBox="0 0 255 230" enable-background="new 0 0 255 230" xml:space="preserve">  <image id="image0" width="255" height="230" x="0" y="0"
                                            href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAP8AAADmCAMAAAAtD6OrAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                                        AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAC5VBMVEX///8gHh4gHh4gHh4g
                                        Hh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4g
                                        Hh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4g
                                        Hh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4g
                                        Hh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4g
                                        Hh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4g
                                        Hh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4g
                                        Hh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4g
                                        Hh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4g
                                        Hh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4g
                                        Hh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4g
                                        Hh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4g
                                        Hh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4g
                                        Hh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh4gHh7////nEzZLAAAA9XRSTlMA
                                        Ej5fb2xcOQkCLGaf2f75vQoORoC58ex0BgEmYJnT/dELQHqz6/NMIFqTy/pOBzqr5fUwGlSLxfjY
                                        CAU0pd9/FIW/9BFw7rePidWbZCoWnhXyu4NKglHbo2oDx4r2w1AXU8TjqTYM+/fJVhzM6K92PHL8
                                        z5UkWay1fEQNH+bXnd1xlDfO5DhYHkJ4EEiXXg9+sSgbE26n4c0yBK3nUhiNkUuH6i5owe8zIm3c
                                        4ISBVY7pyD137aZisMrwmNKcO8DepKExZ7xJT9RhJ3k/opIvukFHtKrCJYjaoC1ruEU14tbQXSN1
                                        lpC+tmMpe4aosppzriuMW/MmlIAAAAABYktHRACIBR1IAAAACXBIWXMAAC4jAAAuIwF4pT92AAAA
                                        B3RJTUUH4wUUAiQ4kfEBYgAACrJJREFUeNrtnXtAVFUawK8PVKTGN8moIAqogI9QkoQQBURRs0wz
                                        xnhsqeAjQMsCNTRTEEHxrWCoFazprq2appVZ6dau27bV7la71W6v3XIf1bbb/L/cQfnOzNyZ+c69
                                        594DnvP7L879zvl+2DDffPfcM4rSgenUuUvXoG7de/DOgwPBPUNuutnmdNGrd0gf3vlYSd9+/QeE
                                        Ot24ZWAY76wswT5o8JDwCKcGQ3vyzs1sIocNj4p2+iRmBO8ETWTkqNi4eKd/4kfzztIUxowdOO5W
                                        J4aE8bxzZc2ExNsmJqHcXdw+iXfC7EhOCbojFa/eymTeWbMhbcSUqem07iqhGbxTNwpZ1+ggk3f+
                                        RtCoa/wzLWv6jKgE8idxvB104ruu8YEte+as2XY19M45xI8j7uJtQk+Ausabu+feM498oc8nxu7l
                                        bUMHpq5xY8F9OeMdHpPYF8L4/byN0ODrmmvk5s3IL9Cc6idw0QO8tVBQ1jVO54OLMhcn+5xuSWHb
                                        hUVjeLsFgLquiV86fdnyAJOugMu78xb0A3Vd81BxSSmmuxMLISt5S2pDXdeseviRbquxsz8KcY/x
                                        NvWGvq4pK1+zlmaFdRD7OG9bN+jrmor11+oaKog3kpG8na9DXdfE9HavaygYB7OM4u2tQl3XbNCo
                                        ayh4AmbayFmdYV2D50mYbhNHd+q6ZvOizEoWneuw3LYpC5dwUddT11RtYbZ8Hkxcbbm7jrpma2eW
                                        d61qaifC5OVWquuoa7ZtX03/BucT73fYMqvc6+j7NTvW9GWYQI/OW3dGe6/C8LfrC/sua+oa3+xe
                                        Nn2pj3fY2ea666lrRuxhmEByyt59+/2sN8s895a65kAhWtyp1jVB9Q0ME9iD+FO73hT1lrrm4FM0
                                        6kV5tzUeYpiAffas9RWYP7UVzN13Jx5eSFfXjFtZybITo77mbsEubmP9YqOra+KOMKxrWthSdYTu
                                        s4TzaUYrp41+hq6ueXYn27omeXHmos1U6i6mGF85uKmZrq6JGMq2rlF/+T/NpUiAYKqxlWtqKeua
                                        o4zrGoM3AZ3put9xdNU1PYMZuq9dsyPrqH71Vp7TtXRTCV1dkz51CtO6RjnW7ZGHVxl1VzlOv3ZY
                                        SDjNCql3sK1rqKsLv+yjXr/fz9CTJ01kW9coBY2UXZOA/Jwyg+ATyL82rOsax/ic+zYwVW9lN53+
                                        HMSUal3DtLdcU/v8XKq3GQp+QZXJyUDTRe/cOiySobp99fZtQ2neZmg5SZPNMn8ztdQ1gwexrGt6
                                        lJYUnzJR3cVpioTSfH6wOJrVvx/Lusb1OaqX2e4qvSiq8FitCWwVN4UwrWsa6nXs59PPC+jECoo8
                                        Y9W6Jo3lP3vGvHt669rPp58SdHJn3OLOvhiUkoyODYx917mZ2QZKeb2cR2f4EhGV25XlYwRUTQvG
                                        nMImuZYouJPwr5pA0DctGIPdO7GYiBnIRF1tWjzIU93FdmS290LIy8a3jxtoWjDmFWTGxNaZKEPq
                                        RpsWjLmATLsRQl7V7b6kurxsGm9jdyLqcKlfhJBiXe7qLREmTQujFB6IHfUa/Gc/XPoZEJFKqz6m
                                        ciXdVg/TmFZWXq1+QCuHH/VHSrwOIRMo3AvyZ+QV0SfKHrc7q9Xw8wFIkTcgJBEXEdzUfGkBb20X
                                        XpU6sRM4FLmdKgemOxn4auq9jKaxf99ejUp9E1zQhPO/DBEL/V9pdtMCTXzcEV9bojfCVb/E+Tti
                                        2iKSfBZAk0pLih/ire0iOmq4v1bUKLjyEs5feRNCxmqNT6C9+WsWtuyZ53YFaEWNhMsXIP3nQ4jn
                                        BwCHtU0LP6Rj98Y+DjF34vzfgoiDxI/VpkUMfaImQHWv5TGI+xUuIgP+pl3bPK7uKePRtPCm18LD
                                        iXS9/JUQPAMZ8msIOeZjTxkPTiEf/nCnEibIQ4bMhJCspVybFteJCB+idzNBGBSluchm1hXeum6E
                                        zn2+tkaXeisPwFRP4iJ+w1u5DYNPAbi4H6Z7Ahdh59WkJGF2Vzkf5hyHDIni7P7UwYFjmd1VLoB5
                                        NyND3uanrj7mdoyVeivEToZ1uIjf8nFnvW3qGu/ACo/iIvpY/qZnu5nx7UWCZljmd8iQOCvd1eed
                                        kKW5Lt6FpVYgQ45Y5a7unzH7pC4H9GcKkZs2qixQV9uz1jyb+R4s+j4uYovJ7tfbs9bQHxYejgwx
                                        734d8wdfAvN7WP0PyJA/muLOfCMFjjr4QH8W+ZvPZO6u3Z61hguQxi5cxGKW6syfgKDlFcjlHC4i
                                        jNVN6wDtWWvYDvlg7+l+YFwd0561hg8hqWxkyEfG3NHtWUuwPwv/KJ1wIaP1u7PeCs+A85DdPFzE
                                        XbravfTtWWsogRRPIEP+ROuurz1rDS9Amr2RIX+mUDfQnrWGHrDJOAb50gxBuhttz1rDaUi4Hhfx
                                        McKdRXvWGognGj7BRQS/7Fed+UM/5tIwqQ3sW9OnPt2ZtmfbLZO11P21Zx0NHQ8/r96/eLr7ac/+
                                        dcd7n1nyHAdzilKzyi9rOvUlNjHaFlzy3Z51dPmct4VBvqjSchsKFwzz8zp5bpP+hdsNpz/2FtsG
                                        w82+9XM65v/3nhRd8TL7Ekbfofsr2RGxeT0h9BUM+tw6dZx32gzxOiaH2OBXoK1/sV3sDmFEUoqH
                                        XTGM5Wvqh93OO2emXPAoDf8GQ9rHSO/lnTFjQtz1SmFE8xhpx2e8E2bMBvcyYBK8tRVp3aSs5Z0v
                                        czyOSiTOUa/U8P8773SZ87W7IPGpWesYaaoDQjoEB9wFE2FE4xjphhuj8iPJdf8DMAFGbvX2P8Q7
                                        WxPwuDtA7HX33qrwlf5l2i0etylfhBHvY6Q/1L9Mu8XjXzkIRjaK6F8PI5tE9G+AUyq8j5EWwF/5
                                        BoaqRfQ/AUPlIvrPg6GrIvp3gtvg04IF9FeI1vZsEf1fhbFZIvr/A8bmiOj/TxirENHffrZtzPMY
                                        aSH8lTIYHCGi/79g8N8i+r8Pg6+J6B8JJ4gkJAvorxyA0RQR/YnjMPeK6E8ciPatiP7ECSL7RfQn
                                        v0twuYj+xHcJLhPRnzhB5GsR/YkTRF4S0Z84QSS+j4D+5HcJdhbRnzhBZKuI/sQJIt+J6E+cIBJt
                                        F9CfPEFkkIj+xAkig0X0b4YLvhfRvwkuCBfRnzhBJKJGQH/yBJFaEf2JE0Tmi+hPnCDypoj+xAki
                                        8PysQP7kCSL1IvoPgUuOi+jfBS45L6I/4bqqVEB/4gQRZ3p59zVdBfMnn4VSCRXNv1lw/z3u3+0h
                                        nL/Hwz7i+RecFdtfaSRPRBLQX/mP4P5KDjztLKS/kvKF2P6Ko+qDCJH9WzjU+Pbhw2feEtYfkP43
                                        HtJf+kt/6S/9pb/0l/7SX/pLf+kv/aW/9Jf+0l/6S3/pL/2lv/S/8ZD+0l/6S3/pL/2lv/SX/tJf
                                        +kt/6S/9pb/0l/7SX/rfuP7rKPyX807WBAoo/CN1fUV8uyaC6muNN/NOlzmpNPrKD7zTZc63VP7N
                                        vNNlzhUq/05JvPNlTEIdlb/yPe+EGRNLp6+sS+CdMVPu3k3pr5zhnTJTutLqK8FXeefMkB/s1P7K
                                        2hW8s2bGxD70+opS943xldsFVyP16CtKwzOreKfOgPjJDn36LVwewDt7o9i++69ue5V3/5fNW8GA
                                        fPhHxuxdpF1s/LFbx+PH/MoMN4//A1k8hQ80i5ckAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDE5LTA1
                                        LTIwVDA5OjM2OjU2LTA3OjAwTXP8JgAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxOS0wNS0yMFQwOToz
                                        Njo1Ni0wNzowMDwuRJoAAAAASUVORK5CYII=" />
                                        </svg>

                                        </span>
                                    </div>
                                    <div id="cartao-credito" class="col-sm-6">
                                        <p>Cartão de Crédito</p>
                                        <p>1 parcela</p>
                                       
                                    </div>
                                    <div id="dados-credito" class="col-md-12">
                                        <p>**** **** **** 0257</p>
                                        <p>Validade: 11/22</p>
                                        <p>Nome do Titular: Elizeu Silva</p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div id="entrega" class="col-md-4" >
                                <h4>Endereço de Entrega</h4>
                                <div id="linha-entrega" class="row">
                                    <div class="col-md-12"> 
                                        <p>
                                        Av. Ain Ata, 640 20081-902 Jundiaí - São Paulo - SP
                                        </p>
                                    </div>
                                   
                                </div>
                                
                            </div>
                        </div>
                        <div id="linha-compra-final" class="row" >
                            
                            <div class="col-md-3">
                            Valor do Pedido:
                            </div>
                            <div id="valor" class="col-md-9">
                            R$ 520,80
                            </div>
                        </div>
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