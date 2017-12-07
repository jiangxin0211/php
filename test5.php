<?php
//九九乘法表 for while do-while

    for($i=1;$i<=9;$i++;){
        for($j=1;$j<$i;$j++;){
            echo $i. "*" .$j. "=" .($i * $j)." ";
        }
        echo "<br />";
    }

    
    echo "<table width=800 border=1 align='center'>";
    echo "<tr>";
    for($i=1;$i<=9;$i++;){
        for($j=1;$j<$i;$j++;){
            echo "<td>";
            echo $i. "*" .$j. "=" .($i * $j)." ";
            echo "</td>";
        }
        echo "</tr>";
        echo "<br />";
    }

    //while

    $i=1;
    while($i<=9){
        $j=1;
        while($j<$i){
            echo $i. "*" .$j. "=" .($i * $j)." ";

        }
    }

    //do-while
    do{
        $i = 1;
        $j = 1;
        echo $i. "*" .$j. "=" .($i * $j)." "; 
    }while($i<=9;$j<9;)





?>