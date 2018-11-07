<h1> Afficher toutes les données : </h1>


<?php
/*

  if(empty($_POST['IdCavalier']) ||empty($_POST['NomCavalier']) || empty($_POST['PrenomCavalier']) ||
      empty($_POST['TelCavalier'])|| empty($_POST['MailCavalier']) || empty($_POST['AdrCavalier'])){


    echo "<form action=\"#\" id=\"insert\" method=\"post\"> \n
        ID :<input type=\"text\" name=\"IdCavalier\" size=\"4\"> \n
        <br> \n
  			Nom : <input type=\"text\" name=\"NomCavalier\" size=\"4\"> \n
  			<br> \n
  			Prenom : <input type=\"text\" name=\"PrenomCavalier\" size=\"4\"> \n
  			<br> \n
        Téléphone : <input type=\"text\" name=\"TelCavalier\" size=\"4\"> \n
  			<br> \n
  			Email : <input type=\"text\" name=\"MailCavalier\" size=\"4\"> \n
  			<br> \n
        Adresse : <input type=\"text\" name=\"AdrCavalier\" size=\"4\"> \n
  			<br> \n \n


  			<input type=\"submit\" value=\"Envoyer \" /> \n
  			<input type=\"reset\" value=\"annuler\" /> \n
    </form> ";

  }


  if(!empty($_POST['IdCavalier']) ||!empty($_POST['NomCavalier']) || !empty($_POST['PrenomCavalier']) ||
      !empty($_POST['TelCavalier'])|| !empty($_POST['MailCavalier']) || !empty($_POST['AdrCavalier'])){

    $id=$_POST['IdCavalier'];
    $nom=$_POST['NomCavalier'];
    $prenom=$_POST['PrenomCavalier'];
    $tel=$_POST['TelCavalier'];
    $mail=$_POST['MailCavalier'];
    $adr=$_POST['AdrCavalier'];



    $db = mysqli_connect('localhost','Rosemay','190818') or die ("connexion impossible");
    mysqli_select_db($db, 'cheval');

    $req = "INSERT INTO cavalier (ID_CAVALIER,NOM_CAVALIER,PRENOM_CAVALIER,TEL_CAVALIER,MAIL_CAVALIER,ADR_CAVALIER)
    VALUES ('$id','$nom','$prenom','$tel','$mail','$adr')";
    echo $req."<br> \n";

    $exereq = mysqli_query($db,$req);

    echo "<div id=\"Affichage\"> \n";
    echo "<p> Le cavalier ".$nom." ".$prenom." avec l'id : ".$id." et les coordonnées suivantes : <br> \n ";
    echo"      Téléphone : ".$tel." <br> \n ";
    echo"      Mail : ".$mail." <br> \n ";
    echo"      Adresse : ".$adr." <br> \n ";
    echo"a été ajouté avec succés !<p> \n";
    echo"</div>";



  }
*/
echo "ici on va tout afficher !"
  ?>
