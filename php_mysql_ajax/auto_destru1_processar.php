<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>processar...</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
             <?php 
                if(isset($_GET['nome']))
                  {$nome= $_GET['nome']; }
                  else
                  {	$nome= "sem nome";}
                if(isset($_GET['assunto']))
                  {$assunto= $_GET['assunto']; }
                  else
                  {	$assunto= "sem assunto";}
                if(isset($_GET['mensagem']))
                  {$mensagem= $_GET['mensagem']; }
                  else
                  {	$mensagem= "sem mensagem";}
                if(isset($_GET['idmensagem']))
                  {$idmensagem= $_GET['idmensagem']; }
                  else
                  {	$idmensagem= "sem id de mensagem - nao existe essa mensagem";}
 
               ?>

        <div id="main">
            <h1>Mensagem auto destrutiva  em 10 segundos</p></h1>
            <div id="login">
                <h2>Mensagem <?php echo $idmensagem;?></h2>
                <hr/>
                                    
                <form action="index.php" method="get">
                    <input type="text" placeholder="Nome que deve aparecer como pessoa que envia" name="nome" value="<?php echo $nome;?>" disabled="disabled"/>  
                    <input type="text" placeholder="Assunto" name="assunto" value="<?php echo $assunto;?>" disabled="disabled"/>
                    <textarea cols="50" placeholder="Mensagem..." name="mensagem" disabled="disabled" style="height: 321px">Quem enviou: <?php echo $nome;?>&#13;&#10;Assunto: <?php echo $assunto;?>&#13;&#10;Mensagem: &#13;&#10;<?php echo $mensagem;?></textarea>&nbsp;
                	<p id="demo">Mensagem expira em </p>
                </form>    
            </div>
        </div>

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
	document.write("Hoje: " + today);
</script>



<p id="demo"></p>

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
