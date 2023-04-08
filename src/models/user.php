class User {
 private $username;
 private $fullName;
 private $birthdate;
 private $phone;
 private $address;
 private $password;
 private $userImage;
 private $email;

 public function __construct($username, $fullName, $birthdate, $phone, $address, $password, $userImage, $email) {
  $db = new DB_Ops();
  $db->inputUser($username, $fullName, $birthdate, $phone, $address, $password, $userImage, $email);
 }

}