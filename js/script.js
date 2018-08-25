/* -----------------MENU responsywne-------------*/





$(function(){
    $(".ikona_menu").click(function(){
        $(".lista_responive").slideToggle();
        $(".lista_responive").css("background-color","black");
           
        
    })
    
   $(".lista_responive").click(function(){
       $(".lista_responive").slideUp();
   });
    
});

/* -----------------------------*/
/* -----------------------------*/