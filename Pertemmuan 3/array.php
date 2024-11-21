<?php
// $identitas = [
//     "nama" => "Budi",
//     "umur" => 20,
//     "alamat" => "Jl.Hari Raya",
//     'hobi' => 'Ngoding',
//     'jurusan' => 'Teknik Informatika',
// ];


// echo "Nama saya : {$identitas['nama']}, saya {$identitas['umur']} tahun, saya tinggal di {$identitas['alamat']}, saya memiliki hobi {$identitas['hobi']}, saya kuliah di jurusan {$identitas['jurusan']}";

// latihan
// buatlah array dengan key dan value
// key : nama, umur, alamat, hobi, jurusan
// value : sesuai data sendiri


// Array Numerik
$kendaran = ['Motor', 'Mobil', 'Truk'];

echo "saya punya" . $kendaran[0];
echo "<br>";
//Array Asosiatif
$kendaraan = [
    'jenis' => 'Motor',
    'merk' => 'Suprax',
    'warna' => 'Biru'
];

echo "Saya Punya" . $kendaraan['jenis'] . "mereknya " . $kendaraan['merk'];
echo "<br>";

// Array Multidimensi
$mahasiswa = [
    ['nama' => 'Bambang', 'Jurusan' => "Teknik Nuklir"],
    ['nama' => 'udin', 'Jurusan' => "Manajemen"]
];

echo "Mahasiswa Pertama adalah " . $mahasiswa[0]['nama'] . "Jurusan " . $mahasiswa[0]['Jurusan'];
