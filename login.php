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
<body >


<br/><br/><br/><br/><br/><br/><br/><br/>
<section class="contact" id="contact">

    <h1 class="heading"><span>Branchez-vous Client!</span> </h1>

    <div class="row">

    <form action="actionLogin.php" method="POST">
     
            <input type="text" name="login"  placeholder="Login" class="box">
            <input type="password" name="password"  placeholder="Password" class="box">
            <input type="submit" name="connecterMembre" value="Se connecter" onclick="attachEvent" class="btn">
            <a href="inscription.php" target="cadreChange" class="color" >Non membre</a> 
        </form>

    </div>

</section>

<br/>
<section class="contact" id="contact">

    <h1 class="heading"><span>Administrateur</span> </h1>

    <div class="row">

    <form action="actionLogin.php" method="POST">
     
            <input type="text" name="login"  placeholder="Login" class="box">
            <input type="password" name="password"  placeholder="Password" class="box">
            <input type="submit" name="connecterAdmin" value="Se connecter" class="btn">
            
        </form>

    </div>

</section>


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>
</body>
</html>