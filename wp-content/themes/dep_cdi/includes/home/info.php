<?php
/*
	Campos
	- info
  - carrusel

*/
  $informacion= get_field('info');
 ?>
 <section id="informacion">
   <div class="informacion">
     <?php echo $informacion; ?>
   </div>
   <div class="carrusel">
     <?php
      while (have_rows('carrusel')): the_row();
       $imagen = get_sub_field('imagen');

     ?>
     <div class="carrusel--item">
       <img src="<?php echo $imagen;; ?>" alt="">
     </div>
   <?php endwhile; ?>
   </div>
 </section>
