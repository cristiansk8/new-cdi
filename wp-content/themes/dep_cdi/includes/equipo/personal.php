

 <section id="personal">
   <header>
     <?php if(ICL_LANGUAGE_CODE=='es'): ?>
       <h2>Nuestro Personal Senior</h2>
  <?php else:?>
     <h2>Our Senior Staff</h2>
  <?php endif; ?>
     
   </header>
   <div class="personal">

     <?php
     $cont=0;
      while (have_rows('equipo_senior')): the_row();
       $foto = get_sub_field('foto');
       $nombre = get_sub_field('nombre');
       $cargo = get_sub_field('cargo');
       $informacion = get_sub_field('informacion');
       $cont++;
     ?>
     <div class="personal-item">
       <div id="inline<?php echo $cont; ?>" class="" style="display:none;width:80%;">
        <div class="popup">
          <h2><?php echo $nombre; ?></h2>
          <h2> <span><?php echo $cargo; ?></span> </h2>
          <hr>
          <a class="close" href="#">&times;</a>
          <div class="content row">
            <div class="foto col-md-3">
            <img src="<?php echo $foto; ?>" alt="" width="100%" height="auto">
            </div>
            <div class="descripcion col-md-9">
              <?php echo $informacion; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="equipo--item">
        <a class="fancyOther" data-fancybox="images" href="#inline<?php echo $cont; ?>" data-fancybox="gallery">
          <div class="equipo--caption">
            <div class="imagen">
              <img src="<?php echo $foto; ?>" alt="">
            </div>

            <div class="nombre">
                <h3><?php echo $nombre; ?></h3>
            </div>
            <div class="cargo">
                <h3><?php echo $cargo; ?></h3>
            </div>

          </div>
        </a>
      </div>
     </div>
   <?php endwhile; ?>
   </div>

 </section>
