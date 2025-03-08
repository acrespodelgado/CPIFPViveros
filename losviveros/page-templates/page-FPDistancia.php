<?php
/**
 * Template Name: Page - FP A distancia y semipresencial
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

<div class="wrapper" id="fp-distancia">

	<div class="container" id="content">

		<div class="row my-4">

			<div class="col col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">
                    <h1><?php echo get_the_title(); ?></h1>
                    <p>Conoce cómo funciona esta modalidad de Formación Profesional sin presencialidad que te permite aprender un Ciclo Formativo desde donde quieras y cuando quieras.</p>
                    <div class="relative">
                        <?php masterslider("ms-24"); ?>
                    </div>
				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

        <div class="row my-4">

            <div class="col col-12 my-2">
                <h2>¿En qué consiste?</h2>
                <p>La formación profesional a distancia tiene un carácter de oferta modular, es decir, la solicitud para cursar esta modalidad de enseñanza se realiza por módulos profesionales que pertenecen a los distintos ciclos formativos.</p>
                <p>Una vez superados todos los módulos profesionales de un ciclo formativo podrás obtener el título correspondiente. A todos los efectos la validez de los estudios es la misma, es el mismo título pero impartido con una modalidad diferente.</p>
                <p>Para acceder a esta modalidad de enseñanzas es necesario tener cumplidos los 18 años a 31 de diciembre del año natural en que se formaliza la matrícula. Excepcionalmente, podrás acceder si tienes más de 16 años (o los cumples dentro del año natural en que comienza el curso escolar) siempre que acredites alguna de estas situaciones excepcionales:</p>
            </div>

            <div class="col col-12 grey-bg my-2">
                <ul class="nodot">
                    <li>
                        <img src="<?php echo get_site_url();?>/img/oferta_educativa_adorno.png" class="oferta-educativa-adorno" alt="Adorno Oferta Educativa">
                        Ser trabajador/a por cuenta propia o ajena que no te permita acudir al centro educativo en régimen ordinario.
                    </li>
                    <li>
                        <img src="<?php echo get_site_url();?>/img/oferta_educativa_adorno.png" class="oferta-educativa-adorno" alt="Adorno Oferta Educativa">
                        Ser deportista de rendimiento de Andalucía o de alto rendimiento o de alto nivel.
                    </li>
                    <li>
                        <img src="<?php echo get_site_url();?>/img/oferta_educativa_adorno.png" class="oferta-educativa-adorno" alt="Adorno Oferta Educativa">
                        Encontrarte en situación personal extraordinaria de enfermedad, discapacidad o cualquier otra situación que te impida cursar las enseñanzas en régimen ordinario.
                    </li>
                </ul>
                <p>Además de estos requisitos, deberás tener adquirida la condición de andaluz o andaluza o tener reconocida la identidad andaluza u ostentar la condición de andaluz o andaluza en el exterior.</p>
                <br>
                <div class="w-100 text-center">
                    <a target="_blank" class="btn-orange mx-2" href="https://www.juntadeandalucia.es/educacion/portals/web/formacion-profesional-andaluza/quiero-formarme/modalidades/a-distancia">Más información</a>
                    <a target="_blank" class="btn-orange mx-2" href="https://www.juntadeandalucia.es/educacion/portals/web/formacion-profesional-andaluza/quiero-formarme/escolarizacion-2022/oferta-parcial-diferenciada-ciclos-formativos ">Oferta Parcial Diferenciada</a>
                </div>
            </div>
        </div>

        <?php masterslider("ms-29"); ?>

        <div class="row my-4">
            <div class="col col-12 my-4">
                <h2>Ciclos en modalidad A Distancia en nuestro centro</h2>
                <p>En el CPIFP Los Viveros apostamos dedicidamente por la modalidad de formación A Distancia en muchos de nuestros ciclos. Aquellos que actualmente ofrecen formación A Distancia son:</p>

                <div class="row py-4">
                <?php
                    $args = array(
                        'post_type' => 'page',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'meta_query' => array(
                            array(
                                'key' => '_wp_page_template',
                                'value' => 'page-templates/page-grados.php',
                            )
                        )
                    );
                    $query = new WP_Query($args);

                    if($query->have_posts()) : 
                        while($query->have_posts()) : 
                            $query->the_post();
                            $distancia = get_field('dual_distancia');
                            if($distancia && in_array('distancia', $distancia)) : 
                        ?>  
                            <div class="col col-12 col-lg-4 grado">
                                <div class="overflow">
                                    <?php the_post_thumbnail( 'large w-100' ); ?>
                                </div>
                                <?php $grado = get_field('tipo_grado'); ?>
                                <?php if($grado) : ?>
                                    <?php switch($grado) { 
                                        case 'gradoM' : $grado = 'Grado Medio'; break; 
                                        case 'gradoS' : $grado = 'Grado Superior'; break; 
                                    } ?>
                                    <h3><?php echo $grado; ?></h3>
                                <?php endif; ?>
                                <h4>
                                    <a href="<?php get_field('url_alternativa') ? the_field('url_alternativa') : the_permalink(); ?>"><?php the_title(); ?></a>
                                </h4>
                            </div>
                        <?php
                            endif; 
                        ?>

                    <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();
                ?>
                </div>
            </div>

            <div class="col col-12 my-4">
                <h2>Ciclos en modalidad Semipresencial en nuestro centro</h2>
                <p>En la modadlidad Semipresencial se complementa el aprendizaje online con la asistencia obligatoria en horario de tarde. El único ciclo que ofertamos en dicha modalidad es:</p>

                <div class="row py-4">
                <?php
                    $args = array(
                        'post_type' => 'page',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'meta_query' => array(
                            array(
                                'key' => '_wp_page_template',
                                'value' => 'page-templates/page-grados.php',
                            )
                        )
                    );
                    $query = new WP_Query($args);

                    if($query->have_posts()) : 
                        while($query->have_posts()) : 
                            $query->the_post();
                            $semi = get_field('dual_distancia');
                            if($semi && in_array('semi', $semi)) : 
                        ?>  
                            <div class="col col-12 col-lg-4 grado">
                                <div class="overflow">
                                    <?php the_post_thumbnail( 'large w-100' ); ?>
                                </div>
                                <?php $grado = get_field('tipo_grado'); ?>
                                <?php if($grado) : ?>
                                    <?php switch($grado) { 
                                        case 'gradoM' : $grado = 'Grado Medio'; break; 
                                        case 'gradoS' : $grado = 'Grado Superior'; break; 
                                    } ?>
                                    <h3><?php echo $grado; ?></h3>
                                <?php endif; ?>
                                <h4>
                                    <a href="<?php get_field('url_alternativa') ? the_field('url_alternativa') : the_permalink(); ?>"><?php the_title(); ?></a>
                                </h4>
                            </div>
                        <?php
                            endif; 
                        ?>

                    <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();
                ?>
                </div>
                <div class="w-100 text-center mt-4">
                    <a target="_blank" class="btn-orange mx-2" href="<?php echo get_site_url();?>/higiene-semipresencial/">Más información</a>
                </div>
            </div>
        </div>
    </div>
        <?php get_template_part( 'global-templates/contactform' ); ?>
</div><!-- #full-width-page-wrapper -->

<?php

    get_footer();
