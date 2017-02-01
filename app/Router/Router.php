<?php
/**
 * Namespace Router dans App
 */
namespace App\Router;

/**
 * Class Router
 * @package App\Router
 */
class Router{

    /**
     * @var string url demander
     */
    private $url;

    /**
     * @var array Stockage de toute les route en GET & POST
     */
    private $routes = [];

    /**
     * Router constructor.
     *
     * @param $url url à demander
     */
    public function __construct($url){
        $this->url = $url;
    }

    /**
     * @param $path string Lien du path a ajouter
     * @param $callable Fonction a appeler
     *
     * @return Route La route crée via la fonction
     */
    public function get($path, $callable){
        $route = new Route($path, $callable);
        $this->routes['GET'][] = $route;
        return $route;
    }

    /**
     * @param $path string Lien du path a ajouter
     * @param $callable Fonction a appeler
     *
     * @return Route  La route crée via la fonction
     */
    public function post($path, $callable){
        $route = new Route($path, $callable);
        $this->routes['POST'][] = $route;
        return $route;
    }

    /**
     * @return mixed Une route si il trouve un match
     * @throws RouterException
     */
    public function run(){
        if (!isset($this->routes[$_SERVER['REQUEST_METHOD']])){
            throw new RouterException('REQUEST_METHOD does not exist');
        }
        foreach ($this->routes[$_SERVER['REQUEST_METHOD']] as $route){
            if ($route->match($this->url)){
                return $route->call();
            }
        }
        RouterException::notFound();
    }

}