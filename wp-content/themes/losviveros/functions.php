<?php
/**
 * UnderStrap functions and definitions
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// UnderStrap's includes directory.
$understrap_inc_dir = 'inc';

// Array of files to include.
$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/block-editor.php',                    // Load Block Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$understrap_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $understrap_includes as $file ) {
	require_once get_theme_file_path( $understrap_inc_dir . $file );
}

//Include custom css

add_action( 'wp_enqueue_scripts', 'custom_enqueue_styles');

function custom_enqueue_styles() {
	wp_enqueue_style( 'custom-style', 
					  get_stylesheet_directory_uri() . '/css/custom.css', 
					  array(), 
					  wp_get_theme()->get('Version')
					);
}

add_action('wp_enqueue_scripts', 'tutsplus_enqueue_custom_js');

function tutsplus_enqueue_custom_js() {
    wp_enqueue_script('custom', get_stylesheet_directory_uri().'/js/custom.js');
}

function my_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            width: auto !important;
            background-image: url("<?php echo get_site_url();?>/img/losviveros_login.png") !important;
            background-size: auto !important;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function incrustar_formulario_contacto() { ?>

    <div class="container my-5" id="formulario">
		<div class="row">
			<img src="<?php echo get_site_url();?>/img/formulario_top.png" class="formulario-top" alt="Adorno formulario top">
			<div class="col col-12 col-lg-6 over">
				<h4>Contáctanos</h4>
				<p>Puedes comunicar con el personal del centro a partir de estos medios:</p>
				<ul class="nodot">
					<li>Avenida Blas Infante, 16 · 41011 (Sevilla)</li>
					<li><a href="tel:+34955623862">+34 955 623 862</a></li>
					<li><a href="mailto:comunicacion@cpifplosviveros.es">comunicacion@cpifplosviveros.es</a></li>
				</ul>
			</div>
			<div class="col col-12 col-lg-6">
				<?php echo do_shortcode('[contact-form-7 id="11" title="Formulario de contacto"]'); ?>
			</div>
			<img src="<?php echo get_site_url();?>/img/fill_contactform.png" class="formulario-fill" alt="Adorno formulario sol">
			<img src="<?php echo get_site_url();?>/img/formulario_bottom.png" class="formulario-bottom" alt="Adorno formulario bottom">
		</div>
	</div>

<?php }
add_shortcode( 'add_contacto', 'incrustar_formulario_contacto'); 

function incrustar_formulario_contacto_diop() { ?>

    <div class="container my-5" id="formulario">
		<div class="row">
			<img src="<?php echo get_site_url();?>/img/formulario_top.png" class="formulario-top" alt="Adorno formulario top">
			<div class="col col-12 col-lg-6 over">
				<h4>Contáctanos</h4>
				<p>Puedes comunicar con el departamento de información y orientación profesional del centro a partir de estos medios:</p>
				<ul class="nodot">
					<li>Avenida Blas Infante, 16 · 41011 (Sevilla)</li>
					<li><a href="tel:+34955623862">+34 955 623 862</a></li>
					<li><a href="mailto:diop@cpifplosviveros.es">diop@cpifplosviveros.es</a></li>
				</ul>
			</div>
			<div class="col col-12 col-lg-6">
				<?php echo do_shortcode('[contact-form-7 id="1363" title="Formulario de contacto para diop"]'); ?>
			</div>
			<img src="<?php echo get_site_url();?>/img/fill_contactform.png" class="formulario-fill" alt="Adorno formulario sol">
			<img src="<?php echo get_site_url();?>/img/formulario_bottom.png" class="formulario-bottom" alt="Adorno formulario bottom">
		</div>
	</div>

<?php }
add_shortcode( 'add_contacto_diop', 'incrustar_formulario_contacto_diop'); 

function eliminar_tildes($cadena){

    //Ahora reemplazamos las letras
    $cadena = str_replace(
        array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
        array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
        $cadena
    );

    $cadena = str_replace(
        array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
        array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
        $cadena );

    $cadena = str_replace(
        array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
        array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
        $cadena );

    $cadena = str_replace(
        array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
        array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
        $cadena );

    $cadena = str_replace(
        array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
        array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
        $cadena );

    $cadena = str_replace(
        array('ñ', 'Ñ', 'ç', 'Ç'),
        array('n', 'N', 'c', 'C'),
        $cadena
    );

    return $cadena;
}