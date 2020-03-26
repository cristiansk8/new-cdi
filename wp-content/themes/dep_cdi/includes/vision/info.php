<?php
/*
	Campos
	- info
  - carrusel

*/
  $informacion= get_field('informacion');
  $informacion_oculto= get_field('informacion_oculto');
  $banner_final= get_field('banner_final_vision');
 ?>
 <section id="informacion">
   <div class="informacion">
     <?php echo $informacion; ?>
   </div>
   <div class="informacion-oculto">
     <?php echo $informacion_oculto; ?>
   </div>
   <div class="banner-final">
     <img src="<?php echo $banner_final; ?>" alt="" width="100%" height="auto">
   </div>

 </section>
