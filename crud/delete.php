<?php
$id = $_GET["id"];
$db = "crud";
$conn = mysqli_connect("localhost", "root", "", $db) or die("connection error");
$sql = "delete from login where id = '$id'";
$result = mysqli_query($conn, $sql) or die("error");
if($sql){
        header("location:http://localhost/crud/index.php");
}
?>