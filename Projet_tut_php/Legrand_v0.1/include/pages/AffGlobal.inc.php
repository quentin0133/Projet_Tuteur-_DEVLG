		<h1>Ajouter une personne</h1>

<?php

$pdo=new Mypdo();


if(empty($_POST['per_nom']) && empty($_POST['per_prenom'] )&& empty($_POST['per_tel'])
   &&empty($_POST['per_mail']) && empty($_POST['per_login'] )&& empty($_POST['per_pwd']) ){

//selection de la premiere ville
  echo "<form action=\"#\" id=\"insert\" method=\"post\"> \n";
  echo "<p> <b> Nom : </b> <input type=\"text\" name=\"per_nom\" size=\"30\" maxlength=\"50\">   </p>\n
				<p> <b> Prenom : </b> <input type=\"text\" name=\"per_prenom\" size=\"30\" maxlength=\"50\">   </p>\n
				<p> <b> Téléphone : </b> <input type=\"text\" name=\"per_tel\" size=\"30\" maxlength=\"50\">   </p>\n
				<p> <b> Mail : </b> <input type=\"text\" name=\"per_mail\" size=\"30\" maxlength=\"50\">   </p>\n
				<p> <b> Login : </b> <input type=\"text\" name=\"per_login\" size=\"30\" maxlength=\"50\">   </p>\n
				<p> <b> Mot de passe : </b> <input type=\"password\" name=\"per_pwd\" size=\"30\" maxlength=\"50\">   </p>\n
      	<br> \n

				<p> <b> Catégorie : </b> <input type=\"radio\" name=\"categorie\" value=\"etudiant\" checked> Etudiant \n
																 <input type=\"radio\" name=\"categorie\" value=\"personnel\" > Personnel \n
      	<input type=\"submit\" value=\"Valider \" /> \n
  </form> \n ";

}else{

	if($_POST['categorie']=="etudiant"){
		echo "bonjour etudiant";
	}else{
		echo "erreur";
	}


}

 ?>
