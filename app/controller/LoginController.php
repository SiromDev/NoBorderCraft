<?php
/**
 * Naespace Controller dans App
 */
namespace App\Controller;
use App\Model\LoginModel;

/**
 * Class LoginController
 * @package App\Controller
 */
class LoginController extends Controller {

    /**
     * @var LoginModel Model du controller
     */
    private $model;

    /**
     * Fonction apelle par le router
     */
    public function show(){
        $this->init();
        $this->load(self::class);
    }

    /**
     * Permet d'initializer les objet
     */
    public function init(){
        $this->model = new LoginModel();
    }

}