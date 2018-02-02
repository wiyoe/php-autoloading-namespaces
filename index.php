<?php
/**
 * Created by PhpStorm.
 * User: recep_hidir
 * Date: 2.02.2018
 * Time: 16:47
 */

//require_once(__DIR__ . "./Classes/Autoloader.php");
require __DIR__ . './vendor/autoload.php';

use Helper\Text as Text;

$text = new Text("Hello World!");

$text->reverseText()->writeText();
$text->addBr();

if($text->reverseText()->isContain("Hello")){
    echo "Contain.";
}else{
    echo "Not Contain.";
}