$(function(){

    $(".animate").css("display", "none");
    $(".animate#animate-bio").addClass("active");
    
    $(".animated").on("click", function( e ){         
      e.preventDefault();
        
        $(".animate").removeClass("active");
        var id = $(this).attr("href"); 
        $("#"+id+"").addClass("active");
        
    });
    })