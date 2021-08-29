<?php
namespace Core;

use \PDO;
use \Exception;
use Core\Config;
use Core\H;

class DB{
    protected $dbh;
    protected $results;
    protected $lastInsertedId;
    protected $rowCount =0;
    protected $fetchType = PDO::FETCH_OBJ;
    protected $class;
    protected $error = false;
    protected $stmt;
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

    public function execute($sql, $bind=[]){
        $this->result = null;
        $this->lastInsertedId = null;
        $this->error = false;

        $this->stmt = $this->dbh->prepare($sql);
        if(!$this->stmt->execute($bind)){
            $this->error = true;
        }else{
            
            $this->lastInsertedId = $this->dbh->lastInsertId();
        }

        return $this;
    }

    public function query($sql, $bind=[]){
        $this->execute($sql, $bind);
        if(!$this->error){
            $this->rowCount = $this->stmt->rowCount();
            $this->results = $this->stmt->fetchAll($this->fetchType);
            
        }
        return $this;
    }

    public function insert($table, $values){
        $fields = [];
        $binds = [];
        foreach($values as $key => $value){
            $fields[] = $key;
            $binds[] = ":{$key}";
        }
        $fieldStr = implode('`, `', $fields);
        $bindStr = implode(', ', $binds);
        $sql = "INSERT INTO {$table} (`{$fieldStr}`) VALUES ({$bindStr})";
        $this->execute($sql, $values);
        return !$this->error;
    }

    public function update($table, $values, $conditions){
        $binds = [];
        $valueStr = "";
        foreach($values as $field => $value){
            $valueStr .= ", `{$field}` = :{$field}";
            $binds[$field] = $value;
        }
        $valueStr = ltrim($valueStr, ', ');
        $sql = "UPDATE {$table} SET {$valueStr}";

        if(!empty($conditions)){
            $conditionStr = " WHERE ";
            foreach($conditions  as $field => $value){
                $conditionStr .= "`{$field}` = :cond{$field} AND ";
                $binds['cond'.$field] = $value;
            }
            $conditionStr = rtrim($conditionStr, ' AND ');
            $sql .= $conditionStr;
           
        }
        $this->execute($sql, $binds);
        return !$this->error;

    }

    public function getResult(){
        return $this->results;
    }

    public function count(){
        return $this->rowCount;
    }

    public function lastInsertId(){
        return $this->lastInsertedId;
    }

    public function setClass($class){
        $this->class = $class;
    }

    public function setFetchType($type){
        $this->fetchType = $type;
    }

}
