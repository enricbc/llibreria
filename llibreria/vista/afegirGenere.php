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

$sql = "INSERT INTO genere (nom) VALUES ('".$_POST['nombre']."')";

if (mysqli_query($conn, $sql)) {
    echo "S'ha afegit el genere correctament";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>