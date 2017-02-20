<?php
/**
 * Namespace Model dans App
 */
namespace App\Model;

/**
 * Class ShopModel
 * @package App\Model
 */
class ShopModel extends Model {

    /**
     * ShopModel constructor.
     */
    public function __construct(){

    }

    /**
     * @return bool Si le joueur est connecter
     */
    public function isLogged(){
        if (isset($_SESSION['logged'])) return $_SESSION['logged'];
        $this->callback();
    }

    /**
     * Permet de rediriger lutilisateur vert une page
     */
    public function callback(){
        header('Location: /shop/register');
        exit();
    }

}