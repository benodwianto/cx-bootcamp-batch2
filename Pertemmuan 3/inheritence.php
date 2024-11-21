<?php
// inheritence
class Hewan
{
    private $suara = "Miau";

    public function setSuara($suara)
    {
        $this->suara = $suara;
    }

    public function getSuara()
    {
        return $this->suara;
    }

    public function suara()
    {
        echo "Hewan Berusara";
    }
}

class Kucing extends Hewan
{
    public function suara()
    {
        return $this->suara;
    }
}

$kucing = new Kucing();
// echo $kucing->suara();
$hewan = new Hewan();
echo $hewan->getSuara();
