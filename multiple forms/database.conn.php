<?php
class db {

    private $host="localhost";
    private $username="root";
    private $password="";
    private $dbname="shop";
    protected function connect(){
        
    $database_name='mysql:host='.$this->host.';dbname='.$this->dbname;
    $conn= new PDO($database_name, $this->username, $this->password);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $conn;
    }
 }



?>