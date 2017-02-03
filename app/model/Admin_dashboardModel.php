<?php
/**
 * Namespace Model dans App
 */
namespace App\Model;

/**
 * Class Admin_dashboardModel
 * @package App\Model
 */
class Admin_dashboardModel extends Model {

    /**
     * Admin_dashboardModel constructor.
     */
    public function __construct(){

    }

    public function isAuth(){
        if (!isset($_SESSION['auth'])) return false;
        return true;
    }

}