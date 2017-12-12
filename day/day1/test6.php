<?php
	//phpinfo();
	
	if(isset($_POST['sub'])){
		$str=$_POST['address'];
		$addr=substr($str,10);
		echo $addr;
		echo base64_decode($addr);
		
		echo $str;
		$dizhi=base64_encode($str);
		$add="thunder://".$dizhi;
		
		echo $add;
	}
	
	//base64_encode base64_decode
	//md5(md5($pass)+$salt);
	//彩虹表

?>

<meta charset="utf-8">
<form action="test6.php" method="post"> 
	地址：<input type="text" name="address">
	<input type="submit" name="sub" value="提交">
</form>













