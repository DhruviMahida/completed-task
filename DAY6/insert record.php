<?php
$connection = mysqli_connect("localhost", "root", "", "database_i");
if ($_POST) {
    # code...
    $name= $_POST['txt1'];
    $gender = $_POST['txt2'];
    $mobile = $_POST['txt3'];


    $q = mysqli_query ( $connection, "insert into tbl_user(user_name,uder_gender,user_mobile) values('{$name}','{$gender}','{$mobile}')") or die(mysqli_error($connection));
    if ($q){
        echo "<script>alert('Record added');</script>";
    }
}
?>
<html>
<body>
    <form methode="post">
    Name : <input type="text" name="txt1"/>;
    Gender : <select nane="txt2">
            <option>Male</option>
            <option> Female</option>

            </select>
            mobile num : <input type="num" name="txt3"/>
            <input type="submit"/>    
    </form>

</body>
</html>