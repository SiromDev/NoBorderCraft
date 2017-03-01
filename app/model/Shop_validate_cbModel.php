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
 * Class Vote_validate_alopassModel
 * @package App\Model
 */
class Shop_validate_cbModel extends Model {

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
                case 500:
                    $dedipass = file_get_contents('http://api.dedipass.com/v1/pay/?public_key=7213bb37097483eb265422318f20eb9f&private_key=a62f3c1915c7cd22dba948a3568b69b4af0ce3&code=' . $code);
                    $dedipass = json_decode($dedipass);
                    if($dedipass->status == 'success') $this->add(500);
                    break;
                case 1000:
                    $dedipass = file_get_contents('http://api.dedipass.com/v1/pay/?public_key=017e994287e7dc64eb85f91566f0f0a8&private_key=0893f59de4939ea57612f7e98f77a92a&code=' . $code);
                    $dedipass = json_decode($dedipass);
                    if($dedipass->status == 'success') $this->add(1000);
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