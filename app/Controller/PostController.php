<?php
/**
 * Namespace Controller dans App
 */
namespace App\Controller;

/**
 * Utilisation des namespace exterieure
 */
use App\App;
use App\Model\PostModel;

/**
 * Class PostController
 * @package App\Controller
 */
class PostController extends Controller {

    /**
     * @var PostModel Model du controller PostController
     */
    private $model;

    /**
     * Fonction apeller par le router
     *
     * @param $slug string Slug du post
     * @param $id int Id du post
     */
    public function show($slug, $id){
        $this->model = new PostModel($slug, $id);
        $this->init();

        switch ($this->isPostContains()){
            case true:
                $this->load(self::class, [
                    'post' => $this->model->getPost()
                ]);
                break;
            default:
                break;
        }
    }

    /**
     * Initialization du controller
     */
    public function init(){
        $this->post = $this->model->getPost();
    }

    /**
     * @return bool Si le post et valable ou pas
     */
    public function isPostContains(){
        if (!$this->model->getPost()){
            header('Location: /nbc');
            return false;
        }
        return true;
    }

}