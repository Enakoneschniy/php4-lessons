<?php

class User {
    public static function create(Array $data){
        global $DB;
        $DB->add($data, 'users');
    }

    public static function all(){
        global $DB;
        return $DB->querySelect('SELECT * FROM users');
    }
}