<?php

require get_theme_file_path( 'inc/setup.php' );

require get_theme_file_path( 'inc/enqueue-scripts.php' );

require get_theme_file_path( 'inc/customizer.php' );

// création du menu du header :
function register_my_menu() {
    register_nav_menu( 'header-menu' , __( 'Header Menu'));
}

add_action( 'init', 'register_my_menu');

// création du menu footer :

// function register_menu_footer(){
//     register_nav_menu( 'footer-menu', __( 'Footer Menu'));
// }

// add_action( 'init', 'register_menu_footer');