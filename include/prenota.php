<?php
include('config.php');
session_start();
$email = $_SESSION['email'];

for ($i=0; $i<50; $i++){
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
