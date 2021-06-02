<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1 to 5 Array Function</title>
</head>
<body>
    <h2>
        <?php
            // 1️. count()
            
            $color = array("Red", "Green", "Blue", "Black");
            echo count($color);
            
        

            // 2️. array_count_values()
            // counts all the values of an array. Not give repeat element.
            $color = array("Red", "Green", "Black", "Blue", "Green", "Red");
            print_r(array_count_values($color));
            

            // 3. array_sum()
            $a = array(10, 20, 30);
            echo array_sum($a);
        
            // 4. array_product()
            $a=array(10,5,20);
            echo(array_product($a));
            
            $string = array("Dhruvi", "Mahida", "Web Developer");
            echo(array_product($string));
            
            // 5. array_reverse()
            $a = array("Dhruvi", "Mahida", "Web Developer");
            print_r(array_reverse($a));

            // 6. in_array()
            $a = array(10,15,20);
            print_r(in_array($a));

            // 7. array_rand()
            $a = array(10,20,30);
            echo (array_rand($a));
        ?>
    </h2>
</body>
</html>