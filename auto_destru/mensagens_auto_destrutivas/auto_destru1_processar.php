<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="pt" http-equiv="Content-Language" />
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    	<style type="text/css">
		.alinharcentro {
			text-align: center;
		}
		</style>
</head>
<body>	
<div class="alinharcentro">
	
<?php
//require 'dados_autodestru.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "autodestru";

       if(isset($_POST['emissor']))
       {$emissor= $_POST['emissor']; }
      else
      {	$emissor= "sem emissor";}
      
      if(isset($_POST['assunto']))
      {$assunto= $_POST['assunto']; }
      else
      {	$assunto= "sem assunto";}
      
       if(isset($_POST['mensagem']))
       {$mensagem= $_POST['mensagem']; }
       else
      {	$mensagem= "sem mensagem";}
   
      if(isset($_POST['id']))
      {$idmensagem= $_POST['id']; }
      else
      {	$idmensagem= "sem id de mensagem - nao existe essa mensagem";}
 

$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// variáveis para segurança e evitar sql injection
$idmensagem= mysqli_real_escape_string($con, $_POST['idmensagem']);
$emissor= mysqli_real_escape_string($con, $_POST['emissor']);
$assunto= mysqli_real_escape_string($con, $_POST['assunto']);
$mensagem= mysqli_real_escape_string($con, $_POST['mensagem']);

$sql="INSERT INTO mensagens (idmensagem, emissor, mensagem,assunto, data)
VALUES ('$idmensagem', '$emissor', '$mensagem','$assunto',NOW())";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
	}
	else
	{
	//echo "Adicionado registo!";
	//echo "<br/><a href='auto_destru1_ver.php?id=$idmensagem'>Ver mensagem. ATENÇÃO: se a vir, a mensagem é apagada!!!!</a>";
	echo "<br/>Copie e mande este código a quem quer que veja a sua mensagem: <br/> <h1>$idmensagem</h1>"; 
	}
	
mysqli_close($con);
?> 

		<br/><a href="index.php">Regressar </a><br/>
</div>
</body>

