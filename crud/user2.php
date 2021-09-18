<?php
$id = $_POST["id"];
$u = $_POST["user"];
$p =  $_POST["pass"];
$db = "crud";
$conn = mysqli_connect("localhost", "root", "", $db) or die("connection error");
$sql = "update login set user = '$u', pass = '$p' where id = '$id'";
if($sql){
header("location:http://localhost/crud/index.php");
}
$result = mysqli_query($conn, $sql) or die("error");
?>