<?php
/**
 * Namespace Controller dans App
 */
namespace App\Controller;

/**
 * namespace exterieure
 */
use App\Model\Model;
use App\Model\Shop_validate_cbModel;

/**
 * Class Vote_validate_alopassController
 * @package App\Controller
 */
class Shop_validate_cbController extends Controller {

    /**
     * @var Model Model du controller
     */
    private $model;

    /**
     * Fonction apeller par le router
     *
     * @param $number int Nombre de lofre prise en compte
     */
    public function validate($number){
        $this->init();
        $this->model->isLogged();
        $this->model->verify($number);
    }

    /**
     * Iniitialization des objet
     */
    public function init(){
        $this->model = new Shop_validate_cbModel();
    }

}