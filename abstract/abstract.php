<?php
abstract class Database {
    abstract public function connection();
    public function disconnect()
    {
        // disconnect from database server
    }
}
class Mysql extends Database {
    public function connection()
    {

    }
}
// $db = new Database();
$mysql = new Mysql();