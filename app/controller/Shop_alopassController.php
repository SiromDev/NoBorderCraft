<?php
/**
 * Namespace Controller dans App
 */
namespace App\Controller;

/**
 * Namespace exterieure
 */
use App\Model\Model;
use App\Model\Shop_alopassModel;

/**
 * Class Shop_alopassController
 * @package App\Controller
 */
class Shop_alopassController extends Controller {

    /**
     * @var Model Model du controller
     */
    private $model;

    /**
     * Fonction apeller par le router
     *
     * @param $number int Nombre diris demmander
     */
    public function show($number){

        $this->init();
        $this->model->isLogged();

        switch ($number){
            case 100:
                $this->load(self::class, [
                    "number" => 100,
                    "key" => '0ab58f3b3473be9657d2e35ab3dbc5f0',
                    "module" => '<div data-dedipass="0ab58f3b3473be9657d2e35ab3dbc5f0" data-dedipass-custom=""></div>'
                ]);
                $_SESSION['key'] = "0ab58f3b3473be9657d2e35ab3dbc5f0";
                break;
            case 250:
                $this->load(self::class, [
                    "number" => 250,
                    "key" => '69e9a10e0dea0855d9c5f7775afe6d50',
                    "module" => '<div data-dedipass="69e9a10e0dea0855d9c5f7775afe6d50" data-dedipass-custom=""></div>'
                ]);
                $_SESSION['key'] = "69e9a10e0dea0855d9c5f7775afe6d50";
                break;
            default:
                header('Location: /shop/register');
                break;
        }
    }

    /**
     * Initialization des objet
     */
    public function init(){
        $this->model = new Shop_alopassModel();
    }

}