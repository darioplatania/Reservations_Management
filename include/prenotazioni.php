<html>
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

    <body>
      <div id="wrapper">

          <!-- Sidebar -->
          <div id="sidebar-wrapper">
              <ul class="sidebar-nav">
                  <li class="sidebar-brand">
                      <a href="../index.php">
                          Show Management
                      </a>
                  </li>
                  <li>
                      <a href="php/signup.php">Registazione</a>
                  </li>
                  <li>
                      <a href="php/signin.php">Accedi</a>
                  </li>
              </ul>
          </div>
          <!-- /#sidebar-wrapper -->

          <!-- Page Content -->

          <div id="page-content-wrapper">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-md-6" >
                        <h1 style="text-align:left">La nostra Sala</h1>
                        <p style="text-align:left">Prenota ora i tuoi posti a sedere!</p>
                        <br><br>

                        <table id="tb" class="table table-bordered" style="background-color: #80FF80"></table>
                          <script type="text/javascript">
                          for (var j = 0; j < 10; j++) {
                            var table = document.getElementById("tb");
                            var row = table.insertRow(j);
                            var cell = new Array();
                            for (var i = 0; i < 5; i++) {
                            cell[i] = row.insertCell(i);
                            cell[i].innerHTML = String.fromCharCode(j+65) + (i+1);
                            cell[i].style.backgroundColor = "lightgreen";
                            cell[i].onclick=function(){
                              if (this.style.backgroundColor == "lightgreen"){
                                  this.style.backgroundColor = "khaki ";
                              }
                              else {
                                this.style.backgroundColor = "lightgreen";
                              }
                            };
                          }
                        }
                        </script>
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
