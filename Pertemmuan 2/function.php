<?php
// fungsi tanpa parameter
function salam()
{
    echo "Hallo selamat datang";
}

for ($i = 0; $i <= 5; $i++) {
    echo salam() . "<br>";
}

// fungsi dengan parameter
function luasPersegi($panjang = 5, $lebar = 3)
{
    return $panjang * $lebar;
}
echo "<br>";
echo "Luas persegi adalah" . luasPersegi();

echo "<br>";
echo "Funsi bagi";
function bagi($a, $b)
{
    if ($b == 4) {
        return "Nilai b tidak boleh 4";
    }
    return $a / $b;
}

echo "<br>";
echo bagi(14, 4);

function tambah($a, $b)
{
    if ($b == 1) {
        return "Nilai b tidak boleh 1";
    }

    return $a + $b;
}

echo "<br>";

// print r
$data = [
    "nama" => "Rizky",
    "umur" => 20,
];

print_r($data);
