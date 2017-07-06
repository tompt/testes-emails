<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="pt" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	
	<style type="text/css">
	.auto-style1 {
		border-style: solid;
		border-width: 1px;
	}
	.auto-style2 {
		color: #FFFFFF;
		background-color: #008080;
	}
	</style>

</head>

<body>

<a href="2-form-inserir.php">Inserir fontes</a> - 
<a href="4-mostrar_tudo.php">Mostrar tudo</a> - 
<a href="5-mostrar_listainteresse.php">Sites de interesse</a> - 
<a href="6-mostrar_listanegra.php">Lista Negra</a> -
<a href="6-mostrar_listabranca.php">Lista Branca</a> -
<a href="7-mostrar_naoverificados.php">Não verificados</a> - <br><br>


<?php
	$pax_loc="localhost";
	$pax_user="root";
	$pax_pax="";
	$pax_bd="tese";
$mysqli = new mysqli("localhost", "root", "","tese") or die(mysql_error());

mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');


/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
/* change character set to utf8 */
if (!$mysqli->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $mysqli->error);
} else {
    printf("Current character set: %s\n", $mysqli->character_set_name());
}
$result = mysqli_query($mysqli ,"SELECT * FROM sites") or die(mysql_error()); 


echo "<table border='1'>
<tr>
<th>ID</th>
<th>Tema</th>
<th>Link</th>
<th>Detalhes</th>
<th>Data de inserção</th>
<th>Blacklist</th>
<th>Whitelist</th>
<th>Editar</th>
<th>Apagar</th>
<th>Utilizador</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
$black=$row['blacklist'];
if ($black=="1") {
  $black= "Sim";
} else {
  $black= "Nao";
}
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['tema'] . "</td>";
  echo '<td><a href="' . $row['link'].  '">' . $row['link'].  '</a></a></td>';
  echo "<td>" . $row['detalhes'] . "</td>";
  echo "<td>" . $row['data'] . "</td>";
  echo "<td>" . $black . "</td>";
  echo "<td>" . "white" . "</td>";
  echo '<td><a href="editar.php?id=' . $row['id'] . '"><img src="editar.png" <height="25" width="25"></a></td>';
  echo '<td><a href="8-apagar.php?id=' . $row['id'] . '"><img src="apagar.jpg" <height="25" width="25"></a></a></td>';
  echo '<td><a href="1238-apagar.php?id=' . $row['utilizador'] . '">' . $row['utilizador'] . '</a></a></td>';
  echo "</tr>";
}
echo "</table>";
mysqli_close($mysqli);
?> 

<br><br>
