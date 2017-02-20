<?php
/**
 * Namespace Controller dans App
 */
namespace App\Controller;

/**
 * Model exterieure
 */
use App\Model\Model;
use App\Model\Shop_registerModel;

/**
 * Class Shop_registerController
 * @package App\Controller
 */
class Shop_registerController extends Controller {

    /**
     * @var Model Model du controller
     */
    private $model;

    /**
     * Fonction apeller par le router
     */
    public function show(){
        $this->init();
        if ($this->model->isLogged()) header('Location: /shop');
        $this->load(self::class);
    }

    /**
     * Register de l'utilisateur
     */
    public function register(){
        if (empty($_POST['pseudo'])){
            header('Location: /shop/register');
            exit();
        }
        $_SESSION['logged'] = true;
        $_SESSION['pseudo'] = htmlspecialchars($_POST['pseudo']);
        header('Location: /shop');
        exit();
    }

    /**
     * Initialization des objet
     */
    public function init(){
        $this->model = new Shop_registerModel();
    }

}