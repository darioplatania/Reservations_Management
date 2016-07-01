<?php
session_start();
include('config.php');
/*se non è attiva la sessione mi rimanda alla index*/
if(!$_SESSION['email'])
{
    header('Location: ../index.php');
}
/*se è attiva la sessione, ma non si conosce il row_id mi rimanda alla welcome*/
elseif(!isset($_GET['delete_id'])){
    header('Location: welcome.php');
}
/*se è attiva la sessione e si conosce il row_id mi elimina la prenotazione*/
else{
    if(isset($_GET['delete_id']))
    {
     $sql_query="DELETE FROM prenotazioni WHERE posto=".$_GET['delete_id'];
     mysqli_query($db,$sql_query);
     header("Location: welcome.php");
     }
}
?>
