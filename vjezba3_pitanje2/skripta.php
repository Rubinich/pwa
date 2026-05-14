<?php 

$host = "localhost";
$user = "root";
$password = "";
$database_name = "moja_baza";

$conn = mysqli_connect($host, $user, $password, $database_name);
if(!$conn)
    die("Konekcija nije uspjela: " . mysqli_connect_error());

$query = "SELECT * FROM korisnik;";
$result = mysqli_query($conn, $query);

?>