<!DOCTYPE html>
<html>
<head>
    <title>Marksheet</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container col-lg-6 m-auto">
<form class="form-group" action="process1.php" methode="POST">
    <label> Name</label>
    <div><input type="text" name="name" class="form-cantrol" placeholder="Enter Your Name"></div>
    <br>
    <label> Father name</label>
    <div><input type="text" name="F_name" class="form-cantrol" placeholder="Enter Your Father's Name"> </div>
    <br>
    <label> class</label>
    <div><input type="number" name="class" class="form-cantrol" placeholder="Enter Your class"></div>
    <br>
    <label> Role number</label>
    <div><input type="number" name="role" class="form-cantrol" placeholder="Enter Your Roll no."></div>
    <br>
    <label> Maths marks</label>
    <div><input type="number" name="maths" class="form-cantrol" placeholder="Enter Your marks"></div>
    <br>
    <label> Science marks</label>
    <div><input type="number" name="science" class="form-cantrol" placeholder="Enter Your marks"></div>
    <br>
    <label> English marks</label>
    <div><input type="number" name="english" class="form-cantrol" placeholder="Enter Your marks"></div>
    <br>
    <label> Computer marks</label>
    <div><input type="number" name="computer" class="form-cantrol" placeholder="Enter Your marks"></div>
    <br><div>
    <input type="submit" name="result" value="check result" class="botton margin-2">

</form>

</div>
    
</body>
</html>