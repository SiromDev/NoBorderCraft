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

    /**
     * @var Ip Ip de lutilisateur
     */
    private $ip;

    /**
     * Fonction apeller par le router
     */
    public function show(){
        $this->init();
        $this->validateAll();
    }

    /**
     * Fonction pour voir si on a voter est socuper des requéte
     */
    public function validateAll(){
        if($this->model->isValidateLink(1, '176.189.45.84')) $this->model->addVote(1);
        if($this->model->isValidateLink(2, '176.189.45.84')) $this->model->addVote(2);
        if($this->model->isValidateLink(3, '176.189.45.84')) $this->model->addVote(3);
        header('Location: /vote');
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