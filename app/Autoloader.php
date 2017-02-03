<?php
/**
 * Namespace app
 */
namespace App;

/**
 * Class Autoloader
 */
class Autoloader{

    /**
     * Enregistre notre autoloader
     */
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Inclue le fichier correspondant à notre classe
     * @param $class string Le nom de la classe à charger
     */
    public static function autoload($class){
        // var_dump($class); => Namespace

        // on explose notre variable $class par \
        $parts = preg_split('#\\\#', $class);

        // on extrait le dernier element
        $className = array_pop($parts);

        // on créé le chemin vers la classe
        // on utilise DS car plus propre et meilleure portabilité entre les différents systèmes (windows/linux)

        $path = implode(DS, $parts);
        $file = $className.'.php';

        $filepath = ROOT . strtolower($path) . DS . $file;

        // var_dump($filepath); => C:\xampp\htdocs\Labs\Eloyas\app\tester\Test.php
        //
        require $filepath;
    }

}
