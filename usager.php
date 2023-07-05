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
        <a href="recherche.php">Recherche</a>
        <a href="recherche.php">Location</a>
        <a href="usager.php">Usager</a>
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
<body> 
<br/><br/><br/><br/><br/><br/><br/><br/>
<section class="contact" id="contact">

    <h1 class="heading"><span>Modifier vos coordonnées </span> </h1>

    <div class="row">

    <form action="actionUsager.php" method="POST">
             
            <input type="text" name="codeE"  placeholder="Code du client " class="box">    
            <input type="text" name="email"  placeholder="Email du client " class="box">
            <input type="submit" name="modifEmail" value="Modifier votre email" class="btn">
            <input type="text" name="codeP"  placeholder="Code du client " class="box">       
            <input type="password" name="password"  placeholder="Password du client" class="box">
            <input type="submit" name="modifPassword" value="Modifier votre password" class="btn">
        </form>

    </div>

</section>
<section class="contact" id="contact">

    <h1 class="heading"><span>contactez</span> nous</h1>

    <div class="row">

        <form action="actionMessage.php" method="POST">
            <h3>Restez en contact avec nous</h3>
            <input type="text" name="codeM" placeholder="Entrez votre code" class="box">
            <input type="email" name="emailM"  placeholder="Entrez votre email" class="box">
            <input type="text" name="objet" placeholder="Objet" class="box">
            <textarea placeholder="Message"  name="message" class="box" cols="30" rows="10"></textarea>
            <input type="submit" value="Envoyer" name="envoyer" class="btn">
        </form>

    </div>

</section>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>
</body>

</html>