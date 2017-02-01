<?php
/**
 * Namespace Controller dans App
 */
namespace App\Controller;

use App\Model\LogoutModel;
use App\Router\RouterException;

/**
 * Class Logout
 * @package App\Controller
 */
class LogoutController extends Controller {

    /**
     * @var LogoutModel model su controller
     */
    private $model;

    /**
     * Fonction apeller par le router
     */
    public function show(){
        $this->init();
        $this->logout();
    }

    /**
     * Initialization des objet
     */
    public function init(){
        $this->model = new LogoutModel();
    }

    /**
     * Déconnection de la personne
     */
    public function logout(){
        if (isset($_SESSION['auth'])){
            unset($_SESSION['auth']);
            header('Location: /nbc');
            exit();
        }else{
            RouterException::notFound();
            exit();
        }
    }

}