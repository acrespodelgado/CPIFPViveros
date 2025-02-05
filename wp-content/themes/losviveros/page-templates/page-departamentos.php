<?php
/**
 * Template Name: Page - Departamentos
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

<div class="wrapper" id="departamento">

	<div class="container" id="content">

		<div class="row my-4">

			<div class="col col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">
                    <h1><?php echo get_the_title(); ?></h1>
                    <?php if(get_field('subtitulo')) : ?>
                        <p><?php the_field('subtitulo'); ?></p>
                    <?php endif; ?>
                    <?php if(get_field('slider')) : ?>
                        <div class="relative">
                            <?php echo do_shortcode(get_field('slider')); ?>
                        </div>
                    <?php endif; ?>
				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->
    </div>
    
    <div class="container">
        <div class="row info">
            <div class="col col-12">
                <?php if(get_field('descripcion_departamento')) : ?>
                    <h2>Lo que ofrecemos</h2>
                    <p><?php the_field('descripcion_departamento'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="container grados">
        <div class="row">
            <div class="col col-12">
                <?php if(get_field('grados_departamento')) : ?>
                <h2>Ciclos del departamento</h2>
                <div class="row">
                <?php
                    $text_area = get_field('grados_departamento');
                    $text_area_arr = explode("\n", $text_area);
                    $text_area_arr = array_map('trim', $text_area_arr);
                    foreach ($text_area_arr as $grado) :
                        $grado_split = explode(" | ", $grado);
                        $url = eliminar_tildes(strtr(strtolower($grado_split[0]), " ", "-"));
                ?>
                    <div class="col col-12 col-lg-6">
                        <div class="grado">
                            <a href="/<?php echo $url; ?>"><h3><?php echo $grado_split[0]; ?></h3></a>
                            <p><?php echo $grado_split[1]; ?></p>
                            <a href="/<?php echo $url; ?>" class="btn btn-orange">Saber más</a>
                        </div>
                    </div>
                    
                <?php endforeach; ?>
                <?php
                     wp_reset_postdata();
                ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <div class="container noticias">
        <div class="row">
            <div class="col col-12">
                <h2>Noticias y Actualidad</h2>
                <p>Conoce la información de última hora relacionado con el <?php echo get_the_title(); ?>.</p>
            </div>
            <?php if(get_field('etiqueta_noticias')) :

                global $paged;
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'noticia',
                    'posts_per_page' => 6,
                    'paged' => $paged,
                    'meta_query'=> array(
                        array(
                            'key' => 'departamento',
                            'compare' => 'LIKE',
                            'value' => get_field('etiqueta_noticias'),
        
                        )
                    ),
                    'orderby' => 'date',
                    'order' => 'DESC'
                ); ?>
        
                <?php
                $query = new WP_Query( $args );
                if($query->have_posts()) : 
                    while($query->have_posts()) : 
                        $query->the_post(); ?>
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
                    <?php endwhile;

                else : ?>
                <div class="col col-12">
                    <h3>No hay noticias actualmente para el departamento</h3>
                </div> 
                <?php 
                wp_reset_postdata();
                endif;

                understrap_pagination( [
                    'current' => $paged,
                    'total'   => $query->max_num_pages,
                ] );   
                ?>
            <?php else : ?>
                <h3>No hay noticias actualmente para el departamento</h3>
            <?php endif; ?>
        </div>
    </div>
    
    <?php $value = get_field('etiqueta_noticias'); ?>
    <?php if(strcmp($value, "DIOP") == 0) : ?>
        <?php get_template_part( 'global-templates/contactform_diop' ); ?>               
    <?php else: ?>
        <?php get_template_part( 'global-templates/contactform' ); ?>
    <?php endif; ?>
     

</div><!-- #full-width-page-wrapper -->

<?php
    get_footer();
