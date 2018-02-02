<?php
/**
 * Created by PhpStorm.
 * User: recep_hidir
 * Date: 2.02.2018
 * Time: 16:55
 */

//function __autoload($class){
//
//    $parts = explode('\\', $class);
//    require "classes/".end($parts) . '.php';
//}


// autoload function
//function __autoload($class_name) {
//
//    require_once("$class_name.php");
//}


//class Autoloader {
//    static public function loader($className) {
//        $filename = "./" . str_replace("\\", '/', $className) . ".php";
//        if (file_exists($filename)) {
//            include($filename);
//            if (class_exists($className)) {
//                return TRUE;
//            }
//        }
//        return FALSE;
//    }
//}
//spl_autoload_register('Autoloader::loader');
