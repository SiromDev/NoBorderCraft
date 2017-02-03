<?php
/**
 * Namespace Model dans App
 */
namespace App\Model;
use App\App;

/**
 * Class VoteModel
 * @package App\Model
 */
class VoteModel extends Model {

    /**
     * @var \PDOStatement Best votes
     */
    private $best = null;

    /**
     * VoteModel constructor.
     */
    public function __construct(){

    }

    /**
     * @return \PDOStatement Best votes
     */
    public function getBestVotes(){
        if ($this->best == null) $this->best = App::getDatabase()->query("SELECT * FROM votes ORDER BY number DESC LIMIT 20", [], false);
        return $this->best;
    }

    /**
     * @return bool Si le joueur est connecter
     */
    public function isLogged(){
        if (isset($_SESSION['logged'])) return $_SESSION['logged'];
        return false;
    }

}