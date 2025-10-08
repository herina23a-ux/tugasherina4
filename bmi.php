<form method="post">
    <label>Berat badan (kg):</label>
    <input type="number" name="berat" step="0.1" required><br><br>

    <label>Tinggi badan (m):</label>
    <input type="number" name="tinggi" step="0.01" required><br><br>

    <input type="submit" value="Hitung BMI">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $berat = $_POST["berat"];
    $tinggi = $_POST["tinggi"];

    $bmi = $berat / ($tinggi * $tinggi);

    echo "<h3>Hasil BMI: " . number_format($bmi, 2) . "</h3>";

    if ($bmi < 18.5) {
        echo "Kategori: Kekurangan berat badan";
    } elseif ($bmi < 25) {
        echo "Kategori: Normal";
    } elseif ($bmi < 30) {
        echo "Kategori: Kelebihan berat badan";
    } else {
        echo "Kategori: Obesitas";
    }
}
?>
