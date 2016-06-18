<?php

class MySqlDB {
    private $host;
    private $user;
    private $database;
    private $password;
    private $db;

    public function __construct($host, $database, $user, $password = ""){
        $this->host = $host;
        $this->database = $database;
        $this->user = $user;
        $this->password = $password;
    }

    public function connect(){
        $msg = 'Connect Success';
        try {
            $this->db = new PDO(
                'mysql:host=' . $this->host . ';dbname=' . $this->database,
                $this->user,
                $this->password
            );
        }catch (PDOException $e){
            $msg = "Connect error: ".$e->getMessage();
        }finally{
            echo $msg;
        }
    }

    public function querySelect($query){
        $dbRes = $this->db->query($query);

        $dbRes->setFetchMode(PDO::FETCH_CLASS, 'User');

        $arItems = [];
        while ($row = $dbRes->fetch()){
            $arItems[] = $row;
        }
        return $arItems;
    }

    public function add($data, $table){
        try {
            $sql = "INSERT INTO $table (";
            $count = count($data) - 1;
            foreach ($data as $key => $val) {
                $sql .= $key;
                if ($count !== 0) {
                    $sql .= ', ';
                }
                $count--;
            }
            $count = count($data) - 1;
            $sql .= ") VALUES (";
            foreach ($data as $key => $value) {
                $sql .= ":$key";

                if ($count !== 0) {
                    $sql .= ', ';
                }
                $count--;
            }
            $sql .= ")";
            echo $sql;
            $dbRes = $this->db->prepare($sql);
            $dbRes->execute($data);
        }catch (PDOException $e){
            $e->getMessage();
        }
    }

    public function disconnect(){
        $this->db = null;
    }

    public function __destruct(){
        $this->disconnect();
    }
}