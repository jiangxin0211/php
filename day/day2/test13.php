<?php
	//如何遍历关联数组
	$user1['num']=1;
	$user1['name']="laoshan";
	$user1['sex']="male";
	$user1['age']=18;
	$user1['arr']=array(1,2,3);

	$user=array(
		'id'=>1,
		'name'=>'laoshan',
		'age'=>'18'
	
	);
	//foreach(数组变量名 as $k=>$v)
	
	foreach($user1 as $k=>$v){
		echo $k."=".$v."<br/>";
	}

?>