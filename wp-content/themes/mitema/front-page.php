
<?php get_header() ?>
<!-- Contenido aquí -->


	  <!-- COMIENZO SECCION PRESENTACION -->
	  <div class="presentación container-fluid">
	  	<h1 id="h1"><strong>NUESTRO RESTAURANTE</strong></h1><br>
	  	<p>Deleita tu paladar con las frescas recetas italianas en un ambiente familiar inconfundible, que enamora al primer bocado.<br>
		También puedes hacer tus reservas al finalizar de leer nuestra página, para que asegures tu cupo para pasar un momento inolvidable para tu paladar</p>
	  </div>
	  <!-- TERMINO SECCION PRESENTACION -->


	  <!-- COMIENZO CARROUSEL RESTAURANT -->
      <div class="container-fluid fotofondo">
        <div class="row">
          <div class="col-md-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              </ol>
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="<?php echo get_theme_file_uri('images/sitio/il_fonti_di_modena.jpg'); ?>" alt="" class="img-responsive">
                  <div class="carousel-caption">
                  </div>
                </div>
                <div class="item">
                  <img src="<?php echo get_theme_file_uri('images/sitio/cenahoriz.jpeg'); ?>" alt="" class="img-responsive">
                  <div class="carousel-caption">
                  </div><!--cierre carousel-caption-->
                </div><!--cierre item-->
                <div class="item">
                  <img src="<?php echo get_theme_file_uri('images/sitio/mesashoriz.jpg'); ?>" alt="" class="img-responsive">
                  <div class="carousel-caption">
                  </div><!--cierre carousel-caption-->
                </div><!--cierre item-->
              </div> <!--cierre carousel inner-->
              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div> <!--cierre carousel example generic-->
          </div><!--cierre div col-md-12-->
        </div><!--cierre div row-->
      </div><!--cierre container fluid-->
	  <!-- TERMINO CARROUSEL RESTAURANT -->


	  <!-- COMIENZO CARTA MENU -->
	  <section>
	  	<h1 id="carta" class="menu">MENÚ</h1>
	  	<div class="container">
		  <div class="row">
		    <div class="col-sm-12 col-lg-6">
		     <div>
		      <h1 id="h1gris">ANTIPASTOS</h1>
					<!--AQUÍ COMIENZA EL CPT-->
					<?php
						$arg = array(
							'category_name' => 'ANTIPASTO',
							'post_type'		 => 'proyecto',
							'posts_per_page' => 10
						);
						$get_arg = new WP_Query( $arg );
						while ( $get_arg->have_posts() ) {
							$get_arg->the_post();
						?>

						<div class="row">
					 <div class="col-md-8">
						 <span id="h2"><strong> <?php the_field( 'titulo' ); ?> </strong></span>
					 </div>
					 <div class="col-md-4 text-right">
						 <span id="h4"><strong><?php the_field( 'precio' ); ?></strong></span>
					 </div>
					 <div class="col-md-12">
						 <span id="h3"><?php the_field( 'descripcion' ); ?></span>
					 </div>
				 </div>
				  <?php } wp_reset_postdata(); ?>

					<!--AQUÍ TERMINA EL CPT-->

		     </div>
		     <hr><!--linea divisora-->

		     <div>
		      <h1 id="h1gris">ENSALADAS</h1>
					<!--AQUÍ COMIENZA EL CPT-->
					<?php
						$arg = array(
							'category_name' => 'ENSALADAS',
							'post_type'		 => 'proyecto',
							'posts_per_page' => 10
						);
						$get_arg = new WP_Query( $arg );
						while ( $get_arg->have_posts() ) {
							$get_arg->the_post();
						?>

						<div class="row">
					 <div class="col-md-8">
						 <span id="h2"><strong> <?php the_field( 'titulo' ); ?> </strong></span>
					 </div>
					 <div class="col-md-4 text-right">
						 <span id="h4"><strong><?php the_field( 'precio' ); ?></strong></span>
					 </div>
					 <div class="col-md-12">
						 <span id="h3"><?php the_field( 'descripcion' ); ?></span>
					 </div>
				 </div>
					<?php } wp_reset_postdata(); ?>

					<!--AQUÍ TERMINA EL CPT-->
		     </div>
		     <hr><!--linea divisora-->

		     <div>
		      <h1 id="h1gris">SOPAS</h1>
					<!--AQUÍ COMIENZA EL CPT-->
					<?php
						$arg = array(
							'category_name' => 'SOPAS',
							'post_type'		 => 'proyecto',
							'posts_per_page' => 10
						);
						$get_arg = new WP_Query( $arg );
						while ( $get_arg->have_posts() ) {
							$get_arg->the_post();
						?>

						<div class="row">
					 <div class="col-md-8">
						 <span id="h2"><strong> <?php the_field( 'titulo' ); ?> </strong></span>
					 </div>
					 <div class="col-md-4 text-right">
						 <span id="h4"><strong><?php the_field( 'precio' ); ?></strong></span>
					 </div>
					 <div class="col-md-12">
						 <span id="h3"><?php the_field( 'descripcion' ); ?></span>
					 </div>
				 </div>
					<?php } wp_reset_postdata(); ?>

					<!--AQUÍ TERMINA EL CPT-->
		     </div>
		     <hr><!--linea divisora-->

		     <div>
		      <h1 id="h1gris">PIZZA TRADICIONAL</h1>
					<!--AQUÍ COMIENZA EL CPT-->
					<?php
						$arg = array(
							'category_name' => 'PIZZA TRADICIONAL',
							'post_type'		 => 'proyecto',
							'posts_per_page' => 10
						);
						$get_arg = new WP_Query( $arg );
						while ( $get_arg->have_posts() ) {
							$get_arg->the_post();
						?>

						<div class="row">
					 <div class="col-md-8">
						 <span id="h2"><strong> <?php the_field( 'titulo' ); ?> </strong></span>
					 </div>
					 <div class="col-md-4 text-right">
						 <span id="h4"><strong><?php the_field( 'precio' ); ?></strong></span>
					 </div>
					 <div class="col-md-12">
						 <span id="h3"><?php the_field( 'descripcion' ); ?></span>
					 </div>
				 </div>
					<?php } wp_reset_postdata(); ?>
					<!--AQUÍ TERMINA EL CPT-->
		    </div>
		    <hr><!--linea divisora-->
		    </div>

		    <!--COLUMNA 2-->
		    <div class="col-sm-12 col-lg-6">
		    <div>
		      <h1 id="h1gris">PIZZAS</h1>
					<!--AQUÍ COMIENZA EL CPT-->
					<?php
						$arg = array(
							'category_name' => 'PIZZAS',
							'post_type'		 => 'proyecto',
							'posts_per_page' => 10
						);
						$get_arg = new WP_Query( $arg );
						while ( $get_arg->have_posts() ) {
							$get_arg->the_post();
						?>

						<div class="row">
					 <div class="col-md-8">
						 <span id="h2"><strong> <?php the_field( 'titulo' ); ?> </strong></span>
					 </div>
					 <div class="col-md-4 text-right">
						 <span id="h4"><strong><?php the_field( 'precio' ); ?></strong></span>
					 </div>
					 <div class="col-md-12">
						 <span id="h3"><?php the_field( 'descripcion' ); ?></span>
					 </div>
				 </div>
					<?php } wp_reset_postdata(); ?>
					<!--AQUÍ TERMINA EL CPT-->
		     </div>
		    <hr><!--linea divisora-->

			<div>
		      <h1 id="h1gris">POSTRES</h1>
					<!--AQUÍ COMIENZA EL CPT-->
					<?php
						$arg = array(
							'category_name' => 'POSTRES',
							'post_type'		 => 'proyecto',
							'posts_per_page' => 10
						);
						$get_arg = new WP_Query( $arg );
						while ( $get_arg->have_posts() ) {
							$get_arg->the_post();
						?>

						<div class="row">
					 <div class="col-md-8">
						 <span id="h2"><strong> <?php the_field( 'titulo' ); ?> </strong></span>
					 </div>
					 <div class="col-md-4 text-right">
						 <span id="h4"><strong><?php the_field( 'precio' ); ?></strong></span>
					 </div>
					 <div class="col-md-12">
						 <span id="h3"><?php the_field( 'descripcion' ); ?></span>
					 </div>
				 </div>
					<?php } wp_reset_postdata(); ?>
					<!--AQUÍ TERMINA EL CPT-->
		     </div>
		     <hr><!--linea divisora-->

		     <div>
		      <h1 id="h1gris">INFUSIONES</h1>
					<!--AQUÍ COMIENZA EL CPT-->
 				 <?php
 					 $arg = array(
 						 'category_name' => 'INFUSIONES',
 						 'post_type'		 => 'proyecto',
 						 'posts_per_page' => 10
 					 );
 					 $get_arg = new WP_Query( $arg );
 					 while ( $get_arg->have_posts() ) {
 						 $get_arg->the_post();
 					 ?>

 					 <div class="row">
 					<div class="col-md-8">
 						<span id="h2"><strong> <?php the_field( 'titulo' ); ?> </strong></span>
 					</div>
 					<div class="col-md-4 text-right">
 						<span id="h4"><strong><?php the_field( 'precio' ); ?></strong></span>
 					</div>
 					<div class="col-md-12">
 						<span id="h3"><?php the_field( 'descripcion' ); ?></span>
 					</div>
 				</div>
 				 <?php } wp_reset_postdata(); ?>
 				 <!--AQUÍ TERMINA EL CPT-->
		     </div>
		     <hr><!--linea divisora-->

		     <div>
		      <h1 id="h1gris">BEBIDAS</h1>
					<!--AQUÍ COMIENZA EL CPT-->
					<?php
						$arg = array(
							'category_name' => 'BEBIDAS',
							'post_type'		 => 'proyecto',
							'posts_per_page' => 10
						);
						$get_arg = new WP_Query( $arg );
						while ( $get_arg->have_posts() ) {
							$get_arg->the_post();
						?>

						<div class="row">
					 <div class="col-md-8">
						 <span id="h2"><strong> <?php the_field( 'titulo' ); ?> </strong></span>
					 </div>
					 <div class="col-md-4 text-right">
						 <span id="h4"><strong><?php the_field( 'precio' ); ?></strong></span>
					 </div>
					 <div class="col-md-12">
						 <span id="h3"><?php the_field( 'descripcion' ); ?></span>
					 </div>
				 </div>
					<?php } wp_reset_postdata(); ?>
					<!--AQUÍ TERMINA EL CPT-->
		     </div>
		     <hr><!--linea divisora-->
		    </div>
 		  </div>
		</div>
	  </section>
	  <!-- TERMINO CARTA MENU -->

<?php get_footer() ?>
