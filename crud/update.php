<?php
$id = $_GET["id"];
$db = "crud";
$conn = mysqli_connect("localhost", "root", "", $db) or die("Kết nối lỗi");
$sql = "select * from login where id = '$id'";
$result = mysqli_query($conn, $sql) or die("error");
$r = mysqli_fetch_array($result);
?>
<h1 style="text-align: center;">UPDATE</h1>
<form action="user2.php" method="POST" style="text-align: center;">
<input type="hidden" name="id" value="<?php echo $r['id'];?>">
    User: <input type="text" name="user" value="<?php echo $r['user'];?>">
    <br><br>
    Pass: <input type="text" name="pass" value="<?php echo $r['pass'];?>">
    <br><br>
    <input type="submit" value="Update">
</form>