<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="pt" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	
	<style type="text/css">
	.auto-style1 {
		border-style: solid;
		border-width: 1px;
	}
	.auto-style2 {
		color: #FFFFFF;
		background-color: #008080;
	}
	</style>

</head>
<body>
<?php
require 'menu.php';
?>

<form action="3_processar_form_inserir.php" method="post">
Novo tema/assunto?<input type="text" name="tema"><br>

Link: <input type="text" name="link"><br>

Detalhes: <input type="text" name="detalhes"><br>
<input type="submit">
</form>

</body>
</html> 
