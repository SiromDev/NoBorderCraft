<?php
/**
 * Namespace App
 */
namespace App;

/**
 * Class Session
 * @package App
 */
class Session{

    /**
     * Session constructor.
     */
    public function __construct(){


    }

    /**
     * @param $name string Nom de la proprieter
     * @param $value mixed Proprieter a stocker
     */
    static function write($name, $value){
        $_SESSION[$name] = $value;
    }

    /**
     * @param $name string Nom de la proprieter
     * @return mixed La proprieter demmander
     */
    static function listen($name){
        return $_SESSION[$name];
    }

}