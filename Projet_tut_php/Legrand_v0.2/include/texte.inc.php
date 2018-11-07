<div id="texte">
<?php
if (!empty($_GET["page"])){
	$page=$_GET["page"];}
	else
	{$page=0;
	}
switch ($page) {
//
// Personnes
//

//Dashboard
case 1:
	// inclure ici la page AffGlobal
	include_once('pages/AffGlobal.inc.php');
	break;
	// page insertion nouveau client



default : 	include_once('pages/accueil.inc.php');
}

?>
</div>
