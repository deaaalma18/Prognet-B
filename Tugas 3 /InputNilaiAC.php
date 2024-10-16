<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Kontrol AC</title>
</head>
<body>

    <h2>Masukkan Suhu dan Kelembaban</h2>
    
    <form method="POST" action="">
        <label for="suhu">Suhu (0 - 45 °C):</label>
        <input type="number" id="suhu" name="suhu" min="0" max="45" required>
        <br><br>

        <label for="kelembaban">Kelembaban (0 - 100%):</label>
        <input type="number" id="kelembaban" name="kelembaban" min="0" max="100" required>
        <br><br>

        <input type="submit" value="Kontrol AC">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil input dari form
        $suhu = $_POST['suhu'];
        $kelembaban = $_POST['kelembaban'];

        // Logika untuk mengontrol penyalaan AC
        if ($suhu <= 20) {
            // Suhu 0-20 °C
            if ($kelembaban >= 60) {
                $status_ac = "AC Mati";
            } else {
                $status_ac = "AC Mati (Kelembaban Rendah)";
            }
        } elseif ($suhu >= 21 && $suhu <= 24) {
            // Suhu 21-24 °C
            if ($kelembaban >= 40 && $kelembaban <= 60) {
                $status_ac = "AC Menyala Ringan";
            } else {
                $status_ac = "AC Menyala Ringan (Kelembaban Tidak Sesuai)";
            }
        } elseif ($suhu >= 25 && $suhu <= 29) {
            // Suhu 25-29 °C
            if ($kelembaban >= 20 && $kelembaban <= 40) {
                $status_ac = "AC Menyala Sedang";
            } else {
                $status_ac = "AC Menyala Sedang (Kelembaban Tidak Sesuai)";
            }
        } elseif ($suhu >= 30 && $suhu <= 45) {
            // Suhu 30-45 °C
            if ($kelembaban <= 40) {
                $status_ac = "AC Menyala Berat";
            } else {
                $status_ac = "AC Menyala Berat (Kelembaban Tidak Sesuai)";
            }
        } else {
            $status_ac = "AC Mati";
        }

        // Output hasil kontrol
        echo "<h3>Hasil Kontrol AC:</h3>";
        echo "Suhu: $suhu derajat<br>";
        echo "Kelembaban: $kelembaban%<br>";
        echo "Status AC: $status_ac";
    }
    ?>

</body>
</html>
