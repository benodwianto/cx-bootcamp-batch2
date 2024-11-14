<?php

$universitas = "Universita Putra Indonesia YPTK Padang";

echo "Saya berkuliah di " . $universitas;

$umur = 18; // integer
$ipk = 3.8; // float
$booelan = true; //boolean
$identitasBeno = ['Beno', '20', 'Upi'];

echo "<br>";
echo "Saya berumur " . $umur . "tahun";
echo "<br>";
echo "Nama" . $identitasBeno[0];
echo "<br>";
echo "Umur" . $identitasBeno[1];

<?php
$a = 10;
$b = 30;
$c = 20;


echo "Hasil dari $a tambah $b adalah =" . $a + $b;
echo "<br>";
echo "Hasil dari $a dikurangi $c adalah =" . $a - $c;
echo "<br>";
echo "Hasil dari $a dikali $c adalah =" . $a * $c;
echo "<br>";
echo 2 * 4;
echo "<br>";

if ($a !== $b) {
    echo "Nilainya Sama";
} else {
    echo "Tidak sama";
}

echo "<br>";

$x = 990;
$y = 40;

if ($x > $y) {
    echo "$x Lebih besar dari $y";
} else {
    echo "$x lebih kecil dari $y";
}

$num = 100;
$numA = 50;
$numC = "90";

echo "<br>";

if ($num !== 100 && $numA == $numC) {
    echo "pernyataan benar";
} else {
    echo "pernyataan salah";
}

echo "<br>";

if ($num == 100 || $numA == $numC) {
    echo "pernyataan benar";
} else {
    echo "pernyataan salah";
}

