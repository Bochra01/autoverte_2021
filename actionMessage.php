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


$codeM = $_POST['codeM'];
$emailM = $_POST['emailM'];
$objet = $_POST['objet'];
$message = $_POST['message'];

 
 
    if(isset($_POST["envoyer"])){
        //Insertion des enregistrements dans les champs
        $query = "INSERT INTO messages(code,email,objet,message) VALUES ('$codeM','$emailM','$objet','$message')";
        //execution de la requête 
        $result = mysqli_query($link, $query) or die ("Erreur d'insertion");
        echo "Message envoyé ";
        header("refresh:3;url=usager.php");
        ;
    }
   

?>