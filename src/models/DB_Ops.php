<?php
include '../models/api.php';
class DB_Ops {
    private $dbHost = 'localhost';
    private $dbUsername = 'bisho';
    private $dbPassword = 'blablabla';
    private $dbName = 'myUser';
    private $conn;

    public function __construct() {
        // not sure
        //$this->conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
        $this->conn = mysqli_connect($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
        
        if (!$this->conn) {
            die('Database connection failed: ' . mysqli_connect_error());
        }
    }

    //Don't forget userImg
    public function insertUser ($Data) {
        //$stmt = $this->conn->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
        //$stmt->execute(array(':username' => $username, ':password' => $password));
        //mysqli_select_db($this->conn, 'labuser') or die (' test will not open');
        $username =  $Data->getUserName();
        $query = "SELECT * FROM myuser WHERE username='$username' AND _password='$Data->getPassword()'";
        $result = mysqli_query($this->conn, $query) or die("Invalid query");
        $userImage ="";
        // Check if any rows were returned
        if (mysqli_num_rows($result) > 0) {
            return false;
        } else {
            mysqli_query($this->conn, "INSERT INTO myuser (username, fullName, birth_date, phone_number, _address, _password, image_path, email) VALUES ('$Data->getUserName()', '$Data->getFullName()', '$Data->getBirthdate()', '$Data->getPhone()', '$Data->getAddress()', '$Data->getPassword()', '$Data->getUserImage()', '$Data->getEmail()')");
            return true;
        }
    }
    public function login ($username, $password) {
        $stmt = $db->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
        $stmt->execute(array(':username' => $username, ':password' => $password));
        
        // Check if any rows were returned
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    public function __destruct() {
        $this->conn->close();
    }
    
}

?>