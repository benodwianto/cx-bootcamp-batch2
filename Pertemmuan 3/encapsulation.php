<?php

class User
{
    public $nama = "beno";
    public $umur = 20;

    public function name()
    {
        return "nama saya " . $this->nama . $this->umur;
    }
}

$user = new User();
$user->nama = "Bamabang";

echo $user->name();
echo "<br>";

class Mahasiswa
{
    protected $nama = "Beno";

    public function nama()
    {
        echo $this->nama;
    }
}

$mahasiswa = new Mahasiswa();
$mahasiswa->nama();

