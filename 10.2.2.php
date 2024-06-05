<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nested Loop</title>
</head>
<body>
    <pre>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tinggi = intval($_POST["tinggi"]);

    for ($baris = 1; $baris <= $tinggi; $baris++) {
        // buat sejumlah spasi
        for ($i = 1; $i <= $tinggi - $baris; $i++) {
            echo " ";
        }
        for ($j = 1; $j < 2 * $baris; $j++) {
            echo "*";
        }
        echo "\n";
    }
}
?>

<form method="post">
    <label for="tinggi">Masukkan Tinggi Pyramid: </label>
    <input type="number" id="tinggi" name="tinggi" value=" " required>
    <input type="submit" value="Generate">
</form>
    </pre>
</body>
</html>
