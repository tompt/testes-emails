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
                    Escolha a opção pretendida&nbsp;&nbsp;
                    <div id="images">
					    <a href="mailto:olympiahaacht@hotmail.com">
					    	<img class="fblogo" alt="" height="243" src="icons/escrever.PNG" width="272"></a>
					    	
					    <a href="auto_destru1_ver.php" target="_blank">
					    	<img class="fblogo" alt="" height="243" src="icons/ver.PNG" width="272"></a>
					</div>
					<br/>Se pretende ver uma mensagem recebida:&nbsp;&nbsp;
                    <input type="text" placeholder="Insira aqui o código da mensagem" name="id"/><br>
					<br>&nbsp;<input type="submit" value="Ver mensagem" name="send"/>
                </form>    
            </div>
        </div>        
    </body>
</html>
