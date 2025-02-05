<?php
/**
 * Template Name: Page - Noticias
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
$container = 'container-fluid';

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div class="wrapper" id="noticias">

	<div class="container" id="content">

		<div class="row my-4">

			<div class="col col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">
                    <h1><?php echo get_the_title(); ?></h1>
                    <p>En esta página tendrás toda la información útil de todas las noticias del centro.</p>
                    <div class="relative">
                        <?php masterslider("ms-8"); ?>
                    </div>
				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->
    </div>
    
    <div id="noticias-wrapper">
        <img src="<?php echo get_site_url();?>/img/fill_noticias.png" id="fill-noticias" alt="Adorno footer">
        <div class="container">
            <div class="row my-5 over" id="noticias">
                <div class="col col-12">
                    <h2>Noticias y Actualidad</h2>
                    <p>Conoce la información de última hora del CPIFP Los Viveros: todo relativo a cada ciclo formativo, matriculación y cursos.</p>
                </div>

                    <?php 

                    global $paged;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'noticia',
                        'posts_per_page' => 6,
                        'paged' => $paged,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    ); ?>
            
                    <?php
                    $query = new WP_Query( $args );
                    if($query->have_posts()) : 
                        while($query->have_posts()) : 
                            $query->the_post(); 
                            $categoria = get_field('categoria');
                            if(in_array("noticias", $categoria)) : ?>
                            
                                <div class="col col-12 col-lg-6 mt-xs-2 mt-3">
                                    <div class="noticia">
                                        <div class="overflow">
                                            <?php echo get_the_post_thumbnail( $post->ID, 'img-responsive' ); ?>
                                        </div>
                                        <h4><?php echo get_the_title(); ?></h4>
                                        <?php if(get_field('subtitulo')) : ?>
                                            <p><?php the_field('subtitulo'); ?></p>
                                        <?php endif; ?>
                                        <a href="<?php echo get_post_permalink(); ?>" title="<?php echo get_the_title(); ?>">Leer más <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            <?php endif; ?>
                    <?php endwhile; ?>
    
                    <?php
                        wp_reset_postdata();
                    endif;

                    understrap_pagination( [
                        'current' => $paged,
                        'total'   => $query->max_num_pages,
                    ] );   
                    ?>
            </div>
        </div>
    </div>
     

</div><!-- #full-width-page-wrapper -->

<?php
    get_footer();
