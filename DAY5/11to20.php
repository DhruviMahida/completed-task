<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11 to 15 Function of Array</title>
</head>
<body>
   <h2>
        <?php
            //11.⏯ range()
            // $number = range(0,10);
            // print_r ($number);

            //12.⏯ sort()
            // $color=array("Red","Grren","Black","Blue");
            // sort($color);

            // $clength=count($color);
            // for($x=0;$x<$clength;$x++)
            // {
            //     echo $color[$x];
            //     echo "<br>";
            // }

            // 13.⏯ rsort()
            // $color=array("Red","Grren","Black","Blue");
            // rsort($color);

            // $clength=count($color);
            // for($x=0;$x<$clength;$x++)
            // {
            //     echo $color[$x];
            //     echo "<br>";
            // }

            // 14.⏯ asort()
            // $age=array("Princy"=>"19","Dharmik"=>"16","Krinal"=>"24");
            // arsort($age);

            // foreach($age as $z=>$z_value)
            // {
            //     echo "Key=" . $z . ", Value=" . $z_value;
            //     echo "<br>";
            // }

            // 15.⏯ ksort() 
            $age=array("Princy"=>"19","Dharmik"=>"16","Krinal"=>"24");
            krsort($age);

            foreach($age as $a=>$a_value)
            {
                echo "Key=" . $a . ", Value=" . $a_value;
                echo "<br>";
            }

            // ⏯ 16. shuffle()
            // $my_array = array("PHP","HTML","CSS","JavaScript","Ruby");

            // shuffle($my_array);
            // print_r($my_array);

            // ⏯ 17. array_key_exists()
            // $a=array("Red"=>"Apple","Mango"=>"Green");
            //     if (array_key_exists("Mango",$a)){
            //         echo "Fruits exists!";
            //     }
            //     else{
            //         echo "Fruits does not exist!";
            //     }

            // ⏯ 18. array_change_key_case()
            // $age=array("Yatra"=>"10","Hari"=>"4","Prachi"=>"7");
            // print_r(array_change_key_case($age,CASE_UPPER));

            // ⏯ 19. array_combine()
            // $fname=array("Princy","Dharmik","Krinal");
            // $lname=array("Patel","Kapatel","Kapatel");
            // $c=array_combine($fname,$lname);
            // print_r($c);

            // ⏯ 20. end()
            // $people = array("Princy", "Dharmik", "Krinal", "Yatra");
            // echo end($people);
        ?>
        
   </h2> 
</body>
</html>