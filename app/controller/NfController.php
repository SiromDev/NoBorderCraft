<?php
/**
 * Namespace Controller dans App
 */
namespace App\Controller;

/**
 * Utilisation des namespace exterieure
 */
use App\Model\NfModel;

/**
 * Class NfController
 * @package App\Controller
 */
class NfController extends Controller {

    /**
     * @var NfModel Model du controller NfController
     */
    private $model;

    /**
     * Fonction apeller par le router
     */
    public function show(){
        $this->init();
        $this->load(self::class);
    }

    /**
     * Initialization du controller
     */
    public function init(){
        $this->model = new NfModel();
    }

}