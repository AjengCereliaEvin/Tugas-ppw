<?php
$nama = "Ajeng"; 

$tanggal = date("d"); // Mendapatkan tanggal hari ini
$jumlah_huruf = strlen($nama); // Mendapatkan jumlah huruf dalam nama

if ($jumlah_huruf == $tanggal - 2) {
    echo "Berhasil";
} elseif ($jumlah_huruf < $tanggal) {
    echo "Sedikit lagi";
} else {
    echo "Coba lagi";
}

echo "<br><br>";

$kelompok = array(
    array("Ajeng Cerelia Evin", "22/506178/SV/22102"), 
    array("Ghita Najmi Naqasy", "22/496466/SV/20961"),
    array("Hayya Fatihatuz Zahra", "22/505619/SV/21840"),
    array("Lutfi Lisana Shidqi", "22/505926/SV/21998"),
    array("Marwah Kamila Ahmad", "22/506193/SV/22109")
);

foreach ($kelompok as $anggota) {
    $nama_anggota = $anggota[0];
    $nim = $anggota[1];
    $peran = $nim % 2 == 0 ? "Back-end Developer" : "Front-end Developer";

    echo "Nama: $nama_anggota<br>";
    echo "NIM: $nim<br>";
    echo "Peran: $peran<br><br>";
}

echo "<br>";

$nama_depan = str_split($nama); // Memisahkan setiap huruf dalam nama depan menjadi array

$list_kota = array(
    "Lampung",
    "Riau",
    "Jambi",
    "Bengkulu",
    "Makassar",
    "Kendari",
    "Gorontalo",
    "Samarinda",
    "Papua",
    "Nusa Tenggara Barat"
);

$kota_tujuan = "Jawa Timur"; // Default kota tujuan jika tidak ada yang sesuai

foreach ($nama_depan as $huruf) {
    $huruf_kecil = strtolower($huruf); // Mengubah huruf menjadi huruf kecil untuk pembandingan

    foreach ($list_kota as $kota) {
        if (substr($kota, 0, 1) == $huruf_kecil) {
            $kota_tujuan = $kota;
            break 2; // Keluar dari kedua loop jika ditemukan kota yang sesuai
        }
    }
}

echo "Kota Tujuan KKN: $kota_tujuan";
?>
