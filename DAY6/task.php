<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "database_d";

$connection = mysqli_connect($host, $username, $password, $dbname );

$q = mysqli_query($connection,
            "insert into tbl_student() values()"); 
            or die("Error". mysqli_error($connection));

    if ($q) {
        echo "<script>alert('Record Added'); </script>";
    }