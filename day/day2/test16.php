<?php
	if(isset($_POST['sub'])){
		$sfile=$_FILES['$sfile'];
		$str=$sfile['name'];
		$newdata=explode('.',$str);
		$length=count($newdata)-1;
		$flag=true;
		
		
		$arr=array('exe','text','rar');
		for($i=0;$i<count($arr);$i++){
			if($arr[$i]==$newdata[$length]){
				$flag=false;
			}
		}
		
		if($flag==false){
			echo "上传文件非法";
		}else{
			$upload="./upload/".time().".jpg";
			$bb=move_uploaded_file($sfile['tmp name'],$upload);
			if($bb){
				echo "上传成功";
			}else{
				echo "error";
			}
		}
	}


?>

<meta charset="utf-8">
检测文件后缀名<br/>
<form action="test16.php" method="post"> 
	<input type="file" name="sfile" enctype="multipart/form-data"><br/>
	<input type="submit" name="sub" value="上传">
	
	
</form>