<?php
// Data siswa
$siswa = [
    ["nama" => "Andi", "matematika" => 85, "bahasa_inggris" => 70, "ipa" => 80],
    ["nama" => "Budi", "matematika" => 60, "bahasa_inggris" => 50, "ipa" => 65],
    ["nama" => "Cici", "matematika" => 75, "bahasa_inggris" => 80, "ipa" => 70],
    ["nama" => "Dodi", "matematika" => 95, "bahasa_inggris" => 85, "ipa" => 90],
    ["nama" => "Eka", "matematika" => 50, "bahasa_inggris" => 60, "ipa" => 55],
];

// Inisialisasi variabel untuk menghitung jumlah lulus dan tidak lulus
$total_lulus = 0;
$total_tidak_lulus = 0;

// Fungsi untuk mencari nilai terendah dan mengembalikan nama mata pelajaran
function cari_nilai_terendah($data_siswa) {
    $nilai_terendah = min($data_siswa['matematika'], $data_siswa['bahasa_inggris'], $data_siswa['ipa']);
    if ($nilai_terendah == $data_siswa['matematika']) {
        return "Matematika";
    } elseif ($nilai_terendah == $data_siswa['bahasa_inggris']) {
        return "Bahasa Inggris";
    } else {
        return "IPA";
    }
}

// Perulangan untuk menghitung nilai rata-rata dan menentukan kelulusan
foreach ($siswa as $data_siswa) {
    $rata_rata = ($data_siswa['matematika'] + $data_siswa['bahasa_inggris'] + $data_siswa['ipa']) / 3;
    $status_kelulusan = $rata_rata >= 75 ? "Lulus" : "Tidak Lulus";

    // Cetak nama, nilai rata-rata, dan status kelulusan
    echo "Nama: " . $data_siswa['nama'] . "<br>";
    echo "Rata-rata Nilai: " . number_format($rata_rata, 2) . "<br>";
    echo "Status: " . $status_kelulusan . "<br>";

    // Jika tidak lulus, tentukan mata pelajaran yang harus diperbaiki
    if ($status_kelulusan == "Tidak Lulus") {
        $total_tidak_lulus++;
        $mata_pelajaran_terendah = cari_nilai_terendah($data_siswa);
        echo "Mata pelajaran yang harus diperbaiki: " . $mata_pelajaran_terendah . "<br>";
    } else {
        $total_lulus++;
    }
    echo "<br>"; // Memberikan jarak antar data siswa
}

// Cetak jumlah total siswa yang lulus dan tidak lulus
echo "Jumlah siswa yang lulus: " . $total_lulus . "<br>";
echo "Jumlah siswa yang tidak lulus: " . $total_tidak_lulus . "<br>";
?>
