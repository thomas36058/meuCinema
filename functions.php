<?php 

/* Adicionar thumbnail em posts */
add_theme_support( 'post-thumbnails' );

/* Registrar menu de navegação */
function registrar_menu_navegacao() {
    register_nav_menu('header-menu', 'Menu Header');
}

add_action( 'init', 'registrar_menu_navegacao' );

function geraTitulo(){
    if( is_home() ){
        bloginfo('name');
    } 
    else {
        bloginfo('name');
        echo ' | ';
        the_title();
    }
}