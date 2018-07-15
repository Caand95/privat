<h5 class="breadcrums"> <?php
//breadcrums
	//Hvis der ikke er valgt en menu
	if (empty($_GET['page']) || $_GET['page'] == "Forside") {
		print "//Forside </h5>";
		include "site/Forside.php";
		$NoFront = 0;
	//Hvis der er valgt en menu
	} else if (!empty($_GET['page']) && empty($_GET['subpage'])) {
		$page=$_GET['page'];
		print "// <a href=?page=".$page." > ".$page."</a> </h5>";
  	$NoFront = 1;
	//Hvis der er valgt en menu og en undermenu
	} else if (!empty($_GET['subpage'])) {
		$page=$_GET['page'];
		$subpage = $_GET['subpage'];
		print "// <a href='?page=".$page."'>".$page."</a>"." / <a href='?page=".$page."&subpage=".$subpage."'>".$subpage."</a> </h5>";
		$NoFront = 2;
	//Hvis der er angivet forkerte adresser
	} else {
		print "404";
	}

//Sidenav
	if($NoFront != 0){
		<div class="sidenav">
		include "site/".$page."/index.php";
		include "site/".$page."/".$subpage.".php";

	}
?>
