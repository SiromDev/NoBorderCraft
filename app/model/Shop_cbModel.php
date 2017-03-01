<?php
/**
 * Namespace Model dans App
 */
namespace App\Model;


/**
 * Class Shop_alopassModel
 * @package App\Model
 */
class Shop_cbModel extends Model{

    /**
     * Shop_alopassModel constructor.
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