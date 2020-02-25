<?php 
include("connection.php");
$name = $_POST["name"];
$emain = $_POST["emain"];
$password = $_POST["password"];

$sql = "INSERT INTO users values(NULL,'$name','$emain','$password')";
$query = mysqli_query($db,$sql);
if($query){
    echo "<h1>korisnik sacuvan</h1>";
}