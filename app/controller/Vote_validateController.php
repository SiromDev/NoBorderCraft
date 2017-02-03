<?php
/**
 * Namespace Controller dans App
 */
namespace App\Controller;

/**
 * Namespace exterieure
 */
use App\Model\Vote_validateModel;

/**
 * Class Vote_validate
 * @package App\Controller
 */
class Vote_validateController extends Controller {

    /**
     * @var Vote_validateModel Model du controller
     */
    private $model;

    private $ip;

    /**
     * Fonction apeller par le router
     */
    public function show(){
        $this->init();
        $this->model->isValidateLink(1, $this->ip);
}

    /**
     * Initialization des objet
     */
    public function init(){
        $this->model = new Vote_validateModel();

        if (isset($_SERVER['HTTP_CLIENT_IP'])){
            $this->ip = $_SERVER['HTTP_CLIENT_IP'];
        }elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
            $this->ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
            $this->ip = (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
        }
    }

}