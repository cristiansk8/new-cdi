<?php
/*
	Campos Banner
	- imagen_fondo
  - titulo

*/

 ?>
 <section id="banner-home">
   <div class="banner-home">

   </div>
   <?php
    while (have_rows('banner_home')): the_row();
     $imagen_fondo = get_sub_field('imagen_fondo');
     $titulo = get_sub_field('titulo');

   ?>
   <div class="banner-home-item">
     <img src="<?php echo $imagen_fondo; ?>" alt="" width="100%" height="auto">
   </div>
 <?php endwhile; ?>
 </section>


https://www.cumbrera.co/documentos-covid/Formato1.xlsx
