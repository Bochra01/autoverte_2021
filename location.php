<?php
require_once("fonctions.php");

if(isset($_GET["noserie"]))

{ 
    
    $contenu = '';
   $req="SELECT * from auto WHERE noserie='".$_GET["noserie"]."'";
   $resultat=execute_requete($req);
   $produit=$resultat->fetch_assoc();
   $contenu .="<form  action=location.php method=POST>";
   $contenu .= "<br/><br/><br/><br/><br><br/><br/><br/><br><br/><h1 align='center'> Numero de serie: ".$produit["noserie"]."</h1><br>";
   $contenu .="<h1 align='center'>Marque: ".$produit["marque"]."<h1/><br>";
   $contenu .="<h1 align='center'>Modele: ".$produit["modele"]."<h1/><br>";
   $contenu .="<h1 align='center'>Nombre de auto disponible :".$produit["disponible"]."<h1/><br>";
   $contenu .="<h1 align='center'>Prix: ".$produit["prix"]." <h1/><br>";
   $contenu .="<div align='center'><img  src=".$produit["photo"]." width=300 height=200><br></div>";
   //donnees pour location  
   // insere les input
   $contenu .="<h1 align='center'>Code Client: ";
   $contenu .="<input type='text' name='code'  placeholder='Code du client' class='box'><h1/> ";        
   $contenu .="<h1 align='center'>Date de location: ";
   $contenu .="<input type='date' placeholder=0000-00-00 name='datelocation'  class='box'><h1/> ";
   $contenu .="<h1 align='center'>Date de retour: ";
   $contenu .="<input type='date'  placeholder=0000-00-00 name='dateretour'  class='box'><h1/> ";
  // $contenu .="</form>";
   //la partie formulaire
   //$contenu .="<form name=panier action=location.php method=POST>";
   $contenu .="<div align='center'>Quantité : <select  name=qte>";
   for ($i = 1; $i <= $produit["disponible"]; $i++)
        {
           $contenu.= '<option  >'  .$i. '</option>';
        }
   $contenu .="</select>";
   $contenu .="<input  type=hidden name=produit value=".$produit["noserie"].">";
   $contenu .="<input  type=hidden name=noserie value=".$produit["noserie"].">";
   $contenu .="<input  type=hidden name=prix value=".$produit["prix"].">";
   $contenu .="<input type=submit value=Ajout_Au_Panier name=ajout>  <br>";
   $contenu .="</form>";
   //fin de la partie 
   $contenu .="<a href = recherche.php > Retour vers la sélection des voitures</a></div>";


   echo $contenu;

}
if(isset($_POST["ajout"]))
{
    $code = $_POST['code'];
    $noserie = $_POST['noserie'];
    $datelocation = $_POST['datelocation'];
    $dateretour = $_POST['dateretour'];
    $prix = $_POST['prix'];
    
  
       $query = "INSERT INTO location VALUES ('$code','$noserie','$datelocation','$dateretour',$prix)";
    
       //execution de la requête 
       $result = execute_requete($query);
    

$req="SELECT * from auto WHERE noserie='".$_POST["produit"]."'";

$resultat= execute_requete($req);
$produit=$resultat->fetch_assoc();
//var_dump($_SESSION['panier']);
creationPanier();
ajout($produit["noserie"],$produit["marque"],$produit["modele"],$_POST["qte"],$produit["prix"]);
//var_dump($_SESSION['panier']);
//session_destroy();
//Tableau affiche
echo "<center><table height=100% width=100%><tr><td align='center' colspan=5 >Votre Panier</td></tr>";
echo "<tr><td>Numero de serie</td><td>Marque</td><td>Modele</td><td>Quantite</td><td>Prix Unitaire</td></tr><tr align='center'>";
echo "<td>";
echo "<table height=100% width=100%>";
foreach($_SESSION['panier']['noserie'] as $value)
{

   echo "<tr><td>".$value."</td></tr>";

}
echo "</table>";
echo "</td>";
echo "<td>";
echo "<table height=100% width=100%>";
foreach($_SESSION['panier']['marque'] as $value){

        echo "<tr><td>".$value."</td></tr>";
        }echo "</table >";
        echo "</td>";
        echo "<td>";
        echo "<table height=100% width=100%>";
        foreach($_SESSION['panier']['modele'] as $value){

            echo "<tr><td>".$value."</td></tr>";
            }echo "</table >";
            echo "</td>";
            echo "<td>";
            echo "<table height=100% width=100%>";
            foreach($_SESSION['panier']['prix'] as $value){
 
                echo "<tr><td>".$value."</td></tr>";
          }echo "</table> "; 
          echo "</td>";
          echo "<td>"; 
          echo "<table height=100% width=100%>";
        foreach($_SESSION['panier']['qte'] as $value){
            echo "<tr><td>".$value."</td></tr>";
        }echo "</table>";
        echo "</td>";
 
 echo "</tr><tr align='center'><td colspan=3>Taxes</td><td colspan=2> ".taxes()."  $</td>";
 echo "</tr><tr align='center'><td colspan=3>Total</td><td colspan=2> ".montant_global()."  $</td>";
 
 }
?>
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
   <link rel="stylesheet" href="css/styleRech.css"> 
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
    
</body>
</html>