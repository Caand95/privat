<html>
	<head>
		<title>CroudTech.org</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="scripts/css/niceness.css">
		<?php //<script type="text/javascript">ScreenInfo();</script> ?>
	</head>

	<body id="b0dy">
	<!-- banner -->
		<section class="banner">
			<a href="?page=Forside">
				<img class="logo" src="pics/logo.png">
			</a>
			<section class="banner-info">
				<a href="?page=Om&subpage=Kontakt">
					<h5 class="login">Log in</h5>
				</a>
			</section>
		</section>

	<!--Menu-->
		<section class="menubar">
			<?php
				include "menu.php";
			?>
		</section>

	<!--Main-->
		<section class="main">
			<?php
				include "main.php";
			?>
		</section>

	<!--Footer-->
		<footer>
		</footer>
	</body>
</html>
