<?php

class Avenger
{
    public $attacco;
    public $accessori;
    public static $numEroi = 0;

    public function __construct(Attack $attacco, Accessory $accessori)
    {
        $this->attacco = $attacco;
        $this->accessori = $accessori;
        self::$numEroi++;
    }

    public function attacca()
    {
        $this->attacco->attaccaIlNemico();
    }

    public function accessori()
    {
        $this->accessori->equipaggio();
    }
    public static function contaAvenger()
    {
        echo self::$numEroi . " eroi sono pronti all'azione\n";
    }
}