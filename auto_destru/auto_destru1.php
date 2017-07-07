<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="pt" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Envio de mensagens auto-destrutivas</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="main">
            <h1>Mensagem Única</h1>
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
                <form action="auto_destru1_processar.php" method="POST">
                    &nbsp;
                    <input type="text" placeholder="Nome que deve aparecer como pessoa que envia" name="emissor" value="Gualdim Pais"/>  
                    <input type="text" placeholder="Assunto" name="assunto" value="assunto"/>
                    <textarea cols="50" placeholder="Mensagem..." name="mensagem" style="height: 330px"></textarea>
                    <input type="hidden" name="idmensagem" value="<?php echo $random_number;?>"/>
                    <input type="submit" value="Enviar" name="send"/>
                </form>    
            </div>
        </div>        
    </body>
</html>
