<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Descrição do meu website">
	<meta name="keywords" content="palvras,chave,do,meu,site">
	<title>Rafael Papa - Portifólio</title>
	<script src="https://kit.fontawesome.com/7310d1c7d2.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH; ?>estilo/style.css"/>
</head>
<body>

	<?php 
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';
		switch ($url) {
			case 'sobre':
				echo '<target target="sobre" />';
				break;

			case 'servicos':
				echo '<target target="servicos" />';
				break;
		}
	?>
	<header>
		<div class="center">
			<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
			<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
			<div class="simbolo"><i style="padding:0 10px;" class="fas fa-road left"></i></div>
			<div class="logo left"><a href="/"><h3>Open Road Tech</h3></a></div>
			<nav class="desktop right">
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav><!--desktop-->
			<nav class="mobile right">
				<div class="botao-menu-mobile">
					<i class="fas fa-bars"></i>
				</div>
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav><!--mobile-->
			<div class="clear"></div><!--necessário quando utilizamos float(right, left)-->
		</div><!--center-->
	</header>

	<?php
		if (file_exists('pages/'.$url.'.php')) {
			include('pages/'.$url.'.php');
		}else{
			if ($url != 'sobre' && $url != 'servicos') {
				$pagina404 = true;
				include('pages/404.php');
			}else{
				include('pages/home.php');
			}
		}
	?>
	
	<footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
		<div class="center">
		<p><i style="padding:0 5px;" class="far fa-copyright"></i>2021 Todos os direitos reservados</p>
		</div><!--center-->
	</footer>
	<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
	<?php 
		if($url == 'home' || $url == ''){
	?>
	<script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
	<?php } ?>
	<?php 
		if($url == 'contato'){
	?>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBg45KBJienKkjLs1oKkhuwCHgCL49Kk-I"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
	<?php } ?>
</body>
</html>