<?php
/**
 * Namespace Controller dans App
 */
namespace App\Controller;

/**
 * Namespace exterieure
 */
use App\Model\VotePostModel;

/**
 * Class VotePostController
 * @package App\Controller
 */
class VotePostController extends Controller {

    /**
     * @var VotePostModel Model du controller
     */
    private $model;

    /**
     * Fontion apeller par le router
     */
    public function show(){
        $this->init();
        $this->model->log();
        $this->model->callback();
    }

    /*
     * Initialization des objet
     */
    public function init(){
        $this->model = new VotePostModel();
    }

}