<footer id="footer" class="footer"><div class="container"><div class="row"><div class="col-md-4 col-xs-12 contenido"> <nav class="menu-footer"><ul><li> <a href="#" onclick="goToSection('portada', 800)">INICIO</a></li><li> <a href="#" onclick="goToSection('portafolio', 800)">PORTAFOLIO</a></li><li> <a href="#" onclick="goToSection('testimonios', 800)">CLIENTES</a></li><li> <a href="#" onclick="goToSection('acerca-de', 800)">NOSOTROS</a></li><li> <a href="#" onclick="goToSection('contactanos', 800)">CONTACTO</a></li></ul> </nav><p class="mail"><span>Para consultas: </span><a href="mailto: gian.vallejos92@gmail.com">gian.vallejos92@gmail.com</a></p><p class="celular"><span>Celular: </span><a href="tel:+51932553030">+51 932 55 3030</a></p></div><div class="col-md-4 col-xs-12 text-center"><ul class="redes-sociales-footer"><li> <a href="#"> <i class="flaticon-facebook-logo"></i> </a></li><li> <a href="#"> <i class="flaticon-instagram-logo"></i> </a></li><li> <a href="#"> <i class="flaticon-twitter-logo-silhouette"></i> </a></li><li> <a href="#"> <i class="flaticon-snapchat"></i> </a></li></ul> <figure class="sello"> <img src="http://localhost/gvallejos/wp-content/themes/gvallejos/images/sello.png" alt="sello empresa"> </figure></div><div class="col-md-4 col-xs-12 contenido-right"><p class="direccion"><span>Oficinas: </span><br>Av. Miguel Grau #656 <br>Cajamarca - Perú</p><p class="copy">© 2017. Todos los derechos reservados para gVallejos.</p></div></div></div> </footer></body> <?php // wp_enqueue_script('jquery'); // wp_enqueue_script('myscript', '/wp-content/themes/gvallejos/js/gvallejos.js', array('jquery')); ?> <?php wp_footer(); ?></html> <script type="text/javascript">var bLazy=new Blazy({selector:'img'});</script> <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script> <script>WebFont.load({google:{families:['Poppins','Raleway']}});</script> <script type="text/javascript">jQuery(function(){var shrinkHeader=20;jQuery(window).scroll(function(){var scroll=getCurrentScroll();if(scroll>=shrinkHeader){jQuery('.header').addClass('shrink');} else{jQuery('.header').removeClass('shrink');}});function getCurrentScroll(){return window.pageYOffset||document.documentElement.scrollTop;}});function goToSection(direction,time){var dir='#'+direction;jQuery("html, body").animate({scrollTop:jQuery(dir).offset().top-85},time);} function showPortafolio(label,type){var actual_id='#'+label.id;cleanAllActive();if(type=='Website'){jQuery('.Website').css('display','none');jQuery('.Design').css('display','none');jQuery('.Website').fadeIn(500);jQuery(actual_id).addClass('active');}else if(type=='Design'){jQuery('.Website').css('display','none');jQuery('.Design').css('display','none');jQuery('.Design').fadeIn(500);jQuery(actual_id).addClass('active');}else{jQuery('.Design').css('display','none');jQuery('.Website').css('display','none');jQuery('.Website').fadeIn(500);jQuery('.Design').fadeIn(500);jQuery(actual_id).addClass('active');}} function cleanAllActive(){jQuery('#all').removeClass("active");jQuery('#websites').removeClass("active");jQuery('#designs').removeClass("active");}</script>
