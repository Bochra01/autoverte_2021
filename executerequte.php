<?php
session_start();
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
   //"SELECT * FROM auto"
  $resultat=$conn->query($req);//$req est le parametre 
 return $resultat;
  }
  ?>