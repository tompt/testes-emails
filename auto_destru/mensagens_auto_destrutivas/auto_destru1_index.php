<!DOCTYPE html>
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
        <meta charset="UTF-8">
        <title>Envio de mensagens auto-destrutivas</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="main">
            <h1>Mensagem Única</h1>
            <div id="login">
					               
                <form action="auto_destru1_ver.php" method="POST">
                	<br/>&nbsp;
                    Insira o código que lhe foi fornecido e que identifica a mensagem:&nbsp;
                    <input type="text" placeholder="Insira aqui o código da mensagem" name="id"/>&nbsp;&nbsp;
                    <input type="hidden" name="idmensagem" value="<?php echo $random_number;?>"/>
                    <input type="submit" value="Ver mensagem" name="send"/>
                </form>    
            </div>
        </div>        
    </body>
</html>
