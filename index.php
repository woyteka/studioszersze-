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
<script type="text/javascript" src="js/jssor.slider-26.9.0.min.js"></script>
 
    
    
    
    
    
    
    
    

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
            
            <div class="logo"><a href=#><img  src="images/logo_szerszen.png" alt="Logo studio szerszeń"></a></div>
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
                <li><a href=#ustal>USTAL TERMIN</a></li>
                 <li><a href=#usun>USUŃ TATUAŻ</a></li>
                 <li><a href=#higiena>HIGENA</a></li>
                 <li><a href=#kontakt>KONTAKT</a></li>
                
                
                
                </ul>
            </div>
            
            
                  <div class="items_responsive">
            <ul class="lista_responive">
                <li><a href=#stronaglowna>STUDIO</a></li>
                <li><a href=#aktualnosci>AKTUALNOŚCI</a></li>
                <li><a href=#ekipa>EKIPA</a></li>
                <li><a href=#ustal>USTAL TERMIN</a></li>
                 <li><a href=#usun>USUŃ TATUAŻ</a></li>
                 <li><a href=#higiena>HIGENA</a></li>
                 <li><a href=#kontakt>KONTAKT</a></li>
                
                
                
                </ul>
            </div>
            
          
          
          </div>
          
          
      </header>
      
     
      <!--                      -----------KONIEC HEADER------------------------             -->
      
      
      
      
      
      
      
      
      
      
      
      <!--                      -----------------SEKCJA INFO------------------------             -->
      
      <div class="info_studio">
          
           <div class="box_info">
      <div class="logo_info"><img src="images/logo_header.png" alt="Logo studio szerszeń"></div>
               
     <div class="info_text_bold"><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </strong></div>
      <div class="info_text_normal">Aliquam eget diam sed nibh tincidunt bibendum ut sed odio. Donec vitae diam sem. Praesent et arcu at mauris accumsan bibendum. Praesent euismod justo tincidunt augue consectetur suscipit. Nunc nec interdum lorem, eget tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer malesuada nunc tortor, sed egestas purus dapibus in. </div>    
          
           </div>
          
          <div class="box_social_logos">
              <a href=#><img class="facebook_logo" src="images/facebook_logo.png" alt="Logo facbook"></a>
              <a href=#><img class="istagram_logo" src="images/istagram_logos.png" alt="Logo istagram"></a>
          
          
          </div>
          
          
          
          
           <!--                      -----------------SEKCJA GALERIA------------------------             -->
          
          <div class="galleria_studio">
              
              
              
              
   <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
            <div data-p="137.50">
                <img  src="images/001.jpg" />
            </div>
            <div data-p="137.50">
                <img data-u="images" src="images/002.jpg" />
            </div>
            <div data-p="137.50">
                <img data-u="images" src="images/003.jpg" />
            </div>
            <div data-p="137.50">
                <img data-u="images" src="images/004.jpg" />
            </div>
            <div data-p="137.50">
                <img data-u="images" src="images/005.jpg" />
            </div>
            <div data-p="137.50">
                <img data-u="images" src="images/006.jpg" />
            </div>
            <div data-p="137.50">
                <img data-u="images" src="images/007.jpg" />
            </div>
            <div data-p="137.50">
                <img data-u="images" src="images/009.jpg" />
            </div>
            <div data-p="137.50">
                <img data-u="images" src="images/010.jpg" />
            </div>
            <div data-p="137.50">
                <img data-u="images" src="images/015.jpg" />
            </div>
            <div data-p="137.50">
                <img data-u="images" src="images/022.jpg" />
            </div>
        </div>
       
       
       <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:35px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:35px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
        
</div>
              
              
          
          
          
          
          
               
         
           <section id="aktualnosci"></section>
          </div>
          
         
      
        
      <div class="tytul_aktualnosci">
      <h3>aktualności</h3>
          </div>
      
      
      
      
      
      
      
      
      
      
      
    
       <!--                      -----------------SEKCJA AKTUALNOSCI------------------------             -->
      
      
      <div class="tlo_aktualnosci">
      <div class="container_aktualnosci">
         <div class="box_aktualnosci_calosc">
     <div class="box_zdjecie"><img src="images/fota_aktualnosci.jpg"></div>
          <div class="prawa_strona">
          <div class="box_data">12-12-2018</div>
          <div class="box_tytul">Tytul boxu jakiegos dłuższego</div>
          <div class="box_tresc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</div>
              <div class="container_button">
              <a href=#><div class="box_button">Czytaj więcej >></div></a></div>
          
          
          </div>
      
      
      
      
      </div>
        </div>
          
          
          
          
          
          
          
          
          
          
          
         <!--                      -----------------SEKCJA AKTUALNOSCI 4 BOXY------------------------             -->   
         <div class="container_boxy">
            <div class="box_poprzednia_aktualnosc">
                <div class="data_poprzednia_aktulnosc">05-12-2018</div>
                <div class="tytul_poprzednia_aktulnosc">jakis tytuł aktualnosci</div>
              </div>
             
               <div class="box_poprzednia_aktualnosc">
                <div class="data_poprzednia_aktulnosc">05-12-2018</div>
                <div class="tytul_poprzednia_aktulnosc">jakis tytuł aktualnosci</div>
              </div>
             
               <div class="box_poprzednia_aktualnosc">
                <div class="data_poprzednia_aktulnosc">05-12-2018</div>
                <div class="tytul_poprzednia_aktulnosc">jakis tytuł aktualnosci</div>
              </div>
             
               <div class="box_poprzednia_aktualnosc">
                <div class="data_poprzednia_aktulnosc">05-12-2018</div>
                <div class="tytul_poprzednia_aktulnosc">jakis tytuł aktualnosci</div>
              </div>
             
             
          </div>
     
            <section id="ekipa"></section>  
       
          
      
    
      
        </div>
      
      
      
      
      
      
      
      
      
       
      <!--                      -----------------SEKCJA EKIPA------------------------             -->   
      
      <div class="tytul_ekipa"><h3>ekipa</h3></div>
      <div class="container_ekipa">
          
          
      <div class="box_janusz">
          <div class="ekipa_imie">JANUSZ</div>
          <div class="ekipa_opis">Aliquam eget diam sed nibh tincidunt bibendum ut sed odio. Donec vitae diam sem. Praesent et arcu at mauris accumsan bibendum. Praesent euismod justo tincidunt augue consectetur suscipit. </div>
          <div class="ekipa_istagram"><a href="#"><img src="images/istagram_galeria.png"></a></div>
</div>
          
              <div class="box_agnieszka">
          <div class="ekipa_imie">agnieszka</div>
          <div class="ekipa_opis">Aliquam eget diam sed nibh tincidunt bibendum ut sed odio. Donec vitae diam sem. Praesent et arcu at mauris accumsan bibendum. Praesent euismod justo tincidunt augue consectetur suscipit. </div>
          <div class="ekipa_istagram"><a href="#"><img src="images/istagram_galeria.png"></a></div>
</div>
          
              <div class="box_fox">
          <div class="ekipa_imie">fox</div>
          <div class="ekipa_opis">Aliquam eget diam sed nibh tincidunt bibendum ut sed odio. Donec vitae diam sem. Praesent et arcu at mauris accumsan bibendum. Praesent euismod justo tincidunt augue consectetur suscipit. </div>
          <div class="ekipa_istagram"><a href="#"><img src="images/istagram_galeria.png"></a></div>
</div>
          
              <div class="box_paku">
          <div class="ekipa_imie">paku</div>
          <div class="ekipa_opis">Aliquam eget diam sed nibh tincidunt bibendum ut sed odio. Donec vitae diam sem. Praesent et arcu at mauris accumsan bibendum. Praesent euismod justo tincidunt augue consectetur suscipit. </div>
          <div class="ekipa_istagram"><a href="#"><img src="images/istagram_galeria.png"></a></div>
</div>
          
  

      </div>
      
      
      
      
       <!--                      -----------------SEKCJA OSIAGNIECIA------------------------             --> 
        <h3>osiągnięcia</h3>
      <div class="container_osiagniecia">
    
          <div class="item_osiagniecia">
              <div class="tytul_osiagniecie">I MIEJSCE<br>NAZWA KONKURSU</div>
              <div class="tytul_data_miejsce">05-03-2017 ŁÓDŹ</div>
              <div class="opis_osiagniecie">
Nullam luctus leo turpis, nec bibendum mi gravida sollicitudin. Nulla eget eros id nisi faucibus fringilla. Nulla venenatis ipsum semper, condimentum massa vitae, lobortis velit. </div>
          </div>
      
      <div class="item_osiagniecia">
              <div class="tytul_osiagniecie">I MIEJSCE<br>NAZWA KONKURSU</div>
              <div class="tytul_data_miejsce">05-03-2017 ŁÓDŹ</div>
              <div class="opis_osiagniecie">
Nullam luctus leo turpis, nec bibendum mi gravida sollicitudin. Nulla eget eros id nisi faucibus fringilla. Nulla venenatis ipsum semper, condimentum massa vitae, lobortis velit. </div>
          </div>
          
          
          
          <div class="item_osiagniecia">
              <div class="tytul_osiagniecie">I MIEJSCE<br>NAZWA KONKURSU</div>
              <div class="tytul_data_miejsce">05-03-2017 ŁÓDŹ</div>
              <div class="opis_osiagniecie">
Nullam luctus leo turpis, nec bibendum mi gravida sollicitudin. Nulla eget eros id nisi faucibus fringilla. Nulla venenatis ipsum semper, condimentum massa vitae, lobortis velit. </div>
          </div>
          
          
          
          <div class="item_osiagniecia">
              <div class="tytul_osiagniecie">I MIEJSCE<br>NAZWA KONKURSU</div>
              <div class="tytul_data_miejsce">05-03-2017 ŁÓDŹ</div>
              <div class="opis_osiagniecie">
Nullam luctus leo turpis, nec bibendum mi gravida sollicitudin. Nulla eget eros id nisi faucibus fringilla. Nulla venenatis ipsum semper, condimentum massa vitae, lobortis velit. </div>
          </div>
          
          
          <div class="item_osiagniecia">
              <div class="tytul_osiagniecie">I MIEJSCE<br>NAZWA KONKURSU</div>
              <div class="tytul_data_miejsce">05-03-2017 ŁÓDŹ</div>
              <div class="opis_osiagniecie">
Nullam luctus leo turpis, nec bibendum mi gravida sollicitudin. Nulla eget eros id nisi faucibus fringilla. Nulla venenatis ipsum semper, condimentum massa vitae, lobortis velit. </div>
          </div>
          
          
          <div class="item_osiagniecia">
              <div class="tytul_osiagniecie">I MIEJSCE<br>NAZWA KONKURSU</div>
              <div class="tytul_data_miejsce">05-03-2017 ŁÓDŹ</div>
              <div class="opis_osiagniecie">
Nullam luctus leo turpis, nec bibendum mi gravida sollicitudin. Nulla eget eros id nisi faucibus fringilla. Nulla venenatis ipsum semper, condimentum massa vitae, lobortis velit. </div>
          </div>
          
          
  
          
          
          
          
      </div>
       <section id="usun"></section>
      
       <!--                      -----------------SEKCJA LASER------------------------             --> 
      
      
      <h3>laser</h3>
      <div class="container_laser">
          <div class="items_laser"><h4>LASEROWE<br> USUWANIE TATUAŻY</h4>
              <spam>
Cras eget mi orci. Pellentesque ante enim, vestibulum eu sollicitudin ut, cursus id purus. Integer sit amet nibh aliquet, pretium lacus eu, gravida ipsum. Sed congue nisl nec velit finibus, quis egestas enim pharetra. <br><br>

Integer dictum justo at leo tincidunt, quis porta ligula sodales. Pellentesque fermentum risus ut malesuada molestie. Suspendisse auctor risus vitae nibh malesuada, vitae feugiat purus tempus. Nunc feugiat nunc at tellus faucibus, sed luctus tortor lobortis.
</spam></div>
          
          
          <div class="items_laser"><h4>NASZ SPRZĘT</h4><img src="images/laser_obrazek.jpg">
              <spam>
Phasellus felis sem, commodo eu pulvinar a, lobortis nec quam. Quisque euismod, nunc imperdiet pellentesque mattis, felis felis dictum leo, ac gravida velit neque vel quam. Nulla varius, quam ut eleifend mattis, massa nulla tristique enim, vel fringilla massa risus eu mi. Maecenas egestas hendrerit sapien, vel mollis magna varius ut.

</spam></div>
          
          
          
           <div class="items_laser"><h4>UMÓW SIĘ NA TERMIN</h4>
              <spam>
tutaj będzie formularz
</spam></div>
          
          
      
      </div>
       <section id="higiena"></section>
      
           <!--                      -----------------SEKCJA HIGENA------------------------             -->   
      <h3>higiena</h3>
      <div class="container_higiena">
      <div class="info_higiena"><h3>Donec sed lectus nibh. Phasellus a sapien lacus. Cras mattis vel magna ut sodales. Pellentesque nec leo in leo rhoncus gravida. Cras sit amet tincidunt nulla.</h3></div>
      
      <div class="higiena_prawa">
      
          <div class="opis_higiena"><span class="bialy">Cras eget mi orci. Pellentesque ante enim,.
          Integer sit amet nibh aliquet, pretium lacus eu, gravida ipsum. Sed congue nisl nec velit finibus, quis egestas enim pharetra. Integer dictum justo at leo tincidunt, quis porta ligula sodales. Pellentesque fermentum risus ut malesuada molestie. Suspendisse auctor risus vitae nibh malesuada, vitae feugiat purus tempus. Nunc feugiat nunc at tellus faucibus, sed luctus tortor lobortis. Aliquam erat volutpat. Ut auctor tortor sit amet ipsum gravida dictum. <br><br>
              
             


              
              
              
              
              </span>
              <div class="fota_higiena"><img src="images/fota_higiena.jpg"><img src="images/fota_higiena.jpg"><img src="images/fota_higiena.jpg"></div>
              </div>


</div>
      </div>
      <section id="ustal"></section>
       <!--                      -----------------SEKCJA USTAL TERMIN------------------------             -->   
      
      
      <h3>ustal termin</h3>
      <div class="container_termin">
          <div class="formularz"><h4>TUTJA Będzie formularz</h4></div>
      </div>
      
      <section id="kontakt"></section>
      
     <!--                      -----------------SEKCJA KONTAKT------------------------             -->  
      
      
      <footer>
      <h3>kontakt</h3>
      <div class="container_kontakt">
          <div class="kontakt"><h3>Studio tatuażu STUDIO SZERSZEŃ</h3>
<span class="bialy">ul. Szerszeniowa 55/8 Bydgoszcz<br>

tel. 5454-323-767<br>
mail: buiuro@studioszerszen.pl<br>

Studio otwarte w godzinach:<br>

Pon-Pt 9:30 – 17:00<br>
          Sobota 10:00-13:00</span>
 </div>
      </div>
      
       <!--                      -----------------SEKCJA MAPA------------------------             -->   
      
        
      
      <div class="container_mapa"></div>
      
      <iframe src="https://snazzymaps.com/embed/44138" width="100%" height="600px" style="border:none;"></iframe>
      </footer>
      
      
      
 </div>
        
     
        
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        
  
        
        
        
        
        
    
<script>
    $(document).ready(function() {
                
    });
</script>   
        
        
      <script src="js/scrollreveal.min.js"></script>
<script>
    window.sr = ScrollReveal();
    sr.reveal('.logo_info,.tytul_aktualnosci, .container_aktualnosci, .container_osiagniecia,h3,items_laser,.fota_higiena, .info_higiena, .higiena_prawa, .container_laser,.formularz, .kontakt', {           

        reset: false,
        delay: 200,
        distance: 0
    });
    sr.reveal('.box_janusz,.info_text_bold', {
        reset: false,
        delay: 300
    });
    
     sr.reveal('.box_agnieszka,.info_text_normal', {
        reset: false,
        delay: 400
    });
    
     sr.reveal('.box_fox,.box_social_logos', {
        reset: false,
        delay: 500
    });
    
     sr.reveal('.box_paku, .foty_studio', {
        reset: false,
        delay: 600
    });
    
    
    
    
    
    
</script>  
        
        
  
      
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    </body>
</html>
    
    
    
    
    