<?php
include('config.php');

$RequestSignature = md5($_SERVER['REQUEST_URI'].$_SERVER['QUERY_STRING'].print_r($_POST, true));

/*controllo se ho fatto l'accesso per la prima volta o è un refresh page*/
if (!$_SESSION['LastRequest'] == $RequestSignature)
{
  $_SESSION['LastRequest'] = $RequestSignature;
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
}
?>
