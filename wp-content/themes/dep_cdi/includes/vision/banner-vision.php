<?php
/*
	Campos Banner
	- imagen_fondo
  - titulo

*/

 ?>
 <section id="banner-vision">
   <div class="banner-vision">

   </div>
   <?php
    while (have_rows('banner_vision')): the_row();
     $imagen_fondo = get_sub_field('imagen_fondo');
     $titulo = get_sub_field('titulo');

   ?>
   <div class="banner-vision-item">
     <img src="<?php echo $imagen_fondo; ?>" alt="" width="100%" height="auto">
   </div>
 <?php endwhile; ?>
 </section>
