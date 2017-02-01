<?php
/**
 * Namespace Controller dans App
 */
namespace App\Controller;

/**
 * namespace exterieure
 */
use App\Model\Admin_post_deleteModel;
use App\Router\RouterException;

/**
 * Class admin_post_deleteController
 * @package App\Controller
 */
class admin_post_deleteController extends Controller {

    /**
     * @var Admin_post_deleteModel Model du controller
     */
    private $model;

    /**
     * Fonction apeller par le router
     */
    public function show($id){
        $this->init($id);

        switch ($this->model->isAuth()){
            case true:
                $this->model->delete();
                header('Location: /nbc/admin/post');
                break;
            default:
                RouterException::notFound();
                break;
        }
    }

    /**
     * Permet dinitializer les objet
     *
     * @param $id int id du post
     */
    public function init($id){
        $this->model = new Admin_post_deleteModel($id);
    }

}