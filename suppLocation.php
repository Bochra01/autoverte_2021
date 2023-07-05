<?php 
$user = 'root';   // le nom de l'utilisateur
$pass = '';       // le mot de passe 
$host = 'localhost';  // le serveur de base de données
$bdd = 'autoverte';  // le nom de la base de données 

// 1eme  etape 
// connection au serveur de la base de donnees
$link = mysqli_connect($host, $user, $pass, $bdd) or die("Erreur de connexion au serveur");

// 3eme etape  : 
// Selectionner la BDD
mysqli_select_db($link, $bdd) or die("Erreur de connexion a la BDD");

   $noserie = $_POST['noserie'];
  

  //Recuperation de la location 
  $sql=$link->query("SELECT * FROM location WHERE noserie='$noserie'");
  while($archive = mysqli_fetch_array($sql)){
     $insert = "INSERT INTO archives VALUES ('$archive[code]','$archive[noserie]','$archive[datelocation]','$archive[dateretour]','$archive[prixlocation]')";
      //execution de la requête         
      $result = mysqli_query($link, $insert);
      echo "Erreur " . $insert . "<br>" . mysqli_error($link);
  }
  
  $query = "DELETE FROM location WHERE noserie='$noserie'";
  //execution de la requête         
  $resultat = mysqli_query($link, $query);

echo "Location supprimée avec succès";
header("refresh:3;url=supprimer.php");
?>