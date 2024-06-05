<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Nilai</title>
</head>
<body>
    <h2 style="text-align: center;">Program Konversi Nilai</h2>

    <form method="post">
        <label for="Nilai">Masukkan Nilai anda : </label>
        <input type="number" id="Nilai" name="Nilai" required>
        <input type="submit" value="Konversikan">
    </form>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nilai = $_POST['Nilai'];

        if ($nilai >= 80.00 && $nilai <= 100.00){
            echo "Nilai anda A, anda LULUS dengan nilai Baik Sekali";
        } elseif ($nilai >= 76.25 && $nilai <= 79.99){
            echo "Nilai anda A-, anda LULUS dengan nilai Baik Sekali";
        } elseif ($nilai >= 68.75 && $nilai <= 76.24){
            echo "Nilai anda B+, anda LULUS dengan nilai Baik";
        } elseif ($nilai >= 65.00 && $nilai <= 68.74){
            echo "Nilai anda B, anda LULUS dengan nilai Baik";
        } elseif ($nilai >= 57.50 && $nilai <= 64.99){
            echo "Nilai anda C+, anda LULUS dengan nilai Cukup";
        } elseif ($nilai >= 55.00 && $nilai <= 57.49){
            echo "Nilai anda C, anda LULUS dengan nilai Cukup";
        } elseif ($nilai >= 51.25 && $nilai <= 54.99){
            echo "Nilai anda C-, anda LULUS dengan nilai Cukup";
        } elseif ($nilai >= 43.75 && $nilai <= 51.24){
            echo "Nilai anda D+, anda TIDAK LULUS dengan nilai Kurang";
        } elseif ($nilai >= 40.00 && $nilai <= 43.74){
            echo "Nilai anda D, anda TIDAK LULUS dengan nilai Kurang";
        } elseif ($nilai >= 0.00 && $nilai <= 39.99){
            echo "Nilai anda E, anda GAGAL";
        }
    }
?>
    
</body>
</html>
