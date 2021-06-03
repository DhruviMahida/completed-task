<?php
    $host = "localhost";
    $username = "root";
    $passwd = "";
    $dbname = "database_i";
    // Connection Function
   $connection = mysqli_connect($host, $username, $passwd, $dbname);

   $q = mysqli_query($connection, "insert into tbl_user(user_name, user_gender, user_mobile) values('Dharmik','Male','14586622')") or die("Error". mysqli_error($connection));

   if ($q) {
       echo "<script>alert('Record added');</script>";
   }

?>