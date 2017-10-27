<!DOCTYPE html>
<html>
<body>

<?php
$color = "red";
/* Aşagıdaki değişkenlerin üçü de birbirinden farklıdır.
Çünkü Php kodlamanın büyük-küçük harflere duyarlı olmasıdır.
Bu sebeple My house ve my boat satırlarında değişkenler hata verecektir.
*/
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
?>

</body>
</html>