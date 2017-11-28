<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$database = "llibreria";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM genere WHERE id=('".$_POST['id']."')";

if (mysqli_query($conn, $sql)) {
    echo "Genere eliminat correctament";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>