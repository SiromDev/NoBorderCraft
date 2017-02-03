<?php
/**
 * Namespace Model dans App
 */
namespace App\Model;

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
     * @return bool si le player a voter
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
        echo "IP: {$ip}";
        return false;
    }

    /**
     * @param $ip ip de lutilisateur
     *
     * @return bool Si lutilisateur a voter
     */
    private function isValidateLink2($ip){
        return false;
    }

    /**
     * @param $ip ip de lutilisateur
     *
     * @return bool Si lutilisateur a voter
     */
    private function isValidateLink3($ip){
        return false;
    }

}