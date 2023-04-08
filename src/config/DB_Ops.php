class DB_Ops {
    private $dbHost = 'localhost';
    private $dbUsername = 'bisho';
    private $dbPassword = 'blablabla';
    private $dbName = 'User';
    private $conn;

    public function __construct() {
        $this->conn = mysqli_connect($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
        if (!$this->conn) {
            die('Database connection failed: ' . mysqli_connect_error());
        }
    }

    
    public insertUser ($username, $fullName, $birthdate, $phone, $address, $password, $userImage, $email) {
        $stmt = $db->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
        $stmt->execute(array(':username' => $username, ':password' => $password));
        
        // Check if any rows were returned
        if ($stmt->rowCount() > 0) {
            return false;
        } else {
            mysqli_query($this->conn, "INSERT INTO users (username, fullName, birthdate, phone, address, password, userImage, email) VALUES ('$username', '$fullName', '$birthdate', '$phone', '$address', '$password', '$userImage', '$email')");
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