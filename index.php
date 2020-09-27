<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|PT+Sans:400,700" rel="stylesheet">
	<title>Blog Cafe</title>
</head>
<body>

	<!--============================
	=            HEADER            =
	=============================-->
	<header class="site-header">
		<div class="contenedor">
			<div class="barra">
				<a href="/">
					<h1 class="no-margin">Blog<span>DeCafé</span></h1>
				</a>
				<nav class="navegacion">
					<a href="nosotros.php">Nosotros</a>
					<a href="cursos.php">Cursos</a>
					<a href="contacto.php">Contacto</a>
				</nav>
			</div><!--End barra-->
			<div class="texto-header">
				<h2 class="no-margin">Blog de Café con consejos y cursos</h2>
				<p class="no-margin">Lorem ipsum dolor sit amet consectetur, adipisicing elit. In doloribus, molestias sequi corrupti et, aliquam labore unde velit sit, qui, iste accusamus! Sequi deleniti nemo voluptatibus amet fugit architecto praesentium.</p>
			</div>
		</div><!--End contenedor-->
	</header>
	<!--====  End of HEADER  ====-->

	<!--=========================================
	=            Contenido-Principal            =
	==========================================-->
	<div class="contenido-principal contenido">
		<main class="blog">
			<h2>Nuestro Blog</h2>
			<!--Article-->
			<article class="entrada-blog">
				<div class="imagen">
					<img src="img/blog1.jpg" alt="Imagen blog">
				</div>
				<div class="contenido-blog">
					<h3>Tipos de grano de café</h3>
					<p>Lorem, ipsum dolor sit, amet consectetur adipisicing elit. Pariatur libero dolores eaque officia quibusdam impedit. Quasi officia optio expedita odio iure nam cumque velit, temporibus sit tempora fugit impedit recusandae?</p>
					<a href="entrada.php" class="btn btn-primario">Leer entrada</a>
				</div>
			</article>
			<!--Article-->
			<article class="entrada-blog">
				<div class="imagen">
					<img src="img/blog2.jpg" alt="Imagen blog">
				</div>
				<div class="contenido-blog">
					<h3>3 Deliciosas recetas para café</h3>
					<p>Lorem, ipsum dolor sit, amet consectetur adipisicing elit. Pariatur libero dolores eaque officia quibusdam impedit. Quasi officia optio expedita odio iure nam cumque velit, temporibus sit tempora fugit impedit recusandae?</p>
					<a href="entrada.php" class="btn btn-primario">Leer entrada</a>
				</div>
			</article>
			<!--Article-->
			<article class="entrada-blog">
				<div class="imagen">
					<img src="img/blog3.jpg" alt="Imagen blog">
				</div>
				<div class="contenido-blog">
					<h3>Beneficios del café</h3>
					<p>Lorem, ipsum dolor sit, amet consectetur adipisicing elit. Pariatur libero dolores eaque officia quibusdam impedit. Quasi officia optio expedita odio iure nam cumque velit, temporibus sit tempora fugit impedit recusandae?</p>
					<a href="entrada.php" class="btn btn-primario">Leer entrada</a>
				</div>
			</article>
		</main>
		<!--Aside cursos-->
		<aside class="cursos">
			<h2>Nuestros cursos y talleres</h2>
			<ul class="cursos-lista">
				<!--Curso-->
				<li class="curso">
					<h4>Tecnicas de extraccion de café</h4>
					<p>Precio: <span>Gratis</span></p>
					<p>Cupo: <span>20</span></p>
					<a href="cursos.php" class="btn btn-secundario">Más información</a>
				</li>
				<!--Curso-->
				<li class="curso">
					<h4>4 Recetas de cafe para principiantes</h4>
					<p>Precio: <span>Gratis</span></p>
					<p>Cupo: <span>20</span></p>
					<a href="cursos.php" class="btn btn-secundario">Más información</a>
				</li>
			</ul>
		</aside>
	</div>
	
	
	<!--====  End of Contenido-Principal  ====-->
	
	
	
</body>
</html>