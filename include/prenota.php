<?php
session_start();
$email = $_SESSION['email'];

if(!$_SESSION['email'])
{
  $error = "Non è possibile prenotare posti se non registrati!";
  //header("refresh:5;location: signin.php");
  echo "<script>window.open('signup.php','_self')</script>";
}
?>
<?php echo "<p class='text-danger'>$error</p>";?>
