<?php

	echo "<table width=800 border=1 align='center'>";
	echo "<caption><h1>九九乘法表</h1></caption>";
	echo "<tr>";
    for($i=1;$i<=9;$i++){
        for($j=1;$j<=$i;$j++){
            echo "<td>";
            echo $i. "*" .$j. "=" .($i * $j)." ";
            echo "</td>";
        }
        echo "</tr>";
        echo "<br />";
    }
	echo "</table>";
	
	echo "<table width=800 border=1 align='center'>";
	echo "<caption><h1>九九乘法表</h1></caption>";
	echo "<tr>";
    for($i=9;$i>=1;$i--){
        for($j=1;$j<=$i;$j++){
            echo "<td>";
            echo $i. "*" .$j. "=" .($i * $j)." ";
            echo "</td>";
        }
        echo "</tr>";
        echo "<br />";
    }
	echo "</table>";
	
	echo "<table width=800 border=1 align='center'>";
	echo "<caption><h1>九九乘法表</h1></caption>";
    for($i=1;$i<=9;$i++){
    	echo "<tr>";
		//先打空格
		for($j=1;$j<=9-$i;$j++){
			echo "<td>"."&nbsp"."</td>"; 
			
		}
		
		
		//再打算式
        for($k=1;$k<=$i;$k++){
            echo "<td>";
            echo $i. "*" .$k. "=" .($i * $k)." ";
            echo "</td>";
        }
        echo "</tr>";
        echo "<br />";
    }
	echo "</table>";
	


	echo "<table width=800 border=1 align='center'>";
	echo "<caption><h1>九九乘法表</h1></caption>";
    for($i=9;$i>=1;$i--){
    	echo "<tr>";
		//先打空格
		for($j=1;$j<=9-$i;$j++){
			echo "<td>"."&nbsp"."</td>"; 
		}
		
		
		//再打算式
        for($k=1;$k<=$i;$k++){
            echo "<td>";
            echo $i. "*" .$k. "=" .($i * $k)." ";
            echo "</td>";
        }
        echo "</tr>";
        echo "<br />";
    }
	echo "</table>";
?>