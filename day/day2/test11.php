
<meta charset="utf-8">
<form action="test11.php" method="post"> 
	你出拳
	<select name="you" onclick="mychange(this)">
		<option value="2">石头</option>
		<option value="1">剪刀</option>
		<option value="0">布</option>
	</select>
	<img src="./cq.jpg">
	<input type="submit" name="sub" value="提交"> 
	
</form>
<script>
	function mychange(obj){
		$val=obj.value;
		var myimg=document.getElementById('myimg');
		
		
		if(val == 2){
			myimg.src="qt.jpg";
		}else if(val == 1){
			myimg.src="jz.jpg";
		}else{
			myimg.src="b.jpg";
		}
	}
	
	
</script>
<?php
	if(isset($_POST['sub'])){
		$cq=$_POST['you'];
		$du=rand(0,2);
	}







?>

