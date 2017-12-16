<?php
	
	/*$arr=array();
	$str="";
	for($i=0; $i<5;$i++){
		$arr[]=rand(0,9);
		$newarr=array_unique($arr);
		if(count($arr)==count($newarr)+1){
			array_pop($arr);
			//unset($arr[$i]);
			$i--;
		}
	}
	
	for($j=0;$j<count($newarr);$j++){
		$str.=$arr[$j]."&nbsp;";
	}
	echo $str;*/
	
	
	$con=1;
	while($con<5){
		$arr[]=mt_rand(0,9);
		$newarr=array_unique($arr);
		$newarr=array_merge($newarr);
		
		
		/*echo "<pre>";
		var_dump($newarr);
		echo "</pre>";*/
		$con=count($newarr);
		
	}
	
	for($j=0;$j<count($newarr);$j++){
		$str.=$newarr[$j]."&nbsp;";
	}
	echo $str;
	
	
	
	
	
	
	


?>

