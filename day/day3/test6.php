<?php
	$arr = array('2012 Macbook Pro','2009 iMac','2011 Macbook Air','2007 iPad1');
	
	/*echo "<pre>";
	var_dump(sort($arr));
	echo "</pre>";*/
	
	if(isset($_POST['sub1'])){
		sort($arr);
	}
	
	if(isset($_POST['sub2'])){
		rsort($arr);
	}
	
?>
<meta charset="utf-8">
商品上市年份排序<br />
<from action="test6.php" method="post">
	<table width=500 border=1 align=center>
		<tr>
			<th>商品顺序</th>
			<th>商品名称</th>
			
		</tr>
		<?php
			foreach($arr as $k=>$v){
				
		?>
		<tr>
			<td><?php echo $k+1;?></td>
			<td><?php echo $v;?></td>
		</tr>
		<?php
				}
		?>
		<tr>
			<td><input type="submit" name="sub1" value="正序"></td>
			<td><input type="submit" name="sub2" value="逆序"></td>
		</tr>
		
	</table>

</from>

