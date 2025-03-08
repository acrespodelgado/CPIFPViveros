<?php
/**
 * Template Name: Page - Contacto
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

<div class="wrapper" id="contacto">

	<div class="container" id="content">

		<div class="row my-4">

			<div class="col col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">
                    <h1><?php echo get_the_title(); ?></h1>
                    <p>En esta página tendrás toda la información útil de tipo administrativo sobre el funcionamiento del centro.</p>

                    <div class="row my-5">
                        <div class="col col-12 col-lg-4 mt-xs-2">
                            <div class="grey-bg">
                                <img src="<?php echo get_site_url();?>/img/icono_ubi.png" alt="Icono ubicación" class="icono">
                                <ul class="nodot">
                                    <li><strong>Contáctanos</strong></li>
                                    <li>Avenida Blas Infante, 16 · 41011 (Sevilla)</li>
                                    <li><a href="tel:+34955623862">+34 955 623 862</a></li>
                                    <li><a href="tel:+34671536345">+34 671 536 345</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-12 col-lg-4 mt-xs-2">
                            <div class="grey-bg">
                                <img src="<?php echo get_site_url();?>/img/icono_horario.png" alt="Icono horario" class="icono">
                                <ul class="nodot">
                                    <li><strong>Horario de secretaria</strong></li>
                                    <li><strong>Mañanas: </strong></li>
                                    <li>Lunes a Viernes de 10.00h a 13.00h</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-12 col-lg-4 mt-xs-2">
                            <div class="grey-bg">
                                <img src="<?php echo get_site_url();?>/img/icono_social.png" alt="Icono social" class="icono">
                                <ul class="nodot">
                                    <li><strong>Síguenos</strong></li>
                                    <ul class="nodot inline-list">
                                        <li><a href="https://www.facebook.com/CPIFPLosViverosSevilla/" target="_blank"><img src="<?php echo get_site_url();?>/img/icono_facebook.png" alt="Icono Facebook" class="icono-social"></a></li>
                                        <li><a href="https://www.instagram.com/cpifplosviveros/" target="_blank"><img src="<?php echo get_site_url();?>/img/icono_instagram.png" alt="Icono Instagram" class="icono-social"></a></li>
                                        <li><a href="https://twitter.com/cpifplosviveros?lang=es" target="_blank"><img src="<?php echo get_site_url();?>/img/icono_twitter.png" alt="Icono Twitter" class="icono-social"></a></li>
                                        <li><a href="https://www.youtube.com/@cpifplosviveros" target="_blank"><img src="<?php echo get_site_url();?>/img/icono_youtube.png" alt="Icono Youtube" class="icono-social"></a></li>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-12 col-lg-4 mt-4 mt-xs-2">
                            <div class="grey-bg">
                                <img src="<?php echo get_site_url();?>/img/icono_mensaje.png" alt="Icono mensaje" class="icono">
                                <ul class="nodot">
                                    <li><strong>Información general</strong></li>
                                    <li><a href="mailto:comunicacion@cpifplosviveros.es">comunicacion@cpifplosviveros.es</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-12 col-lg-4 mt-4 mt-xs-2">
                            <div class="grey-bg">
                                <img src="<?php echo get_site_url();?>/img/icono_mensaje.png" alt="Icono mensaje" class="icono">
                                <ul class="nodot">
                                    <li><strong>Orientacion</strong></li>
                                    <li><a href="mailto:diop@cpifplosviveros.es">diop@cpifplosviveros.es</a></li>
                                    <li><a href="tel:+34648132358">+34 648 132 358</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-12 col-lg-4 mt-4 mt-xs-2">
                            <div class="grey-bg">
                                <img src="<?php echo get_site_url();?>/img/icono_mensaje.png" alt="Icono mensaje" class="icono">
                                <ul class="nodot">
                                    <li><strong>Formación a distancia</strong></li>
                                    <li><a href="mailto:secretariadistancia@cpifplosviveros.es">secretariadistancia@cpifplosviveros.es</a></li>
                                    <li><a href="tel:+34669129046">Comercio: +34 669 129 046</a></li>
                                    <li><a href="tel:+34699835309">Administración: +34 699 835 309</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <?php get_template_part( 'global-templates/contactform' ); ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->
    </div>
    
    <div class="container-fluid p-0">
        <div class="row my-3 hide" id="contacto-horario">
            <div class="col col-12 col-lg-3 orange-bg">
                <h3>Nuestro horario</h3>
            </div>
            <div class="col col-12 col-lg-5 p-4">
                <p>Mañanas: Lunes a Viernes de 10.00 h a 13.00 h</p>
                <p>Tardes: Miércoles de 17.00 h a 20.00 h</p>
            </div>
        </div>
        <div class="row my-5" id="contacto-carousel">
            <div class="col col-12">
                <?php echo do_shortcode('[sp_wpcarousel id="124"]'); ?>
            </div>
        </div>
        <div class="row my-3" id="contacto-mapa">
            <div class="col col-12 py-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3170.7020880528657!2d-6.015400184539846!3d37.37322544293267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd126c46ad67f3b3%3A0x470f7242d2c2c6ec!2sCPIFP%20Los%20Viveros!5e0!3m2!1ses!2ses!4v1654272668125!5m2!1ses!2ses" width="100%" height="500" style="border:0;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div><!-- #content -->

    <div id="noticias-wrapper">
        <img src="<?php echo get_site_url();?>/img/fill_noticias.png" id="fill-noticias" alt="Adorno footer">
        <div class="container">
            <div class="row my-5 over" id="noticias">
                <div class="col col-12">
                    <h2>Te interesa saber</h2>
                    <p>Aquí tienes la información principal sobre las actividades habituales a realizar en Secretaría.</p>
                </div>

                    <?php 

                    global $paged;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'noticia',
                        'posts_per_page' => 3,
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
                            
                            <div class="col col-12 col-lg-4 mt-xs-2">
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

                    <?php 
                        endwhile;
                    ?>
                    <div class="col col-12 text-center">
                        <a href="<?php echo get_site_url();?>/noticias" class="btn btn-orange">Ver más</a>
                    </div>
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
