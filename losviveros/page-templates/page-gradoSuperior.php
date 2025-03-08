<?php
/**
 * Template Name: Page - Grado Superior
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

<div class="wrapper" id="grado-superior">

	<div class="container-fluid" id="content">

		<div class="row my-4">

			<div class="col col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">
                    <div class="container">
                        <div class="row">
                            <div class="col col-12">
                                <h1>Ciclos Formativos de Grado Superior</h1>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <img src="<?php echo get_site_url();?>/img/formulario_top.png" class="adorno-top" alt="Adorno grado top">
                        <?php masterslider("ms-28"); ?>
                        <img src="<?php echo get_site_url();?>/img/formulario_bottom.png" class="adorno-bottom" alt="Adorno grado bottom">
                    </div>
				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->
    </div>
    <div class="container">

        <div class="row my-4">
            <div class="col col-12 my-2">
                <p>Conoce el tipo de formación profesional que se adapta a lo que te motiva. Aquí tienes toda la información de las profesiones que desarrollamos en el CPIFP Los Viveros de Sevilla.</p>
            </div>
        </div>

        <div class="row py-4">
        <?php
            $args = array(
                'orderby' => 'date',
                'order' => 'ASC',
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
                    if(get_field('tipo_grado') == 'gradoS') : 
                ?>  
                    <div class="col col-12 col-lg-3 grado">
                        <a href="<?php the_permalink(); ?>">
                            <div class="overflow">
                                <?php the_post_thumbnail('long w-100'); ?>
                            </div>
                            <?php /* if(get_field('tipo_grado')) : ?>
                                <h3><?php the_field('tipo_grado'); ?></h3>
                            <?php endif; */ ?>
                            <h4><?php the_title(); ?></h4>
                        </a>
                        <?php $dual = get_field('dual_distancia'); ?>
                        <?php if($dual) : ?>
                            <ul class="nodot p-0">
                                <?php /*
                                <?php if((!in_array('tarde',$dual) && count($dual) == 1) && (!in_array('presencial',$dual) && count($dual) == 1)) : ?>
                                    <li><strong>Disponible en:</strong></li>
                                <?php endif; ?>
                                */ ?>
                                <li><strong>Disponible en:</strong></li>
                            <?php foreach ($dual as $d) : ?>
                                <?php switch($d) { 
                                    case 'tarde' : $d = 'Modalidad de Tarde'; break;
                                    case 'presencial' : $d = 'Modalidad Presencial'; break;
                                    case 'dual' : $d = 'Modalidad Dual'; break;
                                    case 'distancia' : $d = 'Modalidad Distancia'; break;
                                    case 'semi' : $d = 'Modalidad SemiPresencial'; break;
                                    case 'bilingue' : $d = 'Aula Bilingüe Ingés'; break;
                                } ?>
                                <?php /*
                                <?php if(strcmp($d, 'tarde') !== 0 && strcmp($d, 'presencial') !== 0): ?>
                                    <li>- <?php echo $d; ?></li>
                                <?php endif; ?>
                                */ ?>
                                <li>- <?php echo $d; ?></li>
                            <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                        
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

    <?php masterslider("ms-4"); ?>
    <?php get_template_part( 'global-templates/contactform' ); ?>

</div><!-- #full-width-page-wrapper -->

<?php

    get_footer();
