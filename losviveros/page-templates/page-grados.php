<?php
/**
 * Template Name: Page - Grados
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

<div class="wrapper formacion">

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
        <div class="row py-4 my-4 info">
            <div class="col col-12">
                <?php if(get_field('nombre_corto_grado')) : ?>
                    <h2>Todo sobre <?php the_field('nombre_corto_grado'); ?></h2>
                <?php endif; ?>
                <?php if(get_field('actividad_profesional')) : ?>
                    <p><?php the_field('actividad_profesional'); ?></p>
                <?php endif; ?>
                <div class="grey-bg">
                    <?php if(get_field('vas_a_aprender')) : ?>
                        <p>¿Qué vas a aprender?</p>
                        <ul class="nodot">
                        <?php 
			                $text_area = get_field('vas_a_aprender');
                            $text_area_arr = explode("\n", $text_area);
                            $text_area_arr = array_map('trim', $text_area_arr);
                            foreach ($text_area_arr as $aprender) : ?>
                                <li>
                                    <p><img src="<?php echo get_site_url();?>/img/oferta_educativa_adorno.png" class="oferta-educativa-adorno" alt="Adorno Oferta Educativa">
                                    <?php echo $aprender; ?>
                                    </p>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <img src="<?php echo get_site_url();?>/img/grado_greybg_bot.png" id="fill-grado-greybg" alt="Adorno Grey Bg">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row py-4 salidas">
            <div class="col col-12 col-lg-6 p-0">
                <?php if(get_field('imagen_grado')) : ?>
                    <img src="<?php the_field('imagen_grado'); ?>" class="img-responsive">
                <?php endif; ?>
            </div>
            <div class="col col-12 col-lg-6 yellow-bg">
                <div class="over">
                    <?php if(get_field('salidas_profesionales')) : ?>
                        <label>Salidas Profesionales</label>
                        <ul class="list-unstyled">
                        <?php 
			                $text_area = get_field('salidas_profesionales');
                            $text_area_arr = explode("\n", $text_area);
                            $text_area_arr = array_map('trim', $text_area_arr);
                            foreach ($text_area_arr as $salida) : ?>
                                <li><?php echo $salida; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <img src="<?php echo get_site_url();?>/img/formacion_yellow_adorno.png" alt="Adorno formacion" class="img-responsive">
            </div>
        </div>
        
        <?php if(get_field('video')) : ?>
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

                <iframe class="w-100" height="450" src="https://www.youtube.com/embed/<?php echo $video_final; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <?php if(get_field('descripcion_del_video')) : ?>
                    <div class="col col-12 col-lg-6">
                        <p class="p-4"><?php the_field('descripcion_del_video'); ?></p>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
	</div><!-- #content -->

    <div class="container plan-formacion">
        <div class="row py-4">
            <div class="col col-12">
                <?php if(get_field('plan_de_formacion')) : ?>
                    <h2>Plan de Formación</h2>
                    <p><?php the_field('plan_de_formacion'); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row py-4 grey-bg mb-5">

        <?php 
            global $paged;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => get_field('custom_post_type'),
                'curso' => 1,
                'posts_per_page' => 24,
                'meta_query'=> array(
                    array(
                      'key' => 'curso',
                      'compare' => '=',
                      'value' => 1,
    
                    )
                ),
                'paged' => $paged,
                'orderby' => 'date',
                'order' => 'ASC'
            ); 

            $query = new WP_Query( $args );
            if($query->have_posts()) : ?>
                <div class="col col-12 col-lg-6">
                    <h3>Primer Curso</h3>
                    <div class="bg-primary">
                <?php
                    while($query->have_posts()) : 
                        $query->the_post();
                ?>
                        
                        <div class="col col-12 py-4">
                            <div class="programa">
                                <h4><?php echo get_the_title(); ?></h4>
                                <?php if(get_field('profesor-a')) : ?>
                                    <h5>Profesor/a:</h5>
                                    <?php 
                                        $text_area = get_field('profesor-a');
                                        $text_area_arr = explode("\n", $text_area);
                                        $text_area_arr = array_map('trim', $text_area_arr);
                                        foreach ($text_area_arr as $profe) : ?>
                                            <p><?php echo $profe; ?></p>
                                        <?php endforeach; 
                                    ?>
                                <?php endif; ?>
                                <?php if(get_field('correo')) : ?>
                                    <?php 
                                        $text_area = get_field('correo');
                                        $text_area_arr = explode("\n", $text_area);
                                        $text_area_arr = array_map('trim', $text_area_arr);
                                        foreach ($text_area_arr as $mail) : ?>
                                            <p><a class="mail" href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a></p>
                                        <?php endforeach; 
                                    ?>
                                <?php endif; ?>
                                <?php $programa = get_field('programa'); ?>
                                <?php if($programa): ?>
                                    <a href="<?php echo $programa['url']; ?>" download class="download-programa">Programa</a>
                                <?php endif; ?>
                            </div>
                        </div>
            <?php 
                    endwhile;
                    wp_reset_postdata();
                endif;
            ?>
                    </div>
                </div>
        <?php 
            global $paged;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => get_field('custom_post_type'),
                'curso' => 2,
                'posts_per_page' => 24,
                'meta_query'=> array(
                    array(
                      'key' => 'curso',
                      'compare' => '=',
                      'value' => 2,
    
                    )
                ),
                'paged' => $paged,
                'orderby' => 'date',
                'order' => 'ASC'
            ); 

            $query = new WP_Query( $args );
            if($query->have_posts()) : ?>
                <div class="col col-12 col-lg-6 mt-xs-3">
                    <h3>Segundo Curso</h3>
                    <div class="bg-primary">
                <?php
                    while($query->have_posts()) : 
                        $query->the_post(); 
                ?>
                        
                        <div class="col col-12 py-4">
                            <div class="programa">
                                <h4><?php echo get_the_title(); ?></h4>
                                <?php if(get_field('profesor-a')) : ?>
                                    <h5>Profesor/a:</h5>
                                    <?php 
                                        $text_area = get_field('profesor-a');
                                        $text_area_arr = explode("\n", $text_area);
                                        $text_area_arr = array_map('trim', $text_area_arr);
                                        foreach ($text_area_arr as $profe) : ?>
                                            <p><?php echo $profe; ?></p>
                                        <?php endforeach; 
                                    ?>
                                <?php endif; ?>
                                <?php if(get_field('correo')) : ?>
                                    <?php 
                                        $text_area = get_field('correo');
                                        $text_area_arr = explode("\n", $text_area);
                                        $text_area_arr = array_map('trim', $text_area_arr);
                                        foreach ($text_area_arr as $mail) : ?>
                                            <p><a class="mail" href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a></p>
                                        <?php endforeach; 
                                    ?>
                                <?php endif; ?>
                                <?php $programa = get_field('programa'); ?>
                                <?php if($programa): ?>
                                    <a href="<?php echo $programa['url']; ?>" download class="download-programa">Programa</a>
                                <?php endif; ?>
                            </div>
                        </div>
            <?php 
                    endwhile;
                    wp_reset_postdata();
                endif;
            ?>
                </div>
            </div>
        </div>
    </div>

    <?php masterslider("ms-4"); ?>

    <?php get_template_part( 'global-templates/contactform' ); ?>
     

</div><!-- #full-width-page-wrapper -->

<?php
    get_footer();
