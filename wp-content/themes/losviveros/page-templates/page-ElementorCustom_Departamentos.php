<?php
/**
 * Template Name: Elementor Custom Departamentos Page Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
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

<div class="wrapper custom-template">

	<div class="container" id="content">

		<div class="row my-4">
		
			<div class="col col-md-12 content-area" id="primary">
	
			
				<?php the_content(); ?>
			</div>

		</div>

	</div>

	<div class="container noticias">
        <div class="row">
            <div class="col col-12">
                <h2>Noticias y Actualidad</h2>
				<span class="underline"></span>
                <p>Conoce la información de última hora relacionado con el <?php echo get_the_title(); ?>.</p>
            </div>
            <?php if(get_field('tipo_noticia')) :
                global $noticia;
                $noticia = get_field('tipo_noticia');
                global $paged;
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'noticia',
                    'posts_per_page' => 6,
                    'paged' => $paged,
                    'meta_query'=> array(
                        array(
                            'key' => 'departamento',
                            'compare' => 'LIKE',
                            'value' => get_field('tipo_noticia'),
        
                        )
                    ),
                    'orderby' => 'date',
                    'order' => 'DESC'
                ); ?>
        
                <?php
                $query = new WP_Query( $args );
                if($query->have_posts()) : 
                    while($query->have_posts()) : 
                        $query->the_post(); ?>
                            <div class="col col-12 col-lg-6 mt-xs-2 mt-3">
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
                    <?php endwhile;

                else : ?>
                <div class="col col-12">
                    <h3>No hay noticias actualmente para el departamento</h3>
                </div> 
                <?php 
                wp_reset_postdata();
                endif;

                understrap_pagination( [
                    'current' => $paged,
                    'total'   => $query->max_num_pages,
                ] );   
                ?>
            <?php else : ?>
                <h3>No hay noticias actualmente para el departamento.</h3>
            <?php endif; ?>
        </div>
    </div>

    <?php if(strcmp($noticia, "diop") == 0) : ?>
        <?php get_template_part( 'global-templates/contactform_diop' ); ?>               
    <?php else: ?>
        <?php get_template_part( 'global-templates/contactform' ); ?>
    <?php endif; ?>
</div>

<?php get_footer();
