<?php

    //可变变量
    $one = "$$$$$";
    $two = "one";
    $three = "two";
    $four = "three";

    echo $four."<br  />";//three
    echo $$four."<br />";//two







    $one = 100;
    // $two = $one;
    $two = &$one;//&取地址符  hello hello


    $one = 10;
    $two= "hello";

    echo $one."<br />";
    echo $two."<br />";









?>

<script>
//直接赋值 引用赋值
var name = 123;

var obj={
    name:"123"
}
var name = 456;//改变了地址
obj.name = 456;//改变了属性


</script>