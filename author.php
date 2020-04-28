<?php

// $cssEspecifico = 'home';
// require_once('header.php');

get_header();

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

                <?php if ( get_the_author_meta( 'description' ) ) : ?>
				    <div class="author-description"><?php the_author_meta( 'description' ); ?></div>
				<?php endif; ?>
            </div>

            <div class="autor-posts">

                <h3><?php echo 'Todas as postagens de ' . get_the_author(); ?></h3>

                <?php rewind_posts() ?>

                <ul>
                    <?php while( have_posts() ): the_post(); ?>

                        <li class="noticia-lista-item">

                            <?php if ( has_post_thumbnail( ) ): ?>

                                <a href="<?php the_permalink() ?>" title="<?php printf(__('Ver mais sobre %s', 'cinepress'), get_the_title()) ?>">
                                    <?php the_post_thumbnail(); ?>
                                </a>

                            <?php endif; ?>

                            <a href="<?php the_permalink() ?>" title="<?php printf(__('Ver mais sobre %s', 'cinepress'), get_the_title()) ?>">
                                <h2><?php echo get_the_title() ?> </h2>
                            </a>

                            <?php the_excerpt() ?>

                            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>">              
                                <?php the_author() ?>
                            </a>

                            <?php echo get_the_date() ?>

                        </li>

                    <?php endwhile; wp_reset_postdata(); ?>
                </ul>

                <div class="paginacao">
                    <?php echo paginate_links(); ?>
                </div>

            </div>

        </section>
    </main>

<?php endif; ?>

<?php get_footer(); ?>