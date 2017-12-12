<?php
	$a = 20;
	$b = $a++ + ++$a;//20+22=42
	$c = --$b - $b--;//41-41=0
	$d = $c++ + --$c;//0+0
	
	echo $d;
	
	//可变变量
	$for=100;
	echo $for;

	$one="$$$$$";
	$two="one";
	$three="two";
	$four="three";
	
	echo $four."<br />";//three
	echo $$four."<br/>";
	
	$one=100;
	$two=&$one;//&取地址符
	
	$one=10;
	$two="hello";
	
	echo $one."<br />";
	echo $two."<br />";


	

?>



