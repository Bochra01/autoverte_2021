<?php
  session_start();
  
  $user = 'root';
  $pass = '';
  $host = 'localhost';
  $bdd = 'autoverte';
  // Se conneceter a la bdd
  $connexion = mysqli_connect($host, $user, $pass, $bdd);
  if ( mysqli_connect_errno() ) {
  // Si il y a une erreur avec la connection 
  exit('Impossible de se connecter a MYSQL: ' . mysqli_connect_error());
  }
  // Now we check if the data from the login form was submitted, isset() will check if the data exists.
  if ( !isset($_POST['login'], $_POST['password']) ) {
  // Could not get the data that should have been sent.
  exit('Remplissez login et password SVP !');
   }
   // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
   $client = "SELECT login, password FROM client WHERE login = '$_POST[login]'" ;
   $admin = "SELECT login, password FROM administration WHERE login ='$_POST[login]'";
   // echo $sql ;
   $resultClient=mysqli_query($connexion,$client) or die("Erreur de recherche dans la table"); 
   $resultAdmin=mysqli_query($connexion,$admin) or die("Erreur de recherche dans la table"); 
  // echo $_POST['password'] ;
  // CLIENT
   if ($row=mysqli_fetch_row($resultClient)) {
      $password =$row[1] ; 
      $id=$row[0];
   // echo 'id='.$id .'pass='.$password ; 
      if  ($_POST['password'] === $password)
    {
    // Verification success! host has logged-in!
    // Create sessions, so we know the host is logged in, they basically act like cookies but remember the data on the server.
    session_regenerate_id();
    $_SESSION['loggedin'] = TRUE;
    $_SESSION['name'] = $_POST['login'];
    $_SESSION['id'] = $id;
    //echo 'Welcome ' . $_SESSION['name'] . '!';
    header('Location:usager.php');
    } else 
    {
    // Incorrect password
    echo 'Verifiez votre login et password !';
    header("refresh:3;url=login.php");
    }
   } 
   
   //ADMIN
   elseif ($row=mysqli_fetch_row($resultAdmin)) {
      $password =$row[1] ; 
      $id=$row[0];
   // echo 'id='.$id .'pass='.$password ; 
      if  ($_POST['password'] === $password)
    {
    // Verification success! host has logged-in!
    // Create sessions, so we know the host is logged in, they basically act like cookies but remember the data on the server.
    session_regenerate_id();
    $_SESSION['loggedin'] = TRUE;
    $_SESSION['name'] = $_POST['login'];
    $_SESSION['id'] = $id;
    //echo 'Welcome ' . $_SESSION['name'] . '!';
    header('Location:admin.php');
    } else 
    {
    // Incorrect password
    echo 'Verifiez votre login et password !';
    }
   } 
?>