<?php
//methode 1 (numeric array)
$a[0] = 10;
$a[1] = 20;
$a[2] = 20.50;
$a[3] = "c";
$a[4] = "4";

// methode 2 (dynamic array)
$a[ ] = 10;
$a[ ] = 20;
$a[ ] = 20.50;
$a[ ] = "c";
$a[ ] = "4";

$a = array(10,20,20.50,"c","4"); 

echo $a [3];

for ($i=0; $i<count($a); $i++) { 
    # code...
    echo "<br/>". $a[$i];
}

echo "<pre>";
print_r($a);
echo "<pre>";

echo "<pre>";
var_dump($a);
echo "<pre>";
?>