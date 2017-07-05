<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Send email via Gmail SMTP server in PHP</title>
        <link href="phpmailer/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="main">
            <h1>Enviar email via Gmail SMTP - php</h1>
            <div id="login">
                <h2>Enviar Email</h2>
                <hr/>
                <form action="index.php" method="post">
                    <input type="text" placeholder="Identidade gmail (email)" name="email" value="gualdimpais.1160@gmail.com"/>
                    <input type="password" placeholder="Passe da conta introduzida" name="password"/>
                    <input type="text" placeholder="Email de destino" name="toid" value="gualdimpais.1160@gmail.com"/>  
                    <input type="text" placeholder="Nome que deve aparecer como pessoa que envia" name="nome" value="Gualdim Pais"/>  
                    <input type="text" placeholder="Assunto" name="subject"/>
                    <textarea rows="4" cols="50" placeholder="Mensagem..." name="message"></textarea>
                    <input type="submit" value="Enviar" name="send"/>
                </form>    
            </div>
        </div>
          <?php
        
              require 'phpmailer/PHPMailerAutoload.php';
              if(isset($_POST['send']))
                  {
                    $email = $_POST['email'];                    
                    $password = $_POST['password'];
                    $to_id = $_POST['toid'];
                    $nome = $_POST['nome'];
                    $message = $_POST['message'];
                    $subject = $_POST['subject'];

                    $mail = new PHPMailer;

                    $mail->isSMTP();

                    $mail->Host = 'smtp.gmail.com';

                    $mail->Port = 587;

                    $mail->SMTPSecure = 'tls';

                    $mail->SMTPAuth = true;

                    $mail->Username = $email;

                    $mail->Password = $password;

                    $mail->setFrom = $nome;

                    $mail->addReplyTo = $email;
                    #('replyto@example.com', 'First Last');

                    $mail->addAddress($to_id);
                    
                    $mail->nome = $_POST['nome'];

                    $mail->Subject = $subject;

                    $mail->msgHTML($message);

                    if (!$mail->send()) {
                       $error = "Ocorreu um erro: " . $mail->ErrorInfo;
                        ?><script>alert('<?php echo $error ?>');</script><?php
                    } 
                    else {
                       echo '<script>alert("Mensagem enviada!");</script>';
                    }
               }
        ?>
    </body>
</html>
