<?php
/**
 * Namespace Controller dans App
 */
namespace App\Controller;

/**
 * Class Controller
 * @package App\Controller
 */
class Controller{

    /**
     * Controller constructor.
     */
    public function __construct(){

    }

    /**
     * @param $class
     * @param array $params Paramétre a passer a la vue
     */
    public function load($class, $datas = []){
        $url = explode("\\", $class);
        $url = str_replace('Controller', 'View', $url[2]);
        $url = "../views/{$url}.php";
        require $url;
    }

}