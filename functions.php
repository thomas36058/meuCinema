<?php 

include 'app/ctp/filmes.php';
include 'app/bootstrap.php';

//Adicionando a classe asda em todas as imagens de posts, adicionando um filtro na chamada da função que seta os atributos da imagem que será exibida quando a função "(get_)the_post_thumbnail"
function custom_cinepress_images_class_atrributes($attr) {
    $attr['class'] .= ' img-fluid';
    return $attr;
}

add_filter('wp_get_attachment_image_attributes','custom_cinepress_images_class_atrributes');

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