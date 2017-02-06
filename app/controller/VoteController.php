<?php
/**
 * Namespace Controller dans App
 */
namespace App\Controller;

/**
 * Namespace exterieure
 */
use App\Model\VoteModel;

/**
 * Class VoteController
 * @package App\Controller
 */
class VoteController extends Controller {

    /**
     * @var VoteModel Model du controller
     */
    private $model;

    /**
     * Fonction apeller par le router
     */
    public function show(){
        $this->init();
        $this->load(self::class, [
            "logged" => $this->model->isLogged(),
            "votes" => $this->model->getBestVotes(),
            "is_voted" => $this->model->isVotedAll()
        ]);
    }

    /**
     * initialization des objet
     */
    public function init(){
        $this->model = new VoteModel();
    }

}