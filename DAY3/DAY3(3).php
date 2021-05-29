
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMS</title>
</head>
<body>
    <H2>This is html forms tutorial.</H2>
    <form action="backend.php">
        <label for="Name">NAME </label>
        <div>
            <input type="text" id="Name">
        </div>
        <br>
        <label for="1">ROLE</label>
        <div>
             <input type="text" id="1">
        </div>
        <br>
        <label for="mail">Email</label>
        <div>
            <input type="email" name="my email" id="mail">
        </div>
        <br>
        <div>
            Bonus: <input type="number" name="my Bonus">
        </div>
        <br>
        <div>
            <input type="date">
        </div>
        <br>
        <div>
            <input type="time">
        </div>
        <br>
        <div>
            Are you eligiblE?<input type="checkbox" name="my eligibility">
        </div>
        <br>
        <div>
            Write about yourself <br>
            <textarea name="myText"  cols="30" rows="10"></textarea>
        </div>
        <br>
        <div>
            Gender : Male<input type="radio" name="my Gender"> Female<input type="radio" name="my Gender">
        
        </div>
        <br>
        <div>
            <input type="submit" name="SUBMIT NOW">
            <input type="reset" name="RESET NOW">

        </div>
    </form>
</body>

</html>