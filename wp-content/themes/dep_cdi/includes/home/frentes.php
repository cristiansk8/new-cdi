<?php
/*
	Campos Frentes
	- imagen_fondo
  - titulo

*/

 ?>
 <section id="frentes">
   <div class="frentes">
     <?php
      while (have_rows('iconos')): the_row();
       $icono = get_sub_field('icono');
       $titulo = get_sub_field('titulo');

     ?>
     <div class="frentes-item">
       <div class="titulo">
         <img src="<?php echo $icono; ?>" alt="">
         <p><?php echo $titulo; ?></p>
       </div>
     </div>
   <?php endwhile; ?>
   </div>

 </section>
