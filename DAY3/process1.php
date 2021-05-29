<?php
    if ( isset($_POST['result']) ) {

        $name = $_POST['name'];
        $F_name = $_POST['F_name'];
        $standard = $_POST['class'];
        $roll = $_POST['role'];
        $maths = $_POST['maths'];
        $science = $_POST['science'];
        $english = $_POST['english'];
        $computer = $_POST['computer'];

        $obtained_marks = $maths + $science +$english + $computer;
        $percentage = $obtained_marks * 100 / 400;
    }
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <title></title>
    </head>
    <body>
    
    <div class="container col-lg-8">
    <table class="table" border='5'>
    <th class="thead-dark">
    <tr>
    <th>Your Name is:</th>
    <th>Your father name is:</th>
    <th>Your class is:</th>
    <th>Ypur Roll no is:</th>
    <th>Your obtained marks is:</th>
    <th>Your percentage is:</th>
    </tr>
    </th>
    <tbody>

    <tr>
    <td><?php echo $name?></td>
    <td><?php echo $F_name?></td>
    <td><?php echo $standard?></td>
    <td><?php echo $roll?></td>
    <td><?php echo $obtained_marks?></td>
    <td><?php echo $percentage . "%"?></td>
    </tr> 
    </tbody>   
    
    </table>
    </div>
    
        
    </body>
    </html>