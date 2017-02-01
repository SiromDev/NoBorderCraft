<?php
/**
 * Namespace Router dans App
 */
namespace App\Router;

/**
 * Class RouterException
 * @package App\Router
 */
class RouterException extends \Exception{

    /**
     * Pérmet de rediriger ver lerreur 404
     */
    static function notFound(){
        header('Location: /nbc/404');
        exit();
    }

}