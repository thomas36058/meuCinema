<?php

$cssEspecifico = 'home';
require_once('header.php');

?>

<?php if ( have_posts() ) : the_post(); ?>

    <main class="pagina-main">
        <section class="pagina">

            <div class="autor-informacoes">
                <?php echo get_avatar (get_the_author_meta( 'ID' ), 150 ) ?>

                <div class="pagina-titulo">
                    <h1><?php echo the_author_meta( 'display_name' ); ?></h1>
                </div>

                <p><i><?php the_author_meta( 'user_url' ) ?></i></p>

                <?php the_author_meta('description') ?>
            </div>

            <div class="autor-posts">

                <h3><?php echo 'Todas postagens de ' . get_the_author(); ?></h3>

            </div>

        </section>
    </main>

<?php endif; ?>

<?php get_footer(); ?>