<?php
/**
 * Namespace Controller dans App
 */
namespace App\Controller;

/**
 * Utilisation des namespace exterieure
 */
use App\MinecraftAPI;
use App\Model\Admin_dashboardModel;
use App\Router\RouterException;

/**
 * Class Admin_dashboardController
 * @package App\Controller
 */
class Admin_dashboardController extends Controller {

    /**
     * @var Admin_dashboardModel Model du controller
     */
    private $model;

    /**
     * @var MinecraftAPI Api sur le server
     */
    private $serverApi;

    /**
     * Fonction apeller par le router
     */
    public function show(){
        $this->init();

        switch ($this->model->isAuth()){
            case true:
                $this->serverApi = new MinecraftAPI("nobordercraft.fr", 25565);
                $this->load(self::class, [
                    'api' => $this->serverApi]
                );
                break;
            default:
                RouterException::notFound();
                break;
        }
    }

    /**
     * Permet d'initializer les objet
     */
    public function init(){
        $this->model = new Admin_dashboardModel();
    }

}