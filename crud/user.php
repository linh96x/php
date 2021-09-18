<?php
$u = $_POST["user"];
$p =  $_POST["pass"];
$db = "crud";
$conn = mysqli_connect("localhost", "root", "", $db) or die("connection error");
$sql = "INSERT INTO login(user,pass) VALUES ('$u','$p')";
if($sql){
header("location:http://localhost/crud/index.php");
}
$result = mysqli_query($conn, $sql) or die("error");
?>