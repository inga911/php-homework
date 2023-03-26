<?php

class Kibiras2 {

    private static $akmenuKiekisVisuoseKibiruose=0;
    protected $akmenuKiekis=0;

    // public function __construct(int $jauYra, int $numeris)
    // {
    //     $this->akmenuKiekis = $jauYra;
    //     $this->numeris = $numeris;
    // }

    // public function __clone()
    // {
    //     $this->numeris = 5;
    // }

    public function prideti1Akmeni() :void 
    {
        $this->akmenuKiekis++;
        self::$akmenuKiekisVisuoseKibiruose++;
    }
                        
    public function pridetiDaugAkmenu(int $kiekis) :void
    {
        $this->akmenuKiekis += $kiekis;
        self::$akmenuKiekisVisuoseKibiruose += $kiekis;
    }

    public function kiekPririnktaAkmenu() :void
    {
        echo '<h2>Nr.: pririnkta: ' .$this->akmenuKiekis .'</h2>'; 
    }

    public static function getAkmenuKiekisVisuoseKibiruose()
    {
        return self::$akmenuKiekisVisuoseKibiruose;
    }

}