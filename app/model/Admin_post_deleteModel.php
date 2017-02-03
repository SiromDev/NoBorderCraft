<?php
/**
 * Namespace Model dans App
 */
namespace App\Model;

/**
 * Namespace Exterieure
 */
use App\App;

class Admin_post_deleteModel extends Model {

    /**
     * @var int Id du post
     */
    private $id;

    /**
     * Admin_post_deleteModel constructor.
     *
     * @param $id int Id du post
     */
    public function __construct($id){
        $this->id = $id;
    }

    /**
     * @return bool Si la personne et connecter ou pas
     */
    public function isAuth(){
        if (!isset($_SESSION['auth'])) return false;
        return true;
    }

    /**
     * Supprime le post a l'id de l'instance
     */
    public function delete(){
        App::getDatabase()->prepare('DELETE FROM posts WHERE id = ?', [$this->id]);
    }

}