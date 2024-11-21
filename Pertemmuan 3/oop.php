<?php
// class Negara
// {
//     public $namaNegara;
//     public $bendera;


//     public function negara($namaNegara, $bendera)
//     {
//         $this->bendera = $bendera;
//         $this->namaNegara = $namaNegara;
//         return $this->namaNegara . " Memiliki bendera berwana " . $this->bendera;
//     }
// }

// $indonesia = new Negara();
// echo $indonesia->negara("Indonesia", "Merah Putih"); //Indonesia Memiliki bendera berwana Merah Putih

// Class dan Method
class Mobil
{
    public $merk = "Hyundai";
    public $warna = "Biru";

    public function mobil()
    {
        return $this->merk . "Berwarna" . $this->warna;
    }
}

$kendaraan = new Mobil();
echo $kendaraan->mobil();

echo "<br>";

//Magic Method

class Hewan
{
    public $suara = "Meong";

    public function __construct($suara)
    {
        echo $this->suara = $suara;
    }
}

$kucing = new Hewan('Miaw');
