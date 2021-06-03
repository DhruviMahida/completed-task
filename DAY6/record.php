<?php
$connection = mysqli_connect("localhost", "root","","database_d");
    if ($_POST) {
        # code...
        echo "yes";
        $Id = $_POST['txt1'];
        $Name = $_POST['txt2'];
        $Gender = $_POST['txt3'];
        $Email = $_POST['txt4'];
        $Mobile = $_POST['txt5'];
        $Address = $_POST['txt6'];
        $Password = $_POST['txt7'];
        $DOB = $_POST['txt8'];
        $Area = $_POST['txt9'];
        $BloodGroup = $_POST['txt10'];

        $q = mysqli_query($connection, "insert into tbl_student () value()") or die(mysqli_error($connection));
    }
?>
<html>
<body>
<form methode="post">
        Id : <input type="number" name="txt1"/>
        <br>
        Name : <input type="text" name="txt2"/>
        <br>
        Gender : <select name="txt3">
                <option>Male</option>
                <option>Female</option>
                </select>
                <br>
        Email : <input type="text" name="txt4"/><br>
        Mobile : <input type="number" name="txt5"/><br>
        Address : <input type="text" name="txt6"/><br>
        Password : <input type="name" name="txt7"/><br>
        DOB : <input type="date" name="txt8"/><br>
        Area : <select name="txt9">
                <option> web development</option>
                <option> PHP </option>
                <option> Android </option><br>
            </select><br>
        BloodGroup : <select name="txt10">
                        <option> A+ </option>
                        <option> A- </option>
                        <option> B+ </option>
                        <option> B- </option>
                        <option> O+ </option>
                       </select><br>
                       <input type="submit"/><br>
</form>
    

</body>

</html>