<?php

class Pinigine {

    protected $popieriniaiPinigai = 0, $metaliniaiPinigai = 0;


   public function ideti(float $kiekis) :void
   {
    if($kiekis <= 2){
        $this->metaliniaiPinigai += $kiekis;
    }else {
        $this->popieriniaiPinigai += $kiekis;
    }
    }
    public function skaiciuoti() 
    {
        $sum = $this->popieriniaiPinigai + $this->metaliniaiPinigai;
        echo "Popieriniai pinigai: " . $this->popieriniaiPinigai . ", metaliniai pinigai: " . $this->metaliniaiPinigai . ", suma: " . $sum;
    }

}