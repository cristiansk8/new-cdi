<?php
/*
*/
  $produccion_info = get_field('produccion_info');
 ?>
 <section id="produccion">
   <div class="container-fluid produccion">
     <div class="row">
       <div class="col-md-6 info">
            <?php echo $produccion_info; ?>
       </div>
       <div class="col-md-6 imagenes">
         <?php
          while (have_rows('produccion_img')): the_row();
           $imagen = get_sub_field('img');

         ?>
         <div class="imagen-item">
           <img src="<?php echo $imagen; ?>" alt="" width="100%" height="auto">
         </div>
       <?php endwhile; ?>
       </div>
     </div>



   </div>
 </section>
