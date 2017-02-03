<?php
/**
 * Namespace Model dans App
 */
namespace App\Model;

/**
 * Namespace exterieure
 */
use App\App;

/**
 * Class Admin_post_writePostModel
 * @package App\Model
 */
class Admin_post_writePostModel extends Model {

    /**
     * Admin_post_writePostModel constructor.
     */
    public function __construct(){

    }

    /**
     * @return bool Si le formulaire est valide
     */
    public function isValide(){
        if (empty($_POST['title']) || empty($_POST['thumb']) || empty($_POST['content'])) return false;
        return true;
    }

    /**
     * Pérmet denvoyer l'article
     */
    public function send(){
        App::getDatabase()->prepare("INSERT INTO posts SET title = ?, thumb = ?, content = ?", [$_POST['title'], $_POST['thumb'], $_POST['content']]);
        header('Location: /nbc/admin/post');
        exit();
    }

}