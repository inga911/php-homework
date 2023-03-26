<?php

class MarsoPalydovas {

    private static $planet;

    private function __construct(){}
    private function __clone(){}

    public static  function makePlanet()
    {
        return self::$planet ?? self::$planet = new self;
    }

}