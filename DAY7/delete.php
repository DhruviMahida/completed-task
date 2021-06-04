<?php

$connection = mysqli_connect("localhost","root","","database_i");

$id = $_GET['deleted'];


$q = mysqli_query($connection, "delete from the tbl_user where the user id='{$id}'");

if ($q) {
    # code...
    echo "<script>alert('Record deletd');window.location='3table.php'</script>";
}
?>