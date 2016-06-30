<?php

$sql = "SELECT * FROM prenotazioni";
$result = mysqli_query($db,$sql);
while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){

      $utente = $row['utente'];

      if(isset($_SESSION['email'])){
        /*se l'utente corrente ha prenotato i posti li colora di arancione*/
        if($utente == $_SESSION['email']){
          echo "
          <script>document.getElementById($row[posto]).style.backgroundColor = 'GoldenRod '
                document.getElementById($row[posto]).onclick=function()
                {
                delete_id($row[posto]);
                };
          </script>
          ";
        }
        else{
          /*altrimenti di rosso*/
          echo "<script>document.getElementById($row[posto]).style.backgroundColor = 'IndianRed'</script>";
        }
      }

}
?>
