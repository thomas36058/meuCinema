<?php

function after_setup(){
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}

add_action('after_steup_theme', 'after_setup');
