<?php
if(!include('connect.php')){

    echo "Error on include";
}

$selectAll = "SELECT * FROM `content` ORDER BY `id` DESC LIMIT 5 ";
$result = $connect->query($selectAll);


?>
<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>MDCS Website</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<span class="logo"><img src="images/logo.svg" alt="" /></span>
						<h1>MDCS</h1>
						<p>A space to share my projects</p>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#intro" class="active">Introduction</a></li>
							<!--<li><a href="#first">First Section</a></li>
							<li><a href="#second">Second Section</a></li>
							<li><a href="#cta">Get Started</a></li>-->
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Introduction -->

                        <?php
                        while($row = $result->fetch_array()){
                            printf(" <section id=\"intro\" class=\"main\">
								<div class=\"spotlight\">
									<div class=\"content\">
										<header class=\"major\">
                                            <h1><?php echo $row[0]  ?></h1>
											<h2>". $row['title'] ."</h2>
										</header>
										".$row['iContent']."
										<ul class=\"actions\">
											<li><a href=\"pages/project.php/?title=".$row['title']."\" class=\"button\">Learn More</a></li>
										</ul>
									</div>-
									<!--<span class=\"image\"><img src=\"images/pic01.jpg\" alt=\"\" /></span>-->
								</div>
							</section>
							");
                        }

                        ?>
							<!-- <section id="intro" class="main">
								<div class="spotlight">
									<div class="content">
										<header class="major">
                                            <h1></h1>
											<h2>How to install lamp on ubuntu.</h2>
										</header>
										<p>1) The first step is to make sure that your computer is up today by running this command<span class="code">sudo apt-get update.</span></p>
										<p>2) After using that command, you have to install apache <span class="code">sudo apt-get install apache2</span></p>
										<ul class="actions">
											<li><a href="pages/lamp-on-ubuntu.html" class="button">Learn More</a></li>
										</ul>
									</div>-->
									<!--<span class="image"><img src="images/pic01.jpg" alt="" /></span>-->
								<!--</div>
							</section>-->


						<!-- First Section -->
						<!--
							<section id="first" class="main special">
								<header class="major">
									<h2>Magna veroeros</h2>
								</header>
								<ul class="features">
									<li>
										<span class="icon major style1 fa-code"></span>
										<h3>Ipsum consequat</h3>
										<p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
									</li>
									<li>
										<span class="icon major style3 fa-copy"></span>
										<h3>Amed sed feugiat</h3>
										<p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
									</li>
									<li>
										<span class="icon major style5 fa-diamond"></span>
										<h3>Dolor nullam</h3>
										<p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
									</li>
								</ul>
								<footer class="major">
									<ul class="actions">
										<li><a href="generic.html" class="button">Learn More</a></li>
									</ul>
								</footer>
							</section>
							-->
						<!-- Second Section -->
							<!--<section id="second" class="main special">
								<header class="major">
									<h2>Ipsum consequat</h2>
									<p>Donec imperdiet consequat consequat. Suspendisse feugiat congue<br />
									posuere. Nulla massa urna, fermentum eget quam aliquet.</p>
								</header>
								<ul class="statistics">
									<li class="style1">
										<span class="icon fa-code-fork"></span>
										<strong>5,120</strong> Etiam
									</li>
									<li class="style2">
										<span class="icon fa-folder-open-o"></span>
										<strong>8,192</strong> Magna
									</li>
									<li class="style3">
										<span class="icon fa-signal"></span>
										<strong>2,048</strong> Tempus
									</li>
									<li class="style4">
										<span class="icon fa-laptop"></span>
										<strong>4,096</strong> Aliquam
									</li>
									<li class="style5">
										<span class="icon fa-diamond"></span>
										<strong>1,024</strong> Nullam
									</li>
								</ul>
								<p class="content">Nam elementum nisl et mi a commodo porttitor. Morbi sit amet nisl eu arcu faucibus hendrerit vel a risus. Nam a orci mi, elementum ac arcu sit amet, fermentum pellentesque et purus. Integer maximus varius lorem, sed convallis diam accumsan sed. Etiam porttitor placerat sapien, sed eleifend a enim pulvinar faucibus semper quis ut arcu. Ut non nisl a mollis est efficitur vestibulum. Integer eget purus nec nulla mattis et accumsan ut magna libero. Morbi auctor iaculis porttitor. Sed ut magna ac risus et hendrerit scelerisque. Praesent eleifend lacus in lectus aliquam porta. Cras eu ornare dui curabitur lacinia.</p>
								<footer class="major">
									<ul class="actions">
										<li><a href="generic.html" class="button">Learn More</a></li>
									</ul>
								</footer>
							</section>-->

						<!-- Get Started -->
							<!--<section id="cta" class="main special">
								<header class="major">
									<h2>Congue imperdiet</h2>
									<p>Donec imperdiet consequat consequat. Suspendisse feugiat congue<br />
									posuere. Nulla massa urna, fermentum eget quam aliquet.</p>
								</header>
								<footer class="major">
									<ul class="actions">
										<li><a href="generic.html" class="button special">Get Started</a></li>
										<li><a href="generic.html" class="button">Learn More</a></li>
									</ul>
								</footer>
							</section>

					</div>
						-->



				<!-- Footer -->
						<hr />
					<!--Footer-->
                        <?php include("footer.php")?>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>