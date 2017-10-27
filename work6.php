<!DOCTYPE html>
<html>
<body>

<?php
$x = 5; // Değişkenimizi global olduğu için fonksiyonumuzun dışında tanımlıyoruz.
 
function myTest() {
    echo "<p>Variable x inside function is: $x</p>";
} 
myTest();
echo "<p>Variable x outside function is: $x</p>";
?>
</body>
</html>



<?php

function myTest() {
    $x = 5; // Değişkenimizi local olduğu için fonksiyonun içinde tanımlıyoruz.
    echo "<p>Variable x inside function is: $x</p>";
} 
myTest();
echo "<p>Variable x outside function is: $x</p>";
?>

// Global ve local kullanımı...