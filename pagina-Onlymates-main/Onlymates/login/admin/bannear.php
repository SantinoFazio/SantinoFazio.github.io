<?php
$id = $_GET['id'];

$cnx = mysqli_connect('localhost','root','','basedatos');


$c = "UPDATE usuarios SET ESTADO='banneado' WHERE ID='$id'";

mysqli_query($cnx, $c);
header("Location: index.php");

?>