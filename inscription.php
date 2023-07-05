<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<header class="header">

<div id="menu-btn" class="fas fa-bars"></div>

<a href="index.php" class="logo"> <span>max</span>wheels </a>

<nav class="navbar">
    <a href="index.php">Accueil</a>
    <a href="inscription.php">Inscription</a>


    </nav>

<div id="login-btn">
    <button class="btn">login</button>
    <i class="far fa-user"></i>
</div>

</header> 

<div class="login-form-container">

<span id="close-login-form" class="fas fa-times"></span>

<form action="actionLogin.php" method="POST">
    <h3>user login</h3>
    <p for="login"> Entrez votre login </p>
    <input type="text" placeholder="login" class="box" name="login">
    <p for="password"> Entrez votre mot de passe</p>
    <input type="password" placeholder="password" class="box" name="password">
    <input type="submit" value="login" class="btn">
    <p> don't have an account <a href="inscription.php">create one</a> </p>
    <p> Mot de passe oublié ?<a href="mdpOublie.php">Reinitialiser le mot de passe</a> </p>
</form>

</div>
<?php 
	if((!empty($_POST['code'])) AND (!empty($_POST['nom'])) AND (!empty($_POST['prenom'])) AND (!empty($_POST['email'])) AND (!empty($_POST['telephone']))
       AND (!empty($_POST['login'])) AND (!empty($_POST['password']))){ 
	     if(isset($_POST['formSoumettre'])){

}

		
// 1ere etape 
// Definition des infos de connection
$user = 'root';   // le nom de l'utilisateur
$pass = '';       // le mot de passe 
$host = 'localhost';  // le serveur de base de données
$bdd = 'autoverte';  // le nom de la base de données 

// 2eme  etape 
// connection au serveur de la base de donnees  
              $code = $_POST['code'];            
              $nom = $_POST['nom'];
              $prenom = $_POST['prenom'];
              $email = $_POST['email'];
              $telephone = $_POST['telephone'];
	       $login = $_POST['login'];
              $password = $_POST['password'];
$link = mysqli_connect($host, $user, $pass, $bdd) or die("Erreur de connexion au serveur");

// 3eme etape  : 
// Selectionner la BDD
mysqli_select_db($link, $bdd) or die("Erreur de connexion a la BDD");

    
    // insertion
    // definition de la requête 
    $sql = "INSERT INTO client (code,nom,prenom,email,telephone,login,password) 
    VALUES ('$code','$nom','$prenom','$email','$telephone','$login','$password')";
    //execution de la requête 
    $result = mysqli_query($link, $sql) or die ("Erreur d'insertion");
    $msg = "Compte Cree";
    header("refresh:1;url=login.php");
}else{?>


<br/><br/><br/><br/><br/><br/><br/><br/>
<section class="contact" id="contact">

    <h1 class="heading"><span>Inscription de nouveaux clients</span> </h1>

    <div class="row">

    <form action="" method="POST">
     
            <input type="text" name="code"  placeholder="Code du client" class="box">
            <input type="text" name="nom"  placeholder="Nom " class="box">
            <input type="text" name="prenom"  placeholder="Prenom " class="box">
            <input type="text" name="email"  placeholder="courriel@gmail.com" class="box">
            <input type="text" name="telephone"  placeholder="Telephone" class="box">
            <input type="text" name="login"  placeholder="login" class="box">
            <input type="password" name="password"  placeholder="password" class="box">
            <a href="login.php" target="cadreChange" >Connectez vous !</a> 
            <input type="submit" name="formSoumettre" value="S'inscrire" class="btn">
        </form>

    </div>

</section>




		<?php

	} 

	?>
       <p><?php if (!empty($msg)){
echo $msg;
}?></p>
  
<?php





 ?>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>
</body>
</html>