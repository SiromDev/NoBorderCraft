<?php
/**
 * Namespace App
 */
namespace App;

/**
 * Class App
 */
class App{

    /**
     * @var $config json Contient la config du site
     */
    private static $config = null;

    /**
     * @var $database Database Contient l'instande la la class Database
     */
    private static $database = null;

    /**
     * Pérmet d'initializer l'application
     */
    static function initialize(){
        session_start();
        self::loadConfig();
        self::getDatabase();
    }

    static function random($limit){
        $alpha = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $alpha = str_repeat($alpha, 100);
        $alpha = str_shuffle($alpha);
        $alpha = substr($alpha, 0, $limit);
        return $alpha;
    }

    /**
     * @param $field le parametre a parser
     *
     * @return mixed|string le fiels parser en slug
     */
    static function toSlug($field){
        $field = self::suppr_accents($field);
        $field = strtolower($field);
        $reset = [
            ',', ';', ':', '!', '?', '.', '/', '§'
        ];
        $field = str_replace($reset, '', $field);
        $field = str_replace(' ', '-', $field);
        return $field;
    }

    /**
     * @param $chaine string chainne a parser
     *
     * @return mixed chaine sans accent
     */
    static function suppr_accents($chaine) {
        $accents = array('À','Á','Â','Ã','Ä','Å','Ç','È','É','Ê','Ë','Ì','Í','Î','Ï','Ò','Ó','Ô','Õ','Ö','Ù','Ú','Û','Ü','Ý','à','á','â','ã','ä','å','ç','è','é','ê','ë','ì','í','î','ï','ð','ò','ó','ô','õ','ö','ù','ú','û','ü','ý','ÿ');
        $sans = array('A','A','A','A','A','A','C','E','E','E','E','I','I','I','I','O','O','O','O','O','U','U','U','U','Y','a','a','a','a','a','a','c','e','e','e','e','i','i','i','i','o','o','o','o','o','o','u','u','u','u','y','y');
        return str_replace($accents, $sans, $chaine);
    }

    /**
     * @return json Titre du site
     */
    static function getTitle(){
        return self::getConfig('title');
    }

    /**
     * Pérmet de demmander l'instance de la Database
     * @return string Return la Database
     */
    static function getDatabase(){
        if (self::$database == null) self::$database = new Database(self::getConfig('database'));
        return self::$database;
    }

    /**
     * Pérmet de savoir charger la config du site
     */
    static function loadConfig(){
        self::$config = file_get_contents("../config.json");
        self::$config = json_decode(self::$config, true);
    }

    /**
     * Getter de la config du site
     * @return json Return la config
     */
    static function getConfig($field = null){
        if ($field != null) return self::$config[$field];
        return self::$config;
    }

    /**
     * @param $field * Pérmet de debug proprement
     */
    static function debug($field){
        echo '<pre>';
        var_dump($field);
        echo '</pre>';
    }

}