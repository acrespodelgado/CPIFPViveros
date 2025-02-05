<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="pre-footer">
	<div class="container">
		<div class="row">
			<div class="col col-12 col-lg-10 offset-lg-1 my-5 text-center">
				<img src="<?php echo get_site_url();?>/img/logo-junta-de-andalucia.png" class="img-responsive" alt="Junta de Andalucía">
				<img src="<?php echo get_site_url();?>/img/Logotipo_del_Ministerio_de_Educación_y_Formación_Profesional.png" class="img-responsive" alt="Ministerio de Educación y FP">
				<img src="<?php echo get_site_url();?>/img/andalucia-se-mueve.png" class="img-responsive" alt="Andalucía se Mueve">
				<img src="<?php echo get_site_url();?>/img/UE-FSE-castellano.png" class="img-responsive" alt="UE FSE Castellano">
				<?php /* <img src="<?php echo get_site_url();?>/img/logos_junta.png" class="img-responsive" alt="Junta de Andalucía"> */ ?>
			</div>
		</div>
	</div>
</div>

<div class="wrapper" id="wrapper-footer">

	<div class="container">

		<footer class="site-footer row">
			<div class="col col-12 col-lg-4 filled">
				<img src="<?php echo get_site_url();?>/img/fill_footer.png" class="fill hide-xs" alt="Adorno footer">
				<div class="over">
					<a href="<?php echo get_site_url();?>">
						<img src="<?php echo get_site_url();?>/img/logo_losviveros_footer.png" class="img-responsive" alt="Los Viveros">
					</a>
					<h6>Centro público integrado de formación profesional</h6>
					<ul class="nodot">
						<li>Avenida Blas Infante, 16 · 41011 (Sevilla)</li>
						<li><a href="tel:+34955623862">+34 955 623 862</a></li>
						<li><a href="mailto:comunicacion@cpifplosviveros.es">comunicacion@cpifplosviveros.es</a></li>
					</ul>
				</div>
			</div><!--col end -->

			<div class="col col-12 col-lg-2 mt-lg-5">
				<h7>Información</h7>
				<ul>
					<li><a href="<?php echo get_site_url();?>/politica-de-privacidad">Política de privacidad</a></li>
					<li><a href="<?php echo get_site_url();?>/aviso-legal">Aviso Legal</a></li>
					<li><a href="<?php echo get_site_url();?>/politica-de-cookies">Política de cookies</a></li>
					<li><a href="<?php echo get_site_url();?>/secretaria">Secretaría</a></li>
					<li><a href="<?php echo get_site_url();?>/proyecto-funcional">Proyecto Funcional</a></li>
					<li><a href="<?php echo get_site_url();?>/contacto">Contacto</a></li>
				</ul>
			</div><!--col end -->

			<div class="col col-12 col-lg-3 mt-lg-5">
				<h7>Oferta formativa</h7>
				<ul>
					<li><a href="<?php echo get_site_url();?>/departamento-de-administracion-y-finanzas">Administración y Finanzas</a></li>
					<li><a href="<?php echo get_site_url();?>/departamento-de-comercio-y-marketing">Comercio y Marketing</a></li>
					<li><a href="<?php echo get_site_url();?>/departamento-de-electricidad-y-electronica">Electricidad y Electrónica</a></li>
					<li><a href="<?php echo get_site_url();?>/departamento-de-mantenimiento-y-servicios-a-la-produccion">Mantenimiento y Servicios a la producción</a></li>
					<li><a href="<?php echo get_site_url();?>/departamento-de-sanidad">Sanidad</a></li>
					<li><a href="<?php echo get_site_url();?>/creacion-aula-emprendimiento-cpifp-viveros-proyecto-de-centro-entrecomp/">Aula de Emprendimiento</a></li>
				</ul>
			</div><!--col end -->

			<div class="col col-12 col-lg-3 mt-lg-5">
				<h7>Síguenos en redes</h7>
				<div class="break"></div>
				<ul class="inline-list">
					<li><a href="https://twitter.com/cpifplosviveros" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
					<li><a href="https://www.instagram.com/cpifplosviveros/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="https://www.facebook.com/CPIFPLosViverosSevilla/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
					<li><a href="https://www.youtube.com/@cpifplosviveros" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
				</ul>
			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

