<section id="contacto">
  <?php
   while (have_rows('banner1')): the_row();
    $imagen_fondo = get_sub_field('imagen_fondo');
    $titulo = get_sub_field('titulo');

  ?>
  <div class="banner-contacto" style="background-image:url(<?php echo $imagen_fondo; ?>)">
    <div class="titulo">
      <h1><?php echo $titulo; ?></h1>
    </div>
  </div>
<?php endwhile; ?>
  <div class="icono">
    <img src="<?php echo bloginfo('template_url')?>/img/contact-icon_opt.png" alt="">
    <header>
      <h2>Contáctenos</h2>
    </header>

  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="formulario--form">
          <div class="formulario-form__wrapper ">
            <?php echo do_shortcode('[contact-form-7 id="7" title="Contact form 1"]'); ?>
          </div>
        </div>
      </div>
      <div class="col-md-6">

      </div>
    </div>
  </div>
</section>
