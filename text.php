<?php

/**
 * 
 *
 * @author Adam Holejšovský <avajtr@gmail.com>
 * @version 1.0
 * @package SI a WAP
 * @license Free
 */
class text {

    /**
     * Zložení druhu TAGu
     * @var string 
     */
    private $tag;
    /**
     * Uložení textu který se má vypsat
     * @var string 
     */
    private $text;

    /**
     * Konstruktor třídy
     * @param string $tag uloži proměnou do třídy
     */
    function __construct($tag) {
        $this->tag = $tag;
    }

    /**
     * Nastavuje text který se má vypsat
     * @param string $text uloží proměnou do třídy
     */
    function text($text) {
        $this->text = $text;
    }

    /**
     * Vygeneruje tagy a mezi ně text.
     * @return string vrátí vygenerovaný text
     */
    function __toString() {
        switch ($this->tag) {
            case "h1":
                $vrat = "<h1>".$this->text."</h1>";
                break;
            case "h2":
                $vrat = "<h2>".$this->text."</h2>";
                break;
            case "h3":
                $vrat = "<h3>".$this->text."</h3>";
                break;
            case "h4":
                $vrat = "<h4>".$this->text."</h4>";
                break;
            case "h5":
                $vrat = "<h5>".$this->text."</h5>";
                break;
            case "span":
                $vrat = "<span>".$this->text."</span>";
                break;
            case "p":
                $vrat = "<p>".$this->text."</p>";
                break;
            case "a":
                $vrat = "<a>".$this->text."</a>";
                break;
            default:
                $vrat = "<span>Zadali jste špatný Tag</span>";
                break;
        }
        return $vrat;
    }

}
