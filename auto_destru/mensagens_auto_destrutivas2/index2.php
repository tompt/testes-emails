<!DOCTYPE html>
<html>
    <head>
		<meta content="pt" http-equiv="Content-Language" />
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <meta charset="UTF-8">
		<!--
		To change this license header, choose License Headers in Project Properties.
		To change this template file, choose Tools | Templates
		and open the template in the editor.
		-->
        <title>Envio de mensagens auto-destrutivas</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
        <div id="main">
            <h1>Mensagem Única</h1>
            <div id="login">					               
                <form action="auto_destru1_ver.php" method="POST">
                	<br/>&nbsp;
                    Escolha a opção pretendida<br/> <br/>
                    <div id="images">
					    <a href="auto_destru2_ver.php">
					    	<img class="fblogo" alt="Ver mensagem" height="243" src="icons/ver.PNG" width="272"></a>

					    <a href="auto_destru2_criar.php">
					    	<img class="fblogo" alt="Criar mensagem" height="243" src="icons/escrever.PNG" width="272"></a>
					    	
					    	
						<?php
							#$starttime = time(); // PHP's date values are simply "seconds since jan 1/19170"
							#$target = $now + (5 * 60);
							#echo "starttime:" . $startime;
							#echo "target:" . $target;
							
							#$query = "SELECT target, starttime FROM countdowntimer";
							#$result = mysql_query($query) or die(mysql_error());
							#$row = mysql_fetch_assoc($result);
							#$target = $result['target'];
							#$starttime = $result['target'];
						?>
					    <br/> <br/><br/>
					</div>
                </form>    
            </div>
        </div>  
        <center><a href="https://iknow.suroot.com/login.php">Regressar a IKNOW</a></center>      
    </body>
</html>
