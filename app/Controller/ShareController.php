<?php
/*
 * Namespace Controller dans App
 */
namespace App\Controller;
use App\Model\ShareModel;

/**
 * Class ShareController
 * @package App\Controller
 */
class ShareController extends Controller {

    /**
     * @var NfModel Model du controller NfController
     */
    private $model;

    /**
     * Fonction apeller par le router
     *
     * @param $type string type de partage
     * @param $id int id de l'article a partager
     */
    public function show($type, $id){
        $this->init($type, $id);
        $this->load(self::class);
    }

    /**
     * Initialization du controller
     *
     * @param $type string type de partage
     * @param $id int id de l'article a partager
     */
    public function init($type, $id){
        $this->model = new ShareModel($type, $id);
    }

}