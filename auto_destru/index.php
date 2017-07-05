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
    </head>
    <body>
        <div id="main">
            <h1>mensagem auto destrutiva</h1>
            <div id="login">
					<?php
						$digits_needed=22;
						$random_number=''; // set up a blank string
						$count=0;
						
						while ( $count < $digits_needed ) {
						    $random_digit = mt_rand(0, 9);
						    $random_number .= $random_digit;
						    $count++;
						}
					echo "<h2>Mensagem $random_number </h2>";
					?>
                
                <hr/>
                <form action="processar.php" method="get">
                    &nbsp;
                    <input type="text" placeholder="Nome que deve aparecer como pessoa que envia" name="nome" value="Gualdim Pais"/>  
                    <input type="text" placeholder="Assunto" name="assunto" value="assunto"/>
                    <textarea cols="50" placeholder="Mensagem..." name="mensagem" style="height: 330px"></textarea>
                    <input type="hidden" name="idmensagem" value="<?php echo $random_number;?>"/>
                    <input type="submit" value="Enviar" name="send"/>
                </form>    
            </div>
        </div>        
    </body>
</html>
