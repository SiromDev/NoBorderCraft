<?php
/**
 * Namespace Model dans App
 */
namespace App\Model;

use App\App;

/**
 * Class RootModel
 * @package App\Model
 */
class RootModel extends Model {

    /**
     * @var \PDOStatement Statement des posts
     */
    private $posts = null;

    /**
     * @var \PDOStatement Statement des meilleur vote
     */
    private $votes = null;

    /**
     * RootModel constructor.
     */
    public function __construct(){

    }

    /**
     * @param $limit Combien de posts veut on avoir
     *
     * @return \PDOStatement getter des posts
     */
    public function getPosts($limit){
        if ($this->posts == null) $this->posts = App::getDatabase()->query("SELECT * FROM posts ORDER BY id DESC LIMIT " . $limit, false);
        return $this->posts;
    }

    /**
     * @param $limit Combien de votes veut on avoir
     *
     * @return \PDOStatement getter des meilleur vote
     */
    public function getBestVotes($limit){
        if ($this->votes == null) $this->votes = App::getDatabase()->query("SELECT * FROM votes ORDER BY number DESC LIMIT " . $limit, false);
        return $this->votes;
    }


}