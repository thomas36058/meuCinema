<?php

// $cssEspecifico = 'home';
// require_once('header.php');

$noticias_id = get_option('page_for_posts');

$categories = get_categories($args);

get_header();

?>

<?php if( have_posts() ) : ?>
    <main class="pagina-main">

        <section class="pagina">

            <div class="pagina-titulo">
                <h1><?php echo get_the_title($noticias_id) ?></h1>
            </div>

            <form id="busca-categoria-form" class="busca-categoria-form">
                <div class="category-select-wrapper">
                    <select name="category" id="category">
                        <option value="<?php get_permalink( $noticias_id ) ?>">Todas as Categorias</option>
                        <?php foreach($categories as $category) : ?>
                            <option value="<?php echo esc_url( get_category_link( $category->cat_ID ) ) ?>"><?php echo $category->name ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </form>
            
            <ul class="noticias-lista">
                <?php while( have_posts() ) : the_post(); ?>

                    <li class="noticia-lista-item">
                        <a href="<?php the_permalink(); ?>">

                            <?php if ( has_post_thumbnail( ) ): ?>
                                <?php the_post_thumbnail(); ?>
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

            <div class="paginacao">
                <?php echo paginate_links(); ?>
            </div>
            

        </section>

    </main>

    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
    </script>

    <script>

        jQuery(document).ready(function(){

            jQuery('#busca-categoria-form').on('change', 'select#category', function(){
                var url = jQuery(this).val();
                window.location = url;
            });

        });

    </script>

<?php endif; ?>

<?php get_footer(); ?>