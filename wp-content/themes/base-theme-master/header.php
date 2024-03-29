<!doctype html>
	<head>
		<meta charset="utf-8">
		<title><?php print_title(); ?></title>
		<link rel="shortcut icon" href="<?php echo THEMEPATH; ?>images/favicon.ico">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="cleartype" content="on">
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<?php wp_head(); ?>
	</head>

	<body>
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->
		<div class="container">
			<header>
				<a href="index.php"><img id="logo" src="<?php echo THEMEPATH; ?>images/album_logo.png"></a>
				<nav id="idioma"><a href="">ENG</a></nav>
				<nav class="textoNav">
					<ul>
						<li id="temasArtistas"><a href="wp-content/themes/base-theme-master/singlePieza.php" id="temasB">Temas</a> / <a href="" id="ArtistasB">Artistas</a></li>
						<li id="noticias" class="escondido"><a href="">Noticias</a></li>
						<li><a href="">Suscribirse</a> / <a href="">Entrar</a></li>
						<li><a href="">Acerca de</a></li>
						<li id="buscar"><a href="" id="buscarB">Buscar</a></li>
					</ul>

					<form id="buscarForma" class="escondido"><input type="text" value="Buscar"></form>

				</nav>
			</header>
