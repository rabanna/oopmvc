<?php
namespace Core;

use \PDO;
use \Exception;
use Core\Config;
use Core\H;

class DB{
    protected $dbh;
    protected $results;
    protected $lastInserted;
    protected $rowCount =0;
    protected $fetchType = PDO::FETCH_OBJ;
    protected $class;
    protected $error = false;
    protected static $db;

    public function __construct(){
        $dbdriver = Config::get('db_drivers');
        $dbhost   = Config::get('db_host');
        $dbname   = Config::get('db_name');
        $dbuser   = Config::get('db_user');
        $dbpass   = Config::get('db_password');

        $options = [
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ];

        try {
            $this->dbh = new PDO("{$dbdriver}:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass, $options);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
            
        }

    }

    public static function getInstance(){
        if(!self::$db){
            self::$db = new self();
        }

        return self::$db;
    }

}
