<?php
class Kendaraan
{
    public $warna;
    public function jalan()
    {
        return "Kendaraan berjalan.";
    }
}

$mobil = new Kendaraan();
$mobil->warna = "Merah";
echo $mobil->jalan(); // Output: Kendaraan berjalan.
