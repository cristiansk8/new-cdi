<?php
/*
	Campos Banner
	- imagen_fondo
  - titulo

*/

 ?>
 <section id="banner-equipo">
   <?php
    while (have_rows('banner_equipo')): the_row();
     $imagen_fondo = get_sub_field('imagen_fondo');
     $titulo = get_sub_field('titulo');

   ?>
   <div class="banner-home" style="background-image:url(<?php echo $imagen_fondo; ?>)">
     <div class="titulo">
       <h1><?php echo $titulo; ?></h1>
     </div>

   </div>
 <?php endwhile; ?>
 </section>
