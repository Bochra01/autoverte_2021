<?php
session_start();

//Connection a la bdd
function execute_requete($req)
{ 
$servername = "localhost";
$username ="root";
$dbname ="autoverte";
$password ="";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn-> connect_error)
   { 
    die ("connexion failed :".$conn-> connect_error);
   }

   //l'execution des requetes 
   //"SELECT * FROM produit"
  $resultat=$conn->query($req);//$req est le parametre 
 return $resultat;
  }
//calculer le montant global
function montant_global(){
    $total = 0;
    $count = count($_SESSION['panier']['noserie']);
    for($i=0;$i<$count;$i++){
        $total+=((int)$_SESSION['panier']['qte'][$i]*(int)$_SESSION['panier']['prix'][$i])+taxes();
    }
    
    return $total;
}
//fonction taxes
function taxes(){
    $total = 0;
    $taxe = 0.15;
    $count = count($_SESSION['panier']['noserie']);
    for($i=0;$i<$count;$i++){
        $total+=((int)$_SESSION['panier']['qte'][$i]*(int)$_SESSION['panier']['prix'][$i])*$taxe;
    }
    return $total;
}

function creationPanier()
{
    //Definition des sous array (vides pour le moment)
    if(!isset($_SESSION['panier'])){
        $_SESSION['panier'] = array();
        $_SESSION['panier']['noserie'] = array();
        $_SESSION['panier']['marque'] = array();
        $_SESSION['panier']['modele'] = array();
        $_SESSION['panier']['prix'] = array();
        $_SESSION['panier']['qte'] = array();
        $_SESSION['panier']['verrou'] = false;
    }
    return true;
}

//fonction d'ajout d'un article
function ajout($noserie,$marque,$modele,$prix,$qte){
    $position = array_search($noserie,$_SESSION['panier']['noserie']);
    // si id n'existe pas, on ajoute le produit (pas le verrou)
    if($position == false){
        array_push($_SESSION['panier']['noserie'],$noserie);
        array_push($_SESSION['panier']['marque'],$marque);
        array_push($_SESSION['panier']['modele'],$modele);
        array_push($_SESSION['panier']['prix'],$prix);
        array_push($_SESSION['panier']['qte'],$qte);

    }
    //sinon on ajoute seulement la quantite
    else{
        $_SESSION['panier']['modeleProduit'][$position]+=$qte;
    }
}



?>