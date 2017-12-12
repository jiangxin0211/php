<?php
	$str="0123456789abcdefghijklmnopqrstuvwxyz";
	$newstr="";
	$flag=true;
	for($i=0;$i<4;$i++){
		$b=rand(0,35);
		for($j=0;$j<strlen($newstr);$j++){
			if($newstr[$j]==$str[$b]){
				$flag=false;
				//continue;
			}
		}
		
		
		$newstr.=$str[$b];
	}
	echo $newstr;







?>