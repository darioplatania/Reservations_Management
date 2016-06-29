<?php
function inserisci(){
//for ($i=0; $i<50; $i++){
              //$cookie_name = 'cookie' . ($i+1);
              //if (isset($_COOKIE[$cookie_name])){
              //$posto = $_COOKIE[$cookie_name];
              //echo $posto;
              $sql = "INSERT INTO prenotazioni (utente, posto) VALUES ('dario', '5')";

              if(mysqli_query($db, $sql))
               {
                  echo  "Ok";
                  $success = "Prenotazione inserita con successo";
                  //header("refresh:5;location: signin.php");
                  //echo "<script>window.open('signin.php','_self')</script>";
               }
              else
               {
                 echo  "Oops abbiamo un errore! ";
               }
               // close connection
               mysqli_close($db);
              }
            //}
}
?>
