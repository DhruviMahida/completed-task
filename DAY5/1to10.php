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
            // 1️.⏯ count()
            // $color = array("Red", "Green", "Blue", "Black");
            // echo count($color);

            // 2️.⏯ array_count_values()
            // counts all the values of an array. Not give repeat element.
            // $color = array("Red", "Green", "Black", "Blue", "Green", "Red");
            // print_r(array_count_values($color));

            // 3.⏯ array_sum()
            // $a = array(10, 20, 30);
            // echo array_sum($a);

            // 4.⏯ array_product()
            // $a=array(10,5,20);
            // echo(array_product($a));

            // $string = array("Princy", "Patel", "Web Developer");
            // echo(array_product($string));

            // 5.⏯ array_reverse()
            $a = array("Princy", "Patel", "Web Developer");
            print_r(array_reverse($a));

             // 6.⏯ in_array()
            // $developer = array("PHP", "HTML", "CSS", "JavaScript");
            // if(in_array("laravel ", $developer)){
            //     echo "This is language";
            // }
            // else{
            //     echo "This is not language";
            // }

            // 7.⏯  array_rand()
            // $a=array("Chocolate","Ice-Cream","Dairy-Milk","KitKat","brownie");
            // $random_keys=array_rand($a,3);
            // echo $a[$random_keys[0]]."<br>";
            // echo $a[$random_keys[1]]."<br>";
            // echo $a[$random_keys[2]];

            // 8.⏯ array_unique()
            // $a=array("a"=>"Princy","b"=>"Patel","c"=>"Patel");
            // print_r(array_unique($a));
            
            // 9.⏯array_search()
            // $a=array("a"=>"cars","b"=>"buses","c"=>"trains");
            // echo array_search("buses",$a);
            
            // 10.⏯ array_merge()
            $a1=array("Princy","Patel");
            $a2=array("Web","Developer");
            print_r(array_merge($a1,$a2));
        ?>
    </h2>
</body>
</html>