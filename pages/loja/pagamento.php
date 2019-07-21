<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagamento</title>
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
                <a href="endereco.php">
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
                            <h3>PAGAMENTO</h3>
                        </div>
                    </div>
             
                <!--incluir dados-cartao-->
                    <div id="caixa-entrega" class="row">
                        <div class="col-md-5">
                            <div class="row">
                                <div class="btn-radio-pg col-sm-1">
                                    <button class="radio-frete"></button>
                                </div>
                                <div class="col-sm-2">
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
                                <div class="endereco col-sm-4">
                                    <span>CARTÃO DE CRÉDITO</span>
                                </div>
                            </div>
                            <div class="row">

                              
                              
                          
                                
                             
                            </div>
                            <div class="espaco-input row">
                                <div class="col-sm-10">
                                    <label class="tipo-cartao" for="">Nome do titular do cartão</label>
                                    <input type="text" class="ple-desti" placeholder="Nome Completo">
                                </div>
                            </div>
                            <div class="espaco-input row">
                                <div class="col-sm-10">
                                    <label class="tipo-cartao" for="">Número do cartão</label>
                                    <input type="text" class="ple-desti" placeholder="Digite o número do cartão de crédito">
                                </div>
                            </div>
                            <div class="espaco-input row">
                                <div class="col-sm-5">
                                    <label class="tipo-cartao" for="">Data de Vencimento</label>
                                    <input type="text" class="ple-desti" placeholder="mes/ano">
                                </div>
                                <div class="col-sm-5">
                                    <label class="tipo-cartao" for="">CVV</label>
                                    <input type="text" class="ple-desti" placeholder="000">
                                </div>
                            </div>
                            <div class="espaco-input row">
                                <div class="col-sm-10">
                                    <label class="tipo-cartao" for="">Número de Parcelas</label>
                                    <div class="ple-desti">
                                    <select  name="" id="parc" >
                                        <option value="">1 parcela</option>
                                        <option value="">2 parcelas</option>
                                        <option value="">3 parcelas</option>
                                        <option value="">4 parcelas</option>
                                        <option value="">5 parcelas</option>
                                    </select>
                                </div>

                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-sm-12">
                                    <form action="">
                                        <input type="checkbox">
                                        <span class="deliveryapp">Salvar dados para compras futuras</span><br>
                                        <input id="novo-endereco" type="checkbox" checked>
                                        <span class="deliveryapp">Endereço da fatura igual ao da entrega</span>
                                    </form>
                                </div>
                            </div>
                           
                       
                        </div>
                        <div class="col-md-2">
                            <div class="lv"></div>
                        </div>
                        <div class="col-md-5">
                        <div class="row">
                                <div class="btn-radio-pg col-sm-1">
                                    <button class="radio-frete"></button>
                                </div>
                                <div class="col-sm-2">
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
                                <div class="endereco col-sm-4">
                                    <span>BOLETO BÁNCARIO</span>
                                </div>
                            </div>
                       
                                <div class="espaco-input row">
                                    <div class="col-sm-10">
                                        <label for="">Número de Parcelas</label>
                                        <div class="ple-desti">
                                        <select  name="" id="parc" >
                                            <option value="">1 parcela</option>
                                            <option value="">2 parcelas</option>
                                            <option value="">3 parcelas</option>
                                            <option value="">4 parcelas</option>
                                            <option value="">5 parcelas</option>
                                        </select>
                                    </div>

                                    </div>
                                </div> 
                           
                        </div>
                          
                        
                            
                        </div>
                    </div>
                   
                <!--incluir dados-cartao-->
                <!--incluir endereco-->
                    <div id="abrir" style="display: none;">
                        <div id="caixa-entrega" class="row">
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="endereco col-sm-12">
                                        
                                        <h5>ENDEREÇO DE ENTREGA</h5>
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
                <button onclick="location.href='finalizar.php'"class="btn-mais-comprar">FINALIZAR COMPRA
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
                        $("#novo-endereco").click(function(evento){
                        if($("#novo-endereco").attr("checked")){
                            $("#abrir").css("display", "block");
                        }else {
                            $("#abrir").css("display", "none");
                            }    
                        });
                    });

               
                </script>
</body>
</html>