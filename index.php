<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>PENGULANGAN NILAI GENAP DARI 1 - 10</h1>
    <?php
echo "<h3>Bilangan Genap 1 - 10</h3>";

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}
?>
<a href="index2.php">Nomor 2</a>
</body>
</html>