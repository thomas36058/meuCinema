<?php 
    $cssEspecifico = 'single';
    require_once('header.php');
?>

<main>
    <article>
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : ?>
                <?php the_post(); ?>

                <div class="interna-post-imagem">
                    <?php the_post_thumbnail(); ?>
                </div>

                <div class="container">
                    
                    <h1><?php the_title(); ?></h1>

                    <p><?php the_content(); ?></p>

                    <span><?php the_date(); ?></span>

                </div>

            <?php endwhile; ?>
        <?php endif; ?>
    </article>
</main>