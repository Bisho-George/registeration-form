<?php

class ImageUploader
{
 private $image;
 private $imageName;

 public function __construct($imageName)
 {
  $this->imageName = $imageName;
 }

 public function getImageName()
 {
  return $this->imageName;
 }

 public function uploadImage()
 {
    $res = "";
  $imageName = $_FILES['userImage']['name'];
  $imaget = $_FILES['userImage']['tmp_name'];
  $ext = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
  $allowed = array('jpg', 'jpeg', 'png', 'gif');
  if (!in_array($ext, $allowed)) {
    $res = "File type not allowed";
    return $res;
   exit;
  }
  $imageN = uniqid('IMG-', true) . "." . $ext;
  $this->imageName = $imageName;
  $targetPath = "../uploads/" . $imageN;

  if (move_uploaded_file($imaget, $targetPath) == true) {
    $res = "File uploaded successfully";
   //echo "File uploaded successfully";
  } else {
    $res = "File upload failed, please try again.";
  }
  return $res;
 }
}
