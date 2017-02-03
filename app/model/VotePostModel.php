<?php
/**
 * Namespace Model dans App
 */
namespace App\Model;

/**
 * Class VotePostModel
 * @package App\Model
 */
class VotePostModel extends Model {

    /**
     * VotePostModel constructor.
     */
    public function __construct(){

    }

    /**
     * Permet de connecter le joueur
     */
    public function log(){
        if (empty($_POST['pseudo'])) $this->callback();
        $_SESSION['logged'] = true;
        $_SESSION['pseudo'] = htmlspecialchars($_POST['pseudo']);
    }

    /**
     * Permet de retourner a la page de vote
     */
    public function callback(){
        header('Location: /vote');
        exit();
    }

}