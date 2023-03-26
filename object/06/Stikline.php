<?php 


class Stikline {
    private $turis;
    private $kiekis = 0;

    public function __construct($turis)
    {
        $this->turis = $turis;
    }

    public function ipilti($kiekis)
    {
        $naujas_kiekis = $this->kiekis + $kiekis;
        if($naujas_kiekis > $this->turis){
           $this->kiekis = $this->turis;
           echo "Kiekis netelpa, stiklinė pilna.<br>";
        }else{
            $this->kiekis = $naujas_kiekis;
            echo "Į stiklinę įpilta $kiekis ml vandens.<br>";
        }
    }
    
    public function ispilti()
    {
        $kiekis = $this->kiekis;
        $this->kiekis = 0;
        echo "Stiklinėje buvo $kiekis ml vandens.<br>";
        return $kiekis;
    }
}