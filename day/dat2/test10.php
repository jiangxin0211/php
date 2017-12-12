<?php

	for($i=1;$i<=5;$i++){
		echo "<tr>";
		//先打空格
        for($j=1;$j<5-$i;$j++){
            echo "<td>";
            echo "&nbsp";
            echo "</td>";
        }
		//再打星
		for($k=1;$k<=2*$i-1;$k++){
			echo "*";
		}
        echo "</tr>";
        echo "<br />";
    }
	echo "<br />";
	
	for($i=1;$i<=5;$i++){
		echo "<tr>";
		//先打空格
        for($j=1;$j<5-$i;$j++){
            echo "<td>";
            echo "&nbsp";
            echo "</td>";
        }
		//再打星和空格
		for($k=1;$k<=2*$i-1;$k++){
			if($i == 1 || $i == 5){
				echo "*";
			}else{
				if($k == 1 || $k == 2*$i-1){
					echo "*";
				}else{
					echo "&nbsp";
				}
			}
		}
        echo "</tr>";
        echo "<br />";
    }
	



?>