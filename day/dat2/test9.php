<?php
	for($i=1;$i<=9;$i++){
		echo "<tr>";
        for($j=1;$j<=$i;$j++){
            echo "<td>";
			if($j % 3 == 0){
				continue;
			}
            echo $i. "*" .$j. "=" .($i * $j)." ";
            echo "</td>";
        }
        echo "</tr>";
        echo "<br />";
    }



?>