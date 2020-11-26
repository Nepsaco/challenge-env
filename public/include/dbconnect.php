<?php
class dbconnect {
    private $conn;
 
    // Connecting to database
    public function connect() {
        // Connecting to mysql database
        $this->conn = new mysqli('db', 'root', 'VNLch@LLeng3', 'testdata');
         
	// return database handler
        return $this->conn;
    }
}

?>
