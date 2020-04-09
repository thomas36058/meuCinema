<!DOCTYPE html>
<html>
<head>
    <?php $urlSite = get_template_directory_uri(); ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="<?php echo $urlSite; ?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?php echo $urlSite; ?>/assets/css/comum.css">
    <link rel="stylesheet" href="<?php echo $urlSite; ?>/assets/css/header.css">
    <link rel="stylesheet" href="<?php echo $urlSite; ?>/assets/css/<?php echo $cssEspecifico; ?>.css">

    <title><?php geraTitulo(); ?></title>

    <?php wp_head(); ?>
</head>
<body>

<header>
    <div class="container">
        <?php 
            $args = array(
                'theme_location' => 'header-menu'
            );
            wp_nav_menu($args); 
        ?>
    </div>
</header>