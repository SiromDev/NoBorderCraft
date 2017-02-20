<?php
/**
 * Namespace Controller dans App
 */
namespace App\Controller;

/**
 * Namespace exterieure
 */
use App\Model\Model;
use App\Model\ShopModel;

/**
 * Class ShopController
 * @package App\Controller
 */
class ShopController extends Controller {

    /**
     * @var Model Model du controller
     */
    private $model;

    /**
     * Fonction apeller par le Router
     */
    public function show(){
        $this->init();
        $this->model->isLogged();
        $this->load(self::class, [
            "pseudo" => $_SESSION['pseudo']
        ]);
    }

    /**
     * Initialization des objet
     */
    public function init(){
        $this->model = new ShopModel();
    }

}