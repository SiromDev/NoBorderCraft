<?php
/**
 * Namespace Model dans App
 */
namespace App\Model;

/**
 * Class Shop_registerModel
 * @package App\Model
 */
class Shop_registerModel extends Model {

    /**
     * Shop_registerModel constructor.
     */
    public function __construct(){

    }

    /**
     * @return bool Si le joueur est connecter
     */
    public function isLogged(){
        if (isset($_SESSION['logged'])) return $_SESSION['logged'];
        return false;
    }

}