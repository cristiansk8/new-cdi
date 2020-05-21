<?php
/*
	Campos
	- info
  - carrusel

*/
  $informacion= get_field('info');
  $banner_final= get_field('banner_final');
 ?>
 <section id="informacion">
   <div class="informacion">
     <?php echo $informacion; ?>
   </div>
   <div class="banner-final">
     <img src="<?php echo $banner_final; ?>" alt="" width="100%" height="auto">
   </div>

 </section>
