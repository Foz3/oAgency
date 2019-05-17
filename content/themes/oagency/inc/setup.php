<?php 

function oagency_setup() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'oagency_setup' );