<?php
class Segitiga {
    
    public $alas;
    public $tinggi;
    public $sisi;
    
    function namaBidang() {
        return "Segitiga";
    }

    function getLuas($a, $t)
    {
        $this->alas = $a;
        $this->tinggi = $t;
        return $this->alas * $this->tinggi / 2;
    }
    
    function getKeliling($a, $b, $c){
        $this->sisi1 = $a;
        $this->sisi2 = $b;
        $this->sisi3 = $c;
        return $this->sisi1 + $this->sisi2 + $this->sisi3;
    }
    
}
?>