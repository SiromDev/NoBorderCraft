<?php
/**
 * Namespace Model dans App
 */
namespace App\Model;

/**
 * Utilisation des namespace exterieure
 */
use App\App;

/**
 * Class PostModel
 * @package App\Model
 */
class PostModel extends Model {

    /**
     * @var $slug string Slug du post
     */
    private $slug = null;

    /**
     * @var $id int Id du post
     */
    private $id = null;

    /**
     * @var $post \PDOStatement Statement du post
     */
    private $post = null;

    /**
     * PostModel constructor.
     *
     * @param $slug string Slug du post
     * @param $id int Id du post
     */
    public function __construct($slug, $id){
        $this->slug = $slug;
        $this->id = $id;
        $this->post = App::getDatabase()->prepare("SELECT * FROM posts WHERE id = ?", [$this->id], true);
    }

    /**
     * @return null|\PDOStatement getter du post
     */
    public function getPost(){
        if ($this->slug != App::toSlug($this->post->title)) return null;
        return $this->post;
    }

}