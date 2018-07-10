<h5 class="breadcrums"> <?php
	//Hvis der ikke er valgt en menu
	if (empty($_GET['page']) || $_GET['page'] == "Forside") {
		print "<h5>→ Forside </h5>";
		include "site/Forside.php";
		

	//Hvis der er valgt en menu
	} else if (!empty($_GET['page']) && empty($_GET['subpage'])) {
		$page=$_GET['page'];
		print "<h5>→ <a href=?page=".$page." > ".$page."</a> </h5>";
		include "site/".$page."/index.php";

	//Hvis der er valgt en menu og en undermenu
	} else if (!empty($_GET['subpage'])) {
		$page=$_GET['page'];
		$subpage = $_GET['subpage'];
		print "<h5>→ <a href='?page=".$page."'>".$page."</a>"." → <a href='?page=".$page."&subpage=".$subpage."'>".$subpage."</a> </h5>";
		include "site/".$page."/".$subpage.".php";

	//Hvis der er angivet forkerte adresser
	} else {
		print "404";
	}
?>