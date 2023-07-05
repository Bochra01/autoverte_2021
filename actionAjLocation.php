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

$code = $_POST['code'];
$noserie = $_POST['noserie'];
$datelocation = $_POST['datelocation'];
$dateretour = $_POST['dateretour'];
$prix = $_POST['prix'];

 
   $query = "INSERT INTO location VALUES
   ('$code','$noserie','$datelocation','$dateretour','$prix')";

   //execution de la requête 
   $result = mysqli_query($link, $query);


echo "Location inseré avec succès";
header("refresh:3;url=location.php");
?>