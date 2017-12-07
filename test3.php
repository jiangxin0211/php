<!-- 100行10列，隔行换色  -->

<?php
    // $a = 100;
    function aa(){
        // global $a;
        $a=12;
        static $a=12;//先去预存静态区查看是否$a,有的就直接拿出来  13 14 15
        $a = $a + 1;
        echo $a;
    }
//在堆里函数执行完立刻释放空间
    aa();//13
    aa();//13
    aa();//13




    echo "<table  width='800' border='1' align='center'>";
    echo "<caption>隔行换色</caption>"
    for($i;$i<100;$i++;){
        if($i%2 == 0){
            $color='red';
        }else{
            $color='green';
        }
        echo "<tr bgColor='".$color."' onmouseover=lrow(this) onmouseout=drow(this) >";
            for($j;$j<10;$j++){
                echo "<td>".$i."</td>";
            }
        echo "</tr>";
    }

        // echo "<tr>";
        //     echo "<td>";
        //     echo 123;
        //     echo "</td>"
        // echo "</tr>";


    echo "</table>";

?>

<script>
    var ys=


</script>