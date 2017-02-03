<?php
/**
 * namespace Controller dans App
 */
namespace App\Controller;

/**
 * Namespace exterieure
 */
use App\Model\Admin_post_writeModel;
use App\Model\Model;

/**
 * Class Admin_post_writeController
 * @package App\Controller
 */
class Admin_post_writeController extends Controller {

    /**
     * @var Model Model du controller
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
     * initialization des objet
     */
    public function init(){
        $this->model = new Admin_post_writeModel();
    }

}