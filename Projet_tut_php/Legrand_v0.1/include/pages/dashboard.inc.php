
<h1>Ajouter un parcours </h1>

<?php

$pdo=new Mypdo();
$Ville1 = New VilleManager($pdo);
$Ville2 = New VilleManager($pdo);
$ParcoursManager = new ParcoursManager($pdo);


$SelectVille1 = $Ville1->getAllVille();
$SelectVille2 = $Ville2->getAllVille();


if(empty($_POST['vil_num1']) && empty($_POST['vil_num2'] )&& empty($_POST['par_km']) ){

//selection de la premiere ville
  echo "<form action=\"#\" id=\"insert\" method=\"post\"> \n

          <p> Ville 1 : \n
          <select  size=\"1\" name=\"vil_num1\" \n
          <option value = 0> Choisissez une ville 1 </option> \n";
          foreach ($SelectVille1 as $ville){
            echo "<option value = \"". $ville->getVil_num()."\">". $ville->getVil_nom()."</option> \n";

          }
          echo "</select> \n";

//selection de la deuxieme ville
  echo    "Ville 2 : \n
          <select  size=\"1\" name=\"vil_num2\" \n
          <option value = 0> Choisissez une ville 2 </option> \n";

          foreach ($SelectVille2 as $ville2){
            echo "<option value = \"". $ville2->getVil_num()."\">". $ville2->getVil_nom()."</option> \n";

          }
          echo "</select> \n";


//selection de la distance
  echo "Nombre de kilomètre : <input type=\"text\" name=\"par_km\" size=\"30\" maxlength=\"50\">   </p>\n
      <br> \n
      <input type=\"submit\" value=\"Valider \" /> \n
  </form> \n ";

}else{
  //on valide l'ajout dans la base de données
  //print_r ($_POST);
  $parcours = new Parcours($_POST);
  $ParcoursManager ->add($parcours);

  echo"<p>  <img src=\"image/valid.png\" alt=\"Image validation\" /> \n
         Le parcours à été ajoutée ! </p> \n";
}

 ?>
