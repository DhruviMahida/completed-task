<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>21 to 25 Array Function</title>
</head>
<body>
    <h2>
        <?php
            // 21.⏯ compact()
            // $firstname = "Princy";
            // $lastname = "Patel";
            // $email = "pspatel@gmail.com";

            // $result = compact("firstname", "lastname", "email");
            // print_r($result);

            // 22.⏯ array_flip()
            // $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
            // $result=array_flip($a1);
            // print_r($result);

            // 23.⏯ array_diff()
            // $people1=array("a"=>"Princy","b"=>"Yatra","c"=>"Dharmik","d"=>"Krinal");
            // $people2=array("e"=>"Princy","f"=>"Yatra","g"=>"Dharmik");

            // $result=array_diff($people1,$people2);
            // print_r($result);

            // 24.⏯ array_intersect()
            // $people1=array("a"=>"Princy","b"=>"Yatra","c"=>"Dharmik","d"=>"Krinal");
            // $people2=array("e"=>"Princy","f"=>"Yatra","g"=>"Dharmik");

            // $result=array_intersect($people1,$people2);
            // print_r($result);

            // 25.⏯ array_values()
            // $a=array("Fname"=>"Princy","lname"=>"Patel","Email"=>"pspatel@gmail.com");
            // print_r(array_values($a));

             // 26. ⏯ array_push()
        // $a=array("red","green");
        // array_push($a,"blue","yellow");
        // print_r($a);

        // 27. ⏯ array_pop()
        // $a=array("Banana","Apple","Mango");
        // array_pop($a);
        // print_r($a);

        // 28. ⏯ explode()
        // $str = "Good Morning! Have a nice day!";
        // print_r (explode(" ",$str));

        // 29. ⏯ implode()
        $arr = array('Good','Morning!','Have','a','great', 'day!');
        echo implode(" ",$arr);
        ?>
    </h2>
</body>
</html>