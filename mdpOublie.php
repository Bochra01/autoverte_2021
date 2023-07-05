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
	if((!empty($_POST['code']))  AND (!empty($_POST['password'])) AND (!empty($_POST['password2']))){ 
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
              $password = $_POST['password'];
              $password = $_POST['password2'];
$link = mysqli_connect($host, $user, $pass, $bdd) or die("Erreur de connexion au serveur");

// 3eme etape  : 
// Selectionner la BDD
mysqli_select_db($link, $bdd) or die("Erreur de connexion a la BDD");

    
    // insertion
    // definition de la requête 
    $client = "SELECT code FROM client WHERE code = '$_POST[code]'" ;
    //execution de la requête 
    $result = mysqli_query($link, $sql) or die ("Erreur d'insertion");
    if ($result){
        
    }

}else{?>


<br/><br/><br/><br/><br/><br/><br/><br/>
<section class="contact" id="contact">

    <h1 class="heading"><span>Reinitialiser votre mot de passe</span> </h1>

    <div class="row">

    <form action="" method="POST">
     
            <input type="text" name="email"  placeholder="Tapez votre email" class="box">
            <input type="password" name="password"  placeholder="Tapez votre nouveau mot de passe" class="box">
            <input type="password" name="password2"  placeholder="Confirmez votre mot de passe" class="box">
            <input type="submit" name="formSoumettre" value="Valider" class="btn">
            
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