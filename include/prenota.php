<?php

include('config.php');

$sql = "SELECT * FROM prenotazioni";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$active = $row['active'];

$count = mysqli_num_rows($result);

$free = 50 - $count;
?>
