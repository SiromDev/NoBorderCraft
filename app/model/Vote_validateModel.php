<?php
/**
 * Namespace Model dans App
 */
namespace App\Model;

/**
 * Use namespace exterieure
 */
use App\App;
use App\Session;

/**
 * Class Vote_validateModel
 * @package App\Model
 */
class Vote_validateModel extends Model {

    /**
     * Vote_validateModel constructor.
     */
    public function __construct(){

    }

    /**
     * @param $linkN Nombre du lien a valider
     * @param $ip ip de lutilisateur
     *
     * @return bool Si le player a voter
     */
    public function isValidateLink($linkN, $ip){
        $validate = false;
        switch ($linkN){
            case 1:
                $validate = $this->isValidateLink1($ip);
                break;
            case 2:
                $validate = $this->isValidateLink2($ip);
                break;
            case 3:
                $validate = $this->isValidateLink3($ip);
                break;
        }
        return $validate;
    }

    /**
     * @param $ip ip de lutilisateur
     *
     * @return bool Si lutilisateur a voter
     */
    private function isValidateLink1($ip){
        if (!$this->isAlradyVoted(1)){
            $is_valid_vote = file_get_contents("http://www.serveurs-minecraft.org/api/is_valid_vote.php?id=41778&ip={$ip}&duration=1440");
            return $is_valid_vote != "0";
        }
        return false;
    }

    /**
     * @param $ip ip de lutilisateur
     *
     * @return bool Si lutilisateur a voter
     */
    private function isValidateLink2($ip){
        if (!$this->isAlradyVoted(2)) {
            $api = "https://serveurs-minecraft.com/api.php?Classement=No+Border+Craft&ip={$ip}";
            $apiResult = file_get_contents($api);
            $json = json_decode($apiResult, false);
            if ($apiResult !== false) if (!$json->authorVote) return true;
        }
        return false;
    }

    /**
     * @param $ip ip de lutilisateur
     *
     * @return bool Si lutilisateur a voter
     */
    private function isValidateLink3($ip){
        if (!$this->isAlradyVoted(3)) {
            $api_adress = "http://www.serveursminecraft.org/sm_api/peutVoter.php?id=1221&ip=$ip";
            $api_result = file_get_contents($api_adress);
            if($api_result < "0") return false;
            return true;
        }
        return true;
    }

    /**
     * @return bool Si lutilisateur a voter par tout
     */
    public function isVotedAll(){
        $isVoted = false;
        if ($this->isAlradyVoted(1) && $this->isAlradyVoted(2) && $this->isAlradyVoted(3)) $isVoted = true;
        return $isVoted;
    }

    /**
     * @param $linkN int Numéro du lien voter pour la session
     * @param int $number Nombre de vote a ajouter
     */
    public function addVote($linkN, $number = 1){
        $vote = App::getDatabase()->prepare("SELECT votes FROM players WHERE pseudo = ?", [htmlspecialchars($_SESSION['pseudo'])], true);
        if ($linkN != 3) {
            if ($vote != null) App::getDatabase()->prepare("UPDATE players SET votes = ? WHERE pseudo = ?", [$vote->votes + $number, $_SESSION['pseudo']]);
        }
        $_SESSION['votted']["votted_{$linkN}"] = "Votted";
    }

    /**
     * @param $linkN Numéro du lien a vérfier
     * @return bool Si lutilisateur a voter
     */
    public function isAlradyVoted($linkN){
        return isset($_SESSION['votted']["votted_{$linkN}"]);
    }

}