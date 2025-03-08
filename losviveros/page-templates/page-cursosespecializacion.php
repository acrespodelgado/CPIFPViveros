<?php
/**
 * Template Name: Page - Cursos de Especializacion
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

<div class="wrapper" id="curso-especializacion">

	<div class="container" id="content">

		<div class="row my-4">

			<div class="col col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">
                    <h1><?php echo get_the_title(); ?></h1>
                    <p>Si has cursado algún Ciclo Formativo de Formación Profesional tienes la posibilidad de especializarte con nosotros en las áreas que más te interesen.</p>
                    <div class="relative">
                        <?php masterslider("ms-26"); ?>
                    </div>
				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

        <div class="row my-4">
            <div class="col col-12 my-2">
                <h2>¿Qué son los cursos de especialización?</h2>
                <p>Son estudios que permiten ampliar conocimientos y perfeccionar las competencias previamente adquiridas en un ciclo formativo de FP.</p>
                <p>Igual que los ciclos de FP, los cursos de especialización son <strong>enseñanzas oficiales con validez en todo el territorio nacional</strong>.</p>
                <p>La duración de los cursos de especialización varía entre <strong>300 y 720 horas</strong> y pueden incluir un módulo de formación en centros de trabajo.</p>
                <p>Actualmente en el CPIFP Los Viveros ofertamos el Curso de Especialización de <strong>Ciberseguridad en entornos de las tecnologías de operación</strong>.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0 my-5">
    <?php 
        global $paged;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => 'cursos_especial',
            'posts_per_page' => 9,
            'paged' => $paged,
            'orderby' => 'date',
            'order' => 'ASC'
        ); ?>

        <?php
        $query = new WP_Query( $args );
        if($query->have_posts()) : 
            while($query->have_posts()) : 
                $query->the_post(); ?>
                    <div class="row">
                        <div class="col col-12 col-lg-6 p-0">
                            <img src="<?php the_field('imagen'); ?>" class="img-responsive w-100 ">
                        </div>
                        <div class="col col-12 col-lg-6 yellow-bg">
                            <img src="<?php echo get_site_url();?>/img/fill_oferta_educativa.png" id="fill-oferta-educativa" alt="Adorno Oferta Educativa">
                            <div class="container">
                                <div class="row">
                                    <div class="col col-12">
                                        <h3><?php the_title(); ?></h3>
                                        <?php if(get_field('trabajo')) : ?>
                                            <?php 
                                            $text_area = get_field('trabajo');
                                            $text_area_arr = explode("\n", $text_area);
                                            $trabajar = array_map('trim', $text_area_arr); ?>
                                            <p>Podrás trabajar de:</p>
                                            <ul>
                                                <?php foreach ($trabajar as $t) : ?>
                                                    <li><?php echo $t; ?></li>
                                                <?php endforeach ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                </div>  
                            </div>
                        </div>   
                    </div>
        <?php 
            endwhile;
            wp_reset_postdata();
        endif; ?>
    </div>

    <?php 
        global $paged;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => 'cursos_especial',
            'posts_per_page' => 9,
            'paged' => $paged,
            'orderby' => 'date',
            'order' => 'ASC'
        ); ?>

        <?php
        $query = new WP_Query( $args );
        if($query->have_posts()) : 
            while($query->have_posts()) : 
                $query->the_post(); ?>
                <div class="container">
                    <div class="row">
                        <div class="col col-12 grey-bg my-2">
                            <?php if(get_field('duracion')) : ?>
                                <p><strong>Duración del estudio</strong></p>
                                <ul class="nodot">
                                    <li>
                                        <img src="<?php echo get_site_url();?>/img/oferta_educativa_adorno.png" class="oferta-educativa-adorno" alt="Adorno Oferta Educativa">
                                        <?php echo get_field('duracion') . ' horas'; ?>
                                    </li>
                                </ul>
                            <?php endif; ?>
                            <?php if(get_field('requisitos')) : 
                                $text_area = get_field('requisitos');
                                $text_area_arr = explode("\n", $text_area);
                                $requisitos = array_map('trim', $text_area_arr); ?>
                                <p><strong>Requisitos de acceso</strong></p>
                                <p>Los títulos que dan acceso a este curso de especialización son los siguientes:</p>
                                <ul class="nodot">
                                    <?php foreach ($requisitos as $r) : ?>
                                        <li>
                                            <img src="<?php echo get_site_url();?>/img/oferta_educativa_adorno.png" class="oferta-educativa-adorno" alt="Adorno Oferta Educativa">
                                            <?php echo $r; ?>
                                        </li>
                                    <?php endforeach ?>
                                </ul>
                            <?php endif; ?>
                            <?php if(get_field('aprender')) : 
                                $text_area = get_field('aprender');
                                $text_area_arr = explode("\n", $text_area);
                                $aprender = array_map('trim', $text_area_arr); ?>
                                <p><strong>¿Qué voy a aprender y hacer?</strong></p>
                                <ul class="nodot">
                                    <?php foreach ($aprender as $a) : ?>
                                        <li>
                                            <img src="<?php echo get_site_url();?>/img/oferta_educativa_adorno.png" class="oferta-educativa-adorno" alt="Adorno Oferta Educativa">
                                            <?php echo $a; ?>
                                        </li>
                                    <?php endforeach ?>
                                </ul>
                            <?php endif; ?>
                            <?php if(get_field('formacion')) : 
                                $text_area = get_field('formacion');
                                $text_area_arr = explode("\n", $text_area);
                                $formacion = array_map('trim', $text_area_arr); ?>
                                <p><strong>Plan de formación</strong></p>
                                <p>Los módulos profesionales de este ciclo formativo son los siguientes:</p>
                                <ul class="nodot">
                                    <?php foreach ($formacion as $f) : ?>
                                        <li>
                                            <img src="<?php echo get_site_url();?>/img/oferta_educativa_adorno.png" class="oferta-educativa-adorno" alt="Adorno Oferta Educativa">
                                            <?php echo $f; ?>
                                        </li>
                                    <?php endforeach ?>
                                </ul>
                            <?php endif; ?>
                            <?php if(get_field('plazos')) : ?>
                                <p><strong>Plazos</strong></p>
                                <p><?php the_field('plazos'); ?></p>
                            <?php endif; ?>
                        </div>   
                    </div>
                </div>
                <?php if(get_field('video')) : ?>
                    <div class="grey-bg my-5">
                        <div class="container py-3">
                            <div class="row py-4 video">
                                <div class="col col-12 <?php echo get_field('descripcion_del_video') ? 'col-lg-6' : '' ;?> p-0">
                                <?php $video = get_field('video'); 
                                $video_split = explode("/", $video);
                                foreach($video_split as $v) :
                                    if(strpos($v, "watch?v=") !== false) {
                                        $v = substr($v, 8);
                                    }

                                    $video_final = $v;
                                    
                                endforeach;
                                ?>

                                <iframe class="w-100" height="300" src="https://www.youtube.com/embed/<?php echo $video_final; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <?php if(get_field('descripcion_del_video')) : ?>
                                    <div class="col col-12 col-lg-6 px-4">
                                        <p><strong>La experiencia</strong></p>
                                        <p><?php the_field('descripcion_del_video'); ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; 
            endwhile;
            wp_reset_postdata();
        endif; ?>

    <?php get_template_part( 'global-templates/contactform' ); ?>

</div><!-- #full-width-page-wrapper -->

<?php

    get_footer();
