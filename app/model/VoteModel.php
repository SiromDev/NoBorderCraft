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
        if ($this->best == null) $this->best = App::getDatabase()->query("SELECT * FROM players ORDER BY votes DESC LIMIT 20", false);
        return $this->best;
    }

    /**
     * @return bool Si le joueur est connecter
     */
    public function isLogged(){
        if (isset($_SESSION['logged'])) return $_SESSION['logged'];
        return false;
    }

    /**
     * @return bool Si lutilisateur a voter par tout
     */
    public function isVotedAll(){
        $isVoted = true;
        if ($this->isAlradyVoted(1)) $isVoted = false;
        if ($this->isAlradyVoted(2)) $isVoted = false;
        if ($this->isAlradyVoted(3)) $isVoted = false;
        return $isVoted;
    }

    /**
     * @param $linkN Numéro du lien a vérfier
     * @return bool Si lutilisateur a voter
     */
    public function isAlradyVoted($linkN){
        return isset($_SESSION['votted'][$linkN]);
    }

}