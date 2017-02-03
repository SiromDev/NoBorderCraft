<?php
/**
 * Namespace Model dans App
 */
namespace App\Model;
use App\App;

/**
 * Class LoginPostModel
 * @package App\Model
 */
class LoginPostModel extends Model {

    /**
     * @var null / \PDOStatement
     */
    private $user = null;

    /**
     * @var null Key
     */
    private $key = null;

    /**
     * @var null Password
     */
    private $pass = null;

    /**
     * LoginPostModel constructor.
     */
    public function __construct($key, $pass){
        $this->key = $key;
        $this->pass = $pass;
    }

    /**
     * @return bool IS connected
     */
    public function isValide(){
        if (!$this->getUser()) return false;
        if ($this->getUser()->password === $this->pass) return true;
        return false;
    }

    /**
     * @return \PDOStatement Statement de la requete
     */
    public function getUser(){
        if ($this->user == null) $this->user = App::getDatabase()->prepare("SELECT * FROM admins WHERE user_key = ?", [$this->key], true);
        return $this->user;
    }

}