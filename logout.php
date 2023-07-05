<?php
session_start();
session_destroy();
// Redirect to the login page:
header("refresh:1;url=login.php");

?>