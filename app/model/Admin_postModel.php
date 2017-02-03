<?php
/**
 * Namespace Model dans App
 */
namespace App\Model;

/**
 * Namespace Exterieure
 */
use App\App;

/**
 * Class Admin_postModel
 * @package App\Model
 */
class Admin_postModel extends Model {

    private $posts;

    /**
     * Admin_postModel constructor.
     */
    public function __construct(){

    }

    public function getAllPosts(){
        if ($this->posts == null) $this->posts = App::getDatabase()->query('SELECT * FROM posts ORDER BY id DESC', false);
        return $this->posts;
    }

}