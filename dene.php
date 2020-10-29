<html>
<body>


<?php

function myTest(){
    $x = 0;
    echo $x;
    $x++;
}

myTest(); // 0
echo "<br>";
myTest(); // 0
echo "<br>";
myTest(); // 0
echo "<br>";

function myTest2(){
    static $x = 0;
    echo $x;
    $x++;
}

myTest(); // 0
echo "<br>";
myTest(); // 1
echo "<br>";
myTest(); // 2
echo "<br>";

?>

</body>


</html>


