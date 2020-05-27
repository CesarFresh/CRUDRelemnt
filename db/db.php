<?php
class DB{
    private $host = 'localhost';
    private $username = 'root';
    private $password = 'root';
    private $database = 'CRUD';

    protected function connect(){
        $connect = mysqli_connect($this->host,$this->username,$this->password,$this->database);
        return $connect;
    }
}
?>