<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TABEL PERKALIAN MATRIX</h1>
    <?php
echo "<h3>Tabel Perkalian 1 - 10</h3>";

echo "<table border='1' cellspacing='2' cellpadding='8'>";

// Baris judul
echo "<tr>";
echo "<td>Bilangan</td>";

for ($i = 1; $i <= 10; $i++) {
    echo "<td style='background-color: lime;'>$i</td>";
}
echo "</tr>";

// Isi tabel perkalian
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";

    echo "<td style='background-color: lime;'>$i</td>";

    for ($j = 1; $j <= 10; $j++) {
        $hasil = $i * $j;

        if ($hasil % 2 == 0) {
            $warna = "cyan";
        } else {
            $warna = "yellow";
        }

        echo "<td style='background-color: $warna;'>$hasil</td>";
    }

    echo "</tr>";
}

echo "</table>";
?>
<a href="index.php">Nomor 1</a>
</body>
</html>