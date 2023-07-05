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

$codeE = $_POST['codeE'];
$email = $_POST['email'];
$codeP = $_POST['codeP'];
$mdp = $_POST['password'];


$codeM = $_POST['codeM'];
$emailM = $_POST['emailM'];
$objet = $_POST['objet'];
$message = $_POST['message'];

    if(isset($_POST["modifEmail"])){
        //Modification des enregistrements dans les champs
        $query = "UPDATE client SET email='$email' WHERE code='$codeE'";
        //execution de la requête 
        $result = mysqli_query($link, $query) or die ("Erreur d'insertion");
        echo "email modifié avec succès";
        header("refresh:3;url=usager.php");
    }
    if(isset($_POST["modifPassword"])){
        //Modification des enregistrements dans les champs
        $query = "UPDATE client SET password='$mdp' WHERE code='$codeP'";
        //execution de la requête 
        $result = mysqli_query($link, $query) or die ("Erreur d'insertion");
        echo "mot de passe modifié avec succès";
        header("refresh:3;url=usager.php");
    }

    if(isset($_POST["envoyer"])){
        //Insertion des enregistrements dans les champs
        $query = "INSERT INTO messages VALUES ('$codeM','$emailM','$objet','$message')";
        //execution de la requête 
        $result = mysqli_query($link, $query) or die ("Erreur d'insertion");
        echo "Message envoyé ";
        header("refresh:3;url=usager.php");
    }
?>