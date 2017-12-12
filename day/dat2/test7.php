<?php
	//全局变量：$_POST  $_GET  $_SERVER  $_ENV
	//$_COOKIE $_SESSION   $_
	if(isset($_post['sub'])){
		$score=$_POST['score'];
		
		if(is_numeric($score)){
			if(strlen($score)<=3){
				if(strlen($score)==3){
					if(substr($score,0,1) == 1){
						
					}else{
						echo "位数不对";
					}
				}else{
					echo "请输入数据";
				}
			}
		}
		
		
		
		
		
		
		
		if($score>=80 && $score<=100){
			echo "<script>alert('优秀')</script>";
			
		}else if($score>=60 && $score<80){
			echo "<script>alert('良好')</script>";
		}else{
			echo "<script>alert('不及格')</script>";
		}
	}



?>

<h3>输入分数提交成绩</h3>
<from action="test7.php" method="post">
	分数：<input type="text" name="score">
	<input type="submit" name="sub" value="提交成绩">
	<input type="reset" name="rst" value="重置成绩">

	
	
	
</from>

