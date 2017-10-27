<?php
function myTest() {
    static $x = 0;
    echo $x;
    $x++;
}

myTest();//Değişkene sabit bir değer verip, onu arttırarak kullanıyoruz.
myTest();
myTest();
?>