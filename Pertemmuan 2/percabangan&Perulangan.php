<?php

//If statement
$num = 10;
if ($num < 8) {
    echo "Angka lebih dari $num";
} else {
    echo "Angka kurang dari $num";
}

echo "<br>";

// Switch statement
$hari = "rabus";

switch ($hari) {
    case "senin":
        echo "Hari ini adalah senin";
        break;
    case "selasa":
        echo "Hari ini adalah selasa";
        break;
    default:
        echo "Hari ini bukan senin";
}

//Perulangan For
for ($i = 0; $i <= 5; $i++) {
    echo "Perulangan ke-" . $i . "<br>";
}

// Perulangan While

echo "<br>";
echo "Perulangan While <br>";

$num = 0;
while ($num < 5) {
    echo "Perulangan ke-" . $num . "<br>";
    $num++;
}

// Perulangan Foreach
$dataDiri = ['Beno', 22, 'Upi', 'Programmer'];

foreach ($dataDiri as $saya) {
    echo "$saya <br>";
}