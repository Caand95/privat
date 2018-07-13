<html>
	<head>
		<title>Zoneterapi v/Lisbeth Andersen</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="scripts/css/niceness.css">

<!-- font family -->
<link href="https://fonts.googleapis.com/css?family=Lora:400i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300" rel="stylesheet">
		<?php //<script type="text/javascript">ScreenInfo();</script> ?>

	</head>
<body>

	<!-- Header -->
		<header class="header <?php if(!isset($_GET["page"]) || (isset($_GET["page"]) && $_GET["page"] == "Forside")){echo"header-front";} ?>">
			<section class="headerleft">
				<a href="?page=Forside">
					<img class="logo <?php if(!isset($_GET["page"]) || (isset($_GET["page"]) && $_GET["page"] == "Forside")){echo"logo-front";} ?>" src="pics/logo65x65.png" />

					<h5 class="logo-text">Zoneterapi v/ Lisbeth Andersen</h5>
				</a>
			</section>
			<section class="headerright">
				<?php include "widget/certificates.php" ?>
				<section class="headermenu">
					<?php include "menu.php"; ?>
				</section>
			</section>
		</header>

<!--banner?-->
	<section class="banner<?php if(!isset($_GET["page"]) || (isset($_GET["page"]) && $_GET["page"] == "Forside")){echo"-front";} ?>">

	</section>
	<?php
	if(!isset($_GET["page"]) || (isset($_GET["page"]) && $_GET["page"] == "Forside")){
	} else{

echo '<div id="b0dy">
			<!--Main-->
			<section class="main">
				';include "main.php";echo'
		</section>
</div>';
}
?>

	<!--Footer-->
		<footer>

		</footer>

	</body>
</html>
