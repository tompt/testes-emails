<?php
require 'dados.php';
?>
<h1>apagar dados</h1>
<?php
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id=9";

if ($conn->query($sql) === TRUE) {
    echo "Record 9 deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>