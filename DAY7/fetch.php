<?php
//DB connection
$connection = mysqli_connect("localhost","root", "","database_i");
//query
$q = mysqli_query($connection,"select * from tbl_user") or die(mysqli_error($connection));
//below function will fetch data as numerical array
$row = mysqli_fetch_row($q);
print_r($row);
echo $row[0].$row[1].$row[2].$row[3];


$row = mysqli_fetch_array($q);
echo "<pre>";
print_r($row);
echo "<pre>";