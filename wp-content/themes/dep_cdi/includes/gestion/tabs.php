<?php
/*
	Campos
  categorias_de_evaluacion (field_repeater)
    -titulo_categoria
    -infografia
    -descripcion


*/
	$categorias_de_evaluacion= get_field('categorias_de_evaluacion');


	?>
  <section id="categorias">
    <div class="categorias">

		<div class="categorias__wrapper ">
			<ul class="nav nav-pills categorias__wrapper-pills">
				<?php
				 $cont=0;
					while(have_rows('servicios_tabs')): the_row();
          $titulo = get_sub_field('titulo');

					$cont++;
				?>
				<?php if ($cont==1): ?>

				 <li class="active <?php echo $titulo; ?>"><a data-toggle="pill" href="#menu<?php echo $cont ?> "><?php echo $titulo;; ?></a></li>

			 <?php else: ?>
				<li><a data-toggle="pill" href="#menu<?php echo $cont; ?>"><?php echo $titulo; ?></a></li>
				<?php
				 endif;
				?>
				<?php
					endwhile;
				?>
			</ul>
			<!--Tab body-->
			<div class="tab-content categorias__wrapper-tabs">

				<?php
				$cont=0;
				$active='in active';
				while(have_rows('servicios_tabs')): the_row();
          $titulo = get_sub_field('titulo');
					$icono = get_sub_field('icono');
					$informacion= get_sub_field('informacion');
					$cont++;
				?>
	 			 <?php if ($cont==1): ?>
	 			 <div id="menu<?php echo $cont;  ?>" class="tab-pane fade  <?php echo $active; ?>">
					 <div class="categorias__wrapper-tabs__item categoria-item <?php the_sub_field('titulo'); ?>">
             <div class="categoria-titulo">
               <h1><?php echo $titulo; ?></h1>
             </div>
						 <div class="categoria-infografia">
							 <figure>
									<img src="<?php echo $icono; ?>" alt="">
							 </figure>
						 </div>
						 <div class="categoria-info">
						 	<?php echo $informacion; ?>
						 </div>
					 </div>
	 			 </div>
	 			 <?php else: ?>
	 			 <div id="menu<?php echo $cont;  ?>" class="tab-pane fade ">

					<div class="categorias__wrapper-tabs__item categoria-item <?php the_sub_field('titulo_categoria'); ?>">
            <div class="categoria-titulo">
              <h1><?php echo $titulo; ?></h1>
            </div>
						<div class="categoria-infografia">
							<figure>
								<img src="<?php echo $icono; ?>" alt="">
							</figure>
						</div>
						<div class="categoria-info">
							<?php echo $informacion; ?>
						</div>
					</div>
	 			 </div>
	 			 <?php
	 				endif;
	 			 ?>
	 			 <?php
	 				endwhile;
	 			 ?>

	 		</div>

		</div>

    </div>
  </section>
