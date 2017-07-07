<?php
require 'dados.php';
?>
<h1>criar tabela</h1>

<?php
// Create connection
$dbname = "autodestru";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE mensagens (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
idmensagem VARCHAR(30) NOT NULL,
emissor VARCHAR(30) NOT NULL,
mensagem VARCHAR(9999),
visto VARCHAR(30) DEFAULT '0',
expira VARCHAR(30),
data TIMESTAMP,
assunto VARCHAR(150)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table mensagens created successfully";
} else {
    echo "Erro na criacao da tabela mensagens: " . mysqli_error($conn);
}

mysqli_close($conn);
?>