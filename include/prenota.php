<?php
include('config.php');
include('variable.php');
session_start();
$email = $_SESSION['email'];

for ($i=1; $i<=$dimensione; $i++){
    $cookie_name = 'cookie' . ($i);
    if (isset($_COOKIE[$cookie_name])){
    $posto = $_COOKIE[$cookie_name];
    $sql = "INSERT INTO prenotazioni (utente, posto) VALUES ('$email', '$posto')";

    if(mysqli_query($db, $sql))
     {
        $success = "Posto assegnato con successo!";
     }
    else
     {
       $danger = "C'è stato un problema..il posto non è stato prenotato!";
     }
    }
  }
  header('Location: welcome.php');
  // close connection
  //mysqli_close($db);
?>
