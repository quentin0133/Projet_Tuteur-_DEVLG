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

case 0:
	// inclure ici la page accueil
	include_once('pages/accueil.inc.php');
	break;
	// page insertion nouveau client
case 1:
	// inclure ici la page du dashboard
	include("pages/dashboard.inc.php");
    break;

case 2:
	// inclure ici la page Affichage global
	include_once('pages/AffGlobal.inc.php');
    break;
case 3:
	// inclure ici la page de graphique
	include("pages/Graphique.inc.php");
    break;
case 4:
	// inclure ici la page de menu zone*capteur
	include_once('pages/MenuCapteur.inc.php');
    break;
Default :
		include_once('pages/accueil.inc.php');
		break;
	}
?>
</div>
