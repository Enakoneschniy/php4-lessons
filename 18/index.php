<?php
ini_set('display_errors', 'on');
include "init.php";
global $DB;
$DB = new MySqlDB('localhost', 'php4', 'root');
$DB->connect();
echo "<hr>";
/*$items = $DB->querySelect('SELECT * FROM users');
foreach ($items as $item){
    echo $item->name,"<br>";
}
echo "<hr><pre>";
    print_r($items);
echo "</pre>";*/
echo "<hr>";
User::create([
    'name' => 'Evgeniy',
    'email' => 'evgeniy@gmail.com',
    'active' => 1,
    'password' => 'qwertyuiopasd'
]);

$users = User::all();
echo "<hr><pre>";
print_r($users);
echo "</pre>";
/*function calc($a, $b){
    if ($b == 0){
        throw new Exception('Divide by Zero!!');
    }
    return $a / $b;
}
echo "<hr>";
try{
    echo calc(6, 0);
}catch (Exception $e){
    echo $e->getMessage();
}*/