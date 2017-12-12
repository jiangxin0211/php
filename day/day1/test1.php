<?php
	//php可以内嵌html和js
	$num-123;
	echo $num;
	
	echo "123&nbsp;&nbsp;456";
	echo "<br />";
	echo "中国";
	
	echo "<script>location='test2.php'</ecript>";
	
	//三码一致：
	//文件编码：ANSI\unicode\utf-8
	//浏览器解码：GBK\GB18030\GB2312\UTF-8
	//数据库编码：utf-8  setEncodeing()
	

?>