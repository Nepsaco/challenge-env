<?php

class dbfunctions
{
    private $conn;

    // constructor
    public function __construct()
    {
        require_once 'dbconnect.php';
        $db = new dbconnect();
        $this->conn = $db->connect();
    }

    // destructor
    public function __destruct()
    {
    }

    public function insertNumber($number) {
	    $stmt = $this->conn->prepare("INSERT INTO NUMBERS(number) VALUES(?)");
	    $stmt->bind_param("i", $number);
	    $stmt->execute();
	    $stmt->close();
    }

    public function getNumberIds() {
        $stmt = $this->conn->prepare("SELECT id FROM NUMBERS");
        $stmt->execute();
	$res = $stmt->get_result();
	$ids = [];
	while ($id = mysqli_fetch_assoc($res)) {
	    $ids[] = $id['id'];
	}
	$stmt->close();
	return $ids;
    }

    public function getNumberById($id) {
	$stmt = $this->conn->prepare("SELECT number FROM NUMBERS WHERE id = ?");
	$stmt->bind_param("i", $id);
	$stmt->execute();
	$res = $stmt->get_result();
	$stmt->close();
	if (!$res)
	    return false;
	return mysqli_fetch_assoc($res)['number'];
    }
}
