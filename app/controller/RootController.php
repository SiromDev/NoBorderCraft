<?php
/**
 * Namespace Controller dans App
 */
namespace App\Controller;

/**
 * Utilisation des namespace exterieure
 */
use App\App;
use App\Model\RootModel;

/**
 * Class RootController
 * @package App\Controller
 */
class RootController extends Controller {

    /**
     * @var RootModel Model du controller NfController
     */
    private $model;

    /**
     * Fonction apeller par le router
     */
    public function show(){
        $this->init();
        $this->load(self::class, [
            'posts' => $this->model->getPosts(3),
            'best-votes' => $this->model->getBestVotes(5)
        ]);
    }

    /**
     * Initialisetion des objet
     */
    public function init(){
        $this->model = new RootModel();
    }

}