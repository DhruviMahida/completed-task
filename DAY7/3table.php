<?php
$connection = mysqli_connect("localhost","root", "","database_i");
//query
$q = mysqli_query($connection,"select * from tbl_user") or die(mysqli_error($connection));

echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>NAME</th>";
echo "<th>GENDER</th>";
echo "<th>MOBILE</th>";

echo "</tr>";
$i =0;

while($row = mysqli_fetch_array($q)) {
    $i++;
    echo "<tr>";
    echo "<td>{$row['user_id']}</td>";
    echo "<td>{$row['user_name']}</td>";
    echo "<td>{$row['user_gender']}</td>";
    echo "<td>{$row['user_mobile']}</td>"; 
    echo "<td><a href='delete.php?deleteid=1'>DELETE</td>";
    echo "</tr>";



}

echo "</table>"

// echo "<a href='insertrecord.php'> Add Record </a>";
?>