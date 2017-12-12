<?php
	if(isset($_POST['sub'])){
		$name=$_POST['username'];
		$pass=$_POST['pass'];
		
		$arr=array('%','=','?');
		$flag=true;
		
		for($i=0;$i<count($arr);$i++){
			for($j;$j<strlen($name);$j++){
				if($name[$j] == $arr[$i]){
					$flag=false;
				}
				
			}
		}
		
		if($falg==false){
			echo "输入非法";
		}else{
			if($name=="admin" && $pass=="12345"){
				echo "登陆成功";
			}else{
				echo "登陆失败";
			}
		}
		
	}


?>
<meta charset="utf-8">
<form action="test5.php" method="post"> 
	用户名：<input type="text" name="username"><br/>
	密码:<input type"password" name="pass"><br/>
	<input type="submit" name="sub" value="登陆">
	<input type="resset" name="rst" value="注册">
	
	
</form>