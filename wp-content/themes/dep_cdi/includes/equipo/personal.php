 <section id="personal">
   <header>
     <h2>Nuestro Personal Senior</h2>
   </header>
   <div class="personal">

     <?php
      while (have_rows('equipo')): the_row();
       $foto = get_sub_field('foto');
       $titulo = get_sub_field('titulo');

     ?>
     <div class="personal-item">

       <div class="titulo">
        <img src="<?php echo $foto; ?>" alt="">
        <div class="info">
          <div class="icono">
            <img src="<?php echo bloginfo('template_url')?>/img/icono-destacado.png" alt="">
          </div>
          <div class="contenido">
            <p><?php echo $titulo; ?></p>
          </div>
        </div>


       </div>
     </div>
   <?php endwhile; ?>
   </div>

 </section>
