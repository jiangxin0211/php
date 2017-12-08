<?php
//php可以内嵌html

    echo "123"；
    echo "<br />";
    echo "中国"；




//三码一致：文件编码，浏览器解码，数据库编码
//文件编码：ANST/UNICODE/UTF-8
//浏览器解码：GBK/GB2312/GB18030
//数据库编码：UTF-8 setEncodeing()

?>
php数据类型
    四个标量类型：int float string bool
    两个符合类型：array object
    两个特殊类型：resource null


变量是否存在: isset
在内存中的销毁变量：unset

<?php
//php中：变量区分大小写，函数名不区分大小写！！！
    if(isset($_POST['sub'])){
        $aa = $_POST['num'];
        unset($aa);//document.write = {};
        echo $aa;
        // echo "success";
    }else if{
        echo "error";
    }




?>


<?php
    $name="laoshan";
    // die();//执行停止到此行
    echo "123";
    echo "456";
    var_dump($name);

?>





<!-- <meta charset="UTF-8">
<form action="">



</form> -->






