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
    <link rel="stylesheet" href="css/admin.css">

</head>
<body>
    
<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="index.php" class="logo"> <span>max</span>wheels </a>

    <nav class="navbar">
        <a href="index.php">Accueil</a>
        <a href="recherche.php">Recherche</a>
        <a href="recherche.php">Location</a>
        <a href="inscription.php">Inscription</a>
        <a href="usager.php">Usager</a>
        <div class="dropdown">
        <button class="dropbtn">Admin</button>
        <div class="dropdown-content">
        <a href="maj.php">Mise à jour</a>
        <a href="ajouterClient.php">Insertion de clients</a>
        <a href="ajouterAuto.php">Insertion d'autos</a>
        <a href="Ajouterlocation.php">Insertion de locations</a>
        <a href="supprimer.php">Suppression</a>

  </div>
<a href="logout.php">Logout</a>
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
    </form>

</div>
<body >
<br/><br/><br/><br/><br/><br/><br/><br/>
<section class="contact" id="contact">

    <h1 class="heading"><span>Ajouter un client </span> </h1>

    <div class="row">

    <form action="actionAjClient.php" method="POST">
     
            <input type="text" name="code"  placeholder="Code du client" class="box">
            <input type="text" name="prenom"  placeholder="Prenom du client " class="box">
            <input type="text" name="nom"  placeholder="Nom du client" class="box">
            <input type="text" name="email"  placeholder="Email du client " class="box">
            <input type="text" name="telephone"  placeholder="Telephone du client" class="box">
            <input type="text" name="login"  placeholder="Login du client " class="box">
            <input type="text" name="password"  placeholder="Password du client" class="box">
            <input type="submit" name="ajouterClient" value="Ajouter un client" class="btn">
        </form>

    </div>

</section>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>
</body>

</html>