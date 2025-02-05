<?php
/**
 * Template Name: Page - Certificados de Profesionalidad
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

<div class="wrapper" id="certificados">

	<div class="container" id="content">

		<div class="row my-4">

			<div class="col col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">
                    <h1><?php echo get_the_title(); ?></h1>
                    <p>Si posees experiencia en un sector pero no has podido obtener un título, en nuestro centro tienes la posibilidad de completar tu formación mediante el reconocimiento de tu experiencia laboral.</p>
                    <div class="relative">
                        <?php masterslider("ms-22"); ?>
                    </div>
				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

        <div class="row my-4">

        <div class="col col-12 my-2">
            <h2>¿Qué son los certificados de profesionalidad?</h2>
            <p>En el CPIFP los Viveros, ofrecemos certificados de profesionalidad y módulos formativos independientes.</p>
            <p>Los certificados de profesionalidad, son formaciones mas completas, que incluyen varios módulos formativos y prácticas en empresas, con las que se obtiene experiencia en la calle y en muchos casos ayudan a obtener el primer empleo.</p>
            <p>La duración varía de unos certificados a otros, pero en torno a 3- 4 meses en el centro, y un mes de prácticas en empresa.</p>
        </div>

        <div class="col col-12 grey-bg my-2">
            <p>Requisitos de acceso</p>
            <ul class="nodot">
                <li>
                    <img src="<?php echo get_site_url();?>/img/oferta_educativa_adorno.png" class="oferta-educativa-adorno" alt="Adorno Oferta Educativa">
                    Para ver los requisitos de acceso sigue el <a href="http://www.ieslosviveros.es/?mode=aW5jbHVpcj0vdjIvbm90aWNpYXNfc2VjcmV0YXJpYS5waHA/bm90aWNpYTE9OTA2" target="_blank">enlace</a>
                </li>
            </ul>
            <p>Baremación de solicitudes</p>
            <ul class="nodot">
                <li>
                    <img src="<?php echo get_site_url();?>/img/oferta_educativa_adorno.png" class="oferta-educativa-adorno" alt="Adorno Oferta Educativa">
                    La baremación de solicitudes se hará siguiendo los criterios de baremación del siguiente <a href="http://www.ieslosviveros.es/?mode=aW5jbHVpcj0vdjIvbm90aWNpYXNfc2VjcmV0YXJpYS5waHA/bm90aWNpYTE9OTA3" target="_blank">enlace</a>.
                </li>
            </ul>
        </div>
        <div class="col col-12 col-lg-6 p-2">
            <div class="grey-bg">
                <p>Transporte Sanitario</p>
                <ul class="nodot">
                    <li>Código: SANT0208</li>
                    <li>
                        <img src="<?php echo get_site_url();?>/img/oferta_educativa_adorno.png" class="oferta-educativa-adorno" alt="Adorno Oferta Educativa">
                        Duración: 560 horas
                    </li>
                </ul>
            </div>
        </div>
        <div class="col col-12 col-lg-6 p-2">
            <div class="grey-bg">
                <p>Organización del Transporte y la Distribución</p>
                <ul class="nodot">
                    <li>Código: COML0209</li>
                    <li>
                        <img src="<?php echo get_site_url();?>/img/oferta_educativa_adorno.png" class="oferta-educativa-adorno" alt="Adorno Oferta Educativa">
                        Duración: 420 horas
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <?php get_template_part( 'global-templates/contactform' ); ?>

</div><!-- #full-width-page-wrapper -->

<?php

    get_footer();
