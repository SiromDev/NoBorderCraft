<?php
/**
 * Namespace Controller dans App
 */
namespace App\Controller;

/**
 * Use the external namespace
 */
use App\App;
use App\Model\LoginPostModel;
use App\Model\Model;
use App\Model\PostModel;

/**
 * Class LoginPostController
 * @package App\Controller
 */
class LoginPostController extends Controller {

    /**
     * @var LoginPostModel Model du controller
     */
    private $model;

    /**
     * Fonction apeller par le controller
     */
    public function show(){
        $this->init();

        switch ($this->model->isValide()){
            case true:
                $_SESSION['auth'] = $this->model->getUser();
                header('Location: /nbc/admin/dashboard');
                exit();
                break;
            default:
                header('Location: /nbc/login');
                exit();
                break;
        }
    }

    /**
     * Permet d'initializer les objet
     */
    public function init(){
        $this->model = new LoginPostModel($_POST['name'], $_POST['pass']);
        $this->model->getUser();
    }
}