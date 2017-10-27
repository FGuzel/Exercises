<!DOCTYPE html>
<html>
<body>

<?php
// <-- Bu çift slash işareti tek satırlık açıklama (yorum) yapmak için kullanılır.

# Bu işaret de aynı şeklde kullanılır.

/*
Eğer açıklama yapmak için,
birden fazla satır kullanacaksak
o zaman bu paragrafın başında ve sonun bulunan işaretleri kullanırız.
*/

// Eğe yazdığımız codelardan bazılarını dışarıda bırakmak istiyorsak, o zaman da bu işareti kullanabiliriz.
$x = 5 /* + 15 */ + 5; 
//Araya her ne kadar +15 yazsak da sonuç "10" çıkacaktır. Çünkü +15'in başında ve sonunda yorum işareti bulunmaktadır.
echo $x;
?>

</body>
</html>