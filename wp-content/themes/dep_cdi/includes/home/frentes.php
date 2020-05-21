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
       $url = get_sub_field('url_destino');

     ?>
     <div class="frentes-item">
       <div class="titulo">
         <a href="<?php echo $url; ?>"> <img src="<?php echo $icono; ?>" alt=""></a>
       </div>
       <div class="texto">
         <a href="<?php echo $url; ?>"><p><?php echo $titulo; ?></p></a>
       </div>
     </div>
   <?php endwhile; ?>
   </div>

 </section>
