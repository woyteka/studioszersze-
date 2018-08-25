<!DOCTYPE html>

<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
   
     <!--                      -----------------FONTY------------------------             -->
    
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700&amp;subset=latin-ext" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=IM+Fell+Great+Primer|Lora:400,700&amp;subset=latin-ext" rel="stylesheet"> 
    
      <!--                 -----------------KONIEC FONTY------------------------           -->
     
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
     
    
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/responsive.css">
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    
    
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jssor.slider-26.9.0.min.js"></script>
 
    
    
    
    
    
    
    
    

<head>
    
    
    
    <title><?php bloginfo ('name');?><?php wp_title(); ?></title>
    
    
    
    
    
    <script>
    $(document).ready(function() { 
 
    $('a[href^="#"]').on('click', function(event) {
    
        var target = $( $(this).attr('href') );
    
        if( target.length ) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 1000);
        }
    });
 
});
    
    
    </script>
    
    
    
     
    
    
    </head>
    
    
    
      <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideWidth: 720,
              $Cols: 2,
              $Align: 130,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    
    
    <style>
        /* jssor slider loading skin spin css */
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        .jssorb051 .i {position:absolute;cursor:pointer;}
        .jssorb051 .i .b {fill:#fff;fill-opacity:0.5;}
        .jssorb051 .i:hover .b {fill-opacity:.7;}
        .jssorb051 .iav .b {fill-opacity: 1;}
        .jssorb051 .i.idn {opacity:.3;}

        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>


    <body>
       <section id="stronaglowna"></section>
  <div class="container">
      
      
      
      

      
      
      
      
      
      
       <!--                      -----------------HEADER------------------------             -->
      
       <header>
        <div class="menu">
            
            <div class="logo"><a href="http://studioszerszeń.pl/"><img  src="<?php bloginfo('template_directory'); ?>/images/logo_szerszen.gif" alt="Logo studio szerszeń"></a></div>
            <div class="ikona_menu">
                
                <div class="linia"></div>
                <div class="linia2"></div>
                <div class="linia3"></div>
            </div>
            
            
            
            <div class="items">
            <ul class="lista">
              <li><a href=#stronaglowna>STUDIO</a></li>
                <li><a href=#aktualnosci>AKTUALNOŚCI</a></li>
                <li><a href=#ekipa>EKIPA</a></li>
                <li><a href=#usun>USUŃ TATUAŻ</a></li>
                <li><a href=#higiena>HIGENA</a></li>
                <li><a href=#ustal>USTAL TERMIN</a></li>
                 <li><a href=#kontakt>KONTAKT</a></li>
                
                
                
                </ul>
            </div>
            
            
                  <div class="items_responsive">
            <ul class="lista_responive">
                <li><a href=#stronaglowna>STUDIO</a></li>
                <li><a href=#aktualnosci>AKTUALNOŚCI</a></li>
                <li><a href=#ekipa>EKIPA</a></li>
                <li><a href=#usun>USUŃ TATUAŻ</a></li>
                <li><a href=#higiena>HIGENA</a></li>
                <li><a href=#ustal>USTAL TERMIN</a></li>
                 <li><a href=#kontakt>KONTAKT</a></li>
                
                
                
                </ul>
            </div>
            
          
          
          </div>
          
          
      </header>