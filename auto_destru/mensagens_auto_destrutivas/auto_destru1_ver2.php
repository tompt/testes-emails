<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Envio de mensagens auto-destrutivas</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    	<style type="text/css">
		.auto-style1 {
			text-align: center;
		}
		</style>
    	</head>
    <body>
    <?php
    	
		//require 'dados_autodestru.php';
		 $servername = "localhost";$username = "root";$password = "";$dbname = "autodestru";
		 
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) 
		{
		    die("Connection failed: " . $conn->connect_error);
		}
		$id=$_POST['id'];
		$sql = "SELECT * FROM mensagens WHERE idmensagem LIKE '$id' and visto='0'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) 
		{
		    // output data of each row
		    while($row = $result->fetch_assoc()) 
		    {
		        //echo "idmensagem: " . $row["idmensagem"]. " - mensagem: " . $row["emissor"]. " " . $row["emissor"]. "<br>";
		        $idmensagem	=	$row["id"];
		        $nome		=	$row["emissor"];
		        $mensagem	=	$row["mensagem"];
		        $assunto	=	$row["assunto"];
		    }
			} else {
			    $msgmysql = "Não há mensagens.";
			    $idmensagem="";
			    $nome= "";
			    $mensagem= "";
			    $assunto= "";
			}

			// sql to update a record			
			$sql = "UPDATE mensagens SET visto='1' WHERE idmensagem='".$id."'";
			
			if ($conn->query($sql) === TRUE) {
			    $msgmysql = '<span class="auto-style1">Debug: </span> Registo actualizado';
			} else {
			    $msgmysql = '<span class="auto-style1">Debug: </span> Erro ao actualizar: ' . $conn->error;
			}

			$conn->close();
         		/*
                if(isset($_POST['nome']))
                  {$nome= $_POST['nome']; }
                  else
                  {	$nome= "sem nome";}
                if(isset($_POST['assunto']))
                  {$assunto= $_POST['assunto']; }
                  else
                  {	$assunto= "sem assunto";}
                if(isset($_POST['mensagem']))
                  {$mensagem= $_POST['mensagem']; }
                  else
                  {	$mensagem= "sem mensagem";}
              */
                if(isset($_POST['id']))
                  {$idmensagem= $_POST['id']; }
                  else
                  {	$idmensagem= "Não existe essa mensagem";}
 
               ?>

        <div id="main">
            <h1>Mensagem Única</h1>
            <div id="login">
                <span class="auto-style1"><h3><?php echo $idmensagem;?></h3></span>
                <hr/>
                                    
                <form action="index.php" method="get">
                    <input type="text" name="nome" value="<?php echo $nome;?>" disabled="disabled"/>  
                    <input type="text" name="assunto" value="<?php echo $assunto;?>" disabled="disabled"/>
                    <textarea cols="50" name="mensagem" style="height: 321px">Quem enviou: <?php echo $nome;?>&#13;&#10;Assunto: <?php echo $assunto;?>&#13;&#10;Mensagem: &#13;&#10;<?php echo $mensagem;?></textarea>
                	<p id="demo">Mensagem expira em </p>
                </form>    

				<script type="application/javascript">
					var today = new Date();
					var dd = today.getDate();
					var mm = today.getMonth()+1; //January is 0!
					var yyyy = today.getFullYear();
					
					if(dd<10) {
					    dd = '0'+dd
					} 
					
					if(mm<10) {
					    mm = '0'+mm
					} 
					
					today = mm + '/' + dd + '/' + yyyy;
					hora = "";
					document.write("Hoje: " + today + "  Hora: " + hora);
				</script>
				
				<br/><?php echo $msgmysql; ?> <br/>
				
				<p id="demo"></p>
            </div>
        </div>

	<div class="auto-style1">
		<br/><a href="index.php">Regressar </a><br/>
	</div>


<script>
// Set the date we're counting down to
var countDownDate = new Date("Jul 6, 2017 20:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRADO em "+ days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

    }
}, 1000);
</script>
    </body>
</html>
