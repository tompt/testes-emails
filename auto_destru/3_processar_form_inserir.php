<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="pt" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	
<?php
require 'paxs.php';

$con=mysqli_connect("$pax_loc", "$pax_user", "$pax_pax","$pax_bd");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// variáveis para segurança e evitar sql injection
$tema = mysqli_real_escape_string($con, $_POST['tema']);
$link = mysqli_real_escape_string($con, $_POST['link']);
$detalhes = mysqli_real_escape_string($con, $_POST['detalhes']);


$sql="INSERT INTO sites (tema, link, detalhes, data)
VALUES ('$tema', '$link', '$detalhes',NOW())";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "Adicionado registo!";

mysqli_close($con);
?> 
