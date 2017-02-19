<?php
/**
 * Namespace App
 */
namespace App;

/**
 * Utiliser la classe pdo
 */
use \PDO;

/**
 * Class Database
 */
class Database{

    /**
     * @var $db_config array Sauvegarde les information de la base de donnée
     */
    private $db_config = [];

    /**
     * @var $pdo PDO Sauvegarde l'instance de PDO
     */
    private $pdo = null;

    /**
     * @param $db_config array Information de la base de donnée sous forme de tableau
     */
    function __construct($db_config){
        $this->db_config = $db_config;

        if ($this->db_config['database_initialize']) $this->initialize();
    }

    /**
     * Fonction pour initializer l'instance de PDO
     */
    public function initialize(){
        if ($this->pdo == null){

            if ($this->db_config['database_utf-8']){
                $this->pdo = new PDO(
                    'mysql:host=188.165.248.215;dbname=NBC;charset=utf8',
                    'root',
                    'cp8N6HV4q6'
                );
            }else{
                $this->pdo = new PDO(
                    'mysql:host=188.165.248.215;dbname=NBC',
                    'root',
                    'cp8N6HV4q6'
                );
            }

            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            if (App::getConfig()['debug']) $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        }
    }

    /**
     * @return PDO L'instance de pdo
     */
    public function getPDO() {
        return $this->pdo;
    }

    /**
     * @param $statement string Sql
     * @param $one bool Si la requete retourne plusieure resultat
     * @return mixed la requete
     */
    public function query($statement, $one = null){
        $req = $this->pdo->query($statement);
        if ($one != null) {
            return $this->one($req, $one);
        } else {
            return $req;
        }
    }

    /**
     * @param $statement string Sql
     * @param $data
     * @param $one bool Si la requete retourne plusieure resultat
     * @return mixed la requete
     */
    public function prepare($statement, $data, $one = null){
        $req = $this->pdo->prepare($statement);
        $req->execute($data);
        if ($one != null) {
            return $this->one($req, $one);
        } else {
            return $req;
        }
    }

    /**
     * @param $req \PDOStatement La requete a prendre en compte
     * @param $one La fonction
     * @return mixed le resultat
     */
    private function one($req, $one) {
        if ($one) return $req->fetch();
        return $req->fetchAll();
    }

}
