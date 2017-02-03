<?php
/**
 * namespace Controller dans App
 */
namespace App\Controller;

/**
 * Namespace exterieure
 */
use App\Model\Admin_post_writePostModel;
use App\Model\Model;
use App\Router\RouterException;

/**
 * Class Admin_post_writePostController
 * @package App\Controller
 */
class Admin_post_writePostController extends Controller {

    /**
     * @var Admin_post_writePostModel Model du controller
     */
    private $model;

    /**
     * Fonction apeller par le Router
     */
    public function show(){
        $this->init();
        if ($this->model->isValide()){
            $this->model->send();
        }else{
            header('Location: /admin/post/write');
            exit();
        }
    }

    /**
     * Initialization des objet
     */
    public function init(){
        $this->model = new Admin_post_writePostModel();
    }

}