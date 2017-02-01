<?php
/**
 * Namespace Router dans App
 */
namespace App\Router;

/**
 * Class Route
 * @package App\Router
 */
class Route{

    /**
     * @var string Path a parser
     */
    private $path;

    /**
     * @var Fonction a appeller
     */
    private $callable;

    /**
     * @var array Matche trouver par a port au path
     */
    private $matches = [];

    /**
     * Route constructor.
     *
     * @param $path string Path a parser
     * @param $callable Fonction a apeller
     */
    public function __construct($path, $callable){
        $this->path = trim($path, '/');
        $this->callable = $callable;
    }

    /**
     * @param $url Url a parser
     *
     * @return bool true or false
     */
    public function match($url){
        $url = trim($url, '/');
        $path = preg_replace('#:([\w]+)#', '([^/]+)', $this->path);
        $regex = "#^$path$#i";
        if (!preg_match($regex, $url, $matches)) return false;
        array_shift($matches);
        $this->matches = $matches;
        return true;
    }

    /**
     * @return mixed La fonction a apeller est apeller
     */
    public function call(){
        if (is_string($this->callable)){
            $params = explode('#', $this->callable);
            $controller = "App\\Controller\\" . $params[0] . "Controller";
            $controller = new $controller();
            return call_user_func_array([$controller, $params[1]], $this->matches);
        }else{
            return call_user_func_array($this->callable, $this->matches);
        }
    }

}