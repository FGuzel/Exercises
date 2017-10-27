<?php
$x = 20; //Değişkenlerimizi tanımlıyoruz.
$y = 30;
$z = 60;
function myTest() {
    global $x, $y, $z; //Fonksiyonun dışında tanımladığımız değişkenleri, fonksiyonun içinde kullanmak için başına global ekledik.
    $y = $x + $y + $z;
}

myTest();
echo $y; 
?>
