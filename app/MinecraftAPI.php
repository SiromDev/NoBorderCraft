<?php
/**
 * Namespace App
 */
namespace App;

/**
 * Class MinecraftAPI
 * @package App
 */
class MinecraftAPI{

    /**
     * @var string Ip du server
     */
    private $ip = 'nobordercraft.fr';

    /**
     * @var int Port du server
     */
    private $port = 25565;

    /**
     * @var array Information du server
     */
    private $table = [];

    /**
     * MinecraftAPI constructor.
     *
     * @param $ip string Ip du server
     * @param $port integer Port du server
     */
    public function __construct($ip, $port){
        $this->ip = $ip;
        $this->port = $port;

        $this->init();
    }

    /**
     * Initialization de la variable table
     */
    public function init(){
        $this->table = [
            "online_players" => $this->getUrl('playeronline'),
            "max_players" => $this->getUrl('maxplayer'),
            "version" => $this->getUrl('version'),
            "motd" => $this->getUrl('motd'),
            "icon" => $this->getUrl('favicon'),
            "ping" => $this->getUrl('ping')
        ];
        foreach ($this->table as $key => $value){
            if (empty($value)) $this->table[$key] = 'Error ip not found';
        }
    }

    /**
     * @return array La variable table
     */
    public function getTable(){
        return $this->table;
    }

    /**
     * @param $field string Information a récuperer
     *
     * @return mixed L'information demmander
     */
    public function get($field){
        return $this->table[$field];
    }

    /**
     * @param $field string file get content
     *
     * @return string Les paramétre
     */
    private function getUrl($field){
        $param = file_get_contents("http://minecraft-api.com/api/ping/{$field}.php?ip={$this->ip}&port={$this->port}");
        return empty($param) ? 'Error' : $param;
    }

}