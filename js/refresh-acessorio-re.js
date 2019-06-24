


        $(function(){

            $(".div-acessorios-sl").css("display", "none");
            $(".div-acessorios-sl#provisorio-smart-sl").addClass("active");
    
            $(".acessorio-sl").on("click", function( e ){         
            e.preventDefault();
                
                $("div").removeClass("active");
                var id = $(this).attr("href"); 
                $("#"+id+"").addClass("active");
                
            });
            });