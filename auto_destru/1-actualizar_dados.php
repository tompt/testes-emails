<?php
require 'dados.php';
?>
<h1>actualizar dados</h1>
<?php
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE MyGuests SET lastname='asdasdsadsdasda' WHERE id=8";

if ($conn->query($sql) === TRUE) {
    echo "Record 8 updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>