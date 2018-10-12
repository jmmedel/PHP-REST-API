<?php 
/*
|--------------------------------------------------------------------------
| Database Connection  
|--------------------------------------------------------------------------
|
| 
| This is where you put you database Connection password and database name
| 
|
|
*/
  class Database {
    // DB Params
   
/*
|--------------------------------------------------------------------------
| // DB Params
|--------------------------------------------------------------------------
|
| 
| 
| All Database need to connect
|
|
*/

    private $host = 'localhost';
    private $db_name = 'myblog';
    private $username = 'root';
    private $password = '';
    private $conn;

    // DB Connect
    
/*
|--------------------------------------------------------------------------
| DB Connect
|--------------------------------------------------------------------------
|
| 
| Connect to the Database using PDO
| 
| 
|
*/

    public function connect() {
      $this->conn = null;

      try { 
        $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        echo 'Connection Error: ' . $e->getMessage();
      }

      return $this->conn;
    }
  }