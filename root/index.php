<?php
use App\App;
use App\Autoloader;
use App\Router\Router;

define('DS', DIRECTORY_SEPARATOR); # Meilleur portabilité sur les différents systeme.
define('ROOT', dirname(dirname(__FILE__)).DS); # Pour se simplifier la vie

require ROOT . 'app/Autoloader.php';
Autoloader::register();
App::initialize();

$router = new Router($_GET['url']);

ob_start();

# Base
$router->get('/', 'Root#show');
$router->get('404', 'Nf#show');
$router->get('post/:slug-:id', 'Post#show');
$router->get('share/:type/:id', 'Share#show');
$router->get('posts', 'Postsf#show');

# Vote
$router->get('vote', 'Vote#show');
$router->post('vote', 'VotePost#show');
$router->get('vote/validate', 'Vote_validate#show');

# Shop
$router->get('shop', 'Shop#show');
$router->get('shop/register', 'Shop_register#show');
$router->post('shop/register', 'Shop_register#register');

$router->get('shop/success-:number', function ($number){
?>
    <div class="container">
        <div class="row">
            <br>
            <h1>Merci à vous ! Vous avez été crédité(e) de : <span class="text-bold"><?= $number ?></span> Iris.</h1>
        </div>
    </div>
<?php
});
$router->get('shop/dedipass-:number', 'Shop_alopass#show');
$router->get('shop/cb-:number', 'Shop_cb#show');
$router->post('shop/validate/dedipass-:number', 'Vote_validate_alopass#validate');
$router->post('shop/validate/cb-:number', 'Shop_validate_cb#validate');

# Login
$router->get('login', 'Login#show');
$router->post('login', 'LoginPost#show');
$router->get('logout', 'Logout#show');

# Admin
$router->get('admin/dashboard', 'Admin_dashboard#show');
$router->get('admin/post', 'Admin_post#show');
$router->get('admin/post/delete/:id', 'Admin_post_delete#show');
$router->get('admin/post/write', 'Admin_post_write#show');
$router->post('admin/post/write', 'Admin_post_writePost#show');

$router->run();
$yield = ob_get_clean();

# Parsage de l'url pour savoir quelle template charger
$p = explode('/', $_GET['url']);
$p = $p[0];

switch ($p){
    case 'admin':
        require ROOT . 'views/templates/admin.php';
        break;
    default:
        require ROOT . 'views/templates/default.php';
        break;
}