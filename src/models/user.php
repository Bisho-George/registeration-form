public class User {
 private $username;
 private $fullName;
 private $birthdate;
 private $phone;
 private $address;
 private $password;
 private $userImage;
 private $email;

 public function __construct($username, $fullName, $birthdate, $phone, $address, $password, $userImage, $email) {
  $this.username = $username;
  $this.fullName = $fullName;
  $this.birthdate = $birthdate;
  $this.phone = $phone;
  $this.address = $address;
  $this.password = $password;
  $this.userImage = $userImage;
  $this.email = $email;
 }

}