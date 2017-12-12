<?php
	if(isset($_post['sub'])){
		$rows=$_POST['rows'];
		$cols=$_Post['cols'];
		
		echo "<table width=500 border=1>";
		echo "<caption><h3>用户动态输入表格 行".$rows."列".$cols."</h3></caption>";
		
	}



?>

<h3>输入行列生成表格</h3>
<from action="test7.php" method="post">
	输入行：<input type="text" name="rows">
	输入列：<input type="text" name="cols">

	<input type="submit" name="sub" value="生成表格">
	<input type="reset" name="rst" value="重置表格">

	
	
	
</from>