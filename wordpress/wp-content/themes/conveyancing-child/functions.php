<?php
/**
 * Created by PhpStorm.
 * User: Jerald S. Gutierrez
 * Date: 4/10/2019
 * Time: 8:55 AM
 */

function conveyancing_style_enqueue() {
    wp_enqueue_style("family-Roboto", "https://fonts.googleapis.com/css?family=Roboto", array(), "" , "");
    wp_enqueue_style("bootstrap-css", "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css", array(), "4.3.1" , "");
    wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", array(), "4.7.0" , "");
    wp_enqueue_style("screen", get_template_directory_uri() . "-child/public/css/sass/stylesheets/screen.css", array(), "1.0.0" , "all");
}

add_action("wp_enqueue_scripts", "conveyancing_style_enqueue");

function conveyancing_script_enqueue() {
    wp_enqueue_script("jquery-js", get_template_directory_uri()."-child/public/js/jquery-3.3.1.min.js", array(), "3.3.1" , true);

    wp_enqueue_script("popper-js", "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js", array(), "1.14.0" , true);
    wp_enqueue_script("bootstrap-js", "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js", array(), "4.3.1" , true);

    wp_enqueue_script("isotope", "http://cdn.jsdelivr.net/isotope/1.5.25/jquery.isotope.min.js", array(), "4.1.0" , true);

    wp_enqueue_script("common-js", get_template_directory_uri()."-child/public/js/common-compiled.js", array(), "1.0.0" , true);
}

add_action("wp_enqueue_scripts", "conveyancing_script_enqueue");

/* For Static */
function conveyancing_theme_img_path() {
    if( !defined(theme_img_path)){
        define( 'theme_img_path', get_template_directory_uri() . '-child/public/img' );
    }
}

add_action("init", "conveyancing_theme_img_path");