<!DOCTYPE HTML>

<html>
	<head>
		<title>Carlos Petit @offcarlospetit</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="images/petit.ico">
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>

    <?php
    include "webcounter.php";
    $número_accesos = visitante();
    ?>
	<style>

		ul {
			list-style: none;
			padding: 0;
		}
		li {
			padding-left: 1.3em;
		}
		li:before {
			content: "\f00c"; /* FontAwesome Unicode */
			font-family: FontAwesome;
			display: inline-block;
			margin-left: -1.3em; /* same as padding-left set on li */
			width: 1.3em; /* same as padding-left set on li */
		}

        li.normal:before {
            content: "\f0a4"; /* FontAwesome Unicode */
            font-family: FontAwesome;
            display: inline-block;
            margin-left: -1.3em; /* same as padding-left set on li */
            width: 1.3em; /* same as padding-left set on li */
        }

		li.star:before {
			content: "\f005"; /* FontAwesome Unicode */
			font-family: FontAwesome;
			display: inline-block;
			margin-left: -1.3em; /* same as padding-left set on li */
			width: 1.3em; /* same as padding-left set on li */
		}
	</style>

	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.php">Carlos <span>Petit</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="https://gitlab.com/offcarlospetit/">Proyectos</a></li>
					<!--<li><a href="elements.html">Contacto</a></li>-->
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Desarrollador de Software</h1>
						<p>"El deber de un ciudadano es no creer en ninguna profecía del futuro, sino actuar para realizar el mejor futuro posible."</p>
					</header>
					<a href="#main" class="button big scrolly">Mas sobre mi</a>
				</div>
			</section>

		<!-- Main -->
			<div id="main">

				<!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
							<!-- 2 Columns -->
								<div class="flex flex-2">
									<div class="col col1">
										<div class="image round fit">
											<a href="generic.html" class="link"><img src="images/profile.jpg" alt="" /></a>
										</div>
									</div>
									<div class="col col2">
										<h3>Me define.</h3>
										<p>Lo que hacemos es el testimonio de quiénes somos. Las personas pueden implicarse o no, pero para mi es una cuestión de respeto a los demás. No implicarse en el trabajo es sencillamente una ofensa.</p>
										<p>Hacer cada producto lo mejor posible, demostrando y llevando al limite mis capacidades. Enfocado en la forma y las herramientas. Lo que no incluimos es tan importante como lo que incluimos. La meta es clara, y no es hacer dinero. El objetivo que hay que perseguir desesperadamente es hacer el mejor producto posible. Si confías en que lo has conseguido, a la gente le gustará, lo comprará, y disfrutará usándolo.</p>
										<p>No tengo miedo de fallar. Si no fracasamos, es que no nos estamos esforzando lo suficiente. El 80% de las cosas que desarrollo en el estudio no son lo bastante buenas. Si después de haberme esforzado al máximo algo no me parece lo bastante bueno, simplemente dejo de trabajar en ello y continuo el proceso de iteración hasta obtener un producto que tenga la suficiente calidad.</p>
										<!--<a href="#" class="button">Learn More</a>-->
									</div>
								</div>
						</div>
					</section>

				<!-- Section -->
					<section class="wrapper style2">
						<div class="inner">
							<div class="flex">
								<div class="col col4">
									<h3>Habilidades: </h3>
									<ul>
										<li>Planeación y diagramación.
											<ul>
												<li>HTML5</li>
												<li>CSS3</li>
												<li>Experiencia de Usuario</li>
												<li>Responsive Design</li>
											</ul>
										</li>
										<li>Programación Front-End.
											<ul>
												<li>Javascript</li>
												<li>jQuery</li>
												<li>jQuery Mobile</li>
												<li>jQuery UI</li>
												<li>ReactJs</li>
											</ul>
										</li>
										<li>Programación Back-End.
											<ul>
												<li>PhP - Symfony2 o posterior</li>
												<li>Java - Angular Js</li>
											</ul>
										</li>
										<li>Aplicaciones Moviles.
											<ul>
												<li>iOS - Nativo</li>
												<li>React Native para plataformas iOS y Android.</li>
											</ul>
										</li>
										<li>Bases de Datos.
											<ul>
												<li>MySQL</li>
												<li>Oracle DB</li>
												<li>FireBase</li>
											</ul>
										</li>
									</ul>

									<p></p>
									<!--<a href="#" class="button">Learn More</a>-->
								</div>
								<div class="col col4">
									<h3>Certificaciones: </h3>
									<ul>
										<li class="star"><a style="color: #1b1e21; " href="certificados/apple-fullstack.pdf" target="_blank"><bold>Carrera de Apple Full Stack Developer</bold></a></li>
										<li class="star"><a style="color: #1b1e21;" href="certificados/apple-ios.pdf" target="_blank"><bold>Curso Desarrollo de Aplicaciones para iOS</bold></a></li>
										<li class="star"><a style="color: #1b1e21;" href="certificados/diploma-java-basico2.pdf" target="_blank"><bold>Curso Basico de Java SE</bold></a></li>
										<li class="star"><a style="color: #1b1e21; " href="certificados/diploma-react.pdf" target="_blank"><bold>Curso ReactJS</bold></a></li>
										<li class="star"><a style="color: #1b1e21;" href="certificados/git.pdf" target="_blank"><bold>Curso Profesional de Git y GitHub</bold></a></li>
										<li class="star"><a style="color: #1b1e21;" href="certificados/fundamentos-javascript.pdf" target="_blank"><bold>Curso Fundamentos de JavaScript</bold></a></li>
										<li class="star"><a style="color: #1b1e21;" href="certificados/marca-personal.pdf" target="_blank"><bold>Curso de Marca Personal</bold></a></li>
									</ul>

                                    <h3>Contactame: </h3>
                                    <div class="copyright">
                                        <ul class="icons">
                                            <li class="normal"><a href="mailto:ca.alberto.p@gmail.com" target="_blank" style="color:white" class="icon fa-envelope"><span class="label">Escribeme</span></a></li>
                                            <li class="normal"><a href="https://twitter.com/offcarlospetit" target="_blank" style="color:white" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                                            <li class="normal"><a href="https://www.facebook.com/devoffcarlospetit/" style="color:white" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                                            <li class="normal"><a href="https://www.instagram.com/offcarlospetit/" style="color:white" target="_blank" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                                        </ul>
                                        <!-- <p>&copy; Untitled. All rights reserved. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.</p> -->
                                    </div>

									<p></p>
									<!--<a href="#" class="button">Learn More</a>-->
								</div>
								<div class="col col1 first">
									<div class="image round fit" style="width: 120px;">
										<a href="certificados/apple-fullstack.pdf" target="_blank" class="link" ><img src="images/swift.png" alt="" /></a>
									</div>
									<div class="image round fit" style="width: 120px;">
										<a href="certificados/git.pdf" target="_blank" class="link"><img src="images/git.png" alt="" /></a>
									</div>
								</div>
							</div>
						</div>
					</section>

				<!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
							<header class="align-center">
								<h2>Portafolio</h2>
								<p>Estos son algunos de los pryectos que he realizado, puedes encontrar mas en mi repositorio de
									<a href="https://gitlab.com/offcarlospetit/">GitLab</a></p>
							</header>
							<div class="flex flex-3">
								<div class="col align-center">
									<div class="image round fit">
										<a href="https://gitlab.com/offcarlospetit/Insta" target="_blank">
											<img src="images/isn.png" alt="" />
										</a>

									</div>
									<p>Pequeño Clon de la red social Instagram Realizado en ReactNative para iOS y Android</p>
									<a href="https://gitlab.com/offcarlospetit/Insta" target="_blank" class="button">Mas</a>
								</div>
								<div class="col align-center">
									<div class="image round fit">
										<a href="https://gitlab.com/offcarlospetit/tindog" target="_blank">
											<img src="images/tindog.png" alt="" />
										</a>

									</div>
									<p>Tindog es una App realizada en Swift 4, ayuda a encontrar pareja a tu mascota!!</p>
									<a href="https://gitlab.com/offcarlospetit/tindog" target="_blank" class="button">Mas</a>
								</div>
								<div class="col align-center">
									<div class="image round fit">
										<a href="https://gitlab.com/offcarlospetit/video-platform" target="_blank">
											<img src="images/vid.png" alt="" />
										</a>

									</div>
									<p>Plataforma de video WEB creada como parte del curso de React JS</p>
									<a href="/proyectos/video-platform/index.html" target="_blank" class="button">Ver el demo</a>
								</div>
							</div>
						</div>
					</section>

			</div>

		<!-- Footer -->
			<footer id="footer">
				<div class="copyright">
					<ul class="icons">
						<li><a href="mailto:ca.alberto.p@gmail.com" target="_blank" class="icon fa-envelope"><span class="label">Escribeme</span></a></li>
						<li><a href="https://twitter.com/offcarlospetit" target="_blank" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com/devoffcarlospetit/" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<!-- <li><a href="#" class="icon fa-snapchat"><span class="label">Snapchat</span></a></li> -->
						<li><a href="https://www.instagram.com/offcarlospetit/" target="_blank" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="https://gitlab.com/offcarlospetit/" target="_blank" class="icon fa-git"><span class="label">GitLab</span></a></li>
					</ul>
					<!-- <p>&copy; Untitled. All rights reserved. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.</p> -->
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>