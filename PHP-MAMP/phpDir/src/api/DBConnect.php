<?php
//DB connection using PDO
class DBConnect {
    private $server = 'db';
    private $dbname = 'fullstack';
    private $user = 'root';
    private $pass = 'lionPass';

function connect() {
    try {
        $conn = new PDO ('mysql:host=' .$this->server .';dbname=' . $this->dbname,
      $this->user, $this->pass);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;
    } catch (\Exception $e) {
      echo "Database Error: " . $e->getMessage();
    }
  }
}