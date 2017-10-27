<?php
echo "<h1>GÜZEL AİLESİ</h1>"; // Bizim çekirdek aile ;)
function Bizimkiler($Biz) {
    echo "$Biz Güzel.<br>";
}

Bizimkiler("Arslan");
Bizimkiler("Hacer");
Bizimkiler("Ömer");
Bizimkiler("Ayşenur");
Bizimkiler("Fatmanur");
?>
<br>
<br>
<?php
function Bizimkile($Bizim, $year) {
    echo "$Bizim Güzel, $year yılında doğmuştur.<br>";
}
Bizimkile("Arslan", "1961");
Bizimkile("Hacer", "1961");
Bizimkile("Ömer", "1987");
Bizimkile("Ayşenur","1990");
Bizimkile("Fatmanur","1994");
?>