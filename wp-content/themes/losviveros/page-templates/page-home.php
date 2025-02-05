<?php
/**
 * Template Name: Page - Home
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

<div class="wrapper" id="home">

	<div class="container" id="content">

		<div class="row">

			<div class="col col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">
                    <?php masterslider("ms-7"); ?>
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
                    <p>Conoce la información de última hora del CPIFP Los Viveros: todo relativo a cada grado formativo, matriculación, cursos y todo
    lo relacionado con el PROTOCOLO COVID19</p>
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
                            if(in_array("home", $categoria)) : ?>

                                <div class="col col-12 col-lg-4 mt-xs-2 mt-3">
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

                    <div class="col col-12 text-center">
                        <a href="<?php echo get_site_url();?>/noticias" class="btn btn-orange">Ver más</a>
                    </div>
                    <?php
                        wp_reset_postdata();
                    endif;

                    /*understrap_pagination( [
                        'current' => $paged,
                        'total'   => $query->max_num_pages,
                    ] );*/
                    ?>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row my-5" id="home-oferta-educativa">
            <div class="col col-12 text-center my-4">
                <h2>Descubre nuestra oferta educativa</h2>
            </div>
        <?php 
            global $paged;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'oferta_educativa',
                'posts_per_page' => 9,
                'paged' => $paged,
                'orderby' => 'date',
                'order' => 'ASC'
            ); ?>

            <?php
            $query = new WP_Query( $args );
            $first = true;
            if($query->have_posts()) : 
                while($query->have_posts()) : 
                    $query->the_post(); 
            ?>
                <div class="col col-12 col-lg-2 <?php echo $first ? 'offset-lg-1' : ''; ?>">
                    <button class="btn btn-<?php echo $first ? 'yellow' : 'white'; ?>" id="home-oferta-educativa-boton-<?php the_field('boton'); ?>"><?php echo get_the_title(); ?></button>
                </div>  
                <?php
                    $first = false;
                    endwhile;
                ?>        
            <?php
                wp_reset_postdata();
            endif;
            ?>
        </div>

	</div><!-- #content -->

    <div class="container-fluid">
    <?php 
        global $paged;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => 'oferta_educativa',
            'posts_per_page' => 9,
            'paged' => $paged,
            'orderby' => 'date',
            'order' => 'ASC'
        ); ?>

        <?php
        $query = new WP_Query( $args );
        $first = true;
        if($query->have_posts()) : ?>
        <div class="row" id="home-carrusel-oferta-educativa">
            <div class="col col-12 col-lg-6 yellow-bg">
                <img src="<?php echo get_site_url();?>/img/fill_oferta_educativa.png" id="fill-oferta-educativa" alt="Adorno Oferta Educativa">
                <div class="container">
                    <div class="row">
                    <?php 
                    while($query->have_posts()) : 
                        $query->the_post(); 
                    ?>
                        <div class="col col-12 col-lg-8 offset-lg-3 <?php echo $first ? 'show' : 'hide'; ?>" id="home-oferta-educativa-<?php the_field('boton'); ?>">
                            <?php if(get_field('descripcion')) : ?>
                                <p><?php the_field('descripcion'); ?></p>
                            <?php endif; ?>
                            <?php if(get_field('grado')) : 
                                $text_area = get_field('grado');
                                $text_area_arr = explode("\n", $text_area);
                                $grados = array_map('trim', $text_area_arr);
                            ?>
                                <ul class="nodot">
                                    <?php foreach ($grados as $grado) : ?>
                                        <?php $grado_split = explode(" - ", $grado); ?>
                                        <li>
                                            <span><img src="<?php echo get_site_url();?>/img/oferta_educativa_adorno.png" class="oferta-educativa-adorno" alt="Adorno Oferta Educativa"><?php echo $grado_split[0]; ?></span>
                                            <p><?php echo $grado_split[1]; ?></p>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <?php 
                            $first = false;
                            endwhile;
                        ?>
                    </div>  
                </div>
            </div>
            <div class="col col-12 col-lg-6">
                <?php
                $first = true;
                while($query->have_posts()) : 
                    $query->the_post(); 
                ?>
                    <img src="<?php the_field('imagen'); ?>" class="img-responsive w-100 <?php echo $first ? 'show' : 'hide'; ?>" id="home-oferta-educativa-<?php the_field('boton'); ?>-img">
                    <?php $first = false; ?>
                <?php endwhile; ?>
            </div>
            <?php
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
    
    <div class="container">
        <div class="row my-5" id="home-sobre-nosotros">
            <div class="col col-12">
                <h2>Sobre nosotros</h2>
                <p>Una comunidad de más de 2.400 personas que centra su empeño en mejorar de forma constante su compromiso con la sociedad, 
tratando de ofrecer las enseñanzas más innovadoras posibles, formando no sólo en aspectos educativos o tecnológicos, sino también 
en valores, para tratar de inculcar el mismo compromiso de superación en todo nuestro alumnado.</p>

                <?php masterslider("ms-30"); ?>
            </div>
        </div>

        <div class="row py-4">
            <div class="col col-12">
                <div style="width: 100%;"><div style="position: relative; padding-bottom: 56.25%; padding-top: 0; height: 0;"><iframe frameborder="0" width="1200px" height="675px" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://view.genial.ly/62a1c7a3a7fae20012f05cbd" type="text/html" allowscriptaccess="always" allowfullscreen="true" scrolling="yes" allownetworking="all"></iframe> </div> </div>
            </div>
        </div>

        <div class="row py-4">
            <div class="col col-12">
                <h2>Nuestros alumnos opinan</h2>
            </div>
        </div>
    </div>
    
    <div id="carousel-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col col-12 col-lg-5 offset-lg-4">
                    <div id="carouselOpiniones" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                    <?php 
                        $first = true;
                        global $paged;
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'opiniones',
                            'posts_per_page' => 24,
                            'paged' => $paged,
                            'orderby' => 'date',
                            'order' => 'DESC'
                        ); ?>
                
                        <?php
                        $query = new WP_Query( $args );
                        if($query->have_posts()) : 
                            while($query->have_posts()) : 
                                $query->the_post(); 
                        ?>
                            <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                                <?php if(get_field('persona')) : ?>
                                    <p class="nombre"><?php the_field('persona'); ?></p>
                                <?php endif; ?>
                                <?php if(get_field('opinion')) : ?>
                                    <p class="opinion">«<?php the_field('opinion'); ?>»</p>
                                <?php endif; ?>
                            </div>
                        <?php 
                            $first = false;
                            endwhile;
                            wp_reset_postdata();
                        endif;
                    ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselOpiniones" role="button" data-slide="prev">
                            <img src="<?php echo get_site_url();?>/img/flecha_izquierda.png" class="control" alt="Anterior">
                        </a>
                        <a class="carousel-control-next" href="#carouselOpiniones" role="button" data-slide="next">
                            <img src="<?php echo get_site_url();?>/img/flecha_derecha.png" class="control" alt="Siguiente">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php get_template_part( 'global-templates/contactform' ); ?>
     

</div><!-- #full-width-page-wrapper -->

<?php
    get_footer();
