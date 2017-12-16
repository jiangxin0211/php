<?php
//创建备忘 2017-12-14：吃饭 $data['2017-12-14:']=['吃饭']

	$data['2017-05-01']='看电影';
	$data['2017-06-01']='吃饭';
	$data['2017-07-01']='睡觉';

	$flag=false;
	
	if(isset($_POST['sub'])){
		$date=$_POST['dd'];
		list($a,$b,$c)=explode('-',$date);
		if(is_numeric($a) && is_numeric($b) && is_numeric($c)){
			//echo "sucess";
			foreach($data as $k=>$v){
				if($k==$date){
					echo "<script>alert('".$k."日备忘:$v"."')</script>";
					$flag=true;
					break;
				}
			}
			if($flag==false){
				echo "<script>alert('没有备忘')</script>";
			}
		}else{
			echo "error";
		}
		
	}






?>
<meta charset="utf-8">
<h3>单击查询当前日程</h3>
<from action="test1.php" method="post">
	输入查询日期：<input type="text" name="dd"><br/>
	<input type="submit" name="sub"value="查询">
	<input type="reset" name="rst" value="重置">
</from>