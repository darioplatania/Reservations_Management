<?php
session_start();
$email = $_SESSION['email'];

include('conteggio.php');

if(!isset($_SESSION['email']))
{

    header("Location: ../index.php");//redirect to index page
}
?>
<?php
include('config.php');

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
            // close connection
            //mysqli_close($db);

?>


<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Theater Show Management</title>

  <!-- Bootstrap Core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="../css/simple-sidebar.css" rel="stylesheet">

  <!-- Logout.js -->
  <script src="../js/logout.js"></script>

  <!-- Cookie.js -->
  <script src="../js/cookie.js"></script>

</head>

<body>


  <script>
  function myFunction() {
      location.reload();
  }
  </script>
  
<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a>
                    Show Management
                </a>
            <li>
                <a>Benvenuto <b><?php echo $email;?></b></a>
            </li>
            </li>
            <li>
                <a href="logout.php" onclick="return deleteask();">Sign Out</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container-fluid">
        <h1 style="text-align:center">La nostra Sala</h1>
        <p style="text-align:center">Prenota ora i tuoi posti a sedere!</p>
        <?php echo "<p class='text-success'>$success</p>";?>
        <?php echo "<p class='text-danger'>$danger</p>";?>
        <div class="row">
          <div class="col-md-6 col-md-offset-0">
            <br>
            <div class="row"><!--Start Row Panel-->
              <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-default">
                  <div class="panel-heading">
                       <h3 class="panel-title">Posti Totali: <b>50</b></h3>
                  </div>
                  <table class="table">
                  <thead>
                    <tr>
                      <th>Occupati</th>
                      <th>Liberi</th>
                      <th>Selezionati</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><b><?php echo $count;?><b></td>
                      <td><b><?php echo $free;?><b></td>
                      <td><b id= "selezionati"></b></td>
                    </tr>
                  </tbody>
                 </table>
                </div>
              </div>
            </div><!-- End of Row Panel-->
            <div>
              <button id="bottone" class="btn btn-default btn-sm" role="button" onclick="myFunction()">Prenota</button>
            </div>
            <p style="text-align:center"><b>Legenda</b></p>
            <div class="btn-group btn-group-justified" role="group" aria-label="...">
              <div class="btn-group" role="group">
                <button type="button" class="btn btn-danger">Occupati</button>
              </div>
              <div class="btn-group" role="group">
                <button type="button" class="btn btn-success">Liberi</button>
              </div>
              <div class="btn-group" role="group">
                <button type="button" class="btn btn-warning">I tuoi posti</button>
              </div>
            </div>
            <br>
            <table id="tb" class="table table-bordered" style="background-color: #80FF80"></table>
              <script src="../js/table_welcome.js"></script>
          </div>
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
</script>

</body>

</html>
