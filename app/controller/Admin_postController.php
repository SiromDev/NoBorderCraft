<?php
/**
 * Namespace Controller dans App
 */
namespace App\Controller;

/**
 * Namespace exterieure
 */
use App\Model\Admin_postModel;
use App\Model\Model;

/**
 * Class Admin_postController
 * @package App\Controller
 */
class Admin_postController extends Controller {

    /**
     * @var Model Model du controller
     */
    private $model;

    /**
     * Fonction appeler par le router
     */
    public function show(){
        $this->init();
        $this->load(self::class, [
            "posts" => $this->model->getAllPosts()
        ]);
    }

    /**
     * Initiallization des objet
     */
    public function init(){
        $this->model = new Admin_postModel();
    }

}