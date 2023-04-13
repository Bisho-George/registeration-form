<?php
include '../models/DB_Ops.php';
include '../models/user.php';
include './upload.php';
class userController {
    //private $response;
    public function insert($Data) {
        $db = new DB_Ops();
        $msg="";
        if($db->insertUser($Data) == false)
        {
            $msg = 'Username is already exists';
            // header("Location: ../../index.php");
        }
        else{
            $msg = 'Registered sucessfully';
            //$this->getActorDate($Data);
        }
        return $msg;
    }
    public function getActorDate($Data)
    {
        
        $actorData = new ApiModel();
        $customerBirtDate = $Data->getBirthdate();
        echo'dsada';
        //getActor();
        echo'zzzz';

        /*$actors = $actorData->getData($customerBirtDate);
        $actorLen = count($actors);
        echo'<pre>';
        print_r($actors);
        echo '</pre>';
        echo $actorLen;
        $result = [];
        for($i = 0; $i < $actorLen; $i++)
        {
            $nm = substr($actors[$i], 6, -1);
            $result []= $actorData->getActorDetails($actors[$i]);
            sleep(1);

        }
        //var_dump($result);
        echo '<pre>';
        print_r($result);
        echo '</pre>';
        //echo $result;*/
    }
    public function register()
    {
        $response;
        $username = $_POST['username'];
        $full_name = $_POST['fullName'];
        $birthdate = $_POST['birthDate'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        $userImage = $_FILES['userImage']['name'];
        $email = $_POST['email'];
        $Data = new UserModel($username, $full_name, $birthdate,
        $phone, $address, $password, $userImage, $email);
        $formMsg = $this->insert($Data);
        $imageFile = new ImageUploader($userImage);
        $res = $imageFile->uploadImage();
        $response = array(
            "imgMsg" => $res,
            "formMsg" => $formMsg
        ); 
        echo json_encode($response);
    }

}
$userController = new userController();
$userController->register();


?>