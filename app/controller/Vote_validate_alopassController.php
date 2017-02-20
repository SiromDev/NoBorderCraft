<?php
/**
 * Namespace Controller dans App
 */
namespace App\Controller;
use App\Model\Model;
use App\Model\Vote_validate_alopassModel;

/**
 * Class Vote_validate_alopassController
 * @package App\Controller
 */
class Vote_validate_alopassController extends Controller {

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
        $this->model = new Vote_validate_alopassModel();
    }

}