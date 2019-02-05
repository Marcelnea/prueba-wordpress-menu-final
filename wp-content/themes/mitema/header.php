<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset') ?>">
<meta name="viewport" content="width=device-width, initialscale=
1">
<title><?php bloginfo('name'); ?></title>
<?php wp_head() ?>
</head>

<!-- aqui -->

<body>
	 <header>
<!-- COMIENZO NAVBAR -->
   <nav class="navbar-inverse" role="navigation">
    <div class="navbar-header">
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button>
    </div>
    <div class="navbar-collapse collapse">
     <ul class="nav navbar-nav navbar-left">
        <li><a class="left" href="#carta">CARTA</a></li>
     </ul>
     <a class="brand" >
        <img src="<?php echo get_theme_file_uri('images/marca/logo.png'); ?>" alt="" class="logo">
     </a>
     <ul class="nav navbar-nav navbar-right">
        <li><a class="right" href="#reservar">RESERVAS</a></li>
     </ul>
    </div>
     </nav>
     <!-- TERMINO NAVBAR -->

   <!-- COMIENZO BANNER -->
   <div class="banner container-fluid">
      <a class="navbar-brand" href="#">
        <img src="<?php echo get_theme_file_uri('images/sitio/pizza.jpg'); ?>" alt="" class="superior img-responsive">
      </a>
      <section class="titulares0.00">
       <h1 id="titular"> Restaurant</h1>
       <h1 id="titulo"> Il Fonti </h1>
       <h1 id="titulo2"> DI MODENA </h1>
       <h1 id="titular"> Chile </h1>
    </section>
   </div>
   <!--/. TERMINO BANNER -->
   </header>
