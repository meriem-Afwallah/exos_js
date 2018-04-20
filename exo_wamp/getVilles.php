<?php

$cp = $_POST['cp'];
$query = "SELECT IDVille, Ville FROM villes WHERE CodePostal LIKE '$cp%' ORDER BY Ville";
$cn = new mysqli('localhost', 'root', '', 'stage');
$rs = mysqli_query($cn, $query);
$data = array();
while($row = $rs->fetch_array(MYSQLI_NUM)) {
   $data[] = $row;
}
mysqli_close($cn);
echo json_encode($data);