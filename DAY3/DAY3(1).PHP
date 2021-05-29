<?php
echo "<table border='1'>";
for ($i=0; $i<1000 ; $i++) { 
    # code...
    echo "<tr>";
    if ($i%2==0) {
        # code...
        echo "<td bgcolor="red"> $i </td>";
    }else{
        echo "<td bgcolor="yellow"> $i</td>";
    }
    echo "</tr>";
}
echo "</table>"