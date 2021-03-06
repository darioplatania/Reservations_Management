<?php
include('include/config.php');
include('include/variable.php');
include('include/conteggio.php');

session_start();

$email = $_SESSION['email'];

if(isset($_SESSION['email']))
{

    header("Location: include/welcome.php");//redirect to welcome page
}
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
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

  <!-- Cookie.js -->
  <script src="js/cookie.js"></script>
  <script src="js/enable_cookie.js"></script>

  <!-- jQuery -->
  <script src="js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>

</head>

<body>

<div id="wrapper">

  <!-- Sidebar -->
  <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
          <li class="sidebar-brand">
              <a>
                  Show Management
              </a>
          </li>
          <li>
              <a href="include/signup.php">Registrazione</a>
          </li>
          <li>
              <a href="include/signin.php" id="accedi">Accedi</a>
          </li>
      </ul>
  </div>
  <!-- /#sidebar-wrapper -->

  <!-- Page Content -->
  <!-- Show a message -->
  <div id="page-content-wrapper">
    <div class="container-fluid">
      <h1 style="text-align:center">La nostra Sala</h1>
      <p style="text-align:center">Prenota ora i tuoi posti a sedere!</p>
      <div class="row">
        <div class="col-md-6 col-md-offset-0">
          <br>          
          <noscript> Attenzione! Non hai javascript abilitato e il sito potrebbe non funzionare correttamente! </noscript>
          <div class="row"><!--Start Row Panel-->
            <div class="col-md-12 col-md-offset-0">
              <div class="panel panel-default">
                <div class="panel-heading">
                     <h3 class="panel-title">Posti Totali: <b><?php echo $dimensione ?></b></h3>
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
                    <td><b><?php echo $occupati;?><b></td>
                    <td><b><?php echo $free;?><b></td>
                    <td><b id="selezionati"></b></td>
                  </tr>
                </tbody>
               </table>
              </div>
            </div>
          </div><!-- End of Row Panel-->
          <div>
            <button id="bottone" class="btn btn-default btn-sm" role="button">Prenota</button>
          </div>
          <br>
          <p style="text-align:center"><b>Legenda</b></p>
          <div class="btn-group btn-group-justified" role="group" aria-label="...">
            <div class="btn-group" role="group">
              <button type="button" class="btn btn-danger">Occupati</button>
            </div>
            <div class="btn-group" role="group">
              <button type="button" class="btn btn-success">Liberi</button>
            </div>
          </div>
          <br>
          <table id="tb" class="table table-bordered" style="background-color: #80FF80"></table>
            <script>
            var righe = <?php echo $righe ?>;
            var colonne = <?php echo $colonne ?>;
            </script>
            <script src="js/table_index.js"></script>
        </div>
      </div>
    </div>
  </div>
  <!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->

<!-- INIZIO FUNZIONE COLORA -->
<?php
$sql = "SELECT * FROM prenotazioni";
$result = mysqli_query($db,$sql);
while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){

      $utente = $row['utente'];
          echo "<script>
                 document.getElementById($row[posto]).disabled = true;
                 document.getElementById($row[posto]).style.backgroundColor = 'IndianRed';
                </script>";
}
?>
<!-- FINE FUNZIONE COLORA -->
</body>

</html>
