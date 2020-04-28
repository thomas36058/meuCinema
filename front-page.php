<?php 

// $cssEspecifico = 'index';
// require_once('header.php');

get_header();

$posts = new WP_Query(array(
    'posts_per_page' => 3
));

$noticias_id = get_option( 'page_for_posts' );

?>

<?php if( $posts->have_posts() ): ?>
    <main class="home-main">
        <div class="container">

            <div class="pagina-titulo">
                <h1><?php echo get_the_title( $noticias_id ) ?></h1>
            </div>

            <div class="botao-ver-todos">
                <a class="botao-ver-todos" href="<?php echo get_permalink( $noticias_id ) ?>">Ver todas notícias</a>
            </div>
            
            <ul class="posts-lista">

                <?php while ( $posts->have_posts() ): $posts->the_post(); ?>
                
                    <li class="post-lista-item">
                        <a href="<?php the_permalink(); ?>">

                            <?php if ( has_post_thumbnail( ) ): ?>
                                <?php the_post_thumbnail('full'); ?>
                            <?php endif; ?>

                            <h2><?php echo get_the_title(); ?></h2>

                            <p><?php echo get_the_date(); ?></p>

                            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
                                <?php the_author() ?>
                            </a>

                            <?php the_excerpt(); ?>

                        </a>
                    </li>

                <?php endwhile; wp_reset_postdata(); ?>

            </ul>
            
            <div class="botao-carregar-mais">
                <a class="botao-carregar-mais" href="">Carregar mais...</a>
            </div>

        </div>
    </main>
<?php endif; ?>

<?php get_footer(); ?>
