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
      while (have_rows('clientes')): the_row();
       $logo = get_sub_field('logo');
       $url = get_sub_field('url_destino');

     ?>
     <div class="frentes-item">
       <div class="titulo">
         <a href="<?php echo $url; ?>"> <img src="<?php echo $logo; ?>" alt=""></a>

       </div>
     </div>
   <?php endwhile; ?>
   </div>

 </section>
