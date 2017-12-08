<?php
    //phpinfo();
    if(isset($_POST['sub'])){
        $str=$_POST['address'];

        echo $str;
        $dizhi=base_64encode($str);




    }

    //base64_encode base64_decode



?>