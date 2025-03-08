<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	

	<div class="row text-center">
		<div class="col col-12 col-lg-12 mt-4">
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->
		</div>

		<div class="col col-12 col-lg-12 mt-4">
			<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
		</div>
	</div>
	<div class="row">
		<div class="col col-12 py-5">

			<div class="entry-content">
				<?php if(get_field('subtitulo')) : ?>
					<h2><?php the_field('subtitulo'); ?></h2>
				<?php endif; ?>
				<?php if(get_field('descripcion')) : ?>
					<h3><?php the_field('descripcion'); ?></h3>
				<?php endif; ?>
				<?php the_content(); ?>
			</div><!-- .entry-content -->
		
		</div>

	</div>	

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
