<?php

class Pinigine {

    private $popieriniaiPinigai = 0;

    private $metaliniaiPinigai = 0;

   public function ideti($kiekis){
    if($kiekis >= 2){
        $this->popieriniaiPinigai += $kiekis;
    }else {
        $this->metaliniaiPinigai += $kiekis;
    }
    }
    public function skaiciuoti() {
        $sum = $this->popieriniaiPinigai + $this->metaliniaiPinigai;
        echo "Popieriniai pinigai: " . $this->popieriniaiPinigai . ", metaliniai pinigai: " . $this->metaliniaiPinigai . ", suma: " . $sum;
    }

}