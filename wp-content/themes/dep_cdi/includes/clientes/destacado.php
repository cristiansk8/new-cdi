<?php
/*
	Campos Destacado
	- destacado

*/
  $info_destacado = get_field('destacado');
 ?>
 <section id="destacado">
   <div class="destacado">
     <div class="icono">
            <img src="<?php echo bloginfo('template_url')?>/img/icono-destacado.png" alt="">
     </div>
     <div class="contenido">
            <p><?php echo $info_destacado; ?></p>
     </div>

   </div>
 </section>
