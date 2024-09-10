<!DOCTYPE html>
<html>
<head>
    <title>Penilaian Mahasiswa</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffe6f2;
            color: #333;
            text-align: center;
            padding: 20px;
        }
        h2 {
            color: #ff66b2;
        }
        form {
            background-color: #ffb3d9;
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
        }
        input[type="text"], input[type="number"] {
            padding: 10px;
            border: 2px solid #ff66b2;
            border-radius: 5px;
            margin-bottom: 15px;
            width: 90%;
            max-width: 300px;
        }
        input[type="submit"] {
            background-color: #ff66b2;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #ff3385;
        }
        h3 {
            color: #ff66b2;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <h2>Input Nilai Mahasiswa</h2>
    <form method="POST" action="">
        Nama: <input type="text" name="nama" required><br><br>
        NIM: <input type="text" name="nim" required><br><br>
        Nilai (0-100): <input type="number" name="nilai" min="0" max="100" required><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $nilai = $_POST['nilai'];

        // Logika untuk menentukan nilai huruf
        if ($nilai >= 80 && $nilai <= 100) {
            $grade = 'A';
        } elseif ($nilai > 71 && $nilai <= 80) {
            $grade = 'B+';
        } elseif ($nilai >= 65 && $nilai <= 71) {
            $grade = 'B';
        } elseif ($nilai >= 60 && $nilai < 65) {
            $grade = 'C+';
        } elseif ($nilai >= 55 && $nilai < 60) {
            $grade = 'C';
        } elseif ($nilai >= 50 && $nilai < 55) {
            $grade = 'D+';
        } elseif ($nilai >= 40 && $nilai < 50) {
            $grade = 'D';
        } elseif ($nilai >= 0 && $nilai < 40) {
            $grade = 'E';
        } else {
            $grade = 'Nilai tidak valid';
        }

        // Menampilkan hasil penilaian
        echo "<h3>Hasil Penilaian</h3>";
        echo "Nama: " . $nama . "<br>";
        echo "NIM: " . $nim . "<br>";
        echo "Nilai Angka: " . $nilai . "<br>";
        echo "Nilai Huruf: " . $grade . "<br>";
    }
    ?>
</body>
</html>
