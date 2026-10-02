<?php
    echo "<table border='1' style='text-align: center;'>";
    for($i = 1; $i<=10; $i++){
        echo "<tr>";
        for($y = 1; $y<=10; $y++){
            if ($y%2==1){
                $accept = true;
                while($accept==true){
                    $numrand = rand(0, 1000);
                    if($numrand%3!=0 && $numrand%5!=0){
                        $accept = false;
                    }
                }
            }
            else{
                $numrand = rand(0, 1000);
                $numrand = $numrand*2;
            }
            echo "<td>$numrand</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>