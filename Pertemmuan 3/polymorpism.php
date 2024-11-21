<?php
class Kendaraan
{
    public function info()
    {
        return "Ini adalah kendaraan umum.";
    }
}

class Mobil extends Kendaraan
{
    public function info()
    {
        return "Ini adalah mobil.";
    }
}

class Motor extends Kendaraan
{
    public function info()
    {
        return "Ini adalah motor.";
    }
}

$kendaraan = new Kendaraan();
$mobil = new Mobil();
$motor = new Motor();

echo $kendaraan->info(); // Output: Ini adalah kendaraan umum.
echo $mobil->info(); // Output: Ini adalah mobil.
echo $motor->info(); // Output: Ini adalah motor.