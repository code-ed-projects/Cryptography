<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cryptography";
$t=$_POST['title'];
$e=$_POST['encript'];$d=$_POST['decript'];$des=$_POST['description'];
$n=$_POST['name'];$em=$_POST['email'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO thereal1 (encript, decript, description, title, name, email)
VALUES ('$e', '$d', '$des', '$t', '$n', '$em')";

if (mysqli_query($conn, $sql)) {
    echo "hurray";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>