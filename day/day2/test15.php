<?php
	//each next prev reset end
	$arr=array(
		'id'=>1,
		'name'=>'laoshan',
		'age'=>'18',
		'gender'=>'male',
		'email'=>'gg.@poi.com'
	
	);
	
	// $narr=each($arr);
	// $narr=each($arr);
	// $narr=each($arr);
	// $narr=each($arr);
	$narr=each($arr);//输出第一个，游标指向第二个
	$narr=next($arr);//当前游标指向下，再向下走一个
	$narr=prev($arr);//游标上调
	$narr=reset($arr);//无论游标指向哪里，立刻回到栈顶
	$narr=end($arr);//无论游标指向哪里，立刻回到栈底
	
	
	print_r($narr);
	
	
	// while($narr=each($arr)){
		// echo $narr[0]."=".$narr[1]."<br/>";
	// }
	
	
	// array list (mixed $varname [g,dfgg, $...])
	
	$IP="192.168.0.1";
	$arr=explode('.',$IP);
	list($a,$b,$c,$d)=$arr;
	// print_r($arr);
	echo $a;
	


?>