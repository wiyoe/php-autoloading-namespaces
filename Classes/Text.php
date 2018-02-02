<?php
/**
 * Created by PhpStorm.
 * User: recep_hidir
 * Date: 2.02.2018
 * Time: 16:47
 */

namespace Helper;

class Text
{
    private $text = "";

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function reverseText()
    {
        $this->text = strrev($this->text);
        return $this;
    }

    public function isContain($string)
    {
        if (strpos($this->text, $string) !== false) {
            return true;
        }
        return false;
    }

    public function addBr()
    {
        echo "<br />";
    }

    public function writeText()
    {
        echo $this->text;
    }
}