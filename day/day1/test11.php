<?php
//for
	echo "<table width=800 border=1 align='center'>";
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
	
	
	//while
	echo "<table width=800 border=1 align='center'>";
	echo "<tr />";
	$i=1;
    while($i<=9){
        $j=1;
        while($j<=$i){
        	echo "<td />";
            echo $i. "*" .$j. "=" .($i * $j)." ";
			$j++;
			echo "<td />";
        }
		$i++;
		echo "<tr />";
		echo "<br />";
    }
	
	//do-while
	
	
	
	
	
	
	
	
	
	
?>