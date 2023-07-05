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

    <h1 class="heading"><span>Chercher une voiture</span> </h1>

    <div class="row">

    <form action="recherche.php" method="POST">
     
            <input type="text" name="recherche"  placeholder="Rechercher une voiture" class="box">
            
            <input type="submit" name="rechercherVoiture" value="Rechercher" class="btn">
        </form>

    </div>

</section>




</table>


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>
</body>

</html>
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
    

     if(isset($_POST["rechercherVoiture"])){
       $recherche = $_POST['recherche']; 
       $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';
       $query = "SELECT * FROM auto WHERE marque LIKE '%$recherche%' OR modele LIKE '%$recherche%' OR noserie LIKE '%$recherche%'";
       
    
       //execution de la requête 
       $result = mysqli_query($link, $query);
       $contenu = '<center>';
       $contenu .= '<div class="boutique-droite">';
    
       $contenu = '<center>';

       $contenu .= '<div class="boutique-droite">';
       if($result)
     {
        //fetch associatif retourne un tableau associatif 
        while($produit=$result->fetch_assoc())
    
    {
    
          $contenu .= '<div class="boutique-produit">';
    
        $contenu .= "<h3 style='font-weight: bold;'>$produit[marque]</h3>";
    
        //<a href= fiche_produit.php?noserie=. $produit[noserie]."><img src=?..........></a>
    
        $contenu .= "<a href=\"location.php?noserie=$produit[noserie]\"><img src=".$produit["photo"]." width=\"200\" height=\"150\" /></a>";
    
        $contenu .= "<h2>$produit[prix] €</h2>";
    
      //  $contenu .= '<a href="location.php?noserie=' . $produit['noserie'] . '">Voir la fiche</a>';
    
        $contenu .= '</div>';
    
         }
    
    
    
    
    
     $contenu .= '</div></center>';
    
    
    
    //--------------------------------- AFFICHAGE HTML ---------------------------------//
    
    
    
    echo $contenu;
    
       }
    
     
    
}

     

?>