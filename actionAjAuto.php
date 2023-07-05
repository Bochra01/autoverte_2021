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
$marque = $_POST['marque'];
$modele = $_POST['modele'];
$dispo = $_POST['disponibilite'];
$prix = $_POST['prix'];
$photo = $_POST['photo'];


   $query = "INSERT INTO auto VALUES
   ('$noserie','$marque','$modele','$dispo','$prix','$photo')";

   //execution de la requête 
   $result = mysqli_query($link, $query);





?>