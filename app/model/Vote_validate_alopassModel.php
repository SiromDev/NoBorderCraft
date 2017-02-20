<?php
/**
 * Namespace Model dans App
 */
namespace App\Model;
use App\App;

/**
 * Class Vote_validate_alopassModel
 * @package App\Model
 */
class Vote_validate_alopassModel extends Model {

    /**
     * Vote_validate_alopassModel constructor.
     */
    public function __construct(){

    }

    /**
     * Verification depuit l'api
     *
     * @param $number int Nombre de lofre prise en compte
     */
    public function verify($number){
        $code = isset($_POST['code']) ? preg_replace('/[^a-zA-Z0-9]+/', '', $_POST['code']) : '';

        if(empty($code) ) {
            header('Location: /shop/register');
            exit();
        } else {
            switch ($number){
                case 100:
                    $dedipass = file_get_contents('http://api.dedipass.com/v1/pay/?public_key=0ab58f3b3473be9657d2e35ab3dbc5f0&private_key=97e08d6565ba89b02077ed43f7b1df7989133f1d&code=' . $code);
                    $dedipass = json_decode($dedipass);
                    if($dedipass->status == 'success') $this->add(100);
                    break;
                case 250:
                    $dedipass = file_get_contents('http://api.dedipass.com/v1/pay/?public_key=69e9a10e0dea0855d9c5f7775afe6d50&private_key=d91365b8299f7b159a84c29a470871626cd66859&code=' . $code);
                    $dedipass = json_decode($dedipass);
                    if($dedipass->status == 'success') $this->add(250);
                    break;
            }
            header('Location: /shop/register');
            exit();
        }
    }

    /**
     * @param $number Nombre d'iris a ajouter
     */
    public function add($number){
        $iris = App::getDatabase()->prepare("SELECT iris FROM players WHERE pseudo = ?", [htmlspecialchars($_SESSION['pseudo'])], true);
        if ($iris){
            App::getDatabase()->prepare("UPDATE players SET iris = ? WHERE pseudo = ?", [$iris->iris + $number, htmlspecialchars($_SESSION['pseudo'])]);
            header("Location: /shop/success-{$number}");
            exit();
        }
        header('Location: /shop/register');
        exit();
    }

    /**
     * @return bool Si le joueur est connecter
     */
    public function isLogged(){
        if (isset($_SESSION['logged'])) return $_SESSION['logged'];
        $this->callback();
    }

    /**
     * Permet de rediriger lutilisateur vert une page
     */
    public function callback(){
        header('Location: /shop/register');
        exit();
    }

}