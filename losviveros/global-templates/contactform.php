<?php
/**
 * ContactForm
 *
 * @package Understrap
 */

?>

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

