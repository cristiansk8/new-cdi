<?php
/*
	Campos
	- info

*/
  $servicios= get_field('servicios');
 ?>
 <section id="servicios">
   <div class="titulo text-center">

     <?php if(ICL_LANGUAGE_CODE=='es'): ?>
     <h2>La experiencia CDI y la oferta de servicio incluyen</h2>
  <?php else:?>
     <h2>CDI experience and service offering include</h2>
  <?php endif; ?>
   </div>
   <div class="servicios">
     <?php echo $servicios; ?>

   </div>

 </section>
