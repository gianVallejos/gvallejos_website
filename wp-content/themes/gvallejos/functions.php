<?php

    add_action( 'wp_print_styles', 'my_deregister_styles', 100 );
    function my_deregister_styles(){
        wp_deregister_style('contact-form-7');
    }

    add_action( 'wp_print_scripts', 'my_deregister_javascript', 100 );
    function my_deregister_javascript(){
        wp_deregister_script('hugeit-froogaloop-js');
        wp_deregister_script('jquery');
	wp_deregister_script('hugeit-lightbox-js');	
        wp_enqueue_script( 'jquery', 'https://cdn.jsdelivr.net/jquery/3.2.1/jquery.min.js', array(), null, true );
        wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(), null, true);
        wp_enqueue_script('blazy-js', 'https://cdnjs.cloudflare.com/ajax/libs/blazy/1.8.2/blazy.min.js', array(), null, true);
        wp_enqueue_script('hugeit-lightbox-js', 'hugeit-lightbox-js', array(), null, true);
    }

?>
