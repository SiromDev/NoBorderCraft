<?php
/**
 * Namespace Controller dans App
 */
namespace App\Controller;

/**
 * Namespace exterieure
 */
use App\Model\Model;
use App\Model\Shop_cbModel;

/**
 * Class Shop_alopassController
 * @package App\Controller
 */
class Shop_cbController extends Controller {

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
            case 500:
                $this->load(self::class, [
                    "number" => 500,
                    "key" => '7213bb37097483eb265422318f20eb9f',
                    "module" => '<div data-dedipass="7213bb37097483eb265422318f20eb9f" data-dedipass-custom=""></div>'
                ]);
                $_SESSION['key'] = "7213bb37097483eb265422318f20eb9f";
                break;
            case 1000:
                $this->load(self::class, [
                    "number" => 1000,
                    "key" => '017e994287e7dc64eb85f91566f0f0a8',
                    "module" => '<div data-dedipass="017e994287e7dc64eb85f91566f0f0a8" data-dedipass-custom=""></div>'
                ]);
                $_SESSION['key'] = "017e994287e7dc64eb85f91566f0f0a8";
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
        $this->model = new Shop_cbModel();
    }

}