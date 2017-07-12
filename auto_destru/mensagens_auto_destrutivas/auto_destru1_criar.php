<!DOCTYPE html>
<html>
    <head>
		<meta content="pt" http-equiv="Content-Language" />
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <meta charset="UTF-8">
        <title>Envio de mensagens auto-destrutivas</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    	<style type="text/css">
		.auto-style1 {
			font-size: small;
		}
		.auto-style2 {
			text-align: center;
		}
		</style>
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
					?>
        	<div class="auto-style2">
				<br/>Mensagem: <?php echo "$random_number";?>
			</div>
                <hr/>
                <form action="auto_destru1_processar.php" method="POST">
                    <span class="auto-style1">Como funciona: Coloque uma mensagem e clique guardar. Nome e assunto são opcionais. Guarde o código que depois é fornecido e dê-o a quem quer que veja a sua mensagem.</span>
                    <input type="text" placeholder="Opcional: nome que deve aparecer como pessoa que envia" name="emissor" value=""/>  
                    <input type="text" placeholder="Opcional: assunto" name="assunto" value=""/>
                    <textarea cols="50" placeholder="Mensagem..." name="mensagem" style="height: 330px"></textarea>
                    <input type="hidden" name="idmensagem" value="<?php echo $random_number;?>"/>
                    <input type="submit" value="Guardar" name="send"/>
                </form>    
            </div>
        </div>
        <div class="auto-style2">
        <a href="index.php">Regressar </a>        
    	</div>
    </body>
</html>
