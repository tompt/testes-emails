﻿<?php
require 'dados.php';
$bd="autodestru";
?>
<h1>criar bd <?php echo $bd;?></h1>
<?php
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE " . $bd . " CHARACTER SET utf8 COLLATE utf8_general_ci;";
if (mysqli_query($conn, $sql)) {
    echo "Database " . $bd. " created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>