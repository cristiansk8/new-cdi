<?php
/*
*/

 ?>
 <section id="caracteristicas">

     <div class="container-fluid caracteristicas content">
       <?php
        while (have_rows('caracteristicas')): the_row();
         $imagen = get_sub_field('imagen');
         $info = get_sub_field('info');

       ?>
       <div class="row caracteristicas-item">
         <div class="col-md-5 imagen">
            <img src="<?php echo $imagen; ?>" alt="" width="100%" height="auto">
         </div>
        <div class="col-md-7 content">
          <div class="icono">
                 <img src="<?php echo bloginfo('template_url')?>/img/icono-destacado.png" alt="">
          </div>
          <div class="info">
            <?php echo $info; ?>              
          </div>

        </div>
       </div>
     <?php endwhile; ?>
     </div>


 </section>
