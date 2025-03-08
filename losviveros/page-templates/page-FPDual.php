<?php
/**
 * Template Name: Page - FP Dual
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

<div class="wrapper" id="fp-dual">

	<div class="container" id="content">

		<div class="row my-4">

			<div class="col col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">
                    <h1><?php echo get_the_title(); ?></h1>
                    <p>Conoce cómo funciona esta nueva modalidad de FP donde se comparte la formación entre el centro educativo y la empresa.</p>
                    <div class="relative">
                        <?php masterslider("ms-25"); ?>
                    </div>
				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

        <div class="row my-4">

        <div class="col col-12 my-2">
            <h2>Una formación innovadora</h2>
            <p>La modalidad de Formación Profesional Dual implica que se puede realizar un Ciclo Formativo combinando estancias en el centro educativo con estancias en empresas del sector y de la zona, lo que supone una adaptación máxima a lo que piden las empresas del entorno a los candidatos en sus ofertas de empleo.</p>
            <p>Gracias a la experiencia conseguida, a la formación y al contacto directo y continuado con las empresas, acceder a un empleo estable o conseguir otro diferente resultará más fácil; además se consigue una formación no sólamente en los aspectos relacionados con las materias que se aprenden en el Ciclo Formativo.</p>
            <p>Que un ciclo formativo se imparta en dual no significa necesariamente que todas las plazas se reserven para dual, es decir, un ciclo formativo puede ofertar plazas en dual y plazas en no dual.</p>
        </div>

        <div class="col col-12 col-lg-4 p-2 my-2">
            <div class="grey-bg">
                <p><strong>Materias</strong></p>
                <p>Los módulos a cursar son exactamente los mismos que se desarrollan en la modalidad presencial convencional. Lo importante es que se aprenderá lo mismo pero con otro método más práctico y conectado totalmente con el sector empresarial.</p>
            </div>
        </div>
        <div class="col col-12 col-lg-4 p-2 my-2">
            <div class="grey-bg">
                <p><strong>Horas totales</strong></p>
                <p>La duración es 2000 horas. Normalmente se imparten en dos cursos, pero puede establecerse que la duración sea de tres cuando la relación entre alumnado y empresa esté amparado por un contrato de formación y aprendizaje.</p>
                <br>
                <div class="w-100 text-center">
                    <a class="btn-orange" href="<?php echo get_site_url();?>/contacto">Más información</a>
                </div>
            </div>
        </div>
        <div class="col col-12 col-lg-4 p-2 my-2">
            <div class="grey-bg">
                <p><strong>Normativa</strong></p>
                <p>A nivel nacional el marco normativo de la FP Dual es el <a class="orange" target="_blank" href="http://www.juntadeandalucia.es/educacion/webportal/web/inspeccion/normativa/busqueda-normativa/-/normativas/detalle/real-decreto-1529-2012-de-8-de-noviembre-por-el-que-se-desarrolla-el-contrato-para-la-formacion-y-1">Real Decreto 1529/2012 de 8 de Noviembre</a>, y a nivel autonómico es la <a class="orange" target="_blank" href="http://www.juntadeandalucia.es/educacion/portals/web/formacion-profesional-andaluza/9/-/normativas/detalle/orden-de-14-de-febrero-de-2017-por-la-que-se-convocan-proyectos-de-formacion-profesional-dual-para-el-curso-academico">Orden de 14 de febrero de 2017 (proyectos 2017-2019)</a> y la <a class="orange" target="_blank" href="https://www.juntadeandalucia.es/educacion/portals/web/formacion-profesional-andaluza/9/-/normativas/detalle/orden-de-20-de-marzo-de-2018-por-la-que-se-convocan-proyectos-de-formacion-profesional-dual-para-el-curso-academico">Orden de 20 de marzo de 2018 (proyectos 2018-2020)</a>.</p>
            </div>
        </div>

        <div class="col col-12 my-4">
            <h2>Ciclos en modalidad Dual en nuestro centro</h2>
            <p>En el CPIFP Los Viveros apostamos dedicidamente por la modalidad de formación dual en muchos de nuestros ciclos. Aquellos que actualmente ofrecen formación dual son:</p>

            <div class="row py-4">
            <?php
                $args = array(
                    'post_type' => 'page',
                    'posts_per_page' => -1,
                    'post_status' => 'publish',
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
                        $dual = get_field('dual_distancia');
                        if($dual && in_array('dual', $dual)) : 
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
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
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

    </div>
        <?php get_template_part( 'global-templates/contactform' ); ?>
</div><!-- #full-width-page-wrapper -->

<?php

    get_footer();
