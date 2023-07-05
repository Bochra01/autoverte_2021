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

   $dateretour = $_POST['dateRetour'];
   $noserie = $_POST['serieVoiture'];

   //Modification des enregistrements dans les champs
   $query = "UPDATE location SET dateretour='$dateretour' WHERE noserie='$noserie'";

   //execution de la requête 
   $result = mysqli_query($link, $query) or die("Erreur de connexion au serveur");

echo "Date de retour modifiée avec succès";
header("refresh:3;url=maj.php");
?>