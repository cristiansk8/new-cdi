<?php
/*
	Campos
	- info

*/
  $servicios= get_field('servicios');
 ?>
 <section id="servicios">
   <div class="titulo text-center">
     <h2>La experiencia CDI y la oferta de servicio incluyen</h2>
   </div>
   <div class="servicios">
     <?php echo $servicios; ?>

   </div>

 </section>
