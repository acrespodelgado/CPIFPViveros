<?php
/**
 * Template Name: Page - Acreditacion de Competencias Laborales
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

<div class="wrapper" id="acreditacion">

	<div class="container" id="content">

		<div class="row my-4">

			<div class="col col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">
                    <h1><?php echo get_the_title(); ?></h1>
                    <p>Si posees experiencia en un sector y quieres que se reconozca la misma mediante la evaluación en nuestro centro, puedes contar con nosotros.</p>
                    <div class="relative">
                        <?php masterslider("ms-23"); ?>
                    </div>
				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

        <div class="row my-4">

        <div class="col col-12 my-2">
            <h2>¿En qué consiste?</h2>
            <p>Es el proceso por el que la persona candidata adquiere una acreditación oficial de sus competencias profesionales adquiridas por experiencia laboral o vías no formales de formación, previa evaluación de las mismas.</p>
            <p>Este proceso permite acreditar unidades de competencia que forman parte de un Título de Formación Profesional o de un Certificado de Profesionalidad.</p>
            <p>Finalizado el procedimiento, la comisión de evaluación indicará la formación complementaria que el participante tiene que cursar, si desea continuar su formación para obtener el Título de Formación Profesional o el Certificado de Profesionalidad.</p>
        </div>

        <div class="col col-12 grey-bg my-2">
            <p>¿A quién le puede interesar?</p>
            <ul class="nodot">
                <li>Si has adquirido tus conocimientos profesionales desarrollando una actividad laboral y no tienes titulación, las Administraciones convocan procedimientos de evaluación y acreditación de competencias profesionales en los que se puede obtener, tras unas pruebas concretas, una acreditación con validez en todo el territorio nacional y orientaciones sobre cómo cursando una formación complementaria, podrás obtener el Título de Formación Profesional o el Certificado de Profesionalidad.
                </li>
            </ul>
            <ul class="nodot">
                <li>
                    <img src="<?php echo get_site_url();?>/img/oferta_educativa_adorno.png" class="oferta-educativa-adorno" alt="Adorno Oferta Educativa">
                    Si abandonaste tus estudios para incorporarte al mundo laboral y has aprendido tu profesión en tu puesto de trabajo.
                </li>
                <li>
                    <img src="<?php echo get_site_url();?>/img/oferta_educativa_adorno.png" class="oferta-educativa-adorno" alt="Adorno Oferta Educativa">
                    Si has realizado actividades no remuneradas que te han permitido adquirir competencias del mundo laboral
                </li>
                <li>
                    <img src="<?php echo get_site_url();?>/img/oferta_educativa_adorno.png" class="oferta-educativa-adorno" alt="Adorno Oferta Educativa">
                    Si te has formado por vías no formales.
                </li>
            </ul>
            <p>Puedes presentarte a las convocatorias de acreditación de competencias profesionales relacionadas con tu actividad.</p>
            <br>
            <div class="w-100 text-center">
                <a class="btn-orange" href="<?php echo get_site_url();?>/contacto">Más información</a>
            </div>
        </div>
    </div>

    <?php get_template_part( 'global-templates/contactform' ); ?>

</div><!-- #full-width-page-wrapper -->

<?php

    get_footer();
