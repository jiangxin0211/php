<?php
	//声明一个多维数组
	
	$info=array(
		'user'=>array(
			array(1,'laoshan','male','18'),
			array(2,'laoshan','male','18'),
			array(3,'laoshan','male','18')
		),
		'score'=>array(
			array(1,'100','56','88'),
			array(2,'100','56','88'),
			array(3,'100','56','88')
		),
		'connect'=>array(
			array(1,'100','jiang@poj.com'),
			array(2,'100','jiang@poj.com'),
			array(3,'100','jiang@poj.com')
		)
	);
	
	foreach($info as $tablename=>$table){
		echo "<table width=800 border=1 align=center>";
		echo "<caption><h3>".$tablename."</h3></caption>";
		foreach($table as $k=>$v){
			echo "<tr>";
				foreach($v as $value){
					echo "<td>".$value."</td>";
				}
			echo "</tr>";
		}
		echo "</table>";
	}








?>