<?php
$db = "crud";
$conn = mysqli_connect("localhost", "root", "", $db) or die("connection error");
$sql = 'select * from login';
$result = mysqli_query($conn, $sql) or die("error");
?>
<h1 style="text-align:center">READ</h1>
<table border="4" style="font-size: 20px;margin: 0 auto;">
    <tr>
        <th>STT</th>
        <th>USER</th>
        <th>PASS</th>
        <th>ACTION</th>
    </tr>
<?php
$i = 1;
echo "<tr><td colspan='4' style='text-align:center;'><a href='http://localhost/crud/create.php'>Create</a></td></tr>";
while ($r = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td>".$r["user"]."</td>";
    echo "<td>".$r["pass"]."</td>";
    echo "<td><a href='update.php?id=".$r['id']."'>Update</a> | <a href='delete.php?id=".$r['id']."'>Delete</a></td>";
    echo "</tr>";
    $i++;
}
?>
</table>