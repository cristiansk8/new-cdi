<?php
$colombia_equipo= get_field('forest');
$imagen = get_field('imagen_equipo');
 ?>

<section id="colombia">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <header>
          <h2>Nuestro Equipo de Manejo Forestal en Colombia</h2>
        </header>
      </div>
      <div class="col-md-4">

      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row colombia">
      <div class="col-md-8">
        <?php echo $colombia_equipo; ?>
      </div>
      <div class="col-md-4">
        <img src="<?php echo $imagen; ?>" alt="" width="100%" height="auto">
      </div>
    </div>
  </div>

</section>
