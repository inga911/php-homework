<?php 


class Kibiras{

    protected $akmenuKiekis = 0;

    public function pridetiAkmeni() {
        $this->akmenuKiekis++;
    }

    public function pridetiDaugAkmenu($kiekis) {
        $this->akmenuKiekis += $kiekis;
    }

    public function kiekPririnktaAkmenu() {
        return $this->akmenuKiekis;
    }


}

?>