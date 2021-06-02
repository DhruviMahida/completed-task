<?php
//key = value
//methode 1
$a[0] = 10;
$a['c'] = "computer";
$a['php'] = "web development";
$a[10]  = "ten";
$a[50]  = 50.50;
//methode 2
$a = array(
    0 => 10,
    'c'=>"computer",
    'php'=> "web development",
    10 => "ten",
    50 => 50.50
);

echo "c for".$a[ 'c' ];
foreach ($a as $value) {
    echo "<br> Value is $value";
}

foreach ($a as $key) {
   echo "<br/> Key id <b> $key <b> and value is $value";
}
echo "c for".$a[ 'c' ];
