<?php
include './user.php';
class DB_Ops
{
    private $dbHost = 'localhost';
    private $dbUsername = 'bisho';
    private $dbPassword = 'bisho1234';
    private $dbName = 'User';
    private $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
        if (!$this->conn) {
            die('Database connection failed: ' . mysqli_connect_error());
        }
    }

    public function insertUser(UserModel $user)
    {
        $username = $user->getUserName();
        $fullName = $user->getFullName();
        $birthdate = $user->getBirthdate();
        $phone = $user->getPhone();
        $address = $user->getAddress();
        $password = $user->getPassword();
        $userImage = $user->getImageName();
        $email = $user->getEmail();
        // Prepare the SQL statement with placeholders for the user data
        // Prepare the SQL statement with placeholders for the user data
        $stmt = $this->conn->prepare("SELECT * FROM user WHERE username = ? AND _password = ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if any rows were returned
        if ($result->num_rows > 0) {
            return false;
        } else {
            // Prepare the SQL statement with placeholders for the user data
            $stmt = $this->conn->prepare("INSERT INTO user (username, fullname, birth_date, phone_number, _address, _password, image_path, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssssss", $username, $fullName, $birthdate, $phone, $address, $password, $userImage, $email);
            $stmt->execute();
            return true;
        }
    }

    // public function login ($username, $password) {
    //     $stmt = $db->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
    //     $stmt->execute(array(':username' => $username, ':password' => $password));

    //     // Check if any rows were returned
    //     if ($stmt->rowCount() > 0) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

    public function __destruct()
    {
        $this->conn->close();
    }
}
